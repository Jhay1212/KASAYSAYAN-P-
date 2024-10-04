// Questions Array
const questions = [
    {
        "question": "The Philippines was named after King Philip II of Spain.",
        "answer": true
    },
    {
        "question": "The Philippines gained independence from Spain in 1896.",
        "answer": false
    },
    {
        "question": "Jose Rizal was executed by the Spanish government for sedition in 1896.",
        "answer": true
    },
    {
        "question": "Emilio Aguinaldo was the first President of the Philippines.",
        "answer": true
    },
    {
        "question": "Manila is the capital city of the Philippines.",
        "answer": true
    },
    {
        "question": "The Philippines was under American colonial rule for over 50 years.",
        "answer": false
    },
    {
        "question": "The Tydings–McDuffie Act provided the Philippines with independence from the United States in 1934.",
        "answer": true
    },
    {
        "question": "Luzon is the largest island in the Philippines.",
        "answer": true
    },
    {
        "question": "The Philippine Revolution against Spain began in 1898.",
        "answer": false
    },
    {
        "question": "The People Power Revolution in 1986 led to the ousting of President Ferdinand Marcos.",
        "answer": true
    },
    {
        "question": "The Philippine-American War lasted from 1899 to 1902.",
        "answer": true
    },
    {
        "question": "The Katipunan was a peaceful movement against Spanish colonization.",
        "answer": false
    },
    {
        "question": "The first Philippine Republic was established in Malolos, Bulacan.",
        "answer": true
    },
    {
        "question": "The Spanish language is still the official language of the Philippines.",
        "answer": false
    },
    {
        "question": "The Battle of Manila Bay occurred during the Spanish-American War.",
        "answer": true
    },
    {
        "question": "Manuel L. Quezon was the first president of the Third Philippine Republic.",
        "answer": false
    },
    {
        "question": "The Japanese occupation of the Philippines lasted from 1942 to 1945.",
        "answer": true
    },
    {
        "question": "The Treaty of Paris in 1898 ended the Spanish-American War and ceded the Philippines to the United States.",
        "answer": true
    },
    {
        "question": "Corazon Aquino was the first female president of the Philippines.",
        "answer": true
    },
    {
        "question": "The Bataan Death March occurred during World War I.",
        "answer": false
    },
    {
        "question": "The University of the Philippines was founded in 1908.",
        "answer": true
    },
    {
        "question": "Andrés Bonifacio is considered the Father of the Philippine Revolution.",
        "answer": true
    },
    {
        "question": "The Marcos regime declared Martial Law in 1972.",
        "answer": true
    },
    {
        "question": "The Philippines became a member of the United Nations in 1945.",
        "answer": true
    },
    {
        "question": "The 1935 Constitution was the first constitution of the Philippines.",
        "answer": true
    },
    {
        "question": "The Mactan Battle in 1521 was between Ferdinand Magellan and Lapu-Lapu.",
        "answer": true
    },
    {
        "question": "Manila was declared an open city during World War II to prevent destruction.",
        "answer": true
    },
    {
        "question": "The Malolos Constitution was the first constitution written for the Philippines.",
        "answer": true
    },
    {
        "question": "The first Mass in the Philippines was held on March 31, 1521, on Limasawa Island.",
        "answer": true
    },
    {
        "question": "Diosdado Macapagal is known for moving the Philippines' Independence Day from July 4 to June 12.",
        "answer": true
    }
]

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
    window.location.href = "../GAMES/games.html";  // Redirect to homepage or other page
}

// Event listeners for buttons
trueBtn.addEventListener('click', () => checkAnswer(true));
falseBtn.addEventListener('click', () => checkAnswer(false));
tryAgainBtn.addEventListener('click', resetGame);
exitBtn.addEventListener('click', exitGame);

// Initial display
displayQuestion();
