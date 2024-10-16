const baybayin = {
    'a': 'ᜀ', 'e': 'ᜁ', 'i': 'ᜁ', 'o': 'ᜂ', 'u': 'ᜂ',
    'b': 'ᜊ', 'k': 'ᜃ', 'd': 'ᜇ', 'g': 'ᜄ', 'h': 'ᜑ',
    'l': 'ᜎ', 'm': 'ᜋ', 'n': 'ᜈ', 'p': 'ᜉ', 's': 'ᜐ',
    't': 'ᜆ', 'w': 'ᜏ', 'y': 'ᜌ', 'f': 'ᜉ', 'z': 'ᜐ', 'v': 'ᜊ',
    'r': 'ᜟ᜔', 'c': 'ᜃ᜔'
};

const kudlitE = '\u1714'; 
const kudlitO = '\u1713'; 

function convertToBaybayin(text) {
    return text.split(' ').map(word => {
        return word.split('').map((char, index, arr) => {
            const lowerChar = char.toLowerCase();

            // Handle direct vowel characters
            if (baybayin[lowerChar] && ['a', 'e', 'i', 'o', 'u'].includes(lowerChar)) {
                return baybayin[lowerChar]; 
            }

            // Handle consonant + vowel pair (e.g., 'ki', 'ru', 'ca')
            if (index + 1 < arr.length) {
                const nextChar = arr[index + 1].toLowerCase();

                // Check for 'e'/'i' or 'o'/'u' after consonants including 'r' and 'c'
                if (['e', 'i'].includes(nextChar) && baybayin[lowerChar]) {
                    arr[index + 1] = ''; // Skip the next vowel
                    return baybayin[lowerChar] + kudlitE;
                } else if (['o', 'u'].includes(nextChar) && baybayin[lowerChar]) {
                    arr[index + 1] = ''; // Skip the next vowel
                    return baybayin[lowerChar] + kudlitO;
                }
            }

            // Return consonant or untranslated characters
            return baybayin[lowerChar] || char;
        }).join('');
    }).join(' ');
}

document.getElementById('input').addEventListener('input', function(event) {
    const originalText = event.target.value; // Untranslated input
    const translatedText = convertToBaybayin(originalText); // Translated text
    
    // Display the untranslated text in the textarea
    event.target.value = originalText;

    // Show the translated text in the <p> tag
    const outputElement = document.getElementById('output');
    outputElement.innerHTML = ''; // Clear previous output

    // Loop through each letter and create a span with hover effect
    translatedText.split('').forEach((letter, index) => {
        const span = document.createElement('span');
        span.classList.add('letter');
        span.setAttribute('data-text', originalText[index] || ''); // Set corresponding original letter
        span.innerHTML = letter; // Set the translated letter
        outputElement.appendChild(span);
    });
});
