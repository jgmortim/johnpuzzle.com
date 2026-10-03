<?php

function renderPhotoGallery(array $photos = [], int $width = 4): void
{
    ?>
    <article class="grid-gallery-<?= $width ?>">
        <?php foreach ($photos as $i => $photo): ?>
            <figure>
                <button popovertarget="photo-<?= $i ?>" type="button" class="image-thumbnail">
                    <img src="<?= $photo["src"] ?>" alt="<?= htmlspecialchars($photo["alt"]) ?>"/>
                </button>
                <figcaption><?= $photo["caption"] ?></figcaption>
            </figure>

            <div id="photo-<?= $i ?>" class="image-popup-container" popover>
                <div class="image-popup">
                    <button
                            class="image-popup-close"
                            popovertarget="photo-<?= $i ?>"
                            popovertargetaction="hide"
                            type="button"
                            aria-label="Close"
                    >×
                    </button>
                    <img
                            src="<?= $photo["src"] ?>"
                            alt="<?= $photo["alt"] ?>"
                    />
                </div>
            </div>
        <?php endforeach; ?>
    </article>
    <?php
}
