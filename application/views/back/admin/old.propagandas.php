<div id="content-container" style="min-height: 775px;"> 
    <div id="page-title">
        <h1 class="page-header text-overflow">Configurar banners de publicidade</h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="tab-base tab-stacked-left">
                <div class="tab-content bg_grey">
                    <div id="tab-6" class="tab-pane fade active in">             
                        <div id="home_set">    
                            <div class="panel">
                                <div id="home_item_set" class="banners_do_topo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--Panel heading-->
                                            <div class="tab-base horizontal-tab">                                                    
                                                <div class="tab-content">
                                                    <div id="tabb-2" class="tab-pane fade active in">
                                                        <h1 class="page-header text-overflow">Banners do Topo (Slides)</h1><br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 form-horizontal">


<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/1" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[1]['IMAGEM'])){
                                  $im1 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[1]['IMAGEM']; 
                              }else{
                                  $im1 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[1]['PUBLICADO'] == '1'){
                                  $checa1 = 'checked';
                              }else{
                                  $checa1 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im1; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_1','1')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_1" name="check_publicar" data-id="1" class="sw1" type="checkbox"  <?php echo $checa1;?> value="ok" data-switchery="true" style="display: none;">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div>  

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/2" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[2]['IMAGEM'])){
                                  $im2 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[2]['IMAGEM'];
                              }else{
                                  $im2 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[2]['PUBLICADO'] == '1'){
                                  $checa2 = 'checked';
                              }else{
                                  $checa2 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im2; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_2','2')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_2" name="check_publicar" data-id="2" class="sw1" type="checkbox"  value="ok" <?php echo $checa2;?> data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div> 

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/3" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[3]['IMAGEM'])){
                                  $im3 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[3]['IMAGEM'];
                              }else{
                                  $im3 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[3]['PUBLICADO'] == '1'){
                                  $checa3 = 'checked';
                              }else{
                                  $checa3 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im3; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_3','3')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_3" name="check_publicar" data-id="3" class="sw1" type="checkbox"  <?php echo $checa3;?> value="ok" data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div> 

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/4" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[4]['IMAGEM'])){
                                  $im4 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[4]['IMAGEM'];
                              }else{
                                  $im4 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[4]['PUBLICADO'] == '1'){
                                  $checa4 = 'checked';
                              }else{
                                  $checa4 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im4; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_4','4')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_4" name="check_publicar" data-id="4" class="sw1" type="checkbox"  value="ok" <?php echo $checa4;?> data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div>

                                                                                             
                                                                </div>
                                                            </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- a partir daqui começa o carrossel -->

                                <div id="home_item_set" class="banners_do_topo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--Panel heading-->
                                            <div class="tab-base horizontal-tab">                                                    
                                                <div class="tab-content">
                                                    <div id="tabb-2" class="tab-pane fade active in">
                                                        <h1 class="page-header text-overflow">Carrossel</h1><br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 form-horizontal">



<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/5" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[5]['IMAGEM'])){
                                  $im5 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[5]['IMAGEM'];
                              }else{
                                  $im5 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[5]['PUBLICADO'] == '1'){
                                  $checa5 = 'checked';
                              }else{
                                  $checa5 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im5; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="link" value="<?php echo $dados[5]['LINK'];?>" placeholder="Link" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="nome_fornecedor" value="<?php echo $dados[5]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_5','5')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_5" name="check_publicar" data-id="5" class="sw1" type="checkbox"  <?php echo $checa5;?> value="ok" data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div>  

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/6" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[6]['IMAGEM'])){
                                  $im6 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[6]['IMAGEM'];
                              }else{
                                  $im6 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[6]['PUBLICADO'] == '1'){
                                  $checa6 = 'checked';
                              }else{
                                  $checa6 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im6; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="link" value="<?php echo $dados[6]['LINK'];?>" placeholder="Link" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="nome_fornecedor" value="<?php echo $dados[6]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_6','6')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_6" name="check_publicar"   data-id="6" class="sw1" type="checkbox"  value="ok" data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div> 

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/7" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[7]['IMAGEM'])){
                                  $im7 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[7]['IMAGEM'];
                              }else{
                                  $im7 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[7]['PUBLICADO'] == '1'){
                                  $checa7 = 'checked';
                              }else{
                                  $checa7 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im7; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="link" value="<?php echo $dados[7]['LINK'];?>" placeholder="Link" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="nome_fornecedor" value="<?php echo $dados[7]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_7','7')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_7" name="check_publicar"   data-id="7" class="sw1" type="checkbox"  <?php echo $checa7;?> value="ok" data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div> 

<div class="col-md-3">
    <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/8" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="panel panel-bordered-grey">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?php if(!empty($dados[8]['IMAGEM'])){
                                  $im8 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[8]['IMAGEM']; 
                              }else{
                                  $im8 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                              }
                              if($dados[8]['PUBLICADO'] == '1'){
                                  $checa8 = 'checked';
                              }else{
                                  $checa8 = '';
                              }
                        ?>
                        <img class="img-responsive img_show img-banner" src="<?php echo $im8; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <span class="pull-left btn btn-default btn-file">
                            Selecione a imagem do banner                                                           
                            <input type="file" name="imagem_upload" class="form-control imgInp" accept="image">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="link" value="<?php echo $dados[8]['LINK'];?>" placeholder="Link" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <input type="text" name="nome_fornecedor" value="<?php echo $dados[8]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12" onclick="publicaNaoPublica('ban_8','8')">
                    <label for="publicar_banner">Publicar propaganda?</label>
                        <input id="ban_8" name="check_publicar"  data-id="8" class="sw1" type="checkbox"  <?php echo $checa8;?> value="ok" data-switchery="true" style="display: none;">
                        
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info btn-xs btn-labeled fa fa-check submitter enterer" data-ing="atualização .." data-msg="bandeira atualizado!">
                    Atualizar                                                
                </span>
            </div>
        </div>
    </form>
