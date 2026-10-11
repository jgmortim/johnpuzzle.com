<?php
include('../../includes/header.php');
include('../../includes/footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John Puzzle - Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/about/accessibility/">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/accessibility.css">
</head>
<body>
<?php renderHeader('ABOUT'); ?>
<main>
    <nav id="breadcrumbs">
        <a href="/">Home</a> > About > Accessibility
    </nav>
    <hr>
    <h2>Accessibility</h2>
    <hr>
    <section>
        <p>
            This website is still in development, but I will do my best to ensure johnpuzzle.com adheres to accessibility standards
            to the best of my ability.
        </p>
    </section>
    <section>
        <h3>Web Content Accessibility Guidelines (WCAG) 2.2 Compliance</h3>
        <p>
            I am actively working on meeting all the Level A criteria. Compliance is tracked on
            <a href="/about/accessibility/wcag/">its own page</a>.
        </p>
    </section>
    <section>
        <h3>Zero Bloat</h3>
        <p>
            Over time, many companies seemed to have forgotten that not everyone has a fast internet connection. High resolution
            images and bloated frameworks have become the norm. But here at johnpuzzle.com, I recognize that all data comes with a
            cost.
        </p>
        <p>
            For that reason, I have made the decision to ensure that every page on this site has a weight of 5mb or less. Which is
            to say that each page can be loaded by your browser with 5mb or less of data transfer. I would have chosen a lower
            limit, but this site features a lot a media. And even when reducing dimensions and using compression, there is only so
            much I do.
        </p>
    </section>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../../js/index.js"></script>
</body>
</html>