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
      <br>
      <h2>Get In Touch</h2>
      <p>
        Have a question, inquiry, or want to discuss your next investment project?  
        Fill out the form and our team will reach out to you shortly.
      </p>

      <div class="info-box">
        <p><strong>📍 Address:</strong> A -1314, Tower 3, NX ONE, TECH ZONE - 4, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201306</p>
        <p><strong>📞 Phone:</strong> +91-8588844441</p>
        <p><strong>✉️ Email:</strong> Info@maybach.homes</p>
      </div>

      <!-- 🌐 Social Links -->
      <div class="social-links">
        <a href="https://www.instagram.com/_maybachhomes_/?igsh=MWc1Nm5sMmYyMzJuNw%3D%3D&utm_source=qr#" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/people/Maybach-Homes-Property-Group/61581658784469/?mibextid=wwXIfr&rdid=zZR1NHwmJnn4jSLD&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1BXHdP7BGw%2F%3Fmibextid%3DwwXIfr" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/maybach-homes-property-group/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.youtube.com/@maybachhomespropertygroup" target="_blank"><i class="fa fa-youtube"></i></a>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>

      <!-- ✅ Formspree Form -->
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

<!-- CTA Section (Untouched) -->
<section class="our-cta2 p0" style="overflow: hidden;">
  <div class="cta-banner2 bgc-thm maxw1600 mx-auto pt100 pt50-md pb85 pb50-md px30-md bdrs12 position-relative">
    <div class="img-box-5">
      <img class="img-1 spin-right" src="uploads/cta-img-1.png" alt="">
    </div>
    <div class="img-box-6">
      <img class="img-1 spin-left" src="uploads/cta-img-1.png" alt="">
    </div>
    <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms">
      <img src="uploads/cta-img-1.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="500ms">
          <div class="cta-style2">
            <h2 class="cta-title">Need help? Talk to our expert</h2>
            <p class="cta-text">"Join us on this exciting journey as we shape the future of Real Estate"</p>
            <a href="contact.php" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a>
            <a href="tel:+918588844441" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>+91 8588844441</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('user_layout.footer')

<!-- ✅ SWEETALERT LOGIC (unchanged) -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = e.target;

  fetch(form.action, {
    method: form.method,
    body: new FormData(form),
    headers: { 'Accept': 'application/json' }
  })
  .then(response => {
    if (response.ok) {
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'Thank you for contacting us. We will get back to you soon.',
        confirmButtonColor: '#d4af37'
      });
      form.reset();
    } else {
      response.json().then(data => {
        Swal.fire({
          icon: 'error',
          title: 'Oops!',
          text: data.error || 'Something went wrong. Please try again.',
          confirmButtonColor: '#d4af37'
        });
      });
    }
  })
  .catch(() => {
    Swal.fire({
      icon: 'error',
      title: 'Oops!',
      text: 'Something went wrong. Please try again.',
      confirmButtonColor: '#d4af37'
    });
  });
});
</script>

<!-- 🎨 DARK THEME CONTACT CSS -->
<style>
.contact-section {
  font-family: 'Poppins', sans-serif;
  background-color: #000; /* black background */
  color: #fff;
  padding: 100px 20px;
}

.contact-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  max-width: 1200px;
  margin: 0 auto;
  gap: 50px;
  flex-wrap: wrap;
}

/* LEFT INFO */
.contact-info {
  flex: 1;
  min-width: 320px;
  padding: 40px 30px;
}
.contact-info h2 {
  color: #d4af37;
  margin-bottom: 15px;
  font-size: 26px;
}
.contact-info p {
  color: #ccc;
  line-height: 1.7;
}
.contact-info .info-box p {
  margin-top: 10px;
  color: #fff;
  font-weight: 500;
}

/* SOCIAL ICONS */
.social-links {
  margin-top: 30px;
}
.social-links a {
  display: inline-block;
  color: #fff;
  font-size: 22px;
  margin-right: 15px;
  transition: 0.3s;
}
.social-links a:hover {
  color: #d4af37;
}

/* RIGHT FORM */
.contact-form {
  flex: 1;
  min-width: 320px;
  background: #111;
  padding: 40px 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(255,255,255,0.1);
}
.contact-form h2 {
  color: #d4af37;
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
}

/* FORM FIELDS */
.contact-form .form-group {
  margin-bottom: 15px;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #444;
  border-radius: 8px;
  font-size: 15px;
  color: #fff;
  background-color: #000;
}
.contact-form input::placeholder,
.contact-form textarea::placeholder {
  color: #aaa;
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
  border: none;
  padding: 12px 30px;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  width: 100%;
  font-weight: 600;
}
.submit-btn:hover {
  background: #fff;
  color: #000;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .contact-container {
    flex-direction: column;
  }
  .contact-info, .contact-form {
    text-align: center;
  }
}
</style>
