<?php
require_once('config_adm.php');
require_once "PagSeguroLibrary/PagSeguroLibrary.php";	

$permissao = $_SESSION['UsuarioCliente']['permissao'];
$permissaoClienteMarcado = strstr($permissao, 'CREDITOS');
if(empty($permissaoClienteMarcado))
{
    header("Location: $host/pages");
}
$pagina = RetornaURL();
$cliente_id = $_SESSION['UsuarioCliente']['cliente_id'];
$id= $_SESSION['UsuarioCliente']['cliente_id'];
$error = false;
$success= false;
$mensagem = '';
$clientes = array();

if(!empty($id))
{
    $arrayDados = array('cliente_id'=>$cliente_id, 'id'=>$id);
    $clientes = GoCURL($arrayDados, 'cliente/find_first');
    $editar = true;    
}

####AQUI É O PAGSEGURO

if($_SERVER['REQUEST_METHOD'] == 'POST') {
 

    $post = filter_input_array(INPUT_POST,
                            array(
                                'nome'  => FILTER_SANITIZE_STRING,
                                'email' => FILTER_SANITIZE_STRING,
                                'ddd'   =>  FILTER_SANITIZE_ENCODED,
                                'telefone' =>FILTER_SANITIZE_STRING,
                                'rua'     =>FILTER_SANITIZE_STRING,
                                'numero' =>FILTER_SANITIZE_STRING,
                                'complemento' =>FILTER_SANITIZE_STRING,
                                'bairro' =>FILTER_SANITIZE_STRING,
                                'cidade' =>FILTER_SANITIZE_STRING,
                                'uf' =>FILTER_SANITIZE_STRING,
                                'cep' =>FILTER_SANITIZE_STRING
                                )
                            );
 
    /******************************************************************************
     * Agora vamos vamos integrar com o pagseguro
     *
     ******************************************************************************/
 
    //Instancia a Classe PaymenteRequest
    $pagseguro = new PagSeguroPaymentRequest();
 
    //Informa o tipo de moeda
    $pagseguro->setCurrency('BRL');
 
    /** Informo o Tipo de Frete:
     * 1 => Encomenda normal (PAC)
     * 2 => SEDEX
     * 3 => Tipo de frete não especificado
     */
    $pagseguro->setShippingType(3);
 
    /**
     * Informo o código de referência do Pedido.
     * É importante para identificar o pedido, e também caso queira trabalhar
     * com retorno automatico.
     * Se estivesse trabalho com tabelas pra guardar o pedido
     * seria o ID do Pedido.
     * Nesse exemplo irei colocar um valor aleatório
     */
    $pagseguro->setReference(uniqid(true));
 
    /**
     * Informo os dados do Cliente
     * Nome:
     * Email:
     * DDD:
     * Telefone : (valor numerico , exemplo: 6998522)
     */
    $pagseguro->setSender($post['nome'], $post['email'],
                                $post['ddd'], $post['telefone']);
 
    /**
     * Informo as informações do endereço do cliente
     * CEP
     * Rua
     * Numero
     * Complemento
     * Bairro
     * Cidade
     * Estado
     * Pais
     */
    $pagseguro->setShippingAddress($post['cep'], $post['rua'], $post['numero'],
                                                $post['complemento'],  $post['bairro'],
                                                $post['cidade'],$post['uf'], 'BRA');
 
    /**
     * Iremos nessa parte selecionar os produtos e adicionar
     */
 
    //Resgata os ID's, e transforma em string, separado por virgula
    $ids = implode(', ',array_keys($_SESSION['carrinho']));
 
    //Cria SQL para seleciona os produtos, filtrando pelo ID dos produtos
    //Dessa maneira irei realizar apenas uma consulta no banco de dados
    $sql   = sprintf("SELECT * FROM produtos WHERE id IN (%s)", $ids);
 
    //Executa o SQL
    $query  = mysql_query($sql);
 
    //Resgata os Valores da tabela produtos
    while ($row = mysql_fetch_assoc($query)){
        $id      = $row['id'];
        $produto = $row['produto'];
        $qtd     = $_SESSION['carrinho'][$id];
        $preco   = $row['preco'];
        $peso    = $row['peso'];
 
        /**
         * Agora vamos adicionar os produtos.
         * Algo importante é relacionado ao peso do produto.
         * Esse valor terá que ser inteiro. Então 0,300 será 300.
         * As informações a serem adiciona no metodo addItem
         * ID
         * Produto
         * Quantidade
         * Valor
         * Peso
         */
        $pagseguro->addItem($id, $produto, $qtd, $preco, $peso);
 
    }
 
    /**
     * Iremos agora utilizar a classe AccountCredentials para adicionar as nossas credencias
     * Quer seria o email cadastrado no pagseguro, e TOKEN gerado no pagseguro
     */
    $credenciais = new PagSeguroAccountCredentials('seu_email@_no_pagseguro.com', 'VALOR DO TOKEN');
 
    /**
     * Agora vamos adicionar as credenciais informada na classe AccountCredentials
     * Com isso será gerado uma URL para o pagseguro
     *
     */
    $url = $pagseguro->register($credenciais);
 
    //Agora vamos redirecionar para o PagSeguro
    header("Location: $url");
 
}





?>