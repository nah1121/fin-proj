let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slideIndex++;
  
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  
  if (slides.length > 0) {
    slides[slideIndex-1].style.display = "block";  
  }
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

document.addEventListener("DOMContentLoaded", function() {
    // Get a reference to the checkbox
    const checkbox = document.querySelector('.switch__input');

    // Retrieve the stored state from Local Storage
    const darkModeEnabled = localStorage.getItem('darkModeEnabled');

    // Set the initial state of the checkbox based on the stored value
    if (darkModeEnabled === 'true') {
        checkbox.checked = true;
    } else {
        checkbox.checked = false;
    }

    // Add an event listener to listen for changes to the checkbox state
    checkbox.addEventListener('change', function() {
        // Store the state in Local Storage
        localStorage.setItem('darkModeEnabled', this.checked);
    });
});

