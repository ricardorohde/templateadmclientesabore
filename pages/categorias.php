<?php require_once('controller/categorias_controller.php'); ?>
<?php require_once('header.php'); ?>
<script>
    function jsExcluir(categoria)
    {        
        document.formCategoriaListar.action = "categorias.php";
        document.getElementById("categoriaID").value = categoria;
        document.getElementById("formCategoriaListar").submit();
    }

    function jsEditar(categoria)
    {           
        document.formCategoriaListar.action = "cad_categorias.php";
        document.getElementById("categoriaID").value = categoria;
        document.getElementById("formCategoriaListar").submit();
    }
</script>
<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-list-ul fa-fw"></i> Categorias
	     <a href="cad_categorias.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar nova categoria</button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-6">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                           
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Categoria</th>
                                    <th>Edição</th>
                                </tr>
                                <form id="formCategoriaListar" name="formCategoriaListar" action="categorias.php" method="post">
                                <?PHP foreach($listaCategorias['dados'] as $categoria){?>                                                                                                                      
                                    <tr>
                                        <td><?PHP echo $categoria['Categoria']['nome']; ?></td>
                                        <td>
                                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $categoria['Categoria']['id'] ?>');">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </a> 
                                            <a href="javascript:void(0);" onclick="jsEditar('<?PHP echo $categoria['Categoria']['id'] ?>');">
                                                <i class="fa fa-pencil fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>                                       
                                <?PHP } ?>  
                                <input type="hidden" name="categoriaID" value="" id="categoriaID">                                                   
                        </table>
                    </div>
            </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>