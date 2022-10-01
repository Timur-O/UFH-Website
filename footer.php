<footer>
    <div class="container">
        <div class="copyright">
            <p>Copyright &copy <span id="copyrightYear"></span><script>var d = new Date(); document.getElementById("copyrightYear").innerHTML = d.getFullYear();</script> Ultifree Hosting.</p>
        </div>
        <div class="legal">
            <p><a <?php if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../legal/tos.html'"; } else { echo "href='legal/tos.html'"; } ?> >Terms of Service</a> / <a <?php if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../legal/privacy.html'"; } else { echo "href='legal/privacy.html'"; } ?> >Privacy Policy</a></p>
        </div>
        <div class="social">
            <p><a href="https://affiliates.ultifreehosting.com">Affiliate Program</a> / <a target="_blank" href="mailto:advertising@ultifreehosting.com">Advertise With Us</a></p>
        </div>
    </div>
</footer>