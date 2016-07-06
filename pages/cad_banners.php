<?php require_once('controller/banner_controller.php'); ?> 
<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
  <h1 class="page-header"> <i class="fa fa-camera fa-fw"></i> Cadastrar Banner
    <a href="banners.php"><span class="pull-right text-muted small"><button class="btn btn-success">Exibir banners</button></a>
  </h1><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #2c3e50; color: white;">
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
              <form role="form" action="cad_banners.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['titulo']; ?>" <?PHP } ?> placeholder="Titulo que será exibido em seu banner." name="titulo" required><br>

                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['subtitulo']; ?>" <?PHP } ?> placeholder="Subtitulo que será exibido em seu banner." name="subtitulo"                                 required><br>

                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['palavra_negrito']; ?>" <?PHP } ?> placeholder="Palavra em Negrito." name="palavra_negrito" required><br>

                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['palavra_vermelho']; ?>" <?PHP } ?> placeholder="Palavra em Vermelho." name="palavra_vermelho" required><br>

                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['botao']; ?>" <?PHP } ?> placeholder="Botão que será exibido em seu banner." name="botao" required><br>

                <input class="form-control" <?PHP if($editar){ ?> value="<?PHP echo $banner['dados']['ClienteBanner']['link_botao']; ?>" <?PHP } ?>placeholder="Link do botão." name="link_botao" required><br>

                <div class="form-group">
                <label>Imagem do Banner</label>
                  <input type="file" name="img" id="img">
                </div>

                <?PHP if($editar){ ?>
                  <input type="hidden" name="editar" value="editar"> 
                  <input type="hidden" name="id" value="<?PHP echo $banner['dados']['ClienteBanner']['id']; ?>"> 
                  <img src="<?PHP echo $banner['dados']['img_banner']; ?>" width="200" height="100">
                <?PHP }else{ ?>
                  <img src="<?PHP echo $bannerIMG['dados']['img_banner']; ?>" width="200" height="100">
                  
                <?PHP } ?>

              </div>                               	
              <br>
              <div>
                <button type="submit" class="btn btn-success" name="btn_cadastrar_banner" value="cadastrar"><?PHP if($editar){ echo 'Editar'; ?><?PHP } else {echo 'Cadastrar';} ?></button>
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