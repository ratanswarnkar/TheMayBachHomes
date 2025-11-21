@include('user_layout.header')

<style>
 
/* ========== FIX VIDEO BACKGROUND VISIBILITY ========== */
.home-style1 {
  position: relative;
  overflow: hidden;
}

.home-screen__step-1__bg__video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

/* ✅ Semi-transparent dark overlay to make text visible */
.video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* background: rgba(0, 0, 0, 0.55); */
  z-index: 0;
}

/* Ensure text and buttons stay above video */
.inner-banner-style1,
.center-box {
  position: relative;
  z-index: 2;
  color: #fff;
}

/* Heading Styling */
.box-heading {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 40px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.box-heading::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: rgba(0, 0, 0, 0.55);
  margin: 12px auto 0;
  border-radius: 2px;
}

/* Button Grid */
.button-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  max-width: 1000px;
  margin: 0 auto;
}

.btn-link {
  display: inline-block;
  padding: 14px 20px;
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  border: 1px solid #fff;
  border-radius: 8px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
}

.btn-link:hover {
  background: #f4b400;
  color: #000;
  transform: translateY(-3px);
}

/* Scroll Icon */
.mouse_scroll {
  margin-top: 50px;
  animation: bounce 2s infinite;
}

.mouse_scroll img {
  width: 40px;
  height: auto;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-10px); }
  60% { transform: translateY(-5px); }
}

/* Responsive Layout */
@media (max-width: 992px) {
  .button-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  .button-grid {
   
  }

  .box-heading {
    font-size: 26px;
  }
}
.video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

.video-background iframe {
    width: 100%;
    height: 100%;
    pointer-events: none;
}



  </style>
 
  <div class="hiddenbar-body-ovelay"></div>

 
  <div id="page" class="mobilie_header_nav stylehome1">
     
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="uploads/mobile-dark-nav-icon.svg" alt="" /></a>
            <a class="mobile_logo" href="{{ asset('home')}}"><img src="uploads/laga.png" alt="" /></a>
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
	  <!-- <video class="home-screen__step-1__bg__video" autoplay="" muted="" loop="" playsinline="">
        <source src="{{ asset('https://youtu.be/-oOoTIuoL8M?si=_2-FzqCZ9rAki3S7')}}" type="video/mp4" />
      </video> -->

      <div class="video-background">
    <iframe src="https://www.youtube.com/embed/-oOoTIuoL8M?autoplay=1&mute=1&controls=0&loop=1&playlist=-oOoTIuoL8M"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
    </iframe>
</div>

        <!-- ✅ Add overlay below -->
  <div class="video-overlay"></div>

  <div class="container">
    <div class="row">
      <div class="col-xl-11 mx-auto">
        <div class="inner-banner-style1 text-center" style="z-index:99;">
  <h2 class="box-heading">OUR PROPERTIES</h2>
  <div class="button-grid">
    <a href="{{ asset('/commercial-properties') }}" class="btn-link">COMMERCIAL</a>
    <a href="{{ asset('/sale-properties') }}" class="btn-link">RE-SALE</a>
    <a href="{{ asset('/rent-properties') }}" class="btn-link">RENT</a>
    <a href="{{ asset('/offplan-properties') }}" class="btn-link">OFFPLAN</a>
    <a href="{{ asset('/apartments-properties') }}" class="btn-link">APARTMENT</a>
    <a href="{{ asset('/office-properties') }}" class="btn-link">OFFICE</a>
    <a href="{{ asset('/villa-properties') }}" class="btn-link">VILLA</a>
    <a href="{{ asset('/super-properties') }}" class="btn-link">Premium Property</a>
  </div>
</div>

<!-- <a href="#explore-property">
  <div class="mouse_scroll animate-up-4">
    <img src="{{ asset('uploads/home-scroll.png') }}" alt="niakaa;" />
  </div>
</a> -->

              

                
     
        <!-- <a href="#explore-property">
          <div class="mouse_scroll animate-up-4">
            <img src="uploads/home-scroll.png" alt="" />          </div>
        </a>      </div> -->
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
            <div class="explore-apartment-slider  wow fadeInUp" data-wow-delay="300ms">
                 
              <div class="col-lg-3 item">
                <a href="{{ asset('/apartments-properties')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/apartments.jpg);background-size: cover;">
                    <span class="icon"><img src="uploads/icon2.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Apartments</h6>
                                            <p class="text mb-0">Click Here</p> 
                                            
                                          </div>
                  </div>
