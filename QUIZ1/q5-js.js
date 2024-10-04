let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "When did the Japanese occupation of the Philippines begin?",
    "What was the name of the brutal march forced upon Filipino and American soldiers after the fall of Bataan?",
    "Who famously declared ''I shall return'' during the Japanese occupation?",
    "What was the primary reason for the Japanese invasion of the Philippines?",
    "What does USAFFE stand for?"
];

const choices = [
    ["1941", "1945", "1939", "1942"],
    ["Bataan Death March", "Manila March", " Luzon March", "Philippine March"],
    ["Douglas MacArthur", "Manuel L. Quezon", "Sergio Osmeña", "Emilio Aguinaldo"],
    ["To spread democracy", "To access natural resources", "To establish tourism", "To promote trade"],
    [" United States Armed Forces for the Far East", "United States Army for Freedom and Equality", "United States Alliance for Filipino Freedom", " United States Armed Forces in the Philippines"]
];

const correctAnswers = [0, 0, 0, 1, 0]; // Index of correct answers for each question

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
    window.location.href = "../QUIZ1/quiz1.html"; // Adjust the link to your home page
}

// Update score display
function updateScoreDisplay() {
    document.getElementById('score').textContent = score;
}

// Load the first question when the page is loaded
window.onload = loadQuestion;
