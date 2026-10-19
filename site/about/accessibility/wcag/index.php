<?php
include('../../../includes/header.php');
include('../../../includes/footer.php');
include('../../../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - WCAG</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, Accessibility, Web Content Accessibility Guidelines, WCAG">
    <meta name="description" content="Web Content Accessibility Guidelines (WCAG) 2.2 conformance of johnpuzzle.com">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/about/accessibility/wcag/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/accessibility.css') ?>">
</head>
<body>
<?php renderHeader('ABOUT'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > About > <a href="/about/accessibility/">Accessibility</a> > WCAG
</nav>
<main id="main-content" tabindex="-1">
    <section class="main-section">
        <hr>
        <h2>Web Content Accessibility Guidelines (WCAG) 2.2 Conformance</h2>
        <hr>
        <p>
            <strong>Web Content Accessibility Guidelines 2.2</strong>: <a href="https://www.w3.org/TR/WCAG22/" target="_blank">www.w3.org/TR/WCAG22/</a><br>
            <strong>Conformance level satisfied</strong>: Level A<br>
            <strong>Date</strong>: 2026-10-12<br>
            <strong>Scope</strong>: All pages listed in the <a href="/sitemap.xml">sitemap</a>. Secret content excluded, see disclaimer below
        </p>
        <p>
            This website is still being developed, but I am making an effort to adhere to the WCAG 2.2 standards.
            Tracking of WCAG 2.2 conformance is detailed below.
        </p>
        <h3>Disclaimer</h3>
        <p>
            As a puzzle maker, I will occasionally hide things in this website. These things are meant to be hidden and not easily
            discovered (which is why they are excluded from the sitemap). As a result, they are likely to not meet accessibility
            standards. These hidden features will never interfere with the accessibility of this site's primary content. However,
            these hidden features are not considered by the conformance claims made on this page.
        </p>
    </section>
    <section class="main-section">
        <hr>
        <h2>1 Perceivable</h2>
        <hr>
        <p>Information and user interface components must be presentable to users in ways they can perceive.</p>
        <table style="min-width: 50%">
            <tr>
                <th>Success Criterion</th>
                <th>Level</th>
                <th>Met</th>
                <th>Notes</th>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">1.1 Text Alternatives</th>
            </tr>
            <tr>
                <td>1.1.1 Non-text Content</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">1.2 Time-based Media</th>
            </tr>
            <tr>
                <td>1.2.1 Audio-only and Video-only (Prerecorded)</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.2 Captions (Prerecorded)</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>There is no audio on this site</td>
            </tr>
            <tr>
                <td>1.2.3 Audio Description or Media Alternative (Prerecorded)</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.4 Captions (Live)</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>There is no audio on this site</td>
            </tr>
            <tr>
                <td>1.2.5 Audio Description (Prerecorded)</td>
                <td>AA</td>
                <td>&#x274C;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.6 Sign Language (Prerecorded)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.7 Extended Audio Description (Prerecorded)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.8 Media Alternative (Prerecorded)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.2.9 Audio-only (Live)</td>
                <td>AAA</td>
                <td>&#9989;</td>
                <td>This site does not utilize live media of any kind.</td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">1.3 Adaptable</th>
            </tr>
            <tr>
                <td>1.3.1 Info and Relationships</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.3.2 Meaningful Sequence</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.3.3 Sensory Characteristics</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.3.4 Orientation</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.3.5 Identify Input Purpose</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>This site has no input fields</td>
            </tr>
            <tr>
                <td>1.3.6 Identify Purpose</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">1.4 Distinguishable</th>
            </tr>
            <tr>
                <td>1.4.1 Use of Color</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.2 Audio Control</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>There is no audio on this site</td>
            </tr>
            <tr>
                <td>1.4.3 Contrast (Minimum)</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>See notes on color contrast below</td>
            </tr>
            <tr>
                <td>1.4.4 Resize Text</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.5 Images of Text</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.6 Contrast (Enhanced)</td>
                <td>AAA</td>
                <td>&#x274C;</td>
                <td>See notes on color contrast below</td>
            </tr>
            <tr>
                <td>1.4.7 Low or No Background Audio</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.8 Visual Presentation</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.9 Images of Text (No Exception)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.10 Reflow</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.11 Non-text Contrast</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.12 Text Spacing</td>
                <td>AA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1.4.13 Content on Hover or Focus</td>
                <td>AA</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
    <section class="main-section">
        <hr>
        <h2>2 Operable</h2>
        <hr>
        <p>User interface components and navigation must be operable.</p>
        <table style="min-width: 50%">
            <tr>
                <th>Success Criterion</th>
                <th>Level</th>
                <th>Met</th>
                <th>Notes</th>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">2.1 Keyboard Accessible</th>
            </tr>
            <tr>
                <td>2.1.1 Keyboard</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.1.2 No Keyboard Trap</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.1.3 Keyboard (No Exception)</td>
                <td>AAA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.1.4 Character Key Shortcuts</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">2.2 Enough Time</th>
            </tr>
            <tr>
                <td>2.2.1 Timing Adjustable</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>No time limits in use</td>
            </tr>
            <tr>
                <td>2.2.2 Pause, Stop, Hide</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>Some pages have blinking cursors, but they stop after 5 seconds.</td>
            </tr>
            <tr>
                <td>2.2.3 No Timing</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.2.4 Interruptions</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.2.5 Re-authenticating</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.2.6 Timeouts</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">2.3 Seizures and Physical Reactions</th>
            </tr>
            <tr>
                <td>2.3.1 Three Flashes or Below Threshold</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.3.2 Three Flashes</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.3.3 Animation from Interactions</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">2.4 Navigable</th>
            </tr>
            <tr>
                <td>2.4.1 Bypass Blocks</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.2 Page Titled</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.3 Focus Order</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.4 Link Purpose</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.5 Multiple Ways</td>
                <td>AA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.6 Headings and Labels</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.7 Focus Visible</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.8 Location</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.9 Link Purpose (Link Only)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.10 Section Headings</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.11 Focus Not Obscured (Minimum)</td>
                <td>AA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.12 Focus Not Obscured (Enhanced)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.4.13 Focus Appearance</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">2.5 Input Modalities</th>
            </tr>
            <tr>
                <td>2.5.1 Pointer Gestures</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>Site has no custom gestures</td>
            </tr>
            <tr>
                <td>2.5.2 Pointer Cancellation</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>Site has no multipoint or path-based gestures</td>
            </tr>
            <tr>
                <td>2.5.3 Label in Name</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>2.5.4 Motion Actuation</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>No motion actuation in use</td>
            </tr>
            <tr>
                <td>2.5.5 Target Size (Enhanced)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.5.6 Concurrent Input Mechanisms</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.5.7 Dragging Movements</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>This site does not use dragging movements</td>
            </tr>
            <tr>
                <td>2.5.8 Target Size (Minimum)</td>
                <td>AA</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
    <section class="main-section">
        <hr>
        <h2>3 Understandable</h2>
        <hr>
        <p>Information and the operation of the user interface must be understandable.</p>
        <table style="min-width: 50%">
            <tr>
                <th>Success Criterion</th>
                <th>Level</th>
                <th>Met</th>
                <th>Notes</th>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">3.1 Readable</th>
            </tr>
            <tr>
                <td>3.1.1 Language of Page</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.1.2 Language of Parts</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.1.3 Unusual Words</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.1.4 Abbreviations</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.1.5 Reading Level</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.1.6 Pronunciation</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">3.2 Predictable</th>
            </tr>
            <tr>
                <td>3.2.1 On Focus</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.2.2 On Input</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.2.3 Consistent Navigation</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.2.4 Consistent Identification</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.2.5 Change on Request</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.2.6 Consistent Help</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">3.3 Input Assistance</th>
            </tr>
            <tr>
                <td>3.3.1 Error Identification</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>No input fields in use</td>
            </tr>
            <tr>
                <td>3.3.2 Labels or Instructions</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>No user input fields on site</td>
            </tr>
            <tr>
                <td>3.3.3 Error Suggestion</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>No user input fields on site</td>
            </tr>
            <tr>
                <td>3.3.4 Error Prevention (Legal, Financial, Data)</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>No legal commitments or financial transactions on site</td>
            </tr>
            <tr>
                <td>3.3.5 Help</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.3.6 Error Prevention (All)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.3.7 Redundant Entry</td>
                <td>A</td>
                <td>&#9989;</td>
                <td>No user input fields on site</td>
            </tr>
            <tr>
                <td>3.3.8 Accessible Authentication (Minimum)</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>3.3.9 Accessible Authentication (Enhanced)</td>
                <td>AAA</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
    <section class="main-section">
        <hr>
        <h2>4 Robust</h2>
        <hr>
        <p>Content must be robust enough that it can be interpreted by a wide variety of user agents, including assistive technologies.</p>
        <table style="min-width: 50%">
            <tr>
                <th>Success Criterion</th>
                <th>Level</th>
                <th>Met</th>
                <th>Notes</th>
            </tr>
            <tr style="text-align: left">
                <th colspan="4">4.1 Compatible</th>
            </tr>
            <tr>
                <td>4.1.1 Parsing</td>
                <td colspan="3">Obsolete and removed from standard</td>
            </tr>
            <tr>
                <td>4.1.2 Name, Role, Value</td>
                <td>A</td>
                <td>&#9989;</td>
                <td></td>
            </tr>
            <tr>
                <td>4.1.3 Status Messages</td>
                <td>AA</td>
                <td>&#9989;</td>
                <td>Site has no status messages</td>
            </tr>
        </table>
    </section>
    <section class="main-section">
        <hr>
        <h2>Notes</h2>
        <hr>
        <h3>Color Contrast Ratios</h3>
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
    </section>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>