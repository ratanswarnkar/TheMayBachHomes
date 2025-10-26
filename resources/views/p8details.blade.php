@include('user_layout.header');
<section class="project-page">

  <!-- Project Title & Location -->
  <div class="project-header">
    <h1>Migsun Food Lane, Sushant Golf City, Lucknow</h1>
    <p><strong>Location:</strong> Amar Shaheed Path, Sushant Golf City, Lucknow | <strong>RERA:</strong> 
      <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ589752</a>
    </p>
  </div>

  <!-- Quick Summary Section -->
  <div class="quick-summary">
    <h2>Quick Summary</h2>
    <table class="summary-table">
      <tr><th>Property Category</th><td>Commercial Properties</td></tr>
      <tr><th>Builder Name</th><td>Migsun</td></tr>
      <tr><th>Typology</th><td>Food Court</td></tr>
      <tr><th>Property Status</th><td>Under Construction</td></tr>
      <tr><th>Property Type</th><td>Food Court</td></tr>
      <tr><th>Possession</th><td>2+ Years</td></tr>
      <tr><th>Basic Sale Price (BSP)</th><td>₹52 Lacs* Onwards</td></tr>
    </table>
  </div>

  <!-- Slider + EMI Calculator -->
  <div class="container-flex">
    <!-- Left: Image Slider -->
    <div class="slider">
      <div class="slides">
        <img src="uploads/p8.webp" alt="Migsun Food Lane Image 1" class="active">
        <img src="uploads/p8a.webp" alt="Migsun Food Lane Image 2">
        <img src="uploads/p8b.webp" alt="Migsun Food Lane Image 3">
        <img src="uploads/p8c.webp" alt="Migsun Food Lane Image 4">
        <img src="uploads/p8d.webp" alt="Migsun Food Lane Image 5">
        <img src="uploads/p8e.webp" alt="Migsun Food Lane Image 6">
        <img src="uploads/p8f.webp" alt="Migsun Food Lane Image 3">
        <img src="uploads/p8g.webp" alt="Migsun Food Lane Image 4">
        <img src="uploads/p8h.webp" alt="Migsun Food Lane Image 5">
        <img src="uploads/p8i.webp" alt="Migsun Food Lane Image 6">
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
      <p><strong>RERA:</strong> UPRERAPRJ589752</p>

      <h2>Migsun Food Lane – Premium Commercial Spaces in Lucknow</h2>
      <p>Migsun Food Lane at Sushant Golf City, Lucknow is a modern food court and retail space development with 100+ shops and outlets from leading brands. Combining location, infrastructure, and investment potential, this project offers high footfall and multiple revenue streams for investors.</p>

      <h2>Strategic Location</h2>
      <p>Situated on Amar Shaheed Path, Migsun Food Lane is close to Medanta Hospital, DPS Lucknow, Ekana Cricket Stadium, Lucknow Airport, and Metro Railway Station, making it ideal for business visibility and customer convenience.</p>

      <h2>Key Highlights</h2>
      <ul>
        <li>High Footfall Potential</li>
        <li>Flexible Leasing Options</li>
        <li>High Future Growth</li>
        <li>Attractive Marketing Support</li>
        <li>Well-thought Investment Plans</li>
        <li>Pay Just 10% & Relax</li>
      </ul>

      <h2>Why Invest?</h2>
      <p>This food lane is a curated investment opportunity with multiple income streams, excellent location, and growing F&B demand. Modern infrastructure, high-visibility shops, and developer credibility ensure a smooth, profitable experience.</p>

      <h2>Amenities</h2>
      <ul>
        <li>High-speed escalators and lifts</li>
        <li>Ample parking space</li>
        <li>3-tier security</li>
        <li>High-visibility shops</li>
        <li>Dedicated entertainment zone</li>
        <li>Fire Fighting System</li>
        <li>Food Waste Compost</li>
        <li>Internet/Wi-Fi Connectivity</li>
        <li>Lift Lobby & Maintenance Staff</li>
        <li>Piped Gas Connection, Rain Water Harvesting</li>
        <li>Shopping Complex, Vaastu/Vastu Compliant</li>
        <li>Visitor Parking & Water Storage</li>
      </ul>

      <h2>RERA Details</h2>
      <p><strong>Project Name:</strong> Migsun Lucknow Central | 
        <strong>RERA:</strong> 
        <a href="https://www.up-rera.in/projects" target="_blank">UPRERAPRJ589752</a>
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
      Explore the location of <strong>Migsun Food Lane</strong> — strategically located at Amar Shaheed Path, Sushant Golf City, Lucknow.
    </p>

    <!-- Embedded Google Map -->
    <div style="border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.4); max-width:100%; margin:auto;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5630.426564293081!2d80.986083!3d26.778906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfb000ac9203b%3A0x5bb76a3fbaac6d69!2sMigsun%20Lucknow%20Central!5e1!3m2!1sen!2sin!4v1761205584785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
