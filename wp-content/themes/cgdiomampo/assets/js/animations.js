// Create this as floating-snippets.js in your theme's js folder
document.addEventListener("DOMContentLoaded", function () {
  const snippets = [
    "const add = (a, b) => a + b;",
    "let x = Math.random();",
    "function hello() { console.log('Hello!'); }",
    "for (let i = 0; i < 10; i++) { }",
    "if (condition) { /* do something */ }",
  ];

  const container = document.getElementById("floating-snippets-container");
  if (!container) return;

  container.style.position = "relative";
  container.style.width = "100%";
  container.style.height = "300px"; // Adjust as needed
  container.style.overflow = "hidden";
  container.style.backgroundColor = "#1a202c"; // Dark background

  snippets.forEach((snippet, index) => {
    const snippetElement = document.createElement("div");
    snippetElement.textContent = snippet;
    snippetElement.style.position = "absolute";
    snippetElement.style.color = "#48bb78"; // Green text
    snippetElement.style.fontFamily = "monospace";
    snippetElement.style.fontSize = "14px";
    snippetElement.style.whiteSpace = "nowrap";
    snippetElement.style.top = `${(index / snippets.length) * 100}%`;
    snippetElement.style.left = "100%";
    snippetElement.style.animation = `floatSnippet 20s linear infinite`;
    snippetElement.style.animationDelay = `${index * -4}s`;

    container.appendChild(snippetElement);
  });

  const style = document.createElement("style");
  style.textContent = `
      @keyframes floatSnippet {
        from { transform: translateX(0); }
        to { transform: translateX(-200%); }
      }
    `;
  document.head.appendChild(style);
});

function createFloatingSnippets() {
  const container = document.getElementById("animation-container");
  const snippets = [
    "if (condition) {",
    "    doSomething();",
    "}",
    "for (let i = 0; i < 10; i++) {",
    "    console.log(i);",
    "}",
    "function calculate(a, b) {",
    "    return a + b;",
    "}",
  ];

  function createSnippet() {
    const snippet = document.createElement("div");
    snippet.textContent = snippets[Math.floor(Math.random() * snippets.length)];
    snippet.style.position = "absolute";
    snippet.style.left = `${Math.random() * 100}%`;
    snippet.style.top = "-50px";
    snippet.style.opacity = "0";
    snippet.style.transition = "all 10s linear";
    container.appendChild(snippet);

    setTimeout(() => {
      snippet.style.top = "110%";
      snippet.style.opacity = "1";
    }, 100);

    setTimeout(() => {
      container.removeChild(snippet);
    }, 10000);
  }

  setInterval(createSnippet, 1000);
}

createFloatingSnippets();
