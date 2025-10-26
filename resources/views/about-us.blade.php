@include('user_layout.header');
 
  <div class="hiddenbar-body-ovelay"></div>

 
  <div id="page" class="mobilie_header_nav stylehome1">
     
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="uploads/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="index.php"><img src="uploads/logo.png" alt=""></a>
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
    



  <div class="body_content">
    <!-- Property All Lists -->
      <!-- UI Elements Sections -->
    <section class="breadcumb-section2 p-0" style="background-image: url(uploads/about_banner.png);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">About Us</h2>
 
              <p style="font-weight: bold;letter-spacing: 1px;">Where your dreams find their perfect abode</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our About Area -->
    <section class="our-about pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <h2>We're on a Mission to Change <br class="d-none d-lg-block"> View of Real Estate Field.</h2>
			<img src="uploads/aboutus.jpg" style="width: 90%;">
          </div>
          <div class="col-lg-6">
            <p class="text mb25">Maybach Homes – Where Luxury Meets Lifestyle

At Maybach Homes, we redefine the meaning of luxury living. Established with a vision to create world-class real estate experiences, we are committed to delivering properties that combine elegance, innovation, and timeless value. Based in India, our portfolio spans across premium residential and commercial developments designed to inspire modern living and reflect the aspirations of our clients.</p>

<p>Our philosophy revolves around quality, transparency, and trust — the pillars that guide every project we undertake. From exclusive villas and high-rise apartments to landmark commercial spaces, every Maybach Homes development is built to the highest standards of craftsmanship and design excellence.</p>

<p>We collaborate with top architects, designers, and construction experts to bring to life spaces that are not only visually stunning but also sustainable and future-ready. With an unwavering focus on customer satisfaction, we ensure that every client experiences a seamless journey — from consultation to handover.

At Maybach Homes, we don’t just build properties — we craft lifestyles that embody sophistication, comfort, and luxury.

Maybach Homes India – Crafting the future of luxury real estate, one landmark at a time.</p>
            <p class="text mb55"></p>
            <div class="row">
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                   <a href="sale.php"> <span class="list-icon flex-shrink-0 fa fa-home mb20"></span></a>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1"><a href="sale.php">Properties For Sale</a> </h6>
                      <p class="text mb-0 fz14">Opening Doors to <br class="d-none d-sm-block"> New Beginnings.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                   <a href="rent.php"> <span class="list-icon flex-shrink-0 fa fa-money mb20"></span></a>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1"><a href="rent.php">Properties For Rent   </a></h6>
                      <p class="text mb-0 fz14">Find exclusive rental
 <br class="d-none d-sm-block"> Listings in UAE.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

    <!-- CTA Banner -->
    <section class="pt-0 pb-0">
      <div class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-7 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <h2 class="title text-capitalize">Why Choose Us </h2>
              </div>
              <div class="why-chose-list style2">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 fa fa-check"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Investment Opportunities </h6>
                    <p class="text mb-0 fz15">We are here to assist you in finding successful real estate investment possibilities. In order to assist you in making wise investment decisions, our experts carefully investigate potential investments, assess market trends, and offer insightful analysis.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 fa fa-check"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Client Satisfaction </h6>
                    <p class="text mb-0 fz15">We take great satisfaction in creating enduring connections with our clients. Your satisfaction is our first priority, and we work hard to provide outstanding service that satisfies your particular needs.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 fa fa-check"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Property Management</h6>
                    <p class="text mb-0 fz15">No matter if the property is a single-family home, a multi-unit complex, or a business space, we are aware of the difficulties in managing them. By taking care of tenant vetting, rent collecting, property upkeep, and other daily duties, our property management services offer peace of mind.</p>
                  </div>
                </div>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('user_layout.footer');
     
  <!-- Our CTA --> 
     

    