</a> 
</div>
                          
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('/office-properties')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Offices.jfif);background-size: cover;">
                    <span class="icon"><img src="uploads/icon3.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Office</h6>
                                            <p class="text mb-0">Click Here</p>
                                          </div>
                  </div>
                </a>              </div>
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('/villa-properties')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Villa.jpg);background-size: cover;">
                    <span class="icon"><img src="uploads/icon4.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Villa</h6>
                                            <p class="text mb-0">Click Here</p>
                                          </div>
                  </div>
                </a>              </div>
				   
              <div class="col-lg-3 item">
                <a href="{{ asset('/super-properties')}}">
                  <div class="iconbox-style1" style="background-image: url(uploads/Townhouse.jfif);background-size: cover;">
                    <span class="icon"><img src="uploads/icon5.png" /></span>
                    <div class="iconbox-content">
                      <h6 class="title">Premium PROPERTY</h6>
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
                <a href="{{ asset('/buy-property')}}" class="ud-btn btn-white2">Find a home<i class="fal fa-arrow-right-long"></i></a>              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="uploads/property-rent.svg" alt="" /></div>
              <div class="iconbox-content">
                <h4 class="title">Sell a property</h4>
                <p class="text">Maximize your property's potential - sell with us for a seamless and successful transaction!</p>
                <a href="{{ asset('/sale-properties')}}" class="ud-btn btn-white2">Sell from us<i class="fal fa-arrow-right-long"></i></a>              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="uploads/property-sell.svg" alt="" /></div>
              <div class="iconbox-content">
                <h4 class="title">Rent a property</h4>
                <p class="text">Experience the perfect rental - find your ideal home with us and enjoy the comfort and convenience you deserve!</p>
                <a href="{{ asset('/rent-properties')}}" class="ud-btn btn-white2">Find a rental<i class="fal fa-arrow-right-long"></i></a>              </div>
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
          <a class="ud-btn2" href="{{ asset('projects')}}">See All Projects <i class="fa fa-long-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
        <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme owl-loaded owl-drag">
          <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-2674px, 0px, 0px); transition: 1.2s; width: 4584px;">
              
              <!-- Your existing items (no change at all) -->
              <div class="owl-item cloned" style="width: 352px; margin-right: 30px;">
                <div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                      <a href="{{ asset('p1details')}}"> <img class="w-100" src="uploads/p1.webp" alt="" /></a>
                      <div class="list-price top">Handover: 2028-06-25</div>
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
                </div>
              </div>

              <!-- ... all your other project items remain EXACTLY the same ... -->
<div class="owl-item cloned" style="width: 352px; margin-right: 30px;"><div class="item">
                  <div class="listing-style1 projectssection">
                    <div class="list-thumb">
                     <a href="{{ asset('p2details')}}"> <img class="w-100" src="uploads/p2.png" alt="" /></a>
                      <div class="list-price top">Handover: 2028-10-07</div>                    
                    
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
                      <div class="list-price top">Handover: 2028-19-09</div>                    
                    
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
                     <a href="{{ asset('p4details')}}"><img class="w-100" src="uploads/p4.webp" alt="" /></a>
                      <div class="list-price top">Ready To Move</div>                    
                    
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
                      <div class="list-price top">Handover: 2028-12-27</div>                    
                    
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
                      <div class="list-price top">Ready To Move</div>                    
                    
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
                      <div class="list-price top">Handover: 2028-03-02</div>                    
                    
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
                      <div class="list-price top">Handover: 2028-09-18</div>                    
                    
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
                      <div class="list-price top">Handover: 2028-08-01</div>                    
                    
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
    </div>
  </div>
</section>

