const popupContainers = document.getElementsByClassName('image-popup-container');
const blinkingElements = document.getElementsByClassName('blink');

Array.from(popupContainers).forEach((el) => {
    el.addEventListener('click', (event) => {
        if (event.target === event.currentTarget) {
            el.hidePopover();
        }
    });
});

document.getElementById('header-logo').addEventListener("dblclick", () => {
    window.location.href = "https://johnpuzzle.com/ascii-art/";
})

// Blinkers turn off 5 seconds after they first appear on screen.
Array.from(blinkingElements).forEach((el) => {
    respondToVisibility(el, visible => {
        if (visible) {
            setTimeout(() => {
                el.classList.remove('blink');
            }, 5000)
        }
    })
});

// Based on https://stackoverflow.com/a/44670818
function respondToVisibility(element, callback) {
    const options = {
        threshold: 1.0
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            callback(entry.intersectionRatio > 0);
        });
    }, options);

    observer.observe(element);
}

function increasePage(number) {
    number++;
    if ('URLSearchParams' in window) {
        const searchParams = new URLSearchParams(window.location.search);
        searchParams.set("page", number);
        window.location.search = searchParams.toString();
    }
}

function decreasePage(number) {
    number--;
    if ('URLSearchParams' in window) {
        const searchParams = new URLSearchParams(window.location.search);
        searchParams.set("page", number);
        window.location.search = searchParams.toString();
    }
}
