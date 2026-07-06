// script.js - Handle dynamic navigation loading and code copy features
document.addEventListener("DOMContentLoaded", function () {
  // 1. Fetch and inject nav.html
  const navPlaceholder = document.getElementById("nav-placeholder");
  if (navPlaceholder) {
    const basePath = navPlaceholder.getAttribute("data-base") || "./";

    fetch(basePath + "nav.html")
      .then((response) => {
        if (!response.ok) throw new Error("Could not load nav.html");
        return response.text();
      })
      .then((data) => {
        // Replace placeholder {{BASE}} with actual relative path
        const navHTML = data.replace(/{{BASE}}/g, basePath);
        navPlaceholder.innerHTML = navHTML;

        // Highlight active link in dropdown
        const currentPath = window.location.pathname;
        const navLinks = navPlaceholder.querySelectorAll("a.dropdown-item, a.nav-link");
        navLinks.forEach((link) => {
          const href = link.getAttribute("href");
          if (href && (currentPath.endsWith(href.replace("../../", "").replace("./", "")) || (currentPath.includes("what-is-oop") && href.includes("what-is-oop")))) {
            link.classList.add("active", "fw-bold", "bg-primary");
          }
        });
      })
      .catch((err) => console.error("Navigation load error:", err));
  }
});

// Helper function to copy code to clipboard
function copyCode(button, codeId) {
  const codeBlock = document.getElementById(codeId);
  if (!codeBlock) return;

  const textToCopy = codeBlock.innerText || codeBlock.textContent;
  navigator.clipboard.writeText(textToCopy).then(() => {
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fa-solid fa-check text-success me-1"></i> Copied!';
    button.classList.add("border-success");
    setTimeout(() => {
      button.innerHTML = originalText;
      button.classList.remove("border-success");
    }, 2000);
  });
}
