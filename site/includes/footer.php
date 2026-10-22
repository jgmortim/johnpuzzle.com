<?php
function renderFooter(): void
{
    ?>
    <footer id="site-footer">
        <nav id="footer-nav">
            <div class="rss">
                <img src="/images/rss.svg" alt="RSS feed icon">
                <a href="/blog/rss.xml">Blog RSS Feed</a>
            </div>
            <a href="/about/privacy-policy">Privacy Policy</a>
            <a href="/about/accessibility">Accessibility</a>
            <a href="/about/ai">Made Without AI</a>
        </nav>
        <p>&copy;&nbsp;2026&nbsp;John&nbsp;Mortimore. <wbr>All&nbsp;Rights&nbsp;Reserved.</p>
        <a href="https://notbyai.fyi"><img src="/images/Created-By-a-Human-Not-By-AI-Badge-black.svg" alt="Written by a Human, Not by AI"></a>
    </footer>
    <?php
}