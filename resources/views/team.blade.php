@include('user_layout.header');
  
<section id="team" class="team-section">
  <div class="container">
    <h2 class="section-title">Meet Our Team</h2>

    <!-- Founder -->
<div class="founder">
  <img src="images/founder.jpeg" alt="Founder">
  <h2>Mr. Pranay Barthwal</h2>
  <h4>Founder / Managing Director</h4>

  <!-- Attractive Button -->
  <a href="{{ asset('founder')}}" class="founder-btn">Read More About Founder</a>
</div>


    <!-- Connecting line -->
    <div class="connector-line"></div>

    <!-- HR and Manager -->
    <div class="managers">
      <div class="member">
        <img src="images/hr.png" alt="HR">
        <h3>Ms. Sakshi Sharma</h3>
        <p>Human Resources</p>
      </div>
      <div class="member">
        <img src="images/manager.png" alt="Manager">
        <h3>Mr. Shivam Yadav</h3>
        <p>Administrator</p>
      </div>
    </div>

    <!-- Connector -->
    <div class="connector-line"></div>

    <!-- Team Members -->
    <div class="team-members">
      <div class="member">
        <img src="images/it.jpeg" alt="Sales Executive">
        <h3>Ratan Swarnkar</h3>
        <p>IT Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager.png" alt="Marketing Head">
        <h3>Rajat Kumar</h3>
        <p>Client Manager</p>
      </div>
      <div class="member">
        <img src="images/real_estate_expert.png" alt="Engineer">
        <h3>Nishant Chauhan</h3>
        <p>Senior Real Estate Expert</p>
      </div>
      <div class="member">
        <img src="images/client_manager1.jpeg" alt="Designer">
        <h3>Anshika Sharma</h3>
        <p>Client Manager</p>
      </div>
    </div>
  </div>
</section>

<style>
  .founder {
  text-align: center;
  margin-top: 40px;
}

.founder img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
  transition: transform 0.3s ease;
}

.founder img:hover {
  transform: scale(1.05);
}

/* Gold Button */
.founder-btn {
  display: inline-block;
  margin-top: 15px;
  padding: 12px 28px;
  background-color: #d4af37; /* your uploaded gold color */
  color: #000;
  text-decoration: none;
  font-weight: 600;
  border-radius: 50px;
  box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);
  transition: all 0.3s ease;
}

.founder-btn:hover {
  background-color: #c19a2c;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(212, 175, 55, 0.6);
}

.team-section { position: relative; background: url("uploads/team-bg1.png") center/cover no-repeat; /* 🔹 your background image */ text-align: center; padding: 100px 20px; color: #fff; /* default white text for contrast */ overflow: hidden; }

.section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #fffff; /* ✅ Purple heading */
  margin-bottom: 50px;
}

/* Founder */
.founder {
  text-align: center;
  margin-bottom: 40px;
}

.founder img {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  object-fit: cover;
  border: 6px solid #fff;
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.founder h2 {
  margin-top: 15px;
  font-size: 1.4rem;
  color: #333;
}

.founder h4 {
  color: #666;
  font-size: 1rem;
}

/* Connector line */
.connector-line {
  width: 2px;
  height: 40px;
  background: #ccc;
  opacity: 0.6;
  margin: 20px auto;
}

/* HR + Manager */
.managers {
  display: flex;
  justify-content: center;
  gap: 60px;
  flex-wrap: wrap;
  margin-bottom: 40px;
}

.managers .member,
.team-members .member {
  background: #fff;
  color: #333;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  width: 220px;
  transition: transform 0.3s ease;
}

.member:hover {
  transform: translateY(-5px);
}

/* Member Images */
.managers .member img,
.team-members .member img {
  width: 180px;
  height: 200px;
  border-radius: 8px;
  object-fit: cover;
  margin-bottom: 10px;
  border: 3px solid #fff;
  box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}

.member h3 {
  font-size: 1.1rem;
  color: #111;
  margin: 8px 0 4px;
}

.member p {
  font-size: 0.9rem;
  color: #555;
}

/* Team Members */
.team-members {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 768px) {
  .founder img {
    width: 180px;
    height: 180px;
  }
  .managers, .team-members {
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }
  .connector-line {
    height: 25px;
  }
  .section-title {
    font-size: 1.8rem;
  }
}
</style>

  
@include('user_layout.footer');
	