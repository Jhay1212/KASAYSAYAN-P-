const baybayin = {
    'a': 'ᜀ', 'e': 'ᜁ', 'i': 'ᜁ', 'o': 'ᜂ', 'u': 'ᜂ',
    'b': 'ᜊ', 'k': 'ᜃ', 'd': 'ᜇ', 'g': 'ᜄ', 'h': 'ᜑ',
    'l': 'ᜎ', 'm': 'ᜋ', 'n': 'ᜈ', 'p': 'ᜉ', 's': 'ᜐ',
    't': 'ᜆ', 'w': 'ᜏ', 'y': 'ᜌ', 'f': 'ᜉ', 'z': 'ᜐ', 'v': 'ᜊ',
};

const kudlitE = '\u1714'; // For 'E'/'I'
const kudlitO = '\u1713'; // For 'O'/'U'

function convertToBaybayin(text) {
    return text.split(' ').map(word => {
        return word.split('').map((char, index, arr) => {
            const lowerChar = char.toLowerCase();
            
            if (baybayin[lowerChar] && ['a', 'e', 'i', 'o', 'u'].includes(lowerChar)) {
                return baybayin[lowerChar]; 
            }

            // Handle consonant + vowel pair (e.g., 'ki' or 'ku')
            if (index + 1 < arr.length) {
                const nextChar = arr[index + 1].toLowerCase();
                
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
    document.getElementById('output').innerHTML = `<span class='letter' data-text="${originalText}">${translatedText}</span>`;
});