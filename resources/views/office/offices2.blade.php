@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/office2a.jpg') }}" alt="Office Space Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office2b.jpg') }}" alt="Office Space Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office2c.jpg') }}" alt="Office Space Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office2d.jpg') }}" alt="Office Space Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office2e.jpg') }}" alt="Office Space Image 5">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>1030 Sq-ft Commercial Office Space for Rent in Assotech Business Cresterra, Sector 135, Noida</h1>
      <p><strong>Location:</strong> Sector 135, Noida - Noida Expressway, Delhi NCR</p>
      <p><strong>Rental Value:</strong> ₹57,000 / month | ₹1 Monthly Maintenance</p>
      <p><strong>Security Deposit:</strong> ₹1</p>
      <p><strong>Super Area:</strong> 1030 sq.ft (₹55/sq.ft)</p>
      <p><strong>Carpet Area:</strong> 1030 sq.ft (₹55/sq.ft)</p>
      <p><strong>Floor:</strong> 4 (Out of 11 Floors)</p>
      <p><strong>Furnishing:</strong> Fully Furnished (15 Seats, 3 Cabins)</p>
      <p><strong>Pantry:</strong> Dry Pantry</p>
      <p><strong>Washrooms:</strong> 2</p>
      <p><strong>Facing:</strong> North | Garden/Park & Main Road Facing</p>
      <p><strong>Parking:</strong> 1 Covered, 1 Open</p>

      <p class="description">
        <strong>Ready-to-Move Office Space</strong> available for rent in Assotech Business Cresterra, Sector 135, Noida.  
        This 1030 sq.ft commercial space features 15 workstations, 3 cabins, a private pantry, and 2 washrooms.  
        The office includes a well-lit reception and conference room, making it ideal for IT, corporate, or consultancy businesses.  
        Located near <strong>Sector 137 Metro Station</strong>, with 24×7 power backup and air conditioning.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Property Type:</strong> Commercial Office Space</li>
        <li><strong>Super Area:</strong> 1030 sq.ft</li>
        <li><strong>Carpet Area:</strong> 1030 sq.ft</li>
        <li><strong>Floor:</strong> 4th (Out of 11 Floors)</li>
        <li><strong>Lock-in Period:</strong> 1 Year</li>
        <li><strong>Transaction Type:</strong> Rent</li>
        <li><strong>Construction Status:</strong> Ready to Move</li>
        <li><strong>Complex:</strong> Assotech Business Cresterra</li>
        <li><strong>Plot Area:</strong> 1030 sq.ft</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Water Availability:</strong> 24 Hours</li>
        <li><strong>Power Supply:</strong> No/Rare Powercut</li>
        <li><strong>Parking:</strong> 1 Covered + 1 Open</li>
        <li><strong>Overlooking:</strong> Garden, Main Road</li>
        <li><strong>Units on Floor:</strong> 1</li>
        <li><strong>Lift:</strong> 1</li>
        <li><strong>Ideal For:</strong> IT/ITES, BPO, Corporate Office, Private Office, CA/Advocate Office, Consultancy, Startups</li>
        <li><strong>Nearby Landmark:</strong> Sector 137 Metro Station, Noida</li>
      </ul>

      <h2>⚙️ Facilities & Amenities</h2>
      <ul>
        <li>Power Backup</li>
        <li>Lift</li>
        <li>Reserved Parking</li>
        <li>Air Conditioned</li>
        <li>RO Water System</li>
        <li>Whiteboard</li>
      </ul>
    </div>

    <!-- ========== CONTACT FORM ========== -->
    <div class="contact-form">
      <h2>Enquire About This Office Space</h2>
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

  const form = document.getElementById('enquiryForm');
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    const actionUrl = "https://formspree.io/f/xjkanlqw";
    try {
      const response = await fetch(actionUrl, { method: 'POST', body: formData, headers: { 'Accept': 'application/json' } });
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
/* same responsive styling */
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
