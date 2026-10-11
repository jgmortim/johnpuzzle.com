<?php
function renderPhotoGallery(array $photos = [], int $width = 4): void
{
    ?>
    <article class="grid-gallery-<?= $width ?>">
        <?php foreach ($photos as $photo):
            renderExpandableImage($photo["src"], $photo["alt"], $photo["caption"]);
         endforeach; ?>
    </article>
    <?php
}

function renderExpandableImage(string $source, string $alt, string $caption): void
{
    ?>

    <figure>
        <button popovertarget="photo-<?= $source ?>" type="button" class="image-thumbnail" onclick="this.blur()">
            <img src="<?= $source ?>" alt="<?= $alt ?>"/>
        </button>
        <figcaption><?= $caption ?></figcaption>
    </figure>
    <div id="photo-<?= $source ?>" class="image-popup-container" popover>
        <div class="image-popup">
            <button
                    class="image-popup-close"
                    popovertarget="photo-<?= $source ?>"
                    popovertargetaction="hide"
                    type="button"
                    aria-label="Close"
            >×
            </button>
            <img src="<?= $source ?>" alt="<?= $alt ?>"/>
        </div>
    </div>
    <?php
}