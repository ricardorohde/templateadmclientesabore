<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-camera fa-fw"></i> Cadastrar Banner
	    	    <a href="banners.php"><span class="pull-right text-muted small"><button class="btn btn-success">Exibir banners</button></a>
    </h1><br>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	Escolha três imagens para subir para seu site  (Dimensões mínimas : Altura = 600px  //  Largura = 1024px)
				    </div>

                    <div class="panel-body">
                        <div class="row">

                                <div class="col-lg-6">
                                    <form role="form">
	                                    <div class="form-group">
                                            <label> Imagem para : Banner </label>
                                            <input type="file" required>
                                       	</div>
                                       		<br>
                                       	<div>
                                        <button type="submit" class="btn btn-success">Cadastrar Banners</button>
	                                    <button type="reset" class="btn btn-danger">Limpar files</button>
	                                    </div>
										
                               		</form>
                               		
                        </div>
                    </div>
                </div>
            </div>
      	</div>
</div>







<?php require_once('footer.php'); ?>