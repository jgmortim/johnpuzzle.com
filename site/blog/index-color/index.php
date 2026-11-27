<?php
include('../../includes/header.php');
include('../../includes/footer.php');
include('../../includes/images.php');
include('../../includes/assets.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Index Color</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, Index Color, ARG, Blog, Cicada Challenge, Cicada Foods, Community Days">
    <meta name="description" content="Case study of index color images in ARG puzzles">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/blog/index-color/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/gallery.css') ?>">
</head>
<body>
<?php renderHeader('BLOG'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > <a href="/blog/">Blog</a> > Index Color
</nav>
<main id="main-content" tabindex="-1">
    <article>
        <h2>Index Color Case Study</h2>
        <span class="no-wrap">Published: 2026-11-23</span>
        <hr>
        <section class="main-section">
            <h2>Overview</h2>
            <p>
                Index color is the digital equivalent of a paint-by-number canvas. It has interesting real-world applications, but it
                can also be used to create seemingly invisible images. This article is a case study of my exploration of index color
                images as a puzzle medium.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>What is Index Color?</h2>
            <p>
                There are essentially two ways that raster image files can record the colors of their pixels. The first is full color
                modes; you are likely familiar with these in the RGB or CMYK space. In these systems, we define a range of possible
                color values and every value in that range may appear in the image. Whether it's 1-bit (2 colors), 8-bit (256 color),
                24-bit (16.8 million colors), or literally any other bit depth; each possible value in that that bit range
                represents a unique color on a scale (typically from black to white) which may appear in the image. These can be
                monochromatic (e.g. 8-bit greyscale) or they can have multiple color channels (e.g. 24-bit RGB with eight bits for
                each color channel), the end result is an array of colors that falls on a scale moving incrementally from one end to
                the other.
            </p>
            <div class="inline-image">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/indexed-palette.svg',
                    'a visual explanation of index color',
                    'A 2-bit indexed color image. The color of each pixel is represented by a number; each number (the index) corresponds to a color in the color table (the palette).')
                ?>
            </div>
            <p>
                But there is another system, it's not as popular these days, but it is quite useful for reducing the size of images
                with a limited color space. This is what's called index color. Take the standard 24-bit RGB color space. In such an
                image, there are 16.8 million colors that can appear. Which is far more than the human eye can distinguish. So why
                not use less? Suppose you only need 256 colors, but 8-bit RGB doesn't have the specific shade you want. This is
                where index color comes in. Instead of using a range of colors, we can instead create what is called a palette. And
                in this palette, we can specify the exact shades we want to use, and omit the ones we don't.
            </p>
            <p>
                Think of it like a paint-by-number canvas, every pixel in the image is going to receive a number (called an index)
                and those numbers will match up with a specific color in the palette. You now can create an image, with any colors in
                a specific bit-depth, while using fewer bits to distinguish the color of each pixel. As an extreme example, suppose
                you only wanted two colors: Salmon (#FA8072) and Tomato (#FF6347), which are 24-bit RGB colors. Instead of your
                image file recording 24 bits for every pixel, you could instead record only one bit. A 0 for Salmon and a 1 for
                Tomato. A massive reduction in file size.
            </p>
            <p>
                That's all fine and good, but how do we make a puzzle out of that. Well the key here is that the colors in the
                palette, do not have to be unique. In fact, they can all be the same (have the same RGB value). On a
                paint-by-number canvas, this would be the equivalent of painting every number the same colors. The canvas is now a
                solid color, but the numbers remain underneath.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Proof of Concept</h2>
            <div class="inline-image">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/index-color-poc.webp',
                    'Original proof of concept image and the solved image shown side by side',
                    'Original proof of concept image and its solution revealed by changing the color of index 0 to black.')
                ?>
            </div>
            <p>
                My first exploration of this concept was a 1-bit (2 color) PNG which appeared as a solid green (#00d084) canvas.
                This image had two colors in its palette, both bearing the same RGB value. To the unsuspecting eye, there was nothing
                there. It was, after all, just a solid color. But looking beyond the color, each pixel still bore its index number
                (either 0 or 1).
            </p>
            <p>
                In order to solve this puzzle, one needed only to change a single color in the palette and the true image, a QR code,
                was revealed.
            </p>
            <p>
                This proof of concept image was never used in an ARG. I'll let you decide if you want to scan it or not.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>First Iteration</h2>
            <p>
                My first use of this technique in an actual puzzle would be in the <i>Cicada Foods</i> ARG. in the second chapter
                of the game, the players were presented with what looked like an error screen with a blue background (blue.png).
                That blue background, while being a solid color (#0000FF), was an 8-bit image with an 8-color palette.
            </p>
            <p>
                Technically, this could have used a lower bit-depth (8-bits allows for 256 colors), but eight was chosen because it
                wouldn't stand out as much a lower value. 3-bit color is very uncommon and would draw attention to itself.
            </p>
            <div class="block-image-small-medium">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/index-color-blue.webp',
                    'Puzzle image and the solved image shown side by side',
                    'Original image and image with randomized palette.')
                ?>
            </div>
            <p>
                Like with the proof of concept puzzle, one needed only to randomize the colors in the palette to reveal that
                this image actually contained shopping-cart wheels with the overlay text "5P07L1GHT" (or "SPOTLIGHT") presented with
                an approximation of dazzle camouflage.
            </p>
            <p>
                I later learned of a weakness in this technique. If you upload an index color PNG to
                <a href="https://georgeom.net/StegOnline/upload" target="_blank">StegOnline</a>, it gives you options to
                automatically randomize the palette or to view each index individually. Which reduces the difficulty as players
                could stumble upon the answer without understanding the mechanism used to reach it.
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Second Iteration</h2>
            <p>
                My second use of this technique was in my submission to the <i>Cicada Challenge: Community Days</i> ARG. For this
                iteration, I wanted a puzzle that couldn't be solved just by randomizing the palette and I wanted to make sure
                StegOnline couldn't trivialize it.
            </p>
            <div class="block-image-small-medium">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/index-color-community-days.webp',
                    'Puzzle image compared to resized images and images with different palette applications',
                    'Original image compared to resized images and images different palette applications.')
                ?>
            </div>
            <p>
                What I ended up creating was an 8-bit BMP with a 64-color palette. As it turns
                out, StegOnline doesn't have an index color processor for BMPs. The other advantage of switching from PNG to BMP is
                that some (but not all) AI models aren't as good at analyzing BMPs as they are with PNGs.
            </p>
            <p>
                File format changes aside, this puzzle was harder for two main reasons. First, the 64 colors in the palette needed
                to be set in a particular way to reveal a valid QR code. Change the wrong indexes, and you'd get something that
                looked like a QR code, but which wouldn't scan. Randomizing the palette was no longer enough. And second, I also
                modified the image header to make it render with an incorrect size (something I've done in the past with JPGs).
                Without restoring the original dimensions, the QR code can't be revealed.
            </p>
            <p>
                I must note that resizing the image is technically out of scope of this case study, but for the sake of providing a
                comprehensive solve guide, it is included below.
            </p>
            <h3>Guide</h3>
            <h4>Resize</h4>
            <p>
                The first step to solving this required players to find a clue hidden at the bottom of the file. Opening the image
                in a text editor and scrolling to the bottom, the following ASCII art and text could be found after the image data:
            </p>
            <pre>
        __________________________
       /************/            /
       /************/            /
      /************/   Like a   /
      /************/            /
     /************/   sheet    /
     /************/            /
    /************/  of paper  /
    /************/____________/
    \            \            \
    \            \            \
     \            \            \
     \            \            \
      \  Folded    \   Twice    \
      \            \            \
       \            \            \
       \            \            \
        \____________\____________\
            </pre>
            <p>
                When a piece of paper is folded in half twice, both of its dimensions are halved. Which is exactly what I did to this
                image. In order to progress, the file header needed to be updated to change its dimensions from 500x500 to 1000x1000.
                This could be done in a hex editor such as <a href="https://hexed.it/" target="_blank">HexEd.it</a>.
            </p>
            <div class="block-image-small-medium">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/index-color-community-days-hex.webp',
                    'Screenshot from HexEd.it showing the width and height bytes highlighted',
                    'Screenshot from HexEd.it showing the width and height bytes highlighted.')
                ?>
            </div>
            <p>
                Players would view the file header in hex and look for the width and height. Both had a value of 500 in
                decimal, but here they'd need to look for them in their hexadecimal representation. Which was "1F4" (or "01F4" when
                padded to 2 bytes). However, unlike a PNG or JPG, BMP uses little-endian encoding. So instead of being written as
                "01F4", the bytes would be in opposite order as "F401", which is shown in the screenshot.
            </p>
            <p>
                The correct value for both was 1,000 pixels, which in hexadecimal is "3E8" (or "03E8"). And in little-endian, that is
                "E803". Replacing both occurrences of "F401" with "E803", the correctly-sized image could then be exported.
            </p>
            <h4>Recolor</h4>
            <p>
                With the image in the correct dimensions, the next step was to figure out the correct values for the color palette.
                If randomized, two things would become apparent. First, that the image was supposed to be a QR code; it would have
                been hard to ignore the alignment pattern. And second, there was a four-leaf clover in the bottom left corner.
            </p>
            <p>
                As an aside: if a player hadn't resized the image first, the clover would still have been visible, but there wouldn't
                have been any indicators that the answer was a QR code.
            </p>
            <p>
                Brute forcing all possible combinations of black and white for the 64 color indexes was possible, but that is
                certainly not the intended, or most efficient, approach. Instead, the four-leaf clover, a symbol of luck, pointed to
                the solution. In number theory, there is a mathematical formula which defines the sequence of lucky numbers
                (<a href="https://oeis.org/A000959" target="_blank">A000959</a>):
            </p>
            <div>
                <blockquote cite="https://oeis.org/A000959">
                    <P>
                        Start with the natural numbers. Delete every 2nd number, leaving 1 3 5 7 ...;
                        the 2nd number remaining is 3, so delete every 3rd number, leaving 1 3 7 9 13 15 ...;
                        now delete every 7th number, leaving 1 3 7 9 13 ...; now delete every 9th number; etc.
                    </P>
                    <p><cite>—The On-Line Encyclopedia of Integer Sequences</cite></p>
                </blockquote>
            </div>
            <p>
                With this information, the last piece of info needed came from the filename "count_up_from_zero.bmp". This indicated
                that the color palette used a 0-based index instead of 1-based. Which meant the 64 indexes were numbered from 0-63
                instead of from 1-64.
            </p>
            <div class="block-image-small-medium">
                <?php renderExpandableImage(
                    '../../images/blogs/index-color/index-color-community-days.webp',
                    'Puzzle image compared to resized images and images with different palette applications',
                    'Original image compared to resized images and images different palette applications.')
                ?>
            </div>
            <p>
                Now a player just needed to change the color of the lucky numbered indexes from green to black.
                Specifically indexes 1, 3, 7, 9, 13, 15, 21, 25, 31, 33, 37, 43, 49, 51, and 63. This can be easily done in GIMP
                (<a href="https://docs.gimp.org/3.2/en/gimp-indexed-palette-dialog.html" target="_blank">guide</a>).
                The other indexes could be changed to white, or left as green. Most QR scanners wouldn't complain if white squares
                were still green.
            </p>
            <p>
                And with that, the QR code was restored, the clover disappeared, and scanning the QR code revealed the answer:
                "AreYouFeelingLucky1379".
            </p>
        </section>
        <hr>
        <section class="main-section">
            <h2>Acknowledgements</h2>
            <ol>
                <li>
                    The 2-bit index color example image is public domain, and it was sourced from Wikimedia Commons
                    (<a href="https://commons.wikimedia.org/wiki/File:Indexed_palette-H.svg" target="_blank">original</a>).
                </li>
            </ol>
        </section>
    </article>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>