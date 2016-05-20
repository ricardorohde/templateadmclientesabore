<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-clock-o fa-fw"></i> Acompanhe os pedidos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                        <div class="col-lg-3"> 
                             <div class="form-group">
                                <select class="form-control" required="required" id="acompanhamento">
                                <option value="" style="display:none">Escolha um Método de busca</option>
                                <option value="nped" >Nº Pedido</option>
                                <option value="nome" >Nome</option>
                                <option value="email">Email</option>
                                <option value="status" >Status</option>
                                <option value="valor" >Valor</option>
                                </select>
                             </div> 
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" placeholder="Nº Pedido" id="inputnped" style="display:none">
                            <input class="form-control" placeholder="Nome" id="inputnome" style="display:none">
                            <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
                            <input class="form-control" placeholder="Status do pedido" id="inputstatus" style="display:none">
                            <input class="form-control" placeholder="Valor do pedido (somente numeros)" id="inputvalor" style="display:none">            
                        </div>  

                        <br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                   
                                        <tr  style="background-color: #2c3e50; color: white;">
                                            <th></th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                   

                                        <tr>
                                            <td align="center"><a href="ped_detalhes.php">Ver detalhes</a></td>
                                            <td>Lucas Barbosa</td>
                                            <td>lelo245@hotmail.com</td>
                                            <td>Saiu para entrega</td>
                                            <td>R$45.00</td>
                                            <td><a href="#">Atualizar Status</a></td>
                                        </tr>
                                        <tr>
                                            <td align="center"><a href="ped_detalhes.php">Ver detalhes</a></td>
                                            <td>Lucas Barbosa</td>
                                            <td>lelo245@hotmail.com</td>
                                            <td>Saiu para entrega</td>
                                            <td>R$45.00</td>
                                            <td><a href="#">Atualizar Status</a></td>
                                        </tr>
                                        <tr>
                                            <td align="center"><a href="ped_detalhes.php">Ver detalhes</a></td>
                                            <td>Lucas Barbosa</td>
                                            <td>lelo245@hotmail.com</td>
                                            <td>Saiu para entrega</td>
                                            <td>R$45.00</td>
                                            <td><a href="#">Atualizar Status</a></td>
                                        </tr>
                                        <tr>
                                            <td align="center"><a href="ped_detalhes.php">Ver detalhes</a></td>
                                            <td>Lucas Barbosa</td>
                                            <td>lelo245@hotmail.com</td>
                                            <td>Saiu para entrega</td>
                                            <td>R$45.00</td>
                                            <td><a href="#">Atualizar Status</a></td>
                                        </tr>

                                    
                                </table>
                            </div>
                    </div>
                    <div align="right">
                        <button class="btn btn-success" >Exibir mais</button>
                    </div>
                </div>
            </div>
         </div>



<?php require_once('footer.php'); ?>