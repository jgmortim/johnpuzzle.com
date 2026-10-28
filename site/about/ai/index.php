<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - AI Policy</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, AI">
    <meta name="description" content="AI policy for johnpuzzle.com">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/about/ai/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
</head>
<body>
<?php renderHeader('ABOUT'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > About > AI Policy
</nav>
<main id="main-content" tabindex="-1">
    <section class="main-section">
        <h2>Made Without AI</h2>
        <p>
            johnpuzzle.com has been created entirely by me, a human, without the use of AI. I didn't commission this website,
            I made it. That includes the code and the text content. No LLMs were used in the creation of this website.
        </p>
        <div>
            <blockquote cite="https://www.imdb.com/title/tt2664374/quotes/?item=qt7160739">
                <p>
                    “You know, your own imagination is far more wonderful than any computer could ever be. You know why? You’re a
                    living human being and a computer is just a machine. Human beings are far more wonderful than machines.”
                </p>
            </blockquote>
            <p>—Mister Rogers, <cite>Episode 1746 (1999)</cite></p>
        </div>
        <h3>Why No AI?</h3>
        <p>
            If you are curious why I, or anyone else, wouldn't want to use AI, NoAiList.org has put together an excellent catalog.
            You can read it here: <a href="https://noailist.org/why-no-ai/" target="_blank">https://noailist.org/why-no-ai/</a>.
        </p>
    </section>
    <hr>
    <section class="main-section">
        <h2>Disclaimers</h2>
        <h3>Team Projects</h3>
        <p>
            My blog features puzzles and projects that I worked on as part of a team. Any time I use some variation of "I made" or
            "I created", it means I personally made the item in question and I did so without any involvement from AI. However, for
            team projects, I can make no such promises regarding the work of others. In other words, the "made without AI" claim
            only encompasses my work.
        </p>
        <h3>Code</h3>
        <p>
            While I wrote nearly every line of code in this website, there will be occasional bits that were sourced or inspired by
            other people's code. I can't guarantee that every question and answer I read on Stack Overflow was authored by a
            human.
        </p>
        <h3>Gallery</h3>
        <p>
            The gallery contains images and screenshot from my participation in other ARGs and puzzle games. It should go without
            saying that I didn't create these images. Nor do I have any insight into how they were created.
        </p>
        <p>
            Photographs, however, are all real and were captured by humans. None of them have been modified by AI.
        </p>
    </section>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>