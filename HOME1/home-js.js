// script.js

let noteText = '';
document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".search-bar");

    // Optional: you can implement logic to display suggestions here
    searchBar.addEventListener("input", function() {
        console.log("User is typing:", searchBar.value);
        // Show search suggestions dynamically
    });
});

// script.js

document.addEventListener("DOMContentLoaded", function() {

    

    // Example: Set the username dynamically (e.g., based on a logged-in user)


});

// script.js

document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".search-bar");

    // Function to show content for the clicked lesson
    window.showContent = function(lessonId) {
        // Hide all lesson rectangles
        const rectangles = document.querySelectorAll('.rectangle');
        rectangles.forEach(rectangle => {
            rectangle.style.display = 'none'; // Hide rectangles
        });

        // Show the clicked lesson content
        const lessonContent = document.getElementById(lessonId);
        lessonContent.classList.remove('hidden');
    };

    // Function to hide lesson content and show rectangles again
    window.hideContent = function() {
        // Show all lesson rectangles again
        const rectangles = document.querySelectorAll('.rectangle');
        rectangles.forEach(rectangle => {
            rectangle.style.display = 'block'; // Show rectangles
        });

        // Hide all lesson content
        const lessonContents = document.querySelectorAll('.content');
        lessonContents.forEach(content => {
            content.classList.add('hidden');
        });
    };
});

// JavaScript to handle bookmark click
document.addEventListener("DOMContentLoaded", function() {
    const bookmarkIcon = document.getElementById("bookmarkIcon");

    bookmarkIcon.addEventListener("click", function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        // Toggle the 'clicked' class
        bookmarkIcon.classList.toggle("clicked");
    });
});

document.querySelectorAll('.rectangle').forEach(rectangle => {
    const dropdown = rectangle.querySelector('.dropdown');
    
    // Show dropdown on hover
    rectangle.addEventListener('mouseenter', () => {
        dropdown.style.display = 'block';
    });
    
    // Hide dropdown when mouse leaves the rectangle
    rectangle.addEventListener('mouseleave', () => {
        dropdown.style.display = 'none';
    });
});

//notes

function openForm() {
    const form = document.getElementById('noteForm');
    if (noteText) {
        form.querySelector('textarea').value = noteText;
    }
    form.classList.add('show');
    form.classList.remove('hidden');
}

function closeForm() {
    const form = document.getElementById('noteForm');
    form.classList.add('hidden');
    noteText = form.querySelector('textarea').value;
    form.classList.remove('show');
    preventDefault();
    
    return false;
}

// Make the form draggable
dragElement(document.getElementById('noteForm'));

function dragElement(el) {
    let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (document.querySelector('.form-header')) {
        document.querySelector('.form-header').onmousedown = dragMouseDown;
    } else {
        el.onmousedown =this. dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        el.style.top = (el.offsetTop - pos2) + "px";
        el.style.left = (el.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}

const audio = document.getElementById('audio');
const toggleCheckbox = document.getElementById('audio-toggle');

// Event listener for the toggle
toggleCheckbox.addEventListener('change', () => {
    if (toggleCheckbox.checked) {
        audio.play(); // Play audio when toggled on
    } else {
        audio.pause(); // Pause audio when toggled off
        audio.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio.addEventListener('ended', () => {
    toggleCheckbox.checked = false;
});



// Example: Set the username dynamically (e.g., based on a logged-in user)
// username.innerHTML = "<?php echo $_SESSION['username']; ?>";



function toggleSidebar() {
    document.body.classList.toggle('active');
  }
  
