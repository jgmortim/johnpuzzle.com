<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/images.php');
include('../../includes/assets.php');

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$page= array_key_exists('page', $queries) ? $queries['page'] : 1;
$imagesPerPage=16;
$start = ($page - 1) * $imagesPerPage;
$photos = [
    [
        'src' => '../../images/glitch-art/grey-parrot-stego-artifact.png',
        'alt' => '',
        'caption' => 'Failed encoding attempt from the steganography application was developing in 2016'
    ],
    [
        'src' => '../../images/glitch-art/resized-png-artifact.bmp',
        'alt' => '',
        'caption' => 'Started as an index color PNG where all indexes had the same hex value (#00d084). I modified the image header
         to change its dimension and ended up with this. Not sure where the pattern is coming from.'
    ]
];
$totalPages = ceil((count($photos)/$imagesPerPage));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Gallery</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, Gallery, Gitch, Gitch Art">
    <meta name="description" content="John Puzzle's photo gallery">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/gallery/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/gallery.css') ?>">
</head>
<body>
<?php renderHeader('SECRETS'); ?>

<nav id="breadcrumbs">
    <a href="/">Home</a> > Secrets > ASCII Art
</nav>
<main id="main-content" tabindex="-1">
    <section class="main-section">
        <h2>Glitch Art</h2>
        <div style="float: right; margin-left: 1rem;">
            <pre style="margin: 0">
     ___________________
    /   /  /   / / /    \
   /   /  /   / / /    //
  /   '--'-------´    //
 /    ,==========,   //
/    /           /  //
¦___/___________/__//
'==-\___________\==´
            </pre>
        </div>
        <p>
            Congrats! You found a secret page.<br> This secret page contains a collection of glitched or malformed images that I
            created by mistake. But which I thought still looked cool regardless.
        </p>
        <br style="clear: both">
        <?php renderPhotoGallery(array_slice($photos, $start, $imagesPerPage), 2) ?>
        <div class="pagination" style="margin-top: 2rem">
            <button <?= ($page <= 1) ? "disabled" : ""?> class="" type="button" onclick="decreasePage(<?= $page ?>)">&lt;</button>
            <?= "Page ".$page." of ".$totalPages?>
            <button <?= ($page >= count($photos)/$imagesPerPage) ? "disabled" : ""?> class="" type="button" onclick="increasePage(<?= $page ?>)">&gt;</button>
        </div>
    </section>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>