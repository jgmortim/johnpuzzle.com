<?php
$blogs = [
    [
        'title' => 'Project Highlight: Weekend at the End of the World',
        'published' => '2026-10-03',
        'modified' => '',
        'link' => '/blog/weekend/',
        'summary' => 'Weekend at the End of the World is a horror-comedy film directed by Gille Klabin. In which, the primary setting
            is a hunted cabin. Through my job at ARGHouse, I helped players experience that cabin for themselves via an interactive
            point-and-click puzzle game. Players who completed the game were eligible to win props from the movie and limited-run
            VHS copies. In addition to doing the programming for the point-and-click environment, I also designed a number of the
            game\'s puzzles. Most significantly, the final puzzle of the game.'
    ],
    [
        'title' => 'Spectrograms Case Study',
        'published' => '2026-08-30',
        'modified' => '',
        'link' => '/blog/spectrograms/',
        'summary' => 'A spectrogram is a visual representation of the spectrum of frequencies of a signal over time. Spectrograms, especially in audio signals,
            are an extremely common technique used in ARGs and puzzle hunts. They are so common that, on their own, they present virtually no challenge
            to those with a modicum of ARG experience. This article serve as a case study of my exploration of the medium of spectrograms and dives into
            ways to increase variety and difficulty in spectrogram-based puzzles.'
    ],
];

function renderBlogs(): void {
    global $blogs;
    $count = count($blogs);
    $i = 1;
    foreach ($blogs as $blog) : ?>
        <section class="main-section">
            <h2>
                <span class="article-date"><?= $blog["published"] ?></span> // <span class="article-title"><?= $blog["title"] ?></span>
            </h2>
            <p class="article-summary indent-2">
                <?= $blog["summary"] ?>
            </p>
            <p class="indent-2">
                <span class="blink">></span>
                <a href="<?= $blog["link"] ?>" class="article-link">Continue Reading</a>
            </p>
        </section>
        <?php if ($i < $count) : ?>
            <hr>
        <?php endif;
        $i++;
    endforeach;
}

function latestBlog(): array
{
    global $blogs;
    return $blogs[0];
}