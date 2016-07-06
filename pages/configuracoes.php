<?php require_once('controller/perfil_controller.php'); ?>
<?php require_once('header.php'); ?>

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

        <?PHP if($success){ ?>
        <div class="alert alert-success">
          <?PHP echo $mensagem; ?>
        </div>
        <?PHP } ?>
        

        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action="configuracoes.php" method="post">
                <div class="form-group">
                 <select class="form-control" required="required" id="busca">
                   <option value="" style="display:none">Escolha a cor de seu site</option>
                   <option value="vermelho" id="">Vermelho</option>
                   <option value="padrao" id="">Padrão</option>
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

              <div class="form-group">
                <label> Exibir site, ao inicializar ? </label>
                <label class="radio-inline">
                  <input type="radio" value="site_sim" name="site">Sim
                </label>
                <label class="radio-inline">
                  <input type="radio" name="site" value="site_nao" checked>Não
                </label>
              </div>

              <div class="form-group">
                <label>Taxa de entrega fixa ?</label>
                <label class="radio-inline">
                  <input type="radio" value="tx_fixa1" name="taxa_fixa">Sim
                </label>
                <label class="radio-inline">
                  <input type="radio" name="taxa_fixa" value="tx_fixa2" checked>Não
                </label>
              </div>

              
              <?PHP if($editar){ ?>
              <input type="hidden" name="editar" value="editar">
              <input type="hidden" name="id" 
              value="<?PHP echo $clientes['dados']['Cliente']['id'];?>">
              <?PHP } ?>

              
              
              <div align="center">
                <br><br>
                <button type="submit" class="btn btn-success">Alterar</button>
                <button type="reset" class="btn btn-danger">Limpar  </button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<?php require_once('footer.php'); ?>