<!-- Go to Top Button -->
<a href="#" id="goToTop" class="go-to-top hidden" onclick="scrollToTop()">
    ↑
</a>
<style>
    /* Go to Top Button Styles */
.go-to-top {
    position: fixed;
    bottom: 30px; /* Adjust this value for vertical positioning */
    right: 30px; /* Adjust this value for horizontal positioning */
    background-color: #ff9900; /* Background color of the button */
    color: white; /* Text color */
    padding: 10px 15px; /* Padding */
    border-radius: 5px; /* Rounded corners */
    text-align: center;
    text-decoration: none; /* Remove underline */
    font-size: 24px; /* Font size */
    z-index: 1000; /* Ensure it's above other elements */
    transition: opacity 0.3s; /* Transition for smooth appearance */
}

.go-to-top.hidden {
    opacity: 0; /* Hidden state */
    visibility: hidden; /* Hide from screen readers */
}

.go-to-top.visible {
    opacity: 1; /* Visible state */
    visibility: visible; /* Show to screen readers */
}

</style>
<script>
    // Function to scroll to the top of the page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll
    });
}

// Show or hide the button based on scroll position
window.onscroll = function() {
    const goToTopButton = document.getElementById('goToTop');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        goToTopButton.classList.remove('hidden');
        goToTopButton.classList.add('visible');
    } else {
        goToTopButton.classList.remove('visible');
        goToTopButton.classList.add('hidden');
    }
};

</script>
