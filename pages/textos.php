<?php require_once('controller/textos_controller.php'); ?>
<?php require_once('header.php'); ?>
<?php
$success = $_GET['success'];
$edicao = $_GET['edicao'];
$registro = $_GET['registro'];

?>
<script src="../js/cad_campos.js"></script> 
<script>
	$(function(){
		$("#cep").mask("99999-999");
	});
</script>

<div id="page-wrapper"><br>
	<h1 class="page-header"><i class="fa fa-font fa-fw"></i> Textos</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color: #2c3e50; color: white;">
					Preencha os campos abaixo
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
							<form role="form" method="post" action="textos.php" method="post">
								<div class="form-group">
									<label><i class="fa fa-globe fa-fw"></i> CEP</label>
									<input class="form-control" placeholder="Digite aqui o CEP" name="cep" id="cep"required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["cep"]; ?>'>
									<?PHP } ?>
								</div>
								<div class="form-group">
									<label><i class="fa fa-flag-o fa-fw"></i> Estado</label>
									<input class="form-control" placeholder="Digite aqui o Estado" name="estado" id="estado"required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["estado"]; ?>'>
									<?PHP } ?>
								</div>
								<div class="form-group">
									<label><i class="fa fa-home fa-fw"></i> Cidade</label>
									<input class="form-control" placeholder="Digite aqui a Cidade" name="cidade" id="cidade"required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["cidade"]; ?>'>
									<?PHP } ?>
								</div>
								<div class="form-group">
									<label><i class="fa fa-thumb-tack fa-fw"></i> Bairro</label>
									<input class="form-control" placeholder="Digite aqui o Bairro" name="bairro" id="bairro" required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["bairro"]; ?>'>
									<?PHP } ?>
								</div>
								<div class="form-group">
									<label><i class="fa fa-thumb-tack fa-fw"></i> Endereço</label>
									<input class="form-control" placeholder="Digite aqui o Endereço (Rua)" name="endereco" id="endereco" required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["endereco"]; ?>'>

									<?PHP } ?>
								</div>
								<div class="form-group">
									<label><i class="fa fa-slack fa-fw"></i> Número</label>
									<input class="form-control" placeholder="Digite aqui o Número" min="1" name="numero" id="numero" type="number" required 
									<?PHP if($editar){ ?>
									value = '<?PHP echo  $clientes["dados"]["Cliente"]["numero"]; ?>'>
									<?PHP } ?>
								</div>
								<div class="form-group">
									<label for="nome"><i class="fa fa-question-circle fa-fw"></i> Quem somos</label>
									<textarea class="form-control" rows="3" placeholder="Digite aqui..." name="quem_somos" required><?PHP if($editar){ ?><?PHP echo  $clientes["dados"]["Cliente"]["quem_somos"]; ?><?PHP } ?></textarea>
								</div>
								<div class="form-group">
									<label><i class="fa fa-facebook-square fa-fw"></i> Link Facebook</label>
									<input class="form-control" placeholder="Digite aqui o Facebook" name="facebook" 
									<?PHP if($editar){ ?>
									value =	 '<?PHP echo  $clientes["dados"]["Cliente"]["facebook"]; ?>'
									<?PHP } ?>>


								</div>
								<div class="form-group">
									<label><i class="fa fa-twitter-square fa-fw"></i> Link twitter</label>
									<input class="form-control" placeholder="Digite aqui o Twitter" name="twitter" id="twitter" 

									<?PHP if($editar){ ?>
									value =	 '<?PHP echo  $clientes["dados"]["Cliente"]["twitter"]; ?>'
									<?PHP } ?>>

								</div>
								<div class="form-group">
									<label><i class="fa fa-camera fa-fw"></i> Link Instagram</label>
									<input class="form-control" placeholder="Digite aqui o Instagram" name="instagram" id="instagram" 
									<?PHP if($editar){ ?>
									value =	'<?PHP echo  $clientes["dados"]["Cliente"]["instagram"]; ?>'
									<?PHP } ?>>
								</div>
								<div class="form-group">
									<label><i class="fa fa-automobile fa-fw"></i> Delivery</label>
									<textarea class="form-control" rows="3" placeholder="Digite sobre o seu delivery" name="delivery" id="delivery" ><?PHP if($editar){ ?><?PHP echo  $clientes["dados"]["Cliente"]["delivery"]; ?><?PHP } ?></textarea>
								</div>


								<?PHP if($editar = false){ ?>
								<div class="form-group">
									<label><i class="fa fa-calendar fa-fw"></i> Horário Funcionamento 1</label>
									<input class="form-control" placeholder="Digite aqui o horário de funcionamento" name="funcionamento" id="funcionamento" required>
								</div>

								<div class="form-group">
									<label><i class="fa fa-calendar fa-fw"></i> Horário Funcionamento 2</label>
									<input class="form-control" placeholder="Digite aqui outro horário de funcionamento" name="funcionamento1" id="funcionamento1" required >
								</div>
								<?PHP } ?>



								<?PHP if($editar = true){ ?>
								<div class="form-group">
									<label><i class="fa fa-calendar fa-fw"></i> Horário de Funcionamento</label>
									<input class="form-control" placeholder="Digite aqui o horário de funcionamento" name="funcionamento" id="funcionamento" required 
									<?PHP if($editar){ ?>
									value =  '<?PHP echo  $clientes["dados"]["Cliente"]["funcionamento"]; ?>'
									<?PHP } ?>>
								</div>
								<?PHP } ?>

								<?PHP if($editar){ ?>
								<input type="hidden" name="editar" value="editar">
								<input type="hidden" name="id" 
								value="<?PHP echo $clientes['dados']['Cliente']['id'];?>">
								<?PHP } ?>
								


                            <br>
                            <diV align="center">
                            	<button type="submit" class="btn btn-success" name="btn_cadastrar_textos" value="cadastrar" ><?PHP if($editar){ ?>
                            		<?PHP echo 'Salvar alterações'; ?>
                            		<?PHP } else { echo 'Cadastrar' ; } ?></button>
				                 <?php if(!$editar){ ?>
				                  <button type="reset" class="btn btn-danger">Limpar</button>
				                <?php }?>
                            	</diV>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>