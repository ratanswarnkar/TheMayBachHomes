@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/o4a.avif') }}" alt="Amrapali Verona Heights Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4b.avif') }}" alt="Amrapali Verona Heights Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4c.avif') }}" alt="Amrapali Verona Heights Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4d.avif') }}" alt="Amrapali Verona Heights Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4e.avif') }}" alt="Amrapali Verona Heights Image 5">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4f.avif') }}" alt="Amrapali Verona Heights Image 6">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o4g.avif') }}" alt="Amrapali Verona Heights Image 7">
        </div>
         <div class="slide">
          <img src="{{ asset('uploads/o4h.avif') }}" alt="Amrapali Verona Heights Image 7">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Amrapali Verona Heights, Techzone 4, Greater Noida</h1>
      <p><strong>Location:</strong> GH-02, Techzone 4, Greater Noida</p>
      <p><strong>Price:</strong> ₹61.1 L – ₹1.34 Cr</p>
      <p><strong>Project Name:</strong> Amrapali Verona Heights</p>
      <p><strong>Super Built-up Area:</strong> 975 – 2135 sq.ft</p>
      <p><strong>Possession Status:</strong> Under Construction</p>
      <p><strong>Configuration:</strong> 2, 2.5, 3, 4 BHK Apartments</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ14111 – UPRERAPRJ14106</p>

      <p class="description">
        <strong>Amrapali Verona Heights</strong> by <strong>Amrapali Group</strong> is a perfect blend of exquisite architecture and modern living.  
        Spread across 25 acres (75% open space), it offers luxurious 2, 2.5, 3 and 4 BHK apartments designed for comfort and elegance.  
        The project is strategically located in Techzone 4, Greater Noida and provides seamless connectivity to schools, hospitals, and shopping destinations.  
        With world-class amenities and a tranquil environment, Verona Heights ensures a serene lifestyle for its residents.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Project Area:</strong> 25 Acres (75% open)</li>
        <li><strong>Project Size:</strong> 26 Buildings – 4964 Units</li>
        <li><strong>Sizes:</strong> 975 – 2135 sq.ft</li>
        <li><strong>Average Price:</strong> ₹6.27 K/sq.ft</li>
        <li><strong>Possession Status:</strong> Under Construction</li>
        <li><strong>Launch Date:</strong> Jan 2012</li>
        <li><strong>Configuration:</strong> 2, 2.5, 3, 4 BHK Apartments</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>RERA IDs:</strong> UPRERAPRJ14111, 14112, 14113, 14107, 14108, 14109, 14110 & 14106</li>
        <li><strong>Developer:</strong> Amrapali Group</li>
        <li><strong>Property Type:</strong> Residential Apartments</li>
        <li><strong>Open Area:</strong> 75% Green and Landscaped Space</li>
        <li><strong>Parking:</strong> Covered and Open Options Available</li>
        <li><strong>Power Backup:</strong> Yes</li>
        <li><strong>Water Supply:</strong> 24×7</li>
        <li><strong>Connectivity:</strong> Close to schools, hospitals and shopping centers</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Swimming Pool</li>
        <li>Gymnasium</li>
        <li>Clubhouse</li>
        <li>Children’s Play Area</li>
        <li>Jogging Track</li>
        <li>Landscaped Gardens</li>
        <li>24×7 Security</li>
        <li>Power Backup</li>
        <li>Lift Facility</li>
        <li>Rainwater Harvesting</li>
        <li>Community Hall</li>
        <li>Fire Fighting System</li>
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
  form.addEventListener('submit', async function(e) {
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
        Swal.fire({ icon: 'success', title: 'Thank you!', text: 'Your enquiry has been sent successfully!' });
        form.reset();
      } else {
        Swal.fire({ icon: 'error', title: 'Oops!', text: 'Something went wrong. Please try again later.' });
      }
    } catch (err) {
      Swal.fire({ icon: 'error', title: 'Error!', text: 'Network problem. Please try again later.' });
    }
  });
</script>

<style>
/* ====== SAME STYLE AS PREVIOUS PROJECTS ====== */
.property-detail-section{padding:60px 20px;background-color:#f8f9fa}
.property-slider{position:relative;max-width:900px;margin:0 auto 50px;overflow:hidden;border-radius:10px;box-shadow:0 4px 20px rgba(0,0,0,.15)}
.slider-wrapper{position:relative}
.slide{display:none;width:100%}
.slide.active{display:block}
.slide img{width:100%;border-radius:10px;height:500px;object-fit:cover}
.prev,.next{position:absolute;top:50%;transform:translateY(-50%);background-color:rgba(0,0,0,.5);color:#fff;font-size:24px;border:none;cursor:pointer;padding:10px 15px;border-radius:50%;transition:.3s;z-index:10}
.prev:hover,.next:hover{background-color:#f4b400;color:#000}
.prev{left:15px}.next{right:15px}
.property-info{max-width:900px;margin:0 auto 60px;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 20px rgba(0,0,0,.1)}
.property-info h1{font-size:32px;color:#222;margin-bottom:15px}
.property-info p,.property-info li{font-size:16px;line-height:1.6;color:#555;margin-bottom:10px}
.property-info ul{padding-left:20px}
.contact-form{max-width:600px;margin:0 auto;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 20px rgba(0,0,0,.1)}
.contact-form h2{text-align:center;margin-bottom:25px;font-size:24px;color:#222}
.form-group{margin-bottom:15px}
.form-group label{display:block;font-weight:600;margin-bottom:8px}
.form-group input,.form-group textarea{width:100%;padding:12px;border:1px solid #ddd;border-radius:6px;font-size:16px;transition:.3s}
.form-group input:focus,.form-group textarea:focus{border-color:#f4b400;outline:none}
.submit-btn{width:100%;background-color:#1c1c1c;color:#fff;border:none;padding:14px;border-radius:6px;font-size:18px;font-weight:600;cursor:pointer;transition:.3s}
.submit-btn:hover{background-color:#f4b400;color:#000}
@media(max-width:768px){.slide img{height:300px}.property-info h1{font-size:26px}}
</style>
