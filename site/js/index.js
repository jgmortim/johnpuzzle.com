const popupContainers = document.getElementsByClassName("image-popup-container")

Array.from(popupContainers).forEach((el) => {
    el.addEventListener('click', (event) => {

        if (event.target === event.currentTarget) {
            el.hidePopover();
        }
    });
});
