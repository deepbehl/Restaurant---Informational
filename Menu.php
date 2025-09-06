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
        <h1>Food Menu</h1>
        <p><span>HOME</span> / <span>PAGES</span> / <strong>MENU</strong></p>
      </section>


      <section id="menu" class="menu-section">
        <h2 class="section-title">🍽️ Food Menu</h2>
        <h1 class="section-heading">Most Popular Items</h1>
      
        <!-- Menu Filter Buttons -->
        <!-- Tabs -->
  <div class="menu-tabs">
  <button class="tab-btn" onclick="filterMenu('breakfast')">☕ Popular Breakfast</button>
  <button class="tab-btn" onclick="filterMenu('lunch')">🍔 Special Lunch</button>
  <button class="tab-btn" onclick="filterMenu('dinner')">🍴 Lovely Dinner</button>
</div>

<!-- Menu Items -->
<div class="menu-items">
  <!-- Breakfast Items -->
  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Egg Sandwich</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Nutella Pancakes</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Egg with Toast</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Omelette</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Cheese Wrap</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Coffee/Tea</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>Belgian Waffles</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <div class="menu-item" data-category="breakfast">
    <img src="breakfast.jpg" alt="Breakfast">
    <div class="menu-info">
      <h4>French Toast</h4>
      <p>Delicious and healthy breakfast option</p>
    </div>
    <div class="menu-price">$50</div>
  </div>

  <!-- Lunch Items -->
  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Grilled Chicken</h4>
      <p>Tender grilled chicken served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Mushroom Risotto</h4>
      <p>Tender Mushroom Risotto served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Hummus Platter</h4>
      <p>Tender Hummus Platter served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Mushroom Burger</h4>
      <p>Tender Mushroom Burger served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Pepperoni Pizza</h4>
      <p>Tender Pepperoni Pizza served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Vegetable Soup</h4>
      <p>Tender Vegetable Soup served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Grilled Steak</h4>
      <p>Tender grilled steak served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <div class="menu-item" data-category="lunch">
    <img src="lunch.jpg" alt="Lunch">
    <div class="menu-info">
      <h4>Pink Sauce Pasta</h4>
      <p>Tender Pink Pasta served hot</p>
    </div>
    <div class="menu-price">$120</div>
  </div>

  <!-- Dinner Items -->
  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Lentil Soup with Garlic Bread</h4>
      <p>Warm lentil soup served with toasted garlic bread</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Butter Garlic Prawns</h4>
      <p>Juicy prawns sautéed in butter, garlic, and herbs</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Pasta Alfredo</h4>
      <p>Classic creamy dinner pasta</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Stuffed Bell Peppers</h4>
      <p>Bell peppers filled with a mix of rice, vegetables, and cheese</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Chicken Tikka Wrap</h4>
      <p>grilled chicken wrapped in a soft roti with onions and chutney</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Paneer Butter Masala with Naan</h4>
      <p>Creamy curry with soft paneer, served with butter naan</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Grilled Chicken with Steamed Vegetables</h4>
      <p>seasoned chicken breast served with veggies</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <div class="menu-item" data-category="dinner">
    <img src="dinner.jpg" alt="Dinner">
    <div class="menu-info">
      <h4>Spaghetti Aglio e Olio</h4>
      <p>Italian pasta tossed with garlic, olive oil, chili flakes, and parsley</p>
    </div>
    <div class="menu-price">$100</div>
  </div>

  <!-- Add more items with correct data-category -->
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