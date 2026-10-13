<?php
include('../../includes/header.php');
include('../../includes/footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Accessibility</title>
    <meta charset="UTF-8">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/about/accessibility/">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/accessibility.css">
</head>
<body>
<?php renderHeader('ABOUT'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > About > Accessibility
</nav>
<main id="main-content" tabindex="-1">
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
        <h3>Web Content Accessibility Guidelines (WCAG) 2.2 Conformance</h3>
        <p>
            See <a href="/about/accessibility/wcag/">WCAG 2.2</a> for conformance claims and tracking.
        </p>
    </section>
    <section>
        <h3>Light Weight</h3>
        <p>
            Over time, many companies seemed to have forgotten that not everyone has a fast internet connection. High resolution
            images and bloated frameworks have become the norm. But here at johnpuzzle.com, I recognize that all data comes with a
            cost.
        </p>
        <p>
            For that reason, I have made the decision to adopt what I'm calling the 5-1mb limit. Meaning every page on this site
            must have a page weight that fits into one of two categories. For pages that are primarily text, the limit is 1mb. This
            limit would be lower, but these pages can contain an image or two. And for pages that are primarily focused on image,
            audio, or video media, the limit is 5mb. Which is to say that each page can be loaded by your browser with 5mb or less
            of data transfer.
        </p>
    </section>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../../js/index.js"></script>
</body>
</html>