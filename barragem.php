<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>HelpingHand Charity Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="float-right">
						<select class="lan_pack">
							<option value="1">English</option>
							<option value="1">Bangla</option>
							<option value="1">Indian</option>
							<option value="1">Aus</option>
						</select>
						<a class="ac_btn" href="#">My Account</a>
						<a class="dn_btn" href="donation.html">Donate Now</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                                <li class="nav-item"><a class="nav-link" href="#welcome_area">About</a></li> 
                                <li class="nav-item"><a class="nav-link" href="#event_area">Events</a></li>   
                                <li class="nav-item"><a class="nav-link" href="#feature_area">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#gallery_area">Gallery</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="blog.html" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li> 

                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Novo Chamado</h2>
						<div class="page_link">
							<a href="#">Home</a>
							<a href="donation.html">chamado</a>
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