const overlay = document.getElementById('overlay');
const showOverlayBtn = document.getElementById('showOverlayBtn');
const closeOverlayBtn = document.getElementById('closeOverlayBtn');

// Show the overlay when the "Show Overlay" button is clicked
showOverlayBtn.addEventListener('click', function() {
    overlay.classList.remove('hidden'); // Remove the 'hidden' class to show the overlay
});

// Close the overlay when the "Close Overlay" button is clicked
closeOverlayBtn.addEventListener('click', function() {
    overlay.classList.add('hidden'); // Add the 'hidden' class to hide the overlay
});