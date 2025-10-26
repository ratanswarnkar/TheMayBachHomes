@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Bhutani City Center 32, Sector 32, Noida</h1>
    <p><strong>Location:</strong> Sector 32, Noida | <strong>RERA:</strong> Not Applicable</p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>Bhutani Infra</td></tr>
      <tr><th>Typology</th><td>Shops</td></tr>
      <tr><th>Property Status</th><td>Ready to Move</td></tr>
      <tr><th>Property Type</th><td>Retail Shops</td></tr>
      <tr><th>Possession</th><td>Ready to Move</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹80 Lacs* Onwards (₹40K/sq.ft.)</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p6.webp" alt="Bhutani City Center Image 1" class="active">
        <img src="uploads/p6a.webp" alt="Bhutani City Center Image 2">
        <img src="uploads/p6b.webp" alt="Bhutani City Center Image 3">
        <img src="uploads/p6c.webp" alt="Bhutani City Center Image 4">
        <img src="uploads/p6d.webp" alt="Bhutani City Center Image 5">
        <img src="uploads/p6e.webp" alt="Bhutani City Center Image 6">
        <img src="uploads/p6f.webp" alt="Bhutani City Center Image 7">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="8000000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="1000000">

        <label>Interest Rate (%)</label>
        <input type="number" id="rate" value="7.5">

        <label>Tenure (Years)</label>
        <input type="number" id="tenure" value="20">

        <button type="button" onclick="calculateEMI()">Calculate</button>
      </form>
      <h3 id="emiResult">EMI: ₹0</h3>
    </div>
  </div>

  <!-- Project Details Section -->
  <section class="project-details">
    <div class="container">
      <h2>Project Description</h2>
      <p><strong>Project Name on RERA Site:</strong> Not Applicable</p>

      <h2>Bhutani City Center 32 – Premium Retail Shops in Sector 32, Noida</h2>
      <p>Bhutani City Center 32 offers high-end retail shops in one of Noida’s busiest hubs — Sector 32. Located near Noida City Centre Metro, this ready-to-move commercial project ensures unbeatable visibility and a high footfall, especially with top-tier brands like Haldiram’s anchoring the space.</p>

      <h2>Location Advantage</h2>
      <p>Located at the heart of Noida, the project enjoys unmatched connectivity via metro, Noida Expressway, and DND Flyway. Surrounded by Sectors 31, 25, and 34 — it promises heavy foot traffic and easy accessibility.</p>

      <h2>Project Highlights</h2>
      <ul>
        <li>Ready-to-move retail shops</li>
        <li>Located next to Noida City Centre Metro</li>
        <li>Assured monthly rental income options</li>
        <li>Leased to leading brands including Haldiram’s</li>
        <li>High visibility corner plot</li>
      </ul>

      <h2>Investment Benefits</h2>
      <p>Bhutani City Center 32 ensures steady monthly returns, 12% assured annual returns*, and strong capital appreciation potential — ideal for both investors and business owners.</p>

      <h2>Amenities</h2>
      <ul>
        <li>24x7 Power & Water Supply</li>
        <li>Car Parking</li>
        <li>CCTV Security</li>
        <li>Fire Fighting System</li>
        <li>Movie Theatre</li>
        <li>Shopping & Dining Zone</li>
      </ul>
    </div>
  </section>
</section>

<!-- 🌍 Location Map Section -->
<section id="location-map" style="background-color:#111; color:white; padding:60px 0; text-align:center;">
  <div style="max-width:1100px; margin:auto;">
    <h2 style="color:#d4af37; font-size:2.2rem; font-weight:700; margin-bottom:20px; border-bottom:2px solid #d4af37; display:inline-block; padding-bottom:8px;">
      📍 Project Location
    </h2>
    <p style="font-size:1.1rem; color:#ccc; margin-bottom:30px;">
      Explore the location of <strong>Bhutani City Center 32</strong> — ideally positioned at Sector 32, Noida near Noida City Centre Metro for premium connectivity and visibility.
    </p>

    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7007.735082763816!2d77.353535!3d28.57374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5773e536cdd%3A0xb6cc5c65a1dab57b!2sBhutani%20City%20Center%2032!5e0!3m2!1sen!2sin!4v1761202270104!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- ================= CSS ================= -->
