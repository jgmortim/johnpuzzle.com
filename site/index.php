<?php
$currentTab = "HOME";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>John Puzzle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/trilobyte.svg">
	<link rel="canonical" href="https://johnpuzzle.com">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
    include('./includes/header.php');
    ?>
	<main>
		<div id="breadcrumbs">
			Home
		</div>
        <hr>
		<h2>0 // WELCOME</h2>
		<hr>
		<p>My name is John, I'm a software engineer and puzzle designer, and this is my personal website.</p>
		<p>
			I design and build interactive web infrastructure and puzzle systems at <a href="https://arghouse.com/" target="_blank">ARGHouse</a>,
			supporting the development of live Alternate Reality Games (ARGs) and immersive interactive experiences. My work bridges narrative design,
			cryptographic puzzle development, and full-stack web engineering to create dynamic campaigns that engage players across digital platforms.
		</p>
		<p>
			Outside ARGHouse, I also have nine years of professional experience with software engineering. Including 6 years of experience with
			full-stack web development. Some of my independent software projects are listed below.
		</p>
        <hr>
        <h2>1 // LATEST BLOG POST</h2>
        <hr>
        <p class="indent-1">Article: <a href="/blog/weekend/">Project Highlight: Weekend at the End of the World</a> &nbsp; <nobr>Published: 2026-10-03</nobr></p>
        <p class="indent-1">Abstract:</p>
        <p class="indent-2">
            Weekend at the End of the World is a horror-comedy film directed by Gille Klabin. In which, the primary setting
            is a hunted cabin. Through my job at ARGHouse, I helped players experience that cabin for themselves via an interactive
            point-and-click puzzle game. Player who completed the game were eligible to win props from the movie and limited-run VHS copies.
            In addition to doing the programming for the point-and-click environment, I also designed a number of the game's puzzles.
            Most significantly, the final of puzzle of the game.
        </p>
        <hr>
		<h2>2 // SOFTWARE PROJECTS</h2>
		<hr>
		<h3>2.0 // Mornay</h3>
        <div class="project-container">
            <div class="project-img">
                <img src="images/mornary-icon.png" alt="Mornay app icon and logo"/>
            </div>
            <div class="project-description">
                <p>Page: <a href="https://mornary.com/" target="_blank">mornary.com</a></p>
                <p>Summary:</p>
                <p class="indent-1">
                    Mornary is an application I am building to explore generative steganography. It converts binary data into Morse code that decodes to
                    plausible English text, hiding the true payload in plain sight. The app is carrier-agnostic and robust enough to survive human relay,
                    making it a unique generative steganography tool.
                </p>
            </div>
        </div>
		<h3>2.1 // Codon64</h3>
        <div class="project-container">
            <div class="project-img">
                <img src="images/codon64-icon.svg" alt="Codon64 logo"/>
            </div>
            <div class="project-description">
                <p>Page: <a href="https://codon64.com/" target="_blank">codon64.com</a></p>
                <p>Summary:</p>
                <p class="indent-1">
                    Codon64 is a novelty encryption algorithm I created which uses DNA nucleotides (A, G, C, and T) as the only characters of the ciphertext.
                    It is implemented with JavaScript on its own website.
                </p>
            </div>
        </div>
        <hr>
        <h2>3 // ARG Walkthroughs</h2>
        <hr>
        <div class="youtube-container">
            <iframe src="https://www.youtube.com/embed/videoseries?si=2q8UCQv8K5WNS8lO&amp;list=PLkW0VtWWrk_R6FoL9G_b0aI1VeE3L_Lxw"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
            <div class="youtube-description">
                <h3>3.0 // Cicada Detroit</h3>
                <p>
                    >> Videos: 18 &nbsp;Runtime: 5h 01m 20s<br>
                    >> <a href="https://www.youtube.com/playlist?list=PLkW0VtWWrk_R6FoL9G_b0aI1VeE3L_Lxw" target="_blank">View Full Playlist</a>
                </p>
                <p>
                    An in-depth walkthrough of all 42 puzzles in the Cicada Detroit ARG. In addition to explaining every puzzle solution step-by-step,
                    I also detail my personal experience in the five in-person puzzles that rounded-out the game. Coverage of the final five puzzles is
                    supplemented with photos and audio captured during the event.
                </p>
            </div>
        </div>
        <div class="youtube-container">
            <iframe src="https://www.youtube.com/embed/videoseries?si=wvsi1SU1x6Boegnn&amp;list=PLkW0VtWWrk_TmW0_YtMjgxerBoXyMlyxA"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
            <div class="youtube-description">
                <h3>3.1 // QLEDecode</h3>
                <p>
                    >> Videos: 4 &nbsp;Runtime: 1h 16m 48s<br>
                    >> <a href="https://www.youtube.com/playlist?list=PLkW0VtWWrk_TmW0_YtMjgxerBoXyMlyxA" target="_blank">View Full Playlist</a>
                </p>
                <p>
                    An in-depth walkthrough of the first ARG I ever participated in — a joint collaboration between Samsung, XBox, and CD Projekt Red
                    to promote the then-upcoming release of Cyberpunk 2077. This playlist covers the trailhead up through all 15 possible puzzles that
                    players could have solved to become a semi-finalist. The actual finals were livestreamed and, as a result, I hadn't felt the need
                    to cover it. Unfortunately, Samsung eventually took down the recording of the livestream so it is now lost.
                </p>
            </div>
        </div>
        <hr>
	</main>
    <?php
        include('./includes/footer.php');
    ?>
	<script src="js/index.js"></script>
</body>
</html>