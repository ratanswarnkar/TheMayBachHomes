@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>SPJ Vedatam, Sector 14, Gurgaon</h1>
    <p><strong>Location:</strong> Sector 14, Gurgaon | 
      <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">GGM/927/659/2025/30</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>SPJ Group</td></tr>
      <tr><th>Typology</th><td>Shops</td></tr>
      <tr><th>Property Status</th><td>New Launch</td></tr>
      <tr><th>Property Type</th><td>Shops</td></tr>
      <tr><th>Super Area</th><td>19.51 - 55.742 sq.mt. (210 - 600 sq.ft.)</td></tr>
      <tr><th>Possession</th><td>From June 2030</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹70 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p12.webp" alt="SPJ Vedatam Image 1" class="active">
        <img src="uploads/p12a.webp" alt="SPJ Vedatam Image 2">
        <img src="uploads/p12b.webp" alt="SPJ Vedatam Image 3">
        <img src="uploads/p12c.webp" alt="SPJ Vedatam Image 4">
        <img src="uploads/p12d.webp" alt="SPJ Vedatam Image 5">
        <img src="uploads/p12e.webp" alt="SPJ Vedatam Image 6">
        <img src="uploads/p12f.webp" alt="SPJ Vedatam Image 7">
        <img src="uploads/p12g.webp" alt="SPJ Vedatam Image 8">
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Right: EMI Calculator -->
    <div class="emi-calculator">
      <h2>EMI Calculator</h2>
      <form id="emiForm">
        <label>Property Price (₹)</label>
        <input type="number" id="price" value="7000000">

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
      <p><strong>Project Name on RERA Site:</strong> Vedatam</p>
      <p><strong>RERA:</strong> GGM/927/659/2025/30</p>

      <h2>SPJ Vedatam – Retail Shops in Sector 14, Gurgaon</h2>
      <p>SPJ Vedatam is a premium commercial project by SPJ Group offering retail shops in Sector 14, Gurgaon. The project is designed to provide high-visibility commercial spaces with modern infrastructure, strategically located to attract business and customers.</p>

      <h2>Project Highlights</h2>
      <ul>
        <li>Super Area: 19.51 - 55.742 sq.mt. (210 - 600 sq.ft.)</li>
        <li>New launch with modern architecture</li>
        <li>Gated community with 24×7 security</li>
        <li>High-speed elevators and fire safety systems</li>
        <li>Green zones and landscaped open areas</li>
      </ul>

      <h2>RERA Details</h2>
      <p>
        <strong>Project Name:</strong> Vedatam |
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">GGM/927/659/2025/30</a>
      </p>

      <h2>Amenities</h2>
      <ul>
        <li>24×7 Security with CCTV surveillance</li>
        <li>24×7 Water Supply</li>
        <li>Cafe & Restaurant</li>
        <li>Clubhouse</li>
        <li>Fire Fighting System</li>
        <li>High-Speed Elevator</li>
        <li>Large Green Zone</li>
        <li>Swimming Pool</li>
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
      Explore the location of <strong>SPJ Vedatam</strong> — located in Sector 14, Gurgaon with easy access to key commercial hubs.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14032.700000000001!2d77.0725!3d28.4500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1987f7f00001%3A0x123456789abcdef0!2sSector%2014%2C%20Gurgaon%2C%20Haryana!5e0!3m2!1sen!2sin!4v1730002000000!5m2!1sen!2sin"
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
