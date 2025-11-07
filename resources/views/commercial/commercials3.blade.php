@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ===== IMAGE SLIDER ===== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/c3a.jpeg') }}" alt="Bhutani Grandthum Office Space 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/c3b.jpeg') }}" alt="Bhutani Grandthum Office Space 2">
</div>
       

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ===== PROPERTY DETAILS ===== -->
    <div class="property-info">
      <h1>678 sq.ft Bare Shell Office Space, Bhutani Grandthum</h1>
      <p><strong>Location:</strong> Techzone IV, Greater Noida West, Noida Extension, Greater Noida</p>
      <p><strong>Price:</strong> ₹52.0 L</p>
      <p><strong>Project Name:</strong> Bhutani Grandthum</p>
      <p><strong>Built-up Area:</strong> 678 sq.ft</p>
      <p><strong>Expected ROI:</strong> 5% p.a.</p>
      <p><strong>Floors:</strong> 9th / 32 Floors</p>
      <p><strong>Zone Type:</strong> Commercial</p>
      <p><strong>Flooring:</strong> Ceramic</p>
      <p><strong>Ownership:</strong> Leasehold</p>
      <p><strong>Possession Status:</strong> Ready to Move</p>

      <p class="description">
        Available for sale is a commercial space in **Bhutani Grandthum**, located at Techzone IV, Noida Extension. 
        This premium ready-to-move property spans 678 sq.ft of built-up area. 
        It features cemented walls and ceramic flooring, providing a flexible shell setup for customization.  
        With facilities such as **Central Air Conditioning**, **Power Backup**, and **CCTV Surveillance**, 
        the space is ideal for businesses seeking an established commercial hub in Greater Noida West.  
        Ample parking (1500 public spots) and proximity to business amenities make it a strong investment choice.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Project Name:</strong> Bhutani Grandthum</li>
        <li><strong>Built-up Area:</strong> 678 sq.ft</li>
        <li><strong>Expected ROI:</strong> 5% per annum</li>
        <li><strong>Possession Status:</strong> Ready to Move</li>
        <li><strong>Suitable For:</strong> Others</li>
        <li><strong>Floors:</strong> 9th / 32 Floors</li>
        <li><strong>Zone Type:</strong> Commercial</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Construction Status:</strong> Cemented Walls</li>
        <li><strong>Flooring:</strong> Ceramic</li>
        <li><strong>Staircases:</strong> 2</li>
        <li><strong>Lifts:</strong> 2 Service, 4 Passenger</li>
        <li><strong>Parking:</strong> 1500 Public</li>
        <li><strong>Ownership:</strong> Leasehold</li>
        <li><strong>Tax & Govt. Charges:</strong> Not Included</li>
        <li><strong>DG & UPS Charges:</strong> Not Included</li>
        <li><strong>Negotiable:</strong> Yes</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Power Backup</li>
        <li>Internet Connectivity</li>
        <li>DG Availability</li>
        <li>Water Storage</li>
        <li>Cafeteria / Food Court</li>
        <li>Security Personnel</li>
        <li>CCTV Surveillance</li>
        <li>Feng Shui / Vastu Compliant</li>
        <li>Reception Area</li>
        <li>Fire Extinguishers</li>
        <li>Oxygen Duct</li>
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
  // ===== SLIDER FUNCTIONALITY =====
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

  // ===== FORM SUBMISSION =====
  const form = document.getElementById('enquiryForm');
  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const actionUrl = "https://formspree.io/f/xjkanlqw"; // same action

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
  width: 100%; border-radius: 10px; height: 500px; object-fit: cover;
}
.prev, .next {
  position: absolute; top: 50%; transform: translateY(-50%);
  background-color: rgba(0,0,0,0.5); color: #fff; font-size: 24px;
  border: none; cursor: pointer; padding: 10px 15px; border-radius: 50%;
  transition: 0.3s; z-index: 10;
}
.prev:hover, .next:hover { background-color: #f4b400; color: #000; }
.prev { left: 15px; } .next { right: 15px; }

.property-info {
  max-width: 900px; margin: 0 auto 60px;
  background: #fff; padding: 30px; border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.property-info h1 { font-size: 32px; color: #222; margin-bottom: 15px; }
.property-info p, .property-info li { font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 10px; }
.property-info ul { padding-left: 20px; }

.contact-form {
  max-width: 600px; margin: 0 auto;
  background: #fff; padding: 30px; border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.contact-form h2 { text-align: center; margin-bottom: 25px; font-size: 24px; color: #222; }
.form-group { margin-bottom: 15px; }
.form-group label { display: block; font-weight: 600; margin-bottom: 8px; }
.form-group input, .form-group textarea {
  width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px;
  font-size: 16px; transition: 0.3s;
}
.form-group input:focus, .form-group textarea:focus { border-color: #f4b400; outline: none; }
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
