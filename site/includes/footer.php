<?php
function renderFooter(): void
{
    ?>
    <footer>
        <div class="rss">
            <img src="/images/rss.svg" alt="RSS feed icon">
            <a href="/blog/rss.xml">Blog RSS Feed</a>
            |
            <a href="/about/privacy-policy">Privacy Policy</a>
            |
            <a href="/about/accessibility">Accessibility</a>
        </div>
        <p>&copy; 2026 John Mortimore. All Rights Reserved.</p>
    </footer>
    <?php
}