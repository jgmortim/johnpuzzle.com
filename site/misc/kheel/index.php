<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Kheel Cursors</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, Cursor, Mouse, Pointer, Kheel">
    <meta name="description" content="Custom mouse cursors">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/misc/kheel/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/cursor.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/gallery.css') ?>">
</head>
<body>
<?php renderHeader('MISC'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > Misc > Kheel Cursors
</nav>
<main id="main-content" tabindex="-1">
    <article>
        <section class="main-section">
            <h2>Kheel Mouse Cursors</h2>
            <div class="inline-image">
                <img src="logo.png" alt="Kheel logo">
            </div>
            <p>
                "Kheel" is the name of a custom set of mouse cursors I've slowly been designing. This project is far from finished,
                but the core of it is more or less done and available for review.
            </p>
            <p>
                Kheel is released under the
                <a href="https://creativecommons.org/licenses/by-nc/4.0/%7C" target="_blank">CC BY-NC 4.0 license.</a>
            </p>
            <p>
                This project is hosted in GitHub: <a href="https://github.com/jgmortim/kheel" target="_blank">repo</a>
            </p>
            <p>
                Download v0.0.1: <a href="https://github.com/jgmortim/kheel/releases/download/v0.0.1/kheel-0.0.1.zip"
                                    target="_blank">GitHub</a>,
                <a href="https://www.rw-designer.com/cursor-downloadset/kheel-v0-0-1.zip" target="_blank">RW Designer</a> (mirror)
            </p>
            <p>
                Give Feedback: <a href="https://github.com/jgmortim/kheel/discussions/17" target="_blank">v0.0.1 Discussion</a>
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Design philosophy</h2>
            <p>
                The one and only goal of this project is to create a tool that feels organic. In other words, if you weren't told you
                were using a custom cursor set, the idea shouldn't even occur to you. You don't normally think about your cursor;
                it's just a tool that you use. This is a tool, it should not be flashy, it should not draw your attention, it should
                just work, and you shouldn't think about it when you use it.
            </p>
            <p>
                To this end, the realm of design possibilities is limited in that any radical change to the cursors in use by
                Microsoft and Apple today would break the one rule.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Technical Requirements</h2>

            <p>This set will not be complete until all the following technical requirements are met:</p>
            <ol>
                <li>A cursor for all supported roles on Windows 10 and earlier.</li>
                <li>Each cursor will be available in 32x32, 48x48, 64x64, 96x96, and 128x128 pixels.</li>
                <li>Designs will be available in both "White with black outline" and "black with white outline" color schemes.</li>
                <li>Any chiral designs will be available in both left and right-handedness.</li>
            </ol>
        </section>
        <hr>
        <section class="main-section">
            <h2>Cursors</h2>
            <p>
                Since I am much more accustomed to Windows than Mac, I chose to default to the "white with black outline" color
                scheme that has been the default for Microsoft since Windows 1.0. That said, a version of this set will be available
                with an inverted colors scheme.
            </p>
            <h3>Default</h3>
            <div class="cursor-showcase-block">
                <figure class="cursor-showcase">
                    <img src="/images/cursors/arrow32.png" alt="arrow 32px">
                    <img src="/images/cursors/arrow48.png" alt="arrow 48px">
                    <img src="/images/cursors/arrow64.png" alt="arrow 64px">
                    <figcaption>Normal Select<br>32px, 48px, 64px</figcaption>
                </figure>
            </div>
            <p>
                I kept the default cursor as an arrow tilted at 22.5°; the angle established by Xerox's Palo Alto Research Center
                when they released the Xerox Alto in 1973 and the same angle used today by both Windows and Apple. After 50 years of
                dominance, any other shape or angle would feel alien to most computer users.
            </p>
            <p>
                After many iterations, I ended up with a design that blends features and concepts of the various mice employed by
                Microsoft and Apple over the years. My design has a shorter tail which is in line with every version of Mac since the
                Apple System 1.0 and every version of Windows since Windows Vista. Its larger head size is comparable with Windows
                Vista and later. It features antialiasing like what was introduced with Windows Vista and macOS 10.4 Tiger. And it
                lacks shadows while using a minimal gradient as seen in Windows 8 and later.
            </p>
            <p>
                However, unlike Microsoft and Apple, my design features a tail that extends at the same angle as the pointer (22.5°)
                instead of that irregular nonsense they went with. And unlike Windows, my design has a boarder thickness that scales
                with the cursor instead of remaining at 1 px.
            </p>
            <h3>Loading</h3>
            <div class="cursor-showcase-block">
                <figure class="cursor-showcase">
                    <img src="/images/cursors/working32.png" alt="working 32px">
                    <img src="/images/cursors/working48.png" alt="working 48px">
                    <img src="/images/cursors/working64.png" alt="working 64px">
                    <figcaption>Working in Background<br>32px, 48px, 64px</figcaption>
                </figure>
                <figure class="cursor-showcase">
                    <img src="/images/cursors/busy32.png" alt="busy 32px">
                    <img src="/images/cursors/busy48.png" alt="busy 48px">
                    <img src="/images/cursors/busy64.png" alt="busy 64px">
                    <figcaption>Busy<br>32px, 48px, 64px</figcaption>
                </figure>
            </div>
            <p>
                The loading cursors ("busy" and "working in background" in Windows) is the one area with less rigidly established
                norms. While almost always animated, these have been represented with a variety of symbols over the years including
                spinning disks and rings, hourglasses, and wristwatches, among others. Often, the "working in background" cursor will
                feature a shrunken version of the "busy" cursor placed to the side of the default arrow cursor. I wanted to stick to
                that design motif, but with a slight variation.
            </p>
            <p>
                After experimenting with more complex animated designs that always seemed to go against our design philosophy, I
                eventually settled on a rotating dot matrices. The "busy" cursor is a 3x3 grid with a center dot that is always on
                and a line of five other dots that cycle around the center. The "working in background" cursor features a
                proportional 2x2 grid where a single dot is always off, and it moves around the grid in a circle. I quite like that
                it matches the motif without relying on a scaling transformation.
            </p>
            <p>
                I experimented with the designs cycling once per second (1 Hz), and that just felt too slow. I think, particularly
                when using a fast computer, you want to feel like your PC is doing things fast, especially when you're waiting on it.
                And even though there is no connection between your cursor's frequency and your CPU, a fast spinner feels less
                painful to watch than a slow one. So I tried faster speeds and eventually settled on 1.25 Hz as anything faster
                started to feel obnoxious.
            </p>
            <h3>Precision Select</h3>
            <p>
                I have opted to stick with the cross-hair design used by Windows; however, Windows has decided to scale the thickness
                of the cursor when used in high DPI settings. The beams are 8 px thick in their 128x128 version. If you want
                pixel-perfect precision, why would you make the cursor more than 1 px wide? And further, why an even number of
                pixels? The hot spot can't be placed in the actual center if you make it an even number. In my version, I've remedied
                these issues by keeping the beams 1 px wide no mater what size the cursor is. They grow in length in the larger
                resolutions, but not in width.
            </p>
            <h3>Other</h3>
            <p>
                Designs for the other roles are in the works but are not yet ready for review.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Acknowledgments</h2>
            <ol>
                <li>The following software was used in the creation of this project:
                    <ol>
                        <li>
                            <a href="https://www.rw-designer.com/cursor-maker">RealWorld Cursor Editor</a> versions 2013.1 and 2023.1
                            which are licensed under the
                            <a href="https://www.rw-designer.com/cursor-license">RealWorld Cursor Editor license</a> and are free for
                            both personal and commercial use.
                        </li>
                        <li>
                            <a href="https://www.rw-designer.com/image-editor">RealWorld Paint</a> version 2013.1 which is licensed
                            under the <a href="https://www.rw-designer.com/paint-donate">RealWorld Paint license</a> and is free for
                            both personal and commercial use.
                        </li>
                    </ol>
                </li>
                <li>
                    The Kheel logo uses the <a href="https://www.1001fonts.com/signika-negative-font.html">Signika Negative</a>
                    typeface by
                    <a href="https://www.1001fonts.com/users/ancymonic/">Anna Giedryś</a>. Signika Negative is licensed under the
                    <a href="https://scripts.sil.org/OFL">SIL Open Font License (OFL)</a> and is free for both personal and commercial
                    use.
                </li>
            </ol>
        </section>
        <hr>
        <section class="main-section">
            <h2>Works cited</h2>
            <ol>
                <li>de Boar, Michael (November 5, 2018).
                    <i><a href="https://www.youtube.com/watch?v=YThelfB2fvg">Mouse Cursor History (and why I made my own)</a></i>
                    (Video).
                    <p class="indent-1">
                        Michael (Posy) de Boar's video contains an excellent breakdown on mouse cursor history.
                    </p>
                </li>
            </ol>
        </section>
    </article>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>

