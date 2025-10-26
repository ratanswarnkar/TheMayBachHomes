@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Ekana Business Centre</h1>
    <p><strong>Location:</strong> Gomti Nagar Extension, Lucknow | <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ546851/07/2025</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>Ekana Sportz City</td></tr>
      <tr><th>Typology</th><td>Commercial Studio, Shops</td></tr>
      <tr><th>Property Status</th><td>New Launch</td></tr>
      <tr><th>Property Type</th><td>Retail & Studio Apartments</td></tr>
      <tr><th>Possession</th><td>2+ Years</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹34.50 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p3.webp" alt="Ekana Business Centre Image 1" class="active">
        <img src="uploads/p3a.webp" alt="Ekana Business Centre Image 2">
        <img src="uploads/p3b.webp" alt="Ekana Business Centre Image 3">
        <img src="uploads/p3c.webp" alt="Ekana Business Centre Image 4">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="3450000">

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
      <p><strong>Project Name on RERA Site:</strong> Ekana Business Centre</p>
      <p><strong>RERA:</strong> UPRERAPRJ546851/07/2025</p>

      <h2>Ekana Business Centre – Redefining Lucknow’s Commercial Skyline</h2>
      <p>Ekana Business Centre (EBC) in Gomti Nagar Extension, Lucknow, is a mixed commercial launch combining retail shops and studio apartments to create a vibrant business + lifestyle destination. Developed by Ekana Sportz City Pvt. Ltd., the project offers strategic location advantage, modern design and attractive investment potential.</p>

      <h2>Why Gomti Nagar Extension is the Perfect Address</h2>
      <p>Situated near the Ekana International Cricket Stadium, Gomti Nagar Extension offers superior connectivity (Shaheed Path, Sultanpur Road) and a growing catchment of residential and commercial developments — ensuring high footfall and great visibility for retail businesses.</p>

      <h2>A Sneak Peek into Ekana Business Centre</h2>
      <p>Spread across approximately 4 acres, Ekana Business Centre comprises around 668 units across 14 floors, combining retail shops and studio apartments. The project is RERA registered ensuring regulatory compliance and transparency. Construction is underway with possession timelines planned within the next 2+ years.</p>

      <h2>Shops that Guarantee Footfalls</h2>
      <ul>
        <li>Retail units starting from ~281 sq.ft.</li>
        <li>Prime location directly facing Ekana Stadium</li>
        <li>Designed for strong visibility & customer circulation</li>
        <li>Attractive rental potential and long-term leases</li>
      </ul>

      <h2>Smart Studio Apartments for Smart Investors</h2>
      <p>Compact studio apartments inside the complex are ideal for working professionals or investors seeking high rental yields. The hybrid commercial-residential model increases daily activity and rental demand.</p>

      <h2>Design & Construction</h2>
      <p>RCC framed structure, wide corridors, high-speed elevators, ample parking and modern façade — Ekana Business Centre balances durability with contemporary design to support both retail and residential needs.</p>

      <h2>Investment Outlook</h2>
      <p>Gomti Nagar Extension is a fast-appreciating micro-market. Early buyers can expect rental income plus capital appreciation driven by location advantages and planned infrastructure nearby.</p>

      <h2>Amenities</h2>
      <ul>
        <li>Business Lounge</li>
        <li>Car Parking</li>
        <li>CCTV Surveillance</li>
        <li>Gym</li>
        <li>Meditation Pavilion</li>
        <li>Meeting Rooms</li>
        <li>High-Speed Elevators</li>
        <li>24x7 Power Backup</li>
        <li>Landscaped Areas</li>
      </ul>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> Ekana Business Centre | 
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ546851/07/2025</a>
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
      Explore the location of <strong>Ekana Business Centre</strong> — perfectly situated at Gomti Nagar Extension near Ekana Stadium with excellent connectivity via Shaheed Path and Sultanpur Road.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28477.725952645196!2d81.007513!3d26.848992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd49fc60a843%3A0x92fc72e19b623f6a!2sGomti%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1761152950865!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
@include('user_layout.footer');