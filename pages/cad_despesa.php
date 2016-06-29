<?php require_once('header.php'); ?>

<div id="page-wrapper"><br> 
    <h1 class="page-header"> <i class="fa fa-money fa-fw"></i> Despesas Fixas
    </h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"style="background-color: #2c3e50; color: white;">
                	Cadastre suas Despesas Fixas 
                </div>

                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-6">
                            <form role="form">
                               <div class="form-group">
                                <input class="form-control" placeholder="Nome da Despesa    (EX: Salários)" required>
                            </div>



                            <div class="form-group input-group">
                                <span class="input-group-addon">R$</span>
                                <input type="text" class="form-control" placeholder="Coloque o valor dessa Despesa ">
                            </div>

                            <div align="center">
                              <br>
                              <button type="submit" class="btn btn-success">Cadastrar</button>
                              <button type="reset" class="btn btn-danger">Limpar</button>
                          </div>

                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>