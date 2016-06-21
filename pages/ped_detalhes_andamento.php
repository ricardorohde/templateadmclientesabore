<?php require_once('header.php'); ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-clock-o fa-fw"></i> 
                Detalhes do pedido 1242142134
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row"> 
        <div class="col-lg-12">
            
                
                 <div align="center">
                     dados do cliente
                    
                    <br>
                    <button class="btn btn-default">Em Desenvolvimento</button><br>

                    <button class="btn btn-danger" style="display: none">Atualizar Status</button>
                    <button class="btn btn-warning" style="display: none">Atualizar Status</button>
                    <button class="btn btn-info" style="display: none">Atualizar Status</button>
                    <button class="btn btn-primary" style="display: none">Atualizar Status</button>
                    <button class="btn btn-success" style="display: none">Atualizar Status</button>
					<em>Clique para passar para próximo status</em><br><br>
                 </div>


            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
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
                    <td>Pagamento : Dinheiro </td>
                    <td>Total  : R$40.00 <br>  Troco : R$20.00</td>
                </tr>
                </table>
            </div>   
             
                    <div align="center">
                    <form>
                    <textarea class="form-control" rows="3" placeholder="Observações..." name="observacoes" required style="width: 50%;"></textarea>
                    <a href="ped_andamento.php"><br>
                    <button class="btn btn-success" >Cadastrar observação</button>
                     </a><br><br>
                    </form>
                    </div>
        </div>
    </div>
    <div align="center">
        <a href="ped_andamento.php">
            <button class="btn btn-success" >Retornar a acompanhamento</button>
        </a>
                    
        <br><br><br>
                   <h4> Botão de status (Cores) </h4><br>
                    <label>Desenvolvimento <button class="btn btn-default"></button></label> <br>
                    <label>Aguardando Confirmação <button class="btn btn-danger"></button></label><br> 
                    <label>Confirmado <button class="btn btn-warning"></button></label> <br>
                    <label>Sendo Feito <button class="btn btn-info"></button></label> <br>
                    <label>Saiu para Entrega <button class="btn btn-primary"></button></label><br> 
                    <label>Entregue <button class="btn btn-success"></button></label> <br>
    </div>  
        
</div>



<?php require_once('footer.php'); ?>