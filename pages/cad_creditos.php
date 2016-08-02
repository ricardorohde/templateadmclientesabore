<?php require_once('controller/creditos_confirma_controller.php'); ?>
<?php require_once('header.php'); ?>
<?php
$success = $_GET['success'];
?>
<script src="../js/busca.js"></script>
<script src="../js/cad_campos.js"></script>

<div id="page-wrapper"><br>
  <h1 class="page-header"> <i class="fa fa-credit-card fa-fw"></i> Confirmando Compra
    <a href="creditos.php"><span class="pull-right text-muted small">
      <button class="btn btn-success">Exibir Créditos</button></span></a>
    </h1><br>
    <div class="row">
      <div class="col-lg-12"> 
      <?PHP if($success==true){ ?>
        <div class="alert alert-success">
          <?PHP echo 'Créditos cadastrados com sucesso, agora escolha o método de pagamento !'; ?>
        </div>
      <?PHP } ?>       
        <div class="col-lg-3 col-md-6">
          <a href="aquiépagseguro">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-credit-card fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">Crédito</div>
                    <div>PagSeguro</div>
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <span class="pull-left">Pagar via PagSeguro</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>

            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="#" data-toggle="modal" data-target="#permissao"> 
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-money fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">Crédito</div>
                    <div>Depósito</div>
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <span class="pull-left">Exibir detalhes de conta</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>

            </div> 
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="permissao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-confirma-add" role="document">
      <div class="modal-content confirmar-add">
        <div class="modal-header modal-header-admin" >
          <h3 class="title-modal" >Detalhes da conta</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
        </div>
        <div class="modal-body">
          <ul>
            <li><span>Banco:</span> Banco do Brasil </li>
            <li><span>CPF:</span> 389.301.228-17 </li>
            <li><span>Nome do títular:</span> Lucas Barbosa de Alencar</li>
            <li><span>Número da conta:</span> 132321-123123-132 </li>
            <li><span>Agência:</span> 1232</li>
            <li><span>Operação :</span> 022 </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>


  <?php require_once('footer.php'); ?>