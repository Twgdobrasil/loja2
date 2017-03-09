<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" >Gerenciar planos de fornecedores</h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding:10px;">
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right" 
                            onclick="ajax_modal('add','<?php echo translate('add_vendor_package'); ?>','<?php echo translate('successfully_added!'); ?>','membership_add','')">
                                <?php echo translate('create_vendor_package');?>
                                    </button>
                    </div>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div id="page-title">
		<h1 class="page-header text-overflow" >Gerenciar tarifas de fornecedores</h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
					<div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding:10px;">
                        <button type="button" class="btn btn-primary btn-labeled fa fa-plus-circle pull-right" data-toggle="modal" data-target="#myModal">Criar Tarifa de Fornecedor </button>
                    </div>
                    <table id="demo-table" class="table table-striped table-hover" data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true">
				        <thead>
				            <tr>
				            	<th style=""><div class="th-inner ">ID</div><div class="fht-cell"></div></th>
				            	<th style=""><div class="th-inner ">Imagem</div><div class="fht-cell"></div></th>
				            	<th style=""><div class="th-inner ">Nome do plano</div><div class="fht-cell"></div></th>
				            	<th style=""><div class="th-inner ">Preço</div><div class="fht-cell"></div></th>
				            	<th style=""><div class="th-inner ">para</div><div class="fht-cell"></div></th>
				            	<th class="text-right" style=""><div class="th-inner ">Opções</div><div class="fht-cell"></div></th></tr>
				        </thead>	


				        <tbody>
				        	<tr data-index="0">
				        		<td style="">1</td>
				        		<td style="">
				                	<img class="img-md img-circle" src="http://clicknalupa.com.br/loja/uploads/membership_image/membership_0_thumb.png?random=1483989997976">
				            	</td>
				            	<td style="">Free (Default)</td>
				            	<td style="">R$0</td>
				            	<td style="">tempo de vida</td>
				            	<td class="text-right" style="">
				                	<a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" onclick="ajax_modal('default','Editar pacotes de fornecedor','Editado com sucesso!','membership_edit',0)" data-original-title="Edit" data-container="body">
				                        Editar                </a>
				            	</td>
			            	</tr>

			            	<tr data-index="1">
			            		<td style="">2</td>
			            		<td style="">
				                	<img class="img-md img-circle" src="http://clicknalupa.com.br/loja/uploads/membership_image/membership_3_thumb.png?random=1483989997976">
				            	</td>
				            	<td style="">Bronze</td>
				            	<td style="">R$30</td>
				            	<td style="">30 dias</td>
				            	<td class="text-right" style="">
				                	<a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" onclick="ajax_modal('edit','Editar pacotes de fornecedor','Editado com sucesso!','membership_edit','3')" data-original-title="Edit" data-container="body">
				                        Editar                </a>
				                	<a onclick="delete_confirm('3','Deseja realmente excluir?')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" data-original-title="Delete" data-container="body">
				                                Excluir                </a>
				            	</td>
			            	</tr>

		            	</tbody>
    				</table>
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Gerenciar Tarifas -->

       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Tarifa do Fornecedor</h4>
      </div>



      <div class="panel-body">
            <div class="form-group" style="float: left;width: 85%;">
                <label class="col-sm-4 control-label" for="demo-hor-1">Nome da Tarifa</label>
                <div class="col-sm-6">
                    <input type="text" name="title" placeholder="Nome da Tarifa" class="form-control required">
                </div>
            </div>
            <div class="form-group" style="float: left;width: 85%;">
                <label class="col-sm-4 control-label" for="demo-hor-1">Total de Créditos</label>
                <div class="col-sm-6">
                    <input type="number" name="product_limit" placeholder="Total de Créditos" class="form-control required">
                </div>
            </div>
            <div class="form-group" style="float: left;width: 85%;">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    Valor do Crédito (R$)
                        </label>
                <div class="col-sm-6">
                    <input type="number" name="price" placeholder="Valor do Crédito" class="form-control required">
                </div>
            </div>

            <div class="form-group" style="float: left;width: 85%;">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    Validade
                        </label>
                <div class="col-sm-6">
                    <input type="number" name="timespan" placeholder="Validade dos Créditos" class="form-control required">
                </div>
            </div>

            
            <!-- <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-2">selo do pacote</label>
                <div class="col-sm-6">
                    <span class="pull-left btn btn-default btn-file">
                        seleto selo do pacote                        <input type="file" name="img" id="imgInp" accept="image">
                    </span>
                    <br><br>
                    <span id="wrap" class="pull-left">
                        <img src="http://clicknalupa.com.br/loja/uploads/others/photo_default.png" width="48.5%" id="blah"> 
                    </span>
                </div>
            </div> -->

        </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salvar</button>
      </div>
    </div>

  </div>
</div>


        <!-- Modal Gerenciar Tarifas -->


    </div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'membership';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>
