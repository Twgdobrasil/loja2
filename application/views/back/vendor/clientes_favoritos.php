<style type="text/css">
	.favoritos_table th, .favoritos_table td {
		text-align: left !important;
    	vertical-align: middle !important;
	}
	.custom_td {
		vertical-align: middle !important;
	}

</style>
<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow">Clientes Favoritos</h1>
	</div>
        <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">

			<div class="panel-body" id="demo_s">
    			<div class="bootstrap-table">
    				<div class="fixed-table-toolbar">
    					<div class="columns columns-right btn-group pull-right">
    						<button class="btn btn-default" type="button" onclick="ajax_set_list()" name="refresh" title="Refresh"><i class="fa fa-refresh icon-refresh"></i></button>
    							<div class="export btn-group">
    								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><i class="glyphicon glyphicon-export icon-share"></i> <span class="caret"></span></button>

    								<ul class="dropdown-menu" role="menu">
    									<li data-type="json"><a href="javascript:void(0)">JSON</a></li>
    									<li data-type="xml"><a href="javascript:void(0)">XML</a></li>
    									<li data-type="csv"><a href="javascript:void(0)">CSV</a></li>
    									<li data-type="txt"><a href="javascript:void(0)">TXT</a></li>
    									<li data-type="sql"><a href="javascript:void(0)">SQL</a></li>
    									<li data-type="excel"><a href="javascript:void(0)">Ms-Excel</a></li>
									</ul>
								</div>
						</div>
						<div class="pull-right search">
							<input class="form-control" type="text" placeholder="Buscar">
						</div>
					</div>
				<div class="fixed-table-container">
					<div class="fixed-table-header">
						<table></table>
					</div>

					<div class="fixed-table-body">
						<div class="fixed-table-loading" style="top: 37px; display: none;">Carregando, aguarde…</div>
							<table id="events-table" class="table table-striped table-hover favoritos_table" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-show-refresh="true" data-search="true" data-show-export="true">
						        <thead>
						            <tr>
						            	<th>
						            		<div class="th-inner sortable">Nome</div><div class="fht-cell"></div>
						        		</th>
						        		<th style="text-align: center; ">
						        			<div class="th-inner sortable">Imagem</div><div class="fht-cell"></div>
						        		</th>
						        		<th>
						        			<div class="th-inner sortable">E-mail</div><div class="fht-cell"></div>
						        		</th>
						        		<th>
						        			<div class="th-inner sortable">Telefone</div><div class="fht-cell"></div>
						        		</th>
						        		<th style="">
						        			<div class="th-inner ">Opções</div><div class="fht-cell"></div>
						        		</th>
						        	</tr>
						        </thead>
	   							<tbody>
                                	<?php foreach($dados as $row){
											  if(url_exists('http://www.clicknalupa.com.br/loja/uploads/user_image/user_'.$row['user_id'].'.jpg')){
												  $imagem  = 'http://www.clicknalupa.com.br/loja/uploads/user_image/user_'.$row['user_id'].'.jpg';
											  }else{
												  $imagem  = 'https://graph.facebook.com//picture?type=large';
											  }
									?>
	    							<tr data-index="0">
	    								<td><?php echo $row['username'];?></td>
	    								<td><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="<?php echo $imagem?>"></td>
	    								<td style=""><?php echo $row['email'];?></td>
	    								<td style="">(11) 94163-6255</td>
	   									<td>  
	   										<button type="button" class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="modal" data-target="#ver_detalhes_cliente">Ver detalhes</button>
	   			
	                            			<a href="http://clicknalupa.com.br/loja/index.php/vendor/chat/" class="btn btn-purple btn-xs btn-labeled fa fa-comments" data-toggle="tooltip" data-original-title="Edit" data-container="body">Enviar mensagem via Chat</a>

	                            			<button type="button" class="btn btn-mint btn-xs btn-labeled fa fa-heart"  data-toggle="modal" data-target="#lista_desejos">Desejos</button>

	                            			<button type="button" class="btn btn-dark btn-xs btn-labeled fa fa-ban"  data-toggle="modal" data-target="#bloquear_usuario">Bloquear Usuário</button>     
	        							</td>
	        						</tr>
                                    <?php }?>
	        					</tbody>
       	 					</table>
        			</div>

        			<div class="fixed-table-pagination" style="display: block;">
        				<div class="pull-left pagination-detail">
        					<span class="pagination-info">Mostrando 1 to 1 of 1 rows</span>
    					 </div>
				 	</div>
			 	</div>
				 <div class="clearfix"></div>
			</div>

			<?php 
				function url_exists($url) {
					$ch = curl_init($url);
					curl_setopt($ch, CURLOPT_NOBODY, true);
					curl_exec($ch);
					$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
					curl_close($ch);
				
					return ($code == 200); // verifica se recebe "status OK"
				}
			?>




		</div>
