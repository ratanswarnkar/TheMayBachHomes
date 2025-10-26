@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Sikka Skyhome, Sector 143B, Noida</h1>
    <p><strong>Location:</strong> Sector 143B, Expressway & FNG, Noida | 
      <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ5764</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Residential Properties</td></tr>
      <tr><th>Builder Name</th><td>Sikka Group</td></tr>
      <tr><th>Typology</th><td>1 BHK, 2 BHK, 3 BHK, 4 BHK</td></tr>
      <tr><th>Property Status</th><td>Ready to move in</td></tr>
      <tr><th>Property Type</th><td>Apartments</td></tr>
      <tr><th>Carpet Area</th><td>115.85 - 195.282 sq.mt. (1247 - 2102 sq.ft.)</td></tr>
      <tr><th>Possession</th><td>Ready To Move</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹1.06 Cr* Onwards (12.5K/ sq. ft.)</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p14.webp" alt="Sikka Skyhome Image 1" class="active">
        <img src="uploads/p14a.webp" alt="Sikka Skyhome Image 2">
        <img src="uploads/p14b.webp" alt="Sikka Skyhome Image 3">
        <img src="uploads/p14c.webp" alt="Sikka Skyhome Image 4">
        <img src="uploads/p14d.webp" alt="Sikka Skyhome Image 5">
        <img src="uploads/p14e.webp" alt="Sikka Skyhome Image 6">
        <img src="uploads/p14f.webp" alt="Sikka Skyhome Image 7">
        <img src="uploads/p14g.webp" alt="Sikka Skyhome Image 8">
         <img src="uploads/p14h.webp" alt="Sikka Skyhome Image 5">
        <img src="uploads/p14i.webp" alt="Sikka Skyhome Image 6">
        <img src="uploads/p14j.webp" alt="Sikka Skyhome Image 7">
        <img src="uploads/p14k.webp" alt="Sikka Skyhome Image 8">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="10600000">

        <label>Down Payment (₹)</label>
        <input type="number" id="down" value="2000000">

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
      <p><strong>Project Name on RERA Site:</strong> SIKKA KARNAM GREENS</p>
      <p><strong>RERA:</strong> UPRERAPRJ5764</p>

      <h2>Sikka Skyhome – Ready-to-Move Luxury Apartments in Sector 143B, Noida</h2>
      <p>Sikka Skyhome, part of Sikka Karnam Greens, offers ready-to-move 1–4 BHK luxury apartments, duplexes & penthouses in Sector 143B, Noida Expressway. Developed by Sikka Group, the project is designed for modern living with spacious layouts, panoramic views, and premium amenities.</p>

      <h2>Typology & Area</h2>
      <ul>
        <li>1 BHK, 2 BHK, 3 BHK, 4 BHK</li>
        <li>Carpet Area: 1247 sq.ft. – 2102 sq.ft.</li>
        <li>Status: Ready-to-Move-In</li>
        <li>BSP: ₹12,500 per sq.ft.</li>
      </ul>

      <h2>Duplex & Penthouse Features</h2>
      <ul>
        <li>Extra privacy with split-level design</li>
        <li>Double-height living spaces</li>
        <li>Premium interiors & spacious layouts</li>
        <li>Panoramic views of Noida Expressway</li>
      </ul>

      <h2>Location Advantage</h2>
      <ul>
        <li>Quick access to Delhi, Greater Noida, and IT hubs</li>
        <li>Close to reputed schools, universities, and healthcare centers</li>
        <li>Connectivity further boosted by the upcoming FNG Corridor</li>
      </ul>

      <h2>Amenities</h2>
      <ul>
        <li>24x7 Convenience Stores</li>
        <li>24x7 Security</li>
        <li>24x7 Water Supply</li>
        <li>3-Tier Security</li>
        <li>Car Parking</li>
        <li>Club House</li>
        <li>Earthquake Resistant Structure</li>
        <li>Fire Fighting Equipment</li>
        <li>Gym</li>
        <li>Huge Conference Room</li>
        <li>Jogging Track</li>
        <li>Kids’ play area</li>
        <li>Landscaped Garden</li>
        <li>Maintenance Staff</li>
        <li>Multipurpose Hall</li>
        <li>Piped Gas Connection</li>
        <li>Power Backup</li>
        <li>Rain Water Harvesting</li>
        <li>Swimming Pool</li>
        <li>Vastu Compliant</li>
      </ul>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> Sikka Karnam Greens |
         <strong>RERA:</strong> <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ5764</a>
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
      Explore the location of <strong>Sikka Skyhome</strong> — Sector 143B, Noida Expressway.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.000000!2d77.368!3d28.620!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1abc1234567%3A0xabcdef1234567890!2sSector%20143B%2C%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1730005000000!5m2!1sen!2sin"
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
