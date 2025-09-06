<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Landing</title>
    <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    
    <header id="navbar">
        <div class="logo">🍴 Restoran</div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="AboutUs.php">About</a></li>
            <li><a href="Services.php">Service</a></li>
            <li><a href="Menu.php">Menu</a></li>
            <li class="dropdown">
        <select onchange="window.location.href=this.value;">
          <option selected disabled>Pages</option>
          <option value="team.php">Our Team</option>
          <option value="booking.php">Booking</option>
          
        </select>
      </li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="booking.php" class="btn">Book a Table</a></li>
          </ul>
        </nav>
      </header>
    <section class="page-header">
        <h1>Our Team</h1>
        <p><span>HOME</span> / <span>PAGES</span> / <strong>OUR TEAM</strong></p>
      </section>

      <script src="script.js"></script>

      <!-- Team Members Section -->
<section class="team-section">
  <h3 class="subtitle">Team Members</h3>
  <h2 class="title">Our Master Chefs</h2>

  <div class="team-container">
    
    <!-- Chef Card -->
    <div class="team-card">
      <div class="img-box">
        <img src="chef1.jpg" alt="Chef 1">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Arjun Patel </h4>
      <p>Head Master Chef</p>
    </div>

    <!-- Repeat for other chefs -->
    <div class="team-card">
      <div class="img-box">
        <img src="chef2.jpg" alt="Chef 2">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Priya Verma</h4>
      <p>Executive Chef</p>
    </div>

    <div class="team-card">
      <div class="img-box">
        <img src="chef3.jpg" alt="Chef 3">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Rajesh Kumar</h4>
      <p>Sous Chef</p>
    </div>

    <div class="team-card">
      <div class="img-box">
        <img src="chef4.jpg" alt="Chef 4">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Anjali Desai </h4>
      <p>Pastry Chef</p>
    </div>

    <div class="team-card">
      <div class="img-box">
        <img src="chef1.jpg" alt="Chef 1">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Vikas Sharma</h4>
      <p>Grill Specialist</p>
    </div>

    <!-- Repeat for other chefs -->
    <div class="team-card">
      <div class="img-box">
        <img src="chef2.jpg" alt="Chef 2">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Neha Agarwal</h4>
      <p>Vegetarian Cuisine Specialist</p>
    </div>

    <div class="team-card">
      <div class="img-box">
        <img src="chef3.jpg" alt="Chef 3">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Sanjay Mehta</h4>
      <p>Seafood Specialist</p>
    </div>

    <div class="team-card">
      <div class="img-box">
        <img src="chef4.jpg" alt="Chef 4">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <h4>Chef Ayesha Khan</h4>
      <p>Sous Pastry Chef</p>
    </div>

  </div>
</section>



<!-- Footer Section -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-box">
      <h3>Company</h3>
      <ul>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="booking.php">Reservation</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Condition</a></li>
      </ul>
    </div>

    <div class="footer-box">
      <h3>Contact</h3>
      <p><i class="fas fa-map-marker-alt"></i> 123 Street, New York, USA</p>
      <p><i class="fas fa-phone-alt"></i> +012 345 67890</p>
      <p><i class="fas fa-envelope"></i> info@restoran.com</p>
      <div class="footer-icons">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <div class="footer-box">
      <h3>Opening</h3>
      <p>Monday - Saturday<br>09AM - 09PM</p>
      <p>Sunday<br>10AM - 08PM</p>
    </div>

    <div class="footer-box">
      <h3>Newsletter</h3>
      <p>Stay updated with our latest offers, new dishes, and exciting events—subscribe to our newsletter today!</p>
      <form>
        <input type="email" placeholder="Your email" required>
        <input type="submit" value="SIGNUP"/>
      </form>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© Your Site Name, All Right Reserved. Designed By <a href="#">HTML & CSS</a></p>
    <p>Distributed By <a href="#">YourSite</a></p>
  </div>
</footer>

</body>
</html>