</div>    




                                                                </div>
                                                            </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

 function publicaNaoPublica(id_checkbox,id_propaganda){
	if($('#'+id_checkbox).prop('checked')){
        var publicar = '1'; 
    }else{
        var publicar = '0';
    }
    $.post("<?php echo base_url()?>index.php/admin/propagandas/publica_propaganda/"+id_propaganda+"/", {
                'publicar': publicar
            },
            function(data){
                if(publicar == 1){
                    alert('Propaganda publicada com sucesso!')
                }else{
                    alert('Propaganda tirada de publicação!')
                }
            }
    );
 }

function check_category_slider(){
    if($('#set_slides').is(':checked')){
        $('.top_cat').show();
        $('.top_cat_update').show();
        $('.deal').show();
    }
    else{
        $('.top_cat').hide();
        $('.top_cat_update').hide();
        $('.deal').hide();
    }
}
$('#set_slides').on('change',function() {
    if($('#set_slides').is(':checked')){
        $('.top_cat').show('slow');
        $('.top_cat_update').show('slow');
        $('.deal').show('slow');
    }
    else{
        $('.top_cat').hide('slow');

        $('.top_cat_update').hide('slow');
        $('.deal').hide('slow');
    }
});
function sub_select_check(){
    $('.sub_cat').each(function(){
        var parent = $(this).closest('.sub');
        if(parent.find("select option:selected").length > 3) {
            parent.find('.chosen-drop').hide();
        }
        else{
            parent.find('.chosen-drop').show();
        }
    });
}  
function set_checker(){
    $('#home_category_selection_box').find('.radio_checker').each(function(){
        if($(this).find('input').is(':checked')){
            $(this).addClass('bordered_box');
        } else {
            $(this).removeClass('bordered_box');
        }
    }); 
}
$(document).ready(function() {
    check_category_slider();
    $('#home_category_selection_box').on('click','.radio_checker',function(){
        $(this).closest('.element_box').find('input').prop("checked", false);
        $(this).find('input').prop("checked", true);
        set_checker();
    });
    $(".sw").each(function(){
        var h = $(this);
        var id = h.attr('id');
        var set = h.data('set');
        new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
        var changeCheckbox = document.querySelector('#'+id);
        changeCheckbox.onchange = function() {
          //alert($(this).data('id'));
          ajax_load(base_url+'index.php/'+user_type+'/general_settings/'+set+'/'+changeCheckbox.checked,'site','othersd');
          if(changeCheckbox.checked == true){
            $.activeitNoty({
                type: 'success',
                icon : 'fa fa-check',
                message : s_e,
                container : 'floating',
                timer : 3000
            });
            sound('published');
          } else {
            $.activeitNoty({
                type : 'danger',
                icon : 'fa fa-check',
                message : s_d,
                container : 'floating',
                timer : 3000
            });
            sound('unpublished');
          }
          //alert(changeCheckbox.checked);
        };
    });
    $(".sw1").each(function() {
        new Switchery(document.getElementById('ban_' + $(this).data('id')), {
            color: 'rgb(100, 189, 99)'
        });
        var changeCheckbox = document.querySelector('#ban_' + $(this).data('id'));
        changeCheckbox.onchange = function() {
            ajax_load('http://clicknalupa.com.br/loja/index.php/admin/banner/banner_publish_set/' + $(this).data('id') + '/' + changeCheckbox.checked, 'prod', 'others');
            if (changeCheckbox.checked == true) {
                $.activeitNoty({
                    type: 'success',
                    icon: 'fa fa-check',
                    message: 'bandeira publicado!',
                    container: 'floating',
                    timer: 3000
                });
                sound('published');
            } else {
                $.activeitNoty({
                    type: 'danger',
                    icon: 'fa fa-check',
                    message: 'bandeira inédito!',
                    container: 'floating',
                    timer: 3000
                });
                sound('unpublished');
            }
        };
    });
    
    $(".sw2").each(function() {
        new Switchery(document.getElementById('feature_' + $(this).data('id')), {
            color: 'rgb(100, 189, 99)'
        });
        var changeCheckbox = document.querySelector('#feature_' + $(this).data('id'));
        changeCheckbox.onchange = function() {
            ajax_load('http://clicknalupa.com.br/loja/index.php/admin/ui_settings/ui_home/feature_publish_set/' + $(this).data('id') + '/' + changeCheckbox.checked, '', '');
            if (changeCheckbox.checked == true) {
                $.activeitNoty({
                    type: 'success',
                    icon: 'fa fa-check',
                    message: 'seção publicado!',
                    container: 'floating',
                    timer: 3000
                });
                sound('published');
            } else {
                $.activeitNoty({
                    type: 'danger',
                    icon: 'fa fa-check',
                    message: 'seção inédita!',
                    container: 'floating',
                    timer: 3000
                });
                sound('unpublished');
            }
        };
    });
    
    $(".imgInp").change(function() {
        var tar = $(this).closest('.panel-body').find('.img_show');
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                tar.attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    $(".imgInp2").change(function() {
        var tar = $(this).closest('.form-group').find('.img_show2');
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                tar.attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    setTimeout(function(){ top_cat_check(); }, 1000);
    setTimeout(function(){ sub_select_check(); }, 1000);
    createColorpickers();
    set_select();
    set_switchery();
    set_checker();
    disable_selected_cat('');
});
</script>
<script>
$(document).ready(function() {
    check_style();
});
function check_style(){
    var style=$('input[name="home_page"]:checked').val();
    $('.home_title').removeClass('active');
    $('input[name="home_page"]:checked').closest(".box_area").find('.home_title').addClass('active');
    $("#home_item_set").load("http://clicknalupa.com.br/loja/index.php/admin/home_item_change/"+style);
}
</script>
<style>
.horizontal-tab{
    margin:15px;
}
.horizontal-tab .nav-tabs{
    border: 0;
    display:block !important;
    width:100%;
}
.horizontal-tab .nav-tabs li{
    float:left;
}
.horizontal-tab .nav-tabs li:hover{
    border-bottom:2px solid #dadada;
}
.horizontal-tab .nav-tabs li.active{
    border-bottom:2px solid #489eed;
}
.horizontal-tab .nav-tabs li.active a{
    background:#FFF;
}
.horizontal-tab .nav-tabs>li:not(.active) a:hover {
    border-color:#fff !important;
}
.horizontal-tab .tab-content{
    display:block !important;
}
.img_show{
    position: relative;
    height: 120px;
    overflow: auto;
    width: 200px;
    margin: 0 auto;
    margin-bottom: 10px;
}
.img_show::-webkit-scrollbar{
    width: 3px;
    background: #737373;
}
.img_show::-webkit-scrollbar-thumb{
    background: #fff;
}
.img_show::-webkit-scrollbar{
    width: 3px;
    background: #737373;
}
.img_show::-webkit-scrollbar-thumb{
    background: #fff;
}
.home_title{
    display: block;
    text-align: center;
}
.home_title span i{
    opacity: 0;
}
.home_title.active span i{
    opacity: 1;
    color:#096;
}
.banners_do_topo .col-md-3 {
    width: 20% !important;
}
.banners_do_topo .col-sm-12 {
    width: 100%;
    text-align: center;
}
.banners_do_topo .btn-file {
    float: none !important;
}
.banners_do_topo label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    vertical-align: bottom;
    font-weight: 700;
    margin-right: 15px;
}
</style>