@include('user_layout.header');

<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active"><img src="{{ asset('uploads/s4.jpg') }}" alt="KW Delhi6 Image 1"></div>
         <div class="slide"><img src="{{ asset('uploads/s3a.jpeg') }}" alt="KW Delhi6 Property 2"></div>
        <div class="slide"><img src="{{ asset('uploads/s3b.jpeg') }}" alt="KW Delhi6 Property 3"></div>
        <div class="slide"><img src="{{ asset('uploads/s3c.jpeg') }}" alt="KW Delhi6 Property 4"></div>
        <div class="slide"><img src="{{ asset('uploads/s3d.jpeg') }}" alt="KW Delhi6 Property 5"></div>
        <div class="slide"><img src="{{ asset('uploads/s3e.jpeg') }}" alt="KW Delhi6 Property 6"></div>


        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY INFO ========== -->
    <div class="property-info">
      <h1>KW Delhi6, Raj Nagar Extension, Ghaziabad</h1>
      <p><strong>Investment:</strong> ₹27 Lakh - Rent Guarantee ₹27 Lakh</p>

      <h3>Why to Invest in KW Delhi6?</h3>
      <ul class="property-points">
        <li>Freehold Property - Ownership Forever</li>
        <li>Ready to Move with Hand to Hand Registry - Safe Investment</li>
        <li>No GST - Save 12% on Tax</li>
        <li>Heartthrob Location - Main Road Corner Property (45M & 24M Road Intersection)</li>
        <li>90+ Brands – Reliance Smart, Domino’s, Max, Bikanervala, Barista, Apple & More</li>
        <li>Biggest Food Court in the Vicinity – Seating Capacity of Approx. 400 Guests</li>
        <li>Family Entertainment Zone – Zoreko</li>
        <li>Exclusive Floor for Fine Dine & F&B Brands</li>
        <li>Stress-Free, Steady & High Rental Income</li>
        <li>Higher Capital Appreciation – Investor Growth up to 649% in 10 Years</li>
        <li>Organized Large Scale Development in the Region</li>
        <li>Ample Parking Space</li>
      </ul>

      <h3>Plan Details:</h3>
      <p><strong>Price:</strong> ₹27 Lakh</p>
      <p><strong>Guarantee:</strong> 10 Years - ₹27 Lakh Minimum Rent Guarantee</p>
      <p><strong>Area:</strong> 50 sq.ft</p>
      <p><strong>Type:</strong> Pre-Leased Space (Operating Stores)</p>
      <p><strong>Registry:</strong> Hand to Hand</p>
      <p><strong>Offer:</strong> ₹67,500 Quarterly Rent for 10 Years</p>
      <p><strong>Extras:</strong> No Monthly Expenses | No Electricity Bills | One-Time IFMS ₹5,000 Only</p>

      <h3>Associated Brand:</h3>
      <p>Zoreko Cinema</p>

      <h3>Contact Details:</h3>
      <p><strong>Sales Office:</strong> KW Delhi 6, Main Road (NH-58 Bypass), Raj Nagar Extension, Ghaziabad, U.P.</p>
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

<!-- ========== SLIDER SCRIPT ========== -->
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

<!-- ========== STYLES ========== -->
<style>
.property-detail-section {
  padding: 60px 20px;
  background-color: #f7f9fc;
  font-family: 'Poppins', sans-serif;
}

/* Image Slider */
.property-slider {
  position: relative;
  max-width: 900px;
  margin: 0 auto 50px;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}
.slide { display: none; width: 100%; }
.slide.active { display: block; }
.slide img { width: 100%; height: 500px; object-fit: cover; border-radius: 12px; }

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.6);
  color: #fff;
  font-size: 22px;
  border: none;
  cursor: pointer;
  padding: 10px 15px;
  border-radius: 50%;
  transition: 0.3s;
  z-index: 10;
}
.prev:hover, .next:hover { background: #f4b400; color: #000; }
.prev { left: 15px; }
.next { right: 15px; }

/* Property Info */
.property-info {
  background: #fff;
  padding: 35px;
  border-radius: 12px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.08);
  margin: 0 auto 60px;
  max-width: 900px;
}
.property-info h1 { font-size: 32px; color: #111; margin-bottom: 15px; }
.property-info h3 { margin-top: 20px; color: #222; }
.property-info p { color: #555; font-size: 16px; margin-bottom: 10px; }
.property-points { margin: 10px 0 20px; padding-left: 20px; }
.property-points li { list-style-type: disc; margin-bottom: 5px; }

/* Contact Form */
.contact-form {
  max-width: 600px;
  margin: 0 auto;
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.08);
}
.contact-form h2 {
  text-align: center;
  font-size: 26px;
  margin-bottom: 25px;
  color: #111;
}
.form-group { margin-bottom: 15px; }
label { font-weight: 600; margin-bottom: 6px; display: block; }
input, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 15px;
}
input:focus, textarea:focus { border-color: #f4b400; outline: none; }
.submit-btn {
  width: 100%;
  background: #1c1c1c;
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 6px;
  font-size: 17px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}
.submit-btn:hover { background: #f4b400; color: #000; }

@media (max-width: 768px) {
  .slide img { height: 300px; }
  .property-info h1 { font-size: 26px; }
}
</style>

<!-- ========== SWEETALERT ========== -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
          text: 'Your enquiry has been sent successfully!',
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
