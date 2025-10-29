@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/c1c.avif') }}" alt="Office Space Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/c1a.avif') }}" alt="Office Space Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/c1b.avif') }}" alt="Office Space Image 3">
        </div>
      

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>350 sq.ft Ready-to-Use Office Space</h1>
      <p><strong>Location:</strong> Techzone IV, Greater Noida West, Noida Extension, Greater Noida</p>
      <p><strong>Price:</strong> ₹38.0 L</p>
      <p><strong>Carpet Area:</strong> 350 sq.ft | <strong>Built-up Area:</strong> 478 sq.ft</p>
      <p><strong>Current ROI:</strong> 8.97% p.a.</p>
      <p><strong>Seats:</strong> 8 – 12 | <strong>Floors:</strong> 1st / 4 Floors</p>
      <p><strong>Zone Type:</strong> Commercial | <strong>Possession Status:</strong> Ready to Move</p>
      <p><strong>Lease Tenure:</strong> 9 Years | <strong>Ownership:</strong> Leasehold</p>
      <p><strong>Monthly Rent:</strong> ₹28,400</p>
      <p><strong>Age of Property:</strong> 1 Year</p>

      <p class="description">
        Available for sale is a pre-leased commercial office space located in Techzone IV, Greater Noida West — one of the most 
        rapidly developing business districts in NCR. The property is leased for 9 years, offering a steady rental income and 
        high ROI of 8.97% p.a. It features modern amenities such as central air conditioning, CCTV surveillance, water storage, 
        and reliable power backup. This 350 sq.ft carpet area office is ideal for businesses looking for a ready-to-use, 
        investment-worthy space in a prime commercial hub.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Carpet Area:</strong> 350 sq.ft</li>
        <li><strong>Built-up Area:</strong> 478 sq.ft</li>
        <li><strong>ROI:</strong> 8.97% per annum</li>
        <li><strong>Seats:</strong> 8 – 12</li>
        <li><strong>Possession:</strong> Ready to Move</li>
        <li><strong>Suitable For:</strong> Commercial Use / Office Setup</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Cabins:</strong> 0</li>
        <li><strong>Meeting Rooms:</strong> 1</li>
        <li><strong>Conference Rooms:</strong> 2</li>
        <li><strong>Washrooms:</strong> 6 Public</li>
        <li><strong>Lifts:</strong> 6 Passenger, 3 Service</li>
        <li><strong>Staircases:</strong> 3</li>
        <li><strong>Parking:</strong> 1 Private, 4 Public</li>
        <li><strong>DG & UPS Charges:</strong> Included</li>
        <li><strong>Tax & Govt. Charges:</strong> Not Included</li>
        <li><strong>Negotiable:</strong> Yes</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Internet Connectivity</li>
        <li>Cafeteria / Food Court</li>
        <li>Security Personnel</li>
        <li>CCTV Surveillance</li>
        <li>Power Backup</li>
        <li>DG Availability</li>
        <li>Water Storage</li>
        <li>Fire NOC Certified</li>
        <li>Fire Extinguishers</li>
        <li>Central Air Conditioning</li>
        <li>Feng Shui / Vastu Compliant</li>
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
.property-info table {
  width: 100%; border-collapse: collapse; margin-top: 15px;
}
.property-info th, .property-info td {
  border: 1px solid #ddd; padding: 10px; text-align: left;
}

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
