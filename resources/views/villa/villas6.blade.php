@include('user_layout.header');
<br><br><br><br>

<section class="property-detail-section">
  <div class="container">

    <!-- ========== PROPERTY IMAGE SLIDER ========== -->
    <div class="property-slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <img src="{{ asset('uploads/villa6a.jpeg') }}" alt="6 BHK For Sale in Sector 44 Block F, Noida Image 1">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa6b.jpeg') }}" alt="6 BHK For Sale in Sector 44 Block F, Noida Image 2">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa6c.jpeg') }}" alt="6 BHK For Sale in Sector 44 Block F, Noida Image 3">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa6d.jpg') }}" alt="6 BHK For Sale in Sector 44 Block F, Noida Image 4">
        </div>
        <div class="slide">
          <img src="{{ asset('uploads/villa6e.jpeg') }}" alt="6 BHK For Sale in Sector 44 Block F, Noida Image 5">
        </div>

        <!-- Slider Buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>
    </div>

    <!-- ========== PROPERTY DETAILS ========== -->
    <div class="property-info">
      <h1>6 BHK For Sale in Sector 44 Block F, Noida</h1>
      <p><strong>Location:</strong> Sector 44 Block F, Noida - Noida Expressway, Delhi NCR</p>
      <p><strong>Price:</strong> ₹27.0 Cr | <strong>EMI:</strong> ₹9.35L | <a href="#">Need Home Loan? Check Eligibility</a></p>
      <p><strong>Super Built-up Area:</strong> 270 sqm (₹92,900/sqft)</p>
      <p><strong>Configuration:</strong> 6 Beds | 7 Baths | 2 Balconies</p>
      <p><strong>Furnishing:</strong> Semi-Furnished</p>
      <p><strong>Ownership Type:</strong> Leasehold</p>
      <p><strong>Status:</strong> Ready to Move</p>

      <p class="description">
        A luxurious ready-to-move <strong>6 BHK duplex Kothi</strong> is available for sale in the prestigious <strong>Sector 44, Noida</strong>.  
        Spread across a 450 sq. meter plot, this beautifully designed residence offers elegance and comfort with modern amenities.  
        Located on a 24-meter wide road, this North-East facing home is Vaastu compliant and ideal for families seeking luxury and peace.  
        The property has a basement plus 3 floors, ensuring ample space and functionality for modern living.
      </p>

      <h2>📊 Overview</h2>
      <ul>
        <li><strong>Transaction Type:</strong> Resale</li>
        <li><strong>Car Parking:</strong> 1 Covered, 1 Open</li>
        <li><strong>Facing:</strong> North-East</li>
        <li><strong>Flooring:</strong> Ceramic Tiles, Marble, Marbonite, Wooden</li>
        <li><strong>Age of Construction:</strong> 5 to 10 Years</li>
        <li><strong>Authority Approval:</strong> Noida Authority</li>
        <li><strong>Water Availability:</strong> 24 Hours Available</li>
        <li><strong>Electricity:</strong> No/Rare Powercut</li>
      </ul>

      <h2>🏢 Additional Details</h2>
      <ul>
        <li><strong>Additional Rooms:</strong> Puja Room, Study, Store</li>
        <li><strong>Floors Allowed:</strong> 5</li>
        <li><strong>Booking Amount:</strong> ₹27.0 Lac</li>
        <li><strong>Registration Charges:</strong> ₹1,35,00,000 Approx.</li>
        <li><strong>Offer:</strong> Save up to 40% on Dream Home Interiors</li>
        <li><strong>Landmarks:</strong> Near Noida Botanical Garden Metro Station (1.22 km)</li>
      </ul>

      <h2>⚙️ Amenities</h2>
      <ul>
        <li>Jogging and Strolling Track</li>
        <li>Visitor Parking</li>
        <li>Basement + 3 Floors</li>
        <li>Wide 24m Road Access</li>
        <li>Garden View</li>
        <li>24×7 Water Supply</li>
        <li>Power Backup</li>
        <li>Modern Interior Finishes</li>
        <li>Near Noida Botanical Garden Metro</li>
        <li>Vaastu Compliant</li>
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
