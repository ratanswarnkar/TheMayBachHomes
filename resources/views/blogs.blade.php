@include('user_layout.header');
  <br>
<br>
<br>
 
  <div class="hiddenbar-body-ovelay"></div>

 
  <div id="page" class="mobilie_header_nav stylehome1">
     
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="index.php"><img src="images/logo.png" alt=""></a>
       <!--     <a href="page-login.php"><span class="icon fz18 fa fa-user-circle"></span></a>  -->        </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><a href="index.php">Home</a></li>
		<li><a href="about-us.php">About Us</a></li>
        <li><a href="projects.php">Projects</a></li>
		<li><a href="sale.php">Re-Sale</a></li>
		<li><a href="rent.php">Rent</a></li>
		<li><a href="team.php">Team</a></li>
		<li><a href="career.php">Career</a></li>
		<li><a href="contact.php">Contact Us</a></li>
        
         
       
        <!-- Only for Mobile View -->
      </ul>
    </nav>

     
  </div>
<!--     
   <section class="advance-search-menu bg-white position-relative default-box-shadow2 pt15 pb5 bb1 dn-992">
      <div class="container-fluid">
          
          <div class="row">
            <div class="col-xl-11 mx-auto">
              <div class="inner-banner-style1 text-center" style="z-index:99;">
  
 <div class="advance-search-tab mt0 mt30-md mx-auto animate-up-3">
                  
                  <div class="tab-content" id="myTabContent">
				     
					 
				  
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style1">
                        <div class="row">
						 <form action="searchresultrent.php" method="get" class="form-search position-relative" accept-charset="utf-8">
                          <div class="col-md-3 col-lg-3">
                            <div class="advance-search-field position-relative text-start">
                             
                                <div class="box-search">
                                <select class="selectpicker" name="p_category" data-live-search="true" data-width="100%" tabindex="null">
                       <option value="" seleted>Property Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Studio">Studio</option>
                            <option value="Villa">Villa</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Office">Office</option>
                             <option value="Shop">Shop</option>   
                              <option value="Penthouse">Penthouse</option>
                    </select>
                                </div>
                              
                            </div>
                          </div>
						  
						  <div class="col-md-3 col-lg-3">
                            <div class="advance-search-field position-relative text-start">
                             
                                <div class="box-search">
                                <select class="selectpicker" name="p_city" data-live-search="true" data-width="100%" tabindex="null">
                       <option value="" seleted>Select City</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Ajman">Ajman</option>
                            <option value="Ras al Khaimah">Ras al Khaimah</option>  
                       
                    </select>
                                </div>
                              
                            </div>
                          </div>
						  
						  
						  <div class="col-md-3 col-lg-3">
                            <div class="advance-search-field position-relative text-start">
                             
                                <div class="box-search">
                                <select class="selectpicker" name="p_rooms" data-live-search="true" data-width="100%" tabindex="null">
                       <option value="">Bedrooms</option> <option value="0">0</option>
                            <option value="Studio">Studio</option>
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                            <option value="2.5">2.5</option>
                            <option value="3">3</option>
                            <option value="3.5">3.5</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                            <option value="5.5">5.5</option>
                            <option value="6">6</option>
                            <option value="6.5">6.5</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option> 
                    </select>
                                </div>
                              
                            </div>
                          </div>
                          <div class="col-md-3 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fa fa-sliders"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="submit"><span class="fa fa-search"></span></button>
                            </div>
                          </div>
						  </form>
                        </div>
                      </div>
                    </div>
					
					
                     
						
						
                    
                  </div>              
                </div>
				
