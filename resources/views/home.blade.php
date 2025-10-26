@include('user_layout.header');
<style>
  .search-section {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.95);
  border-radius: 12px;
  padding: 25px;
  width: 90%;
  max-width: 1000px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  z-index: 99;
}

/* Tabs */
.tabs {
  display: flex;
  justify-content: flex-start;
  border-bottom: 1px solid #ddd;
  background: #fff;
  border-radius: 10px 10px 0 0;
}

.tab {
  padding: 12px 24px;
  cursor: pointer;
  font-weight: 600;
  color: #555;
  border-bottom: 3px solid transparent;
  transition: all 0.3s ease;
}

.tab.active {
  border-color: #000;
  color: #000;
}

/* Filters */
.filters {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: center;
  padding-top: 20px;
}

.dropdown {
  padding: 12px 16px;
  border: 1px solid #ddd;
  border-radius: 6px;
  background: #f9f9f9;
  font-size: 15px;
  min-width: 200px;
}

.search-btn {
  background: #000;
  color: #fff;
  border: none;
  border-radius: 6px;
  padding: 12px 25px;
  cursor: pointer;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.search-btn:hover {
  background: #333;
}

@media (max-width: 768px) {
  .filters {
    flex-direction: column;
    align-items: center;
  }

  .dropdown, .search-btn {
    width: 100%;
  }

  .search-section {
    top: 60%;
    padding: 20px;
  }
}

  </style>
 
  <div class="hiddenbar-body-ovelay"></div>

 
  <div id="page" class="mobilie_header_nav stylehome1">
     
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="uploads/mobile-dark-nav-icon.svg" alt="" /></a>
            <a class="mobile_logo" href="index.php"><img src="uploads/laga.png" alt="" /></a>
       <!--     <a href="page-login.php"><span class="icon fz18 fa fa-user-circle"></span></a>  -->        </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    

     
  </div>
    
  
  <div class="body_content_wrapper">
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style1 p0">
	
      <div class="home-style1">
	  <video class="home-screen__step-1__bg__video" autoplay="" muted="" loop="" playsinline="" style="position: fixed;left: 0;bottom: 0;width: auto;">
        <source src="uploads/LovinoRealEstate.mp4" type="video/mp4" />
      </video>
        <div class="container">
          <div class="row">
            <div class="col-xl-11 mx-auto">
              <div class="inner-banner-style1 text-center" style="z-index:99;">
                <!-- ✅ Search Section -->
<form action="{{ asset('projects')}}" method="GET">
  <div class="search-section">
    <!-- Tabs -->
    <div class="tabs">
      <div class="tab active">Projects</div>
      <div class="tab">Sale</div>
      <div class="tab">Rent</div>
    </div>

    <!-- Filters -->
    <div class="filters">
      <select name="propertyType" class="dropdown">
        <option value="">Property Type</option>
        <option value="residential">Residential</option>
        <option value="commercial">Commercial</option>
        <option value="plot">Plot</option>
      </select>

      <select name="city" class="dropdown">
        <option value="">Select City</option>
        <option value="delhi">Delhi</option>
        <option value="mumbai">Mumbai</option>
        <option value="jaipur">Jaipur</option>
        <option value="chennai">Chennai</option>
      </select>

      <select name="project" class="dropdown">
        <option value="">Available Projects</option>
        <option value="luxury-villas">Luxury Villas</option>
        <option value="affordable-homes">Affordable Homes</option>
        <option value="smart-apartments">Smart Apartments</option>
      </select>

      <button type="submit" class="search-btn">🔍 Search</button>
    </div>
  </div>
</form>

                <h6 class="hero-sub-title animate-up-1"> </h6>
                <h2 class="hero-title animate-up-2">Invest In Your Dreams</h2>
                
     
        <a href="#explore-property">
          <div class="mouse_scroll animate-up-4">
            <img src="uploads/home-scroll.png" alt="" />          </div>
        </a>      </div>
    </div></section>

    <!-- Explore Apartment -->
    <section id="explore-property" class="pb60 pt80 pb60-md bgc-black">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
              <h2 class="title">Explore Property Types</h2>
              <p class="paragraph">"Where your dreams find their perfect abode"</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="explore-apartment-slider  wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                 
              <div class="col-lg-3 item">
                <a href="{{ asset('projects')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/apartments.jpg);background-size: cover;">
                    <span class="icon"><img src="uploads/icon2.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Apartments</h6>
                                            <p class="text mb-0">Click Here</p> 
                                          </div>
                  </div>
                </a>              </div>
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('projects')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Offices.jfif);background-size: cover;">
                    <span class="icon"><img src="uploads/icon3.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Office</h6>
                                            <p class="text mb-0">Click Here</p>
                                          </div>
                  </div>
                </a>              </div>
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('projects')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Villa.jpg);background-size: cover;">
                    <span class="icon"><img src="uploads/icon4.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Villa</h6>
                                            <p class="text mb-0">Click Here</p>
                                          </div>
                  </div>
                </a>              </div>
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('projects')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Townhouse.jfif);background-size: cover;">
                    <span class="icon"><img src="uploads/icon5.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Townhouse</h6>
                                            <p class="text mb-0">Click Here</p>
                                          </div>
                  </div>
                </a>              </div>
              
                           </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pt60 pb60 pb10-md bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="main-title text-center">
              <h2 class="title">Your Real Estate Compass: Navigating your journey</h2>
              <p class="paragraph">"Finding Your Place: Expertise in Buying, Selling, and Renting"</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="uploads/property-buy.svg" alt="" /></div>
              <div class="iconbox-content">
                <h4 class="title">Buy a property</h4>
                <p class="text">Discover your dream home with us - buy a property that suits your needs and desires!</p>
                <a href="{{ asset('projects')}}" class="ud-btn btn-white2">Find a home<i class="fal fa-arrow-right-long"></i></a>              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="uploads/property-rent.svg" alt="" /></div>
              <div class="iconbox-content">
                <h4 class="title">Sell a property</h4>
                <p class="text">Maximize your property's potential - sell with us for a seamless and successful transaction!</p>
                <a href="{{ asset('sale')}}" class="ud-btn btn-white2">Sell from us<i class="fal fa-arrow-right-long"></i></a>              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="uploads/property-sell.svg" alt="" /></div>
              <div class="iconbox-content">
                <h4 class="title">Rent a property</h4>
                <p class="text">Experience the perfect rental - find your ideal home with us and enjoy the comfort and convenience you deserve!</p>
                <a href="{{ asset('rent')}}" class="ud-btn btn-white2">Find a rental<i class="fal fa-arrow-right-long"></i></a>              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="bgc-black">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Latest Projects</h2>
              <p class="paragraph">"Where extraordinary landmarks meet impeccable service"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="{{ asset('projects')}}">See All Projects <i class="fa fa-long-arrow-right"></i></a>            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2674px, 0px, 0px); transition: 1.2s; width: 4584px;"><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p1details')}}"> <img class="w-100" src="uploads/p1.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2025-08-01</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p1details')}}">M3M Jewel Crest Avenue, Sector 97, Noida</a></h6>
                      <p class="list-text">M3M Jewel Crest Avenue</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p1details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p1details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i>M3M Jewel Crest Avenue</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p2details')}}"> <img class="w-100" src="uploads/p2.png" alt="" /></a>
                      <div class="list-price top">Handover: 2026-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p2details')}}">M3M JACOB And CO Residences, Sector 97, Noida</a></h6>
                      <p class="list-text">M3M JACOB</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p2details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p2details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i>M3M JACOB And CO Residences</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p3details')}}"> <img class="w-100" src="uploads/p3.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2023-09-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p3details')}}">Ekana Business Centre, Gomti Nagar Extension, Lucknow</a></h6>
                      <p class="list-text">Ekana Business Centre</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p3details')}}">Ready To Move</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p3details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Ekana Business Centre</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p4details')}}"> <img class="w-100" src="uploads/p4.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2025-12-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p4details')}}">Sikka The Crown of Noida, Sector 143A, Noida</a></h6>
                      <p class="list-text">Sikka The Crown of Noida</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p4details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p4details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Sikka The Crown of Noida</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p5details')}}"> <img class="w-100" src="uploads/p5.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p5details')}}">Migsun 1 Destination, Sushant Golf City, Lucknow</a></h6>
                      <p class="list-text">Lucknow</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p5details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p5details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Migsun 1 Destination</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p6details')}}"> <img class="w-100" src="uploads/p6.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p6details')}}">Bhutani City Center 32, Sector 32, Noida</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p6details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p6details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Bhutani City Center 32</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p7details')}}"> <img class="w-100" src="uploads/p7.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2026-04-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p7details')}}">M3M The Line, Sector 72, Noida </a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p7details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p7details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> M3M The Line </a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p8details')}}"> <img class="w-100" src="uploads/p8.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2026-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p8details')}}">Migsun Food Lane, Sushant Golf City, Lucknow</a></h6>
                      <p class="list-text">Lucknow</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p8details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p8details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Migsun Food Lane</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p9details')}}"> <img class="w-100" src="uploads/p9.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2023-09-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p9details')}}">EON Fairfox, Sector 140, Noida</a></h6>
                      <p class="list-text">Noida</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p9details')}}">Ready To Move</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p9details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> EON Fairfox</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- </div></div><div class="owl-item cloned active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="project-page.php?id=235&amp;title=Serene Garden 1BHK"> <img class="w-100" src="uploads/19e56da449e981f52ab0b7ad83650acf01 Priscott Serene Garden.jpg" alt="" /></a>
                      <div class="list-price top">Handover: 2025-12-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="project-page.php?id=235&amp;title=Serene Garden 1BHK">Serene Garden 1BHK</a></h6>
                      <p class="list-text">Discovery Gardens</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="project-page.php?id=235&amp;title=Serene Garden 1BHK">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="project-page.php?id=235&amp;title=Serene Garden 1BHK" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Serene Garden 1BHK</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="project-page.php?id=243&amp;title=Alpha 1BHK"> <img class="w-100" src="uploads/3082fa2f9e5577a7c3453c69a0709458Symbolic Alpha Day view.jpg" alt="" /></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="project-page.php?id=243&amp;title=Alpha 1BHK">Alpha 1BHK</a></h6>
                      <p class="list-text">Dubai</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="project-page.php?id=243&amp;title=Alpha 1BHK">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="project-page.php?id=243&amp;title=Alpha 1BHK" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Alpha 1BHK</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p6details')}}"> <img class="w-100" src="uploads/b03ae23663ac55019a1dff196cf2961fSymbolic Alpha Night view.jpg" alt="" /></a>
                      <div class="list-price top">Handover: 2025-06-30</div>                    
                    
                    <span style="display: block;background: #F2DC85;position: absolute;right: 0px;color: #000;bottom: 10px;padding: 0px 10px;border-radius: 5px 0 0 5px;">Featured</span>
                                        
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p6details')}}">Alpha 2.5BHK</a></h6>
                      <p class="list-text">Dubai</p>
                       
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="project-type"><a href="{{ asset('p6details')}}">Off Plan</a></span>
                        <div class="icons d-flex align-items-center">
                          <a href="{{ asset('p6details')}}" style="padding: 5px 0;line-height: 22px;"><i class="fa fa-map-marker"></i> Alpha 2.5BHK</a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div> -->
          </div>
        </div>
      </div>
    </section>
 
  
    <section class="bgc-dark">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title text-white">Discover Popular Properties For Re-Sale</h2>
              <p class="paragraph text-white">"Opening Doors to New Beginnings: Buying, Selling, Renting Simplified"</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="{{ asset('sale')}}" style="color:#fff;">See All Sale Properties<i class="fa fa-long-arrow-right"></i></a>            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme owl-loaded owl-drag">
                   	
                		
				
				 	
                		
				
				 	
                		
				
						
               
               
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1146px, 0px, 0px); transition: all; width: 3438px;"><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p10details')}}"><img class="w-100" src="uploads/p10.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p10details')}}">Eldeco Whispers of Wonder (Wow), Sector 22D, Yamuna Expressway, Greater Noida</a></h6>
                      <p class="list-text">Greater Noida</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p10details')}}"><span class="fa fa-bed"></span>2 bed</a>
                        <a href="{{ asset('p10details')}}"><span class="fa fa-shower"></span>2 bath</a>
                        <a href="{{ asset('p10details')}}"><span class="fa fa-object-ungroup"></span>1262.71 - 1291.88  sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p10details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p11details')}}"><img class="w-100" src="uploads/p11.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p11details')}}">CRC Maesta, Sector 1, Greater Noida West</a></h6>
                      <p class="list-text">Greater Noida West</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p11details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-object-ungroup"></span>3430 sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p11details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p12details')}}"><img class="w-100" src="uploads/p12.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p12details')}}">SPJ Vedatam, Sector 14, Gurgaon</a></h6>
                      <p class="list-text">Gurgaon</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p12details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p12details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p12details')}}"><span class="fa fa-object-ungroup"></span>3200 sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p12details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p13details')}}"><img class="w-100" src="uploads/p13.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p10details')}}">Westway Central Ikon, Sector 105, Noida</a></h6>
                      <p class="list-text">Noida</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p13details')}}"><span class="fa fa-bed"></span>2 bed</a>
                        <a href="{{ asset('p13details')}}"><span class="fa fa-shower"></span>2 bath</a>
                        <a href="{{ asset('p13details')}}"><span class="fa fa-object-ungroup"></span>1262.71 - 1291.88  sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p13details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p11details')}}"><img class="w-100" src="uploads/p14.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p11details')}}">Sikka Skyhome, Sector 143B, Noida</a></h6>
                      <p class="list-text">Noida</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p11details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-object-ungroup"></span>3430 sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p11details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p15details')}}"><img class="w-100" src="uploads/p15.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p15details')}}">AIPL Joy District, Sector 88, Gurugram</a></h6>
                      <p class="list-text">Gurugram</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p15details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p15details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p15details')}}"><span class="fa fa-object-ungroup"></span>3200 sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p15details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p16details')}}"><img class="w-100" src="uploads/p16.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p16details')}}">CRC The Flagship, Sector 140A, Noida</a></h6>
                      <p class="list-text">Noida</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p10details')}}"><span class="fa fa-bed"></span>2 bed</a>
                        <a href="{{ asset('p10details')}}"><span class="fa fa-shower"></span>2 bath</a>
                        <a href="{{ asset('p10details')}}"><span class="fa fa-object-ungroup"></span>1262.71 - 1291.88  sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p16details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p11details')}}"><img class="w-100" src="uploads/p17.webp" alt="" /></a>
					   <div class="list-price">AED  1,300,000 </div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p11details')}}">Al Zahya</a></h6>
                      <p class="list-text">Ajman</p>
                      <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p11details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p11details')}}"><span class="fa fa-object-ungroup"></span>3430 sq.ft sqft</a>
                      </div>
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p11details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 salessection">
                    <div class="list-thumb">
                      <a href="{{ asset('p16details')}}"><img class="w-100" src="uploads/p16.webp" alt="" /></a>
					   <div class="list-price"></div>
	                   
                    </div>
                    <div class="list-content">
                      <h6 class="list-title"><a href="{{ asset('p16details')}}">CRC The Flagship, Sector 140A, Noida</a></h6>
                      <p class="list-text">Noida</p>
                      <!-- <div class="list-meta d-flex align-items-center">
                        <a href="{{ asset('p12details')}}"><span class="fa fa-bed"></span>5 bed</a>
                        <a href="{{ asset('p12details')}}"><span class="fa fa-shower"></span>7 bath</a>
                        <a href="{{ asset('p12details')}}"><span class="fa fa-object-ungroup"></span>3200 sq.ft sqft</a>
                      </div> -->
                      <hr class="mt-2 mb-2" />
                      <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <span class="for-what">For Sale</span>
                        <div class="icons d-flex align-items-center">
                          
                         <span class="project-type"><a href="{{ asset('p16details')}}"> View Details <i class="fa fa-long-arrow-right"></i></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us -->
     

    <!-- Popular Property -->
    <!-- <section class="pb40-md pb90 bg-white">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
          <div class="col-lg-12">
            <div class="main-title2">
              <h2 class="title">Find Properties in your Favorite City</h2>
              <p class="paragraph">"Experience a new era of living"</p>
            </div>
          </div>
           
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="property-city-slider dots_none slider-dib-sm slider-4-grid2 vam_nav_style owl-theme owl-carousel owl-loaded owl-drag">
			
			 
              
			   
              
			     
              
			    
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1146px, 0px, 0px); transition: all; width: 3438px;"><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-1.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Dubai</h6>
                                            <p class="text">15 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Dubai">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-2.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Abu Dhabi</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Abu Dhabi">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-3.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Sharjah</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Sharjah">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-4.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Ajman</h6>
                                            <p class="text">2 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Ajman">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-1.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Dubai</h6>
                                            <p class="text">15 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Dubai">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-2.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Abu Dhabi</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Abu Dhabi">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-3.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Sharjah</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Sharjah">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-4.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Ajman</h6>
                                            <p class="text">2 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Ajman">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-1.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Dubai</h6>
                                            <p class="text">15 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Dubai">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-2.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Abu Dhabi</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Abu Dhabi">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-3.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Sharjah</h6>
                                            <p class="text">Coming Soon</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Sharjah">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;"><div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="uploads/city-listing-4.png" alt="" /></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Ajman</h6>
                                            <p class="text">2 Properties</p>
                                          </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="property-city.php?city=Ajman">View All <i class="fa fa-long-arrow-right"></i></a>                    </div>
                  </div>
                </div>
              </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
          </div>
        </div>
      </div>
    </section> -->

   <section class="pt60 pb50-md bgc-thm-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="main-title">
              <h2 class="title">Hear from our satisfied clients</h2>
              <p class="paragraph">"Read what our satisfied clients have to say about their remarkable experiences with us!"</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp owl-loaded owl-drag" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
			
			  	
              
               	
              
               	
              
               	
              
               	
              
                             
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1146px, 0px, 0px); transition: all; width: 4202px;"><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Helped me navigate through complex investment opportunities from my savings. Transparency, and honest advice gave me the confidence to make informed decisions. Thanks and i look forward to many more successful ventures with them.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/122f8065dedd4ef178f649f87a6583edMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Wael</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Their knowledge of the market and commitment to achieving the best results surpassed my expectations. More confidence with you guys now.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/540f21e22e01708eafca23650a092fdbMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Tamim</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Their team took the time to understand my unique requirements and provided me with an exxlusive selection of properties that matched my vision. Assisted me throughout the negotiation process, ensuring I secured a favorable lease agreement.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/a5c8f87596bc5ffa5a271dc8be065e5bMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Mustafa</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>I had an incredible experience working Lovino Real Estate. They took the time to understand my preferences and guided me through the entire process with professionalism and care. Thanks to their expertise and attention to detail, I found a property that exceeded my expectations. I couldn`t be happier with my decision.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/3478dd6534b552344ac8d4c5cb2f93fdFemale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mrs. Sarah</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>I recently relocated to a new city and needed to find a rental property quickly. Valuable guidance, promptly answered all my questions, and ensured a smooth transition into my new home. I am grateful for their professionalism.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/cd945a691af65d57dd579732c624e324Male.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Manoj</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item active" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Helped me navigate through complex investment opportunities from my savings. Transparency, and honest advice gave me the confidence to make informed decisions. Thanks and i look forward to many more successful ventures with them.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/122f8065dedd4ef178f649f87a6583edMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Wael</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Their knowledge of the market and commitment to achieving the best results surpassed my expectations. More confidence with you guys now.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/540f21e22e01708eafca23650a092fdbMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Tamim</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Their team took the time to understand my unique requirements and provided me with an exxlusive selection of properties that matched my vision. Assisted me throughout the negotiation process, ensuring I secured a favorable lease agreement.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/a5c8f87596bc5ffa5a271dc8be065e5bMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Mustafa</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>I had an incredible experience working Lovino Real Estate. They took the time to understand my preferences and guided me through the entire process with professionalism and care. Thanks to their expertise and attention to detail, I found a property that exceeded my expectations. I couldn`t be happier with my decision.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/3478dd6534b552344ac8d4c5cb2f93fdFemale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mrs. Sarah</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>I recently relocated to a new city and needed to find a rental property quickly. Valuable guidance, promptly answered all my questions, and ensured a smooth transition into my new home. I am grateful for their professionalism.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/cd945a691af65d57dd579732c624e324Male.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Manoj</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div><div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title"> </h5>
                    <span class="icon fa fa-quote-left"></span>
                    <p>Helped me navigate through complex investment opportunities from my savings. Transparency, and honest advice gave me the confidence to make informed decisions. Thanks and i look forward to many more successful ventures with them.</p>                    <div class="testimonial-review">
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a class="me-1" href=""><i class="fa fa-star"></i></a>
                      <a href=""><i class="fa fa-star"></i></a>                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="" src="uploads/122f8065dedd4ef178f649f87a6583edMale.svg" alt="" style="width:50px;" />                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Mr. Wael</h6>
                 
                    </div>
                  </div>
                </div>
              </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
          </div>
        </div>
      </div>
    </section>

<section id="team" class="team-section">
  <div class="container">
    <h2 class="section-title">Meet Our Team</h2>

    <!-- Founder -->
<div class="founder">
  <img src="images/founder.jpeg" alt="Founder">
  <h2>Mr. Pranay Barthwal</h2>
  <h4>Founder / Managing Director</h4>

  <!-- Attractive Button -->
  <a href="{{ asset('founder')}}" class="founder-btn">Read More About Founder</a>
</div>


    <!-- Connecting line -->
    <div class="connector-line"></div>

    <!-- HR and Manager -->
    <div class="managers">
      <div class="member">
        <img src="images/hr.png" alt="HR">
        <h3>Ms. Sakshi Sharma</h3>
        <p>Human Resources</p>
      </div>
      <div class="member">
        <img src="images/manager.png" alt="Manager">
        <h3>Mr. Shivam Yadav</h3>
        <p>Administrator</p>
      </div>
    </div>

    <!-- Connector -->
    <div class="connector-line"></div>

    <!-- Team Members -->
    <div class="team-members">
      <div class="member">
        <img src="images/it.jpeg" alt="Sales Executive">
        <h3>Ratan Swarnkar</h3>
        <p>IT Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager.png" alt="Marketing Head">
        <h3>Rajat Kumar</h3>
        <p>Client Manager</p>
      </div>
      <div class="member">
        <img src="images/real_estate_expert.png" alt="Engineer">
        <h3>Nishant Chauhan</h3>
        <p>Senior Real Estate Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager1.jpeg" alt="Designer">
        <h3>Anshika Sharma</h3>
        <p>Client Manager</p>
      </div>
    </div>
  </div>
</section>

<style>
  .founder {
  text-align: center;
  margin-top: 40px;
}

.founder img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
  transition: transform 0.3s ease;
}

.founder img:hover {
  transform: scale(1.05);
}

/* Gold Button */
.founder-btn {
  display: inline-block;
  margin-top: 15px;
  padding: 12px 28px;
  background-color: #d4af37; /* your uploaded gold color */
  color: #000;
  text-decoration: none;
  font-weight: 600;
  border-radius: 50px;
  box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);
  transition: all 0.3s ease;
}

.founder-btn:hover {
  background-color: #c19a2c;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(212, 175, 55, 0.6);
}

.team-section { position: relative; background: url("uploads/team-bg1.png") center/cover no-repeat; /* 🔹 your background image */ text-align: center; padding: 100px 20px; color: #fff; /* default white text for contrast */ overflow: hidden; }

.section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #fffff; /* ✅ Purple heading */
  margin-bottom: 50px;
}

/* Founder */
.founder {
  text-align: center;
  margin-bottom: 40px;
}

.founder img {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  object-fit: cover;
  border: 6px solid #fff;
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.founder h2 {
  margin-top: 15px;
  font-size: 1.4rem;
  color: #333;
}

.founder h4 {
  color: #666;
  font-size: 1rem;
}

/* Connector line */
.connector-line {
  width: 2px;
  height: 40px;
  background: #ccc;
  opacity: 0.6;
  margin: 20px auto;
}

/* HR + Manager */
.managers {
  display: flex;
  justify-content: center;
  gap: 60px;
  flex-wrap: wrap;
  margin-bottom: 40px;
}

.managers .member,
.team-members .member {
  background: #fff;
  color: #333;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  width: 220px;
  transition: transform 0.3s ease;
}

.member:hover {
  transform: translateY(-5px);
}

/* Member Images */
.managers .member img,
.team-members .member img {
  width: 180px;
  height: 200px;
  border-radius: 8px;
  object-fit: cover;
  margin-bottom: 10px;
  border: 3px solid #fff;
  box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}

.member h3 {
  font-size: 1.1rem;
  color: #111;
  margin: 8px 0 4px;
}

.member p {
  font-size: 0.9rem;
  color: #555;
}

/* Team Members */
.team-members {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 768px) {
  .founder img {
    width: 180px;
    height: 180px;
  }
  .managers, .team-members {
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }
  .connector-line {
    height: 25px;
  }
  .section-title {
    font-size: 1.8rem;
  }
}
</style>

    <!-- Our Partners --> 
      <!-- Our Testimonials -->
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
                <a href="contact.php" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a>
				<a href="tel: +91-7289898686" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>+91-7289898686</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
       
    </section>
    <script>
      
  const tabs = document.querySelectorAll('.tab');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });


      </script>
    @include('user_layout.footer');
  <!-- Our CTA --> 
  
     
