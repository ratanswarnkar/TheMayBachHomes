@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/office4a.jpg') }}" alt="Office Space Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office4b.jpg') }}" alt="Office Space Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office4c.jpg') }}" alt="Office Space Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office4d.jpg') }}" alt="Office Space Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/office4e.jpg') }}" alt="Office Space Image 5">
        </div>
      

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>5000 Sq-ft Commercial Office Space for Rent in Sector 126, Noida</h1>
      <p><strong>Location:</strong> Sector 126, Noida - Noida Expressway, Delhi NCR</p>
      <p><strong>Rental Value:</strong> ₹3.5 Lac / month | ₹75,000 Monthly Maintenance</p>
      <p><strong>Security Deposit:</strong> ₹10.5 Lac</p>
      <p><strong>Super Area:</strong> 5000 sq.ft (₹70/sq.ft)</p>
      <p><strong>Carpet Area:</strong> 4500 sq.ft (₹78/sq.ft)</p>
      <p><strong>Floor:</strong> 4 (Out of 12 Floors)</p>
      <p><strong>Furnishing:</strong> Fully Furnished (100 Seats, 4 Cabins, 1 Conference Room)</p>
      <p><strong>Pantry:</strong> Wet Pantry</p>
      <p><strong>Washrooms:</strong> 2</p>
      <p><strong>Facing:</strong> North | Main Road Facing</p>
      <p><strong>Parking:</strong> 5 Covered Parking Spaces (Parking Ratio: 1000 sq.ft per car)</p>

      <p class="description">
        <strong>Fully Furnished Premium Office Space</strong> available for rent in Sector 126, Noida.  
        This 5000 sq.ft. modern workspace includes 100 workstations, 4 cabins, a conference room, reception, and a pantry.  
        Located on the 4th floor of a Grade A+ commercial building with 4 lifts, the office offers 24×7 power backup, AC, and high-speed connectivity.  
        Ideal for <strong>IT/ITES companies, corporate offices, private firms, or call centers</strong>.  
        Excellent connectivity to the <strong>Noida Expressway</strong> and <strong>Okhla Bird Sanctuary Metro Station</strong>.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Property Type:</strong> Commercial Office Space</li>
        <li><strong>Super Area:</strong> 5000 sq.ft</li>
        <li><strong>Carpet Area:</strong> 4500 sq.ft</li>
        <li><strong>Floor:</strong> 4th (Out of 12 Floors)</li>
        <li><strong>Lock-in Period:</strong> 3 Years</li>
        <li><strong>Transaction Type:</strong> Rent</li>
        <li><strong>Construction Status:</strong> Ready to Move</li>
        <li><strong>Plot Area:</strong> 2200 sq.m</li>
        <li><strong>Loading:</strong> 10%</li>
        <li><strong>Water Availability:</strong> 24 Hours</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Overlooking:</strong> Main Road</li>
        <li><strong>Lifts:</strong> 4</li>
        <li><strong>Units on Floor:</strong> 5</li>
        <li><strong>Power Supply:</strong> No/Rare Powercut</li>
        <li><strong>Pre-Leased:</strong> No</li>
        <li><strong>Nearby Landmark:</strong> Okhla Bird Sanctuary Metro Station</li>
        <li><strong>Ideal For:</strong> IT/ITES, BPO, Corporate Offices, Private Companies</li>
      </ul>

      <h2>⚙️ Facilities & Amenities</h2>
      <ul>
        <li>Power Backup</li>
        <li>4 High-Speed Lifts</li>
        <li>Reserved & Visitor Parking</li>
        <li>Security & CCTV Surveillance</li>
        <li>Conference Room</li>
        <li>Air Conditioned</li>
        <li>Service/Goods Lift</li>
        <li>Water Storage</li>
        <li>RO Water System</li>
        <li>Cafeteria / Food Court</li>
        <li>Intercom Facility</li>
        <li>Internet/Wi-Fi Connectivity</li>
        <li>Wheelchair Accessibility</li>
        <li>Fire Sprinklers</li>
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
