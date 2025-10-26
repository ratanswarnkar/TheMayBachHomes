<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Founder | Jingle Holiday Bazar</title>

  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #fff;
      color: #222;
      line-height: 1.7;
    }

    /* ===== FOUNDER SECTION ===== */
    .founder-section {
      max-width: 1100px;
      margin: 80px auto;
      padding: 20px;
      text-align: center;
    }

    .founder-section h1 {
      font-size: 2.4rem;
      color: #d4af37; /* Golden */
      margin-bottom: 40px;
      letter-spacing: 1px;
      font-weight: 700;
      text-transform: uppercase;
    }

    .founder-card {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      justify-content: center;
      gap: 40px;
      background: #f9f9f9;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .founder-image {
      flex: 1 1 300px;
      text-align: center;
    }

    .founder-image img {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #d4af37;
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
      transition: transform 0.3s ease;
    }

    .founder-image img:hover {
      transform: scale(1.05);
    }

    .founder-info {
      flex: 2 1 400px;
      text-align: left;
    }

    .founder-info h2 {
      font-size: 1.8rem;
      color: #000;
      margin-bottom: 10px;
    }

    .founder-info h4 {
      color: #666;
      margin-bottom: 25px;
    }

    .founder-info p {
      font-size: 1rem;
      color: #333;
      text-align: justify;
      margin-bottom: 15px;
    }

    /* ===== BACK BUTTON ===== */
    .back-btn {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 30px;
      background-color: #d4af37;
      color: #000;
      text-decoration: none;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background-color: #c19a2c;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(212, 175, 55, 0.6);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .founder-card {
        flex-direction: column;
        padding: 25px;
      }

      .founder-info {
        text-align: center;
      }

      .founder-info p {
        text-align: justify;
      }

      .founder-image img {
        width: 200px;
        height: 200px;
      }

      .founder-section h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>

<body>
  <!-- ====== HEADER (Your header goes above this section) ====== -->
@include('user_layout.header');
  <section class="founder-section">
    <h1>About Our Founder</h1>

    <div class="founder-card">
      <div class="founder-image">
        <img src="images/founder.jpeg" alt="Founder - Mr. Pranay Barthwal">
      </div>

      <div class="founder-info">
       <h2>Mr. Pranay Barthwal</h2>
<h4>Founder / Managing Director</h4>

<p>
  As the Founder and Managing Director of <strong>The P Group Holding</strong>, <strong>Homes 4 Life Pty Ltd</strong>, and <strong>Maybach Homes Property Group Pty Ltd</strong>, I have established a diversified portfolio of ventures driven by a single objective — to create sustainable value through strategic real estate investment and development.
</p>

<p>
  With extensive experience across global real estate markets, my journey has been defined by a commitment to enabling both individual and institutional investors to achieve long-term financial growth and security. My entrepreneurial foundation is rooted in a family legacy exceeding three decades, with successful enterprises across real estate, technology, hospitality, and international trade.
</p>

<p>
  Over the years, I have developed and managed a multimillion-dollar property portfolio spanning Australia, the United Kingdom, the United Arab Emirates, Oman, Indonesia, and India, encompassing residential, commercial, and mixed-use developments.
</p>

<p>
  Academically, I hold a Bachelor’s degree in Computer Science, supported by advanced studies in Business Analytics, Artificial Intelligence, and Cyber Security in the UAE, UK, and Australia — a blend of disciplines that strengthens our data-driven approach to investment and growth.
</p>

<p>
  In 2020, I founded <strong>The P Group Holdings</strong> as a strategic holding company to consolidate and expand our interests in real estate, technology, and global investments.
</p>

<p>
  <strong>Our Vision:</strong> To empower individuals and institutions to build sustainable wealth and achieve financial independence through real estate.
</p>

      </div>
    </div>

    <a href="{{ asset('/')}}" class="back-btn">← Back to Home</a>
  </section>

  <!-- ====== FOOTER (Your footer goes below this section) ====== -->
     
@include('user_layout.footer');
</body>
</html>
