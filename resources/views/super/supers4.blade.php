@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/super4a.jpeg') }}" alt="Dkrrish Green Beauty Farms Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/super4b.jpeg') }}" alt="Dkrrish Green Beauty Farms Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/super4c.jpeg') }}" alt="Dkrrish Green Beauty Farms Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/super4d.jpeg') }}" alt="Dkrrish Green Beauty Farms Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/super4e.jpg') }}" alt="Dkrrish Green Beauty Farms Image 5">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>4 BHK For Sale in Dkrrish Green Beauty Farms, Sector 135, Noida</h1>
      <p><strong>Location:</strong> Old Club House, Behind JP Wishtown, Sector 135, Noida - Noida Expressway, Delhi NCR</p>
      <p><strong>Price:</strong> ₹2.50 Cr | <strong>EMI:</strong> ₹87k | <a href="#">Need Home Loan? Check Eligibility</a></p>
      <p><strong>Developer:</strong> Dkrrish Builders</p>
      <p><strong>Project Name:</strong> Dkrrish Green Beauty Farms</p>
      <p><strong>Carpet Area:</strong> 9,072 sq.ft</p>
      <p><strong>Configuration:</strong> 4 Beds | 4 Baths | 1 Store Room</p>
      <p><strong>Furnishing:</strong> Furnished</p>
      <p><strong>Ownership Type:</strong> Freehold</p>
      <p><strong>Status:</strong> Ready to Move</p>

      <p class="description">
        Escape the city noise and embrace nature’s peace at <strong>Dkrrish Green Beauty Farms</strong>, Sector 135, Noida.  
        This luxurious 4 BHK farmhouse offers the perfect mix of greenery, comfort, and open space — ideal for family gatherings, weekend getaways, or serene living.  
        Enjoy beautifully landscaped lawns, a refreshing pool, and a calm environment that feels like home away from home.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Transaction Type:</strong> New Property</li>
        <li><strong>Carpet Area:</strong> 9,072 sq.ft</li>
        <li><strong>Price per sq.ft:</strong> ₹2,756</li>
        <li><strong>Facing:</strong> North-East</li>
        <li><strong>Furnished Status:</strong> Furnished</li>
        <li><strong>Age of Construction:</strong> New Construction</li>
        <li><strong>Authority Approval:</strong> Noida Authority</li>
        <li><strong>Type of Ownership:</strong> Freehold</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Booking Amount:</strong> ₹2.0 Lac</li>
        <li><strong>Overlooking:</strong> Main Road</li>
        <li><strong>Car Parking:</strong> 1 Covered, 2 Open</li>
        <li><strong>Floors Allowed for Construction:</strong> 2</li>
        <li><strong>Flooring:</strong> Ceramic Tiles, Granite, Marble, Marbonite, Mosaic, Kotah Stone, Wooden</li>
        <li><strong>Additional Rooms:</strong> Puja Room, Study, Store, Servant Room</li>
        <li><strong>Water Availability:</strong> 24 Hours Available</li>
        <li><strong>Status of Electricity:</strong> No/Rare Powercut</li>
        <li><strong>Nearby Landmark:</strong> Peaceful nature escape close to city amenities</li>
      </ul>

      <h2>⚙️ Facilities</h2>
      <ul>
        <li>Private Farmhouse Space</li>
        <li>Swimming Pool</li>
        <li>Landscaped Garden</li>
        <li>Spacious Lawns</li>
        <li>Power Backup</li>
        <li>24×7 Water Supply</li>
        <li>Security & CCTV</li>
        <li>Parking for Multiple Cars</li>
        <li>Eco-Friendly Environment</li>
        <li>Maintenance Services</li>
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
