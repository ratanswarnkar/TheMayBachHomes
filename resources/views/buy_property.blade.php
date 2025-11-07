@include('user_layout.header')

<section class="buy-property">
  <div class="container">
    <h2 class="section-title" style="padding:40px;">Buy a Property</h2>
    <p class="section-subtitle">Choose from our exclusive property categories</p>

    <div class="property-grid">

      <!-- Apartments -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Apartments</h3>
          <p>Discover premium apartments in prime city locations with modern interiors and panoramic views.</p>
          <button class="btn-gold open-form" data-type="Apartments">Enquire Now</button>
        </div>
      </div>

      <!-- Villas -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Luxury Villas</h3>
          <p>Live the royal lifestyle in our handpicked villas with private pools, gardens, and elegant designs.</p>
          <button class="btn-gold open-form" data-type="Villas">Enquire Now</button>
        </div>
      </div>

      <!-- Off-Plan -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1599423300746-b62533397364?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Off-Plan Properties</h3>
          <p>Invest early in visionary projects and enjoy exclusive offers and flexible payment plans.</p>
          <button class="btn-gold open-form" data-type="Off-Plan">Enquire Now</button>
        </div>
      </div>

      <!-- Premium -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Premium Property</h3>
          <p>Explore elite homes crafted with precision, luxury finishes, and top-tier amenities.</p>
          <button class="btn-gold open-form" data-type="Premium Property">Enquire Now</button>
        </div>
      </div>

      <!-- Commercial -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Commercial</h3>
          <p>Find your next investment opportunity in premium offices, retail spaces, and business hubs.</p>
          <button class="btn-gold open-form" data-type="Commercial">Enquire Now</button>
        </div>
      </div>

      <!-- Re-Sale -->
      <div class="property-card">
        <div class="property-img" style="background-image:url('https://images.unsplash.com/photo-1599423300746-b62533397364?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="property-info">
          <h3>Re-Sale Properties</h3>
          <p>Buy top-quality re-sale properties available at attractive prices in well-established communities.</p>
          <button class="btn-gold open-form" data-type="Re-Sale">Enquire Now</button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Popup Form -->
<div id="popupForm" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn">&times;</span>
    <h3>Enquire Now</h3>
    <form id="enquiryForm" action="https://formspree.io/f/xjkanlqw" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <select name="property_type" id="propertyType" required>
        <option value="">Select Property Type</option>
        <option value="Commercial">Commercial</option>
        <option value="Premium Property">Premium Property</option>
        <option value="Rent">Rent</option>
        <option value="Buy">Buy</option>
        <option value="Office">Office</option>
        <option value="Villa">Villa</option>
        <option value="Apartments">Apartments</option>
        <option value="Offplan">Offplan</option>
      </select>
      <button type="submit" class="btn-gold">Submit Enquiry</button>
    </form>
  </div>
</div>

<style>
/* -------- Black & Gold Theme -------- */
.buy-property {
  background-color: #000;
  color: #fff;
  padding: 80px 0;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}
.buy-property .section-title {
  font-size: 38px;
  color: #d4af37;
  margin-bottom: 10px;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.buy-property .section-subtitle {
  font-size: 16px;
  color: #ccc;
  margin-bottom: 60px;
}
.property-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 35px;
}
.property-card {
  background-color: #111;
  border: 1px solid #222;
  border-radius: 14px;
  overflow: hidden;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}
.property-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 0 20px rgba(212, 175, 55, 0.4);
}
.property-img {
  background-size: cover;
  background-position: center;
  height: 230px;
}
.property-info {
  padding: 25px;
}
.property-info h3 {
  font-size: 22px;
  color: #d4af37;
  margin-bottom: 10px;
  letter-spacing: 0.5px;
}
.property-info p {
  font-size: 15px;
  color: #bbb;
  line-height: 1.6;
  margin-bottom: 20px;
}
.btn-gold {
  display: inline-block;
  background: linear-gradient(90deg, #d4af37, #b8860b);
  color: #000;
  padding: 10px 28px;
  border-radius: 25px;
  font-weight: 600;
  text-decoration: none;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
}
.btn-gold:hover {
  background: linear-gradient(90deg, #b8860b, #d4af37);
  color: #fff;
}

/* Popup Form */
.popup-overlay {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.8);
  z-index: 999;
  justify-content: center;
  align-items: center;
}
.popup-content {
  background: #111;
  border: 1px solid #d4af37;
  border-radius: 12px;
  padding: 40px 30px;
  width: 90%;
  max-width: 400px;
  color: #fff;
  text-align: center;
  position: relative;
}
.popup-content h3 {
  color: #d4af37;
  margin-bottom: 20px;
}
.popup-content input,
.popup-content select {
  width: 100%;
  margin-bottom: 15px;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #444;
  background: #222;
  color: #fff;
  font-size: 15px;
}
.close-btn {
  position: absolute;
  top: 10px; right: 15px;
  color: #d4af37;
  font-size: 22px;
  cursor: pointer;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const popup = document.getElementById("popupForm");
  const openButtons = document.querySelectorAll(".open-form");
  const closeBtn = document.querySelector(".close-btn");
  const propertySelect = document.getElementById("propertyType");

  openButtons.forEach(button => {
    button.addEventListener("click", () => {
      popup.style.display = "flex";
      const type = button.getAttribute("data-type");
      propertySelect.value = type;
    });
  });

  closeBtn.addEventListener("click", () => popup.style.display = "none");
  window.addEventListener("click", e => {
    if (e.target === popup) popup.style.display = "none";
  });
});
</script>

@include('user_layout.footer')
