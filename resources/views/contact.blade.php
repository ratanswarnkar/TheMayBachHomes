@include('user_layout.header')
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section class="contact-section">
  <div class="contact-container">

    <!-- Left Info -->
    <div class="contact-info">
      <h2>Get In Touch</h2>
      <p>
        Have a question, inquiry, or want to discuss your next investment project?  
        Fill out the form and our team will reach out to you shortly.
      </p>

      <div class="info-box">
        <p><strong>📍 Address:</strong> A -1314, Tower 3, NX ONE, TECH ZONE - 4, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201306</p>
        <p><strong>📞 Phone:</strong> +91-8588844441</p>
        <p><strong>✉️ Email:</strong> Info@maybach.homes</p>
      </div>
    </div>

    <!-- Right Form -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>

      <!-- Replace YOUR_FORMSPREE_URL below -->
      <form id="contactForm" action="https://formspree.io/f/xjkanlqw" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="form-group">
          <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="form-group">
          <input type="text" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="form-group">
          <input type="text" name="subject" placeholder="Subject" required>
        </div>

        <div class="form-group">
          <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Send Message</button>
      </form>
    </div>

  </div>
</section>

@include('user_layout.footer')
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); // prevent default form submission

  const form = e.target;

  fetch(form.action, {
    method: form.method,
    body: new FormData(form),
    headers: { 'Accept': 'application/json' }
  })
  .then(response => {
    if (response.ok) {
      // Show SweetAlert success message
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'Thank you for contacting us. We will get back to you soon.',
        confirmButtonColor: '#d4af37'
      });
      form.reset(); // reset form fields
    } else {
      response.json().then(data => {
        Swal.fire({
          icon: 'error',
          title: 'Oops!',
          text: data.error || 'Something went wrong. Please try again.',
          confirmButtonColor: '#d4af37'
        });
      });
    }
  })
  .catch(() => {
    Swal.fire({
      icon: 'error',
      title: 'Oops!',
      text: 'Something went wrong. Please try again.',
      confirmButtonColor: '#d4af37'
    });
  });
});
</script>


<style>
/* 🌐 Contact Section - Fully Scoped */
.contact-section {
  font-family: 'Poppins', sans-serif;
  background-color: #f8f9fa;
  padding: 80px 20px;
}

/* Container */
.contact-section .contact-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  max-width: 1200px;
  margin: 0 auto;
  gap: 40px;
  flex-wrap: wrap;
}

/* Left Info */
.contact-section .contact-info {
  flex: 1;
  min-width: 320px;
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.contact-section .contact-info h2 {
  color: #d4af37;
  margin-bottom: 15px;
  font-size: 26px;
}

.contact-section .contact-info p {
  line-height: 1.7;
  color: #555;
}

.contact-section .contact-info .info-box p {
  margin-top: 10px;
  color: #333;
  font-weight: 500;
}

/* Right Form */
.contact-section .contact-form {
  flex: 1;
  min-width: 320px;
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.contact-section .contact-form h2 {
  color: #d4af37;
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
}

/* Form Fields */
.contact-section .contact-form .form-group {
  margin-bottom: 15px;
}

.contact-section .contact-form .form-group input,
.contact-section .contact-form .form-group textarea {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 15px;
  transition: 0.3s;
  font-family: 'Poppins', sans-serif;
}

.contact-section .contact-form .form-group input:focus,
.contact-section .contact-form .form-group textarea:focus {
  border-color: #d4af37;
  outline: none;
  box-shadow: 0 0 5px rgba(212,175,55,0.3);
}

/* Submit Button */
.contact-section .contact-form .submit-btn {
  background: #d4af37;
  color: #000;
  border: none;
  padding: 12px 30px;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s;
  width: 100%;
  font-weight: 600;
}

.contact-section .contact-form .submit-btn:hover {
  background: #000;
  color: #d4af37;
}

/* Responsive */
@media (max-width: 992px) {
  .contact-section .contact-container {
    flex-direction: column;
  }
}

</style>