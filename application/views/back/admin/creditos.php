<style type="text/css">
    .creditos_table td, .creditos_table th {
        text-align: center !important;
        vertical-align: middle !important;
    }
    .creditos_table a {
        color: #ff3840;
    }
    /* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 55px;
    height: 28px;
    margin-top: 5px;
    float: none;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider.active {
  background-color: #2196F3 !important;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

/* input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
} */

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<div id="content-container" style="min-height: 1009px;">
    <div id="page-title">
        <h1 class="page-header text-overflow">Gerenciar créditos do fornecedor</h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="col-md-12"></div>
                    <br>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                        <div class="panel-body" id="demo_s">
                            <div class="bootstrap-table">
                                <div class="fixed-table-toolbar">
                                    <div class="columns columns-right btn-group pull-right">
                                        <button class="btn btn-default" type="button" onclick="ajax_set_list()" name="refresh" title="Refresh"><i class="fa fa-refresh icon-refresh"></i></button>
                                        <button class="btn btn-default" type="button" title="%s" onclick="export_it('pdf');">pdf</button>
                                        <button class="btn btn-default" type="button" title="%s" onclick="export_it('csv');">csv</button>
                                        <button class="btn btn-default" type="button" title="%s" onclick="export_it('excel');">xls</button>
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
                                        <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                            <table id="demo-table" class="table table-striped table-hover creditos_table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true">
                                                <thead>
                                                    <tr>
                                                        <th style=""><div class="th-inner ">Logotipo</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Fornecedor</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">E-mail</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Plano</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Status</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Qtd Vendas Contratadas</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Total de Vendas Feitas</div><div class="fht-cell"></div></th>
                                                        <th class="text-right" style=""><div class="th-inner ">Saldo de Vendas</div><div class="fht-cell"></div></th>
                                                    </tr>
                                                </thead> 

                                                <tbody> 
                                                    <?php foreach($dados as $dado){
															  if(url_exists('http://www.clicknalupa.com.br/loja/uploads/vendor/logo_'.$dado['vendor_id'].'.png')){
																  $imagem  = 'http://www.clicknalupa.com.br/loja/uploads/vendor/logo_'.$dado['vendor_id'].'.png';
															  }else{
																  $imagem  = 'https://graph.facebook.com//picture?type=large';
															  }
													?>
                                                        <tr data-index="0">
                                                            <td style="">
                                                                <img class="img-sm img-border" src="<?php echo $imagem?>">                    
                                                            </td>
                                                            <td style=""><?php echo $dado['nome'];?></td>
                                                            <td style=""><?php echo $dado['email'];?></td>
                                                            <td style=""><?php echo $dado['nome'];?></td>
                                                            <td style="">
                                                                <?php 
                                                                      if($dado['status'] == '1'){
                                                                          $classe = 'active';
                                                                          $checa  = 'checked';
                                                                      }else{
                                                                          $classe = '';  
                                                                          $checa  = '';
                                                                      }
                                                                ?>
                                                                <div onclick="atualizaStatus('<?php echo $dado['plano_creditos_vendor_id']?>')">
                                                                    <label class="switch">
                                                                        <input id="status" type="checkbox" <?php echo $checa;?> value="ok">
                                                                        <div id="div_status" class="slider round <?php echo $classe; ?>"></div>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td style=""><?php echo $dado['qtd_max_plano'];?></td>
                                                            <td style=""><?php echo $dado['qtd_vendas_feitas'];?></td>
                                                            <td style=""><?php echo (int)($dado['qtd_max_plano']-$dado['qtd_vendas_feitas']);?></td>
                                                        </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                    </div>

                                    <div class="fixed-table-pagination">
                                        <div class="pull-left pagination-detail">
                                            <span class="pagination-info">Mostrando 1 de 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script>
    function atualizaStatus(id){
        if($('#status').prop('checked')){
            var status = '1'; 
            $('#div_status').addClass('active');
        }else{
            var status = '0'; 
            $('#div_status').removeClass('active');
        }
        $.post("<?php echo base_url()?>index.php/admin/creditos/atualiza_status/", {
                    'id'    : id,
                    'status': status
                },
                function(data){
                    alert('Status alterado com sucesso!')
                }
        );
     }
</script>