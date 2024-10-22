// Questions Array
const questions = [
    { question: "The Earth is flat.", answer: false },
    { question: "The Great Wall of China is visible from space.", answer: false },
    { question: "There are seven continents on Earth.", answer: true },
    { question: "Lightning never strikes the same place twice.", answer: false },
    { question: "Water boils at 100°C.", answer: true }
];

// Shuffle function to randomize questions array
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Shuffle the questions array before starting
shuffle(questions);

// Variables to store current question, score, and answered questions count
let currentQuestionIndex = 0;
let score = 0;
let answeredQuestions = 0;  // Track how many questions have been answered

// Get HTML elements
const questionElement = document.getElementById('question');
const trueBtn = document.getElementById('trueBtn');
const falseBtn = document.getElementById('falseBtn');
const scoreElement = document.getElementById('score');
const totalElement = document.getElementById('total');
const resultMessageElement = document.getElementById('resultMessage');
const tryAgainBtn = document.getElementById('tryAgainBtn');
const exitBtn = document.getElementById('exitBtn');
const containerElement = document.querySelector('.container');
const progressElement = document.getElementById('progress');  // Progress indicator

// Set total number of questions
totalElement.textContent = questions.length;

// Function to update progress indicator
function updateProgress() {
    progressElement.textContent = `Answered: ${answeredQuestions} / ${questions.length}`;
}

// Function to display the next question
function displayQuestion() {
    if (currentQuestionIndex < questions.length) {
        questionElement.textContent = questions[currentQuestionIndex].question;

        // Ensure the question is visible by setting its opacity to 1
        questionElement.style.opacity = '1';
        questionElement.style.animation = 'fadeIn 0.5s forwards ease';

        trueBtn.style.opacity = '0';
        falseBtn.style.opacity = '0';

        // Re-trigger button animations
        requestAnimationFrame(() => {
            trueBtn.style.animation = 'slideUpFadeIn 0.5s forwards ease 0.5s';
            falseBtn.style.animation = 'slideUpFadeIn 0.5s forwards ease 0.5s';
        });
    } else {
        endGame();
    }
}

// Check answer function
function checkAnswer(userAnswer) {
    const correctAnswer = questions[currentQuestionIndex].answer;
    if (userAnswer === correctAnswer) {
        score++;
        scoreElement.textContent = score;
    }

    currentQuestionIndex++;
    answeredQuestions++;  // Increment answered questions count
    updateProgress();  // Update progress after each question is answered
    displayQuestion();
}

// End game and show result
function endGame() {
    trueBtn.style.display = 'none';
    falseBtn.style.display = 'none';

    // Hide the bottom exit button when the end buttons appear
    exitGameBtn.classList.add('hidden');

    if (score === questions.length) {
        resultMessageElement.textContent = "Congrats! You answered all correctly!";
        exitBtn.classList.remove('hidden');
    } else {
        resultMessageElement.textContent = "Failed! You missed some answers.";
        tryAgainBtn.classList.remove('hidden');
        exitBtn.classList.remove('hidden');
    }
    resultMessageElement.classList.add("show");
}

// Reset game function (for Try Again button)
function resetGame() {
    currentQuestionIndex = 0;
    score = 0;
    answeredQuestions = 0;  // Reset answered questions count
    scoreElement.textContent = score;
    resultMessageElement.classList.remove('show');
    tryAgainBtn.classList.add('hidden');
    exitBtn.classList.add('hidden');
    trueBtn.style.display = 'inline-block';
    falseBtn.style.display = 'inline-block';

// Show the bottom exit button again when the game restarts
exitGameBtn.classList.remove('hidden');

    // Restart container animation
    containerElement.style.animation = 'none';
    setTimeout(() => {
        containerElement.style.animation = '';
    }, 0);

    // Shuffle the questions again for a fresh start
    shuffle(questions);
    updateProgress();  // Reset progress indicator to 0
    displayQuestion();
}

// Exit game function (for Exit button)
function exitGame() {
    window.location.href = "../GAMES/games.php";  // Redirect to homepage or other page
}

// Event listeners for buttons
trueBtn.addEventListener('click', () => checkAnswer(true));
falseBtn.addEventListener('click', () => checkAnswer(false));
tryAgainBtn.addEventListener('click', resetGame);
exitBtn.addEventListener('click', exitGame);

// Initial display
updateProgress();  // Initialize progress display
displayQuestion();

// Exit game function for the new exit button
function exitGamePage() {
    window.location.href = "../GAMES/games.php";  // Redirect to homepage or other page
}

// Event listener for the new exit button
const exitGameBtn = document.getElementById('exitGameBtn');
exitGameBtn.addEventListener('click', exitGamePage);

// Get the audio element and the button
const sound = document.getElementById('sound');
const soundButton = document.getElementById('soundButton');

// Boolean to track the sound state
let isPlaying = false;

// Event listener to toggle sound
soundButton.addEventListener('click', () => {
    if (isPlaying) {
        sound.pause();
        soundButton.textContent = '🔇'; // Change icon to mute
    } else {
        sound.play();
        soundButton.textContent = '🔊'; // Change icon to speaker
    }
    isPlaying = !isPlaying;
});
