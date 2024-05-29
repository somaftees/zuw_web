// JavaScript
var images = ['image/phtoes/ثناء/IMG-20231228-WA0013.jpg', 'image/phtoes/ثناء/ship.jpg','image/zu.jpg']; // List of images
var index = 0;

function showSlide(index) {
    var img = document.getElementById('slide');
    img.src = images[index];
}

function slideShow() {
    showSlide(index);
    index = (index + 1) % images.length;
    setTimeout(slideShow, 10); // Change slide every 2 seconds
}

window.onload = slideShow; // Start the slideshow when the window loads

// HTML

