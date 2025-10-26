@include('user_layout.header')

<section class="blog-page">

  <!-- 🖼️ Blog Banner -->
  <div class="blog-banner" style="background-image: url('uploads/b2a.jpg');">
    <div class="overlay"></div>
    <h1 class="blog-title">Noida's Upcoming International Filmcity to be One of the World's Best Filmcity Projects</h1>
  </div>

  <!-- 📰 Blog Content Area -->
  <div class="blog-container">
    <div class="blog-content">

      <!-- 📷 Blog Image (612x439) -->
      <div class="blog-image">
        <img src="uploads/b2.png" alt="Noida International Filmcity" width="612" height="439">
      </div>

      <h2>Introduction</h2>
      <p>
        Noida, one of India’s fastest-growing cities, is all set to make global headlines with the development of its
        <strong>International Filmcity</strong> near the upcoming Jewar International Airport. This visionary project aims to
        position Noida as a global film production and entertainment hub — competing with renowned destinations like
        Hollywood, Dubai, and Singapore.
      </p>

      <h2>The Vision Behind the Filmcity</h2>
      <p>
        The Noida International Filmcity is a flagship initiative by the Government of Uttar Pradesh to promote the state as
        a hub for media, entertainment, and creative industries. Spread across more than 1,000 acres in Sector 21 of the Yamuna
        Expressway region, the project will bring together world-class studios, production houses, and entertainment zones under one roof.
      </p>

      <blockquote>
        “Our goal is to create a world-class ecosystem for film, television, and digital content production right here in Noida.”
      </blockquote>

      <h2>What Makes It One of the Best in the World</h2>
      <p>
        The Filmcity has been designed to integrate modern technology, sustainability, and creativity in one destination. Here’s
        what makes it truly unique:
      </p>

      <ul>
        <li>🎥 State-of-the-art film production studios and sound stages</li>
        <li>🏙️ Dedicated zones for post-production, animation, and VFX</li>
        <li>🌿 Eco-friendly and sustainable infrastructure design</li>
        <li>🎭 Open-air theatres, art districts, and film academies</li>
        <li>✈️ Strategic location near Jewar International Airport for global accessibility</li>
      </ul>

      <h2>Economic and Cultural Impact</h2>
      <p>
        Once operational, the Filmcity is expected to attract thousands of film professionals, investors, and tourists every
        year. It will create thousands of jobs and contribute significantly to Uttar Pradesh’s GDP while fostering local talent
        in the entertainment and creative sectors.
      </p>

      <p>
        Moreover, the Filmcity will enhance Noida’s reputation as a modern, dynamic, and globally connected city — transforming
        it into India’s new capital of entertainment and innovation.
      </p>

      <h2>Conclusion</h2>
      <p>
        Noida’s upcoming International Filmcity is not just a project — it’s a statement of India’s creative potential and global
        ambition. With cutting-edge infrastructure and visionary planning, this development is poised to become one of the world’s
        most admired film cities, redefining the landscape of India’s entertainment industry.
      </p>
    </div>

    <!-- 📚 Sidebar -->
    <aside class="blog-sidebar">
      <h3>Recent Posts</h3>
      <ul>
        <li><a href="#">How Commercial Spaces Enhance Urban Lifestyle in Noida</a></li>
        <li><a href="#">Top 10 Investment Hotspots in Noida</a></li>
        <li><a href="#">Why Sustainable Living Matters</a></li>
      </ul>

      <h3>Categories</h3>
      <ul>
        <li><a href="#">Real Estate News</a></li>
        <li><a href="#">Infrastructure Updates</a></li>
        <li><a href="#">Investment Insights</a></li>
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
  font-size: 2.3rem;
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