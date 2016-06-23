<?php require_once('controller/perfil_controller.php'); ?>
<?php require_once('header.php'); ?>

<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-user fa-fw"></i>Perfil Empresa
    </h1>
      	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          Editar os dados do Perfil da Empresa 
                   </div>

                    <?PHP if($error){ ?>
                    <div class="alert alert-danger">
                            <?PHP echo $mensagem; ?>
                            </div>
                    <?PHP } ?>

                    <?PHP if($success){ ?>
                      <div class="alert alert-success">
                          <?PHP echo $mensagem; ?>
                      </div>
                    <?PHP } ?>

                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="perfil_user.php" method="post">
                                         <div class="form-group">
                                            <select class="form-control">
                                            <option value="" style="display:none">Tipo de documento</option>
                                            <option value="">Cnpj</option>
                                            <option value="" >Cnpj</option>
                                            <option value="" >Sei lá outro</option>
                                            </select>
                                         </div> 
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Documento" required name="documento" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['documento']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                           <input class="form-control" placeholder="Razão social ( Nome empresa ) " required name="razao_social"value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['razao_social']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email Responsavel" required name="email_responsavel" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['email_responsavel']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Titular" required name="responsavel" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['responsavel']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome Fantasia" required name="nome_fantasia" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['nome_fantasia']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Celular" required name="celular" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['celular']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Comercial" required name="telefone1" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['telefone1']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Alternativo"  name="telefone2" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['telefone2']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Fax" required name="fax" value= <?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['fax']; ?>"
                                                <?PHP }?>>
                                        </div>
                                        
                                       <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Km de entrega Máxima" name="km" value =<?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['km']; ?>"
                                                <?PHP }?>>
                                                <!-- Aqui só da required se a opção de taxa fixa estiver como Não -->
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" placeholder="Valor Cobrado por KM (EX :58.40 " name="valor_km_entrega" value=<?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['valor_km_entrega']; ?>"
                                                <?PHP }?>>
                                                 <!-- Aqui só da required se a opção de taxa fixa estiver como Não -->
                                        </div>    
                                        <div class="form-group input-group">
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" placeholder="Valor taxa Fixa (EX :10.00) " name="valor_km_entrega_2" value=<?PHP if($editar){ ?>
                                                  "<?PHP echo $clientes['dados']['Cliente']['valor_km_entrega_2']; ?>"
                                                <?PHP }?>>
                                                <!-- Aqui só da required se a opção de taxa fixa estiver como Sim --> 
                                        </div>   

                           

                                        

	                                	<?PHP if($editar){ ?>
                                            <input type="hidden" name="editar" value="editar">
                                            <input type="hidden" name="id" 
                                              value="<?PHP echo $clientes['dados']['Cliente']['id'];?>">
                                          <?PHP } ?>
	                                    
                                       	<div align="center">
	                                    	<br>
                                        <button type="submit" class="btn btn-success" name="btn_cadastrar_perfil" value="cadastrar"><?PHP if($editar){ echo 'Editar'; ?><?PHP } else {echo 'Salvar';} ?></button>
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