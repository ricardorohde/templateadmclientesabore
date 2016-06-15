<?php require_once('controller/produtos_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>
<script>
    function jsExcluir(produto)
    {             
        
        document.formProdutoListar.action = "produtos.php";
        document.getElementById("produtoID").value = produto;
        document.getElementById("formProdutoListar").submit();
        
    }

    function jsEditar(produto)
    {           
        document.formProdutoListar.action = "cad_produtos.php";
        document.getElementById("produtoID").value = produto;
        document.getElementById("formProdutoListar").submit();
   
    }

</script>
<div id="page-wrapper"><br>
            <h1 class="page-header"> <i class="fa fa-edit fa-fw"></i> Produtos
        	     <a href="cad_produtos.php"><span class="pull-right text-muted small">
                 <button class="btn btn-success">Cadastrar novo produto</button></span></a>
            </h1><br>
      	<div class="row">
                    <div class="table-responsive">

                            <div class="col-lg-3"> 
                                 <div class="form-group">
                                    <select class="form-control" required="required" id="produto_busca">
                                    <option value="" style="display:none">Escolha um Método de busca</option>
                                    <option value="categoria">Categoria</option>
                                    <option value="produto" >Produto</option>
                                    <option value="valor" >Valor</option>
                                    </select>
                                 </div> 
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" placeholder="Categoria" id="inputcategoria" style="display:none">
                                <input class="form-control" placeholder="Produto" id="inputproduto" style="display:none">
                                <input class="form-control" placeholder="Digite o valor desse produto (números)" id="inputvalor" style="display:none">
                            </div>  


                            <br>
                        <table class="table table-striped table-bordered table-hover">
                            
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Cat.</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Edição</th>
                                </tr>
                                <form id="formProdutoListar" name="formProdutoListar" action="produtos.php" method="post">
                                    <?PHP foreach($listaProdutos['dados'] as $produtos){?>
                                    <tr>
                                        <td><?PHP echo $produtos['Categoria']['nome']; ?></td>
                                        <td><?PHP echo $produtos['Produto']['nome']; ?></td>
                                        <td><?PHP echo $produtos['Produto']['valor']; ?></td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $produtos['Produto']['id'] ?>');">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </a> 
                                            <a href="javascript:void(0);" onclick="jsEditar('<?PHP echo $produtos['Produto']['id'] ?>');">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>
                                   <?PHP } ?>  
                              <input type="hidden" name="produtoID" value="" id="produtoID">
                        </table>
                </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>