<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-edit fa-fw"></i> Produtos
	     <a href="cad_produtos.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar novo produto</button></span></a>
    </h1>
      	<div class="row">
             

             
            

               	<div class="panel-body">
                    <div class="table-responsive"><br>
                        <div class="col-lg-3"> 
                             <div class="form-group">
                                <select class="form-control" required="required">
                                <option value="" style="display:none">Escolha uma categoria</option>
                                <option value="Pizza">Pizza</option>
                                <option value="Bebida">Bebida</option>
                                <option value="Doces">Doces</option>
                                </select>
                             </div> 
                        </div>      
            <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Cat.</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                               	</tr>
                               	<tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>