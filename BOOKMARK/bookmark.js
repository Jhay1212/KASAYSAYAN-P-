const historyMap = {
  "early": {
    era: "Early Philippines",
    description: "In the rich and untamed archipelago that would become the Philippines, ancient barangays flourished under the rule of datus, and trade routes stretched across Asia."
  },
  "spanish": {
    era: "Spanish Colonialism",
    description: "The Philippines was forever changed when Spanish ships arrived in 1521, marking the dawn of over 300 years of colonial rule."
  },
  "filipino": {
    era: "Filipino Nationalism",
    description: "As centuries of Spanish rule grew unbearable, a spark ignited in the hearts of the Filipino people."
  },
  'american':{
    'era': 'Americian Colonialism',
    description: 'The American colonies and the Spanish colonies, with the arrival of the Spanish colonies, eventually brought the Philippines into the hands of the Americans.'

  },
  japanese: {
    era: 'Japanese Colonialism',
    description: 'The Japanese colonies, with the arrival of the Spanish colonies, eventually brought the Philippines into the hands of the Americans.'
  },
  the: {
    era: "The Philippines Republic",
    description: "The Philippines is a Republic that was established in 1942, and is the most populous country in the world."
  }
  // Add more title mappings as needed...
};

const desc = document.querySelector('.desc');
const squares = document.querySelectorAll('.square');

squares.forEach(square => {
    square.addEventListener('click', (e) => {
        const title = e.currentTarget.dataset.title.toLowerCase(); // Get the bookmark title
        const content = historyMap[title]; // Find corresponding history data by title
        console.log(title, content);
        
        if (content) {
            // Update the description section with the matching history data
            desc.innerHTML = `<h3>${content.era}</h3><p>${content.description}</p>`;
        } else {
            // If no matching content is found, show a default message
            desc.textContent = "No preview available for this bookmark.";
        }
    });
});
