// Questions Array
const questions = [
    { question: "The Earth is flat.", answer: false },
    { question: "The Great Wall of China is visible from space.", answer: false },
    { question: "There are seven continents on Earth.", answer: true },
    { question: "Lightning never strikes the same place twice.", answer: false },
    { question: "Water boils at 100°C.", answer: true }
];

// Variables to store current question and score
let currentQuestionIndex = 0;
let score = 0;

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

// Set total number of questions
totalElement.textContent = questions.length;

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
    displayQuestion();
}

// End game and show result
function endGame() {
    trueBtn.style.display = 'none';
    falseBtn.style.display = 'none';

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
    scoreElement.textContent = score;
    resultMessageElement.classList.remove('show');
    tryAgainBtn.classList.add('hidden');
    exitBtn.classList.add('hidden');
    trueBtn.style.display = 'inline-block';
    falseBtn.style.display = 'inline-block';

    // Restart container animation
    containerElement.style.animation = 'none';
    setTimeout(() => {
        containerElement.style.animation = '';
    }, 0);

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
displayQuestion();
