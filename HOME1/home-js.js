// script.js

let noteText = '';
const user_name = document.querySelector('#uname');
const defaultIcon = '../PICS/user.jpg'; // Default user icon path
const icon = document.querySelector('.user-icon');



// document.addEventListener("DOMContentLoaded", function() {
//     // alert("poknat");
//     const searchBar = document.querySelector(".search-bar");

//     // Optional: you can implement logic to display suggestions here
//     searchBar.addEventListener("input", function() {
//         console.log("User is typing:", searchBar.value);
//         // Show search suggestions dynamically
//     });
// });


// script.js



// script.js

document.addEventListener("DOMContentLoaded", function() {
    // Load everything when dom is ready hehe 
    
    // Call the function to set the default user icon when the page is loaded
    // window.addEventListener('load', setDefaultUserIcon);
    
    const iconX =document. getElementById('userIcon');
    setDefaultUserIcon();
    iconX.addEventListener('click', function(){
        alert('tite')
        const profileForm = document.querySelector('form.hidden');
        profileForm.classList.toggle('hidden');

    });

    const searchBar = document.querySelector(".search-bar");

const s_username = document.querySelector("span.username");
const uid = document.querySelector('#uid').value;
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
        checkSession();
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


 function checkSession(){
    console.log(`uid ${uid.value}  ${typeof uid.value}`)
    if (uid.value == 0) {
        alert('Please login first');
        window.location.href = '../LOGIN1/Login1.html';

        return false;
    };
    return true;
 };

function openForm() {
    if (checkSession()) {
        const form = document.getElementById('noteForm');
        if (noteText) {
            form.querySelector('textarea').value = noteText;
        }
        form.classList.add('show');
        form.classList.remove('hidden');
    }
    
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
  
  s_username.innerHTML = user_name.value;




  function setDefaultUserIcon() {
    const defaultIcon = "../PICS/user.jpg"; // Default user icon path
    const storedIcon = localStorage.getItem('userIcon');

    // Check if there's a stored user icon
    if (storedIcon) {
        document.getElementById('userIcon').src = storedIcon;
    } else {
        document.getElementById('userIcon').src = defaultIcon;
    }
}

// Function to handle changing the user icon
function changeUserIcon(event) {
    alert('User icon clicked');
    // Get the selected file
    const file = event.target.files[0];
    
    // Check if a file is selected
    if (file) {
        // Create a FileReader object to read the file
        const reader = new FileReader();
        
        // Define a function to execute when the file is read
        reader.onload = function(e) {
            // Update the user icon with the selected image
            document.getElementById('userIcon').src = e.target.result;
            
            // Store the selected image in local storage
            localStorage.setItem('userIcon', e.target.result);
        };
        
        // Read the selected file as a data URL
        reader.readAsDataURL(file);
    }
}
