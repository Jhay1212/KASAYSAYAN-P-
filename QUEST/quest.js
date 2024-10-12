const timeline =[
    { event: 'First Cry of the Philippine Revolution', date: new Date(1896, 7, 23) }, // August 23, 1896
    { event: 'Death of José Rizal', date: new Date(1896, 11, 30) }, // December 30, 1896
    { event: 'Declaration of Philippine Independence', date: new Date(1898, 5, 12) }, // June 12, 1898
    { event: 'Inauguration of the First Philippine Republic', date: new Date(1899, 0, 23) }, // January 23, 1899
    { event: 'Philippine-American War Begins', date: new Date(1899, 1, 4) }, // February 4, 1899
    { event: 'Capture of Emilio Aguinaldo', date: new Date(1901, 2, 23) }, // March 23, 1901
    { event: 'Tydings–McDuffie Act Signed', date: new Date(1934, 2, 24) }, // March 24, 1934
    { event: 'Commonwealth of the Philippines Inaugurated', date: new Date(1935, 10, 15) }, // November 15, 1935
    { event: 'Japanese Occupation of the Philippines', date: new Date(1942, 0, 2) }, // January 2, 1942
    { event: 'Bataan Death March', date: new Date(1942, 3, 9) }, // April 9, 1942
    { event: 'The Fall of Corregidor', date: new Date(1942, 4, 6) }, // May 6, 1942
    { event: 'Leyte Landing', date: new Date(1944, 9, 20) }, // October 20, 1944
    { event: 'Battle of Manila', date: new Date(1945, 1, 3) }, // February 3, 1945
    { event: 'Independence from the United States', date: new Date(1946, 6, 4) }, // July 4, 1946
    { event: 'Proclamation of Martial Law', date: new Date(1972, 8, 21) }, // September 21, 1972
    { event: 'Assassination of Benigno Aquino Jr.', date: new Date(1983, 7, 21) }, // August 21, 1983
    { event: 'EDSA People Power Revolution', date: new Date(1986, 1, 25) }, // February 25, 1986
    { event: 'Mount Pinatubo Eruption', date: new Date(1991, 5, 15) }, // June 15, 1991
    { event: 'People Power 2', date: new Date(2001, 0, 20) }, // January 20, 2001
    { event: 'Typhoon Yolanda', date: new Date(2013, 10, 8) } // November 8, 2013
]



function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]]; 
    }
    return array;
}


const selectedEvents = shuffleArray([...timeline]).slice(0, 5);


const eventsContainer = document.getElementById('events');
selectedEvents.forEach(event => {
    const clickableDiv = document.createElement('div');
    clickableDiv.className = 'clickable';
    clickableDiv.setAttribute('data-date', event.date.getTime()); // Store date as timestamp
    clickableDiv.textContent = event.event;
    eventsContainer.appendChild(clickableDiv);
});

let selectedOrder = [];

const dropzone = document.getElementById('dropzone');
const checkOrderBtn = document.getElementById('check-order');
const result = document.getElementById('result');
const reset = document.querySelector('#reset');

reset.addEventListener('click', resetTimeline);
// Store original positions to reset when clicking on items in dropzone
const originalPositions = [];

// Clickable event handling (for both events container and dropzone)
eventsContainer.addEventListener('click', (e) => {
    if (e.target.classList.contains('clickable')) {
        const clickedDate = parseInt(e.target.getAttribute('data-date'));
        if (!selectedOrder.includes(clickedDate)) {
            selectedOrder.push(clickedDate);
            const clonedItem = e.target.cloneNode(true);
            clonedItem.addEventListener('click', handleDropzoneClick); // Add click handler for returning event
            dropzone.appendChild(clonedItem);
            originalPositions.push({ item: e.target, index: [...eventsContainer.children].indexOf(e.target) });
            e.target.remove(); // Remove from the original container
        }
    }
});

// Click event handler for items in dropzone
function handleDropzoneClick(e) {
    const clickedDate = parseInt(e.target.getAttribute('data-date'));
    selectedOrder = selectedOrder.filter(date => date !== clickedDate);
    e.target.remove(); // Remove from dropzone

    // Return the item to its original spot
    const original = originalPositions.find(pos => pos.item.getAttribute('data-date') == clickedDate);
    eventsContainer.insertBefore(original.item, eventsContainer.children[original.index]);
    console.log(dropzone);
    alert(...eventsContainer.childNodes);
    console.log(...eventsContainer.childNodes);
}