</div>
</div>




<!-- Modal - Perfil -->
<div id="ver_detalhes_cliente" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Perfil do Cliente</h4>
			</div>

			<div class="modal-body">
				<div class="bootbox-body">
					<div id="form">    
						<div id="content-container" style="padding-top:0px !important; padding-left: 0 !important;">
					        <div class="text-center pad-all">
					            <div class="pad-ver">
					                <img src="https://graph.facebook.com/336733856725150/picture?type=large" class="img-md img-border img-circle" alt="Profile Picture">
					            </div>
					            <h4 class="text-lg text-overflow mar-no">Lucas Philipe</h4>
					            <p class="text-sm">Usuário</p>
					            <hr>
					        </div>   
    
						    <div class="row">
						        <div class="col-sm-12">
						            <div class="panel-body">
						                <table class="table table-striped" style="border-radius:3px;">
						                    <tbody>
							                    <tr>
							                        <th class="custom_td">Nome cliente ou Empresa</th>
							                        <td class="custom_td">Lucas Philipe </td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td">Endereço</th>
							                        <td class="custom_td">Nome da Rua e número</td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td">E-mail</th>
							                        <td class="custom_td">lucasdagaby39@gmail.com</td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td">Número de telefone</th>
							                        <td class="custom_td"></td>
							                    </tr>
		                                        <tr>
							                        <th class="custom_td">data de criação</th>
							                        <td class="custom_td">17 Jan,2017</td>
							                    </tr>
							                </tbody>
						                </table>
						              </div>
						            </div>
						        </div>					
    					</div>					
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button data-bb-handler="danger" type="button" class="btn btn-dark">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal - Perfil -->

<!-- Modal - Desejos -->
<div id="lista_desejos" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Lista de Desejos</h4>
			</div>

			<div class="modal-body">
				<div class="bootbox-body">
					<div id="form">    
						<div id="content-container" style="padding-top:0px !important; padding-left: 0 !important;">
   
						    <div class="row">
						        <div class="col-sm-12">
						            <div class="panel-body">
						                <table class="table table-striped" style="border-radius:3px;">
						                	<thead>
						                		<th>Imagem</th>
						                		<th>Produto</th>
						                		<th>Adicionado na lista em:</th>
						                	</thead>
						                    <tbody>
							                    <tr>
							                        <th class="custom_td"><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></th>
							                        <th class="custom_td">Nome do produto</th>
							                        <td class="custom_td"> 17/01/2017</td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td"><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></th>
							                        <th class="custom_td">Nome do produto</th>
							                        <td class="custom_td"> 17/01/2017</td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td"><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></th>
							                        <th class="custom_td">Nome do produto</th>
							                        <td class="custom_td"> 17/01/2017</td>
							                    </tr>
							                    <tr>
							                        <th class="custom_td"><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></th>
							                        <th class="custom_td">Nome do produto</th>
							                        <td class="custom_td"> 17/01/2017</td>
							                    </tr>
		                                        <tr>
							                        <th class="custom_td"><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></th>
							                        <th class="custom_td">Nome do produto</th>
							                        <td class="custom_td"> 17/01/2017</td>
							                    </tr>
							                </tbody>
						                </table>
						              </div>
						            </div>
						        </div>					
    					</div>					
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button data-bb-handler="danger" type="button" class="btn btn-dark">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal - Perfil -->

<!-- Modal Bloquear Usuário -->

<div id="bloquear_usuario" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Bloquear Usuário</h4>
			</div>

            <div class="modal-body">
              <p id="mensagem_modal">Tem certeza que deseja bloquear este usuário?</p>
            </div>
            <div class="modal-footer">
              <button data-bb-handler="danger" type="button" class="btn btn-dark">Fechar</button>
              <button id="bt_ok" class="btn btn-green" data-dismiss="modal" onclick="">Bloquear</button>
            </div>

		</div>
	</div>
</div>

<!-- Modal Bloquear Usuário -->