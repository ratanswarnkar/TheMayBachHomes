@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active"><img src="{{ asset('uploads/s6.jpg') }}" alt="Elite X Image 1"></div>
        <div class="slide"><img src="{{ asset('uploads/s6a.avif') }}" alt="Elite X Image 2"></div>
        <div class="slide"><img src="{{ asset('uploads/s6b.avif') }}" alt="Elite X Image 3"></div>
        <div class="slide"><img src="{{ asset('uploads/s6c.avif') }}" alt="Elite X Image 4"></div>
        <div class="slide"><img src="{{ asset('uploads/s6d.avif') }}" alt="Elite X Image 5"></div>
        <div class="slide"><img src="{{ asset('uploads/s6e.avif') }}" alt="Elite X Image 6"></div>
                <div class="slide"><img src="{{ asset('uploads/s6f.avif') }}" alt="Elite X Image 6"></div>


        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Elite X, Sector 10 Noida Extension</h1>
      <p><strong>Developer:</strong> Elite Group</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ916631/02/2024</p>
      <p><strong>Location:</strong> Sector 10 Noida Extension, Greater Noida</p>
      <p><strong>Price Range:</strong> ₹1.92 Cr - ₹3.07 Cr (₹10.67K - ₹11.64K per sq.ft)</p>
      <p><strong>Configurations:</strong> 3 & 4 BHK Ultra Luxury Apartments</p>
      <p><strong>Possession:</strong> Dec 2028</p>
      <p><strong>Sizes:</strong> 1800 - 2638 sq.ft (Super Built-up Area)</p>

      <h3>Why Choose Elite X?</h3>
      <ul class="property-points">
        <li>3/4 BHK Ultra Luxury Project with full disclosure of built-up area</li>
        <li>Approx. 70% open area – peaceful and green surroundings</li>
        <li>Fully Paid-Up Freehold Land – ownership forever</li>
        <li>Elegant entry lobbies dedicated to each tower</li>
        <li>Ample sunlight and cross-ventilation in all apartments</li>
        <li>5 minutes from upcoming metro station</li>
        <li>10 minutes from NH-24 Highway</li>
        <li>80% open landscaped area inside the society</li>
      </ul>

      <h3>Property Location</h3>
      <ul class="property-points">
        <li><strong>School:</strong> Delhi World Public School Noida Extension</li>
        <li><strong>Bus Stand:</strong> Eco Village Bus Stop</li>
        <li><strong>Hospital:</strong> Yatharth Super Speciality Hospital, Noida Extension</li>
        <li><strong>Mall:</strong> Ace City Square</li>
        <li><strong>Restaurant:</strong> Om Sweets and Namkeen</li>
        <li><a href="https://www.google.com/maps" target="_blank" class="map-link">View more on Maps</a></li>
      </ul>

      <h3>About Elite X</h3>
      <p><strong>Living Beautifully with Elite X</strong> — Elite X, Sector 10 Noida Extension, is a prestigious residential project by Elite Group offering a perfect blend of comfort, elegance, and convenience.</p>
      <p>Spread across <strong>5.43 acres</strong> with 70% open space, the project consists of <strong>6 buildings</strong> housing <strong>626 units</strong>. These 3 & 4 BHK ultra-luxury apartments are designed for those who desire premium living.</p>
      <p>Located strategically in Greater Noida West, Elite X enjoys superb connectivity to Delhi-NCR via NH-24 and DND Flyway, and will benefit from the upcoming metro connectivity.</p>
      <p>With lush green landscapes, world-class amenities, and elegant architecture, Elite X offers you a lifestyle with no compromises — where modern comfort meets serene natural beauty.</p>

      
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
  position: absolute; top: 50%; transform: translateY(-50%);
  background: rgba(0,0,0,0.6); color: #fff; font-size: 22px;
  border: none; cursor: pointer; padding: 10px 15px;
  border-radius: 50%; transition: 0.3s; z-index: 10;
}
.prev:hover, .next:hover { background: #f4b400; color: #000; }
.prev { left: 15px; } .next { right: 15px; }

.property-info {
  background: #fff;
  padding: 35px;
  border-radius: 12px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.08);
  margin: 0 auto 60px;
  max-width: 900px;
}
.property-info h1 { font-size: 32px; color: #111; margin-bottom: 15px; }
.property-info h3 { margin-top: 25px; color: #222; font-size: 20px; }
.property-info p { color: #555; font-size: 16px; margin-bottom: 10px; }
.property-points { margin: 10px 0 20px; padding-left: 20px; }
.property-points li { list-style-type: disc; margin-bottom: 6px; }
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

.contact-form {
  max-width: 600px; margin: 0 auto;
  background: #fff; padding: 30px; border-radius: 12px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.08);
}
.contact-form h2 {
  text-align: center; font-size: 26px;
  margin-bottom: 25px; color: #111;
}
.form-group { margin-bottom: 15px; }
label { font-weight: 600; margin-bottom: 6px; display: block; }
input, textarea {
  width: 100%; padding: 12px; border: 1px solid #ddd;
  border-radius: 6px; font-size: 15px;
}
input:focus, textarea:focus { border-color: #f4b400; outline: none; }
.submit-btn {
  width: 100%; background: #1c1c1c; color: #fff;
  border: none; padding: 14px; border-radius: 6px;
  font-size: 17px; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.submit-btn:hover { background: #f4b400; color: #000; }

@media (max-width: 768px) {
  .slide img { height: 300px; }
  .property-info h1 { font-size: 26px; }
}
</style>

<!-- ========== SWEETALERT SCRIPT ========== -->
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