<style>
body {
  font-family: "Poppins", sans-serif;
  background-color: #fff;
  color: #000;
  margin: 0;
  padding: 0;
}
.project-header h1 {
  text-align: center;
  color: #d4af37;
  font-weight: 900;
  font-size: 36px;
  margin-bottom: 10px;
}
.project-header p {
  text-align: center;
  font-size: 18px;
  margin-bottom: 30px;
}
.quick-summary h2 {
  text-align: center;
  color: #d4af37;
  font-weight: 900;
  font-size: 28px;
  margin-bottom: 20px;
  border-bottom: 3px solid #d4af37;
  padding-bottom: 5px;
}
.summary-table {
  width: 100%;
  border-collapse: collapse;
  margin: 0 auto 40px auto;
}
.summary-table th, .summary-table td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: center;
}
.summary-table th {
  background: #d4af37;
  color: #000;
  font-weight: 700;
}
.container-flex {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 50px;
}
.slider {
  flex: 0 0 70%;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}
.slider img { width: 100%; display: none; }
.slider img.active { display: block; }
.slider button.prev,
.slider button.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 30px;
  background: rgba(0,0,0,0.3);
  color: #fff;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  border-radius: 50%;
}
.slider button.prev { left: 10px; }
.slider button.next { right: 10px; }
.emi-calculator {
  flex: 0 0 30%;
  background: #f5f5f5;
  padding: 20px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.emi-calculator h2 { color: #d4af37; margin-bottom: 20px; font-weight: 900; text-align: center; }
.emi-calculator label { display: block; margin: 10px 0 5px; font-weight: 600; }
.emi-calculator input { width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc; }
.emi-calculator button { width: 100%; padding: 10px; background: #d4af37; border: none; color: #000; font-weight: 700; cursor: pointer; border-radius: 5px; }
.emi-calculator h3 { margin-top: 15px; text-align: center; color:#000; }
.project-details { padding: 50px 20px; background-color: #fff; color:#000; }
.project-details h2 {
  color: #d4af37;
  font-weight: 900;
  border-bottom: 3px solid #d4af37;
  padding-bottom: 5px;
  margin-top: 40px;
  margin-bottom: 20px;
  text-align: left;
}
.project-details p, .project-details ul {
  font-size: 16px;
  line-height: 1.8;
}
.project-details ul { padding-left: 25px; margin-bottom: 20px; }
@media(max-width:1024px){
  .container-flex { flex-direction: column; }
  .slider, .emi-calculator { flex: 1 1 100%; }
}
</style>

<!-- ================= JS ================= -->
<script>
/* Image Slider */
let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

function showSlide(index){
  slides.forEach(img => img.classList.remove('active'));
  slides[index].classList.add('active');
}
prev.addEventListener('click', ()=> {
  slideIndex = (slideIndex -1 + slides.length) % slides.length;
  showSlide(slideIndex);
});
next.addEventListener('click', ()=> {
  slideIndex = (slideIndex +1) % slides.length;
  showSlide(slideIndex);
});
showSlide(slideIndex);

/* EMI Calculator */
function calculateEMI() {
  let P = parseFloat(document.getElementById('price').value) - parseFloat(document.getElementById('down').value);
  let R = parseFloat(document.getElementById('rate').value)/12/100;
  let N = parseFloat(document.getElementById('tenure').value)*12;
  let EMI = (P*R*Math.pow(1+R,N))/(Math.pow(1+R,N)-1);
  document.getElementById('emiResult').innerText = "EMI: ₹" + EMI.toFixed(0);
}
</script>

@include('user_layout.footer');