<?php require_once('controller/banner_controller.php'); ?>
<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-camera fa-fw"></i> Cadastrar Banner
	    	    <a href="banners.php"><span class="pull-right text-muted small"><button class="btn btn-success">Exibir banners</button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          Cadastro de Banners
                   </div>

                    <?PHP if($error){ ?>
                    <div class="alert alert-danger">
                            <?PHP echo $mensagem; ?>
                            </div>
                    <?PHP } ?>

                    <?PHP if($success){ ?>
                      <div class="alert alert-success">
                          <?PHP echo $mensagem; ?>
                      </div>
                    <?PHP } ?>

                    <div class="panel-body">
                        <div class="row">

                                <div class="col-lg-6">
                                    <form role="form" action="cad_banners.php" method="post">
	                                    
                                      
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Titulo que será exibido em seu banner." name="titulo" required><br>
                                            <input class="form-control" placeholder="Subtitulo que será exibido em seu banner." name="subtitulo" required><br>
                                            <input class="form-control" placeholder="Botão que será exibido em seu banner." name="botao" required><br>
                                            <input class="form-control" placeholder="Link do botão." name="link_botao" required><br>

                                       
                                            <label> Imagem para : Banner </label>
                                            <input type="file" required name="banner1">
                                        </div>
                                       	
                                        <br>
                                      <div>
                                        <button type="submit" class="btn btn-success" name="btn_cadastrar_banner" value="cadastrar">Cadastrar</button>
	                                      <button type="reset" class="btn btn-danger">Limpar</button>
	                                    </div>
										
                               		</form>
                               		
                        </div>
                    </div>
                </div>
            </div>
      	</div>
</div>







<?php require_once('footer.php'); ?>