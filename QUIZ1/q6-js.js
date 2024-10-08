let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "When did the Philippines gain formal independence from the United States?",
    "Who was the first president of the Republic of the Philippines?",
    "What significant change did Diosdado Macapagal implement regarding Independence Day?",
    "Who became the 10th president of the Philippines in 1965?",
    "What significant event led to Corazon Aquino becoming president in 1986?"
];

const choices = [
    ["July 4, 1945", "July 4, 1946", "June 12, 1962", "June 12, 1898"],
    ["Sergio Osmeña", "Manuel Roxas", "Elpidio Quirino", "Ramon Magsaysay"],
    ["Changed it to July 4", "Made it a special holiday", "Changed it to June 12", " Abolished the holiday"],
    ["Corazon Aquino", "Joseph Estrada", "Ferdinand Marcos", "Fidel Ramos"],
    ["The assassination of Benigno Aquino Jr.", "The EDSA Revolution", "A military coup", "A natural disaster"]
];

const correctAnswers = [1, 1, 2, 2, 1]; // Index of correct answers for each question

function loadQuestion() {
    const questionElement = document.getElementById('question');
    const choiceElements = document.querySelectorAll('.choice-group');
    
    questionElement.textContent = questions[currentQuestionIndex];
    
    choiceElements.forEach((element, index) => {
        element.textContent = choices[currentQuestionIndex][index];
        element.classList.remove('selected'); // Clear previous selection
    });
    
    document.getElementById('submitButton').style.display = currentQuestionIndex === questions.length - 1 ? 'block' : 'none';
    updateScoreDisplay();
}

function selectChoice(choiceElement, choiceIndex) {
    const choiceElements = document.querySelectorAll('.choice-group');
    
    choiceElements.forEach(element => {
        element.classList.remove('selected');
    });
    
    choiceElement.classList.add('selected');
    
    // Store the user's choice
    choiceElement.dataset.selectedIndex = choiceIndex;
}

function nextQuestion() {
    const selectedChoice = document.querySelector('.choice-group.selected');
    
    if (selectedChoice) {
        const selectedIndex = parseInt(selectedChoice.dataset.selectedIndex);
        if (selectedIndex === correctAnswers[currentQuestionIndex]) {
            score++; // Increase score if correct
        }
        
        if (currentQuestionIndex < questions.length - 1) {
            currentQuestionIndex++;
            loadQuestion();
        }
    }
}

function submitQuiz() {
    // Update score display
    const op = score + 1;
    document.getElementById('finalScore').textContent = op + " out of " + questions.length;
    const resultMessage = (score === questions.length) ? "Congratulations! You got all the answers correct!" : "Good job! You completed the quiz.";
    document.getElementById('resultMessage').textContent = resultMessage;

    // Show balloons
    showBalloons();

    // Show modal
    document.getElementById('resultModal').style.display = "block";
}

// Function to show balloons animation
function showBalloons() {
    const balloons = document.querySelectorAll('.balloon');
    balloons.forEach((balloon, index) => {
        setTimeout(() => {
            balloon.style.animation = "rise 3s ease-in forwards"; // Trigger animation
        }, index * 300); // Stagger the animations
    });
}

// Close the modal
function closeModal() {
    document.getElementById('resultModal').style.display = "none";
}

// Function to go back to home (you can replace the location with your home page)
function goHome() {
    window.location.href = "../QUIZ1/quiz1.php"; // Adjust the link to your home page
}

// Update score display
function updateScoreDisplay() {
    document.getElementById('score').textContent = score;
}

// Load the first question when the page is loaded
window.onload = loadQuestion;
