<style type="text/css">
    .creditos_table td, .creditos_table th {
        text-align: center !important;
        vertical-align: middle !important;
    }
    .creditos_table a {
        color: #ff3840;
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
                                                    <?php foreach($dados as $dado){?>
                                                        <tr data-index="0">
                                                            <td style="">
                                                                <img class="img-sm img-border" src="http://clicknalupa.com.br/loja/uploads/vendor_logo_image/logo_33.png?random=1483716709188">                    
                                                            </td>
                                                            <td style=""><?php echo $dado['nome'];?></td>
                                                            <td style=""><?php echo $dado['email'];?></td>
                                                            <td style=""><?php echo $dado['pc.nome'];?></td>
                                                            <!-- tratar status -->
                                                            <td style="">
                                                                <input id="status" data-id="1" class="sw1" type="checkbox" name="status" checked="" value="ok" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 17px; background-color: rgb(255, 255, 255); transition: left 0.2s;"></small></span>
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
<script>
    function atualizaStatus(id){
        if($('#status').prop('checked')){
            var status = '1'; 
        }else{
            var status = '0'; 
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