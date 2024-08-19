document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contact-form");
  const formMessages = document.getElementById("form-messages");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          formMessages.innerHTML =
            '<div class="p-4 text-green-700 bg-green-100 rounded-md">Your message has been sent successfully!</div>';
          form.reset();
        } else {
          formMessages.innerHTML =
            '<div class="p-4 text-red-700 bg-red-100 rounded-md">There was an error sending your message. Please try again.</div>';
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        formMessages.innerHTML =
          '<div class="p-4 text-red-700 bg-red-100 rounded-md">There was an error sending your message. Please try again.</div>';
      });
  });
});
