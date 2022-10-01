<header>
    <div class="container">
        <a href="/"><h1 class="logo">Ultifree Hosting</h1></a>
        <i class="fa fa-bars toggle-menu"></i>
        <nav>
            <ul>
                <li><a <?php if ($_SERVER['REQUEST_URI'] == '/') {echo "href='#'";} else if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../index.php'"; } else {echo "href='index.php'";} ?> data-scrollto="splash">Home</a></li>
                <li><a <?php if ($_SERVER['REQUEST_URI'] == '/') {echo "href='#overview'";} else if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../index.php#overview'"; } else {echo "href='index.php/#overview'";} ?> data-scrollto="overview">Features</a></li>
                <li><a <?php if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../pricing.php'"; } else { echo "href='pricing.php'"; }?> >Pricing</a></li>
                <li><a href="https://www.namesilo.com/?rid=c06f665gs" onclick="NameSiloEvent('NavBar', 'General');">Domains</a></li>
                <li><a <?php if (strpos($_SERVER['REQUEST_URI'], '/error') !== false || strpos($_SERVER['REQUEST_URI'], '/legal') !== false) { echo "href='../faq.php'"; } else { echo "href='faq.php'"; }?> >Knowledge Base</a></li>
                <li><a href="https://app.ultifreehosting.com/signup" onclick="BeginSignupEvent('NavBar', 'SignUpButton');">Sign Up</a></li>
                <li><a href="https://app.ultifreehosting.com"?>Login</a></li>
            </ul>
        </nav>
    </div>
</header>