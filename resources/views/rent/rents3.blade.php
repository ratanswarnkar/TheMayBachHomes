@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ===== IMAGE SLIDER ===== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/r3a.avif') }}" alt="Aastha Greens Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3b.avif') }}" alt="Aastha Greens Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3c.avif') }}" alt="Aastha Greens Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3d.avif') }}" alt="Aastha Greens Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3e.avif') }}" alt="Aastha Greens Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3f.avif') }}" alt="Aastha Greens Image 6">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/r3g.avif') }}" alt="Aastha Greens Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ===== PROPERTY DETAILS ===== -->
    <div class="property-info">
      <h1>3 BHK Flat for Rent – Aastha Greens</h1>
      <p><strong>Location:</strong> Aastha Greens, Sector 4, Greater Noida West, Noida Extension</p>
      <p><strong>Rent:</strong> ₹42,000 / month</p>
      <p><strong>Security Deposit:</strong> ₹84,000</p>
      <p><strong>Brokerage:</strong> ₹21,000</p>
      <p><strong>Built-up Area:</strong> 1390 sq.ft (≈ 129.13 m²)</p>
      <p><strong>Furnishing:</strong> Fully Furnished</p>
      <p><strong>Bathrooms:</strong> 2 | <strong>Balconies:</strong> 4</p>
      <p><strong>Floor:</strong> 17 of 19 Floors</p>
      <p><strong>Available From:</strong> Available now</p>
      <p><strong>Lease Type:</strong> Family / Bachelor</p>
      <p><strong>Age of Property:</strong> 2 Years</p>
      <p><strong>Parking:</strong> 1 Covered & 1 Open</p>
      <p><strong>Main Entrance Facing:</strong> East</p>
      <p><strong>Gas Pipeline:</strong> Yes</p>

      <p class="description">
        A luxurious 3 BHK fully furnished flat in Aastha Greens, Sector 4 Greater Noida West.
        This elegant residence offers premium furniture, modular kitchen, ACs, and all modern conveniences.
        Located in a gated community with 24x7 security, gym, and swimming pool — perfect for comfortable family living.
      </p>

      <h2>🏠 Overview</h2>
      <ul>
        <li><strong>Project Name:</strong> Aastha Greens</li>
        <li><strong>Rent:</strong> ₹42,000 / month</li>
        <li><strong>Security Deposit:</strong> ₹84,000</li>
        <li><strong>Brokerage:</strong> ₹21,000</li>
        <li><strong>Built-up Area:</strong> 1390 sq.ft</li>
        <li><strong>Furnishing:</strong> Fully Furnished</li>
        <li><strong>Bathrooms:</strong> 2</li>
        <li><strong>Balconies:</strong> 4</li>
        <li><strong>Floor:</strong> 17 / 19</li>
        <li><strong>Lease Type:</strong> Family / Bachelor</li>
      </ul>

      <h2>🛋️ Furnishings</h2>
      <ul>
        <li>Dining Table</li>
        <li>Washing Machine</li>
        <li>Sofa</li>
        <li>Microwave</li>
        <li>Stove</li>
        <li>Fridge</li>
        <li>Water Purifier</li>
        <li>Gas Pipeline</li>
        <li>Cupboard</li>
        <li>9 Fans</li>
        <li>9 Lights</li>
        <li>3 Wardrobes</li>
        <li>4 AC</li>
        <li>1 TV</li>
        <li>3 Beds</li>
        <li>1 Geyser</li>
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
        <li>Reading Lounge</li>
        <li>Cricket Pitch</li>
        <li>Tennis Court</li>
        <li>Reflexology Park</li>
        <li>Yoga / Meditation Area</li>
        <li>Basketball Court</li>
        <li>Badminton Court</li>
        <li>Library</li>
        <li>Jacuzzi</li>
        <li>Billiards / Snooker Table</li>
      </ul>

      <h2>📍 Nearby</h2>
      <ul>
        <li><strong>SKS World School:</strong> Nearby</li>
        <li><strong>Yatharth Super Speciality Hospital:</strong> Nearby</li>
        <li><strong>Sector 62 Noida Metro Station:</strong> ~17 mins (12.9 km)</li>
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
