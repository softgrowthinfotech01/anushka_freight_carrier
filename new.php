 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
  
    $to = "anushkafrightcarriers@gmail.com";

    $subject = "New Message from " . $name;

    $body = "You received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h3>Thank you, $name! Your message has been sent successfully.</h3>";
    } else {
        echo "<h3>Sorry, something went wrong. Please try again.</h3>";
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anushka Freight Carriers</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      
      rel="stylesheet"
    />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    <style>
      body {
        background-color: #0b0d10;
        color: #dfe6ee;
        font-family: "Poppins", sans-serif;
        scroll-behavior: smooth;
      }


      /* Navbar */
      nav.navbar {
        transition: all 0.4s ease;
        background: rgba(0, 0, 0, 0.6);
      }
      nav.scrolled {
        background: rgba(13, 110, 253, 0.9);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
      }
      nav .navbar-brand {
        font-weight: 700;
        color: #0d6efd;
      }
      nav.scrolled .navbar-brand {
        color: #fff !important;
      }
      nav .nav-link {
        color: #dfe6ee !important;
        margin: 0 8px;
        font-weight: 500;
      }
      nav.scrolled .nav-link {
        color: #fff !important;
      }

      /* Hero Section */
      .hero {
        background: url("Reliable Logistics.jpg") center/cover fixed no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        position: relative;
      }
      .hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
      }
      .hero .container {
        position: relative;
        z-index: 2;
      }
      .hero h1 {
        font-size: 3.2rem;
        font-weight: 700;
      }
      .hero p {
        font-size: 1.2rem;
        color: #d0d0d0;
      }

      /* Section styling */
      section {
        padding: 80px 0;
      }

      .about {
        background: #111417;
      }

      .service-box {
        background: #161a1e;
        border-radius: 10px;
        padding: 30px;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
      }
      .service-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(13, 110, 253, 0.3);
      }

      /* Parallax CTA */
      .cta {
        background: url("https://images.unsplash.com/photo-1604147498492-b86da3bba2cb?auto=format&fit=crop&w=1400&q=80")
          center/cover fixed no-repeat;
        text-align: center;
        color: white;
        position: relative;
      }
      .cta::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
      }
      .cta .container {
        position: relative;
        z-index: 2;
      }

      /* Contact */
      .contact input,
      .contact textarea {
        border-radius: 0;
        box-shadow: none;
        background: #1a1d20;
        color: white;
        border: 1px solid #333;
      }
      .contact input::placeholder,
      .contact textarea::placeholder {
        color: #aaa;
      }

      .contactNew {
        background-color: #fff;
        color: #000;
      }
      /* Footer */
      footer {
        background: #0d6efd;
        color: white;
        padding: 25px 0;
        text-align: center;
      }

      /* whats app and call */
      
     .floating-buttons {
  position: fixed;
  bottom: 100px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
  z-index: 1000;
}

.call-btn, .whatsapp-btn {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  text-align: center;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}


.call-btn {
  background-color: #0ec7c7;
  border: 2px solid #0ec7c7;
}


.whatsapp-btn {
  background-color: #25D366;
  border: none;
}


.call-btn:hover, .whatsapp-btn:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}


