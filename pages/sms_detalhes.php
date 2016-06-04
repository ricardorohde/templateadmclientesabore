<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
<h2 class="page-header"> <i class="fa fa-envelope-o fa-fw"></i> Campanha SMS
                 <a href="sms.php"><span class="pull-right text-muted small">
                 <button class="btn btn-success">Retornar </button></span></a>
            </h2><br>
      	<div class="row">

            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Freq. Camp.</th>
                                    <th>Categoria</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Nº de Atingidos</th>
                                    <th>Nº de Vendas</th>
                                    <th> Nº de Métodos</th>
                                </tr>
                                <tr>
                                    <td>Quinzenalmente</td>
                                    <td>Bebidas</td>
                                    <td>Coca-Cola</td>
                                    <td>R$ 10.00</td>
                                    <td>210</td>
                                    <td>190</td>
                                    <td><a href="#" data-toggle="modal" data-target="#user">10 </a></td>
                               	</tr>
                        </table>
                    </div>
            </div>
        </div>



        
        

            <div class="col-lg-12">
               <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #2c3e50; color: white;">
                     Lucro / Despesas / Vendas
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart"><br><br>
                            <div id="morris-area-chart"></div>
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
                        <h4 class="modal-title" id="myModalLabel" align="center">Selecionados na campanha</h4>
                    </div>
                    <div class="modal-body">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                           <div align="center">
                                Homens <br>
                                Homens <br>
                                Homens <br>
                                Homens <br>
                                Homens <br>
                                Homens <br>

                           </div>
                        </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>



<?php require_once('footer.php'); ?>