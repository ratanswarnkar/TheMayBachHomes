@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>M3M Jewel Crest Avenue</h1>
    <p><strong>Location:</strong> Sector 97, Noida | <strong>RERA:</strong> <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ690055/10/2025</a></p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>M3M India</td></tr>
      <tr><th>Typology</th><td>High Street Retail, Shops</td></tr>
      <tr><th>Property Status</th><td>New Launch</td></tr>
      <tr><th>Property Type</th><td>High Street Retail, Shops</td></tr>
      <tr><th>Possession</th><td>2+ years</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p1.webp" alt="Project Image 1" class="active">
        <img src="uploads/p1a.webp" alt="Project Image 2">
        <img src="uploads/p1b.webp" alt="Project Image 3">
        <img src="uploads/p1c.webp" alt="Project Image 3">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="1000000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="0">

        <label>Interest Rate (%)</label>
        <input type="number" id="rate" value="7.5">

        <label>Tenure (Years)</label>
        <input type="number" id="tenure" value="10">

        <button type="button" onclick="calculateEMI()">Calculate</button>
      </form>
      <h3 id="emiResult">EMI: ₹0</h3>
    </div>
  </div>

  <!-- Full Project Details Section -->
  <section class="project-details">
    <div class="container">
      <!-- Project Description -->
      <h2>Project Description</h2>
      <p>Project Name on RERA Site - M3M J and C</p>
      <p>RERA - UPRERAPRJ690055/10/2025</p>
      <p>M3M Jewel Crest Avenue - Commercial Properties (High Street Retail Shops) for Sale in Sector 97, Noida near Noida Expressway...</p>

      <!-- Remaining sections (highlights, amenities, etc.) -->
             <h2>Project Highlights at a Glance</h2>
      <table class="summary-table">
        <tr><th>Name</th><td>M3M Jewel Crest Avenue by Jacob & Co</td></tr>
        <tr><th>Developer</th><td>M3M India Pvt. Ltd.</td></tr>
        <tr><th>Luxury Partner</th><td>Jacob & Co</td></tr>
        <tr><th>Location</th><td>Sector 97, Noida</td></tr>
        <tr><th>Type</th><td>Ultra-Luxury Retail Spaces</td></tr>
        <tr><th>RERA</th><td>UPRERAPRJ690055/10/2025</td></tr>
        <tr><th>Launch Date</th><td>August 2025</td></tr>
        <tr><th>Possession Date</th><td>July 2030</td></tr>
        <tr><th>Construction Status</th><td>New Launch</td></tr>
      </table>

      <h2>A Legacy of Excellence: The M3M Promise</h2>
      <p>This collaboration unites two worlds of excellence. M3M India, one of the nation’s most respected developers, brings decades of expertise in luxury real estate, design innovation, and architectural brilliance. Their name is synonymous with landmark developments that define the skyline of modern India.</p>
      <p>Jacob & Co, the legendary New York luxury house known for its iconic high jewelry and timepieces, brings its global aura of craftsmanship and sophistication. Together, they present a development that transcends real estate; a global luxury experience curated for visionaries, entrepreneurs, and connoisseurs of fine living.</p>

      <h2>Prime Location Advantage: Sector 97, Noida</h2>
      <ul>
        <li>Noida Golf Course – 10 mins</li>
        <li>Sector 18 Market – 15 mins</li>
        <li>Okhla Bird Sanctuary Metro Station – 12 mins</li>
        <li>DND Flyway – 20 mins</li>
        <li>Jewar International Airport – 35 mins</li>
      </ul>

      <h2>Architectural Brilliance & Design Excellence</h2>
      <p>The design philosophy revolves around flow and functionality; ensuring that every retail and office space is efficiently connected, visible, and accessible. Double-height shop fronts, expansive pedestrian walkways, and landscaped green pockets create a rich yet welcoming ambiance.</p>

      <h2>Retail that Redefines Luxury</h2>
      <p>The retail area is designed to have luxury fashion brands, excellent restaurants, cafés, and entertainment to attract a diverse clientele.</p>

      <h2>World-Class Amenities</h2>
      <ul>
        <li>Parking across multiple levels for visitors and tenants</li>
        <li>24/7 security with CCTV</li>
        <li>Power backup and high-speed elevators</li>
        <li>Tastefully landscaped courtyards with seating areas</li>
        <li>Separate drop-off areas and wide access roads</li>
        <li>Central air-conditioning in most public areas</li>
      </ul>

      <h2>Sustainability at the Core</h2>
      <p>Energy-saving lighting, rainwater harvesting systems, waste management, recycling facilities, and extensive green landscaping.</p>

      <h2>An Investment That Shines Bright</h2>
      <p>Excellent rental returns due to location and visibility. Ideal for investors or brands seeking exposure.</p>

      <h2>The Future of Urban Commercial Lifestyle</h2>
      <p>M3M Jewel Crest Avenue is an ecosystem that weaves together work, leisure, and lifestyle, creating a landmark for Noida.</p>

      <h2>RERA Details</h2>
      <p>Project Name: M3M J and C | RERA Number: <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ690055/10/2025</a></p>

      <h2>Amenities</h2>
      <ul>
        <li>24x7 Security</li>
        <li>CCTV</li>
        <li>Café & Restaurant</li>
        <li>Car Parking</li>
        <li>Lush Green Park</li>
      </ul>
    </div>

    </div>
  </section>
</section>

<style>
/* Header & Title */
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

/* Quick Summary */
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

/* FLEX CONTAINER */
.container-flex {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 50px;
}

/* Slider */
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

/* EMI Calculator */
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

/* Project Details */
.project-details { padding: 50px 20px; background-color: #fff; }
.project-details h1, .project-details h2, .project-details h3 {
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

/* Responsive */
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28050.467109263092!2d77.407094!3d28.500368000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce856f847b8c1%3A0x9cfac8756dec96da!2sNoida-Greater%20Noida%20Expy%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1761135234341!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

@include('user_layout.footer');