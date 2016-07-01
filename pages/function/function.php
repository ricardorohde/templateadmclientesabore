<?PHP 
##PLUGIN DE FUNCOES PARA CONEXAO COM API

function RetornaURL()
{
    $scriptURL = $_SERVER['SCRIPT_NAME'];
    $array = explode('/', $scriptURL);
    $arquivo = end($array);
    $arquivo = str_replace('.php', '', $arquivo);    
    return $arquivo;
}

##ENVIA REQUISICAO PARA API 
function GoCURL($campos, $url)
{

    //url do destino da requsiçao, equivalente ao "action" de um formulário
    $url = 'http://localhost/API/'.$url;

    $token = GenerateToken();
    
    $campos['TokenRequest'] = $token;    

    $string_campos = '';
    foreach($campos as $name => $valor) {
        $string_campos .= $name . '=' . $valor . '&';
    }
    $string_campos = rtrim($string_campos,'&');

    $ch = curl_init();
    //configurando as opções da conexão curl
    curl_setopt($ch,CURLOPT_URL,$url);
    //este parâmetro diz que queremos resgatar o retorno da requisição
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch,CURLOPT_POST,count($campos));
    curl_setopt($ch,CURLOPT_POSTFIELDS,$string_campos);
    //manda a requisição post
    $resultado = curl_exec($ch);
    //echo '<Pre>';print_r($resultado);
    curl_close($ch);
    $json = json_decode($resultado,1);
    
    if(!$json['request'])
    {          
        echo '<Pre>';print_r($resultado);
        echo '<Pre>';print_r($json);
        echo utf8_decode("ocorreu um erro na sua conexão, tente novamente");
        exit;
    }    

    return $json;
}


##GERANDO TOKEN DE CONEXAO COM API
function GenerateToken()
{
        $TokenRequest = '';
        $caracteres = '';       
        $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';        
        $caracteres .= $lmai;
        $caracteres .= $num;
        
        $len = strlen($caracteres);                 
        for ($i=0; $i < 15; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }
        
        $TokenRequest .= 'C';

        for ($i=0; $i < 15; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }

        $TokenRequest .= 'C';

        for ($i=0; $i < 10; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }

        $TokenRequest .= date('h');
        $TokenRequest .= 'B';

        for ($i=0; $i < 7; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }

        $TokenRequest .= date('i');

        for ($i=0; $i < 5; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }

        $TokenRequest .= date('s');

        for ($i=0; $i < 2; $i++) 
        { 
            $rand = mt_rand(1, $len);       
            $TokenRequest .= $caracteres[$rand-1];
        }
        
        return $TokenRequest;
    }

function GoUploadImg($FILE, $tipo)
{
    $arquivo_tmp = $FILE[ 'tmp_name' ];
    $nome        = $FILE[ 'name' ];
    
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );

    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) 
    {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid(time()) . '.'.$extensao;

        $path = getcwd();        

        // Concatena a pasta com o nome
        $destino = $path."\imagens\\".$tipo ."\\";        
        if(!file_exists($destino))
        {
            mkdir($destino, 0777);
        }

        $destino = $path."\imagens\\".$tipo ."\\". $novoNome;        

        // tenta mover o arquivo para o destino
        if (@move_uploaded_file ( $arquivo_tmp, $destino ) ) 
        {
            return array('mensagem'=>'Upload realizado com sucesso', 'success'=>true, 'nome'=>$tipo.'/'.$novoNome);
        }
        else
        {
            return array('mensagem'=>'Ocorreu um erro no envio da imagem. Tente novamente', 'success'=>false);
        }        
    }
    else
    {
        return array('mensagem'=>'extensão inválida', 'success'=>false);
    }
}

?>