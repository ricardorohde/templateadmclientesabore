<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>

<div id="page-wrapper"><br>
            <h1 class="page-header"> <i class="fa fa-credit-card fa-fw"></i> Créditos
        	     <a href="cad_creditos.php"><span class="pull-right text-muted small">
                 <button class="btn btn-success">Inserir Créditos</button></span></a>
            </h1><br>
      	<div class="row">
                    <div class="table-responsive">

                            <div class="col-lg-3"> 
                                 <div class="form-group">
                                    <select class="form-control" required="required" id="credito_buscar">
                                    <option value="" style="display:none">Escolha um Método de busca</option>
                                    <option value="data_pedido">Data do pedido</option>
                                    <option value="email" >Email </option>
                                    <option value="cod_pedido" >Cód Pedido</option>
                                    </select>
                                 </div> 
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" placeholder="Data do pedido" id="inputdata" style="display:none">
                                <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
                                <input class="form-control" placeholder="Código do Pedido" id="inputcodigo" style="display:none">
                            </div>  


                            <br>
                        <table class="table table-striped table-bordered table-hover">
                            
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Data</th>
                                    <th>Cod. Pedido</th>
                                    <th>Email</th>
                                    <th>Saldo</th>
                                    <th>Valor Taxa Site</th>
                                    <th>Valor Total</th>
                                </tr>
                            
                                <tr>
                                	<td>20/05/2016</td>
                                    <td><a href="#" data-toggle="modal" data-target="#detalhes" >123123213</a></td>
                                	<td><a href="#" data-toggle="modal" data-target="#user">lelo245@hotmail.com</a></td>
                                    <td>R$90.00</td>
                                    <td>R$40.00</td>
                                    <td>R$40.00</td>
                               	</tr>
                               	<tr>
                                	<td>20/05/2016</td>
                                    <td><a href="#" data-toggle="modal" data-target="#detalhes" >123123213</a></td>
                                	<td><a href="#" data-toggle="modal" data-target="#user">lelo245@hotmail.com</a></td>
                                    <td>R$90.00</td>
                                    <td>R$40.00</td>
                                    <td>R$40.00</td>
                               	</tr>
                               	<tr>
                                	<td>20/05/2016</td>
                                    <td><a href="#" data-toggle="modal" data-target="#detalhes" >123123213</a></td>
                                	<td><a href="#" data-toggle="modal" data-target="#user">lelo245@hotmail.com</a></td>
                                    <td>R$90.00</td>
                                    <td>R$40.00</td>
                                    <td>R$40.00</td>
                               	</tr>
                               	<tr>
                                	<td>20/05/2016</td>
                                    <td><a href="#" data-toggle="modal" data-target="#detalhes" >123123213</a></td>
                                	<td><a href="#" data-toggle="modal" data-target="#user">lelo245@hotmail.com</a></td>
                                    <td>R$90.00</td>
                                    <td>R$40.00</td>
                                    <td>R$40.00</td>
                               	</tr>	

                            
                        </table>
                </div>
        </div>
<!-- Modal detalhes pedido -->
<div class="modal fade" id="detalhes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Pedido 36333 - Lucas Barbosa de Alencar</h4>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<div align="center">
							Benjamim rodrigues, 139, Eldorado <br>
							Apt 423, bloco 1<br><br>
						</div>
						<tr style="background-color: #2c3e50; color: white;">
							<th>Tipo</th>
							<th>Produto</th>
							<th>Valor</th>
						</tr>
						<tr>
							<td>
								<input type="checkbox" checked disabled>Meia</input><br>
								<input type="checkbox" checked disabled>Broto</input>
							</td>
							<td>Calabresa</td>
							<td>R$15.00</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" checked disabled>Meia</input><br>
								<input type="checkbox" checked disabled>Broto</input>
							</td>
							<td>Calabresa</td>
							<td>R$15.00</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" checked disabled>Meia</input><br>
								<input type="checkbox" checked disabled>Broto</input>
							</td>
							<td>Calabresa</td>
							<td>R$15.00</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" checked disabled>Meia</input><br>
								<input type="checkbox" checked disabled>Broto</input>
							</td>
							<td>Calabresa</td>
							<td>R$15.00</td>
						</tr>
						<tr style="background-color: #2c3e50; color: white;">
							<td>
								<input type="checkbox" checked disabled>Borda recheada</input>
							</td>
							<td>Pagamento : Dinheiro - Troco : </td>
							<td>Total  : R$40.00</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>        
<!--Fim do Modal -->

<!--Modal detalhes usuario-->
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
<!--Fechando modal 2-->

<!-- Fechando page- wrapper-->
</div>









<?php require_once('footer.php'); ?>