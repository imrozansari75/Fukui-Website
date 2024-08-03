const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

  toggle.addEventListener('click', () => {
    // Add show-menu class to nav menu
    nav.classList.toggle('show-menu')

    // Add show-icon to show and hide the menu icon
    toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle', 'nav-menu')

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