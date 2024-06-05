document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this); // Get form data

    fetch(this.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (response.ok) {
          // Display success message
          document.querySelector(".sent-message").style.display = "block";
          // Optionally reset the form
          this.reset();
        } else {
          // Display error message
          document.querySelector(".error-message").style.display = "block";
        }
      })
      .catch((error) => {
        // Display error message
        document.querySelector(".error-message").style.display = "block";
      });
  });
