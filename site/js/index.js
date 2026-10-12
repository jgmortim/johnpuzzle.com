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

// Turn off blinkers after 5 seconds.
setTimeout(()=> {
    Array.from(blinkingElements).forEach((el) => {
        el.classList.remove('blink')
    });
}, 5000)

