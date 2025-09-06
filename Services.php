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
        <h1>Services</h1>
        <p><span>HOME</span> / <span>PAGES</span> / <strong>SERVICE</strong></p>
      </section>

      <script src="script.js"></script>

      <section class="services" id="services">
        <h3 class="subtitle">Our Services</h3>
        <h2 class="title">Explore Our Services</h2>

        <div class="container">
          <div class="service-box">
            <div class="icon">👨‍🍳</div>
            <h3>Master Chefs</h3>
            <p>Our expert chefs craft delicious meals with passion and precision, ensuring every dish is a masterpiece.</p>
          </div>
          <div class="service-box">
            <div class="icon">🍴</div>
            <h3>Quality Food</h3>
            <p>We use the finest ingredients to deliver food that’s fresh, flavorful, and prepared with care.</p>
          </div>
          <div class="service-box">
            <div class="icon">🛒</div>
            <h3>Online Order</h3>
            <p>Enjoy the convenience of ordering your favorite dishes online, delivered right to your doorstep.</p>
          </div>
          <div class="service-box">
            <div class="icon">🎧</div>
            <h3>24/7 Service</h3>
            <p>Satisfy your cravings anytime with our round-the-clock service, available whenever you need us.</p>
          </div>
          <div class="service-box">
            <div class="icon">👨‍🍳</div>
            <h3>Exclusive Menu</h3>
            <p>Savor a diverse selection of dishes, carefully curated to cater to all tastes and preferences.</p>
          </div>
          <div class="service-box">
            <div class="icon">🍴</div>
            <h3>Family Friendly</h3>
            <p>A welcoming atmosphere for all ages, making it the perfect spot for family meals and celebrations.</p>
          </div>
          <div class="service-box">
            <div class="icon">🛒</div>
            <h3>Fast Delivery</h3>
            <p>Experience swift and reliable delivery services, ensuring your food arrives hot and fresh in no time.</p>
          </div>
          <div class="service-box">
            <div class="icon">🎧</div>
            <h3>Special Offers</h3>
            <p>Enjoy great deals and exclusive discounts, making your dining experience even more enjoyable.</p>
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