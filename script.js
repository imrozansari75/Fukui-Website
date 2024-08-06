// Function to toggle the menu visibility
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  toggle.addEventListener('click', () => {
    nav.classList.toggle('show-menu');
  });
};

const hideMenuOnLinkClick = (navId) => {
  const nav = document.getElementById(navId),
        links = nav.querySelectorAll('a');

  links.forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('show-menu'); 
    });
  });
};


showMenu('nav-toggle', 'nav-menu');
hideMenuOnLinkClick('nav-menu');


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