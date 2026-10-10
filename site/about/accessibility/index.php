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
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../../js/index.js"></script>
</body>
</html>