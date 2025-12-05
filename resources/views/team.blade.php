@include('user_layout.header')

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
        <img src="images/rahul.jpeg" alt="Real Estate Expert">
        <h3>Rahul Jha</h3>
        <p>Digital Marketing Expert</p>
      </div>
      <div class="member">
        <img src="images/parmu.jpeg" alt="Client Manager">
        <h3>Parminder Shokhal</h3>
        <p>IT Support</p>
      </div>
     
    </div>

      <!-- Row 4 -->
    <div class="team-row row-4">
      <div class="member">
        <img src="images/cattly.jpeg" alt="Client Relationship Manager">
        <h3>Dina Sharma </h3>
        <p>English <br> Real Estate agent</p>
      </div>
      <div class="member">
        <img src="images/ally.jpeg" alt="Marketing Lead">
        <h3>Elizabeth Frank </h3>
       <p>Portuguese <br> Real Estate agent</p>
      </div>
      <div class="member">
        <img src="images/hendy.jpeg" alt="Sales Executive">
        <h3>Hend Ahmed </h3>
        <p>Arabic <br> Real Estate agent</p>
      </div>
      <div class="member">
        <img src="images/situ.jpeg" alt="Finance Advisor">
        <h3>Sitorika Aziz</h3>
       <p>Russian <br> Real Estate agent</p>
      </div>
    </div>

    <!-- Row 4 -->
    <div class="team-row row-4">
      <div class="member">
        <img src="images/radha.jpeg" alt="Client Relationship Manager">
        <h3>Radhika Gupta</h3>
        <p>Tele Sales Executive</p>
      </div>
      <div class="member">
        <img src="images/neelam.jpeg" alt="Marketing Lead">
        <h3>Neelam Goswami</h3>
        <p>Tele Sales Executive</p>
      </div>
      <div class="member">
        <img src="images/muskan.jpeg" alt="Sales Executive">
        <h3>Muskan</h3>
        <p>Tele Sales Executive</p>
      </div>
      <div class="member">
        <img src="images/sany.jpeg" alt="Finance Advisor">
        <h3>Saniya Praveen</h3>
        <p>Tele Sales Executive</p>
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
        <img src="images/client_manager1.jpeg" alt="Client Relationship Manager">
        <h3>Anshika Sharma</h3>
        <p>Client Relationship Manager</p>
      </div>
      <div class="member">
        <img src="images/sonam.jpg" alt="Finance Advisor">
        <h3>Sonam Chauhan</h3>
        <p>Client Relationship Manager</p>
      </div>
      <div class="member">
        <img src="images/real_estate_expert.png" alt="Customer Support">
        <h3>Nishant Chauhan</h3>
        <p>Client Manager</p>
      </div>
      <div class="member">
        <img src="images/sak.jpeg" alt="Media Expert">
        <h3>Saksham Rana</h3>
        <p> Legal Advisor</p>
      </div>
      <div class="member">
        <img src="images/ayush.jpeg" alt="Content Specialist">
        <h3>Ayush Tyagi</h3>
        <p>Legal Head</p>
      </div>
    </div>
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

@include('user_layout.footer')
