@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/o5a.avif') }}" alt="Amrapali Enchante Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o5b.avif') }}" alt="Amrapali Enchante Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o5c.avif') }}" alt="Amrapali Enchante Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o5d.avif') }}" alt="Amrapali Enchante Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/o5e.avif') }}" alt="Amrapali Enchante Image 5">
        </div>
       

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>Amrapali Enchante, Techzone 4, Greater Noida</h1>
      <p><strong>Location:</strong> Plot No. GH-09, Sector Techzone 4, Greater Noida</p>
      <p><strong>Price:</strong> ₹63.56 L – ₹86.0 L</p>
      <p><strong>Project Name:</strong> Amrapali Enchante</p>
      <p><strong>Carpet Area:</strong> 850 – 1150 sq.ft (Super Built-up Area)</p>
      <p><strong>Possession Starts:</strong> Dec 2026</p>
      <p><strong>Configuration:</strong> 2 & 3 BHK Apartments</p>
      <p><strong>RERA ID:</strong> UPRERAPRJ13977</p>

      <p class="description">
        <strong>Amrapali Enchante</strong> by <strong>NBCC Aspire</strong> offers an exceptional blend of luxury, comfort, and affordability in Greater Noida’s Techzone 4.  
        The project redefines modern living with artistically designed apartments, top-class amenities, and a serene environment.  
        Each home is crafted with Vaastu compliance, excellent ventilation, and ample natural light, creating a peaceful retreat that rivals private bungalows.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Project Area:</strong> — </li>
        <li><strong>Project Size:</strong> 4 Buildings – 650 Units</li>
        <li><strong>Sizes:</strong> 850 – 1150 sq.ft</li>
        <li><strong>Average Price:</strong> ₹7.48 K / sq.ft</li>
        <li><strong>Possession Starts:</strong> Dec 2026</li>
        <li><strong>Launch Date:</strong> Jan 2015</li>
        <li><strong>Configuration:</strong> 2 & 3 BHK Apartments</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>RERA ID:</strong> UPRERAPRJ13977</li>
        <li><strong>Developer:</strong> NBCC Aspire</li>
        <li><strong>Property Type:</strong> Residential Apartments</li>
        <li><strong>Location Advantage:</strong> 10 min from Noida City Centre Metro, 5 min to Ryan International School</li>
        <li><strong>Nearby Mall:</strong> Gaur City Mall – 10 min drive</li>
        <li><strong>Nearby Hospital:</strong> Nurture Multispeciality Dental Clinic – 1.2 km</li>
        <li><strong>Open Area:</strong> Ample green and landscaped spaces</li>
        <li><strong>Vaastu Compliant:</strong> Yes</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Swimming Pool</li>
        <li>Kids’ Play Zone</li>
        <li>Gym with Modern Equipment</li>
        <li>Clubhouse</li>
        <li>Jogging Track</li>
        <li>Landscaped Gardens</li>
        <li>24×7 Security</li>
        <li>Power Backup</li>
        <li>Lift</li>
        <li>Community Hall</li>
        <li>Fire Safety System</li>
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
  form.addEventListener('submit', async (e) => {
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
    } catch {
      Swal.fire({ icon: 'error', title: 'Error!', text: 'Network problem. Please try again later.' });
    }
  });
</script>

<style>
/* same styling as before */
.property-detail-section { padding:60px 20px; background-color:#f8f9fa; }
.property-slider { position:relative; max-width:900px; margin:0 auto 50px; overflow:hidden; border-radius:10px; box-shadow:0 4px 20px rgba(0,0,0,0.15); }
.slider-wrapper{position:relative;}
.slide{display:none;width:100%;}
.slide.active{display:block;}
.slide img{width:100%;height:500px;object-fit:cover;border-radius:10px;}
.prev,.next{position:absolute;top:50%;transform:translateY(-50%);background:rgba(0,0,0,0.5);color:#fff;border:none;font-size:24px;padding:10px 15px;border-radius:50%;cursor:pointer;}
.prev:hover,.next:hover{background:#f4b400;color:#000;}
.prev{left:15px;} .next{right:15px;}
.property-info{max-width:900px;margin:0 auto 60px;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 20px rgba(0,0,0,0.1);}
.property-info h1{font-size:32px;color:#222;margin-bottom:15px;}
.property-info p,.property-info li{font-size:16px;line-height:1.6;color:#555;margin-bottom:10px;}
.property-info ul{padding-left:20px;}
.contact-form{max-width:600px;margin:0 auto;background:#fff;padding:30px;border-radius:10px;box-shadow:0 4px 20px rgba(0,0,0,0.1);}
.contact-form h2{text-align:center;margin-bottom:25px;font-size:24px;color:#222;}
.form-group{margin-bottom:15px;}
.form-group label{display:block;font-weight:600;margin-bottom:8px;}
.form-group input,.form-group textarea{width:100%;padding:12px;border:1px solid #ddd;border-radius:6px;font-size:16px;}
.submit-btn{width:100%;background:#1c1c1c;color:#fff;border:none;padding:14px;border-radius:6px;font-size:18px;font-weight:600;cursor:pointer;}
.submit-btn:hover{background:#f4b400;color:#000;}
@media(max-width:768px){.slide img{height:300px;}.property-info h1{font-size:26px;}}
</style>
