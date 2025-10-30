@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/villa1.jpg') }}" alt="5 BHK For Sale in Jaypee Greens Kingswood Oriental Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa1a.jpg') }}" alt="5 BHK For Sale in Jaypee Greens Kingswood Oriental Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa1b.jpg') }}" alt="5 BHK For Sale in Jaypee Greens Kingswood Oriental Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa1c.jpg') }}" alt="5 BHK For Sale in Jaypee Greens Kingswood Oriental Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa1d.jpg') }}" alt="5 BHK For Sale in Jaypee Greens Kingswood Oriental Image 5">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>5 BHK For Sale in Jaypee Greens Kingswood Oriental, Sector 128, Noida</h1>
      <p><strong>Location:</strong> Sector 128, Noida - Noida Expressway, Delhi NCR</p>
      <p><strong>Price:</strong> ₹8.33 Cr | <strong>EMI:</strong> ₹2.89L | <a href="#">Need Home Loan? Check Eligibility</a></p>
      <p><strong>Super Built-up Area:</strong> 4,700 sqft</p>
      <p><strong>Configuration:</strong> 5 Beds | 4 Baths | 4 Balconies</p>
      <p><strong>Furnishing:</strong> Unfurnished</p>
      <p><strong>Ownership Type:</strong> Freehold</p>
      <p><strong>Status:</strong> Ready to Move</p>

      <p class="description">
        Presenting a luxurious <strong>5 BHK villa</strong> in the prestigious <strong>Jaypee Greens Kingswood Oriental, Sector 128, Noida</strong>.  
        This property offers elegant design, high-end construction, and a peaceful environment for refined living.  
        Perfectly suited for families seeking luxury, space, and exclusivity — with world-class amenities, connectivity, and serene landscapes.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Transaction Type:</strong> New Property</li>
        <li><strong>Car Parking:</strong> 1 Open</li>
        <li><strong>Facing:</strong> —</li>
        <li><strong>Flooring:</strong> —</li>
        <li><strong>Age of Construction:</strong> Less than 5 Years</li>
        <li><strong>Authority Approval:</strong> —</li>
        <li><strong>Water Availability:</strong> 24 Hours Available</li>
        <li><strong>Electricity:</strong> No/Rare Powercut</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Project:</strong> Jaypee Greens Kingswood Oriental</li>
        <li><strong>Floors Allowed for Construction:</strong> —</li>
        <li><strong>Overlooking:</strong> Main Road</li>
        <li><strong>Ideal For:</strong> Luxury Family Living</li>
        <li><strong>Booking Amount:</strong> ₹1 Lac</li>
        <li><strong>Property Status:</strong> Ready to Move</li>
        <li><strong>Offer:</strong> Save up to 40% on Dream Home Interiors</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>24×7 Water Supply</li>
        <li>Power Backup</li>
        <li>Private Garden</li>
        <li>Clubhouse Access</li>
        <li>Security and CCTV Surveillance</li>
        <li>Spacious Balconies</li>
        <li>Servant Quarters</li>
        <li>Jogging Track</li>
        <li>Children Play Area</li>
        <li>Premium Neighborhood</li>
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
