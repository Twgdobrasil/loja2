<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow">Comprar Créditos</h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <div class="col-sm-12">
            <div class="panel panel-bordered-dark">
                    <div class="panel-body">
                        <?php 
                            $sql    = "select *
                                       from planos_creditos
                                       order by nome";
                            $query  = $this->db->query($sql);
                            $planos = $query->result_array();
                        ?>
                        <div class="form-group">
                            <h4 style="width: 64%;border-bottom: 1px dotted;margin: 0 auto;padding-bottom: 5px;margin-bottom: 35px;">Créditos</h4>
                            <label class="col-sm-4 control-label" style="text-align: right;"><?php echo translate('product');?></label>
                            <div class="col-sm-6">
                                <select name="cmb_plano" id="cmb_plano" class="demo-chosen-select" onchange="trazInfosPlano(this.value)">
                                    <?php foreach ($planos as $plano){?>
                                        <option value="<?php echo $plano['plano_creditos_id']?>"><?php echo $plano['nome']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" style="text-align: right;">Detalhes</label>
                                <div class="col-sm-6" id="mem_info">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Nome do plano</td>
                                                    <td id="td_plano"><?php echo $planos[0]['plano_creditos_id']?></td>
                                                </tr>

                                                <tr>
                                                    <td>Validade</td>
                                                    <td><span id="span_validade"><?php echo $planos[0]['validade']?></span> dias</td>
                                                </tr>

                                                <tr>
                                                    <td>Valor do plano</td>
                                                    <td>R$ <span id="span_valor"><?php echo number_format($planos[0]['valor_por_venda'],2,',','')?></span> (por venda)</td>
                                                </tr>

                                                <tr>
                                                    <td>Quantidade de vendas</td>
                                                    <td id="td_qtd"><?php echo $planos[0]['qtd_vendas']?></td>
                                                </tr>

                                                <tr>
                                                    <td>Preço</td>
                                                    <td>R$ <span id="span_total"><?php echo number_format($planos[0]['preco'],2,',','')?></span>
                                                    	<input type="hidden" id="hd_qtd" value="<?php echo $planos[0]['qtd_vendas']?>"/>
                                                        <input type="hidden" id="hd_qtd_dias" value="<?php echo $planos[0]['validade']?>"/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group">
                            <h4 style="width: 64%;border-bottom: 1px dotted;margin: 0 auto;padding-bottom: 5px;margin-bottom: 35px;">Pagamento</h4>
                            <label class="col-sm-4 control-label" style="text-align: right;">Método de pagamento</label>
                            <div class="col-sm-6">
                                <select name="cmb_tipo_pagamento" id="cmb_tipo_pagamento" class="demo-chosen-select">
                                    <option value="paypal">PayPal</option>
                                    <option value="dinheiro">Transferência bancária</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <span id='verify'></span>
                            </div>
                        </div>

                    <div class="panel-footer text-right" style="clear: both;">
                        <button class="btn btn-info" onclick="gravaDados()">
                            Comprar
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none;" id="business"></div>
<script>
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'vendor';
	var module = 'business_settings';
	var list_cont_func = '';
	var dlt_cont_func = '';

    function trazInfosPlano(plano_id){
        $.post(base_url+"index.php/vendor/comprar_creditos/traz_infos_plano/"+plano_id+"/", {
            'plano_id' :  plano_id
        },
        function(data){
            var dados = data.split('|')
            
            $('#td_plano').html(dados[0])
            $('#span_validade').html(dados[1])
            $('#span_valor').html(dados[2])
            $('#td_qtd').html(dados[3])
            $('#span_total').html(dados[4])
			
			$('#hd_qtd').val(dados[3]);
			$('#hd_qtd_dias').val(dados[1]);
        });
    }

    function gravaDados(){
        var plano_id       = $('#cmb_plano').val();
        var tipo_pagamento = $('#cmb_tipo_pagamento').val();
        if(plano_id == 0){
            alert('Selecione um plano.')
            return false;
        }else{
            $.post("<?php echo base_url()?>index.php/vendor/comprar_creditos/grava_dados/"+plano_id+"/", {
                'plano_id'      : plano_id,
                'tipo_pagamento': tipo_pagamento,
				'qtd_dias'      : $('#hd_qtd_dias').val(),
				'qtd'           : $('#hd_qtd').val()
            },
            function(data){
                alert('Plano comprado com sucesso!')
                location.reload();
            });
        }
    }

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>
