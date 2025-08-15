
// Helper function for showing error alerts
function showError(field, message) {
  field.style.border = "2px solid red";
  alert(message);
  field.focus();
}

// Name validation on blur
document.getElementById("firstName").addEventListener("blur", function() {
  if (this.value.trim() === "") {
    showError(this, "First name cannot be empty.");
  } else {
    this.style.border = "";
  }
});

document.getElementById("lastName").addEventListener("blur", function() {
  if (this.value.trim() === "") {
    showError(this, "Last name cannot be empty.");
  } else {
    this.style.border = "";
  }
});

// Adult count validation on change
document.getElementById("adult").addEventListener("change", function() {
  if (this.value < 1 || isNaN(this.value)) {
    showError(this, "There must be at least 1 adult.");
  } else {
    this.style.border = "";
  }
});

// Child count validation on change
document.getElementById("child").addEventListener("change", function() {
  if (this.value < 0 || isNaN(this.value)) {
    showError(this, "Children count cannot be negative.");
  } else {
    this.style.border = "";
  }
});

// Email validation on input
document.getElementById("email").addEventListener("input", function() {
  let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!pattern.test(this.value)) {
    this.style.border = "2px solid red";
  } else {
    this.style.border = "";
  }
});

// Date validation on blur
document.getElementById("departure").addEventListener("blur", function() {
  if (this.value === "") {
    showError(this, "Please select a date.");
  } else {
    this.style.border = "";
  }
});

// Destination validation on blur
document.getElementById("destination").addEventListener("blur", function() {
  if (this.value.trim() === "") {
    showError(this, "Destination cannot be empty.");
  } else {
    this.style.border = "";
  }
});

// Message validation on input
document.getElementById("message").addEventListener("input", function() {
  if (this.value.trim().length < 5) {
    this.style.border = "2px solid red";
  } else {
    this.style.border = "";
  }
});

// Final form submit check
document.getElementById("bookingForm").addEventListener("submit", function(e) {
  let requiredFields = ["firstName", "lastName", "adult", "child", "email", "date", "destination", "message"];
  for (let id of requiredFields) {
    let field = document.getElementById(id);
    if (field.value.trim() === "") {
      e.preventDefault();
      showError(field, "Please fill in all fields before submitting.");
      return;
    }
  }
});

