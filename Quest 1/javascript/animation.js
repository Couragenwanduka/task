// Select all the slide1, slide2, and slide3 cards inside the slideContainer
const cards = document.querySelectorAll('.slideContainer .slide1, .slideContainer .slide2, .slideContainer .slide3');

// Function to remove the highlight class from all cards
function removeHighlight() {
    cards.forEach(card => {
        card.classList.remove('highlight');
    });
}

// Function to highlight the next card in the list
let currentIndex = 0;
function highlightNextCard() {
    // Remove highlight from all cards
    removeHighlight();

    // Add highlight class to the current card
    cards[currentIndex].classList.add('highlight');

    // Move to the next card
    currentIndex = (currentIndex + 1) % cards.length; // Loop back to the first card after the last one
}

// Highlight a new card every 3 seconds (3000ms)
setInterval(highlightNextCard, 3000);

// Initial highlight
highlightNextCard();
