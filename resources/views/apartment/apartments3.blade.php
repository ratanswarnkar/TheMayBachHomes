@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/a3a.avif') }}" alt="Property Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a3b.avif') }}" alt="Property Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a3c.avif') }}" alt="Property Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a3d.avif') }}" alt="Property Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a3e.avif') }}" alt="Property Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a3f.avif') }}" alt="Property Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Renox Thrive</h1>
      <p><strong>By:</strong> Renox Group</p>
      <p><strong>Location:</strong> Noida Extension, Greater Noida</p>
      <p><strong>Price Range:</strong> ₹1.42 Cr – ₹2.38 Cr</p>
      <p><strong>Average Price:</strong> ₹9,000 / sq.ft</p>
      <p><strong>Possession Starts:</strong> April 2029</p>
      <p><strong>Configurations:</strong> 3 & 4 BHK Apartments</p>
      <p><strong>Sizes:</strong> 1582 – 2644 sq.ft (Saleable Area)</p>
      <p><strong>Project Size:</strong> 1 Building | 382 Units | 3 Acres</p>
      <p><strong>Launch Date:</strong> September 2024</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ742692/09/2024</p>

      <p class="description">
        Renox Thrive by Renox Group is a premium residential development in Noida Extension, Greater Noida. 
        Spread over 3 acres, it offers spacious 3 & 4 BHK apartments designed with modern architecture and top-tier amenities. 
        With superior connectivity, elegant design, and high-end lifestyle offerings, Renox Thrive is the perfect destination 
        for families seeking comfort and luxury in a thriving neighborhood.
      </p>

      <h2>📍 Location Advantages</h2>
      <ul>
        <li><strong>School:</strong> SKS World School, Greater Noida West</li>
        <li><strong>Bus Stand:</strong> Eco Village Bus Stop – 10 mins (6.5 km)</li>
        <li><strong>Hospital:</strong> Yatharth Super Speciality Hospital Noida Extension</li>
        <li><strong>Mall:</strong> Ace City Square – 8 mins (4.3 km)</li>
        <li><strong>Restaurant:</strong> Om Sweets and Namkeen</li>
      </ul>

      <h2>💰 Price & Floor Plan</h2>
      <table>
        <tr>
          <th>Configuration</th>
          <th>Size (sq.ft)</th>
          <th>Price (₹)</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>3 BHK Apartment</td>
          <td>1582 – 1909 sq.ft</td>
          <td>₹1.42 Cr – ₹1.76 Cr</td>
          <td>Possession Apr 2029</td>
        </tr>
        <tr>
          <td>4 BHK Apartment</td>
          <td>1909 – 2644 sq.ft</td>
          <td>₹2.31 Cr – ₹2.38 Cr</td>
          <td>Possession Apr 2029</td>
        </tr>
      </table>

      <h2>⭐ Highlights</h2>
      <ul>
        <li>Premium 3 & 4 BHK residences with modern architecture</li>
        <li>Spread across 3 acres with 382 exclusive units</li>
        <li>Superior connectivity to hospitals, malls, and schools</li>
        <li>RERA registered & scheduled possession by April 2029</li>
        <li>High-end lifestyle with world-class amenities</li>
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
/* ====== SAME STYLE AS PREVIOUS TEMPLATE ====== */
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
