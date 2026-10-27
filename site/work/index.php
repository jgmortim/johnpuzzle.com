<?php
include('../includes/header.php');
include('../includes/footer.php');
include('../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Work</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, ARG, Software, Puzzle, ARGHouse, Weekend at the End of the World, Stolen Kingdom, Find Buzzy">
    <meta name="description" content="John Puzzle's professional project highlights">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/work/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/work.css') ?>">
</head>
<body>
<?php renderHeader('WORK'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > Work
</nav>
<main id="main-content" tabindex="-1">
    <section class="main-section">
        <h2>Weekend at the End of The World ARG</h2>
        <div class="work-item-content">
            <div class="work-image-wrapper">
                <img class="work-image" src="../images/weekend-poster.webp" alt="Movie poster for Weekend at the End of the World."/>
            </div>
            <div class="work-description-wrapper">
                <p>
                    <strong>Role</strong>: Puzzle design, web design<br>
                    <strong>Employer</strong>: ARGHouse<br>
                    <strong>In partnership</strong>: June Street Productions<br>
                    <strong>Website</strong>: <a href="https://www.weekendattheendoftheworld.com/" target="_blank">Launch Site</a>
                </p>
                <p>
                    <i>Weekend at the End of the World</i> is a horror-comedy film directed by Gille Klabin. In which, the primary
                    setting is a hunted cabin. Through my job at ARGHouse, I helped players experience that cabin for themselves via an
                    interactive point-and-click puzzle game. Players who completed the game were eligible to win props from the movie and
                    limited-run VHS copies. In addition to doing the programming for the point-and-click environment, I also designed a
                    number of the game's puzzles. Most significantly, the final puzzle of the game.
                </p>
                <p>
                    <span class="blink">></span>
                    <a href="/blog/weekend/" class="article-link">View Project Highlights</a>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="main-section">
        <h2>Stolen Kingdom // Find Buzzy ARG</h2>
        <div class="work-item-content">
            <div class="work-image-wrapper">
                <img class="work-image" src="../images/stolen-kingdom-poster.webp" alt="Movie poster for Stolen Kingdom."/>
            </div>
            <div class="work-description-wrapper">
                <p>
                    <strong>Role</strong>: Puzzle design<br>
                    <strong>Employer</strong>: ARGHouse<br>
                    <strong>In partnership</strong>: Antenna<br>
                    <strong>Website</strong>: <a href="https://www.findbuzzy.com/" target="_blank">Launch Site</a>
                </p>
                <p>
                    "Find Buzzy" was an ARG that promoted, and released alongside of, the <i>Stolen Kingdom</i> documentary. The film's
                    theatrical release included many official tour stops which would featured a post-show Q&A panel with the filmmakers
                    and producers, as well as distribution of physical "trailheads" for the 25 puzzles of the ARG. These trailheads took
                    many forms including postcards, pins, and cassette tapes. My role in bringing this ARG to life was primarily in
                    puzzle design. In this role, I had the opportunity to create numerous puzzles spanning a wide range of disciplines
                    and difficulties. Including the final, and most difficult, puzzle of the game.
                </p>
                <p>
                    > [Project Highlights Coming Soon]
                </p>
            </div>
        </div>
    </section>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>