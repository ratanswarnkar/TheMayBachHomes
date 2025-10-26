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
            <a class="menubar" href="#menu"><img src="uploadsmobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="index.php"><img src="uploads/logo.jpg" alt=""></a>
       <!--     <a href="page-login.php"><span class="icon fz18 fa fa-user-circle"></span></a>  -->        </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><a href="{{ asset('home')}}">Home</a></li>
		<li><a href="{{ asset('about-us')}}">About Us</a></li>
        <li><a href="{{ asset('projects')}}">Projects</a></li>
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
						 <form action="{{ asset('projects')}}" method="get" class="form-search position-relative" accept-charset="utf-8">
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
                                <select class="selectpicker projectdropdown" name="p_project" data-live-search="true" data-width="100%" tabindex="null">
                      <option value="">Available Projects</option>
					                        <option value="Serene Garden 2BHK">Serene Garden 2BHK</option>
           
                                  <option value="Serene Garden 1BHK">Serene Garden 1BHK</option>
           
                                  <option value="Serene Garden Studio">Serene Garden Studio</option>
           
                                  <option value="Maya 1BHK">Maya 1BHK</option>
           
                                  <option value="Maya 2BHK">Maya 2BHK</option>
           
                                  <option value="Maya Studio">Maya Studio</option>
           
                                  <option value="Reportage Village 4B Town House">Reportage Village 4B Town House</option>
           
                                  <option value="Reportage Village 3B Town House">Reportage Village 3B Town House</option>
           
                                  <option value="Reportage Village 2B Town House">Reportage Village 2B Town House</option>
           
                                  <option value="Alpha 1BHK">Alpha 1BHK</option>
           
                                  <option value="Alpha 2.5BHK">Alpha 2.5BHK</option>
           
                                  <option value="Palm Beach Towers ">Palm Beach Towers </option>
           
                                  <option value="Dolce Vita Executive">Dolce Vita Executive</option>
           
                                  <option value="Dolce Vita Premium Club">Dolce Vita Premium Club</option>
           
                                  <option value="Wilton Park Studio">Wilton Park Studio</option>
           
                                  <option value="Al Zahya">Al Zahya</option>
           
                                  <option value="Al Yasmeen Villa">Al Yasmeen Villa</option>
           
                      
                       
                    </select>
                                </div>
                              
                            </div>
                          </div>
						   
						   
						  
						  
						  
						  
						  
  
  
                          <div class="col-md-3 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                         
                              <button type="submit" class="advance-search-icon ud-btn btn-thm ms-4"><span class="fa fa-search"></span></button>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
		  <form action="searchresultpro.php" method="get" class="form-search position-relative" accept-charset="utf-8">
          <div class="modal-body pb-0">
             <div class="row">
			  <div class="col-sm-6">
                <div class="widget-wrapper">
                 
                   <div class="form-style2 input-group">
                    <select class="selectpicker projectdropdown" name="p_project" data-live-search="true" data-width="100%" tabindex="null">
                      <option value="">Available Projects</option>
					                        <option value="Serene Garden 2BHK">Serene Garden 2BHK</option>
           
                                  <option value="Serene Garden 1BHK">Serene Garden 1BHK</option>
           
                                  <option value="Serene Garden Studio">Serene Garden Studio</option>
           
                                  <option value="Maya 1BHK">Maya 1BHK</option>
           
                                  <option value="Maya 2BHK">Maya 2BHK</option>
           
                                  <option value="Maya Studio">Maya Studio</option>
           
                                  <option value="Reportage Village 4B Town House">Reportage Village 4B Town House</option>
           
                                  <option value="Reportage Village 3B Town House">Reportage Village 3B Town House</option>
           
                                  <option value="Reportage Village 2B Town House">Reportage Village 2B Town House</option>
           
                                  <option value="Alpha 1BHK">Alpha 1BHK</option>
           
                                  <option value="Alpha 2.5BHK">Alpha 2.5BHK</option>
           
                                  <option value="Palm Beach Towers ">Palm Beach Towers </option>
           
                                  <option value="Dolce Vita Executive">Dolce Vita Executive</option>
           
                                  <option value="Dolce Vita Premium Club">Dolce Vita Premium Club</option>
           
                                  <option value="Wilton Park Studio">Wilton Park Studio</option>
           
                                  <option value="Al Zahya">Al Zahya</option>
           
                                  <option value="Al Yasmeen Villa">Al Yasmeen Villa</option>
           
                      
                       
                    </select>
                  </div>
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="widget-wrapper">
                   
                   <div class="form-style2 input-group" style="border: 1px solid #ccc;height: 48px;border-radius: 10px;padding: 10px 15px;">
                  Handover Date <input type="date" name="p_handover" style="float: right;position: absolute;right: 10px;top: 7px;border: none;">
                  </div>
                </div>
              </div>
            </div>
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
<option value="Al Hamra">Al Hamra</option>
<option value="Ajmal Makan">Ajmal Makan</option>
<option value="AZIZI">AZIZI</option> 
<option value="BINGHATTI">BINGHATTI</option> 
<option value="DAMAC">DAMAC</option>
<option value="Deyaar">Deyaar</option>
<option value="DANUBE">DANUBE</option>
<option value="DMCC">DMCC</option>
<option value="DUBAI PROPERTIES">DUBAI PROPERTIES</option>
<option value="ELLINGTON">ELLINGTON</option>   
<option value="EMAAR">EMAAR</option>  
<option value="Empire Residence">Empire Residence</option>
<option value="FAKHRUDDIN">FAKHRUDDIN</option> 
<option value="MAG">MAG</option>  
<option value="MAYA">MAYA</option> 
<option value="Me Do Ee">Me Do Ee</option>
<option value="NAKHEEL">NAKHEEL</option> 
<option value="NSHAMA">NSHAMA</option>
<option value="OMNIYAT">OMNIYAT</option>
<option value="OCTA">OCTA</option>
<option value="Prescott">Prescott</option>
<option value="REPORTAGE">REPORTAGE</option>   
<option value="SAMANA">SAMANA</option>            
<option value="SOBHA">SOBHA</option>   
<option value="Symbolic">Symbolic</option>
<option value="Sotheby">Sotheby's</option>
<option value="THE HEART OF EUROPE">THE HEART OF EUROPE</option>
<option value="TIGER">TIGER</option>              
<option value="VINCITORE">VINCITORE</option>
<option value="wow (sls)">wow (sls)</option>
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
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
   
    <!-- Property Half Map V4 -->
    <section class="bgc-black" style="padding: 0px 0 50px;">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
           
          <div class="col-xl-12">
            <div class="mt30">
              <div class="text-center text-xl-start">
                <h4 class="mb-1" style="padding-bottom:20px; color:#fff;">Projects</h4>                
              </div>
               
               
               <div class="row">
                 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p1details')}}"> <img class="w-100" src="uploads/p1.webp" alt=""></a>
                      <div class="list-price top">Handover: 2025-12-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p1details')}}">M3M Jewel Crest Avenue, Sector 97, Noida</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p1details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p1details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> M3M Jewel Crest Avenue</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p2details')}}"> <img class="w-100" src="uploads/p2.png" alt=""></a>
                      <div class="list-price top">Handover: 2025-12-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p2details')}}">M3M Jacob & Co. Residences, Sector 97</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p2details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p2details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> M3M Jacob & Co. Residences</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p3details')}}"> <img class="w-100" src="uploads/p3.webp" alt=""></a>
                      <div class="list-price top">Handover: 2025-12-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p3details')}}">Ekana Business Centre, Gomti Nagar</a></h6>
                      <p class="list-text">Gomti Nagar Extension, Lucknow</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p3details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p3details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Ekana Business Centre</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p4details')}}"> <img class="w-100" src="uploads/p4.webp" alt=""></a>
                      <div class="list-price top">Handover: 2027-12-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p4details')}}">Sikka The Crown of Noida, Sector 143A</a></h6>
                      <p class="list-text">Sector 143A, Noida (Greater Noida Expressway)</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p4details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p4details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Sikka The Crown of Noida</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p5details')}}"> <img class="w-100" src="uploads/p5.webp" alt=""></a>
                      <div class="list-price top">Handover: 2027-12-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p5details')}}">Migsun 1 Destination, Sushant Golf City</a></h6>
                      <p class="list-text">Lucknow</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p5details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p5details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Migsun 1 Destination</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p6details')}}"> <img class="w-100" src="uploads/p6.webp" alt=""></a>
                      <div class="list-price top">Handover: 2027-12-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p6details')}}">Bhutani City Center 32, Sector 32, Noida</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p6details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p6details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Bhutani City Center 32</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p7details')}}"> <img class="w-100" src="uploads/p7.webp" alt=""></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p7details')}}">M3M The Line, Sector 72, Noida</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p7details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p7details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> M3M The Line</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p8details')}}"> <img class="w-100" src="uploads/p8.webp" alt=""></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p8details')}}">Migsun Food Lane, Sushant Golf City</a></h6>
                      <p class="list-text">Lucknow</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p8details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p8details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Migsun Food Lane</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p9details')}}"> <img class="w-100" src="uploads/p9.webp" alt=""></a>
                      <div class="list-price top">Handover: 2026-04-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p9details')}}">EON Fairfox, Sector 140, Noida </a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p9details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p9details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> EON Fairfox </a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p10details')}}"> <img class="w-100" src="uploads/p10.webp" alt=""></a>
                      <div class="list-price top">Handover: 2026-06-30</div>                                         </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p10details')}}">Eldeco Whispers of Wonder (Wow)</a></h6>
                      <p class="list-text">Sector 22D, Yamuna Expressway Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p10details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p10details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Eldeco Whispers of Wonder (Wow)</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p11details')}}"> <img class="w-100" src="uploads/p11.webp" alt=""></a>
                      <div class="list-price top">Handover: 2026-06-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p11details')}}">CRC Maesta, Sector 1, Greater Noida West</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p11details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p11details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> CRC Maesta</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>		
				
				 	
                <div class="col-sm-4">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p12details')}}"> <img class="w-100" src="uploads/p12.webp" alt=""></a>
                      <div class="list-price top">Handover: 2023-09-30</div>                      
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p12details')}}">SPJ Vedatam, Sector 14, Gurgaon
                       
                      <hr class="mt-2 mb-2">
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p12details')}}">Gurgaon</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p12details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> SPJ Vedatam</a>
                         
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
          <img class="img-1 spin-right" src="uploadselement-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="uploadselement-2.png" alt="">
        </div>
        <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
          <img src="uploadscta-img-1.png" alt="">
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
	
	
	
  <!-- Our CTA --> 
     

   
 @include('user_layout.footer');