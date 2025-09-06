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
        <h1>Booking</h1>
        <p><span>HOME</span> / <span>PAGES</span> / <strong>BOOKING</strong></p>
      </section>

      <script src="script.js"></script>

      <!-- Book a Table Section -->
<section class="book-table-section">
  <div class="containers">
    
    <!-- Left: Video -->
    <div class="video-box">
      <video autoplay muted loop width="100%" controls>
        <source src="restaurant.mp4" type="video/mp4">
      </video>
    </div>

    <!-- Right: Booking Form -->
    <div class="form-box">
      <h2>Book Your Table Online</h2>
      <form action="" method="post" enctype="multipart/form-data">

        <input type="text" placeholder="Your Name" name="name" required>

        <input type="email" placeholder="Your Email" name="email" required>

        <input type="datetime-local" placeholder="Enter Date & Time" name="datetime" required>

        <select name="people" required>
          <option value="" disabled selected>No. Of People</option>
          <option value="1">People 1</option>
          <option value="2">People 2</option>
          <option value="3">People 3</option>
          <option value="4">More than 3</option>
        </select>

        <textarea placeholder="Special Request" name="request"></textarea>

        <input type="submit" id="submitbtn" name="submit" value="BOOK NOW"/>
      </form>
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


<?php
if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $datetime = $_POST['datetime'];
        $people=$_POST['people'];
        $request=$_POST['request'];

        $con = mysqli_connect("localhost", "root", "", "table_booking");
        $qry = "insert into tablebooking (c_name, c_email, c_datetime, no_of_people, c_request) values('$name','$email','$datetime','$people','$request')";
        $b = mysqli_query($con, $qry);

        if($b){
          echo "<script>alert('Your table has been booked!!');</script>";
        }
}
?>