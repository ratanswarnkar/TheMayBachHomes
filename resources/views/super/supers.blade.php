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
    
   <!-- <section class="advance-search-menu bg-white position-relative default-box-shadow2 pt15 pb5 bb1 dn-992">
      <div class="container-fluid">
          
          <div class="row">
            <div class="col-xl-11 mx-auto">
              <div class="inner-banner-style1 text-center" style="z-index:99;">
  
 <div class="advance-search-tab mt0 mt30-md mx-auto animate-up-3">
                  
                  <div class="tab-content" id="myTabContent">
				     
					 
				  
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style1">
                        <div class="row">
						 <form action="searchresultsale.php" method="get" class="form-search position-relative" accept-charset="utf-8">
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
</section>				 -->
				
				
<div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
		  <form action="searchresultsale.php" method="get" class="form-search position-relative" accept-charset="utf-8">
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
                </div>
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
  </div>				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
<section class="bgc-black" style="padding: 0px 0 50px;">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
           
          <div class="col-xl-12">
            <div class="mt30">
              <div class="text-center text-xl-start">
                <br>
                <h4 class="mb-1" style="padding-bottom:20px; color:#fff;">Premium Property for Sale</h4>                
              </div>
               
               
               <div class="row">
                 	
                <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super1-properties')}}"><img class="w-100" src="uploads/super1.jpg" alt=""></a>
					  <div class="list-price">INR 50.0 Cr</div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super1-properties')}}">5 BHK For Sale </a></h6>
                      <p class="list-text">Sector 164, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=237&title=Maya 1BHK"><span class="fa fa-bed"></span>1 bed</a>
                        <a href="property.php?id=237&title=Maya 1BHK"><span class="fa fa-shower"></span>1 bath</a> -->
                        <a href="{{ asset('/super1-properties')}}"><span class="fa fa-object-ungroup"></span>  10,000 sq.mt.</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super1-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super2-properties')}}"><img class="w-100" src="uploads/super2.jpg" alt=""></a>
					   <div class="list-price">INR 1.15 Cr</div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super2-properties')}}">3 BHK For Sale in Escon Villas</a></h6>
                      <p class="list-text">Sector 150, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=238&title=Maya 2BHK"><span class="fa fa-bed"></span>2 bed</a>
                        <a href="property.php?id=238&title=Maya 2BHK"><span class="fa fa-shower"></span>2 bath</a> -->
                        <a href="{{ asset('/super2-properties')}}"><span class="fa fa-object-ungroup"></span>100 sqyrd</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super2-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super3-properties')}}"><img class="w-100" src="uploads/super3.jpg" alt=""></a>
					   <div class="list-price">INR 1.25 Cr</div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super3-properties')}}">2 BHK For Sale in Dkrrish Green Beauty Farms</a></h6>
                      <p class="list-text">Sector 135, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=239&title=Maya Studio"><span class="fa fa-bed"></span>Studio bed</a>
                        <a href="property.php?id=239&title=Maya Studio"><span class="fa fa-shower"></span>1 bath</a> -->
                        <a href="{{ asset('/super3-properties')}}"><span class="fa fa-object-ungroup"></span>100 sqyrd</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super3-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super4-properties')}}"><img class="w-100" src="uploads/super4.jpg" alt=""></a>
					   <div class="list-price">INR 2.50 Cr </div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super4-properties')}}">4 BHK For Sale in Dkrrish Green Beauty Farms</a></h6>
                      <p class="list-text">Sector 135, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=249&title=Al Zahya"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="property.php?id=249&title=Al Zahya"><span class="fa fa-shower"></span>7 bath</a> -->
                        <a href="{{ asset('/super4-properties')}}"><span class="fa fa-object-ungroup"></span>9072 sq.ft</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super4-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super5-properties')}}"><img class="w-100" src="uploads/super5.jpg" alt=""></a>
					   <div class="list-price">INR  95.0 Lac </div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super5-properties')}}">2 BHK For Sale in counrty farm</a></h6>
                      <p class="list-text">Sector 150, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=250&title=Al Yasmeen Villa"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="property.php?id=250&title=Al Yasmeen Villa"><span class="fa fa-shower"></span>7 bath</a> -->
                        <a href="{{ asset('/super5-properties')}}"><span class="fa fa-object-ungroup"></span>2700 sq.ft sqft</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super5-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
						
				  <div class="col-sm-4">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('/super6-properties')}}"><img class="w-100" src="uploads/super6.jpg" alt=""></a>
					   <div class="list-price">INR  1.25 Cr</div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('/super6-properties')}}">2 BHK For Sale in DPL Flora Orchid Farms</a></h6>
                      <p class="list-text">Sector 135, Noida</p>
                      <div class="list-meta d-flex align-items-center">
                        <!-- <a href="property.php?id=250&title=Al Yasmeen Villa"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="property.php?id=250&title=Al Yasmeen Villa"><span class="fa fa-shower"></span>7 bath</a> -->
                        <a href="{{ asset('/super6-properties')}}"><span class="fa fa-object-ungroup"></span>1008 sqyrd</a>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('/super6-properties')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
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
	
	<section style="background-color: #000; color: #fff; padding: 20px 0;">
  <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="text-align: center; font-size: 28px; margin-bottom: 30px; color: #fff;">Enquiry Form</h2>
    
    <form id="enquiry-form" action="https://formspree.io/f/xjkanlqw" method="POST">
      
      <!-- Full Name -->
      <div style="margin-bottom: 20px;">
        <label for="name" style="display: block; margin-bottom: 8px; color: #fff;">Full Name</label>
        <input type="text" id="name" name="name" required
          style="width: 100%; padding: 12px; border: 1px solid #fff; background: transparent; color: #fff; border-radius: 4px;" />
      </div>

      <!-- Email Address -->
      <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; margin-bottom: 8px; color: #fff;">Email Address</label>
        <input type="email" id="email" name="email" required
          style="width: 100%; padding: 12px; border: 1px solid #fff; background: transparent; color: #fff; border-radius: 4px;" />
      </div>

      <!-- Phone Number -->
      <div style="margin-bottom: 20px;">
        <label for="phone" style="display: block; margin-bottom: 8px; color: #fff;">Phone Number</label>
        <input type="tel" id="phone" name="phone" required
          style="width: 100%; padding: 12px; border: 1px solid #fff; background: transparent; color: #fff; border-radius: 4px;" />
      </div>

      <!-- Expected Rent -->
      <div style="margin-bottom: 20px;">
        <label for="rent" style="display: block; margin-bottom: 8px; color: #fff;">Asking Price</label>
        <input type="text" id="rent" name="expected_rent" placeholder="Enter expected price..."
          style="width: 100%; padding: 12px; border: 1px solid #fff; background: transparent; color: #fff; border-radius: 4px;" />
      </div>

      <!-- Message -->
      <div style="margin-bottom: 20px;">
        <label for="message" style="display: block; margin-bottom: 8px; color: #fff;">Message</label>
        <textarea id="message" name="message" rows="5" required
          style="width: 100%; padding: 12px; border: 1px solid #fff; background: transparent; color: #fff; border-radius: 4px;"></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        style="width: 100%; padding: 12px; background-color: #fff; color: #000; font-size: 16px; border: none; border-radius: 4px; cursor: pointer;">
        Submit Enquiry
      </button>

    </form>
  </div>
</section>



	<section class="our-cta2 p0" style="overflow: hidden;">
      <div class="cta-banner2 bgc-thm maxw1600 mx-auto pt100 pt50-md pb85 pb50-md px30-md bdrs12 position-relative">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="uploads/element-1.png" alt="" />
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="uploads/element-2.png" alt="" />
        </div>
        <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
          <img src="uploads/cta-img-1.png" alt="" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
              <div class="cta-style2">
                <h2 class="cta-title">Need help? Talk to our expert</h2>
                <p class="cta-text">"Join us on this exciting journey as we shape the future of Real Estate"</p>
                <a href="{{ asset('/contact')}}" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a><br><br>
				<a href="tel: +91-8588844441" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>+91-8588844441</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
       
    </section>

   

    @include('user_layout.footer');