<!-- ✅ Include Owl Carousel dependencies (if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function () {
  // wait until Owl is initialized by your theme
  var slider = $('.feature-listing-slider');

  function startAutoplay() {
    if (slider.hasClass('owl-loaded')) {
      slider.trigger('play.owl.autoplay', [3000]); // every 3s
      console.log('✅ Autoplay started');
    } else {
      setTimeout(startAutoplay, 500); // try again until loaded
    }
  }

  // reconfigure autoplay options (safe even if already loaded)
  slider.owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 800,
    loop: true,
  });

  startAutoplay();
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  function forceAutoplay(selector, timeout = 3000) {
    const $el = jQuery(selector);
    if (!$el.length) return;

    // If already initialized by theme, trigger autoplay
    if ($el.hasClass("owl-loaded")) {
      $el.trigger("play.owl.autoplay", [timeout]);
      console.log("✅ Autoplay started for", selector);
      return;
    }

    // Wait until Owl is initialized by your theme
    setTimeout(() => forceAutoplay(selector, timeout), 500);
  }

  window.addEventListener("load", function() {
    // Ensure both sliders autoplay every 3 seconds
    forceAutoplay(".feature-listing-slider", 3000);
    forceAutoplay(".testimonial-slider", 3000);
  });
});
</script>


  
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

<section class="pt60 pb50-md" style="background-color: #ffffff;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
        <div class="main-title">
          <h2 class="title" style="color: #000 !important;">Hear from our satisfied clients</h2>
          <p class="paragraph" style="color: #555 !important;">"Read what our satisfied clients have to say about their remarkable experiences with us!"</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">

          <!-- Testimonial Item 1 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">Working with The MayBach Homes Property Group team was a seamless experience. Their attention to detail, transparency, and consistent updates made the process comfortable and stress-free. I highly recommend their services!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mrs. Sophia</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 2 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">The service was great, and they understood my property requirements well. I would have appreciated quicker turnaround times on the documentation, but overall, a very positive experience.</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Ankit</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 3 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">From property search to finalizing the deal, the entire process felt effortless. The professionalism and knowledge of the market really set them apart. Thank you for helping me find my dream home!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mrs. Laila</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 4 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">I found a wonderful rental property thanks to their support. The team was responsive and thoughtful, though I wish the viewing arrangements were more flexible. Still very satisfied!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Rizwan</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 5 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">I am impressed by the level of commitment and expertise shown during my property investment. They offered great insights and ensured all my queries were answered clearly. Would definitely work with them again.</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Harish</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 6 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">Truly a client-first experience. They understood my vision and worked tirelessly to deliver beyond expectations. Very reliable, responsive, and professional – 5 stars all the way!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Ms. Amelia</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 7 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #000 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #fff !important; margin-top: 10px;">The entire team was very professional and polite. I only wish we had a few more options to choose from, but the property I chose was still a great match for my needs. Thank you!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="uploads/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Youssef</h6>
                </div>
              </div>
            </div>
          </div>

        </div> <!-- End slider -->
      </div>
    </div>
  </div>
</section>




