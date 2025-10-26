@include('user_layout.header')

<section class="blog-page">

  <!-- 🖼️ Blog Banner -->
  <div class="blog-banner" style="background-image: url('uploads/b1a.jpg');">
    <div class="overlay"></div>
    <h1 class="blog-title">How Commercial Spaces Enhance Urban Lifestyle in Noida</h1>
  </div>

  <!-- 📰 Blog Content Area -->
  <div class="blog-container">
    <div class="blog-content">

      <!-- 📷 Blog Featured Image (612x439) -->
      <div class="blog-image">
        <img src="uploads/b1.jpeg" alt="Commercial Spaces in Noida">
      </div>

      <h2>Introduction</h2>
      <p>
        Noida has rapidly transformed into one of India’s most vibrant urban hubs. The city’s skyline, once dominated by residential towers, 
        now gleams with world-class commercial complexes, retail spaces, and coworking environments. These commercial spaces are not only redefining 
        Noida’s economic landscape but are also significantly enhancing its urban lifestyle.
      </p>

      <h2>The Rise of Modern Commercial Hubs</h2>
      <p>
        From premium office buildings in Sector 62 and 142 to the retail marvels in Sector 18, Noida has become a magnet for corporate brands 
        and startups alike. The rise of iconic developments like <strong>Bhutani Alphathum, DLF Mall of India, and Wave One</strong> showcases 
        the city’s evolution into a global commercial destination.
      </p>

      <blockquote>
        “Modern commercial spaces are not just workplaces — they are lifestyle centers that blend business, leisure, and community.” 
      </blockquote>

      <h2>Impact on Urban Living</h2>
      <p>
        Commercial spaces are playing a pivotal role in shaping how people live and interact in urban Noida. With smart infrastructure, 
        food courts, entertainment zones, and green open areas, these developments have made life more convenient and enjoyable.
      </p>

      <ul>
        <li>🛍️ Access to premium shopping and lifestyle brands</li>
        <li>☕ Trendy cafes and coworking lounges for social engagement</li>
        <li>🚗 Improved road and metro connectivity around business zones</li>
        <li>🌳 Eco-friendly spaces promoting sustainable urban living</li>
      </ul>

      <h2>The Future of Noida’s Commercial Landscape</h2>
      <p>
        With the upcoming <strong>Jewar International Airport</strong>, <strong>Film City</strong>, and <strong>Noida International Financial Hub</strong>, 
        the demand for commercial real estate is set to soar. These developments promise a new era of employment, entertainment, 
        and investment opportunities, further elevating the city’s lifestyle quotient.
      </p>

      <h2>Conclusion</h2>
      <p>
        Commercial spaces have become the backbone of Noida’s urban transformation. They not only drive economic growth but also 
        enrich social life by blending business with leisure. As Noida continues to evolve, its commercial infrastructure will 
        remain at the heart of its dynamic and modern lifestyle.
      </p>
    </div>

    <!-- 📚 Sidebar -->
    <aside class="blog-sidebar">
      <h3>Recent Posts</h3>
      <ul>
        <li><a href="#">Top 10 Investment Hotspots in Noida</a></li>
        <li><a href="#">Why Sustainable Living Matters</a></li>
        <li><a href="#">Commercial vs Residential: 2025 Trends</a></li>
      </ul>

      <h3>Categories</h3>
      <ul>
        <li><a href="#">Real Estate News</a></li>
        <li><a href="#">Investment Tips</a></li>
        <li><a href="#">Property Insights</a></li>
      </ul>
    </aside>
  </div>
</section>

@include('user_layout.footer')
<style>
    /* 🖼️ Blog Image */
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
  font-size: 2.5rem;
  font-weight: 700;
  z-index: 1;
  padding: 0 20px;
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
.blog-content ul {
  margin: 20px 0;
  padding-left: 20px;
}
.blog-content ul li {
  margin-bottom: 10px;
}
.blog-content blockquote {
  background: #f5f5f5;
  border-left: 5px solid #d4af37;
  padding: 15px 25px;
  margin: 20px 0;
  font-style: italic;
  color: #555;
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
}

    </style>