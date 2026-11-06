<?php
include('../includes/header.php');
include('../includes/footer.php');
include('../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Misc</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, Misc, Secret, Cursors">
    <meta name="description" content="Misc content">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/misc/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/gallery.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/cursor.css') ?>">
</head>
<body>
<?php renderHeader('MISC'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > Misc
</nav>
<main id="main-content" tabindex="-1">
    <section class="main-section">
        <h2>Misc</h2>
        <p>
            Welcome to the miscellaneous page. Anything that doesn't fit somewhere else can be found here.
        </p>
    </section>
    <hr>
    <section class="main-section">
        <h2>Secret Pages</h2>
        <p>
            Being a puzzle maker, it should come as no surprise that I have hidden secret pages on this site. And I'll be adding more
            as time goes on. You'll know when you found one because the page will generally say "You found a secret page" and
            the site header will update in a special way. Feel free to look for them.
        </p>
        <p>Secret Page Hints:</p>
        <ol>
            <li>Double click</li>
            <li>Not Found, how'd you get it this high?</li>
            <li>Not Found</li>
            <li>Method Not Allowed</li>
            <li>RFC 2324 section-2.3.2</li>
        </ol>
    </section>
    <hr>
    <section class="main-section">
        <h2>Kheel Mouse Cursors</h2>
        <div class="cursor-showcase-block">
            <figure class="cursor-showcase">
                <img src="/images/cursors/arrow48.png" alt="arrow 48px">
                <img src="/images/cursors/working48.png" alt="working 48px">
                <img src="/images/cursors/busy48.png" alt="busy 48px">
                <figcaption>Left-to-right:<br>Normal Select<br>Working in Background<br>Busy</figcaption>
            </figure>
        </div>
        <p>
            "Kheel" is the name of a custom set of mouse cursors I've slowly been designing. This project is far from finished,
            but the core of it is more or less done and available for review.
        </p>
        <p>
            <span class="blink">&gt;</span>
            <a href="/misc/kheel/">View Project</a>
        </p>
    </section>
    <hr>
    <section class="main-section">
        <h2>About</h2>
        <ul>
            <li><a href="/about/ai/">Made Without AI</a></li>
            <li><a href="/about/privacy-policy/">Privacy Policy</a></li>
            <li><a href="/about/accessibility/">Accessibility</a></li>
        </ul>
    </section>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>