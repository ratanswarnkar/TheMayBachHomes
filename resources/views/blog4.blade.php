@include('user_layout.header')

<section class="blog-page">

  <!-- 🖼️ Blog Banner -->
  <div class="blog-banner" style="background-image: url('uploads/b5a.jpg');">
    <div class="overlay"></div>
    <h1 class="blog-title">Know How Property Investment Can Secure Your Future</h1>
  </div>

  <!-- 📰 Blog Content Area -->
  <div class="blog-container">
    <div class="blog-content">

      <!-- 📷 Blog Image -->
      <div class="blog-image">
        <img src="uploads/b5.png" alt="Property Investment Future" width="612" height="439">
      </div>

      <h2>Introduction</h2>
      <p>
        Property investment has long been regarded as one of the safest and most profitable ways to build long-term wealth. 
        Unlike other investment options, real estate offers the dual advantage of stability and appreciation. 
        Whether it’s a residential flat, a commercial space, or a plot of land, the right property investment can play 
        a major role in securing your financial future and achieving financial freedom.
      </p>

      <h2>1️⃣ A Stable and Tangible Asset</h2>
      <p>
        Real estate is a physical asset that you can see and manage — unlike stocks or mutual funds that depend heavily on market sentiment. 
        Even during economic fluctuations, property values rarely fall to zero. 
        This makes real estate a relatively stable investment option that provides security and a sense of ownership.
      </p>
      <blockquote>
        “Property isn’t just an asset; it’s a long-term safeguard against financial uncertainty.”
      </blockquote>

      <h2>2️⃣ Regular Rental Income</h2>
      <p>
        Investing in real estate can generate consistent rental income. 
        Residential or commercial properties in prime locations often bring in steady returns that can supplement your monthly income. 
        This passive income stream ensures financial stability and can be a reliable source of funds for future investments or emergencies.
      </p>

      <h2>3️⃣ Appreciation Over Time</h2>
      <p>
        Real estate has a proven history of appreciating in value over the years. 
        As infrastructure develops and urbanization grows, the value of your property increases. 
        Investing early allows you to leverage this appreciation and enjoy substantial returns in the long run.
      </p>

      <h2>4️⃣ Tax Benefits and Financial Leverage</h2>
      <p>
        Property investment also comes with tax benefits. 
        You can claim deductions on home loan interest, property tax, and depreciation. 
        Moreover, real estate allows you to use leverage — meaning you can own a high-value asset by paying only a portion upfront and financing the rest through loans.
      </p>

      <h2>5️⃣ Legacy and Future Security</h2>
      <p>
        Beyond financial returns, property investment helps in building a legacy for future generations. 
        Owning real estate ensures that your family remains financially secure even in uncertain times. 
        It’s a tangible asset that grows in value and provides long-term peace of mind.
      </p>

      <h2>Conclusion</h2>
      <p>
        Investing in property isn’t just about owning land or buildings — it’s about creating a financial cushion that ensures stability, 
        growth, and security for you and your loved ones. 
        With the right strategy and timing, property investment can be the cornerstone of a strong and secure financial future.
      </p>
    </div>

    <!-- 📚 Sidebar -->
    <aside class="blog-sidebar">
      <h3>Recent Posts</h3>
      <ul>
        <li><a href="#">What Are 5 Things You Can Do to Secure Your Financial Future?</a></li>
        <li><a href="#">Benefits of Investing in Real Estate During the Festive Season</a></li>
        <li><a href="#">How Commercial Spaces Enhance Urban Lifestyle</a></li>
      </ul>

      <h3>Categories</h3>
      <ul>
        <li><a href="#">Real Estate</a></li>
        <li><a href="#">Investment Tips</a></li>
        <li><a href="#">Financial Planning</a></li>
      </ul>
    </aside>
  </div>
</section>

@include('user_layout.footer')

<style>
/* 🧭 Blog Page Styles */
.blog-page {
  font-family: 'Poppins', sans-serif;
  background-color: #f8f9fa;
  color: #333;
}

/* Banner Section */
.blog-banner {
  position: relative;
  background-size: cover;
  background-position: center;
  height: 350px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.blog-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.55);
}
.blog-title {
  position: relative;
  color: #fff;
  font-size: 2.4rem;
  font-weight: 700;
  z-index: 1;
  padding: 0 20px;
  max-width: 900px;
  line-height: 1.3;
}

/* Blog Container */
.blog-container {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  max-width: 1200px;
  margin: 60px auto;
  padding: 0 20px;
}

/* Blog Content */
.blog-content {
  flex: 3;
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.blog-content h2 {
  color: #d4af37;
  margin-top: 30px;
}
.blog-content p {
  line-height: 1.8;
  margin: 15px 0;
}
.blog-content blockquote {
  background: #f5f5f5;
  border-left: 5px solid #d4af37;
  padding: 15px 25px;
  margin: 20px 0;
  font-style: italic;
  color: #555;
}

/* Blog Image */
.blog-image {
  text-align: center;
  margin-bottom: 25px;
}
.blog-image img {
  width: 612px;
  height: 439px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  max-width: 100%;
}

/* Sidebar */
.blog-sidebar {
  flex: 1;
  background: #fff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.blog-sidebar h3 {
  color: #d4af37;
  margin-bottom: 15px;
}
.blog-sidebar ul {
  list-style: none;
  padding: 0;
}
.blog-sidebar ul li {
  margin-bottom: 10px;
}
.blog-sidebar ul li a {
  text-decoration: none;
  color: #333;
  transition: color 0.3s;
}
.blog-sidebar ul li a:hover {
  color: #d4af37;
}

/* Responsive */
@media (max-width: 992px) {
  .blog-container {
    flex-direction: column;
  }
  .blog-title {
    font-size: 1.8rem;
  }
}
</style>
