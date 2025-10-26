@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>M3M Jacob & Co. Residences</h1>
    <p><strong>Location:</strong> Sector 97, Noida | <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ690055/10/2025</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Residential Properties</td></tr>
      <tr><th>Builder Name</th><td>M3M India</td></tr>
      <tr><th>Typology</th><td>3 BHK, 4 BHK, 5 BHK</td></tr>
      <tr><th>Property Status</th><td>Under Construction</td></tr>
      <tr><th>Property Type</th><td>Apartments</td></tr>
      <tr><th>Possession</th><td>2+ Years</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹8.75 Cr* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p2.png" alt="M3M Jacob Residences Image 1" class="active">
        <img src="uploads/p2a.webp" alt="M3M Jacob Residences Image 2">
        <img src="uploads/p2b.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2c.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2d.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2e.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2f.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2g.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2h.webp" alt="M3M Jacob Residences Image 3">
        <img src="uploads/p2i.webp" alt="M3M Jacob Residences Image 3">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="87500000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="5000000">

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
      <p><strong>Project Name on RERA Site:</strong> M3M J and C</p>
      <p><strong>RERA:</strong> UPRERAPRJ690055/10/2025</p>

      <h2>M3M Jacob & Co. Residences – The Crown Jewel of Luxury Living</h2>
      <p>M3M Jacob & Co. Residences in Sector 97 Noida has become the center of global chic and craftsmanship. A collaboration between M3M India and Jacob & Co., this project redefines ultra-luxury living in India with world-class designs, lavish interiors, and iconic brand association.</p>

      <h2>A Visionary Partnership</h2>
      <p>This collaboration unites two masters of innovation and artistry — M3M India, known for its grand developments across NCR, and Jacob & Co., a legendary New York brand in luxury watches and jewelry. Every home reflects the precision of a watchmaker and the brilliance of a diamond.</p>

      <h2>Location Advantage</h2>
      <p>Located beside the Noida-Greater Noida Expressway, M3M Jacob & Co. Residences offer unmatched connectivity to Delhi, Gurugram, and Jewar International Airport. Surrounded by lush greens, top institutions, and premium business hubs, it is a new landmark in ultra-luxury living.</p>

      <h2>Design Philosophy – Where Art Meets Architecture</h2>
      <p>Each 3, 4 & 5 BHK residence embodies modern luxury — panoramic views, double-heighted lobbies, and jewelry-inspired interiors designed by Jacob & Co. The design ensures grandeur, comfort, and privacy.</p>

      <h2>World-Class Amenities</h2>
      <ul>
        <li>Rooftop Infinity Pool</li>
        <li>Designer Clubhouse</li>
        <li>Gym & Spa with latest equipment</li>
        <li>Mini-Theatre & Microbrewery</li>
        <li>Fine Dining & Concierge Services</li>
        <li>High-Speed Internet & Power Backup</li>
        <li>Commercial Zone with boutique retail & cafés</li>
      </ul>

      <h2>Luxury Retail & Lifestyle Experience</h2>
      <p>The retail district at M3M Jacob & Co. is designed as a lifestyle destination — premium stores, world-class dining, and artistic open spaces blend to create an unmatched shopping and leisure experience.</p>

      <h2>Investment Advantage</h2>
      <p>With property values in Noida growing nearly 98% in five years, and the unmatched brand power of Jacob & Co., this is not just a home but an asset of global heritage. Prices start at ₹8.75 Cr* onwards with limited edition residences.</p>

      <h2>Construction, Launch & Possession</h2>
      <p>Currently under active construction, the possession is expected by July 2030. The project’s steady progress and premium positioning make it one of NCR’s most awaited luxury developments.</p>

      <h2>Why Choose M3M Jacob & Co. Residences</h2>
      <ul>
        <li>Joint branding between M3M India & Jacob & Co.</li>
        <li>Ultra-luxurious 3, 4 & 5 BHK residences</li>
        <li>Strategic location near Noida-Greater Noida Expressway</li>
        <li>Limited edition units ensuring exclusivity</li>
        <li>High resale and investment potential</li>
        <li>Premium infrastructure & lifestyle amenities</li>
      </ul>

      <h2>Amenities</h2>
      <ul>
        <li>24x7 Security with CCTV</li>
        <li>Amphitheatre</li>
        <li>Basketball Courts</li>
        <li>Billiards Room</li>
        <li>Cafeteria</li>
        <li>Car Parking</li>
        <li>Car Wash Facility</li>
        <li>Children’s Play Area</li>
        <li>Club House</li>
        <li>Gymnasium</li>
        <li>Conference Room</li>
        <li>Spa</li>
        <li>Swimming Pool</li>
      </ul>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> M3M Jacob & Co Residences | 
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ690055/10/2025</a>
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
prev.addEventListener('click', ()=>{
  slideIndex = (slideIndex -1 + slides.length) % slides.length;
  showSlide(slideIndex);
});
next.addEventListener('click', ()=>{
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
      Explore the location of <strong>M3M Jacob & Co. Residences</strong> — perfectly situated near Noida-Greater Noida Expressway for seamless connectivity to Delhi, Gurugram, and the upcoming Jewar International Airport.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28050.467109263092!2d77.407094!3d28.500368000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce856f847b8c1%3A0x9cfac8756dec96da!2sNoida-Greater%20Noida%20Expy%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1761152006975!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

@include('user_layout.footer');