<?php session_start(); include('ad_inserter.php');?>
<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://ultifreehosting.com",
          "logo": "https://ultifreehosting.com/images/logo.png"
        }
        </script>

        <link rel="canonical" href="https://ultifreehosting.com" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="Ultifree Hosting provides free web hosting with PHP, MySQL, cPanel, Unlimited Bandwidth, and Unlimited Disk Space. Works with WordPress, E-Commerce..." />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@ultifreehosting" />
        <meta name="twitter:description" content="Ultifree Hosting provides free web hosting with PHP, MySQL, cPanel, Unlimited Bandwidth, Unlimited Disk Space and Unlimited Websites. Learn more about our free, reliable and secure services today!" />
        <meta name="twitter:title" content="Free, Unlimited Web Hosting - Ultifree Hosting" />
        <meta name="twitter:image" content="https://ultifreehosting.com/images/favicon.png" />

        <meta property="og:title" content="Free, Unlimited Web Hosting - Ultifree Hosting" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Ultifree Hosting">
        <meta property="og:url" content="https://ultifreehosting.com/" />
        <meta property="og:image" content="https://ultifreehosting.com/images/favicon.png" />
        <meta property="og:description" content="Ultifree Hosting provides free web hosting with PHP, MySQL, cPanel, Unlimited Bandwidth, Unlimited Disk Space and Unlimited Websites. Learn more about our free, reliable and secure services today!" />

        <title>Free, Unlimited Web Hosting - Ultifree Hosting</title>
        <link rel="icon" href="images/favicon.png">

        <link rel="dns-prefetch" href="https://code.jquery.com"/>
        <link rel="dns-prefetch" href="https://static.hotjar.com"/>
        <link rel="dns-prefetch" href="https://www.google.com"/>
        <link rel="dns-prefetch" href="https://script.hotjar.com"/>
        <link rel="dns-prefetch" href="https://www.google-analytics.com"/>
        <link rel="dns-prefetch" href="https://stats.g.doubleclick.net"/>
        
        <link rel="preconnect" href="https://code.jquery.com"/>
        <link rel="preconnect" href="https://static.hotjar.com"/>
        <link rel="preconnect" href="https://www.google.com"/>
        <link rel="preconnect" href="https://script.hotjar.com"/>
        <link rel="preconnect" href="https://www.google-analytics.com"/>
        <link rel="preconnect" href="https://stats.g.doubleclick.net"/>
        
        <link rel="preconnect" href="https://code.jquery.com" crossorigin/>
        <link rel="preconnect" href="https://static.hotjar.com" crossorigin/>
        <link rel="preconnect" href="https://www.google.com" crossorigin/>
        <link rel="preconnect" href="https://script.hotjar.com" crossorigin/>
        <link rel="preconnect" href="https://www.google-analytics.com" crossorigin/>
        <link rel="preconnect" href="https://stats.g.doubleclick.net" crossorigin/>

        <link href="css/style.css" rel="stylesheet">
      </head>
    <body>

    <?php include 'nav.php';?>

        <section class="splash">
            <div class="container">
                <h1>Unlimited, Professional & Reliable Web Hosting</h1>
                <h2>Get your free hosting account within 3 minutes!</h2>
                <a class="btn" id="findOutMoreBtn" href="#" data-scrollto="overview">Find out more<i class="fa fa-angle-down"></i></a>
                <a class="btn" href="https://app.ultifreehosting.com/signup" onclick="BeginSignupEvent('Homepage', 'FirstCTA');">Create free account<i class="fa fa-angle-right"></i></a>
            </div>
        </section>
        <?php echo "<br />"; insertAds('home01', false);?>
        <section class="overview" id="overview">
            <div class="container">
              <div>
                  <i class="fa fa-money-bill-wave"></i>
                  <h2>100% Free</h2>
                  <p>We are 100% free. No hidden fees. No time limits. No credit cards required.</p>
              </div>
                <div>
                    <i class="fa fa-comment-dollar"></i>
                    <h2>No Forced Ads</h2>
                    <p>We will never force you to have ads on your website. Your website, your decisions.</p>
                </div>
                <div>
                    <i class="fa fa-server"></i>
                    <h2>Unlimited Hosting</h2>
                    <p>You get unlimited disk space and unlimited bandwidth for your site when using our services.</p>
                </div>
                <div>
                    <i class="fa fa-tools"></i>
                    <h2>Site Builder</h2>
                    <p>We provide you with the free, simple and powerful Site.Pro website builder for your domains.</p>
                </div>
                <div>
                    <i class="fa fa-clock"></i>
                    <h2>99.9% Uptime</h2>
                    <p>Uptime is an important priority for us, therefore we are proud to say we provide 99.9% uptime.</p>
                </div>
                <div>
                    <i class="fa fa-lock"></i>
                    <h2>Free SSL</h2>
                    <p>We provide you with free SSL certificates for your domains and sub-domains.</p>
                </div>
            </div>

        </section>
<?php insertAds('home02', false); echo "<br />"; ?>
        <section class="feature greybg" id="support">
            <div class="container">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="images/support.svg"  alt="Support Graphic">
                <div>
                    <h1>Quality Support</h1>
                    <p>We are committed to providing quality support to our customers.</p>
                    <ul>
                        <li>
                            <i class="fa fa-question"></i>
                            <h3>Knowledge Base</h3>
                            <p>Find answers to the most frequently asked questions, check the articles on how to use your hosting account and use the tutorials to get the most out of your website! <br /> <a href="faq.php">Find Answers Now!</a></p>
                        </li>
                        <li>
                            <i class="fa fa-comments"></i>
                            <h3>Live Chat & Support Tickets</h3>
                            <p>Send us a message through the live chat or create support ticket through the control panel and one of our staff members will get back to you as soon as possible!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="cta" id="cta" data-src="images/globeInternet.webp">
            <div class="container">
                <h1>Enough already!</h1>
                <h2>Click the link below to get started</h2>
                <a class="CTAButton" href="https://app.ultifreehosting.com/signup.php" onclick="BeginSignupEvent('Homepage', 'EnoughAlreadyCTA');">Sign Up Now</a>
            </div>
        </section>
