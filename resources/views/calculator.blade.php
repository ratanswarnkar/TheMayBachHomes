@include('user_layout.header')
<section style="background-color: #000; color: #fff; padding: 150px 20px; min-height: 100vh;">
  <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 30px; justify-content: space-between;">

    <!-- ✅ EMI CALCULATOR (LEFT) -->
    <div class="calc-box">
      <h2 style="text-align: center; color: gold; margin-bottom: 20px;">EMI Calculator</h2>

      <label>Loan Amount (₹)</label><br>
      <input type="number" id="loanAmount" placeholder="Enter amount" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;"><br>

      <label>Interest Rate (% per annum)</label><br>
      <input type="number" id="interestRate" placeholder="Enter interest rate" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;"><br>

      <label>Loan Tenure (Years)</label><br>
      <input type="number" id="loanTenure" placeholder="Enter years" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;"><br>

      <button onclick="calculateEMI()" style="background: gold; color: #000; border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; width: 100%; margin-top: 10px;">Calculate EMI</button>

      <h3 id="emiResult" style="text-align:center;margin-top:20px;color:#0f0;"></h3>
    </div>

    <!-- ✅ AREA UNIT CONVERTER (RIGHT) -->
    <div class="calc-box">
      <h2 style="text-align: center; color: gold; margin-bottom: 20px;">Area Unit Converter</h2>

      <label>Enter Area</label><br>
      <input type="number" id="areaValue" placeholder="Enter value" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;"><br>

      <label>From Unit</label><br>
      <select id="fromUnit" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;">
        <option value="sqft">Square Feet</option>
        <option value="sqm">Square Meter</option>
        <option value="sqyd">Square Yard</option>
        <option value="acre">Acre</option>
        <option value="hectare">Hectare</option>
        <option value="sqkm">Square Kilometer</option>
        <option value="sqin">Square Inch</option>
        <option value="sqmi">Square Mile</option>
      </select><br>

      <label>To Unit</label><br>
      <select id="toUnit" style="width:100%;padding:10px;border-radius:8px;border:none;margin:8px 0;background:#222;color:#fff;">
        <option value="sqft">Square Feet</option>
        <option value="sqm">Square Meter</option>
        <option value="sqyd">Square Yard</option>
        <option value="acre">Acre</option>
        <option value="hectare">Hectare</option>
        <option value="sqkm">Square Kilometer</option>
        <option value="sqin">Square Inch</option>
        <option value="sqmi">Square Mile</option>
      </select><br>

      <button onclick="convertArea()" style="background: gold; color: #000; border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; width: 100%; margin-top: 10px;">Convert</button>

      <h3 id="convertResult" style="text-align:center;margin-top:20px;color:#0f0;"></h3>
    </div>
  </div>
</section>
<style>
/* Hoverable Box Styling (for EMI + Converter) */
.calc-box {
  flex: 1;
  min-width: 320px;
  background: #111;
  border: 2px solid gold;
  border-radius: 15px;
  padding: 25px;
  box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
  transition: all 0.4s ease;
  cursor: pointer;
}

/* Hover Effect: similar to Achievements section */
.calc-box:hover {
  transform: translateY(-10px) scale(1.03);
  background-color: #1a1a1a;
  box-shadow: 0 0 25px rgba(212, 175, 55, 0.6);
  border-color: #fff;
}
</style>

<section class="our-cta2 p0" style="overflow: hidden;">
      <div class="cta-banner2 bgc-thm maxw1600 mx-auto pt100 pt50-md pb85 pb50-md px30-md bdrs12 position-relative">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="uploadselement-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="uploadselement-2.png" alt="">
        </div>
        <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
          <img src="uploads/cta-img-1.png" alt="">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
              <div class="cta-style2">
                <h2 class="cta-title">Need help? Talk to our expert</h2>
                <p class="cta-text">"Join us on this exciting journey as we shape the future of Real Estate"</p>
                <a href="contact.php" class="ud-btn btn-dark mt10">Learn More<i class="fa fa-long-arrow-right"></i></a><br><br>
				<a href="tel: +91 8588844441" class="ud-btn btn-dark"><span class="fa fa-mobile vam pe-2"></span>+91 8588844441</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- ✅ JavaScript for Calculations -->
<script>
// --- EMI CALCULATOR ---
function calculateEMI() {
  const principal = parseFloat(document.getElementById("loanAmount").value);
  const annualRate = parseFloat(document.getElementById("interestRate").value);
  const years = parseFloat(document.getElementById("loanTenure").value);

  if (!principal || !annualRate || !years) {
    document.getElementById("emiResult").innerHTML = "Please enter all fields.";
    return;
  }

  const monthlyRate = annualRate / 12 / 100;
  const months = years * 12;
  const emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) / (Math.pow(1 + monthlyRate, months) - 1);
  document.getElementById("emiResult").innerHTML = "Monthly EMI: ₹ " + emi.toFixed(2);
}

// --- AREA UNIT CONVERTER ---
function convertArea() {
  const value = parseFloat(document.getElementById("areaValue").value);
  const from = document.getElementById("fromUnit").value;
  const to = document.getElementById("toUnit").value;

  if (!value) {
    document.getElementById("convertResult").innerHTML = "Please enter area value.";
    return;
  }

  // Conversion factors to square meters
  const toSqM = {
    "sqft": 0.092903,
    "sqm": 1,
    "sqyd": 0.836127,
    "acre": 4046.856,
    "hectare": 10000,
    "sqkm": 1_000_000,
    "sqin": 0.00064516,
    "sqmi": 2_589_988.11
  };

  // Convert to square meters, then to target unit
  const inSqM = value * toSqM[from];
  const result = inSqM / toSqM[to];

  document.getElementById("convertResult").innerHTML =
    `${value} ${from} = ${result.toFixed(6)} ${to}`;
}
</script>


@include('user_layout.footer')