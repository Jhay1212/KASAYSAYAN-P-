let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "What year did the American-Filipino War begin?",
    "Who was the leader of the Filipino forces during the war?",
    "What was the main goal of the Philippine-American War for the United States?",
    "Which treaty ended the Spanish-American War, leading to American control over the Philippines?",
    "What was a significant outcome of the American-Filipino War?"
];

const choices = [
    ["1898", "1900", "1899", "1901"],
    ["Emilio Aguinaldo", "Jose Rizal", "Andres Bonifacio", "Manuel L. Quezon"],
    ["To liberate the Philippines", "To establish American control over the islands", "To spread democracy globally", "To protect Filipino independence"],
    ["Treaty of Paris", "Treaty of Manila", "Treaty of Versailles", "Treaty of Ghent"],
    ["Full independence for the Philippines", "Establishment of a U.S. colony in the Philippines", "A peaceful resolution to the conflict", " Immediate withdrawal of American forces"]
];

const correctAnswers = [2, 0, 1, 0, 1]; // Index of correct answers for each question

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
