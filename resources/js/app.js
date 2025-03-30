import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loadingScreen');
    const scrollButton = document.querySelector('.scroll-to-top'); // Target scroll button

    if (loadingScreen) {
        if (scrollButton) {
            scrollButton.style.display = 'none'; // Hide scroll button while loading
        }

        window.addEventListener('load', function() {
            setTimeout(function() {
                loadingScreen.classList.add('loaded');

                setTimeout(function() {
                    loadingScreen.style.display = "none";
                    if (scrollButton) {
                        scrollButton.style.display = 'flex'; // Show scroll button after loading
                    }
                }, 800);
            }, 1000);
        });

        setTimeout(function() {
            if (loadingScreen) {
                loadingScreen.classList.add('loaded');
                setTimeout(function() {
                    loadingScreen.style.display = "none";
                    if (scrollButton) {
                        scrollButton.style.display = 'flex';
                    }
                }, 800);
            }
        }, 3000);
    }
});
