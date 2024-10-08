let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "What is the name of the oldest known human remains discovered in the Philippines?",
    "Around what year did the Austronesian migration to the Philippines occur?",
    "What type of societies emerged in the Philippines during the early period?",
    "Which metalworking technology became prevalent during the Iron Age in the Philippines?",
    "What was the significance of the Laguna Copperplate Inscription?",
    "Which region in the Philippines was influenced by Islamic culture during the emergence of sultanates?",
    "What was one of the major products traded between the Philippines and China during the dynasties?",
    "Who was the first European to make meaningful contact with the Philippines in 1521?",
    "What was the primary economic activity for early Filipino towns located near rivers and coasts?",
    "Which two major cultural influences spread through trade in the early Philippines?"
];

const choices = [
    ["Callao Man", "Tabon Man", "Lapu-Lapu", "Austronesian Man"],
    ["22,000 BCE", "3,000 BCE", "1,000 BCE", "1521 AD"],
    ["Empires", "Barangays", "Republics", "Monarchies"],
    ["Silver", "Bronze and iron", "Copper", "Gold"],
    ["It was the first known map of the Philippines", "It indicated a highly literate culture", "It recorded a war victory", "It was a religious text"],
    ["Luzon", "Mindanao", "Visayas", "Palawan "],
    ["Spices", "Gold", "Porcelain", "Textiles "],
    ["Miguel López de Legazpi", "Ferdinand Magellan", "Francisco de Sande", "Juan de Salcedo"],
    ["Mining", "Agriculture", "Fishing and maritime trade", "Textile production"],
    ["Islamic and Western", "Hindu and Buddhist", "Chinese and Japanese", "Spanish and Portuguese"]
];

const correctAnswers = [1, 1, 1, 1, 1, 1, 2, 1, 2, 1]; // Index of correct answers for each question

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
            ++score; // Increase score if correct
        }
        
        if (currentQuestionIndex < questions.length - 1) {
            currentQuestionIndex++;
            loadQuestion();
        }
    }
}

function submitQuiz() {
    // Update score display]
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
