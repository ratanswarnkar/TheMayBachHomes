@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/o1a.avif') }}" alt="One Estate Tower Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o1b.avif') }}" alt="One Estate Tower Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o1c.avif') }}" alt="One Estate Tower Image 3">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>3 BHK Builder Floor, One Estate Tower</h1>
      <p><strong>Location:</strong> Vaidpura, Greater Noida</p>
      <p><strong>Price Range:</strong> ₹60.0 L - ₹65.0 L (₹4.48K - ₹5.26K/sq.ft)</p>
      <p><strong>Project Name:</strong> One Estate Tower</p>
      <p><strong>Developer:</strong> One Estate Infracon</p>
      <p><strong>Sizes:</strong> 1140 - 1450 sq.ft (Built-up Area)</p>
      <p><strong>Configuration:</strong> 3 BHK Builder Floor</p>
      <p><strong>Possession Starts:</strong> February 2026</p>
      <p><strong>Launch Date:</strong> August 2025</p>
      <p><strong>RERA ID:</strong> Not Applicable</p>
      <p><strong>EMI Starts At:</strong> ₹31.77 K (All Inclusive)</p>

      <p class="description">
        <strong>One Estate Tower</strong> is a premium residential project developed by One Estate Infracon in 
        <strong>Vaidpura, Greater Noida</strong>. Offering spacious 3 BHK builder floors ranging from 1140 sq.ft 
        to 1450 sq.ft, the project ensures modern comfort and elegant living. The possession is expected to start 
        by February 2026. Surrounded by top schools, hospitals, and retail hubs, One Estate Tower provides a 
        lifestyle full of convenience, accessibility, and sophistication.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Project Name:</strong> One Estate Tower</li>
        <li><strong>Configuration:</strong> 3 BHK Builder Floor</li>
        <li><strong>Price Range:</strong> ₹60 L - ₹65 L</li>
        <li><strong>Sizes:</strong> 1140 - 1450 sq.ft (Built-up Area)</li>
        <li><strong>Project Size:</strong> 1 Building - 16 Units</li>
        <li><strong>Launch Date:</strong> August 2025</li>
        <li><strong>Possession Starts:</strong> February 2026</li>
        <li><strong>RERA ID:</strong> Not Applicable</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Bedrooms:</strong> 3</li>
        <li><strong>Bathrooms:</strong> 2</li>
        <li><strong>Balconies:</strong> 3</li>
        <li><strong>Floors:</strong> G + 4</li>
        <li><strong>Parking:</strong> 1 Reserved</li>
        <li><strong>Possession Status:</strong> Under Construction</li>
        <li><strong>Possession Date:</strong> February 2026</li>
        <li><strong>Ownership:</strong> Freehold</li>
        <li><strong>Negotiable:</strong> Yes</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>24x7 Security</li>
        <li>Power Backup</li>
        <li>Lift</li>
        <li>Parking Facility</li>
        <li>Community Hall</li>
        <li>Kids Play Area</li>
        <li>Gymnasium</li>
        <li>Landscaped Garden</li>
      </ul>
    </div>

    <!-- ========== CONTACT FORM ========== -->
    <div class="contact-form">
      <h2>Enquire About This Property</h2>
      <form id="enquiryForm">
        <div class="form-group">
          <label for="name">Full Name *</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number *</label>
          <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="I'm interested in One Estate Tower"></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Enquiry</button>
      </form>
    </div>

  </div>
</section>

@include('user_layout.footer');

<!-- JS: SweetAlert + Slider + Form Submission -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // ===== IMAGE SLIDER =====
  const slides = document.querySelectorAll('.slide');
  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');
  let index = 0;

  function showSlide(i) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[i].classList.add('active');
  }

  prev.addEventListener('click', () => {
    index = (index > 0) ? index - 1 : slides.length - 1;
    showSlide(index);
  });

  next.addEventListener('click', () => {
    index = (index < slides.length - 1) ? index + 1 : 0;
    showSlide(index);
  });

  // ===== CONTACT FORM =====
  const form = document.getElementById('enquiryForm');

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const actionUrl = "https://formspree.io/f/xjkanlqw"; // same Formspree link

    try {
      const response = await fetch(actionUrl, {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      });

      if (response.ok) {
        Swal.fire({
          icon: 'success',
          title: 'Thank you!',
          text: 'Your enquiry has been sent successfully!',
          confirmButtonColor: '#3085d6',
        });
        form.reset();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops!',
          text: 'Something went wrong. Please try again later.',
          confirmButtonColor: '#d33'
        });
      }
    } catch (err) {
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'Network problem. Please try again later.',
        confirmButtonColor: '#d33'
      });
    }
  });
</script>

<style>
/* ====== SAME STYLE AS PREVIOUS PROJECTS ====== */
.property-detail-section {
  padding: 60px 20px;
  background-color: #f8f9fa;
}

.property-slider {
  position: relative;
  max-width: 900px;
  margin: 0 auto 50px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

.slider-wrapper { position: relative; }
.slide { display: none; width: 100%; }
.slide.active { display: block; }
.slide img {
  width: 100%;
  border-radius: 10px;
  height: 500px;
  object-fit: cover;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.5);
  color: #fff;
  font-size: 24px;
  border: none;
  cursor: pointer;
  padding: 10px 15px;
  border-radius: 50%;
  transition: 0.3s;
  z-index: 10;
}

.prev:hover, .next:hover { background-color: #f4b400; color: #000; }
.prev { left: 15px; } .next { right: 15px; }

.property-info {
  max-width: 900px;
  margin: 0 auto 60px;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.property-info h1 { font-size: 32px; color: #222; margin-bottom: 15px; }
.property-info p, .property-info li { font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 10px; }
.property-info ul { padding-left: 20px; }

.contact-form {
  max-width: 600px;
  margin: 0 auto;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.contact-form h2 { text-align: center; margin-bottom: 25px; font-size: 24px; color: #222; }
.form-group { margin-bottom: 15px; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; }
.form-group input, .form-group textarea {
  width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px; transition: 0.3s;
}
.form-group input:focus, .form-group textarea:focus { border-color: #f4b400; outline: none; }

.submit-btn {
  width: 100%; background-color: #1c1c1c; color: #fff; border: none; padding: 14px;
  border-radius: 6px; font-size: 18px; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.submit-btn:hover { background-color: #f4b400; color: #000; }

@media (max-width: 768px) {
  .slide img { height: 300px; }
  .property-info h1 { font-size: 26px; }
}
</style>
