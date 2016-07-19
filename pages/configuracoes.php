<?php require_once('controller/configuracoes_controller.php'); ?>
<?php require_once('header.php'); ?>
<?php
$success = $_GET['success'];
$edicao = $_GET['edicao'];
$registro = $_GET['registro'];
?>
<div id="page-wrapper"><br>
  <h1 class="page-header"> <i class="fa fa-gear fa-fw"></i> Configurações
  </h1>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"style="background-color: #2c3e50; color: white;">
          Configurações do Site
        </div>

        <?PHP if($error){ ?>
        <div class="alert alert-danger">
          <?PHP echo $mensagem; ?>
        </div>
        <?PHP } ?>

        <?PHP if($success==true && $edicao==true){ ?>
        <div class="alert alert-success">
          <?PHP echo 'Textos editados com sucesso !'; ?>
        </div>
        <?PHP } ?>
        <?PHP if($success==true && $registro==true){ ?>
        <div class="alert alert-success">
          <?PHP echo 'Textos cadastrados com sucesso !'; ?>
        </div>
        <?PHP } ?>
        

        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action="configuracoes.php" method="post">
              <em>Escolha a cor de seu site </em>
                <div class="form-group">
                 <select class="form-control" required="required" id="cor" name="cor">
                   <option value="" style="display:none">Escolha a cor de seu site</option>
                   <option <?php if ($clientes['dados']['Cliente']['cor'] == 'green') echo 'selected';?> value="green">Verde</option>
                   <option <?php if ($clientes['dados']['Cliente']['cor'] == 'red') echo 'selected';?> value="red">Vermelho</option>
                   <option <?php if ($clientes['dados']['Cliente']['cor'] == 'orange') echo 'selected';?> value="orange">Laranja</option>
                   <option <?php if ($clientes['dados']['Cliente']['cor'] == 'blue') echo 'selected';?> value="blue">Azul</option>
                 </select>
               </div><br>

               <div class="form-group">
                <label>Sistema de SMS ?</label>
                <label class="radio-inline">
                  <input type="radio" value="S" name="sms" <?PHP 
                  if($editar)
                  { 
                    if($clientes['dados']['Cliente']['sms'] == 'S') 
                      echo "checked"; 
                  } 
                  ?>>Sim
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sms" value="N" <?PHP 
                  if($editar)
                  { 
                    if($clientes['dados']['Cliente']['sms'] == 'N') 
                      echo "checked"; 
                  } else {
                    echo "checked";
                  }
                  ?>
                  >Não
                </label>
              </div> 
              
              <div class="form-group">
                <label>Dados compartilhado?</label>
                <label class="radio-inline">
                  <input type="radio" value="S"  <?PHP 
                  if($editar)
                  { 
                    if($clientes['dados']['Cliente']['bd_compartilhado'] == 'S') 
                      echo "checked"; 
                  }
                  ?>
                  name="bd_compartilhado">Sim
                </label>
                <label class="radio-inline">
                  <input type="radio" name="bd_compartilhado" value="N" <?PHP 
                  if($editar)
                  { 
                    if($clientes['dados']['Cliente']['bd_compartilhado'] == 'N') 
                      echo "checked"; 
                  } else {
                    echo "checked";
                  }
                  ?>
                  >Não
                </label>
              </div>             


              
              <?PHP if($editar){ ?>
              <input type="hidden" name="editar" value="editar">
              <input type="hidden" name="id" 
              value="<?PHP echo $clientes['dados']['Cliente']['id'];?>">
              <?PHP } ?>

              
              
              <div align="center">
                <button type="submit" class="btn btn-success">Salvar alterações</button>
                <?php if(!$editar){ ?>
                  <button type="reset" class="btn btn-danger">Limpar</button>
                <?php }?>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<?php require_once('footer.php'); ?>