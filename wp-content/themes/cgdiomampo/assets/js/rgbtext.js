function hslToRgb(h, s, l) {
  let r, g, b;
  if (s === 0) {
    r = g = b = l;
  } else {
    const hue2rgb = (p, q, t) => {
      if (t < 0) t += 1;
      if (t > 1) t -= 1;
      if (t < 1 / 6) return p + (q - p) * 6 * t;
      if (t < 1 / 2) return q;
      if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
      return p;
    };
    const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
    const p = 2 * l - q;
    r = hue2rgb(p, q, h + 1 / 3);
    g = hue2rgb(p, q, h);
    b = hue2rgb(p, q, h - 1 / 3);
  }
  return [Math.round(r * 255), Math.round(g * 255), Math.round(b * 255)];
}

function prepareRainbowText(element) {
  const characters = element.innerText.split("");
  element.innerHTML = characters.map((char) => `<span>${char}</span>`).join("");
  return element.querySelectorAll("span");
}

const rainbowElements = document.querySelectorAll(".rainbow-text");
const allSpans = Array.from(rainbowElements).map(prepareRainbowText);

function animate() {
  const time = Date.now() * 0.0002; // Controls overall speed
  allSpans.forEach((spans, elementIndex) => {
    spans.forEach((span, charIndex) => {
      const hue = (time + elementIndex * 0.1 + charIndex * 0.01) % 1; // Controls the spread of the rainbow
      const [r, g, b] = hslToRgb(hue, 1, 0.5);
      span.style.color = `rgb(${r},${g},${b})`;
    });
  });
  requestAnimationFrame(animate);
}

animate();
