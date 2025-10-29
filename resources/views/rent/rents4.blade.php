@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ===== IMAGE SLIDER ===== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/r4a.avif') }}" alt="ATS Happy Trails Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r4b.avif') }}" alt="ATS Happy Trails Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r4c.avif') }}" alt="ATS Happy Trails Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r4d.avif') }}" alt="ATS Happy Trails Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r4e.avif') }}" alt="ATS Happy Trails Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r4f.avif') }}" alt="ATS Happy Trails Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ===== PROPERTY DETAILS ===== -->
    <div class="property-info">
      <h1>3 BHK Flat for Rent – ATS Happy Trails</h1>
      <p><strong>Location:</strong> ATS Happy Trails, Vaidpura, Noida Extension, Greater Noida</p>
      <p><strong>Rent:</strong> ₹32,000 / month</p>
      <p><strong>Security Deposit:</strong> ₹0</p>
      <p><strong>Brokerage:</strong> ₹16,000</p>
      <p><strong>Built-up Area:</strong> 1625 sq.ft (≈ 150.97 m²)</p>
      <p><strong>Carpet Area:</strong> 1010 sq.ft (≈ 93.83 m²)</p>
      <p><strong>Furnishing:</strong> Semi Furnished</p>
      <p><strong>Bathrooms:</strong> 2 | <strong>Balconies:</strong> 3</p>
      <p><strong>Floor:</strong> 15 of 27 Floors</p>
      <p><strong>Available From:</strong> Available now</p>
      <p><strong>Lease Type:</strong> Family</p>
      <p><strong>Age of Property:</strong> 4 Years</p>
      <p><strong>Parking:</strong> 1 Covered & 1 Open</p>
      <p><strong>Main Entrance Facing:</strong> North-East</p>
      <p><strong>Gas Pipeline:</strong> No</p>

      <p class="description">
        A spacious and beautifully designed 3 BHK semi-furnished flat located in the prestigious ATS Happy Trails project, 
        Noida Extension. This elegant residence offers a blend of comfort and modern lifestyle, with amenities like gym, 
        swimming pool, clubhouse, and landscaped gardens. Perfect for families seeking a peaceful yet well-connected home.
      </p>

      <h2>🏠 Overview</h2>
      <ul>
        <li><strong>Project Name:</strong> ATS Happy Trails</li>
        <li><strong>Rent:</strong> ₹32,000 / month</li>
        <li><strong>Security Deposit:</strong> ₹0</li>
        <li><strong>Brokerage:</strong> ₹16,000</li>
        <li><strong>Built-up Area:</strong> 1625 sq.ft</li>
        <li><strong>Carpet Area:</strong> 1010 sq.ft</li>
        <li><strong>Furnishing:</strong> Semi Furnished</li>
        <li><strong>Bathrooms:</strong> 2</li>
        <li><strong>Balconies:</strong> 3</li>
        <li><strong>Floor:</strong> 15 / 27</li>
        <li><strong>Lease Type:</strong> Family</li>
      </ul>

      <h2>🛋️ Furnishings</h2>
      <ul>
        <li>Stove</li>
        <li>Water Purifier</li>
        <li>Cupboard</li>
        <li>Servant Room</li>
        <li>7 Fans</li>
        <li>9 Lights</li>
        <li>3 Wardrobes</li>
        <li>2 Geysers</li>
        <li>Chimney</li>
        <li>Modular Kitchen</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Swimming Pool</li>
        <li>Gym</li>
        <li>Lift</li>
        <li>Power Backup</li>
        <li>Intercom</li>
        <li>Garden</li>
        <li>Sports</li>
        <li>Kids Area</li>
        <li>CCTV</li>
        <li>Gated Community</li>
        <li>Club House</li>
        <li>Community Hall</li>
        <li>Vaastu Compliant</li>
        <li>Badminton Court</li>
        <li>Jogging Track</li>
        <li>Car Parking</li>
        <li>Fire Fighting System</li>
        <li>Squash Court</li>
        <li>Street Lighting</li>
        <li>Indoor Games</li>
        <li>Multipurpose Hall</li>
        <li>Rain Water Harvesting</li>
        <li>Earthquake Resistant Structure</li>
        <li>24x7 Security</li>
        <li>24x7 CCTV Surveillance</li>
      </ul>

      <h2>📍 Nearby</h2>
      <ul>
        <li><strong>DELHI WORLD PUBLIC SCHOOL NOIDA EXTENSION:</strong> Nearby</li>
        <li><strong>Yatharth Super Speciality Hospital:</strong> Nearby</li>
        <li><strong>Noida Sector 81 Metro Station:</strong> ~21 mins (13.9 km)</li>
      </ul>
    </div>

    <!-- ===== CONTACT FORM ===== -->
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
    const actionUrl = "https://formspree.io/f/xjkanlqw";

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
/* ====== SAME STYLE AS PREVIOUS FILES ====== */
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
