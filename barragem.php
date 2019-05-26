<?php require 'header.php'; ?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Estouro de barragem</h2>
						<div class="page_link">
							<a href="#">Home</a>
							<a href="donation.html">Criar chamado</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Denation Area =================-->
        <section class="donation_f_area p_120">
        	<div class="container">
        		<div class="row donation_f_inner">
        			
        			<div class="col-lg-12">
        				<div class="dn_form_area">
        					<form class="donation_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                               	<div class="form-group col-lg-12">
									<select class="donate_select">
										<option value="1">Barragem</option>
										<option value="2">Enchente</option>
										<option value="4">Deslizamento</option>
									</select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="CEP" name="CEP" placeholder="preencha o cep do local afetado">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="rua" name="rua" placeholder="rua">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="UF" name="UF" placeholder="UF">
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_btn form-control">Adicionar</button>
                                </div>
                            </form>
        				</div>
        			</div>
        		</div>
        		<div class="master_card">
        			<span>Doações podem ser feitas com:</span>
        			<img src="img/master-card.png" alt="">
        		</div>
        	</div>
        </section>
        <!--================End Denation Area =================-->
     
        
<?php require 'footer.php'; ?>
<script type="text/javascript">
            
            function getEndereco() {  
                     if($.trim($("#CEP").val()) != ""){  
                         $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CEP").val(), function(){  
                             if(resultadoCEP["resultado"]){  
                                // $("#ENDERECO").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));  
                                 $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"])); 
                                 $("#cidade").val(unescape(resultadoCEP["cidade"]));
                                 $("#UF").val(unescape(resultadoCEP["uf"]));  
                             }else{  
                                 alert("Cep invalido !");  
                                 //jqDialog.notify("Cep Invalido", 0);
                             }  
                         });  
                     }  
             }  
         
                        $('#CEP').on('blur', function() {
                                getEndereco();
                        });
         
        

        </script>