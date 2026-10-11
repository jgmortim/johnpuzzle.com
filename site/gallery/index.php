<?php
include('../includes/header.php');
include('../includes/footer.php');
include('../includes/images.php');
$photos = [
    [
        'src' => '../images/early-stego.webp',
        'alt' => 'A desk with a 2 monitor setup showing a steganography program and the some of the code for it.',
        'caption' => '2016-11-07: Developing my own custom generative steganography application.'
    ],
    [
        'src' => '../images/qledcode-video-frame.webp',
        'alt' => 'A video frame showing myself while recording a walkthrough video for QLEDecode with a blacklight in the background',
        'caption' => '2020-11-15: Recording a walkthrough video for the Cyberpunk 2077 ARG <i>QLEDecode</i>.'
    ],
    [
        'src' => '../images/btc1-final.webp',
        'alt' => 'Screenshot of my final scorecard from Break the Code 1 showing that I finished all 23 puzzles with using any hints.',
        'caption' => '2020-12-03: Final scorecard for <i>Break the Code 1</i>.'
    ],
    [
        'src' => '../images/btc2-top-20-na.webp',
        'alt' => 'My "Top 20 in North America" share card from the final level of Break the Code 2',
        'caption' => '2022-03-31: My "Top 20 in North America" share card from the final level of <i>Break the Code 2</i>.'
    ],
    [
        'src' => '../images/cicada-detroit-bug-squad.webp',
        'alt' => 'Me and my friends sitting around a table at a restaurant.',
        'caption' => '2025-08-01: First meetup of "Bug Squad" during Round 1 of <i>Cicada Detroit</i>.'
    ],
    [
        'src' => '../images/cicada-detroit-heidelberg.webp',
        'alt' => 'Me and my friends standing around at the Heidelberg Project looking at our phones.',
        'caption' => '2025-08-02: Bug Squad stuck on Puzzle 42 of <i>Cicada Detroit</i> at the Heidelberg Project.'
    ],
    [
        'src' => '../images/cicada-detroit-win.webp',
        'alt' => 'From left-to-right: Shelby (2nd), Carl (host), and me (1st) at the closing celebration for Cicada Detroit.',
        'caption' => '2025-08-03: Award ceremony for <i>Cicada Detroit</i>.'
    ],
    [
        'src' => '../images/geocache-storm-drain.jpg',
        'alt' => 'My and my brother in crouching in a storm drain.',
        'caption' => '2025-09-27: Geocaching in a storm drain with my brother. This was my 200th find [D/T: 5.0/4.5].'
    ],
    [
        'src' => '../images/cicada-detroit-43.webp',
        'alt' => 'A stack of color floppy disks feature a neon cicada logo.',
        'caption' => '2025-12-03: Floppy disks for <i>Cicada Detroit</i> Puzzle 43, one of my first professional ARG projects.'
    ],
    [
        'src' => '../images/cicada-detroit-round-2-painted-lady.webp',
        'alt' => 'Me and my friends gathered at the Painted Lady bar.',
        'caption' => '2025-12-12: <i>Cicada Detroit</i> Round 2 meetup at the Painted Lady.'
    ],
    [
        'src' => '../images/mr-wilson.webp',
        'alt' => 'Me and Flynn standing in front of the giant cow head on Mack Ave in Detroit.',
        'caption' => '2025-12-13: Visiting Mr Wilson during <i>Cicada Detroit</i> Round 2.'
    ],
    [
        'src' => '../images/cell-ops-extraction-001.webp',
        'alt' => 'Scoreboard showing completion times with myself in first.',
        'caption' => '2026-01-10: Leaderboard for <i>Cell Ops</i> Extraction 001.'
    ],
    [
        'src' => '../images/cell-ops-003r.webp',
        'alt' => 'My hand holding a painted metal charm.',
        'caption' => '2026-02-20: Claiming recon charm 003r in the <i>Cell Ops</i> Scout mission R3C0N.'
    ],
    [
        'src' => '../images/stolen-kingdom.webp',
        'alt' => 'Me and my friends at the Birmingham 8 theater.',
        'caption' => '2026-06-05: At the Birmingham 8 theater for an official tour stop showing of <i>Stolen Kingdom</i>. And where ARGHouse hid a trailhead for the <i>Find Buzzy</i> ARG.'
    ],
    [
        'src' => '../images/er-champs-2026.webp',
        'alt' => 'Share card from the qualifiers for 2026 Escape Room World Championships',
        'caption' => '2026-06-20: Team Cicada Conclave\'s finish time in the qualifiers for 2026 <i>Escape Room World Championships</i>.'
    ],
    [
        'src' => '../images/cell-ops-katana.webp',
        'alt' => 'Me and the other 3 members of Team 10 standing behind BNS who is holding a painted katana.',
        'caption' => '2026-09-19: <i>Cell Ops</i> Team 10 (and BNS) with the katana we would later win for being first to complete Node 15.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John Puzzle - Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/gallery/">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/gallery.css">
</head>
<body>
<?php renderHeader('GALLERY'); ?>
<main>
    <nav id="breadcrumbs">
        <a href="/">Home</a> > Gallery
    </nav>
    <section class="main-section">
        <hr>
        <h2>0 // Photo Gallery</h2>
        <hr>
        <?php renderPhotoGallery($photos, 4) ?>
    </section>
    <hr>
</main>
<?php renderFooter(); ?>
<script src="../js/index.js"></script>
</body>
</html>