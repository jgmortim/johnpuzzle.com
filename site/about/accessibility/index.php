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
    <div id="breadcrumbs">
        <a href="/">Home</a> > About > Accessibility
    </div>
    <hr>
    <h2>Accessibility</h2>
    <hr>
    <p>
        This website is still in development, but I will do my best to ensure johnpuzzle.com adheres to accessibility standards
        to the best of my ability.
    </p>
    <h3>Web Content Accessibility Guidelines (WCAG) 2.2 Compliance</h3>
    <h4>Color Contrast</h4>
    <p>
        All visual presentation of text and images of text on johnpuzzle.com meet the WCAG 2.2
        <a href="https://www.w3.org/TR/WCAG22/#contrast-minimum" target="_blank">Success Criterion 1.4.3 Contrast (Minimum)</a>
        (AA) by having a contrast ratio of at least 4.5:1. And some cases, meets the
        <a href="https://www.w3.org/TR/WCAG22/#contrast-enhanced" target="_blank">Success Criterion 1.4.6 Contrast (Enhanced)</a>
        (AAA) by having a contrast ratio of at least 7:1.
    </p>
    <p>All color combinations currently in use are detailed in the table bellow</p>
    <table style="min-width: 50%">
        <tr>
            <th>Foreground</th>
            <th>Background</th>
            <th>Ratio</th>
            <th>Usage</th>
            <th>Rating</th>
        </tr>
        <tr>
            <td><img class="color-swatch" src="https://placehold.co/10x10/80ffd5/80ffd5" alt="A 10x10 square in the hex color #ff5a00"/> #80ffd5</td>
            <td><img class="color-swatch" src="https://placehold.co/10x10/050505/050505" alt="A 10x10 square in the hex color #050505"/> #050505</td>
            <td>16.68</td>
            <td>Headings, link text, UI elements</td>
            <td>AAA</td>
        </tr>
        <tr>
            <td><img class="color-swatch" src="https://placehold.co/10x10/ff5a00/ff5a00" alt="A 10x10 square in the hex color #ff5a00"/> #ff5a00</td>
            <td><img class="color-swatch" src="https://placehold.co/10x10/050505/050505" alt="A 10x10 square in the hex color #050505"/> #050505</td>
            <td>6.52</td>
            <td>Normal text</td>
            <td>AA</td>
        </tr>
    </table>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../../js/index.js"></script>
</body>
</html>