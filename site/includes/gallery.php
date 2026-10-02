<?php

if (!isset($photos)) {
    $photos = [];
}
?>

<article class="grid-gallery">
    <?php for ($i = 0; $i < count($photos); $i++): ?>
        <figure>
            <button popovertarget="photo-<?= $i ?>" type="button" class="image-thumbnail">
                <img src="<?= $photos[$i]["src"] ?>" alt="<?= $photos[$i]["alt"] ?>"/>
            </button>
            <figcaption><?= $photos[$i]["caption"] ?></figcaption>
        </figure>
        <div id="photo-<?= $i ?>" class="image-popup-container" popover>
            <div class="image-popup">
                <button class="image-popup-close" popovertarget="photo-<?= $i ?>" popovertargetaction="hide" type="button" aria-label="Close">×</button>
                <img src="<?= $photos[$i]["src"] ?>" alt="<?= $photos[$i]["alt"] ?>"/>
            </div>
        </div>
    <?php endfor; ?>
</article>
