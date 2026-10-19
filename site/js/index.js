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

function test() {
    console.log("test");
}