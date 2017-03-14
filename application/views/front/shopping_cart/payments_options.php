    <?php 
        
       
        /*	var_dump($data);

        foreach($data as $row){

         	echo $row['payment_status'].'<br>';  

         }  

        //exit;*/



        $system_title = $this->db->get_where('general_settings',array('type' => 'system_title'))->row()->value;
        $total = $this->cart->total(); 
        if ($this->crud_model->get_type_name_by_id('business_settings', '3', 'value') == 'product_wise') { 
            $shipping = $this->crud_model->cart_total_it('shipping'); 
        } elseif ($this->crud_model->get_type_name_by_id('business_settings', '3', 'value') == 'fixed') { 
            $shipping = $this->crud_model->get_type_name_by_id('business_settings', '2', 'value'); 
        } 
        $tax = $this->crud_model->cart_total_it('tax'); 
        $grand = $total + $shipping + $tax; 
        //echo $grand; 
    ?>
    <?php
        $p_set = $this->db->get_where('business_settings',array('type'=>'paypal_set'))->row()->value; 
        $c_set = $this->db->get_where('business_settings',array('type'=>'cash_set'))->row()->value; 
        $s_set = $this->db->get_where('business_settings',array('type'=>'stripe_set'))->row()->value;
        $pag_set = $this->db->get_where('business_settings',array('type'=>'pagseguro_set'))->row()->value;

 
    ?> 

<div class="row">
    <?php 
        if($p_set == 'ok'){ 
    ?>
    <div class="cc-selector col-sm-4">
        <input id="visa" type="radio" style="display:block;" checked name="payment_type" value="paypal"/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="visa" onclick="radio_check('visa')">
                <img src="<?php echo base_url(); ?>template/front/img/preview/payments/paypal.jpg" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('paypal');?>" />
               
        </label>
    </div>
    
   <!-- Inserindo Modalidade PagSeguro-->
    
    <?php
        } if($pag_set == 'ok'){ 
    ?>
    <div class="cc-selector col-sm-4">
        <input id="pagseguro" type="radio" style="display:block;" name="payment_type" value="pagseguro"/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="pagseguro" onclick="radio_check('pagseguro')">
                <img src="<?php echo base_url(); ?>template/front/img/preview/payments/pagseguro.png" width="100%" height="100%" style=" text-align-last:center;" alt="" />
               
        </label>
    </div>
   
    
    <?php
        } if($c_set == 'ok'){
			if($this->crud_model->get_type_name_by_id('general_settings','68','value') == 'ok'){
    ?>
    <div class="cc-selector col-sm-4">
        <input id="mastercard" style="display:block;" type="radio" name="payment_type" value="cash_on_delivery"/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="mastercard" onclick="radio_check('mastercard')">
                <img src="<?php echo base_url(); ?>template/front/img/preview/payments/cash.jpg" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('cash_on_delivery');?>" />
               
        </label>
    </div>
    <?php
			}
        }
    ?>
</div>
<style>
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
 
.cc-selector input:active +.drinkcard-cc
{
	opacity: 1;
	border:4px solid #169D4B;
}
.cc-selector input:checked +.drinkcard-cc{
	-webkit-filter: none;
	-moz-filter: none;
	filter: none;
	border:4px solid black;
}
.drinkcard-cc{
	cursor:pointer;
	background-size:contain;
	background-repeat:no-repeat;
	display:inline-block;
	-webkit-transition: all 100ms ease-in;
	-moz-transition: all 100ms ease-in;
	transition: all 100ms ease-in;
	-webkit-filter:opacity(.5);
	-moz-filter:opacity(.5);
	filter:opacity(.5);
	transition: all .6s ease-in-out;
	border:4px solid transparent;
	border-radius:5px !important;
}
.drinkcard-cc:hover{
	-webkit-filter:opacity(1);
	-moz-filter: opacity(1);
	filter:opacity(1);
	transition: all .6s ease-in-out;
	border:4px solid #8400C5;
			
}

</style>