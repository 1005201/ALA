/*
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
*/

function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// carousel

// Initialize Variables and Select DOM Elements
let index = 0; // Keeps track of the current active image index in the carousel
const images = document.querySelectorAll('#carousel img'); // All image elements within the carousel
const thumbnails = document.querySelectorAll('#thumbnails img'); // All thumbnail elements
const prevArrow = document.getElementById('prev-arrow'); // Previous arrow element
const nextArrow = document.getElementById('next-arrow'); // Next arrow element
const prevThumbnailArrow = document.getElementById('prev-thumbnail-arrow'); // Previous thumbnail arrow element
const nextThumbnailArrow = document.getElementById('next-thumbnail-arrow'); // Next thumbnail arrow element
const thumbnailsContainer = document.getElementById('thumbnails'); // Container for thumbnails

// Define the carousel function
function carousel() {
    // Remove 'active' class from all images and thumbnails
    for (let i = 0; i < images.length; i++) {
        images[i].classList.remove('active');
        thumbnails[i].classList.remove('active');
    }

    // Handle boundary conditions for index
    if (index < 0) {
        index = images.length - 1; // Loop to the last image
    } else if (index >= images.length) {
        index = 0; // Loop to the first image
    }

    // Add 'active' class to current image and thumbnail
    images[index].classList.add('active');
    thumbnails[index].classList.add('active');

    // Calculate scroll offset to center active thumbnail within the thumbnails container
    const activeThumbnail = thumbnailsContainer.querySelector('.active');
    const containerWidth = thumbnailsContainer.offsetWidth;
    const thumbnailsWidth = thumbnailsContainer.scrollWidth;
    const activeThumbnailWidth = activeThumbnail.offsetWidth;
    const activeThumbnailOffset = activeThumbnail.offsetLeft;
    let scrollOffset = activeThumbnailOffset - (containerWidth / 2) + (activeThumbnailWidth / 2);

    // Limit scroll offset to prevent going beyond container boundaries
    const maxScrollOffset = thumbnailsWidth - containerWidth;
    scrollOffset = Math.max(0, Math.min(maxScrollOffset, scrollOffset));

    // Scroll thumbnails container to the calculated offset with smooth behavior
    thumbnailsContainer.scrollTo({ left: scrollOffset, behavior: 'smooth' });
}

// Define the function for going to the previous slide
function prevSlide() {
    index--;
    if (index < 0) {
        index = images.length - 1; // Loop to the last image
    }
    carousel(); // Update the carousel with the new active image and thumbnail
}

// Define the function for going to the next slide
function nextSlide() {
    index++;
    if (index >= images.length) {
        index = 0; // Loop to the first image
    }
    carousel(); // Update the carousel with the new active image and thumbnail
}

// Add event listeners to previous and next arrows for slide navigation
prevArrow.addEventListener('click', prevSlide);
nextArrow.addEventListener('click', nextSlide);

// Add event listener to previous thumbnail arrow for scrolling thumbnails container backward
prevThumbnailArrow.addEventListener('click', function () {
    if (thumbnailsContainer.scrollLeft === 0) {
        index = images.length - 1; // Loop to the last image
        carousel(); // Update the carousel with the new active image and thumbnail
    } else {
        thumbnailsContainer.scrollBy({ left: -100, behavior: 'smooth' }); // Scroll container backward by 100px
    }
});

// Add event listener to next thumbnail arrow for scrolling thumbnails container forward
nextThumbnailArrow.addEventListener('click', function () {
    if (thumbnailsContainer.scrollLeft + thumbnailsContainer.offsetWidth >= thumbnailsContainer.scrollWidth) {
        index = 0; // Loop to the first image
        carousel(); // Update the carousel with the new active image and thumbnail
    } else {
        thumbnailsContainer.scrollBy({ left: 100, behavior: 'smooth' }); // Scroll container forward by 100px
    }
});

// Add event listener to thumbnails container for thumbnail click navigation
thumbnailsContainer.addEventListener('click', function (event) {
    if (event.target.tagName === 'IMG') {
        index = Array.from(thumbnails).indexOf(event.target); // Update index based on clicked thumbnail index
        carousel(); // Update the carousel with the new active image and thumbnail
    }
});

// Define a debounce function for delaying the execution of a function
function debounce(func, delay) {
    let timer;
    return function () {
        clearTimeout(timer);
        timer = setTimeout(func, delay);
    };
}

// Add a debounced carousel function to the window resize event listener
window.addEventListener('resize', debounce(carousel, 200));

carousel(); // Initialize the carousel
