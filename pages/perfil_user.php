<?php require_once('controller/perfil_controller.php'); ?>
<?php require_once('header.php'); ?>
<script>
    $(function(){
        $("#valor_km_entrega_2, #valor_km_entrega").maskMoney({symbol:'R$ ', 
          showSymbol:true, thousands:'.', decimal:',', symbolStay: false});
            //Inicio Mascara Telefone
        $("#celular").mask("(99) 9999-99999");
        $("#fax").mask("(99) 9999-9999");
        $("#telefone2").mask("(99) 9999-9999");
        $("#telefone1").mask("(99) 9999-9999");
        $("#documento").mask("99.999.999/9999-99");
      });
</script>
<div id="page-wrapper"><br>
  <h1 class="page-header"> <i class="fa fa-user fa-fw"></i>Perfil Empresa
  </h1>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #2c3e50; color: white;">
          Editar os dados do Perfil da Empresa 
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
              <form role="form" action="perfil_user.php" method="post">
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Documento </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Documento" required name="documento" id="documento" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['documento']; ?>">
                  <?PHP }?>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Razão Social </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Razão social ( Nome empresa ) " required name="razao_social"value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['razao_social']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Email Responsável </em>
                  <?PHP }?>
                  <input type="email" class="form-control" id = "email" placeholder="Email Responsavel" required name="email_responsavel" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['email_responsavel']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Nome do Responsável </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Nome Titular" required name="responsavel" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['responsavel']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Nome Fantasia </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Nome Fantasia" required name="nome_fantasia" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['nome_fantasia']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Celular do responsável </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Telefone Celular" id="celular" required name="celular" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['celular']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Telefone Comercial </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Telefone Comercial" required id="telefone1" name="telefone1" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['telefone1']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Telefone Alternativo </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Telefone Alternativo" id="telefone2"  name="telefone2" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['telefone2']; ?>"
                  <?PHP }?>>
                </div>
                <div class="form-group">
                  <?PHP if($editar){ ?>
                  <em> Fax </em>
                  <?PHP }?>
                  <input class="form-control" placeholder="Fax" id ="fax" required name="fax" value= <?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['fax']; ?>"
                  <?PHP }?>>
                </div>
                
                <?PHP if($editar){ ?>
                <em> Km de entrega Máxima </em>
                <?PHP }?>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="Km de entrega Máxima" min="0" name="km" value =<?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['km']; ?>"
                  <?PHP }?>>
                  <!-- Aqui só da required se a opção de taxa fixa estiver como Não -->
                </div>
                
                <?PHP if($editar){ ?>
                <em> Valor Cobrado por km </em>
                <?PHP }?>
                <div class="form-group input-group">
                  <span class="input-group-addon">R$</span>
                  <input type="text" class="form-control" placeholder="Valor Cobrado por KM (EX :58.40 " name="valor_km_entrega" id="valor_km_entrega" value=<?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['valor_km_entrega']; ?>"
                  <?PHP }?>>
                  <!-- Aqui só da required se a opção de taxa fixa estiver como Não -->
                </div>  
                <?PHP if($editar){ ?>
                <em> Valor Taxa Fixa </em>
                <?PHP }?>  
                <div class="form-group input-group">
                  <span class="input-group-addon">R$</span>
                  <input type="text" class="form-control" placeholder="Valor taxa Fixa (EX :10.00) " name="valor_km_entrega_2" id="valor_km_entrega_2" value=<?PHP if($editar){ ?>
                  "<?PHP echo $clientes['dados']['Cliente']['valor_km_entrega_2']; ?>"
                  <?PHP }?>>
                  <!-- Aqui só da required se a opção de taxa fixa estiver como Sim --> 
                </div>   

                

                

                <?PHP if($editar){ ?>
                <input type="hidden" name="editar" value="editar">
                <input type="hidden" name="id" 
                value="<?PHP echo $clientes['dados']['Cliente']['id'];?>">
                <?PHP } ?>
                
                <div align="center">
                  <br>
                  <button type="submit" class="btn btn-success" name="btn_cadastrar_perfil" value="cadastrar"><?PHP if($editar){ echo 'Editar'; ?><?PHP } else {echo 'Salvar';} ?></button>
                  <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<?php require_once('footer.php'); ?>