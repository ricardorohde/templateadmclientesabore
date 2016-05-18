<?php require_once('header.php'); ?>
<script type="text/javascript">
	$(document).ready(function() {
   $('#myModal').modal('show');
});
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Home</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
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
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <div class="panel-footer">
                                <span class="pull-left" >Veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Compras</div>
                                    <div>Ultimas compras feitas</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Crédito</div>
                                    <div>Confira seus créditos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Site</div>
                                    <div>Clique para visitar seu site</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://www.templatesiteclientesabore.com.br/">
                            <div class="panel-footer">
                                <span class="pull-left">Visitar site</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Vendas da semana - Janeiro
                        </div>

                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>



                    </div>
                    <!-- /.panel -->

                    <!--Segundo Gráfico-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Vendas pelo site e pelo SMS
                        </div>

							<div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-question-circle fa-fw"></i> Vendas no site 
                        </div>

                        <div class="panel-body">
                        <form id="#">
                           <div class="form-group" align="center">
								<label>Deseja abrir seu site para vendas?</label><br>
	                            <label class="radio-inline">
	                   	        <input type="radio" name="destaque" id="destaque" value="destaquesim" >Sim
	                   	        </label>
	                   	        <label class="radio-inline">
	                   	        <input type="radio" name="destaque" id="destaque" value="destaquenao" checked>Não
	                   	        </label>
	                   	        <br><br>
                       	   		<button type="submit" class="btn btn-success">Enviar </button>
                       	   	</div>
                       	</form>
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
                            <a href="#" class="btn btn-default btn-block">Veja todos os pedidos esperando confirmação</a>
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
                            <a href="#" class="btn btn-default btn-block">Veja todos os pedidos em andamento</a>
                        </div>
                        <!-- /.panel-body -->
				</div>
                <!-- /.panel -->



						

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Pedido 625235</h4>
                                        </div>
                                        <div class="modal-body">
                                            pedido aqui doido e talz ta aqui maluco
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