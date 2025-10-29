@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/o3a.avif') }}" alt="Godrej Majesty Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3b.avif') }}" alt="Godrej Majesty Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3c.avif') }}" alt="Godrej Majesty Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3d.avif') }}" alt="Godrej Majesty Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3e.avif') }}" alt="Godrej Majesty Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3f.avif') }}" alt="Godrej Majesty Image 6">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o3g.avif') }}" alt="Godrej Majesty Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Godrej Majesty, Sector 12 Noida Extension, Greater Noida</h1>
      <p><strong>Location:</strong> Sector 12 Noida Extension, Greater Noida</p>
      <p><strong>Price:</strong> ₹2.46 Cr - ₹4.3 Cr</p>
      <p><strong>Project Name:</strong> Godrej Majesty</p>
      <p><strong>Carpet Area:</strong> 832 - 1456 sq.ft</p>
      <p><strong>Possession Starts:</strong> Feb, 2030</p>
      <p><strong>Configuration:</strong> 2, 3, 4 BHK Apartments</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ250823/04/2025</p>

      <p class="description">
        <strong>Godrej Majesty</strong> by <strong>Godrej Properties Ltd.</strong> offers luxurious living in Sector 12, Noida Extension. 
        With nature-inspired design, 77% open space, and grand neoclassical architecture inspired by Lutyens, this project redefines modern elegance. 
        Featuring access-controlled homes with cutting-edge automation systems and a four-level 27,000 sq.ft premium clubhouse, it provides an unparalleled lifestyle experience in Greater Noida.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Project Area:</strong> 7.99 Acres (77% open)</li>
        <li><strong>Project Size:</strong> 6 Buildings - 475 Units</li>
        <li><strong>Sizes:</strong> 832 - 1456 sq.ft</li>
        <li><strong>Average Price:</strong> ₹29.55 K/sq.ft</li>
        <li><strong>Possession Starts:</strong> Feb, 2030</li>
        <li><strong>Launch Date:</strong> Apr, 2025</li>
        <li><strong>Configuration:</strong> 2, 3, 4 BHK Apartments</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>RERA ID:</strong> UPRERAPRJ250823/04/2025</li>
        <li><strong>Developer:</strong> Godrej Properties Ltd.</li>
        <li><strong>Property Type:</strong> Residential Apartments</li>
        <li><strong>Open Area:</strong> 77% Green and Landscaped</li>
        <li><strong>Clubhouse:</strong> 27,000 sq.ft, Four-Level Premium</li>
        <li><strong>Security:</strong> Access-Controlled Homes</li>
        <li><strong>Automation:</strong> Smart Home Features</li>
        <li><strong>Power Backup:</strong> Yes</li>
        <li><strong>Water Supply:</strong> 24x7</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Swimming Pool</li>
        <li>Clubhouse</li>
        <li>Gymnasium</li>
        <li>Children’s Play Area</li>
        <li>Jogging Track</li>
        <li>Landscaped Gardens</li>
        <li>24x7 Security</li>
        <li>Power Backup</li>
        <li>Lift</li>
        <li>Rainwater Harvesting</li>
        <li>Fire Fighting System</li>
        <li>Community Hall</li>
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
          <textarea id="message" name="message" rows="4" placeholder="Write your query here..."></textarea>
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
