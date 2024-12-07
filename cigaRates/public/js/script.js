document.addEventListener('DOMContentLoaded', (event) => {
    const ratingInput = document.getElementById('rating');
    const ratingTooltip = document.getElementById('rating-tooltip');

    ratingTooltip.textContent = ratingInput.value;

    ratingInput.addEventListener('input', function () {
        ratingTooltip.textContent = this.value;
        const percentage = (this.value - this.min) / (this.max - this.min) * 100;
        ratingTooltip.style.left = `calc(${percentage}% + (${8 - percentage * 0.15}px))`;
    });


    const cautionElements = document.querySelectorAll('.p-footer-caution');
    cautionElements.forEach(element => {
        element.addEventListener('mouseover', () => {
            element.style.animationPlayState = 'paused';
        });

        element.addEventListener('mouseout', () => {
            element.style.animationPlayState = 'running';
        });
    });
});