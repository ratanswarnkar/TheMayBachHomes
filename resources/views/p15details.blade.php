@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>AIPL Joy District, Sector 88, Gurugram</h1>
    <p><strong>Location:</strong> Sector 88, Gurugram | 
      <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">GGM/780/512/2024/07</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>AIPL</td></tr>
      <tr><th>Typology</th><td>Shops</td></tr>
      <tr><th>Property Status</th><td>Under Construction</td></tr>
      <tr><th>Property Type</th><td>Retail Shops</td></tr>
      <tr><th>Super Area</th><td>28.15 sq.mt. (303 sq.ft.)</td></tr>
      <tr><th>Carpet Area</th><td>12.542 sq.mt. (135 sq.ft.)</td></tr>
      <tr><th>Possession</th><td>June 2028</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹60 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p15.webp" alt="AIPL Joy District Image 1" class="active">
        <img src="uploads/p15a.webp" alt="AIPL Joy District Image 2">
        <img src="uploads/p15b.webp" alt="AIPL Joy District Image 3">
        <img src="uploads/p15c.webp" alt="AIPL Joy District Image 4">
        <img src="uploads/p15d.webp" alt="AIPL Joy District Image 5">
        <img src="uploads/p15e.webp" alt="AIPL Joy District Image 6">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="6000000">

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

  <!-- Full Project Details Section -->
  <section class="project-details">
    <div class="container">
      <h2>Project Description</h2>
      <p><strong>Project Name on RERA Site:</strong> AIPL Joy District</p>
      <p><strong>RERA:</strong> GGM/780/512/2024/07</p>

      <h2>AIPL Joy District – Retail Shops in Sector 88, Gurugram</h2>
      <p>Located in Gurgaon's fast-growing Sector 88A, AIPL Joy District offers high-street retail shops designed for businesses and investors seeking premium exposure and guaranteed footfall. Developed by AIPL, it ensures a modern shopping experience combined with high ROI potential.</p>

      <h2>Key Highlights</h2>
      <ul>
        <li>Double-height shopfronts for maximum brand visibility</li>
        <li>Wide walkways & green boulevards for comfortable movement</li>
        <li>Dedicated zones for fashion, wellness, F&B, and entertainment</li>
        <li>Multiplex, anchor stores, and hypermarkets planned</li>
        <li>Ample parking space with smooth vehicle access</li>
      </ul>

      <h2>Location Advantage</h2>
      <ul>
        <li>5 mins* from Dwarka Expressway</li>
        <li>10 mins* to NH-48 (Delhi–Jaipur Highway)</li>
        <li>20 mins* from IGI Airport</li>
        <li>15 mins* to Cyber City 2 and ISBT</li>
        <li>2 mins* from Proposed Global Smart City</li>
        <li>Surrounded by residential projects by DLF, Bestech, Vatika, and Orris</li>
      </ul>

      <h2>Investment Advantage</h2>
      <ul>
        <li>High capital appreciation potential (20–30% projected growth)</li>
        <li>7–9% rental yields annually</li>
        <li>Low-risk entry into high-growth commercial space</li>
        <li>Trusted developer: AIPL</li>
      </ul>

      <h2>Amenities</h2>
      <ul>
        <li>24x7 Security</li>
        <li>Bank & ATM</li>
        <li>Cafeteria</li>
        <li>CCTV Cameras in all common areas</li>
        <li>Internet/Wi-Fi Connectivity</li>
        <li>Lounge Bar</li>
        <li>Maintenance Staff</li>
        <li>Reserved Parking</li>
        <li>Total Power Backup</li>
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
      Explore the location of <strong>AIPL Joy District</strong> — Sector 88, Gurugram.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.000000!2d77.100!3d28.450!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1234567890%3A0xabcdef1234567890!2sSector%2088%2C%20Gurugram!5e0!3m2!1sen!2sin!4v1730006000000!5m2!1sen!2sin"
       width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<style>
.project-header h1 { text-align:center; color:#d4af37; font-weight:900; font-size:36px; margin-bottom:10px; }
.project-header p { text-align:center; font-size:18px; margin-bottom:30px; }
.quick-summary h2 { text-align:center; color:#d4af37; font-weight:900; font-size:28px; margin-bottom:20px; border-bottom:3px solid #d4af37; padding-bottom:5px; }
.summary-table { width:100%; border-collapse:collapse; margin:0 auto 40px auto; }
.summary-table th, .summary-table td { padding:10px; border:1px solid #ddd; text-align:center; }
.summary-table th { background:#d4af37; color:#000; font-weight:700; }
.container-flex { display:flex; gap:20px; flex-wrap:wrap; justify-content:center; margin-bottom:50px; }
.slider { flex:0 0 70%; position:relative; overflow:hidden; border-radius:10px; }
.slider img { width:100%; display:none; }
.slider img.active { display:block; }
.slider button.prev, .slider button.next { position:absolute; top:50%; transform:translateY(-50%); font-size:30px; background:rgba(0,0,0,0.3); color:#fff; border:none; padding:10px 15px; cursor:pointer; border-radius:50%; }
.slider button.prev { left:10px; }
.slider button.next { right:10px; }
.emi-calculator { flex:0 0 30%; background:#f5f5f5; padding:20px; border-radius:10px; display:flex; flex-direction:column; justify-content:flex-start; }
.emi-calculator h2 { color:#d4af37; margin-bottom:20px; font-weight:900; text-align:center; }
.emi-calculator label { display:block; margin:10px 0 5px; font-weight:600; }
.emi-calculator input { width:100%; padding:8px; margin-bottom:15px; border-radius:5px; border:1px solid #ccc; }
.emi-calculator button { width:100%; padding:10px; background:#d4af37; border:none; color:#000; font-weight:700; cursor:pointer; border-radius:5px; }
.emi-calculator h3 { margin-top:15px; text-align:center; color:#000; }
.project-details { padding:50px 20px; background-color:#fff; color:#000; }
.project-details h2 { color:#d4af37; font-weight:900; border-bottom:3px solid #d4af37; padding-bottom:5px; margin-top:40px; margin-bottom:20px; text-align:left; }
.project-details p, .project-details ul { font-size:16px; line-height:1.8; color:#333; }
.project-details ul { padding-left:25px; margin-bottom:20px; }
@media(max-width:1024px){ .container-flex { flex-direction:column; } .slider, .emi-calculator { flex:1 1 100%; } }
</style>

<script>
let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
function showSlide(index){ slides.forEach(img=>img.classList.remove('active')); slides[index].classList.add('active'); }
if(prev) prev.addEventListener('click', ()=>{ slideIndex=(slideIndex-1+slides.length)%slides.length; showSlide(slideIndex); });
if(next) next.addEventListener('click', ()=>{ slideIndex=(slideIndex+1)%slides.length; showSlide(slideIndex); });
showSlide(slideIndex);
setInterval(()=>{ slideIndex=(slideIndex+1)%slides.length; showSlide(slideIndex); },5000);
function calculateEMI(){ let P=parseFloat(document.getElementById('price').value)-parseFloat(document.getElementById('down').value||0); let R=parseFloat(document.getElementById('rate').value)/12/100; let N=parseFloat(document.getElementById('tenure').value)*12; if(!P||!R||!N){ document.getElementById('emiResult').innerText="Please enter valid numbers"; return; } let EMI=(P*R*Math.pow(1+R,N))/(Math.pow(1+R,N)-1); document.getElementById('emiResult').innerText="EMI: ₹"+EMI.toFixed(0); }
</script>

@include('user_layout.footer');
