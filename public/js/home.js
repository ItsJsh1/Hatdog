// HOME CAROUSEL
// ----------------------
document.addEventListener('DOMContentLoaded', () => {
    const homeCarousel = document.querySelector('#custom-carousel');
    const homeCarouselItems = homeCarousel.querySelectorAll('[data-carousel-item]');
    const homeSlideCounter = document.getElementById('slide-counter');
    const homeSlideText = document.getElementById('slide-text');
    const homeNextButton = document.getElementById('next-button');
    const homePrevButton = document.getElementById('prev-button');
    const homeVideoSlide = document.getElementById('video-slide');

    const homeSlides = [
        { text: "Next<br>8th ANNIVERSARY", counter: "1 / 4" },
        { text: "Next<br>Radio Engineering<br>Circle Taguig", counter: "2 / 4" },
        { text: "Next<br>REChanneling &nbsp &nbsp &nbsp &nbsp<br>Resolutions ", counter: "3 / 4" },
        { text: "Next<br>RECIncFamily &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<br>Be one of us", counter: "4 / 4" }
    ];

    let homeCurrentIndex = 0;
    const homeTotalSlides = homeCarouselItems.length;

    function updateHomeCarousel(newIndex) {
        homeCarouselItems[homeCurrentIndex].classList.add('hidden');
        homeCurrentIndex = (newIndex + homeTotalSlides) % homeTotalSlides;
        homeCarouselItems[homeCurrentIndex].classList.remove('hidden');

        const newVideo = homeCarouselItems[homeCurrentIndex].querySelector('video');
        if (newVideo) {
            newVideo.currentTime = 0;
            newVideo.play();
        }

        homeSlideCounter.textContent = homeSlides[homeCurrentIndex].counter;
        homeSlideText.innerHTML = homeSlides[homeCurrentIndex].text;
    }

    homeNextButton.addEventListener('click', () => updateHomeCarousel(homeCurrentIndex + 1));
    homePrevButton.addEventListener('click', () => updateHomeCarousel(homeCurrentIndex - 1));
    homeVideoSlide?.addEventListener('ended', () => updateHomeCarousel(homeCurrentIndex + 1));
    updateHomeCarousel(0);
});

// SECTION ANIMATIONS (INTRODUCTION, MEMBERSHIP, EVENTS, GALLERY, ACCORDION, NEWS)
// ----------------------
function setupCustomObserver(targetId, threshold = 0.5) {
    const target = document.getElementById(targetId);
    if (!target) return;

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'scale-90');
                entry.target.classList.add('opacity-100', 'scale-100');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold });

    observer.observe(target);
}

window.addEventListener('DOMContentLoaded', () => {
    setupCustomObserver('introduction-section', 0.1);
    setupCustomObserver('news-section', 0.5);
    setupCustomObserver('membership-section', 0.5);
    setupCustomObserver('events-section', 0.5);
    setupCustomObserver('community-section', 0.5);
    setupCustomObserver('accordion-section', 0.5);
    setupCustomObserver('sponsors-section', 0.5);
});

// EVENTS SECTION (LOAD MORE FUNCTIONALITY)
// ----------------------
document.addEventListener('DOMContentLoaded', () => {
    // Ensure timeline-section exists before using it
    const introSection = document.getElementById('events-section');
    if (introSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    introSection.classList.remove('opacity-0', 'scale-90');
                }
            });
        }, { threshold: 0.1 });

        observer.observe(introSection);
    }

    // Get elements safely
    const btn2024 = document.getElementById('btn-2024');
    const btn2025 = document.getElementById('btn-2025');
    const btn2026 = document.getElementById('btn-2026');
    const eventList2024 = document.getElementById('event-list-2024');
    const eventList2025 = document.getElementById('event-list-2025');
    const eventList2026 = document.getElementById('event-list-2026');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const eventItem4 = document.getElementById('event-item-4');

    if (!btn2024 || !btn2025 || !btn2026 || !eventList2024 || !eventList2025 || !eventList2026) {
        console.warn("One or more event-related elements are missing.");
        return;
    }

    // Function to display events based on year
    function showEvents(year) {
        eventList2024.classList.add('hidden');
        eventList2025.classList.add('hidden');
        eventList2026.classList.add('hidden');

        if (eventItem4) eventItem4.classList.add('hidden'); // Hide the 4th event initially

        if (year === 2024) {
            eventList2024.classList.remove('hidden');
        } else if (year === 2026) {
            eventList2026.classList.remove('hidden');
        } else {
            eventList2025.classList.remove('hidden');
        }
    }

    // Attach event listeners safely
    btn2024.addEventListener('click', () => showEvents(2024));
    btn2025.addEventListener('click', () => showEvents(2025));
    btn2026.addEventListener('click', () => showEvents(2026));

    // Load more button functionality
    if (loadMoreBtn && eventItem4) {
        loadMoreBtn.addEventListener('click', () => {
            eventItem4.classList.remove('hidden'); // Show the 4th event when "Load More" is clicked
            loadMoreBtn.classList.add('hidden');   // Hide the "Load More" button after it's clicked
        });
    }

    // Load default events (2025) when the page loads
    showEvents(2025);
});
