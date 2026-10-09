<?php
include('../includes/header.php');
include('../includes/footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John Puzzle - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/blog/">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="alternate" type="application/rss+xml" title="John Puzzle's Blog" href="./rss.xml">
</head>
<body>
<?php renderHeader('BLOG'); ?>
<main>
    <nav id="breadcrumbs">
        <a href="/">Home</a> > Blog
    </nav>
    <section>
        <hr>
        <h2><span class="article-date">2026-10-03</span> // <span class="article-title">Project Highlight: Weekend at the End of the World</span></h2>
        <hr>
        <p class="article-summary indent-2">
            Weekend at the End of the World is a horror-comedy film directed by Gille Klabin. In which, the primary setting
            is a hunted cabin. Through my job at ARGHouse, I helped players experience that cabin for themselves via an interactive
            point-and-click puzzle game. Players who completed the game were eligible to win props from the movie and limited-run
            VHS copies. In addition to doing the programming for the point-and-click environment, I also designed a number of the
            game's puzzles. Most significantly, the final puzzle of the game.
        </p>
        <p class="indent-2">
            <span class="blink">></span>
            <a href="/blog/weekend/" class="article-link">Continue Reading</a>
        </p>
    </section>
    <section>
        <hr>
        <h2><span class="article-date">2026-08-30</span> // <span class="article-title">Spectrograms Case Study</span></h2>
        <hr>
        <p class="article-summary indent-2">
            A spectrogram is a visual representation of the spectrum of frequencies of a signal over time. Spectrograms, especially in audio signals,
            are an extremely common technique used in ARGs and puzzle hunts. They are so common that, on their own, they present virtually no challenge
            to those with a modicum of ARG experience. This article serve as a case study of my exploration of the medium of spectrograms and dives into
            ways to increase variety and difficulty in spectrogram-based puzzles.
        </p>
        <p class="indent-2">
            <span class="blink">></span>
            <a href="/blog/spectrograms/" class="article-link">Continue Reading</a>
        </p>
    </section>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../js/index.js"></script>
</body>
</html>