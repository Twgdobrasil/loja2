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
        <h1 class="page-header text-overflow">Relatório de Vendas</h1>
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
                                                        <th style=""><div class="th-inner "><input type="checkbox" id="check_all" name="check_all"></div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Usuário</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Nome de Usuário</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Ramo de Atividade</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">E-mail</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Plano / Tarifa</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Status</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Quantidade de Produtos Vendidos (Filtro)</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Tarifa</div><div class="fht-cell"></div></th>
                                                        <th style=""><div class="th-inner ">Quantidade de Vendas</div><div class="fht-cell"></div></th>
                                                        <th class="text-right" style=""><div class="th-inner ">Valor Total de Vendas</div><div class="fht-cell"></div></th></tr>
                                                </thead> 

                                                <tbody> 
                                                    <tr data-index="0">
                                                        <td style="">
                                                            <input type="checkbox" id="check_all" name="check_all">                   
                                                        </td>
                                                        <td style="">Vendor Exemplo</td>
                                                        <td style="">Usuário Exemplo</td>
                                                        <td style="">Restaurante</td>
                                                        <td style=""><a href="">email@email.com.br</a></td>
                                                        <td style="">Pré Pago</td>
                                                        <td style="">
                                                            <input id="ban_1" data-id="1" class="sw1" type="checkbox" name="status" checked="" value="ok" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 17px; background-color: rgb(255, 255, 255); transition: left 0.2s;"></small></span>
                                                        </td>
                                                        <td style="">50</td>
                                                        <td style="">R$ 5,00</td>
                                                        <td style="">30</td>
                                                        <td style=""> R$ 1000,00</td>
                                                    </tr>

                                                    <tr data-index="0">
                                                        <td style="">
                                                            <input type="checkbox" id="check_all" name="check_all">                   
                                                        </td>
                                                        <td style="">Vendor Exemplo</td>
                                                        <td style="">Usuário Exemplo</td>
                                                        <td style="">Borracharia</td>
                                                        <td style=""><a href="">email@email.com.br</a></td>
                                                        <td style="">Pré Pago</td>
                                                        <td style="">
                                                            <input id="ban_1" data-id="1" class="sw1" type="checkbox" name="status" checked="" value="ok" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 17px; background-color: rgb(255, 255, 255); transition: left 0.2s;"></small></span>
                                                        </td>
                                                        <td style="">50</td>
                                                        <td style="">R$ 5,00</td>
                                                        <td style="">30</td>
                                                        <td style=""> R$ 1000,00</td>
                                                    </tr>

                                                    <tr data-index="0">
                                                        <td style="">
                                                            <input type="checkbox" id="check_all" name="check_all">                    
                                                        </td>
                                                        <td style="">Vendor Exemplo</td>
                                                        <td style="">Usuário Exemplo</td>
                                                        <td style="">Loja de Brinquedos</td>
                                                        <td style=""><a href="">email@email.com.br</a></td>
                                                        <td style="">Pré Pago</td>
                                                        <td style="">
                                                            <input id="ban_1" data-id="1" class="sw1" type="checkbox" name="status" checked="" value="ok" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 17px; background-color: rgb(255, 255, 255); transition: left 0.2s;"></small></span>
                                                        </td>
                                                        <td style="">50</td>
                                                        <td style="">R$ 5,00</td>
                                                        <td style="">30</td>
                                                        <td style=""> R$ 1000,00</td>
                                                    </tr>
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