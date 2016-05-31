<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>
<div id="page-wrapper"><br>
<h1 class="page-header"> <i class="fa fa-user fa-fw"></i> Usuários
         <a href="cad_usuarios.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar novo usuário</button></a>
    </h1><br>
      	<div class="row">

                        <div class="col-lg-3"> 
                             <div class="form-group">
                                <select class="form-control" required="required" id="usuarios_busca">
                                <option value="" style="display:none">Escolha um Método de busca</option>
                                <option value="nome" id="nome">Nome</option>
                                <option value="email" id="email">Email</option>
                                <option value="cpf" id="cpf">Data Cadastro</option>
                                </select>
                             </div> 
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" placeholder="Nome" id="inputusername" style="display:none">
                            <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
                            <input class="form-control" placeholder="Data Cadastro" id="inputcpf" style="display:none">
                        </div>  

                        <br>
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <tr style="background-color: #2c3e50; color: white;">
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Data Cadastro</th>
                                    <th>Editar</th>
                                </tr>
                                <tr>
                                    <td>Lucas</td>
                                    <td>lelo245@hotmail.com</td>
                                    <td>20/05/2000</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                               	</tr>
                                <tr>
                                    <td>Lucas</td>
                                    <td>lelo245@hotmail.com</td>
                                    <td>20/05/2000</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lucas </td>
                                    <td>lelo245@hotmail.com</td>
                                    <td>20/05/2000</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lucas </td>
                                    <td>lelo245@hotmail.com</td>
                                    <td>20/05/2000</td>
                                    <td><a href="#"><i class="fa fa-edit fa-fw"></i></a><a href="#"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>

                        </table>
                    </div>
            </div>
        </div>
        
</div>







<?php require_once('footer.php'); ?>