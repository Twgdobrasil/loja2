<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <div class="navbar-header">
            <a href="<?php echo base_url(); ?>index.php/<?php echo $this->session->userdata('title'); ?>" class="navbar-brand">
                <img src="<?php echo $this->crud_model->logo('admin_login_logo'); ?>" alt="<?php echo $system_name;?>" class="brand-icon" style="padding:8px;">
                <div class="brand-title">
                    <span class="brand-text"><?php echo $system_name;?></span>
                </div>
            </a>
        </div>
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">
                <!--Navigation toogle button-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle">
                        <i class="fa fa-navicon fa-lg"></i>
                    </a>
                </li>
                <!--End Navigation toogle button-->
            </ul>
            
            <ul class="nav navbar-top-links pull-right">

            <!-- Aqui -->
            

            <!-- Aqui Mesmo -->
                <li>
                    <div class="lang-selected" style="margin-top:10px;">
                            <?php
                                if($this->session->userdata('title') == 'admin'){
                            ?>
                                <a href="<?php echo base_url(); ?>" target="_blank" class="btn btn-default">
                                    <i class="fa fa-desktop"></i>  <?php echo translate('visit_home_page');?>
                                </a>
                            <?php
                                } elseif ($this->session->userdata('title') == 'vendor') {
                            ?>
                                <a href="<?php echo $this->crud_model->vendor_link($this->session->userdata('vendor_id')); ?>" target="_blank" class="btn btn-default">
                                    <i class="fa fa-desktop"></i>  <?php echo translate('visit_my_homepage');?>
                                </a>
                            <?php
                                }
                            ?>
                    </div>
                </li>


                <li class="dropdown messages">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <span class="badge badge-red animated bounceIn" id="user-new-messages">3</span>
                    </a>
                    <ul class="dropdown-menu wide arrow red nopadding animated fadeInDown lista_desse">
                      <li><h1>Você tem <strong>3</strong> novas mensagens</h1></li>

                      <li>
                        <a href="#">
                          <div class="profile-photo">
                            <img src="images/ici-avatar.jpg" alt="">
                          </div>
                          <div class="message-info">
                            <span class="sender">Twg Segurança</span>
                            <span class="time">12 mins</span>
                            <div class="message-content">Olá</div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <div class="profile-photo">
                            <img src="images/arnold-avatar.jpg" alt="">
                          </div>
                          <div class="message-info">
                            <span class="sender">Davi Calado</span>
                            <span class="time">1 hora</span>
                            <div class="message-content">Minha compra está vindo?</div>
                          </div>
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <div class="profile-photo">
                            <img src="images/profile-photo.jpg" alt="">
                          </div>
                          <div class="message-info">
                            <span class="sender">Rodrigo Bastos</span>
                            <span class="time">3 horas</span>
                            <div class="message-content">Teste da lista</div>
                          </div>
                        </a>
                      </li>

                      <li><a href="#">Ver todas as mensagens <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </li>



                <li id="dropdown-user" class="dropdown">
                    <a href="<?php echo base_url(); ?>template/back/#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right">
                            <?php
                                if($this->session->userdata('title') == 'admin'){
                            ?>
                                <img class="img-circle img-user media-object" src="<?php echo base_url(); ?>template/back/img/av1.png" alt="Profile Picture">
                            <?php
                                } elseif ($this->session->userdata('title') == 'vendor') {
                            ?>
                                <img class="img-circle img-user media-object" src="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $this->session->userdata('vendor_id'); ?>.png" alt="Profile Picture">
                            <?php
                                }
                            ?>
                        </span>
                        <div class="username hidden-xs">
							<?php 
								if($this->session->userdata('title') == 'admin'){
									echo $this->session->userdata('admin_name');
								} elseif ($this->session->userdata('title') == 'vendor') {
									echo $this->session->userdata('vendor_name');	
								}
							?>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/manage_admin/">
                                    <i class="fa fa-user fa-fw fa-lg"></i> <?php echo translate('profile');?>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="<?php echo base_url(); ?>index.php/<?php echo $this->session->userdata('title'); ?>/logout/" class="btn btn-primary">
                                <i class="fa fa-sign-out fa-fw"></i> <?php echo translate('logout');?>
                            </a>
                        </div>
                    </div>
                </li>
                <!--End user dropdown-->
            </ul>
        </div>
    </div>
</header>