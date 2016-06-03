<?php require_once('controller/produtos_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/cad_campos.js"></script>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-envelope fa-fw"></i> Campanha SMS
	    	    <a href="sms.php"><span class="pull-right text-muted small"><button class="btn btn-success"> Exibir Campanhas</button></a>
    </h1><br>	
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          Cadastro de campanhas SMS
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
                                    <form role="form" action="cad_produtos.php" method="post">
                                    	<div class="form-group">
                                        <label>Situação da Campanha:</label>
                                          <select class="form-control" required="required" name="situacao_id">
                                            <option value="1" id="1" selected>Ativo</option>
                                            <option value="2" id="2">Bloqueado</option>
                                            <option value="3" id="3">Cancelado</option>
                                            <option value="4" id="4">Aguardando Confirmação</option>
                                          </select>
                                        </div>
                                        
                                       <div class="form-group">
                                       		<div class="col-lg-12">
                                            <label> Pessoas que você quer atingir :</label>
                                            <div class="checkbox">
                                            	<div class="col-lg-5">
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Homens
	                                                </label><br>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Mulheres
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 20 e 30 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
                                               </div>
                                               <div class="col-lg-6">
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
	                                                <label>
	                                                    <input type="checkbox" value="" name=""> Entre 15 e 50 anos
	                                                </label>
                                           		 </div>
                                        	</div>
                                        </div>		
                                    </div>

	                                    <div class="form-group">
				                        <label><br>De quanto em quanto tempo essa campanha funcionará?</label>
                                          <select class="form-control" required="required" name="categoria">
                                          <option value="" style="display:none"> Selecione a Frequencia desta campanha</option>
                                            <option value="" id="">Quinzenalmente</option>
                                            <option value="" id="">Mensalmente</option>
                                            <option value="" id="">Semanalmente</option>
                                          </select>
                                        </div>

				                        <div class="form-group">
				                        <label>O que terá nessa mensagem?</label>
                                            <textarea class="form-control" rows="4" placeholder="Boa noite ! Gostariamos de saber se vocês não....." name="descricao" required></textarea>
                                        </div>
									    

                                        <div class="form-group">
                                          <select class="form-control" required="required" name="categoria">
                                          <option value="" style="display:none">Escolha a Categoria</option>
                                            <option value="" id="">Pizzas</option>
                                            <option value="" id="">Doces</option>
                                            <option value="" id="">Bebidas</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <select class="form-control" required="required" name="produto">
                                          <option value="" style="display:none">Escolha o Produto</option>
                                            <option value="">Frango com catupiry</option>
                                            <option value="">Frango com catupiry</option>
                                            <option value="">Frango com catupiry</option>
                                            <option value="">Frango com catupiry</option>
                                          </select>
                                        </div>

                                        <div class="form-group input-group">
	                                            <span class="input-group-addon">R$</span>
	                                            <input type="text" class="form-control" placeholder="Valor desse produto (EX :58.40) " name="valor" required> 
	                                    </div>


	                                    

								

                                       	<div align="center">
	                                    	<br><br>
                                        <button type="submit" class="btn btn-success"  name="btn_cadastrar_campanha" value="cadastrar" data-toggle="modal" data-target="#user">Registrar produto</button>
	                                    <button type="reset" class="btn btn-danger">Limpar campos</button>
	                                    </div>
										
                               	</form>	
                        </div>			
                    </div>
                </div>
            </div>
      	</div>




      	<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #2c3e50; color: white;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel" align="center">Lucas Barbosa de Alencar</h4>
                    </div>
                    <div class="modal-body">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                           <div align="center">
                               Tipo Documento : F <br>
                               Documento : 12432414 <br>
                               Email : lelo245@hotmail.com<br>
                               Senha : xxxxxxxxx <br>
                               CEP : 07312-000 <br>
                               Estado : São Paulo <br>
                               Cidade : São Paulo <br>
                               Endereço : Rua Almeda santos <br>
                               Bairro : Eldorado <br>
                               Número : 124 <br>
                               Complemento : Vazio <br>
                               Telefone : 4657-5015 <br>
                               Celular : 21940124 <br>
                               
                           </div>
                        </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
</div>







<?php require_once('footer.php'); ?>