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
                                                                                                    $checa1       = 'checked';
                                                                                                    $class_check1 = 'active';
                                                                                                }else{
                                                                                                    $checa1       = '';
                                                                                                    $class_check1 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input onclick="publicaNaoPublica('ban_1','1')" type="checkbox" id="ban_1" name="check_publicar" <?php echo $checa1;?> value="ok">
                                                                                              <div id="div_check_1" class="slider round <?php echo $class_check1;?>"></div>
                                                                                          </label>
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
                                                                                                    $checa2       = 'checked';
                                                                                                    $class_check2 = 'active';
                                                                                                }else{
                                                                                                    $checa2       = '';
                                                                                                    $class_check2 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" onclick="publicaNaoPublica('ban_2','2')" id="ban_2" name="check_publicar"  <?php echo $checa2;?> value="ok">
                                                                                            <div id="div_check_2" class="slider round <?php echo $class_check2;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa3       = 'checked';
                                                                                                    $class_check3 = 'active';
                                                                                                }else{
                                                                                                    $checa3       = '';
                                                                                                    $class_check3 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_3" onclick="publicaNaoPublica('ban_3','3')" name="check_publicar" <?php echo $checa3;?> value="ok">
                                                                                            <div id="div_check_3" class="slider round <?php echo $class_check3;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa4       = 'checked';
                                                                                                    $class_check4 = 'active';
                                                                                                }else{
                                                                                                    $checa4       = '';
                                                                                                    $class_check4 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_4" onclick="publicaNaoPublica('ban_4','4')" name="check_publicar" <?php echo $checa4;?> value="ok">
                                                                                            <div id="div_check_4" class="slider round <?php echo $class_check4;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa5       = 'checked';
                                                                                                    $class_check5 = 'active';
                                                                                                }else{
                                                                                                    $checa5       = '';
                                                                                                    $class_check5 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_5" onclick="publicaNaoPublica('ban_5','5')" name="check_publicar" <?php echo $checa5;?> value="ok">
                                                                                            <div id="div_check_5" class="slider round <?php echo $class_check5;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa6       = 'checked';
                                                                                                    $class_check6 = 'active';
                                                                                                }else{
                                                                                                    $checa6       = '';
                                                                                                    $class_check6 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_6" onclick="publicaNaoPublica('ban_6','6')" name="check_publicar" <?php echo $checa6;?> value="ok">
                                                                                            <div id="div_check_6" class="slider round <?php echo $class_check6;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa7       = 'checked';
                                                                                                    $class_check7 = 'active';
                                                                                                }else{
                                                                                                    $checa7       = '';
                                                                                                    $class_check7 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_7" onclick="publicaNaoPublica('ban_7','7')" name="check_publicar" <?php echo $checa7;?> value="ok">
                                                                                            <div id="div_check_7" class="slider round <?php echo $class_check7;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                                                    $checa8       = 'checked';
                                                                                                    $class_check8 = 'active';
                                                                                                }else{
                                                                                                    $checa8       = '';
                                                                                                    $class_check8 = '';
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
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_8" onclick="publicaNaoPublica('ban_8','8')" name="check_publicar" <?php echo $checa8;?> value="ok">
                                                                                            <div id="div_check_8" class="slider round <?php echo $class_check8;?>"></div>
                                                                                          </label>
                                                                                          
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

                                                            <!-- Segunda linha dos banners -->

                                                            <div class="row">
                                                                <div class="col-md-12 form-horizontal">                                                                                                                             
                                                                  <div class="col-md-3">
                                                                      <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/9" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                                                          <div class="panel panel-bordered-grey">
                                                                              <div class="panel-body">
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                          <?php if(!empty($dados[9]['IMAGEM'])){
                                                                                                    $im9 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[9]['IMAGEM'];
                                                                                                }else{
                                                                                                    $im9 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                                                                                                }
                                                                                                if($dados[9]['PUBLICADO'] == '1'){
                                                                                                    $checa9       = 'checked';
                                                                                                    $class_check9 = 'active';
                                                                                                }else{
                                                                                                    $checa9       = '';
                                                                                                    $class_check9 = '';
                                                                                                }
                                                                                          ?>
                                                                                          <img class="img-responsive img_show img-banner" src="<?php echo $im9; ?>">
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
                                                                                           <input type="text" name="link" value="<?php echo $dados[9]['LINK'];?>" placeholder="Link" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                           <input type="text" name="nome_fornecedor" value="<?php echo $dados[9]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>                                                                                            
                                                                                      <label class="switch">
                                                                                            <input type="checkbox" id="ban_9" onclick="publicaNaoPublica('ban_9','9')" name="check_publicar" <?php echo $checa9;?> value="ok">
                                                                                            <div id="div_check_9" class="slider round <?php echo $class_check9;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                      <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/10" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                                                          <div class="panel panel-bordered-grey">
                                                                              <div class="panel-body">
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                          <?php if(!empty($dados[10]['IMAGEM'])){
                                                                                                    $im10 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[10]['IMAGEM'];
                                                                                                }else{
                                                                                                    $im10 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                                                                                                }
                                                                                                if($dados[10]['PUBLICADO'] == '1'){
																									echo 'AAA';
                                                                                                    $checa10       = 'checked';
                                                                                                    $class_check10 = 'active';
                                                                                                }else{
																									$checa10       = '';
                                                                                                    $class_check10 = '';
                                                                                                }
                                                                                          ?>
                                                                                          <img class="img-responsive img_show img-banner" src="<?php echo $im10; ?>">
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
                                                                                           <input type="text" name="link" value="<?php echo $dados[10]['LINK'];?>" placeholder="Link" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                           <input type="text" name="nome_fornecedor" value="<?php echo $dados[10]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_10" onclick="publicaNaoPublica('ban_10','10')" name="check_publicar" <?php echo $checa10;?> value="ok">
                                                                                            <div id="div_check_10" class="slider round <?php echo $class_check10;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                      <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/11" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                                                          <div class="panel panel-bordered-grey">
                                                                              <div class="panel-body">
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                          <?php if(!empty($dados[11]['IMAGEM'])){
                                                                                                    $im11 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[11]['IMAGEM'];
                                                                                                }else{
                                                                                                    $im11 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                                                                                                }
                                                                                                if($dados[11]['PUBLICADO'] == '1'){
                                                                                                    $checa11       = 'checked';
                                                                                                    $class_check11 = 'active';
                                                                                                }else{
                                                                                                    $checa11       = '';
                                                                                                    $class_check11 = '';
                                                                                                }
                                                                                          ?>
                                                                                          <img class="img-responsive img_show img-banner" src="<?php echo $im11; ?>">
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
                                                                                           <input type="text" name="link" value="<?php echo $dados[11]['LINK'];?>" placeholder="Link" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                           <input type="text" name="nome_fornecedor" value="<?php echo $dados[11]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_11" onclick="publicaNaoPublica('ban_11','11')" name="check_publicar" <?php echo $checa11;?> value="ok">
                                                                                            <div id="div_check_11" class="slider round <?php echo $class_check11;?>"></div>
                                                                                          </label>
                                                                                          
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
                                                                      <form action="<?php echo base_url()?>index.php/admin/propagandas/atualiza_propaganda/12" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                                                          <div class="panel panel-bordered-grey">
                                                                              <div class="panel-body">
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                          <?php if(!empty($dados[12]['IMAGEM'])){
                                                                                                    $im12 = 'http://clicknalupa.com.br/loja/uploads/propagandas/'.$dados[12]['IMAGEM']; 
                                                                                                }else{
                                                                                                    $im12 = 'http://clicknalupa.com.br/loja/uploads/banner_image/banner_1_thumb.png';
                                                                                                }
                                                                                                if($dados[12]['PUBLICADO'] == '1'){
                                                                                                    $checa12       = 'checked';
                                                                                                    $class_check12 = 'active';
                                                                                                }else{
                                                                                                    $checa12       = '';
                                                                                                    $class_check12 = '';
                                                                                                }
                                                                                          ?>
                                                                                          <img class="img-responsive img_show img-banner" src="<?php echo $im12; ?>">
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
                                                                                           <input type="text" name="link" value="<?php echo $dados[12]['LINK'];?>" placeholder="Link" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                           <input type="text" name="nome_fornecedor" value="<?php echo $dados[12]['NOME_FORNECEDOR'];?>" placeholder="Nome Fornecedor" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-sm-12">
                                                                                      <label for="publicar_banner">Publicar propaganda?</label>
                                                                                          <label class="switch">
                                                                                            <input type="checkbox" id="ban_12" onclick="publicaNaoPublica('ban_12','12')" name="check_publicar" <?php echo $checa12;?> value="ok">
                                                                                            <div id="div_check_12" class="slider round <?php echo $class_check12;?>"></div>
                                                                                          </label>
                                                                                          
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
        $('#div_check_'+id_propaganda).addClass('active');
    }else{
        var publicar = '0';
        $('#div_check_'+id_propaganda).removeClass('active');
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