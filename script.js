const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  toggle.addEventListener('click', () => {
    nav.classList.toggle('show-menu');
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

showMenu('nav-toggle', 'nav-menu');
showDropdown('services-toggle', 'services-menu');


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
  truncateText('#hrm-text', 250);
  truncateText('#admin-text', 200);
  truncateText('#it-text', 300);
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