<?php echo "<br />"; insertAds('home03', false); ?>
        <section class="pricing" id="pricing">
            <div class="container">
                <h1>Pricing & Plans</h1>
                <h2>Free, Premium and Specialized Hosting Plans Available!</h2>

                <div>
                    <h3>Free<span><i class="fa fa-star"></i></span></h3>
                    <div class="price">$0<span class="pricing_month">/Month</span></div>
                    <ul>
                        <li><i class="fas fa-infinity"></i> Disk Space</li>
                        <li><i class="fas fa-infinity"></i> Bandwidth</li>
                        <li>0 Email Accounts</li>
                        <li>400 MySQL Databases</li>
                        <li><i class="fas fa-infinity"></i> Subdomains</li>
                        <li><i class="fas fa-infinity"></i> Addon Domains</li>
                        <li>Limited Servers</li>
                        <li>Free Sub-Domain</li>
                        <li>10 MB / File Limit</li>
                    </ul>
                    <a class="btn yellow smaller" href="https://app.ultifreehosting.com/signup.php" onclick="BeginSignupEvent('Homepage', 'Pricing Comparison Panel');">Get Started<i class="fa fa-angle-right"></i></a>
                </div>

                <div>
                    <h3>Starter Premium<span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></h3>
                    <div class="price">$19.99<span class="pricing_month">/Year</span></div>
                    <ul>
                        <li>5 GB Disk Space</li>
                        <li>250 GB Bandwidth</li>
                        <li>1 Email Account</li>
                        <li>1 MySQL Database</li>
                        <li>1 Addon Domain</li>
                        <li>1 Subdomain</li>
                        <li>Moderate Servers</li>
                        <li>1 Free Domain</li>
                        <li><i class="fas fa-infinity"></i> / File Limit</li>
                    </ul>
                    <a class="btn yellow smaller" onclick="iFastNetEvent('Homepage', 'Starter');" href="https://ifastnet.com/portal/aff.php?aff=26864&a=add&pid=78" rel="nofollow">Get Started<i class="fa fa-angle-right"></i></a>
                </div>

                <div>
                    <h3>Super Premium<span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></h3>
                    <div class="price">$4.99<span class="pricing_month">/Month</span></div>
                    <ul>
                        <li><i class="fas fa-infinity"></i> Disk Space</li>
                        <li>250 GB Bandwidth</li>
                        <li>100 Email Accounts</li>
                        <li>20 MySQL Databases</li>
                        <li>20 Addon Domains</li>
                        <li>20 Subdomains</li>
                        <li>Considerable Servers</li>
                        <li>6 Free Domains</li>
                        <li><i class="fas fa-infinity"></i> / File Limit</li>
                    </ul>
                    <a class="btn yellow smaller" onclick="iFastNetEvent('Homepage', 'Super Premium');" href="https://ifastnet.com/portal/aff.php?aff=26864&a=add&pid=1" rel="nofollow">Get Started<i class="fa fa-angle-right"></i></a>
                </div>

                <div>
                    <h3>Ultimate Premium<span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></h3>
                    <div class="price">$7.99<span class="pricing_month">/Month</span></div>
                    <ul>
                        <li><i class="fas fa-infinity"></i> Disk Space</li>
                        <li><i class="fas fa-infinity"></i> Bandwidth</li>
                        <li><i class="fas fa-infinity"></i> Email Account</li>
                        <li><i class="fas fa-infinity"></i> MySQL Database</li>
                        <li><i class="fas fa-infinity"></i> Addon Domains</li>
                        <li><i class="fas fa-infinity"></i> Subdomains</li>
                        <li>Powerful Servers</li>
                        <li>21 Free Domains</li>
                        <li><i class="fas fa-infinity"></i> / File Limit</li>
                    </ul>
                    <a class="btn yellow smaller" onclick="iFastNetEvent('Homepage', 'Ultimate Premium');"  href="https://ifastnet.com/portal/aff.php?aff=26864&a=add&pid=6" rel="nofollow">Get Started<i class="fa fa-angle-right"></i></a>
                </div>
                
                <a class="btn" id="findOutMoreButton" href="pricing.php" >Find out more<i class="fa fa-angle-right"></i></a>
            </div>
        </section>
        <?php insertAds('home04', false); echo "<br />"; ?>

        <section class="finalCTA" id="finalCTA" data-src="images/vectorServerRoom.webp">
            <div class="container">
                <h1>Ready to sign up?</h1>
                <a class="CTAButton" href="https://app.ultifreehosting.com/signup.php" onclick="BeginSignupEvent('Homepage', 'FinalCTA');">Sign Up Now</a>
            </div>
        </section>

        <div class="placeholder"></div>
        <?php include 'footer.php';?>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script async src="js/blockadblock.js"></script>
        <script type="text/javascript" src="js/detectmobilebrowser.js"></script>
        <script src="https://kit.fontawesome.com/b2b26cfd37.js" crossorigin="anonymous"></script>
        <script src="js/analytics.js"></script>
        <script src="js/mobile_nav.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
