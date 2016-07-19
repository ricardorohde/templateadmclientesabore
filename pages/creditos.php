<?php require_once('controller/creditos_controller.php'); ?>
<?php require_once('header.php'); ?>
<?php
$success = $_GET['success'];
?>
<script src="../js/busca.js"></script>
<script src="../js/cad_campos.js"></script>
<script>
	$(function(){
		$("#credito").maskMoney({symbol:'R$ ', 
			showSymbol:true, thousands:'.', decimal:',', symbolStay: false});
	});

</script>
<div id="page-wrapper"><br>
	<h1 class="page-header"> <i class="fa fa-credit-card fa-fw"></i> Créditos
		<a href="cad_creditos.php"><span class="pull-right text-muted small">
			<button class="btn btn-success">Confirmar Créditos</button></span></a>
		</h1><br>
		<div class="row">
			<div class="col-lg-12">
				<?PHP if($error){ ?>
				<div class="alert alert-danger">
					<?PHP echo $mensagem; ?>
				</div>
				<?PHP } ?>
				<?PHP if($success==true){ ?>
				<div class="alert alert-success">
					<?PHP echo 'Créditos cadastrados com sucesso, só falta confirma-los !'; ?>
				</div>
				<?PHP } ?>				
				<div class="col-lg-3 col-md-6">
					<a href="#">
						<div class="panel panel-green">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-history fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge">Créditos</div>
										<div>Créditos: R$ <?php echo $clientes['dados']['Cliente']['credito'];?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<span class="pull-left">Créditos disponíveis !</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>

						</div>
					</a>
				</div>

				<div class="col-lg-3 col-md-6">
					<a href="cad_creditos.php">		
						<div class="panel panel-red">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-money fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge">Créditos</div>
										<div>Créditos: R$ <?php echo $clientes['dados']['Cliente']['credito_confirmar'];?></div>
									</div>
								</div>
							</div>

							<div class="panel-footer">
								<span class="pull-left">Créditos a confirmar !</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>

						</div> 
					</a>
				</div>
			</div>
		</div>


		<h1 class="page-header"> Faça o cadastro de créditos aqui !  </h1>
		<div class="row">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
					<em>Digite a baixo, o valor que você deseja comprar.</em>
						<form role="form" action="creditos.php" name="form_credito" method="post">
							<div class="form-group input-group">
								<span class="input-group-addon">R$</span>
								<input type="text" class="form-control" placeholder="Valor do Crédito" name="credito" id="credito" required> 
							</div>
							<div align="center">
								<button type="submit" class="btn btn-success" id="btn_cadastrar_creditos" name="btn_cadastrar_creditos" value="cadastrar">Prosseguir com compra</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php require_once('footer.php'); ?>