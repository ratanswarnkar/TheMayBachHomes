@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/a2a.avif') }}" alt="Vihaan Wardania Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a2b.avif') }}" alt="Vihaan Wardania Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a2c.avif') }}" alt="Vihaan Wardania Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a2d.avif') }}" alt="Vihaan Wardania Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a2e.avif') }}" alt="Vihaan Wardania Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/a2f.avif') }}" alt="Vihaan Wardania Image 6">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>🏢 Vihaan Wardania</h1>
      <p><strong>By:</strong> Vihaan Group</p>
      <p><strong>Location:</strong> Sector 1, Noida Extension, Greater Noida</p>
      <p><strong>Price Range:</strong> ₹47.99 Lakh – ₹64.99 Lakh</p>
      <p><strong>Average Price:</strong> ₹3,940 – ₹4,360 per sq.ft</p>
      <p><strong>Possession Status:</strong> Ready to Move</p>
      <p><strong>Configurations:</strong> 2 & 3 BHK Apartments</p>
      <p><strong>Sizes:</strong> 1100 – 1650 sq.ft (Super Built-up Area)</p>
      <p><strong>Project Size:</strong> 2 Buildings | 50 Units</p>
      <p><strong>Launch Date:</strong> June 2024</p>
      <p><strong>RERA ID:</strong> Not Applicable</p>

      <h2>🏠 Project Overview</h2>
      <p class="description">
        Vihaan Wardania is a modern residential project located in Sector 1, Noida Extension. Offering spacious 2 and 3 BHK apartments, this development by Vihaan Group brings together comfort, elegance, and functionality. Designed for urban families, it ensures a perfect balance between luxury and affordability.
        <br><br>
        The project is strategically located near schools, hospitals, malls, and metro stations—making daily life convenient and well-connected. With ready-to-move-in apartments and premium amenities, Vihaan Wardania stands out as a smart investment option in Greater Noida.
      </p>

      <h2>📍 Location Advantages</h2>
      <ul>
        <li><strong>School:</strong> Delhi World Public School Noida Extension — 1 min (0.1 km)</li>
        <li><strong>Bus Stand:</strong> Eco Village Bus Stop — 3 mins (1.9 km)</li>
        <li><strong>Metro Station:</strong> Noida Sector 81 — Nearby</li>
        <li><strong>Hospital:</strong> Yatharth Super Speciality Hospital — 2 mins (1.2 km)</li>
        <li><strong>Mall:</strong> Galaxy Blue Sapphire Plaza — Nearby</li>
      </ul>

      <h2>💰 Price & Floor Plan</h2>
      <table class="price-table">
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
            <td>2 BHK Apartment</td>
            <td>1100 – 1150 sq.ft</td>
            <td>₹47.99 L – ₹48.99 L</td>
            <td>Ready to Move</td>
          </tr>
          <tr>
            <td>3 BHK Apartment</td>
            <td>1650 sq.ft</td>
            <td>₹62.98 L – ₹64.99 L</td>
            <td>Ready to Move</td>
          </tr>
        </tbody>
      </table>

      <h2>🏡 3 BHK Floor Plan Details</h2>
      <ul>
        <li><strong>Bedroom 1:</strong> 10'0" × 12'0"</li>
        <li><strong>Attached Bathroom:</strong> 6'0" × 5'6"</li>
        <li><strong>Bedroom 2:</strong> 10'0"</li>
        <li><strong>Living/Drawing Room:</strong> 9'0" × 19'6"</li>
      </ul>

      <h2>⭐ Highlights</h2>
      <ul>
        <li>Ready-to-Move-in premium apartments</li>
        <li>Located in a rapidly developing neighborhood</li>
        <li>Close to metro, schools, and hospitals</li>
        <li>Affordable homes with quality construction</li>
        <li>Ideal for both residential and investment purposes</li>
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

<!-- ========== JAVASCRIPT SECTION ========== -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // ======= Image Slider =======
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

  // ======= Form Handling =======
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
          confirmButtonText: 'OK'
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
/* ======= PROPERTY DETAILS PAGE ======= */
.property-detail-section { padding: 60px 20px; background-color: #f8f9fa; }
.property-slider { position: relative; max-width: 900px; margin: 0 auto 50px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.15); }
.slider-wrapper { position: relative; }
.slide { display: none; width: 100%; }
.slide.active { display: block; }
.slide img { width: 100%; border-radius: 10px; height: 500px; object-fit: cover; }
.prev, .next { position: absolute; top: 50%; transform: translateY(-50%); background-color: rgba(0,0,0,0.5); color: #fff; font-size: 24px; border: none; cursor: pointer; padding: 10px 15px; border-radius: 50%; transition: 0.3s; z-index: 10; }
.prev:hover, .next:hover { background-color: #f4b400; color: #000; }
.prev { left: 15px; } .next { right: 15px; }
.property-info { max-width: 900px; margin: 0 auto 60px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
.property-info h1 { font-size: 32px; color: #222; margin-bottom: 15px; }
.property-info p, .property-info ul li { font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 10px; }
.price-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
.price-table th, .price-table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
.price-table th { background-color: #f4b400; color: #000; }
.contact-form { max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
.contact-form h2 { text-align: center; margin-bottom: 25px; font-size: 24px; color: #222; }
.form-group { margin-bottom: 15px; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; }
.form-group input, .form-group textarea { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px; transition: 0.3s; }
.form-group input:focus, .form-group textarea:focus { border-color: #f4b400; outline: none; }
.submit-btn { width: 100%; background-color: #1c1c1c; color: #fff; border: none; padding: 14px; border-radius: 6px; font-size: 18px; font-weight: 600; cursor: pointer; transition: 0.3s; }
.submit-btn:hover { background-color: #f4b400; color: #000; }
@media (max-width: 768px) { .slide img { height: 300px; } .property-info h1 { font-size: 26px; } }
</style>
