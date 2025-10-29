@include('user_layout.header');

<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active"><img src="{{ asset('uploads/s5.jpg') }}" alt="Krishna Vatika Villas Image 1"></div>
        <div class="slide"><img src="{{ asset('uploads/s5a.avif') }}" alt="Krishna Vatika Villas Image 2"></div>
        <div class="slide"><img src="{{ asset('uploads/s5b.avif') }}" alt="Krishna Vatika Villas Image 3"></div>
        <div class="slide"><img src="{{ asset('uploads/s5c.avif') }}" alt="Krishna Vatika Villas Image 4"></div>
        <div class="slide"><img src="{{ asset('uploads/s5d.avif') }}" alt="Krishna Vatika Villas Image 5"></div>
        <div class="slide"><img src="{{ asset('uploads/s5e.avif') }}" alt="Krishna Vatika Villas Image 6"></div>
        <div class="slide"><img src="{{ asset('uploads/s5f.avif') }}" alt="Krishna Vatika Villas Image 2"></div>
        <div class="slide"><img src="{{ asset('uploads/s5g.avif') }}" alt="Krishna Vatika Villas Image 3"></div>
        <div class="slide"><img src="{{ asset('uploads/s5h.avif') }}" alt="Krishna Vatika Villas Image 4"></div>
        <div class="slide"><img src="{{ asset('uploads/s5i.avif') }}" alt="Krishna Vatika Villas Image 5"></div>
        <div class="slide"><img src="{{ asset('uploads/s5j.avif') }}" alt="Krishna Vatika Villas Image 6"></div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY INFO ========== -->
    <div class="property-info">
      <h1>Paradise Krishna Vatika Luxurious Villas</h1>
      <p><strong>Location:</strong> Sector 16B Noida Extension, Greater Noida</p>

      <h3>Around This Project:</h3>
      <ul class="property-points">
        <li><strong>School:</strong> SKS World School, Greater Noida West – 1 min (0.1 km)</li>
        <li><strong>Bus Stand:</strong> Gaur City 1 Bus Stop – 14 mins (9.8 km)</li>
        <li><strong>Hospital:</strong> Manipal Hospital, Ghaziabad</li>
        <li><strong>Mall:</strong> The Opulent Mall</li>
        <li><strong>Restaurant:</strong> Bikanervala</li>
        <li><a href="https://www.google.com/maps" target="_blank" class="map-link">View More on Maps</a></li>
      </ul>

      <h3>Project Overview:</h3>
      <p><strong>Sizes:</strong> 2100 - 2550 sq.ft.</p>
      <p><strong>Launch Date:</strong> Sep, 2023</p>
      <p><strong>Average Price:</strong> ₹5,500 / sq.ft</p>
      <p><strong>Possession Status:</strong> Ready to Move</p>
      <p><strong>Configuration:</strong> 4 BHK Villa</p>
      <p><strong>RERA ID:</strong> Not Applicable</p>

      <h3>About Paradise Krishna Vatika Luxurious Villas</h3>
      <p>Krishna Vatika Villas are located in close proximity to several gated residential communities. Educational institutions and shopping malls are nearby, making it a convenient living choice.</p>
      <p>Situated in one of the most promising locations of Greater Noida (West), the area’s rapid development ensures excellent connectivity and future growth. The project offers premium comfort and quality of living within an attractive price bracket. Spread over lush green landscapes, this low-density project ensures peace and exclusivity. Its strategic location makes it an excellent investment opportunity for families and investors alike.</p>

      <h3>Price & Floor Plan</h3>
      <div class="floor-plan">
        <p><strong>4 BHK Villa:</strong> ₹1.15 Cr - ₹1.4 Cr</p>
        <ul>
          <li>2100 sq.ft — ₹1.15 Cr</li>
          <li>2310 sq.ft — ₹1.25 Cr</li>
          <li>2550 sq.ft — ₹1.40 Cr</li>
        </ul>
      </div>

     
    </div>

    <!-- ========== CONTACT FORM ========== -->
    <div class="contact-form">
      <h2>Ask For Details / Enquiry</h2>
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

/* Info */
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
.map-link { color: #1a73e8; text-decoration: none; }
.map-link:hover { text-decoration: underline; }

.brochure-btn {
  display: inline-block;
  background: #1c1c1c;
  color: #fff;
  padding: 12px 25px;
  border-radius: 6px;
  text-decoration: none;
  margin-top: 20px;
}
.brochure-btn:hover { background: #f4b400; color: #000; }

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
