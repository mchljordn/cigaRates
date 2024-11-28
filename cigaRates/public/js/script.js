document.addEventListener('DOMContentLoaded', (event) => {
    const ratingInput = document.getElementById('rating');
    const ratingTooltip = document.getElementById('rating-tooltip');
    
    // Initialize the rating value display
    ratingTooltip.textContent = ratingInput.value;

    // Update the rating value display on input change
    ratingInput.addEventListener('input', function() {
        ratingTooltip.textContent = this.value;
        const percentage = (this.value - this.min) / (this.max - this.min) * 100;
        ratingTooltip.style.left = `calc(${percentage}% + (${8 - percentage * 0.15}px))`;
    });

    // Remove the previous star rating mechanism JavaScript
});