function getNewRandomEvent() {
    const remainingEvents = timeline.filter(event => !selectedEvents.includes(event));
    if (remainingEvents.length > 0) {
        return remainingEvents[Math.floor(Math.random() * remainingEvents.length)];
    }
    return null; // Return null if no more events are available
}

// Check the order
checkOrderBtn.addEventListener('click', () => {
    let correct = true;

    if (selectedOrder.length !== selectedEvents.length) {
        correct = false;
    } else {
        for (let i = 0; i < selectedOrder.length - 1; i++) {
            if (selectedOrder[i] > selectedOrder[i + 1]) {
                correct = false;
                break;
            }
        }
    }

    if (correct) {
        result.textContent = "Correct! You arranged the timeline perfectly!";
        result.style.color = 'green';

        selectedEvents.forEach(event => {
            const index = timeline.findIndex(e => e.date.getTime() === event.date.getTime());
            if (index > -1) {
                timeline.splice(index, 1); // Remove the correctly guessed event from the timeline
            }
        });

        const newEvent = getNewRandomEvent();
        if (newEvent) {
            selectedEvents.push(newEvent); // Add the new event to the list
            const clickableDiv = document.createElement('div');
            clickableDiv.className = 'clickable';
            clickableDiv.setAttribute('data-date', newEvent.date.getTime()); // Store date as timestamp
            clickableDiv.textContent = newEvent.event;
            eventsContainer.appendChild(clickableDiv);
        }

        // Reset correct events to their original positions
        originalPositions.forEach(pos => {
            eventsContainer.insertBefore(pos.item, eventsContainer.children[pos.index]);
        });

        resetTimeline(); // Reset dropzone and clear selections
    } else {
        result.textContent = "Oops! Try again, the order is not correct.";
        result.style.color = 'red';
    }
});

// Reset function to clear dropzone
function resetTimeline() {
    selectedOrder = [];
    originalPositions.forEach(pos => {
        // Remove the element from the dropzone and restore it in its original position
        const itemInDropzone = [...dropzone.children].find(child => child.getAttribute('data-date') == pos.item.getAttribute('data-date'));
        if (itemInDropzone) {
            itemInDropzone.remove();
        }
        if (![...eventsContainer.children].includes(pos.item)) {
            eventsContainer.insertBefore(pos.item, eventsContainer.children[pos.index]);
        }
    });
    originalPositions.length = 0; // Clear out originalPositions after resetting
}

checkOrderBtn.addEventListener('click', () => {
    let correct = true;

    // First, check if the user has selected all events
    if (selectedOrder.length !== selectedEvents.length) {
        correct = false;
    } else {
        // Check if the events are in the correct order
        for (let i = 0; i < selectedOrder.length - 1; i++) {
            if (selectedOrder[i] > selectedOrder[i + 1]) {
                correct = false;
                break;
            }
        }
    }

    if (correct) {
        result.textContent = "Correct! You arranged the timeline perfectly!";
        result.style.color = 'green';

        // Remove the correct events from the timeline
        selectedEvents.forEach(event => {
            const index = timeline.findIndex(e => e.date.getTime() === event.date.getTime());
            if (index > -1) {
                timeline.splice(index, 1); // Remove the correctly guessed event from the timeline
            }
        });

        // Add a new event from the remaining timeline
        const newEvent = getNewRandomEvent();
        if (newEvent) {
            selectedEvents.push(newEvent); // Add the new event to the list
            const clickableDiv = document.createElement('div');
            clickableDiv.className = 'clickable';
            clickableDiv.setAttribute('data-date', newEvent.date.getTime()); // Store date as timestamp
            clickableDiv.textContent = newEvent.event;
            eventsContainer.appendChild(clickableDiv);
            originalPositions.push({ item: clickableDiv, index: [...eventsContainer.children].indexOf(clickableDiv) }); // Store its original position
        }

        resetTimeline(); // Reset dropzone and clear selections
    } else {
        result.textContent = "Oops! Try again, the order is not correct.";
        result.style.color = 'red';

        // Allow the user to try again without resetting their progress
        resetTimeline();
    }
});