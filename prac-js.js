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
