@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Migsun 1 Destination, Sushant Golf City, Lucknow</h1>
    <p><strong>Location:</strong> Amar Shaheed Path, Sushant Golf City, Lucknow | <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ589752/04/2024</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>Migsun</td></tr>
      <tr><th>Typology</th><td>Food Court, Shops</td></tr>
      <tr><th>Property Status</th><td>Under Construction</td></tr>
      <tr><th>Property Type</th><td>Food Court, Shops</td></tr>
      <tr><th>Possession</th><td>2+ Years</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹52 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p5.webp" alt="Migsun 1 Destination Image 1" class="active">
        <img src="uploads/p5a.webp" alt="Migsun 1 Destination Image 2">
        <img src="uploads/p5b.webp" alt="Migsun 1 Destination Image 3">
        <img src="uploads/p5c.webp" alt="Migsun 1 Destination Image 4">
        <img src="uploads/p5d.webp" alt="Migsun 1 Destination Image 5">
        <img src="uploads/p5e.webp" alt="Migsun 1 Destination Image 6">
        <img src="uploads/p5f.webp" alt="Migsun 1 Destination Image 7">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="5200000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="500000">

        <label>Interest Rate (%)</label>
        <input type="number" id="rate" value="7.5">

        <label>Tenure (Years)</label>
        <input type="number" id="tenure" value="20">

        <button type="button" onclick="calculateEMI()">Calculate</button>
      </form>
      <h3 id="emiResult">EMI: ₹0</h3>
    </div>
  </div>

  <!-- Full Project Details Section -->
  <section class="project-details">
    <div class="container">
      <h2>Project Description</h2>
      <p><strong>Project Name on RERA Site:</strong> Migsun Lucknow Central</p>
      <p><strong>RERA:</strong> UPRERAPRJ589752/04/2024</p>

      <h2>Migsun 1 Destination – Commercial Space at Sushant Golf City</h2>
      <p>Migsun 1 Destination is a premium commercial project offering retail shops and food court spaces at Amar Shaheed Path, Sushant Golf City, Lucknow. It combines convenience, strategic location, and modern design for both investors and business owners.</p>

      <h2>Location Advantage</h2>
      <p>Set in Sushant Golf City, the project enjoys excellent connectivity via Amar Shaheed Path, proximity to Medanta Hospital, Lucknow International Airport, GD Goenka Public School, and major commercial hubs.</p>

      <h2>Project Highlights</h2>
      <ul>
        <li>Multi-level retail and food court spaces</li>
        <li>668 units over fourteen floors</li>
        <li>RCC framed structure for durability</li>
        <li>High-speed elevators and ample parking</li>
        <li>Future-ready infrastructure</li>
      </ul>

      <h2>Investment Potential</h2>
      <p>Registered under RERA (UPRERAPRJ589752/04/2024), Migsun 1 Destination promises transparency, high footfall, and steady rental income, making it a smart investment choice.</p>

      <h2>Amenities</h2>
      <ul>
        <li>3-Tier Security</li>
        <li>Business Lounge</li>
        <li>Car Parking</li>
        <li>Entertainment Amenities</li>
        <li>Food Waste Compost</li>
        <li>High Speed Elevator</li>
        <li>Retail Plaza</li>
      </ul>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> Migsun Lucknow Central | 
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ589752/04/2024</a>
      </p>
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
      Explore the location of <strong>Migsun 1 Destination</strong> — strategically located at Amar Shaheed Path, Sushant Golf City, Lucknow for excellent connectivity and footfall.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28497.30867670631!2d80.953525!3d26.771055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be319d889eb1d%3A0x56253da7f020ffe0!2sAmar%20Shaheed%20Path%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1761156063280!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<style>
/* Project Page Styles (same as previous template) */
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
.emi-calculator h3 { margin-top: 15px; text-align: center; }
.project-details { padding: 50px 20px; background-color: #fff; }
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
  color: #333;
  font-size: 16px;
  line-height: 1.8;
}
.project-details ul { padding-left: 25px; margin-bottom: 20px; }
@media(max-width:1024px){
  .container-flex { flex-direction: column; }
  .slider, .emi-calculator { flex: 1 1 100%; }
}
</style>

<script>
/* Slider JS */
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

/* EMI Calculator JS */
function calculateEMI() {
  let P = parseFloat(document.getElementById('price').value) - parseFloat(document.getElementById('down').value);
  let R = parseFloat(document.getElementById('rate').value)/12/100;
  let N = parseFloat(document.getElementById('tenure').value)*12;
  let EMI = (P*R*Math.pow(1+R,N))/(Math.pow(1+R,N)-1);
  document.getElementById('emiResult').innerText = "EMI: ₹" + EMI.toFixed(0);
}
</script>
@include('user_layout.footer');