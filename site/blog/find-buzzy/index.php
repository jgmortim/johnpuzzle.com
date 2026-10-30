<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/images.php');
include('../../includes/assets.php');

$puzzle24photos = [
    [
        'src' => '../../images/buzzy-24-ig-1.webp',
        'alt' => '',
        'caption' => 'The first Instagram photo with the QR code.'
    ],
    [
        'src' => '../../images/buzzy-24-ig-2.jpg',
        'alt' => '',
        'caption' => 'The second Instagram photo with hidden imgconceal data.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Find Buzzy</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, ARG, Blog, Find Buzzy, Stolen Kingdom, ARGHouse">
    <meta name="description" content="Project highlights from the Stolen Kingdom ARG: Find Buzzy">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/blog/find-buzzy/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/gallery.css') ?>">
</head>
<body>
<?php renderHeader('BLOG'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > <a href="/blog/">Blog</a> > Find Buzzy
</nav>
<main id="main-content" tabindex="-1">
    <article>
        <h2>Project Highlights: Find Buzzy</h2>
        <p>Published: 2026-10-29</p>
        <hr>
        <p>
            "Find Buzzy" was an ARG that promoted, and released alongside of, the
            <a href="https://www.stolenkingdomfilm.com/" target="_blank">Stolen Kingdom</a> documentary. The film's
            theatrical release included many official tour stops which featured a post-show Q&A panel with the filmmakers and
            producers, as well as distribution of physical "trailheads" for the 25 puzzles of the ARG. These trailheads took many
            forms including postcards, pins, and cassette tapes. My role in bringing this ARG to life was primarily in puzzle design.
            In this role, I had the opportunity to create numerous puzzles spanning a wide range of disciplines and difficulties.
            Including the final, and most difficult, puzzle of the game.
        </p>
        <hr>
        <section class="main-section">
            <h2>Puzzle 25</h2>
            <h3>Premise</h3>
            <div style="float: right; max-width: 30%; margin: .5rem">
                <?php renderExpandableImage(
                    '../../images/buzzy-25.png',
                    'The image from Find Buzzy Puzzle 25',
                    'The image from Find Buzzy Puzzle 25')
                ?>
            </div>
            <p>
                For Puzzle 25, I was tasked with a creating a cipher that could be released at the start of the game, but which would
                be uncrackable without additional clues that could be discovered throughout the run of the game. Something that,
                in practice, no computer could brute force. Something that would keep the players talking and theorizing about for
                a long time. On May 9, the Find Buzzy ARG launched with four puzzles immediately available. Three of them would be
                solved that day, but Puzzle 25 wouldn't be solved for another four months.
            </p>
            <p>
                The puzzle I designed was a Vigenère cipher using a one-time pad as the key. The key itself could be found in the
                <a href="https://libraryofbabel.info/" target="_blank">Library of Babel</a>. For the uninitiated, the
                <i>Library of Babel</i> is a website that contains all possible pages of 3200 characters (using a-z, space, comma, and period).
                In other words, this library contains every book that has ever been written, will be written, or could be written
                (in English). Within this infinite library, the key can be found in Hexagon: "<code>c0de</code>", Wall: <code>2</code>,
                Shelf: <code>3</code>, Volume: <code>19</code>, on Page 1.
            </p>
            <p>
                In order to find this needle in the haystack, the players would need to find clues hidden through the game.
            </p>
            <h3>The Clues</h3>
            <h4>Trailer</h4>
            <p>
                The very first clue regarding Puzzle 25 came in the form of the
                <a href="https://www.youtube.com/watch?v=puMg9iGs-dg" target="_blank">trailer for the ARG</a>. This trailer was
                played in theaters before showings of <i>Stolen Kingdom</i> and shared on social media. In the trailer, the grid of all
                25 <i>Find Buzzy</i> puzzles is shown in its initial state: four yellow (available, but unsolved) puzzles, and 21 red (locked)
                puzzles. One-by-one, all the red and yellow puzzle change to green (solved), until finally
                only 25 remained yellow. Then after a pause, it too switched to green. Thus establishing that Puzzle 25 would be both
                difficult and likely the final puzzle to be solved.
            </p>
            <h4>Puzzle 14</h4>
            <div style="float: right; max-width: 15%; margin: .5rem">
                <?php renderExpandableImage(
                    '../../images/buzzy-secrets.png',
                    'secrets.png',
                    'secrets.png')
                ?>
            </div>
            <p>
                The image in <a href="https://findbuzzy.com/andpixiedust-6n3a9llcy/" target="_blank">Puzzle 14</a> contained a few
                ciphers to solve, but there was more hidden beneath the surface. The image contained an unrelated secret. Using
                <a href="https://www.openstego.com/" target="_blank">OpenStego</a>, a second image can be extracted from the first.
                "secrets.png" contained a 5x5 grid of squares. Most of them were red. Squares 4 and 13 were green, and 25 was yellow.
                This grid represented the puzzle grid on the ARG's home page, and it revealed a connection between Puzzles 4, 13,
                and 25. Specifically, that 4 and 13 needed to be solved before 25.
            </p>
            <h4>Puzzle 4</h4>
            <p>
                The clue hidden in Puzzle 14 definitively showed the relevance of Puzzle 4, but even before that clue was found, a
                connection could be made between 4 and 25. In Puzzle 25, Walt's eyes are covered with a black bar. Likewise in
                Puzzle 4, Buzzy's eyes are also covered with a black bar.
            </p>
            <p>
                The solution in <a href="https://findbuzzy.com/nothingisimpossible-21k9dj9wa/" target="_blank">Puzzle 4</a>, was
                "C0DE2319" (with a zero instead of an o). Which is a reference to the film <i>Monsters Inc</i>. This was
                simultaneously the identifiers used to find the key for Puzzle 25. Hexagon: <code>c0de</code>, Wall: <code>2</code>,
                Shelf: <code>3</code>, and Volume: <code>19</code>.
            </p>
            <h4>Puzzle 13</h4>
            <p>
                <a href="https://findbuzzy.com/youcontrolyourdestiny-i6gsi75a9c/" target="_blank">Puzzle 13</a> took players into
                the <i>Library of Babel's</i> Image Archive. Which is similar to the text section, but it contains every possible
                image. With the secret image in Puzzle 14 revealing Puzzle 13's relevance, it didn't take players long to start
                searching the <i>Library of Babel</i> again.
            </p>
            <h4>Puzzle 24</h4>
            <p>
                The trailhead for
                <a href="https://findbuzzy.com/communicationisthebeginningofunderstanding-px89sk91wd/" target="_blank">Puzzle 24</a>
                took players down a long digital scavengers hunt (as detailed in the section below). One step in that process was
                running the code "fndbzzy24" on the ARGHouse website. As a few curious players found, if you ran the code "fndbzzy25"
                instead, something else would happen. The clock on the website would change to 23:19 and the minutes would stop
                ticking by. This clue pointed back to the solution from Puzzle 4.
            </p>
            <h3>Putting it all together</h3>
            <p>
                The <i>Library of Babel</i> from Puzzle 13 combined with the solution from Puzzle 4, led players to the one-time pad
                needed to decode the cipher in Puzzle 25. Now, if you think this solution requires a leap of logic, you're not wrong.
                We actually had more clues planned, including social media postings and even hiding something on the Blu-ray release
                of <i>Stolen Kingdom</i>, but none of those were needed. The players were able to use the clues laid out above to
                successfully decode the cipher exactly four months after it was first released.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Puzzle 24 Trailhead</h2>
            <p>
                Puzzle 24 was one of the few puzzles to feature a fully digital trailhead. While I didn't create Puzzle 24, I did
                create the trailhead used to reach it, which started on Instagram with a pair of posts shared by @arg.house,
                @stolenkingdomfilm, and @antennareleasing.
                The <a href="https://www.instagram.com/p/DaBHQD2hpuh/" target="_blank">first post</a> contained a partially obscured
                QR code, which could be cleaned up to reveal "findbuzzy.com/crimson-clupea-harengus". A valid url, but the page
                labeled itself as a red herring.
            </p>
            <p>
                In the <a href="https://www.instagram.com/p/DaBiqE3Aa6Z/" target="_blank">second post</a>, faint text could be read
                in the left margins of the image, which read "imgconceal" — the name of a steganography tool. Typically,
                steganographic data is destroyed by social media sites upon upload. Metadata gets stripped away and images get
                automatically compressed and converted to other formats to reduce files sizes. Finding a steganographic technique,
                and creating a suitable cover image, that could survive this compression took a bit of experimentation. But it was
                worth the effort to achieve a result often considered impossible. With the image downloaded, players could use
                <a href="https://tbpaolini.github.io/imgconceal/" target="_blank">imgconceal</a> with the password
                "crimson-clupea-harengus" to extract a text file called "run.txt". This file's only contents was the text
                "fndbzzy24".
            </p>
            <div style="max-width: 600px; margin-left: auto; margin-right: auto;">
                <?php renderPhotoGallery($puzzle24photos, 2) ?>
            </div>
            <p>
                Going to arghouse.com, which is themed to look like a Windows 95 desktop, players opened the run dialog (as hinted by the filename)
                from the start menu
                and entered the command "fndbzzy24". The wallpaper on the site then changed to one with a <i>Stolen Kingdom</i> theme,
                the clock changed to midnight (a clue to used once past the trailhead) and Clippy popped up and said
                "SilentEye" —  another steganography program. Players then took the wallpaper and ran it through
                <a href="https://achorein.github.io/silenteye/" target="_blank">SilentEye</a> with a blank password. Which
                extracted a message revealing the URL for
                <a href="https://findbuzzy.com/communicationisthebeginningofunderstanding-px89sk91wd/" target="_blank">Puzzle 24</a>.
            </p>
            <video width="90%" autoplay loop controls muted style="display: block; margin: 0 auto;">
                <source src="../../videos/buzzy-24-arghouse.webm" type="video/webm">
<!--                <track-->
<!--                        kind="captions"-->
<!--                        src="../../videos/vtt/weekend-final-puzzle.vtt"-->
<!--                        srclang="en"-->
<!--                />-->
            </video>
        </section>
        <hr>
        <section class="main-section">
            <h2>Puzzle 22 Trailhead</h2>
            <img src="../../images/buzzy-22-cassettes.webp" class="inline-img" style="float: right; max-height: 200px; margin: .5rem" alt="Image of cassette tapes from the Find Buzzy ARG"/>
            <p>
                <a href="https://findbuzzy.com/listenwithyourheartyouwillunderstand-h9syb532/" target="_blank">Puzzle 22</a> was one
                of many to feature a physical trailhead which could be found at one of the theatrical showing of
                <i>Stolen Kingdom</i> included in the film's official Q&A Tour. However, unlike the other physical trails, I made
                something more involved for the tour stop in Birmingham, MI.
            </p>
            <p>
                I made audio cassettes and hid them around the Birmingham 8 theater in the hour leading up to the showing. The
                cassettes were packaged with custom labels and cases. A total of five tapes made it into the hands of players that
                night. But it wasn't until the following day that one of those players solved the trailhead.
            </p>
            <p>
                The cassettes were all identical and each contained the URL for Puzzle 22 which could only be found by viewing the
                spectrogram of the audio.
            </p>
            <p>
                As a side note, I also create 2 other spectrogram based puzzles for <i>Find Buzzy</i> which you can read about in my
                <a href="/blog/spectrograms">spectrogram</a> blog post.
            </p>

            <img src="../../images/buzzy-22-trailhead.webp" class="inline-img" alt="Screenshot from Audacity showing the spectrogram of the contents on the Find Buzzy cassettes"/>
        </section>

<!--   TODO puzzle 9 - calendar puzzle
     puzzle 16 - stegosaurus
      21 wail metabolities openpuff-->
    </article>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>