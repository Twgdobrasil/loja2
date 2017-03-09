<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('manage_payment_receiving_settings');?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
                $paypal    = $this->db->get_where('vendor', array(
                    'vendor_id' => $this->session->userdata('vendor_id')
                ))->row()->paypal_email;
                $paypal_set    = $this->db->get_where('vendor', array(
                    'vendor_id' => $this->session->userdata('vendor_id')
                ))->row()->paypal_set;
                $cash_set    = $this->db->get_where('vendor', array(
                    'vendor_id' => $this->session->userdata('vendor_id')
                ))->row()->cash_set;
                $stripe_set    = $this->db->get_where('vendor', array(
                    'vendor_id' => $this->session->userdata('vendor_id')
                ))->row()->stripe_set;
                $stripe_details    = json_decode($this->db->get_where('vendor', array(
                    'vendor_id' => $this->session->userdata('vendor_id')
                ))->row()->stripe_details,true);
                $stripe_publishable = $stripe_details['publishable'];
                $stripe_secret =  $stripe_details['secret'];
            ?>
            <div class="col-sm-12">
            <div class="panel panel-bordered-dark">
                <?php
                    echo form_open(base_url() . 'index.php/vendor/business_settings/set/', array(
                        'class'     => 'form-horizontal',
                        'method'    => 'post',
                        'id'        => 'gen_set',
                        'enctype'   => 'multipart/form-data'
                    ));
                ?>
                    <div class="panel-body telaConfiguraPagamento">
                        <div class="form-group">
                            <fieldset>
                                <legend>Habilitar pagamento em dinheiro</legend>
                                <img class="pagamentoImagem" src="https://thumbs.dreamstime.com/t/payment-cash-express-delivery-flat-line-contour-illustration-human-hand-holds-carton-box-barcode-other-man-62295474.jpg">
                                <label class="col-sm-3 control-label labelMetodoPagamento" for="demo-hor-inputemail"><?php echo translate('cash_payment');?></label>
                                <div class="col-sm-6">
                                    <div class="col-sm-">
                                        <input id="cash_set" class='sw7' data-set='cash_set' type="checkbox" <?php if($cash_set == 'ok'){ ?>checked<?php } ?> />
                                    </div>
                                </div>
                            </fieldset>                            
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Habilitar Paypal</legend>
                                    <img class="pagamentoImagem" src="https://logodownload.org/wp-content/uploads/2014/10/paypal-logo-3.png">
                                    <label class="col-sm-3 control-label labelMetodoPagamento" for="demo-hor-inputemail"><?php echo translate('paypal_payment');?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="paypal_set" class='sw8' data-set='paypal_set' type="checkbox" <?php if($paypal_set == 'ok'){ ?>checked<?php } ?> />
                                        </div>
                                    </div>
                            
                                    <div class="emails_config_pagamentos">
                                        <label class="col-sm-3 control-label"><?php echo translate('paypal_email');?></label>
                                            <div class="col-sm-6">
                                                <input type="text" name="paypal_email" value="<?php echo $paypal; ?>" class="form-control">
                                            </div>
                                    </div>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Habilitar PagSeguro</legend>
                                    <img class="pagamentoImagem" src="http://www.desenhoonline.com/site/wp-content/uploads/Pagseguro-Pagamentos-online.jpg">
                                    <label class="col-sm-3 control-label labelMetodoPagamento" for="demo-hor-inputemail">Pagamento com Pagseguro</label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="pagseguro_set" class='sw8' data-set='pagseguro_set' type="checkbox" />
                                        </div>
                                    </div>
                            
                                    <div class="emails_config_pagamentos">
                                        <div class="emails_config_pagamentos">
                                            <label class="col-sm-3 control-label">E-mail do Pagseguro</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="pagseguro_email" value="" class="form-control">
                                                </div>
                                        </div>

                                        <div class="emails_config_pagamentos">
                                            <label class="col-sm-3 control-label">Token</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="token_pagseguro" value="" class="form-control">
                                                </div>
                                        </div>

                                        <div class="emails_config_pagamentos">
                                            <label class="col-sm-3 control-label">Acréscimo em %</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="token_pagseguro" value="" class="form-control">
                                                </div>
                                        </div>

                                        <div class="emails_config_pagamentos">
                                            <label class="col-sm-3 control-label">Sem juros até:</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control unit required">
                                                        <option value="">Selecione...</option>
                                                        <option value="">1x</option>
                                                        <option value="">2x</option>
                                                        <option value="">3x</option>
                                                        <option value="">4x</option>
                                                        <option value="">5x</option>
                                                        <option value="">6x</option>
                                                        <option value="">7x</option>
                                                        <option value="">8x</option>
                                                        <option value="">9x</option>
                                                        <option value="">10x</option>
                                                        <option value="">11x</option>
                                                        <option value="">12x</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('stripe_payment');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="stripe_set" class='sw7' data-set='stripe_set' type="checkbox" <?php if($stripe_set == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('stripe_secret_key');?></label>
                            <div class="col-sm-6">
                                <input type="text" name="stripe_secret" value="<?php echo $stripe_secret; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('stripe_publishable_key');?></label>
                            <div class="col-sm-6">
                                <input type="text" name="stripe_publishable" value="<?php echo $stripe_publishable; ?>" class="form-control">
                            </div>
                        </div>
                    
                    <div class="panel-footer text-right">
                        <span class="btn btn-info submitter enterer" 
                            data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
                                <?php echo translate('save');?>
                        </span>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

</div>
<div style="display:none;" id="business"></div>
<style type="text/css">
    div.telaConfiguraPagamento fieldset {
        border: 1px solid lightgray;
        width: 80%;
        margin: 0 auto;
        border-radius: 3px;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    div.telaConfiguraPagamento fieldset legend {
        border-bottom: none;
        width: 30%;
        font-size: 13px;
        margin-bottom: 3px;
        padding-bottom: 10px;
        border-radius: 3px !important;
    }
    div.telaConfiguraPagamento img.pagamentoImagem {
        width: 100px;
        float: left;
        padding-left: 3%;
    }
    @media (min-width: 768px) {
        div.telaConfiguraPagamento .labelMetodoPagamento{
            padding-top: 4px;
            margin-bottom: 0;
            text-align: left;
        }  
    }
    div.emails_config_pagamentos {
        clear: both;
        margin-top: 30px;
        float: left;
        width: 90%;
        margin-left: 41px;
    }
</style>
<script>
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'vendor';
	var module = 'business_settings';
	var list_cont_func = 'show_all';
	//var dlt_cont_func = 'delete_logo';

    function get_membership_info(id){
        $('#mem_info').load('<?php echo base_url(); ?>index.php/vendor/business_settings/membership_info/'+id);
    }

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>
