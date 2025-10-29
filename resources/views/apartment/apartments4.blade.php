@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/a4a.avif') }}" alt="The Valley Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a4b.avif') }}" alt="The Valley Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a4c.avif') }}" alt="The Valley Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a4d.avif') }}" alt="The Valley Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a4e.avif') }}" alt="The Valley Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a4f.avif') }}" alt="The Valley Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>The Valley</h1>
      <p><strong>By:</strong> Diligent Builders Pvt. Ltd.</p>
      <p><strong>Location:</strong> Plot No. GH-15, Sector 1 Noida Extension, Greater Noida</p>
      <p><strong>Price Range:</strong> ₹1.83 Cr – ₹2.54 Cr</p>
      <p><strong>Average Price:</strong> ₹10,000 / sq.ft</p>
      <p><strong>Possession Starts:</strong> December 2027</p>
      <p><strong>Configurations:</strong> 3, 3.5 & 4 BHK Apartments</p>
      <p><strong>Sizes:</strong> 1830 – 2540 sq.ft (Super Builtup Area)</p>
      <p><strong>Project Size:</strong> 3 Buildings | 320 Units | 2.5 Acres</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ5929</p>

      <p class="description">
        The Valley by Diligent Builders Pvt. Ltd. is an ambitious residential project in Sector 1, Noida Extension.
        Spread across 2.5 acres of lush open area, this smart urban development offers 3, 3.5, and 4 BHK apartments with
        premium amenities, smart home features, and modern architecture. Designed for a blend of comfort, luxury, and sustainability,
        The Valley redefines smart living in Greater Noida West.
      </p>

      <h2>📍 Location Advantages</h2>
      <ul>
        <li><strong>School:</strong> Delhi World Public School Noida Extension</li>
        <li><strong>Bus Stand:</strong> Eco Village Bus Stop – 6 mins (3.3 km)</li>
        <li><strong>Metro Station:</strong> Noida Sector 81 Metro Station – 12 mins (8 km)</li>
        <li><strong>Hospital:</strong> Yatharth Super Speciality Hospital – 5 mins (2.2 km)</li>
        <li><strong>Mall:</strong> Hyde Park Crown</li>
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
          <td>1830 sq.ft</td>
          <td>₹1.83 Cr</td>
          <td>Possession Dec 2027</td>
        </tr>
        <tr>
          <td>3.5 BHK Apartment</td>
          <td>1950 sq.ft</td>
          <td>₹1.95 Cr</td>
          <td>Possession Dec 2027</td>
        </tr>
        <tr>
          <td>4 BHK Apartment</td>
          <td>2540 sq.ft</td>
          <td>₹2.54 Cr</td>
          <td>Possession Dec 2027</td>
        </tr>
      </table>

      <h2>⭐ Highlights</h2>
      <ul>
        <li>Smart Wi-Fi enabled homes with modern architecture</li>
        <li>Well-ventilated 3-side open apartments</li>
        <li>State-of-the-art gym, clubhouse, and spa</li>
        <li>100% power backup for elevators and common areas</li>
        <li>Premium location with great connectivity to metro, FNG corridor & hospitals</li>
        <li>Community hall, shopping arcade & multi-level security</li>
        <li>Swimming pool, yoga area, amphitheatre & jogging trail</li>
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