<section id="team" class="team-section">
  <div class="container">
    <h2 class="section-title" style="margin-top:40px;">Meet Our Team</h2>

    <!-- Row 1: Founder -->
    <div class="team-row row-1">
      <div class="">
        <div class="founder-frame">
          <img src="images/founder.jpeg" alt="Founder">
        </div>
        <h3>Mr. Pranay Barthwal</h3>
        <p>Founder / Managing Director</p>
        <a href="{{ asset('/founder') }}" class="bio-btn">Read More About Founder</a>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="team-row row-2">
      <div class="member">
        <img src="images/hr.png" alt="HR">
        <h3>Ms. Sakshi Kushwaha</h3>
        <p>HR Manager</p>
      </div>
      <div class="member">
        <img src="images/mannu.png" alt="Manager">
        <h3>Mr. Sameer Yadav</h3>
        <p>Business Development Manager</p>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="team-row row-3">
      <div class="member">
        <img src="images/it.jpeg" alt="IT Expert">
        <h3>Ratan Swarnkar</h3>
        <p>IT Expert</p>
      </div>
      <div class="member">
        <img src="images/parmu.jpeg" alt="Client Manager">
        <h3>Parminder Shokhal</h3>
        <p>IT Support</p>
      </div>
      <div class="member">
        <img src="images/rahul.jpeg" alt="Real Estate Expert">
        <h3>Rahul Jha</h3>
        <p>Digital Marketing Expert</p>
      </div>
    </div>

    <!-- Row 4 -->
    <div class="team-row row-4">
      <div class="member">
        <img src="images/client_manager1.jpeg" alt="Client Relationship Manager">
        <h3>Anshika Sharma</h3>
        <p>Client Relationship Manager</p>
      </div>
      <div class="member">
        <img src="images/neelam.jpeg" alt="Marketing Lead">
        <h3>Neelam Goswami</h3>
        <p>Sales Executive</p>
      </div>
      <div class="member">
        <img src="images/muskan.jpeg" alt="Sales Executive">
        <h3>Muskan</h3>
        <p>Tele Sales Agent</p>
      </div>
      <div class="member">
        <img src="images/sonam.jpg" alt="Finance Advisor">
        <h3>Sonam Chauhan</h3>
        <p>Client Relationship Manager</p>
      </div>
    </div>

    <!-- Row 5 -->
    <div class="team-row row-5">
      <div class="member">
        <img src="images/client_manager.png" alt="Legal Consultant">
        <h3>Rajat Khanna</h3>
        <p>Client Manager</p>
      </div>
      <div class="member">
        <img src="images/real_estate_expert.png" alt="Customer Support">
        <h3>Nishant Chauhan</h3>
        <p>Senior Real Estate Expert</p>
      </div>
      <!-- <div class="member">
        <img src="images/photographer.jpeg" alt="Media Expert">
        <h3>Arjun Patel</h3>
        <p>Media & Photography Head</p>
      </div>
      <div class="member">
        <img src="images/content.jpeg" alt="Content Specialist">
        <h3>Neha Bansal</h3>
        <p>Content Strategist</p>
      </div> -->
    </div>
  </div>
</section>

<style>
.team-section {
  background: url("uploads/team-bg1.png") center/cover no-repeat;
  color: #fff;
  padding: 100px 20px;
  text-align: center;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #ffd700;
  margin-bottom: 60px;
  text-shadow: 0 0 10px rgba(255, 215, 0, 0.4);
}

/* Team Rows */
.team-row {
  display: flex;
  justify-content: center;
  gap: 60px;
  flex-wrap: wrap;
  margin-bottom: 80px;
}

/* Pyramid Spacing */
.row-1 { margin-top: 0; }
.row-2 { margin-top: -30px; }
.row-3 { margin-top: -10px; }
.row-4, .row-5 { margin-top: 20px; }

/* Default Member Card */
.member {
  background: rgba(255, 255, 255, 0.95);
  color: #000;
  border-radius: 15px;
  padding: 20px;
  width: 230px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}

.member:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
}

.member img {
  width: 180px;
  height: 250px;
  border-radius: 10px;
  object-fit: cover;
  border: 3px solid gold;
  margin-bottom: 10px;
}

/* Founder special circular frame */
.founder-frame {
  position: relative;
  width: 240px;
  height: 240px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: linear-gradient(135deg, gold, #c19a2c);
  padding: 5px;
  box-shadow: 0 0 25px rgba(255, 215, 0, 0.5);
}

.founder-frame img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #fff;
  object-fit: cover;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.founder-frame:hover img {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(255, 215, 0, 0.8);
}

/* Bio Button */
.bio-btn {
  display: inline-block;
  margin-top: 10px;
  padding: 12px 30px;
  background-color: #d4af37;
  color: #000;
  font-weight: 600;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);
  transition: all 0.3s ease;
}
.bio-btn:hover {
  background-color: #c19a2c;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(255, 215, 0, 0.6);
}

.member h3 {
  font-size: 1.1rem;
  margin: 8px 0 5px;
  font-weight: 600;
  color: #000;
}
.member p {
  font-size: 0.9rem;
  color: #555;
  font-weight: 500;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .team-row { gap: 40px; }
  .member { width: 200px; }
}
@media (max-width: 768px) {
  .team-row { flex-direction: column; align-items: center; gap: 30px; }
  .member { width: 80%; }
  .founder-frame { width: 200px; height: 200px; }
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
                <a href="{{ asset('/contact')}}" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a><br><br>
				<a href="tel: +91-8588844441" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>+91-8588844441</a> 
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
  
     
