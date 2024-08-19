// portfoliojs.js

(function () {
  "use strict";

  function createBrowserFrame(content) {
    return `
            <div class="border border-gray-300 rounded-lg shadow-lg">
                <div class="bg-gray-100 p-2 rounded-t-lg flex items-center space-x-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                
                    ${content}
                
            </div>
        `;
  }

  function createPortfolioItem(item) {
    const itemContent = `
            <div class="space-y-4">
                ${
                  item.image
                    ? `<img src="${item.image}" alt="${item.title}" class="w-full h-48 object-cover">`
                    : ""
                }
                <div class="p-4">
                    <h2 class="text-2xl font-semibold">${item.title}</h2>
                    <p class="text-gray-600">${item.description}</p>
                    <a href="${
                      item.url
                    }" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        View Project →
                    </a>
                </div>
            </div>
        `;
    return createBrowserFrame(itemContent);
  }

  function renderPortfolio() {
    const portfolioContainer = document.getElementById("portfoliojs");
    if (!portfolioContainer) return;

    // Check if portfolioData is available (passed from WordPress)
    if (typeof portfolioData === "undefined") {
      console.error("Portfolio data not found");
      return;
    }

    const portfolioHTML = `
            <div class="container mx-auto p-6 max-w-6xl mx-auto">
                <h1 class="text-3xl font-bold text-center mb-12 text-gray-900">Projects</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    ${portfolioData.map(createPortfolioItem).join("")}
                </div>
            </div>
        `;

    portfolioContainer.innerHTML = portfolioHTML;
  }

  // Render the portfolio when the DOM is fully loaded
  document.addEventListener("DOMContentLoaded", renderPortfolio);
})();
