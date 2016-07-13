<?php require_once('controller/perfil_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/cad_campos.js"></script>
<script>
  $(function(){
    $("#credito").maskMoney({symbol:'R$ ', 
      showSymbol:true, thousands:'.', decimal:',', symbolStay: false});
  });

</script>
<div id="page-wrapper"><br>
  <h1 class="page-header"> <i class="fa fa-credit-card fa-fw"></i> Cadastrar Créditos
    <a href="creditos.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir Créditos</button></a>
  </h1>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Efetue a Compra de créditos
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
            <form role="form" action="cad_creditos.php" name="form_credito" method="post">

              <div class="form-group input-group">
               <span class="input-group-addon">R$</span>
               <input type="text" class="form-control" placeholder="Valor do Crédito" name="credito" id="credito" required> 
             </div>


             <div align="center">

              <button type="submit" class="btn btn-success" id="btn_cadastrar_creditos" name="btn_cadastrar_creditos" value="cadastrar">Prosseguir para PagSeguro</button>
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