@media (max-width: 768px) {
  .floating-buttons {
    bottom: 100px;
    right: 10px;
    gap: 10px;
  }
  .call-btn, .whatsapp-btn {
    width: 50px;
    height: 50px;
  }
}
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container mt-2">
        <a class="navbar-brand position-absolute" href="#">
          <img
            src="logo-AC.png"
            alt="LogiMove Logo"
            class="pt-5 mt-5"
            height="250px"
            width="250px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feedback">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section
      id="home"
      class="hero d-flex flex-column justify-content-center align-items-center"
    >
      <div class="container">
        <h1>ANUSHKA FRIEGHT CARRIERS</h1>
        <p>
          We move your business forward — safely, efficiently, and globally.
        </p>
        <!-- <a href="#contact" class="btn btn-primary btn-lg mt-3">Call Us</a> -->
        <a href="tel:+91 7620747297" class="btn btn-primary btn-lg mt-3">Call Us
    </a>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="about text-center">
      <div class="container">
        <h2 class="mb-4 text-white">About Us</h2>
        <p class="lead text-secondary mx-auto" style="max-width: 800px">
          At <span class="text-primary">Anushka Freight Carriers</span>, we
          deliver trusted logistics solutions with safety and reliability at
          every step. Our mission is to ensure smooth, timely, and efficient
          movement of goods across all routes. With years of industry experience
          and a professional team, we keep your business moving forward with
          confidence.
        </p>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="text-center">
      <div class="container">
        <h2 class="mb-5 text-white">Our Services</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="service-box">
              <img
                src="logistic&transport.png"
                class="img-fluid mb-3 rounded"
                alt="Logistics & Transport"
              />
              <h4 class="text-primary">Logistics & Transport</h4>
              <p>
                Safe and reliable logistics services with advanced real-time GPS
                tracking for all your transportation needs.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <img
                src="freightManagement.png"
                class="img-fluid mb-3 rounded"
                alt="Freight Management"
              />
              <h4 class="text-primary">Freight Management</h4>
              <p>
                End-to-end freight solutions ensuring safe, timely, and
                damage-free delivery every time to your destination.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <img
                src="expressDelivery.png"
                class="img-fluid mb-3 rounded"
                alt="Express Delivery"
              />
              <h4 class="text-primary">Express Delivery</h4>
              <p>
                Fast, secure, and reliable express delivery ensuring your goods
                reach their destination safely and on time.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Parallax CTA -->
    <section class="cta">
      <div class="container">
        <h2 class="mb-3">We Deliver More Than Just Goods</h2>
        <p class="lead">
          Trust, technology, and time — that’s what drives us forward.
        </p>
        <a href="#contact" class="btn btn-light btn-lg mt-3">Contact Us</a>
      </div>
    </section>

    <!-- Contact -->
    <section id="feedback" class="contact text-center">
      <div class="container">
        <h2 class="mb-4 text-white">Get in Touch</h2>
        <p class="mb-5 text-secondary">
          Have a logistics challenge? Let’s discuss how we can simplify it for
          you.
        </p>
        <form class="row g-3 justify-content-center">
          <div class="col-md-4">
            <input
              type="text"
              name="name"
              class="form-control"
              placeholder="Your Name"
              required
            />
          </div>
          <div class="col-md-4">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
              required
            />
          </div>
          <div class="col-md-8">
            <textarea
              class="form-control"
              name="message"
              rows="4"
              placeholder="Your Message"
              required
            ></textarea>
          </div>
          <div class="col-12">
            <button class="btn btn-primary btn-lg" type="submit">
              <a href="mailto:anushkafrightcarriers@gmail.com" class="text-decoration-none text-white">Send Message</a>
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- CONTACT NEW-->
<section id="contact" class="contactNew text-center py-5 bg-light">
 <div class="container">
    <h2 class="mb-5 text-center text-black fw-bold">Contact Us</h2>

    <div class="row justify-content-center">
      <!-- Address Section -->
      <div class="col-md-4 col-11 bg-white p-4 rounded shadow-sm mb-4 mb-md-0 text-center text-md-center">
        <h5 class="fw-semibold mb-3 text-primary">Our Location</h5>
        <p class="mb-1">Mahaveer Potteries Compound</p>
        <p class="mb-1">Nagpur Road,</p>
        <p class="mb-0">PO. Padoli CHANDRAPUR - 442406</p>
      </div>

      <!-- Divider Line (visible on desktop only) -->
      <div class="col-md-1 d-none d-md-flex align-items-center justify-content-center">
        <div style="width: 1px; height: 100px; background-color: #ccc;"></div>
      </div>

      <!-- Contact Section -->
      <div class="col-md-4 col-11 bg-white p-3 rounded shadow-sm text-center text-md-center">
        <h5 class="fw-semibold mb-3 text-primary">Contact Details</h5>
        <div class="d-flex justify-content-center align-items-center gap-4">
        <p class="mb-0">
          <i class="bi bi-telephone-fill text-success me-2"></i>
          <a href="#" class="text-decoration-none text-dark">+91 7620747297</a>
        </p>
        <label>|</label>
        <p class="mb-0">
          <i class="bi bi-envelope-fill text-success me-2"></i>
          <a href="#" class="text-decoration-none text-dark">+91 8999775637</a>
        </p>
        </div><br>
        <h5 class="fw-semibold mb-3 text-primary">Email </h5>
        <p class="mb-0">
          <i class="bi bi-telephone-fill text-success me-2"></i>
          <a href="#" class="text-decoration-none text-dark">anushkafrightcarriers@gmail.com</a>
        </p>
      </div>
      
        
      
    </div>
  </div>

  <!-- Floating Buttons -->
  <div class="floating-buttons">
    <!-- Call Button -->
    <a 
      href="tel:+91 7620747297" 
      class="btn btn-light shadow-lg d-flex align-items-center justify-content-center call-btn"
      aria-label="Call Now">
      <img src="call.png" alt="Call Icon" class="img-fluid" style="width: 28px;">
    </a>

    <!-- WhatsApp Button -->
    <a 
      href="https://wa.me/918999775637?text=Hello!%20I%20want%20to%20know%20more%20about%20your%20services." 
      target="_blank" 
      class="btn btn-success shadow-lg d-flex align-items-center justify-content-center whatsapp-btn"
      aria-label="Chat on WhatsApp">
      <img src="WhatsApp.svg.webp" alt="WhatsApp Icon" class="img-fluid" style="width: 28px;">
    </a>
  </div>
</section>

    <!-- Footer -->
    <footer>
      <p>© 2025 <a href="https://softgrowthinfotech.com/" class="text-white text-decoration-none">Softgrowth Infotech.</a> All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
      
    </script>
    <script>
      // Sticky Header Animation
      window.addEventListener("scroll", function () {
        const nav = document.querySelector("nav");
        nav.classList.toggle("scrolled", window.scrollY > 50);
      });
    </script>
  </body>
</html>
