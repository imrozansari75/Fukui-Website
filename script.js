const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        burgerIcon = toggle.querySelector('.ri-menu-fill'),
        closeIcon = toggle.querySelector('.ri-close-line');

  toggle.addEventListener('click', () => {
    nav.classList.toggle('show-menu');

    // Toggle between the burger and close icon
    burgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });

  // Add event listener to close menu when clicking on other nav links
  const navLinks = nav.querySelectorAll('a:not(#services-toggle)');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('show-menu');
      burgerIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    });
  });
};

const showDropdown = (toggleId, menuId) => {
  const toggle = document.getElementById(toggleId),
        menu = document.getElementById(menuId);

  toggle.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default link behavior
    menu.classList.toggle('show-dropdown');
  });
};

// Initialize the menu toggle functionality
showMenu('nav-toggle', 'nav-menu');
showDropdown('services-toggle', 'services-menu');

// Optional: Close the menu when clicking outside of it
document.addEventListener('click', (event) => {
  const navMenu = document.getElementById('nav-menu');
  const navToggle = document.getElementById('nav-toggle');
  const servicesMenu = document.getElementById('services-menu');
  
  if (!navMenu.contains(event.target) && !navToggle.contains(event.target) && !servicesMenu.contains(event.target)) {
    navMenu.classList.remove('show-menu');
    document.querySelector('.ri-menu-fill').classList.remove('hidden');
    document.querySelector('.ri-close-line').classList.add('hidden');
  }
});



// JavaScript to handle truncation
document.addEventListener("DOMContentLoaded", function () {
  const truncateText = (selector, maxLength) => {
      const elements = document.querySelectorAll(selector);
      elements.forEach(element => {
          const originalText = element.textContent;
          if (originalText.length > maxLength) {
              const truncatedText = originalText.substring(0, maxLength) + '...';
              element.textContent = truncatedText;
          }
      });
  };

  truncateText('#accounting-text', 200);
  truncateText('#hrm-text', 200);
  truncateText('#admin-text', 200);
  truncateText('#it-text', 200);
  truncateText('#compliance-text', 200);
  truncateText('#scm-text', 200);
});


function toggleCard(card) {
  const content = card.nextElementSibling;
  content.classList.toggle('show');
}
function sendEmail() {
  window.location.href = "mailto:talent@texbrex.com";
}