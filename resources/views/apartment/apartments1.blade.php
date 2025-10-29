@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/a1a.avif') }}" alt="Signix Harmony Heights Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a1b.avif') }}" alt="Signix Harmony Heights Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a1c.avif') }}" alt="Signix Harmony Heights Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a1d.avif') }}" alt="Signix Harmony Heights Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a1e.avif') }}" alt="Signix Harmony Heights Image 5">
        </div>
         <div class="slide">
          <img src="{{ asset('uploads/a1f.avif') }}" alt="Signix Harmony Heights Image 5">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>🏢 Signix Harmony Heights</h1>
      <p><strong>By:</strong> Signix Ventures LLP</p>
      <p><strong>📍 Location:</strong> Noida Extension, Khera Choganpur</p>
      <p><strong>💰 Price Range:</strong> ₹29.5 Lakh – ₹53.51 Lakh</p>
      <p><strong>📊 Average Price:</strong> ₹3,570 – ₹4,540 per sq.ft</p>
      <p><strong>🏡 Configurations:</strong> 1, 2 & 3 BHK Apartments</p>
      <p><strong>📏 Sizes:</strong> 650 – 1500 sq.ft (Super Built-up Area)</p>
      <p><strong>🏗️ Project Size:</strong> 5 Buildings | 140 Units</p>
      <p><strong>🚀 Launch Date:</strong> January 2025</p>
      <p><strong>📜 RERA ID:</strong> Not Applicable</p>
      <p><strong>📦 Possession Status:</strong> Ready to Move</p>

      <h2 class="section-heading">🏠 Project Overview</h2>
      <p class="description">
        Signix Harmony Heights is a well-planned residential development offering thoughtfully designed 1, 2, and 3 BHK apartments in the prime location of Noida Extension. With modern architecture, quality construction, and strategic connectivity, this project caters to families seeking a balance of comfort, convenience, and affordability.
        <br><br>
        Residents enjoy proximity to key schools, hospitals, shopping malls, and entertainment centers, making it an ideal choice for urban living.
      </p>

      <h2 class="section-heading">📍 Location Advantages</h2>
      <ul>
        <li><strong>School:</strong> Delhi World Public School Noida Extension — 1 min (0.1 km)</li>
        <li><strong>Bus Stand:</strong> Eco Village Bus Stop — 14 mins (9.8 km)</li>
        <li><strong>Hospital:</strong> Yatharth Super Speciality Hospital — Nearby</li>
        <li><strong>Mall:</strong> Ace City Square — Nearby</li>
        <li><strong>Restaurant:</strong> Lazeez Biryani Wala — Nearby</li>
      </ul>

      <h2 class="section-heading">💰 Price & Floor Plan</h2>
      <table class="floor-plan-table">
        <thead>
          <tr>
            <th>Configuration</th>
            <th>Size (sq.ft)</th>
            <th>Price (₹)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1 BHK Apartment</td>
            <td>650</td>
            <td>₹29.5 L</td>
            <td>Ready to Move</td>
          </tr>
          <tr>
            <td>2 BHK Apartment</td>
            <td>850–950</td>
            <td>₹41.5 L – ₹43 L</td>
            <td>Ready to Move</td>
          </tr>
          <tr>
            <td>3 BHK Apartment</td>
            <td>1500</td>
            <td>₹53.51 L</td>
            <td>Ready to Move</td>
          </tr>
        </tbody>
      </table>

      <h2 class="section-heading">🏡 1 BHK Floor Plan Details</h2>
      <ul>
        <li>Bedroom: 11'0" × 10'6"</li>
        <li>Attached Balcony: Yes</li>
        <li>Common Bathroom: 5'0" × 5'9"</li>
        <li>Kitchen: 11'0" × 5'0"</li>
        <li>Living/Drawing Room: 11'0" × 10'6"</li>
      </ul>

      <h2 class="section-heading">⭐ Highlights</h2>
      <ul>
        <li>Ready-to-Move-in units</li>
        <li>Peaceful residential environment</li>
        <li>Well-connected to NH-24, schools, and malls</li>
        <li>Affordable luxury homes</li>
        <li>Ideal for both end-use and investment</li>
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

<!-- ✅ SWEETALERT2 + JS SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  // ========== IMAGE SLIDER ==========
  const slides = document.querySelectorAll('.slide');
  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');
  let currentIndex = 0;

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
  }

  prev.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
    showSlide(currentIndex);
  });

  next.addEventListener('click', () => {
    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
    showSlide(currentIndex);
  });

  // Auto-play Slider
  setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }, 5000);

  // ========== CONTACT FORM ==========
  const form = document.getElementById('enquiryForm');
  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    const actionUrl = "https://formspree.io/f/xjkanlqw"; // your Formspree link

    try {
      const response = await fetch(actionUrl, {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      });

      if (response.ok) {
        Swal.fire({
          icon: 'success',
          title: 'Thank You!',
          text: 'Your enquiry has been submitted successfully.',
          confirmButtonColor: '#3085d6'
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
    } catch (error) {
      Swal.fire({
        icon: 'error',
        title: 'Network Error!',
        text: 'Please check your connection and try again.',
        confirmButtonColor: '#d33'
      });
    }
  });
</script>

<style>
/* ========== PROPERTY DETAILS PAGE ========== */
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
  height: 500px;
  object-fit: cover;
  border-radius: 10px;
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
  z-index: 10;
  transition: 0.3s;
}
.prev:hover, .next:hover { background-color: #f4b400; color: #000; }
.prev { left: 15px; }
.next { right: 15px; }

.property-info {
  max-width: 900px;
  margin: 0 auto 60px;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.property-info h1 { font-size: 32px; color: #222; margin-bottom: 15px; }
.property-info h2.section-heading { margin-top: 25px; color: #111; }
.property-info p, li { font-size: 16px; color: #555; line-height: 1.6; }

.floor-plan-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 15px;
}
.floor-plan-table th, .floor-plan-table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}
.floor-plan-table th {
  background-color: #f4b400;
  color: #000;
}

/* Contact Form */
.contact-form {
  max-width: 600px;
  margin: 0 auto;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.contact-form h2 {
  text-align: center;
  margin-bottom: 25px;
  font-size: 24px;
  color: #222;
}
.form-group { margin-bottom: 15px; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; }
.form-group input, .form-group textarea {
  width: 100%; padding: 12px; border: 1px solid #ddd;
  border-radius: 6px; font-size: 16px; transition: 0.3s;
}
.form-group input:focus, .form-group textarea:focus {
  border-color: #f4b400; outline: none;
}
.submit-btn {
  width: 100%; background-color: #1c1c1c; color: #fff;
  border: none; padding: 14px; border-radius: 6px;
  font-size: 18px; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.submit-btn:hover { background-color: #f4b400; color: #000; }

@media (max-width: 768px) {
  .slide img { height: 300px; }
  .property-info h1 { font-size: 26px; }
}
</style>
