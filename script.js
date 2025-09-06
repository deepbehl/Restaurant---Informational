// Change navbar background on scroll
window.addEventListener("scroll", function () {
    const header = document.getElementById("navbar");
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });

  // countdown timer in about section

  let counted = false; // To make sure it runs only once

function startCount(id, finalNumber) {
  let current = 0;
  let element = document.getElementById(id);

  let counter = setInterval(() => {
    current++;
    element.innerText = current;

    if (current >= finalNumber) {
      clearInterval(counter);
    }
  }, 110); // Change speed by changing 100ms
}

window.addEventListener("scroll", function () {
  let aboutSection = document.getElementById("about"); // Replace with your real section id
  let sectionTop = aboutSection.getBoundingClientRect().top;
  let screenHeight = window.innerHeight;

  if (sectionTop < screenHeight && !counted) {
    counted = true;
    startCount("experience", 15);
    startCount("chefs", 50);
  }
});

//menu tab buttons---->

function filterMenu(category) {
  // Step 1: Get all menu items
  const items = document.querySelectorAll('.menu-item');

  // Step 2: Loop through each item
  items.forEach(function(item) {
    // If the item's data-category matches the selected category
    if (item.getAttribute('data-category') === category) {
      item.style.display = 'flex'; // show it
    } else {
      item.style.display = 'none'; // hide it
    }
  });

  // Step 3: Update active tab button style
  const buttons = document.querySelectorAll('.tab-btn');
  buttons.forEach(function(btn) {
    btn.classList.remove('active'); // remove active from all
  });

  // Step 4: Add active class to the clicked button
  event.target.classList.add('active');
}

  