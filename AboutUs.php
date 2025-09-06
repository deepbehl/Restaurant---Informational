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
        <h1>About Us</h1>
        <p><span>HOME</span> / <span>PAGES</span> / <strong>ABOUT</strong></p>
      </section>

      <section class="about" id="about">
        <div class="about-container">
          <div class="about-images">
            <img src="restaurant3.webp" class="about-img1" alt="Restaurant">
            <img src="restaurant4.webp" class="about-img2" alt="Restaurant">
            <img src="restaurant2.jpg" class="about-img3" alt="Restaurant">
            <img src="restaurant1.jpg" class="about-img4" alt="Restaurant">
          </div>
          <div class="about-content">
            <h5>About Us</h5>
            <h2>Welcome to <span>🍴</span>Restoran</h2>
            <p>Welcome to Restoran, where every meal tells a story and every bite is a celebration of flavor. Our restaurant is a blend of passion, tradition, and innovation, offering an unforgettable dining experience for all our guests. Whether you're here for a casual meal, a family celebration, or a special evening out, Restoran promises a delightful escape from the ordinary.</p>

<h2>Our Story</h2>
<p>At Restoran, we believe in the art of cooking and the joy of sharing a good meal. Founded with the vision of creating a place where delicious food meets exceptional service, our restaurant has become a beloved spot for food lovers who seek quality, taste, and a warm, welcoming atmosphere. From our first day of service, we've been committed to using only the finest, locally sourced ingredients to create dishes that not only satisfy your hunger but also excite your senses.</p>

<h2>Our Commitment to Quality</h2>
<p>At Restoran, quality is at the heart of everything we do. From our handpicked ingredients to our carefully crafted dishes, we ensure that every aspect of your dining experience is perfect. Our chefs bring their expertise and passion to the kitchen, using the finest produce and the most innovative cooking techniques to create meals that are both nourishing and indulgent.</p>

<h2>More Than Just a Restaurant</h2>
<p>Restoran is more than just a place to eat—it's a community. We’re dedicated to providing an environment where families, friends, and colleagues can gather and enjoy each other's company in a relaxed yet elegant setting. Whether you're dining in with us or enjoying a meal at home through our fast and reliable online delivery service, we guarantee that each experience will be memorable.</p>

<h2>Join Us Today</h2>
<p>We invite you to explore our diverse menu, savor our exclusive dishes, and experience the warm hospitality that makes Restoran a unique culinary destination. With 24/7 service, fast delivery, and constant special offers, we’re here to make every dining experience with us extraordinary. Come for the food, stay for the memories—at Restoran, we look forward to serving you soon!</p>
      
            <div class="about-stats">
              <div>
                <h3><span id="experience">0</span></h3>
                <p>Years of <strong>Experience</strong></p>
              </div>
              <div>
                <h3><span id="chefs">0</span></h3>
                <p>Popular <strong>Master Chefs</strong></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="script.js"></script>


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