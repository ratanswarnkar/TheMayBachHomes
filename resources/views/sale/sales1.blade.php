@include('user_layout.header');
<br>
<br>
<br>
<br>



<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/s1a.jpeg') }}" alt="Property Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/s1b.jpeg') }}" alt="Property Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/s1c.jpeg') }}" alt="Property Image 3">
        </div>
         <div class="slide">
          <img src="{{ asset('uploads/s1d.jpeg') }}" alt="Property Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/s1e.jpeg') }}" alt="Property Image 3">
        </div>
         <div class="slide">
          <img src="{{ asset('uploads/s1f.jpeg') }}" alt="Property Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/s1g.jpeg') }}" alt="Property Image 3">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Retail shop for sale</h1>
      <p><strong>Location:</strong> Spectrum@metro sector-75, Noida</p>
      <p><strong>Price:</strong> 55 Lakh Onwards</p>
      <p><strong>Property Type:</strong> Luxury Shop</p>
      <p><strong>Status:</strong> Ready to Move</p>
      <p><strong>Area:</strong> 270 sq. ft</p>


      <p class="description">
       Retail shops at Spectrum@Metro, Sector-75 Noida offer an exceptional opportunity for business owners and investors seeking a prime location and luxurious retail experience. These ready-to-move luxury shops are designed with modern architecture and premium finishes, ensuring a perfect setting for high-end brands and enterprises.

With an area of 270 sq. ft and prices starting at 55 Lakh onwards, Spectrum@Metro provides excellent visibility, footfall, and connectivity—making it one of the most desirable retail destinations in Noida.
      </p>
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
<script>
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
</script>

<style>
/* ========== PROPERTY DETAILS PAGE ========== */

.property-detail-section {
  padding: 60px 20px;
  background-color: #f8f9fa;
}

/* Image Slider */
.property-slider {
  position: relative;
  max-width: 900px;
  margin: 0 auto 50px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

.slider-wrapper {
  position: relative;
}

.slide {
  display: none;
  width: 100%;
}

.slide.active {
  display: block;
}

.slide img {
  width: 100%;
  border-radius: 10px;
  height: 500px;
  object-fit: cover;
}

/* Next & Prev Buttons */
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

.prev:hover, .next:hover {
  background-color: #f4b400;
  color: #000;
}

.prev { left: 15px; }
.next { right: 15px; }

/* Property Info */
.property-info {
  max-width: 900px;
  margin: 0 auto 60px;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.property-info h1 {
  font-size: 32px;
  color: #222;
  margin-bottom: 15px;
}

.property-info p {
  font-size: 16px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 10px;
}

.property-info .description {
  margin-top: 15px;
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

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 16px;
  transition: 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: #f4b400;
  outline: none;
}

.submit-btn {
  width: 100%;
  background-color: #1c1c1c;
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 6px;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.submit-btn:hover {
  background-color: #f4b400;
  color: #000;
}

/* Responsive */
@media (max-width: 768px) {
  .slide img {
    height: 300px;
  }

  .property-info h1 {
    font-size: 26px;
  }
}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  const form = document.getElementById('enquiryForm');

  form.addEventListener('submit', async function (e) {
    e.preventDefault(); // Stop default redirect

    const formData = new FormData(form);
    const actionUrl = "https://formspree.io/f/xjkanlqw"; // 🔁 Your Formspree link here

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