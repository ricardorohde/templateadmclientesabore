<?php require_once('header.php'); ?>
<script src="../js/index.js"></script>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Home</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Pedidos</div>
                                    <div>Aguardando aprovação</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left" >Veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Vendas</div>
                                    <div>Vendas bem sucedidas</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left">Clique para visualizar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Crédito</div>
                                    <div>Confira seus créditos</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left">Veja seus créditos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                       
                    </div> 
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" id="vendas_desabilitado">
                    <div class="panel panel-red"> 
                    <a   id="vendas_habilitar" href="#">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Vendas</div>
                                    <div>Habilite vendas no site</div>
                                </div>
                            </div>
                        </div>
                       
                            <div class="panel-footer">
                                <span class="pull-left">Clique para habilitar (off)</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6" style="display: none " id="vendas_habilitado">
                <a href="#"  id="vendas_desabilitar">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Vendas</div>
                                    <div>Desabilite vendas no site</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left">Clique para desabilitar (on)</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                    </a>
                </div>

            </div>




            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Vendas da semana - Janeiro
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart"><br><br>
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>

                    <!-- /.panel -->

                    <!--Segundo Gráfico-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Vendas da semana [ Sms / Site / Loja virtual ]
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-question-circle fa-fw"></i> Visitar Site
                        </div>

                        <div class="panel-body" align="center">
								<label>Clique para Visitar seu site</label><br>
	                   	       <a href="http://www.templatesiteclientesabore.com.br/">
                       	   		<button type="submit" class="btn btn-success">Visitar  </button>
                                </a>
                        </div>
                        <!-- /.list-group -->
                    </div>
                    <!-- /.panel-body -->








					<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-shopping-cart fa-fw"></i> Pedidos a confirmar
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <p href="#" class="list-group-item">
                                     Pedido 142412
                                    <span class="pull-center text-muted small"><em>R$30.00</em></span>
                                    <span class="pull-right text-muted small">
                                    <a href="#"><i class="fa fa-check fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-comment fa-fw"></i></a>
                                    </span>
                                </p>
                               <p href="#" class="list-group-item">
                                     Pedido 65364
                                    <span class="pull-center text-muted small"><em>R$30.00</em></span>
                                    <span class="pull-right text-muted small">
                                    <a href="#"><i class="fa fa-check fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-comment fa-fw"></i></a>
                                    </span>
                                </p>                            
                                <p href="#" class="list-group-item">
                                     Pedido 24343
                                    <span class="pull-center text-muted small"><em>R$30.00</em></span>
                                    <span class="pull-right text-muted small">
                                    <a href="#"><i class="fa fa-check fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-comment fa-fw"></i></a>
                                    </span>
                                </p>
                                <p href="#" class="list-group-item">
                                     Pedido 123123
                                    <span class="pull-center text-muted small"><em>R$30.00</em></span>
                                    <span class="pull-right text-muted small">
                                    <a href="#"><i class="fa fa-check fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-comment fa-fw"></i></a>
                                    </span>
                                </p>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Pedidos esperando confirmação</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-shopping-cart fa-fw"></i> Pedidos em andamento
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <p href="#" class="list-group-item">
                                    <i class="fa fa-reorder fa-fw"></i> Pedido 3536643
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </p>
                                <p href="#" class="list-group-item">
                                    <i class="fa fa-reorder fa-fw"></i> Pedido 3536643
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </p>
                                <p href="#" class="list-group-item">
                                    <i class="fa fa-reorder fa-fw"></i> Pedido 3536643
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </p>
                                <p href="#" class="list-group-item">
                                    <i class="fa fa-reorder fa-fw"></i> Pedido 3536643
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </p>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Todos pedidos em andamento</a>
                        </div>
                        <!-- /.panel-body -->   
				</div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-image fa-fw"></i> Imagens sugeridas
                        </div>

                        <div class="panel-body" align="center">
                        	<a href="..\download\banco_imagens.zip">Clique aqui para baixar o banco de imagens que oferecemos para você.</a>
                        </div>
                        <!-- /.list-group -->
                    </div>
                <!-- /.panel -->



						

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Rejeitar</button>
                                            <button type="button" class="btn btn-success">Aceitar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    



                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php require_once('footer.php'); ?>