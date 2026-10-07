<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/images.php');

$photos = [
    [
        'src' => '../../images/weekend-ca.webp',
        'alt' => '',
        'caption' => 'My original paper concept vs the final design for the cipher wheel.'
    ],
    [
        'src' => '../../images/weekend-original-wheel.webp',
        'alt' => '',
        'caption' => 'Early version of the cipher wheel with the poem still included.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John Puzzle - Work</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/blog/weekend/">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/gallery.css">
</head>
<body>
<?php renderHeader('BLOG'); ?>
<main>
    <div id="breadcrumbs">
        <a href="/">Home</a> > <a href="/blog/">Blog</a> > Weekend at the End of the World
    </div>
    <p>Published: 2026-10-03</p>
    <hr>
    <h2>0 // Project Highlight: Weekend at the End of The World</h2>
    <hr>
    <p>
        <i>Weekend at the End of the World</i> is a horror-comedy film directed by Gille Klabin. In which, the primary setting
        is a hunted cabin. Through my job at ARGHouse, I helped players experience that cabin for themselves via an interactive
        point-and-click puzzle game (which you can <a href="https://www.weekendattheendoftheworld.com/" target="_blank">still play</a>).
        Players who completed the game were eligible to win props from the movie and limited-run VHS copies.
        In addition to doing the programming for the point-and-click environment, I also designed a number of the game's puzzles.
        Most significantly, the final puzzle of the game.
    </p>
    <br>
    <video width="90%" autoplay loop controls muted style="display: block; margin: 0 auto;">
        <source src="../../videos/weekend-highlight.webm" type="video/webm">
    </video>
    <p>
        Using the Twine engine as a base, I combined behind-the-scenes stills and 3D objects — created by the other talented folks
        at ARGHouse — to bring the film's hunted cabin to life. Players were able to navigate both inside and out by clicking on
        doorways and objects around the scene. As they solved puzzles, more areas would open up and additional objects would become
        available to interactive with.
    </p>
    <p>
        One of my favorite mechanics was the ability to turn the seven individual lamps on and off in the main room of the cabin.
        Early on in the game, turning off all the lamps would trigger a jump scare. However, these lamps would serve a purpose in
        final puzzle of the game. Once the final puzzle was reached, the jump scare mechanic was removed to aid players in
        discovering a second secret function of the lamps. One that could only be utilized with the aid of an additional artifact
        found within the cabin.
    </p>
    <video width="90%" autoplay loop controls muted style="display: block; margin: 0 auto;">
        <source src="../../videos/weekend-final-puzzle.webm" type="video/webm">
    </video>
    <p>
        The final puzzle consisted of players finding a cipher wheel and needing to use the environment to spell a word with
        bigrams. To enter a bigram, the players would turn lamps on and off in the main room. Once the proper sequence
        was entered, they would ring the bell in the grandfather clock to lock-in the pattern. If they entered the right sequence,
        the associated bigram would appear on the screen. Spelling out the code word two letters at a time.
    </p>
    <p>
        Given that there were seven lamps in the room, my initial idea for this puzzle was to use the original 7-bit ASCII encoding;
        with the lamps acting as bits: off for 0 and on for 1. However, ASCII encoding felt a bit out of place for a haunted cabin.
        So the next thought was to use an original mapping, which would require us to create an artifact for the players to find
        with said mapping. I felt a cipher wheel was more aesthetically pleasing than a chart or table, and besides, we didn't need
        all 128 possible values anyway.
    </p>
    <p>
        Instead of doing single letter mappings, bigrams made for a more interesting puzzle by allowing players to work out possible
        words that could be spelled instead of being given the code word directly. Or in other words, they had to search possible
        anagrams using the available letter pairs.
    </p>
    <p>
        In doing so, players would discover the word "FRIENDSHIP" — an important theme in the movie — was a word that could be
        spelled with the available bigrams. And upon entering it, they would receive the password need to claim a prize.
    </p>
    <div style="max-width: 900px; margin-left: auto; margin-right: auto;">
        <?php renderPhotoGallery($photos, 2) ?>
    </div>
    <p>
        As a few players discovered by digging through the website's files, I originally wrote a poem to be included in the middle
        of the cipher wheel:
    </p>
    <blockquote>
        Seven fires; left to right<br>
        special order you must light<br>
        ring the bell to seal the code<br>
        a full sequence; knowledge bestowed
    </blockquote>
    <p>
        This was later replaced with a clock motif. Removing the poem increased the puzzle's difficultly and forced players to
        experient more in order to find the solution. While the lamp connection was still possible due to their being seven of them;
        the same as the number of bits for each bigram. We still needed something to indicate the importances of the bell in
        the grandfather clock. Which is why the clock motif was chosen.
    </p>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../../js/index.js"></script>
</body>
</html>