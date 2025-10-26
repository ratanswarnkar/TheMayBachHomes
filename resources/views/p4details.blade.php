@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Sikka The Crown of Noida</h1>
    <p><strong>Location:</strong> Sector 143A, Noida (Noida-Greater Noida Expressway) | <strong>RERA:</strong>
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ5596</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Residential Properties</td></tr>
      <tr><th>Builder Name</th><td>Sikka Group</td></tr>
      <tr><th>Typology</th><td>2 BHK, 3 BHK, 4 BHK</td></tr>
      <tr><th>Property Status</th><td>Ready to move in</td></tr>
      <tr><th>Property Type</th><td>Apartments</td></tr>
      <tr><th>Possession</th><td>Ready To Move</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹83.49 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p4.webp" alt="Sikka The Crown of Noida Image 1" class="active">
        <img src="uploads/p4a.webp" alt="Sikka The Crown of Noida Image 2">
        <img src="uploads/p4b.webp" alt="Sikka The Crown of Noida Image 3">
        <img src="uploads/p4c.webp" alt="Sikka The Crown of Noida Image 4">
        <img src="uploads/p4d.webp" alt="Sikka The Crown of Noida Image 5">
        <img src="uploads/p4e.webp" alt="Sikka The Crown of Noida Image 6">
        <img src="uploads/p4f.webp" alt="Sikka The Crown of Noida Image 7">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="8349000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="834900">

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
      <p><strong>Project Name on RERA Site:</strong> SIKKA KAAMNA GREENS</p>
      <p><strong>RERA:</strong> UPRERAPRJ5596</p>

      <h2>Sikka The Crown of Noida – A Princely Address on the Expressway</h2>
      <p>Sikka The Crown of Noida (SIKKA KAAMNA GREENS) in Sector 143A is a ready-to-move residential project by Sikka Group offering 2, 3 & 4 BHK apartments. Located on the Noida-Greater Noida Expressway, the project combines premium amenities, thoughtful layouts and immediate possession — ideal for buyers who want a finished home without delays.</p>

      <h2>Prime Location</h2>
      <p>Positioned on the Noida Expressway, Sector 143A grants easy connectivity to Delhi, Noida city center, Greater Noida and the upcoming Jewar International Airport. The location is well supported by shopping, healthcare, schools and corporate hubs — making it a convenient lifestyle choice and a strong investment pick.</p>

      <h2>Spacious Residences</h2>
      <p>The Crown of Noida offers apartments with carpet areas from 76.11 to 162.116 sq.mt. (819.24 - 1745 sq.ft.). The project provides a range of 2 / 3 / 4 BHK units designed for optimal ventilation, daylight and practical use of space.</p>

      <h2>World-Class Amenities</h2>
      <p>The development includes a comprehensive amenities package focused on leisure, fitness and community living:</p>
      <ul>
        <li>Swimming Pool</li>
        <li>Club House</li>
        <li>Gymnasium</li>
        <li>Tennis Court</li>
        <li>Squash Court</li>
        <li>Jogging & Strolling Track</li>
        <li>Kids Play Area</li>
        <li>Yoga / Meditation Area</li>
        <li>Lush Green Park</li>
        <li>Reserved Parking</li>
        <li>CCTV & 24x7 Security</li>
        <li>Power Backup & Water Storage</li>
        <li>Piped Gas Connection</li>
      </ul>

      <h2>Ready to Move — Immediate Possession</h2>
      <p>Possession started in April 2023, so buyers can move in immediately or rent out the property right away. This removes waiting-time risk and makes it attractive for both self-use and investors seeking immediate rental income.</p>

      <h2>Payment Plan</h2>
      <p>The project offers flexible payment options, commonly featuring a 30:70 payment plan to make purchases more manageable for buyers.</p>

      <h2>About the Developer</h2>
      <p>Sikka Group is a reputed developer known for quality execution and timely delivery. The Crown of Noida continues their line-up of well-planned residential projects across the NCR.</p>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> Sikka Kaamna Greens | 
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ5596</a>
      </p>
    </div>
  </section>
</section>

<style>
/* same styles as your previous page (no changes) */
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

<!-- 🌍 Location Map Section -->
<section id="location-map" style="background-color:#111; color:white; padding:60px 0; text-align:center;">
  <div style="max-width:1100px; margin:auto;">
    <h2 style="color:#d4af37; font-size:2.2rem; font-weight:700; margin-bottom:20px; border-bottom:2px solid #d4af37; display:inline-block; padding-bottom:8px;">
      📍 Project Location
    </h2>
    <p style="font-size:1.1rem; color:#ccc; margin-bottom:30px;">
      Explore the location of <strong>Sikka The Crown of Noida</strong> — located in Sector 143A along the Noida-Greater Noida Expressway for excellent connectivity to Delhi, Greater Noida and the upcoming Jewar Airport.
    </p>

    <!-- Embedded Google Map (Noida Expressway area) -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28050.467109263092!2d77.407094!3d28.500368000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce856f847b8c1%3A0x9cfac8756dec96da!2sNoida-Greater%20Noida%20Expy%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1761154698256!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
@include('user_layout.footer');