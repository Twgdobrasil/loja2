<div>
	<?php
		if($this->crud_model->is_sale_of_vendor($sale_id,$this->session->userdata('vendor_id'))){
			echo form_open(base_url() . 'index.php/vendor/sales/delivery_payment_set/' . $sale_id, array(
																										'class' => 'form-horizontal',
																										'method' => 'post',
																										'id' => 'delivery_payment',
																										'enctype' => 'multipart/form-data'
																									));
    ?>
        <div class="panel-body">
			
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('payment_status'); ?></label>
                        <div class="col-sm-6">
						<?php
                            if($payment_type == 'DINHEIRO' || $payment_type == 'CARTAO'){
                        ?>
                            <?php
                                $from = array('Em aberto','Pago');
                                echo $this->crud_model->select_html($from,'payment_status','','edit','demo-chosen-select',$payment_status);
                            ?>	
						<?php
                            } else if($payment_type == 'OUTRO'){
                        ?>
                            <input type="text" class="form-control" name="payment_status" value="<?php echo $payment_status; ?>" readonly />
                        <?php
                            }
                        ?>
                        </div>
                </div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-2"><?php echo translate('delivery_status'); ?></label>
                <div class="col-sm-6">
                	<?php
						$from = array('Pendente','A caminho','Entregue');
						echo $this->crud_model->select_html($from,'delivery_status','','edit','demo-chosen-select',$delivery_status);
					?>
                </div>
            </div>

        </div>
    </form>
    <?php
        }
    ?>
</div>
<script type="text/javascript">

    $(document).ready(function() {
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
        total();
    });

    function total(){
        var total = Number($('#quantity').val())*Number($('#rate').val());
        $('#total').val(total);
    }

    $(".totals").change(function(){
        total();
    });
	
	$(document).ready(function() {
		$("form").submit(function(e){
			event.preventDefault();
		});
	});
</script>
<div id="reserve"></div>

