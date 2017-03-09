<style type="text/css">
	.favoritos_table th, .favoritos_table td {
		text-align: left !important;
    	vertical-align: middle !important;
	}

</style>
<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow">Lista de Desejos</h1>
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
						            		<div class="th-inner sortable">Nome do Cliente</div><div class="fht-cell"></div>
						        		</th>
						        		<th style="text-align: center; ">
						        			<div class="th-inner sortable">Imagem</div><div class="fht-cell"></div>
						        		</th>
						        		<th>
						        			<div class="th-inner sortable">E-mail</div><div class="fht-cell"></div>
						        		</th>
						        		<th style="">
						        			<div class="th-inner ">Produto Desejado</div><div class="fht-cell"></div>
						        		</th>
						        </thead>
	   							<tbody>
	    							<tr data-index="0">
	    								<td>Rodrigo Bastos</td>
	    								<td><img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/vendor/logo_29.png"></td>
	    								<td style="">sox.rodrigo@gmail.com</td>
	   									<td>  
	   									<img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://clicknalupa.com.br/loja/uploads/product_image/product_115_1_thumb.jpg">
	   									<!--	<a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip"  data-original-title="View" data-container="body">Ver detalhes</a>
	                            			<a class="btn btn-purple btn-xs btn-labeled fa fa-tag" data-toggle="tooltip" data-original-title="Edit" data-container="body">Enviar mensagem</a>
	                            			<a class="btn btn-dark btn-xs btn-labeled fa fa-ban" data-toggle="tooltip" data-original-title="Edit" data-container="body">Bloquear</a>
	                            			<a class="btn btn-red btn-xs btn-labeled fa fa-trash-o" data-toggle="tooltip"  data-original-title="Edit" data-container="body" style="background: #E63527 !important; color: #FFF;">Excluir</a> -->
	        							</td>
	        						</tr>
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

</div>
</div>
<span id="prod" style="display:none;"></span>