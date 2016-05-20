<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-edit fa-fw"></i> Produtos
	     <a href="cad_produtos.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar novo produto</button></span></a>
    </h1><br>
      	<div class="row">
                    <div class="table-responsive">
                        <div class="col-lg-3"> 
                                 <div class="form-group">
                                    <select class="form-control" required="required" id="produto_busca">
                                    <option value="" style="display:none">Escolha um Método de busca</option>
                                    <option value="categoria">Categoria</option>
                                    <option value="produto" >Produto</option>
                                    <option value="valor" >Valor</option>
                                    </select>
                                 </div> 
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" placeholder="Categoria" id="inputcategoria" style="display:none">
                                <input class="form-control" placeholder="Produto" id="inputproduto" style="display:none">
                                <input class="form-control" placeholder="Digite o valor desse produto (números)" id="inputvalor" style="display:none">
                            </div>  

                            <br>
                        <table class="table table-striped table-bordered table-hover">
                            
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Cat.</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Edit</th>
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
                                <tr>
                                    <td>Pizzas</td>
                                    <td>Frango catupiry</td>
                                    <td>R$40.00</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>

                            
                        </table>
                </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>