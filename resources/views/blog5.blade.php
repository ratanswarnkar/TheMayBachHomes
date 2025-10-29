@include('user_layout.header')

<section class="blog-page">

  <!-- 🖼️ Blog Banner -->
  <div class="blog-banner" style="background-image: url('uploads/b6a.jpg');">
    <div class="overlay"></div>
    <h1 class="blog-title">Top Real Estate Developers in India: Leaders in Commercial Real Estate</h1>
  </div>

  <!-- 📰 Blog Content Area -->
  <div class="blog-container">
    <div class="blog-content">

      <!-- 📷 Blog Image -->
      <div class="blog-image">
        <img src="uploads/b6.png" alt="Top Real Estate Developers in India" width="612" height="439">
      </div>

      <h2>Introduction</h2>
      <p>
        India’s commercial real estate sector has witnessed tremendous growth over the past decade. 
        From modern business hubs and IT parks to premium retail spaces and coworking ecosystems — 
        the country’s leading developers have been instrumental in shaping the skyline of urban India.  
        Let’s take a look at some of the top real estate developers who are redefining India’s commercial landscape.
      </p>

      <h2>1️⃣ DLF Limited</h2>
      <p>
        DLF Limited stands as one of India’s most iconic real estate developers with a legacy spanning over 75 years.  
        The company has developed landmark commercial projects like **DLF Cyber City in Gurugram**,  
        a hub that hosts global corporations such as IBM, Microsoft, and Accenture.  
        DLF’s focus on sustainable design and integrated infrastructure makes it a leader in India’s commercial property market.
      </p>

      <h2>2️⃣ Godrej Properties</h2>
      <p>
        A subsidiary of the renowned Godrej Group, **Godrej Properties** brings trust and innovation to every project.  
        The company has developed high-end commercial projects in cities like Mumbai, Pune, and Bengaluru.  
        With a strong commitment to green building initiatives, Godrej Properties is known for combining 
        luxury, sustainability, and architectural excellence in every commercial space.
      </p>

      <h2>3️⃣ Prestige Group</h2>
      <p>
        Headquartered in Bengaluru, the **Prestige Group** has earned a reputation for creating 
        some of South India’s most prestigious commercial landmarks.  
        From **Prestige Tech Park** to **Prestige Trade Tower**, their projects have set benchmarks in functionality and design.  
        The company continues to expand across India, with projects that cater to both multinational companies and retail giants.
      </p>

      <h2>4️⃣ Lodha Group</h2>
      <p>
        **Lodha Group**, now known as Macrotech Developers, is synonymous with luxury and innovation.  
        Apart from its residential masterpieces, Lodha has created several commercial marvels in Mumbai and beyond —  
        including **Lodha Supremus** and **Lodha iThink**.  
        The company’s focus on high-end office environments and smart infrastructure has helped attract top-tier businesses.
      </p>

      <h2>5️⃣ Embassy Group</h2>
      <p>
        The **Embassy Group** is one of India’s largest office space developers, with projects that define 
        premium corporate living and working experiences.  
        Embassy TechVillage and Embassy Manyata Business Park in Bengaluru are home to Fortune 500 companies.  
        With a focus on sustainable architecture, Embassy continues to lead India’s commercial real estate evolution.
      </p>

      <h2>Conclusion</h2>
      <p>
        These developers are not just constructing buildings — they are building the future of business in India.  
        Through their vision, technology integration, and sustainability efforts, India’s commercial real estate market 
        continues to attract global investors and shape the nation’s economic growth.  
        Whether you’re a business owner or investor, choosing properties developed by these industry leaders 
        ensures long-term value, reliability, and world-class infrastructure.
      </p>

    </div>

    <!-- 📚 Sidebar -->
    <aside class="blog-sidebar">
      <h3>Recent Posts</h3>
      <ul>
        <li><a href="#">Know How Property Investment Can Secure Your Future</a></li>
        <li><a href="#">Benefits of Investing in Real Estate During the Festive Season</a></li>
        <li><a href="#">How Commercial Spaces Enhance Urban Lifestyle</a></li>
      </ul>

      <h3>Categories</h3>
      <ul>
        <li><a href="#">Real Estate</a></li>
        <li><a href="#">Developers</a></li>
        <li><a href="#">Commercial Projects</a></li>
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
