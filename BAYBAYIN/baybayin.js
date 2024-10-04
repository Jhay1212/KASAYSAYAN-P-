const baybayinMap = {
    'a': 'ᜀ', 'e': 'ᜁ', 'i': 'ᜁ', 'o': 'ᜂ', 'u': 'ᜂ',
    'b': 'ᜊ', 'k': 'ᜃ', 'd': 'ᜇ', 'g': 'ᜄ', 'h': 'ᜑ',
    'l': 'ᜎ', 'm': 'ᜋ', 'n': 'ᜈ', 'p': 'ᜉ', 's': 'ᜐ',
    't': 'ᜆ', 'w': 'ᜏ', 'y': 'ᜌ', 'f': 'ᜉ', 'z': 'ᜐ', 'v': 'ᜊ'
};
const orig = document.querySelector('.original');
let untranslated = ''; // Store the original input

function convertToBaybayin(text) {
    // Append to untranslated variable
    untranslated += text;
    return text.split('').map(char => {
        const lowerChar = char.toLowerCase();
        return baybayinMap[lowerChar] || char; 
    }).join('');
}

document.getElementById('input').addEventListener('input', function(event) {
    const originalText = event.target.value;
    // Update the original text content
    orig.textContent = untranslated;
    // Convert the input to Baybayin
    const convertedText = convertToBaybayin(originalText);
    // Display the converted text
    event.target.value = convertedText;
});