</div></div></div></div>
</section>				
				
				
<div class="advance-feature-modal">
    Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
		  <form action="searchresultrent.php" method="get" class="form-search position-relative" accept-charset="utf-8">
          <div class="modal-body pb-0">
            
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                 
                  <div class="form-style2 input-group">
                       <select class="selectpicker" name="p_category" data-live-search="true" data-width="100%" tabindex="null">
                       <option value="" seleted>Property Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Studio">Studio</option>
                            <option value="Villa">Villa</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Office">Office</option>
                             <option value="Shop">Shop</option>   
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                
                  <div class="form-style2">
                   <select class="selectpicker" name="p_city" data-live-search="true" data-width="100%" tabindex="null">
                       <option value="" seleted>Select City</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Ajman">Ajman</option>
                            <option value="Ras al Khaimah">Ras al Khaimah</option>  
                       
                    </select>
                  </div>
                </div>
              </div>
            </div>
 <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                    <select class="selectpicker" name="p_rooms" data-live-search="true" data-width="100%" tabindex="null">
                    
                            <option value="" seleted>Select No. of Bedrooms</option>
                            <option value="0">0</option>
                            <option value="Studio">Studio</option>
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                            <option value="2.5">2.5</option>
                            <option value="3">3</option>
                            <option value="3.5">3.5</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                            <option value="5.5">5.5</option>
                            <option value="6">6</option>
                            <option value="6.5">6.5</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                  
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                     <select class="selectpicker" name="p_baths" data-live-search="true" data-width="100%" tabindex="null">
                  
                            <option value="" seleted>Select No. of Bathrooms</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                
                  <div class="form-style2 input-group">
                    <select class="selectpicker" name="p_developer" data-live-search="true" data-width="100%">
                      <option value="">Select Developer</option>
                        <option value="ARADA">ARADA</option>   
						<option value="ALDAR">ALDAR</option> 
						<option value="AZIZI">AZIZI</option>   
						<option value="BINGHATTI">BINGHATTI</option> 
						<option value="DAMAC">DAMAC</option>        
						<option value="DANUBE">DANUBE</option>        
						<option value="DUBAI PROPERTIES">DUBAI PROPERTIES</option>
						<option value="ELLINGTON">ELLINGTON</option>   
						<option value="EMAAR">EMAAR</option>          
						<option value="FAKHRUDDIN">FAKHRUDDIN</option> 
						<option value="MAG">MAG</option>                
						<option value="NAKHEEL">NAKHEEL</option>        
						<option value="SAMANA">SAMANA</option>            
						<option value="SOBHA">SOBHA</option>             
						<option value="REPORTAGE">REPORTAGE</option>   
						<option value="TIGER">TIGER</option>              
						<option value="OMNIYAT">OMNIYAT</option> 
						<option value="VINCITORE">VINCITORE</option>
						<option value="THE HEART OF EUROPE">THE HEART OF EUROPE</option>
						<option value="NSHAMA">NSHAMA</option>
						<option value="wow (sls)">wow (sls)</option>
						<option value="OCTA">OCTA</option>
						<option value="Deyaar">Deyaar</option>
						<option value="Makan">Makan</option>
						<option value="Sotheby">Sotheby's</option> 
						<option value="Empire Residence">Empire Residence</option>
						<option value="DMCC">DMCC</option>
						<option value="Me Do Ee">Me Do Ee</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                 
                   <div class="form-style2 input-group">
                    <select class="selectpicker" name="p_status" data-live-search="true" data-width="100%">
                      <option value="">Property Status</option>
                        <option value="Ready To Move">Ready To Move</option>   
						<option value="Off Plan">Off Plan</option> 
						  
                    </select>
                  </div>
                </div>
              </div>
			  
			   
			  
			   
            </div>
             <div class="row">
              <div class="col-lg-6">
                <div class="widget-wrapper">
                  
                    <select data-size="5" name="min_price" id="form-field-field-max-price" data-live-search="true" class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm">
                <option value="">Min. Price</option><option value="any">Any</option><option value="5000">AED 5,000</option><option value="10000">AED 10,000</option><option value="50000">AED 50,000</option><option value="100000">AED 100,000</option><option value="200000">AED 200,000</option><option value="300000">AED 300,000</option><option value="400000">AED 400,000</option><option value="500000">AED 500,000</option><option value="600000">AED 600,000</option><option value="700000">AED 700,000</option><option value="800000">AED 800,000</option><option value="900000">AED 900,000</option><option value="1000000">AED 1,000,000</option><option value="1500000">AED1,500,000</option><option value="2000000">AED 2,000,000</option><option value="2500000">AED 2,500,000</option><option value="5000000">AED 5,000,000</option><option value="10000000">AED 10,000,000</option>
            </select>
                   
                </div>
              </div>
			  <div class="col-lg-6">
                <div class="widget-wrapper">
                  
                     <select data-size="5" name="max_price" id="form-field-field-max-price" data-live-search="true" class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm">
                <option value="">Max Price</option><option value="any">Any</option><option value="5000">AED 5,000</option><option value="10000">AED 10,000</option><option value="50000">AED 50,000</option><option value="100000">AED 100,000</option><option value="200000">AED 200,000</option><option value="300000">AED 300,000</option><option value="400000">AED 400,000</option><option value="500000">AED 500,000</option><option value="600000">AED 600,000</option><option value="700000">AED 700,000</option><option value="800000">AED 800,000</option><option value="900000">AED 900,000</option><option value="1000000">AED 1,000,000</option><option value="1500000">AED1,500,000</option><option value="2000000">AED 2,000,000</option><option value="2500000">AED 2,500,000</option><option value="5000000">AED 5,000,000</option><option value="10000000">AED 10,000,000</option>
            </select><!-- selectpicker -->
                <!-- </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
 
            <div class="btn-area">
              <button class="ud-btn btn-dark"><span class="fa fa-search align-text-top pr10"></span>Search</button>
            </div>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </div>				 -->
				 
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
   
    <!-- Property Half Map V4 -->
    <section class="bgc-black" style="padding: 0px 0 50px;">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
           
          <div class="col-xl-12">
            <div class="mt30">
              <div class="text-center text-xl-start">
                <h4 class="mb-1" style="padding-bottom:20px; color:#fff;">Our Blogs</h4>                
              </div>
               
               
               
               <div class="row">
                		  
               
                 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('blogs')}}"> <img class="w-100" src="uploads/b1a.jpg" alt=""></a>
                                                              </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('blogs')}}">How Commercial Spaces Enhance Urban Lifestyle in Noida</a></h6>
                     
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        
                        <div class="icons d-flex align-items-center">
                          
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		

                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('blogs1')}}"> <img class="w-100" src="uploads/b2a.jpg" alt=""></a>
                                                              </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('blogs1')}}">Noida's upcoming International Filmcity to be one of the world's best filmcity projects</a></h6>
                     
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        
                        <div class="icons d-flex align-items-center">
                          
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		

                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('blogs2')}}"> <img class="w-100" src="uploads/b3a.jpg" alt=""></a>
                                                              </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('blogs2')}}">

Benefits of Investing in Real Estate During the Festive Season</a></h6>
                     
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        
                        <div class="icons d-flex align-items-center">
                          
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		

                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('blogs3')}}"> <img class="w-100" src="uploads/b4a.jpg" alt=""></a>
                                                              </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('blogs3')}}">
What Are 5 Things You Can Do to Secure Your Financial Future?</a></h6>
                     
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        
                        <div class="icons d-flex align-items-center">
                          
                         
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
    </section>
	 
	
	<section class="our-cta2 p0" style="overflow: hidden;">
      <div class="cta-banner2 bgc-thm maxw1600 mx-auto pt100 pt50-md pb85 pb50-md px30-md bdrs12 position-relative">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/element-2.png" alt="">
        </div>
        <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
          <img src="images/cta-img-1.png" alt="">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
              <div class="cta-style2">
                <h2 class="cta-title">Need help? Talk to our expert</h2>
                <p class="cta-text">"Join us on this exciting journey as we shape the future of Real Estate"</p>
                <a href="contact.php" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a>
				<a href="tel: 055 225 4741" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>055 225 4741</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	@include('user_layout.footer');
  <!-- Our CTA --> 
     

   