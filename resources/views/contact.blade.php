@include('user_layout.header')
<br><br>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- 🌙 CONTACT SECTION -->
<section class="contact-section">
  <div class="contact-container">

    <!-- LEFT INFO -->
    <div class="contact-info">
      <br>
      <br>
      <h2>Get In Touch</h2>
      <p>
        Have a question, inquiry, or want to discuss your next investment project?  
        Fill out the form and our team will reach out to you shortly.
      </p>

      <div class="info-box">
        <p><strong>📍 Address:</strong> A -1314, Tower 3, NX ONE, TECH ZONE - 4, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201318</p>
        <p><strong>📞 Phone:</strong> +91-8588844441</p>
        <p><strong>✉️ Email:</strong> Info@maybach.homes</p>
      </div>

      <div class="social-links">
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>

      <form id="contactForm" action="https://formspree.io/f/xjkanlqw" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group">
          <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group">
          <input type="text" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Send Message</button>
      </form>
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
/* MAIN CONTAINER */
.contact-section {
  font-family: 'Poppins', sans-serif;
  background-color: #000;
  color: #fff;
  padding: 80px 20px;
}

.contact-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  max-width: 1300px;
  margin: auto;
  gap: 40px;
  align-items: flex-start;
}

/* LEFT INFO */
.contact-info {
  padding: 20px;
}
.contact-info h2 {
  color: #d4af37;
  font-size: 30px;
  margin-bottom: 15px;
}
.contact-info p {
  color: #ccc;
  font-size: 16px;
  line-height: 1.6;
}
.contact-info .info-box p {
  color: #fff;
  font-weight: 500;
}

/* SOCIAL ICONS */
.social-links {
  margin-top: 25px;
}
.social-links a {
  display: inline-block;
  color: #fff;
  font-size: 22px;
  margin-right: 15px;
  transition: .3s;
}
.social-links a:hover {
  color: #d4af37;
}

/* RIGHT FORM */
.contact-form {
  background: #111;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 0 15px rgba(255,255,255,0.1);
}
.contact-form h2 {
  color: #d4af37;
  text-align: center;
  margin-bottom: 20px;
}
.contact-form .form-group {
  margin-bottom: 15px;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 12px 15px;
  border-radius: 8px;
  border: 1px solid #444;
  background: #000;
  color: #fff;
  font-size: 15px;
}
.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #d4af37;
  outline: none;
  box-shadow: 0 0 5px rgba(212,175,55,0.4);
}

/* BUTTON */
.submit-btn {
  background: #d4af37;
  color: #000;
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-weight: 600;
  transition: .3s;
}
.submit-btn:hover {
  background: #fff;
}

/* RESPONSIVE FIXES */
@media (max-width: 992px) {
  .contact-container {
    grid-template-columns: 1fr;
    text-align: center;
  }
}

@media (max-width: 576px) {
  .contact-form {
    padding: 25px;
  }
  .contact-info h2,
  .contact-form h2 {
    font-size: 24px;
  }
  .contact-info p {
    font-size: 14px;
  }
}
</style>
@include('user_layout.footer')