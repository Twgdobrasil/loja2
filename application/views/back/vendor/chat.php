<style type="text/css">
ul.side_chat li {
    width: 95%;
    display: block;
    float: left;
    padding: 10px 0 10px 10px;
    border-bottom: 1px solid #ddd;
}
ul.seta_chat {
    float: left;
    width: 19%;
    margin: 0;
    padding: 0;
    height: 54px;
}
ul.seta_chat li {
    text-align: right;
    padding-top: 13%;
}
ul.seta_chat img {
    width: 50%;
}
div.campo_digitar_mensagem {
  position: fixed;
  bottom: 49px;
  left: 0;
  width: 100%;
  text-align: center;
  background: #FFF;
  padding: 5px;
}
ul.chat_mensagem {
    width: 100%;
    float: left;
    margin: 0;
    padding: 0;
    position: relative;
    left: 0%;
    min-height: 30px;
    clear: both;
    padding-bottom: 20px;
    overflow: scroll;
    max-height: 497px;
}
ul.chat_mensagem li.li_enviada {
  text-align: right;
  width: 80%;
  display: block;
  float: right;
  border-radius: 3px;
  padding: 7px 5px;
  margin-right: 0px;
}
ul.chat_mensagem li.li_enviada span {
  padding: 3px 6px;
  float: right;
  border-radius: 5px;
  margin-right: 15px;
  background: #dcf8c6;
  word-break: break-all;
  font-size: 16px;
  box-shadow: 2px 2px 5px;
}
ul.chat_mensagem li.li_recebida {
    text-align: left;
    width: 60%;
    display: block;
    float: left;
    border-radius: 3px;
    padding: 7px 5px;
    margin-left: 0px;
    
}
ul.chat_mensagem li.li_recebida span {
    padding: 3px 6px;
    float: left;
    border-radius: 5px;
    margin-left: 15px;
    background: #FFF;
    font-size: 16px;
    box-shadow: 2px 2px 5px;
}
.input_digita_mensagem {
    width: 95%;
    border-radius: 4px;
    border: 1px solid lightgray;
    height: 35px;
    float: left;
    padding: 5px;
    font-size: 14px;
}
#telaChat {
    background: url(../images/background.jpg);
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
.area_de_mensagens {
    background: url(http://clicknalupa.com.br/loja/uploads/bg_chat.png) #e5ddd5;
    float: left;
    position: absolute;
    width: 73.8%;
    opacity: .2;
    background-repeat: repeat repeat;
    left: 24.8%;
    height: 550px;
}
.mensagens_area {
    float: left;
    width: 74%;
    padding: 0;
    position: absolute;
    left: 24.6%;
    bottom: 20px;
}
span.nome_usuario_mensagem {
    font-weight: bold;
    float: left;
    width: 78%;
    padding-right: 10px;
}
span.img_seta_mensagem img {
    float: left;
    width: 10%;
}
img.main_foto_user_mensagem {
    width: 50px;
    float: left;
    margin-right: 10px;
    box-shadow: 2px 2px 5px gray;
    border-radius: 100%;
    height: 50px;
}
span.endereco_usuario_mensagem {
    margin-top: 5px;
    float: left;
}
input.input_buscar_user_mensagem {
    width: 100%;
    border-radius: 4px;
    border: 1px solid lightgray;
    padding: 4px 5px;
}
div.item_buscar_mensagem {
    padding: 5px 0 !important;
    width: 95.7%;
    border-bottom: 1px solid lightgray;
}
aside {
    padding: 0px 0 10px;
    margin: 0;
    width: 24%;
    border-right: 1px solid #ddd;
    float: left;
    max-height: 606px;
    overflow: auto;
}
ul.side_chat {
  float: left;
  width: 100%;
  margin: 0;
  padding: 0;
  min-height: 497px;
  overflow-y: auto;
}
#footer {
    display: none;
}
#content-container {
    padding-bottom: 0 !important;
}
div.infos_user_mensagem {
    position: absolute;
    top: 25px;
    left: 24.8%;
    width: 73.9%;
    background: lightgray;
    padding: 5px 10px;
    z-index: 9;
}
div.infos_user_mensagem img.main_foto_user_mensagem {
    width: 50px;
    float: left;
    margin-right: 10px;
    border-radius: 100%;
}
div.infos_user_mensagem span.nome_usuario_mensagem {
    font-weight: bold;
    float: left;
    width: 78%;
    padding-right: 10px;
    font-size: 16px;
    padding-left: 10px;
}
span.status_chat_user {
    display: block;
    clear: both;
    float: left;
    margin-top: -26px;
    margin-left: 71px;
}
</style>
<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow">Chat</h1>
	</div>
        <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">

          <div class="bootstrap-table" style="width: 95%;margin: 0 auto;">

			<div class="panel-body" id="" style="position: relative;">
        <aside>
          <div class="item_buscar_mensagem">
              <input class="input_buscar_user_mensagem" type="text" name="txt_busca_usuarios" id="txt_busca_usuarios" placeholder="Buscar usuário" onkeyup="trazUsuariosVendor()">
          </div>
          <ul class="side_chat" id="ul_lista_de_usuarios">
              <?php foreach($dados as $row){
                      if(url_exists('http://www.clicknalupa.com.br/loja/uploads/user_image/user_'.$row['user_id'].'.jpg')){
                          $imagem  = 'http://www.clicknalupa.com.br/loja/uploads/user_image/user_'.$row['user_id'].'.jpg';
                          $tem_img = '1';
                      }else{
                          $imagem  = 'https://graph.facebook.com//picture?type=large';
                          $tem_img = '-1';
                      }
              ?>
                      <li onclick="mudaUsuarioTrazConversa('<?php echo $row['user_id']?>','<?php echo $row['username']?>','<?php echo $tem_img?>','<?php echo $row['token']?>')">
                          <img src="<?php echo $imagem; ?>" class="main_foto_user_mensagem">
                          <div class="dados_chat">
                            <span class="nome_usuario_mensagem"><?php echo $row['username'];?></span>
                            <span class="endereco_usuario_mensagem"></span>
                          </div>
                      </li>
              <?php }?>
          </ul>
        </aside>
    			
            
              <div class="area_de_mensagens"></div>
                  <div class="infos_user_mensagem" id="usuario_conversa">
                      <img id="foto_usuario_conversa" src="https://graph.facebook.com//picture?type=large" class="main_foto_user_mensagem">
                      <div class="dados_chat">
                          <span id="nome_usuario_conversa" class="nome_usuario_mensagem"></span>
                          <span id="status_usuario_conversa" class="status_chat_user"></span>
                      </div>
                  </div>
              <div class="mensagens_area">
              		<input type="hidden" id="hd_usuario_conversa_id" name="hd_usuario_conversa_id"/>
                    <input type="hidden" id="hd_usuario_token" name="hd_usuario_token"/>
                    <ul id="ul_conversa" class="chat_mensagem">
                        
                    </ul>
                      <div class="comments-form tickets">
                          <form action="" class="form-horizontal" method="post" id="ticket_reply" enctype="multipart/form-data" accept-charset="utf-8">
                              <input type="hidden" id="hd_vendor_envio_mensagem" name="hd_vendor_envio_mensagem">
                                  <div class="" style="background: #DDD;width: 100%;clear: both;float: left;text-align: center;padding: 10px;">                                  
                                      <textarea class="input_digita_mensagem autoExpand" type="text" id="mensagem_vendor" name="mensagem_vendor" placeholder="Digite sua mensagem aqui..."></textarea>
                                      <!--<a href="#" class="" onclick="enviaMensagem('<?php echo $this->session->userdata('vendor_id');?>');"><img style="float: left;width: 3.8%;margin: 0 auto;padding-left: 9px;margin-top: 1px;" src=""></a>-->
                                      <input id="bt_envia_msg_vendor" type="image" src="http://clicknalupa.com.br/loja/uploads/send_icon.png" style="float: left;width: 4.5%;margin: 0 auto;padding-left: 4px;margin-top: 1px;" onclick="enviaMensagem('<?php echo $this->session->userdata('vendor_id');?>');" value="Enviar"/> 
                                  </div>
                          </form>
                          <div id="ticket_setf" class="message_view" data-id="3"></div> 
                      </div>              
                </div>
  			         
			</div>

      </div>
		</div>
		<span id="prod" style="display:none;"></span>
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
		//Recarrega a conversa a cada 20 segundos 
		setInterval(function(){ 
								if($('#hd_usuario_conversa_id').val() != ''){
									trazConversa($('#hd_usuario_conversa_id').val()); 
								}
							  }, 
							  20000);
		
        function trazUsuariosVendor(){
			$.get('http://clicknalupa.com.br/loja/index.php/vendor/chat/traz_usuarios_vendor',{
                'valor'   : $('#txt_busca_usuarios').val()
            },
            function(data){
                  var dados = data.split('{S}')
				  var users = '';
				  for(var i=0;i<dados.length;i++){
						var dados_u  = dados[i].split('|')
						var id       = dados_u[0];
						var username = dados_u[1];
						var token    = dados_u[2];
						var tem_img  = dados_u[3];
						if(tem_img == '1'){
							var imagem = 'http://www.clicknalupa.com.br/loja/uploads/user_image/user_'+id+'.jpg'
						}else{
							var imagem = 'https://graph.facebook.com//picture?type=large';
						}
						
						users += '<li onclick=\'mudaUsuarioTrazConversa("'+id+'","'+username+'","'+tem_img+'","'+token+'")\'>'+
								 '	  <img src="'+imagem+'" class="main_foto_user_mensagem">'+
								 '	  <div class="dados_chat">'+
								 '		<span class="nome_usuario_mensagem">'+username+'</span>'+
								 '		<span class="endereco_usuario_mensagem"></span>'+
								 '	  </div>'+
								 '</li>'
				  }
                $('#ul_lista_de_usuarios').html(users);
            });
		} 
		
		
        function enviaMensagem(vendor_id){
            var mensagem   = $('#mensagem_vendor').val();
            var user_id    = $('#hd_usuario_conversa_id').val(); 
			      var user_token = $('#hd_usuario_token').val(); 

            $('#bt_envia_msg_vendor').prop('disabled',true);

            if(mensagem == ''){
                alert('Digite uma mensagem para enviar.')
                $('#bt_envia_msg_vendor').prop('disabled',false);
                return false;
            }else{
                $.get('http://clicknalupa.com.br/loja/index.php/vendor/chat/envia_mensagem',{
                    'user_id'   : user_id,//user_id,
                    'mensagem'  : JSON.stringify(mensagem)
                },
                function(data){
                    $('#mensagem_vendor').val('');

                    //Recarrega a conversa
            				trazConversa(user_id)
            				
            				//Se tem token...
            				if(user_token != ''){
            					var array_users_push_id = [];
            					array_users_push_id[0]  = user_token
            					var dados               = vendor_id
            					//Envia o PUSH
            					$.post('https://onesignal.com/api/v1/notifications',{
            							app_id			   : "5a7cbb92-3564-446f-9d3b-86a25ddfeef7",
            							headings           : {en: 'Nova Mensagem'},
            							contents           : {en: 'Você recebeu uma nova mensagem de um Fornecedor'},
            							include_player_ids : array_users_push_id,
            							android_led_color  : "FF0000FF",
            							data               : {"dados": dados}
            						},
            						function(data){
            							//
                          $('#bt_envia_msg_vendor').prop('disabled',false);
            						}
            					)
            				}
                });
            }
        }
		
		function trazConversa(user_id){
			//Trazer a conversa com esse usuario
            $.get('http://clicknalupa.com.br/loja/index.php/vendor/chat/traz_conversa_usuario',{
                'user_id': user_id
            },
            function(data){
				var dados     = data.split('{S}')
                var mensagens = ''

                if(data != ''){
                    for(var i=0;i<dados.length;i++){
                        var dados_mensagens = dados[i].split('|')
                        var id              = dados_mensagens[0];
                        var quem_enviou     = dados_mensagens[1];
                        var mensagem        = dados_mensagens[2];

                        if(quem_enviou == 'user'){
                            mensagens += '<li class="li_enviada"><span>'+mensagem+'</span></li>';
                        }else{
                            mensagens += '<li class="li_recebida"><span>'+mensagem+'</span></li>';
                        }
                    }
                    $('#ul_conversa').html(mensagens); 
                }else{
                    $('#ul_conversa').html(''); 
                }
                
                //Recarrega a página

            });	
		}

        //Muda o usuario da conversa e traz a conversa com ele...
        function mudaUsuarioTrazConversa(id, nome, tem_img, token){
            if(tem_img == '1'){
                var imagem = 'http://www.clicknalupa.com.br/loja/uploads/user_image/user_'+id+'.jpg';
            }else{
                var imagem = 'https://graph.facebook.com//picture?type=large';
            }

            $('#foto_usuario_conversa').attr('src',imagem);
            $('#nome_usuario_conversa').html(nome);
			$('#hd_usuario_conversa_id').val(id)
			$('#hd_usuario_token').val(token)
			$('#status_usuario_conversa').html('Disponível')

            trazConversa(id)
        }
		
		function file_exists(url){
			  // http://kevin.vanzonneveld.net
			  // +   original by: Enrique Gonzalez
			  // +      input by: Jani Hartikainen
			  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
			  // %        note 1: This function uses XmlHttpRequest and cannot retrieve resource from different domain.
			  // %        note 1: Synchronous so may lock up browser, mainly here for study purposes.
			  // *     example 1: file_exists('http://kevin.vanzonneveld.net/pj_test_supportfile_1.htm');
			  // *     returns 1: '123'
			  var req = this.window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
			  if (!req) {
				throw new Error('XMLHttpRequest not supported');
			  }
			
			  // HEAD Results are usually shorter (faster) than GET
			  req.open('HEAD', url, false);
			  req.send(null);
			  if (req.status == 200) {
				return true;
			  }
			
			  return false;
		}
    </script>