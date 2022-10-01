<?php include('ad_inserter.php');?>
<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="Knowledge Base. Find answers to all of your questions here, and if you still need help just open a support ticket!" />

        <title>Knowledge Base - Ultifree Hosting</title>

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@ultifreehosting" />
        <meta property="og:title" content="Knowledge Base - Ultifree Hosting" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://ultifreehosting.com/faq" />
        <meta property="og:image" content="https://ultifreehosting.com/images/favicon.png" />
        <meta property="og:description" content="Knowledge Base. Find answers to all of your questions here, and if you still need help just create a support ticket!" />

        <script async src="js/blockadblock.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:300,700' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/b2b26cfd37.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>

    <?php include 'nav.php';?>

        <section class="faq_sec" id="faq_sec">
          <div class="container">

              <h1>Knowledge Base</h1>

              <input type="text" id="searchBarFAQ" onkeyup="faqSearch();" placeholder="Search knowledge base...">
              <p>
                If you can't find the answer to your question here try opening a support ticket. To check the status of our services visit our <a href="https://stats.uptimerobot.com/lpAKPSoX36">Status Page</a>.
              </p>

              <br />
              <?php insertAds('freq01', false); ?>
              <br />

              <ul id="answersFAQ">
                <span id="no_results_text">No results found. Try opening a support ticket.</span>

                <li class="faq_section_head">
                    <div class="faq_section_head_child">Account Management</div>
                </li>

                      <li>
                          <div class="collapsable ">What is the difference between a hosting account and a Ultifree Hosting account?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              A Ultifree Hosting account is an account which can be used to access the <a href="https://app.ultifreehosting.com">dashboard</a>. A hosting account is each website with its own files/databases that is created through a Ultifree Hosting account. Each Ultifree Hosting account can contain up to 3 hosting accounts and only one Ultifree Hosting account can be created per person.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I delete my account?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              If you would like to delete a hosting account then do the following:
                            </p>
                            <p>
                              1. Log into your <a href="https://app.ultifreehosting.com">dashboard</a>.
                            </p>
                            <p>
                              2. Click on the hosting account which you would like to deactivate.
                            </p>
                            <p>
                              3. Click the "Remove Hosting Account" button.
                            </p>
                            <p>
                              Approximately, 60 days after deactivation, the account will be deleted entirely. Due to legal constrains, Ultifree Hosting cannot delete accounts earlier under any circumstances.
                            </p>
                            <p>
                              Please note that accounts that have been suspended are not deleted automatically and if your account was suspended for abuse, it cannot be deleted upon request.
                            </p>
                            <p>
                              If you would like to delete your Ultifree Hosting account then do the following:
                            </p>
                            <p>
                              1. Log into your <a href="https://app.ultifreehosting.com">dashboard</a>.
                            </p>
                            <p>
                              2. Make sure you have no active hosting accounts.
                            </p>
                            <p>
                              3. Head to the <a href="https://app.ultifreehosting.com/dashboard/settings">settings</a> section
                            </p>
                            <p>
                              4. Click the "Close Account" button.
                            </p>
                            <p>
                              Please note that the deletion of an Ultifree Hosting account is immediate and permanent.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">What happens to an inactive account?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              An inactive account will be deleted after 60 days without any activity.
                            </p>
                            <p>
                                Activity includes website visits, control panel logins, file changes, and more.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How many accounts can I have?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Each person may have a maximum of 3 hosting accounts and 1 Ultifree Hosting account. If you create any more, your accounts will all be suspended.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I reset my account?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              If you would like to reset your account to start from scratch for any reason, there is no button to simply do this however you can try the following:
                            </p>
                            <h5>Delete all the files manually</h5>
                            <p>
                              To clean your account manually you can do the following:
                            </p>
                            <p>
                              1. Log into your control panel.
                            </p>
                            <p>
                              2. Go to the Addon Domains, Parked Domains, and Subdomains then delete all your domains in these sections.
                            </p>
                            <p>
                              3. Go to Email Accounts, Forwarders, and MySQL Databases then delete everything in these sections.
                            </p>
                            <p>
                              4. Go to Softaculous and in the Installed Apps section delete everything.
                            </p>
                            <p>
                              5. Go to SiteBuilders and delete all the sitebuilders in your account.
                            </p>
                            <p>
                              6. Connect to the File Manager or FTP, then go to your htdocs folder and delete everything inside this folder. (Do this for all your domain folders.)
                            </p>
                            <p>
                              By doing this you'll have deleted almost everything in your account, except certain protected folders and files. Now you can restart your project.
                            </p>
                            <h5>Create a new hosting account</h5>
                            <p>
                              Creating a new hosting account will allow you to restart with a clean slate. Simply log into your <a href="https://app.ultifreehosting.com">dashboard</a> and create a new hosting account as usual.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I begin using my premium account?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Thank you for upgrading! Now that you've upgraded your account there are a few important things you need to know.
                            </p>
                            <p>
                              Firstly, you are now a customer of iFastNet, which sponsors Ultifree Hosting and provides the premium hosting services. Premium hosting comes with a seperate support system which can be found here: http://support.ifastnet.com/. Please note that you will need to create an account in the ticketing system to access it. Generally, iFastNet will respond to questions within about 15 minutes 24/4, so you shouldn't be worried about any delays.
                            </p>
                            <h5>Migrating your account to premium</h5>
                            <p>
                              Most importantly, although iFastNet's premium hosting integrates well with Ultifree Hosting, <b>free hosting accounts won't automatically be migrated to your premium hosting</b>.
                            </p>
                            <p>
                              Luckily, iFastNet can migrate your account at anytime, even if your account is suspended! To do so please do the following:
                            </p>
                            <p>
                              1. Create an account on the premium support portal (http://support.ifastnet.com/)
                            </p>
                            <p>
                              2. Create a new support ticket, but remember to include your domain name of your new account and the invoice number of your premium order.
                            </p>
                            <p>
                              3. In your message, clearly say that you would like to have your account migrated from free hosting and include your hosting account username (eg. ultif_19483223).
                            </p>
                            <p>
                              4. Now wait for iFastNet to migrate your website!
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">What type of websites are not allowed to be hosted?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Anything illegal, websites that contains copyrighted files (warez), adult content, spamming scripts, web proxies and more. For more information please read our <a href="legal/tos.html" target="_blank">TOS</a>.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Where can I find help?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              You can try checking the other information available here on the FAQs page, and if you can't find the information you need here, then simply head to your control panel and open a support ticket.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I report a website?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              We would really appreciate it! You can email us at <a href="mailto:abuse@ultifreehosting.com">abuse@ultifreehosting.com</a>
                            </p>
                          </div>
                      </li>


                <li class="faq_section_head">
                    <div class="faq_section_head_child">File Management</div>
                </li>

                      <li>
                          <div class="collapsable ">How many files can I upload?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              You're free to upload as many files as you want, but please be aware that the largest size for an individual file is limited to 10MB on the free plan.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How can I upload my files?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              There are two ways. Firstly, you can download an FTP client, which you can find on the "Free FTP Software" from the "Files" section in your VistaPanel. Secondly, you can use our free "Online File Manager" also in your VistaPanel.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Why is my file is vanishing instantly after I upload it?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              The reason for this is probably that the file is larger than 10MB. On the free hosting plan there is a per file upload limit of 10MB, meaning you can upload an unlimited number of files, but each of these files must be less than or equal to 10MB in size. There is no way to increase the upload limit (even temporarily) at the moment.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How can I use FTP?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              You can view the Wired tutorial on how to setup and use FTP to manage your files <a href="https://www.ostraining.com/blog/coding/filezilla-beginner/" target="_blank">here</a>.
                            </p>
                          </div>
                      </li>
                      
                      <li>
                          <div class="collapsable ">Is there a file/upload size limit?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              There is a per file size limit of 10MB. <strong>Please note this is not a total disk space limit, only a per file limit.</strong> Please do not try to raise this limit through your PHP settings as it is enforced on the file system level.
                            </p>
                            <h5>Can the file size limit be increased?</h5>
                            <p>
                              Sadly, no. This limit is fixed and should generally be enough to upload any HTML, PHP, script and other regular website files. If you would like to upload large files such as video or other downloadable files, please use a service such as MediaFire (downloadable files) or YouTube/Vimeo (videos).
                            </p>
                          </div>
                      </li>


                <li class="faq_section_head">
                    <div class="faq_section_head_child">Domains & DNS</div>
                </li>

                      <li>
                          <div class="collapsable">Can I use my own domain?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                            <p>If you want to use your own domain name from third parties (Free or <a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">Premium</a>), please set your domain nameservers to ours, then add your domain to your control panel using Addon Domain or enter your domain when creating a hosting account. Our nameservers are:</p>
                            <p>- ns1.ultihost.net</p>
                            <p>- ns2.ultihost.net</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">What are your nameservers?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                            <p>Our nameservers are:</p>
                            <p>- ns1.ultihost.net</p>
                            <p>- ns2.ultihost.net</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">Why are your nameservers not registered?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                              <p>This is a common error with GoDaddy and NameCheap hosted domains. Please try using these nameservers:</p>
                              <p>- ns1.byet.org</p>
                              <p>- ns2.byet.org</p>
                              <p>If you are still encountering an error, there are some domain registries which force a nameserver check, in this case, you cannot use your domain with our services.</p>
                              <p>A non-exhaustive list of these domain extensions is as follows:</p>
                              <p>- .com.br</p>
                              <p>- .de</p>
                              <p>- .dk</p>
                              <p>- .hu</p>
                              <p>- .it</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">My domain contains a banned phrase, what do I do?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                              <p>Some phrases are banned on our services due to excessive phishing attempts. If you believe your domain requires an exception, please contract support via the chat feature.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">How do I create/add a CNAME record?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                            <p>To create a CNAME record please do the following:</p>
                            <p>1. Open your control panel through the dashboard</p>
                            <p>2. Scroll to the "Advanced" section</p>
                            <p>3. Click on "CNAME Records"</p>
                            <p>4. In source enter the <strong>subdomain</strong> (<strong>thispart</strong>.yourwebsite.com) part of your domain which you would like to attach the CNAME record to. If you are attempting to verify an SSL certificate, this is usually "_acme-challenge"</p>
                            <p>5. Then in the destination box, enter the location to which the CNAME record should point. If you are attempting to verify an SSL certificate, this is usually something similar to "uniquecode.acme.ultifreehosting.com"</p>
                            <p>6. Finally, click "Add"</p>
                            <p>Now the CNAME record is setup! It may take a few minutes before it starts working, so please be patient.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">How can I find the IP address of my hosting account?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer">
                            <p>If you want to find out the IP address of your hosting account, then do the following:</p>
                            <p>1. Open your control panel through the dashboard</p>
                            <p>2. Under "Account Details" on the right panel of the control panel, find where it says "Main Domain"</p>
                            <p>3. Copy the URL there</p>
                            <p>4. Open this website: <a href="https://toolbox.googleapps.com/apps/dig/" target="_blank">https://toolbox.googleapps.com/apps/dig/</a></p>
                            <p>5. Paste the URL into the box and press the button that says "A"</p>
                            <p>6. Find the IP address (usually on the 8th line of the response)</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I get $1 off my first domain purchase with Ultifree Hosting?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Got to the <a href="/domains.php">domains page</a> on our website, then enter your dream domain in the search. Then at checkout use the following code: "ultifree1$".
                            </p>
                          </div>
                      </li>


                <li class="faq_section_head">
                    <div class="faq_section_head_child">HTTPS & SSL</div>
                </li>

                      <li>
                          <div class="collapsable ">How do I use or get SSL Certificates?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <h4>I already have a certificate:</h4>
                            <p>1. Open your <strong>Control Panel</strong>, click on the <strong>"SSL/TLS"</strong> section.</p>
                            <p>2. Click on <strong>"Configure"</strong> next to the domain you'd like to add the certificate to.</p>
                            <p>3. Paste your <strong>private key</strong> into the <strong>Private Key Field</strong> and click <strong>"Upload Key"</strong> (Including the first and last lines - eg. "---BEGIN PRIVATE KEY--").</p>
                            <p>4. Paste your <strong>certificate</strong> into the <strong>Certificate Field</strong> and click <strong>"Upload Certificate"</strong> (Including the first and last lines - eg. "---BEGIN CERTIFICATE--").</p>
                            <p>Now your certificate is installed, wait 1-2 minutes, access your website using https:// and your website should be secure!</p>
                            <h5>Notes:</h5>
                            <ul>
                                <li>Free hosting only supports 2048 bit keys. If your tool generates 4096 bit keys these won't work on free hosting and you will have to regenerate your key and certificate.</li>
                                <li>There is a CSR box. You don't need to upload anything into this box. It may be empty or contain old data. This will not affect your certificate.</li>
                            </ul>
                            <h4>I don't have a certificate yet:</h4>
                            <p>Open the "SSL Certificate" section in the dashboard and generate a certificate. Once this is complete, follow the instructions above.</p>

                            <h4>Using Cloudflare:</h4>
                            <p>Cloudflare is a great way to get a free SSL certificate. Using cloudflare's system you don't even have to manage the certificates yourself. In order make use of this service do the following:</p>
                            <p>1. Create a Cloudflare account and connect your domain.</p>
                            <p>2. Go into the SSL/TSL settings menu.</p>
                            <p>3. Select "Flexible".</p>
                            <p>4. Now try accessing your website with https://yourdomain.tld</p>
                            <p>Congratulations! You now have free SSL.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I force all traffic to HTTPS?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>Now that you have SSL on your website, you will want to make sure to redirect all your visitors to the secure version of your website.</p>
                            <h5>Using Cloudflare Settings:</h5>
                            <p>1. Log into your Cloudflare dashboard</p>
                            <p>2. Go to the SSL/TSL settings menu</p>
                            <p>3. Click on "Edge Certificates" in the submenu</p>
                            <p>4. Scroll down to "Always use HTTPS"</p>
                            <p>5. Flip the switch to "On"</p>
                            <h5>Using A <code>.htaccess</code> File</h5>
                            <p>This is probably the most common way of forcing HTTPS. To force HTTPS do the following:</p>
                            <p>1. Find your <code>.htaccess</code> file in your htdocs folder - if there isn't one, create a new one</p>
                            <p>2. Click edit if in the online file manager, or download the file and open it using notepad or a similar program</p>
                            <p>3. Add the following lines to the file:</p>
                            <code>
                              RewriteEngine On <br />
                              RewriteCond %{HTTP:X-Forwarded-Proto} =http <br />
                              RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}
                            </code>
                            <p>4. Save and upload your .htaccess file into your htdocs folder</p>
                            <p>If you get a Error 500 - Internal Sever Error after doing this, then you have an error in your <code>.htaccess</code> file. Please open it and check to make sure everything is correct.</p>
                            <p><b>Note:</b> If any of your files/assets go missing on your website, that means the link was probably "http" not "https". Simply change their URLs to use "https", which should fix this problem.</p>
                          </div>
                      </li>

                  <li>
                      <div class="collapsable ">How do I renew my free SSL certificate?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                      <div class="collapsableContent collapsableContentFAQ answer ">
                        <p>Due to the nature of how SSL certificates are created (they contain the expiry date within their code), to "renew" you SSL certificate you will need to generate a new one when your previous certificate expires.</p>
                      </div>
                  </li>

                  <li>
                      <div class="collapsable ">How do I verify my domain?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                      <div class="collapsableContent collapsableContentFAQ answer ">
                          <p>To verify your domain you'll need to create a CNAME record with the values specified in the box that opens when you click the "Verify" button next to your certificate in the dashboard.</p>
                          <p>If your nameservers are pointing to ours you can create a CNAME record in the control panel (in the dashboard click the control panel button, then find the CNAME tab), otherwise please check on the website where you bought your domain.</p>
                      </div>
                  </li>

                <li class="faq_section_head">
                    <div class="faq_section_head_child">Email</div>
                </li>

                      <li>
                          <div class="collapsable ">Is IMAP, POP and SMTP available on free hosting accounts?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>To use your own email software (such as Outlook), you need to have POP, IMAP or SMTP on your hosting account to access your email accounts.</p>
                            <p>Unfortunately, on free hosting accounts IMAP, POP and SMTP are unavailable. The only way to access your inbox being through our Webmail client, accessible through your contol panel.</p>
                            <p><a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">Premium hosting</a> supports POP, IMAP and SMTP, allowing you to use your own email software. In addition, you also get unlimited email accounts, powerful spam filters to protect your accounts, and access to 2 more webmail clients (Horde and SquirrelMail) in addition to the current RoundCude client.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Can I use PHP mail() to send email on free hosting accounts?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>PHP mail() is severely restricted on Ultifree Hosting. Although some messages sent using the mail() function may succeed, generally most messages will be rejected by the mail system.</p>
                            <p>If you want to send mail from your website, the easiest way would be to use an external SMTP service. Using PHPMailer in combination with Gmail is one such option. Additionally, there are also other SMTP providers that will simply forward mail to your Gmail account.</p>
                            <p>The simplest solution to use PHP mail() would be to upgrade to <a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">premium hosting</a>, which has much higher sending limits and has no filters on PHP mail().</p>
                          </div>
                      </li>
                      

                <li class="faq_section_head">
                    <div class="faq_section_head_child">Development</div>
                </li>

                      <li>
                          <div class="collapsable ">How do I create custom .htaccess rules?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>Creating .htaccess rules allows you affect your website in powerful ways such as custom error pages, pretty URLs, and much more. There are many guides online on using the .htaccess file.</p>
                            <p>So how do I set my own .htaccess rules?</p>
                            <h5>Create the .htaccess file in you htdocs directory</h5>
                            <p>Your main domain is attached to the "htdocs/" folder. Addon domains and subdomains are attached to folders like "example.com/htdocs/". In these folders you can create your .htaccess file.</p>
                            <p>A .htaccess file begins with a dot and doesn't have a file extension, therefore Windows often has problems with such files as it hides them and other such things. To avoid this we recommend creating your .htaccess file through the File Manager in your control panel instead.</p>
                            <h5>Do not edit the main .htaccess file</h5>
                            <p>In the root folder of your account there is also a .htaccess file. Please do not edit, delete or do anything with this file. Generally, you shouldn't be able to anyway. You should be able to override all the rules in this file through your own .htaccess file in htdocs.</p>
                            <p>If you do manage to delete the main .htaccess file don't worry. Your website will continue working normally.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Can I use sockets?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Yes you can use socket functions (fsocketopen() etc..), however, access is limited to prevent abuse. For example, only a small set of default ports are open for sockets. Additional ports cannot be opened.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Can I use SSH?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                              <p>
                                  No, currently the free plan does not allow for SSH. If you require SSH, please consider upgrading to a <a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">premium plan</a>.
                              </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How can I enable the ImageMagick PHP extension?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              The Imagick extension is currently disabled on free hosting due to a security vulnerability, therefore we cannot enable it. It also uses several Shell-Level commands, which are not possible to use on free hosting at the moment. If you really need this module, you will have to upgrade to one of our <a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">premium plans</a>.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Can I put ads on my website?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Yes, you can put whatever you want on your website, as long as it isn't illegal, harmful to your visitors or us, and doesn't break our <a href="legal/tos.html" target="_blank">TOS</a>. So yes, you can put ads on your site.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Does Ultifree Hosting provide PHP, MySQL databases, and PHPMyAdmin?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Yes, Ultifree Hosting provides PHP, MySQL, and PHPMyAdmin.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How can I use Laravel on the free hosting plan?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              While it is possible to run Laravel on a free hosting plan, as Laravel is generally not designed to be run on shared website hosting, you will run into some limitations. If you don't mind these then simply follow these steps to setup Laravel:
                            </p>
                            <ol>
                                <li>Upload all the Laravel files (along with dependencies or 'vendor' folder) to the htdocs folder of your website using an FTP client such as FileZilla.</li>
                                <li>Create a .htaccess file in the htdocs folder with the following contents: 
                                  <br> 
                                  <code>
                                    RewriteEngine On
                                    <br>
                                    RewriteRule (.*) /public/$1 [L]
                                  </code>
                                </li>
                                <li>Create a database in the SQL Databases section of the control panel, then use the Import/Export feature in PHPMyAdmin to import the Database.</li>
                                <li>Update database settings in .env file.</li>
                            </ol>
                            <p>As mentioned above you will run into certain limitations. These include:</p>
                            <ul>
                                <li>No access to the artisan CLI</li>
                                <li>No preperation of static files (Laravel Mix) on the hosting server</li>
                                <li>No Composer dependency installation directly on the hosting server</li>
                                <li>No InnoDB support</li>
                                <li>No automatic Git deployment</li>
                            </ul>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Why do I see ?i=1 at the end of a URL?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              When you open your website for the first time you may see "?i=1" at the end of your URL. This extra URL parameter is there due to a browser validation tool used to make sure that your website is only accessed by regular web browsers. Unfortunately, for security reasons, this security system is mandatory on all free sites. It can be removed by <a href="https://ifastnet.com/portal/aff.php?aff=26864&pid=store" onclick="iFastNetEvent('FAQ', 'General');">purchasing a premium plan</a>.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">What is Cloudflare?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Cloudflare is a website acceleration and security service. Cloudflare caches and optimizes the content from your website, and when turned on, visitors will connect to one of Cloudflare's severs around the world instead of to your hosting account. As Cloudflare has many more servers all around the world, your website will load faster. Additionally, Cloudflare can block DDOS attacks or provide your website with a shared SSL certificate.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Cloudflare Limitations<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Although you can easily activate cloudflare through the 'cloudflare' section of your control panel, there are some limitations to our integration:
                            </p>
                            <p>
                              1. Cloudflare can only be used with custom domains. Currently, cloudflare does not support free subdomains on their service.
                            </p>
                            <p>
                              2. Our Mailservers and Cloudflare do not work well together. If you set MX Records and connect to cloudflare, mail will not arrive to your inbox, nor will you be able to send mail.
                            </p>
                            <p>
                              A solution to these two limitations would be to integrate your domain with cloudflare directly by going to their <a href="https://cloudflare.com">website</a> and adding your domain through there.
                            </p>
                          </div>
                      </li>


                <li class="faq_section_head">
                    <div class="faq_section_head_child">Getting Started</div>
                </li>

                      <li>
                          <div class="collapsable ">How can I get free hosting?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Simply, create an account, choose the free website domain you need and start to create your website with full PHP and MySQL support. Upload your files via FTP or the online file manager. We promise that free hosting is and will always stay free.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How do I migrate/transfer my website to Ultifree Hosting?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              If your website doesn’t use MySQL databases, moving your site is very easy. Simply upload all your files to the ‘htdocs’ folder on your hosting account. If you have a PHP based website, check if it has any configuration files where a domain name or file path needs to be set. Update these values as necessary. If your website is using MySQL databases, you need to move the database contents as well and update the configuration of your website to use the database. In order to do this follow these steps:
                            </p>
                            <p>
                              1. Backup the database on the old host. Either use your current provider's MySQL Back Up tool, or if that isn't available log into phpMyAdmin, select your database, and click on the 'Export' tab. Save the file as 'gzipped'.
                            </p>
                            <p>
                              2. Create a database on your hosting account. Go to your website's control panel, click on MySQL Databases, and create your new database there.
                            </p>
                            <p>
                              3. Enter phpMyAdmin on your hosting account account, then click on the 'import' tab, find the backup files of your database and click go. Please be patient as if your database is large, it can take quite some time.
                            </p>
                            <p>
                              4. Now update your configuration files. On Wordpress find the wp-config.php file. Update the database host, username, and password values. These can be found in your control panel, whereas your password is the same one that you use for your control panel account.
                            </p>
                          </div>
                      </li>

                <li class="faq_section_head">
                    <div class="faq_section_head_child">Affiliate Program</div>
                </li>

                      <li>
                          <div class="collapsable">When are the payouts done?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Payouts are done within the first week of each month, taking into consideration weekends and holidays.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">What payout methods do you support?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Currently all payouts are processed through PayPal. You can provide or change your PayPal email in the payouts section of your affiliate dashboard.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">When will my conversions be approved?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Conversions are usually checked within 3-4 business days, however, sometimes it may take up to 10 days.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">How much will I be paid for a free signup?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Currently, a free signup will earn you $0.50. Although this is a much smaller payment than other affiliate programs, in this case you are being paid for promoting a free product. This means you will be able to achieve a much higher conversion rate (often as high as 80%), compared to promoting a paid product.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">What is the minimum payout?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              The minimum payout amount is $35. If the amount is less than $35 for a specific month, then you'll receive the cumulative payouts within the first week of the month in which the payments will be equal or exceed $35.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable">Why was my conversion rejected?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              If a conversion has been marked as rejected, this is due to the conversion failing our fraud checks or your promotion not meeting our <a href="legal/affiliateTOS">Affiliate Terms of Service</a>. For security reasons we cannot reveal how we decide if a conversion is fraudulent, however, if too many of your conversion are rejected, then you may be banned from the affiliate program.
                            </p>
                          </div>
                      </li>


                <li class="faq_section_head">
                    <div class="faq_section_head_child">Ultifree Hosting</div>
                </li>

                      <li>
                          <div class="collapsable ">What is Ultifree Hosting?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Ultifree Hosting is a free website hosting service with unlimited disk space and unlimited bandwidth. It provides support for Wordpress and several E-Commerce solutions. The free plan is 100% free and all of client sites have no forced ads on them.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Is Ultifree Hosting trustworthy? Where can I find reviews?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              Ultifree Hosting has a page on <a href="https://www.trustpilot.com/review/ultifreehosting.com">TrustPilot</a> where you can find independent reviews by users. Additionally, Ultifree Hosting has reviews on <a href="https://www.hostsearch.com/review/ultifree-hosting-review.asp">HostSearch</a> and <a href="https://hostadvice.com/hosting-company/ultifree-hosting-reviews/">HostAdvice</a>.
                              <!-- TrustBox widget - Review Collector -->
                              <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="5fb7f38c5f863a0001bad8ba" data-style-height="52px" data-style-width="100%">
                                <a href="https://www.trustpilot.com/review/ultifreehosting.com" target="_blank" rel="noopener" onclick="ga('send', 'event', 'TrustPilot', 'visit');">Trustpilot</a>
                              </div>
                              <!-- End TrustBox widget -->
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">How can I advertise with you?<i class="fas fa-plus collapsablePlusFAQ"></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>
                              If you, or your business, are interested in placing advertisements on our website to reach our users, please contact us at <a href="mailto=advertising@ultifreehosting.com">advertising@ultifreehosting.com</a> for more information.
                            </p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Why is your hosting free? What's the catch?<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                            <p>You might be wondering how is it that Ultifree Hosting is free. Are there some hidden costs?</p>
                            <p>Well, Ultifree Hosting is, in fact, 100% free without any hidden costs. Here's why:</p>
                            <h5>We have low costs</h5>
                            <p>Ultifree Hosting is powered by iFastNet.  Over the last decade, iFastNet has been developing a unique cloud hosting solution. With it, they managed to host a lot more accounts per server than would have been possible with traditional hosting software, while still keeping websites as fast or even faster than other hosting providers. Thus, our server costs are low.</p>
                            <h5>We make money using ads</h5>
                            <p>We have ads on our homepage and in the control panel. Also iFastNet insall their own ads such as the upgrade offers in your control panel. We will never force ads onto your websites. Your website is your own and costs are low enough that any decent free hosting provider shouldn't need to put ads on your site.</p>
                            <h5>We have fair usage restrictions</h5>
                            <p>Ultifree Hosting is great for hobby sites and experiments. However, high traffic or complex sites aren't suitable in order to make sure no account uses huge amounts of server power and hogs it all. These rules help to keep everything fair and provide quality free hosting to everyone.</p>
                          </div>
                      </li>

                      <li>
                          <div class="collapsable ">Attribution/Links for Images<i class="fas fa-plus collapsablePlusFAQ "></i></div>
                          <div class="collapsableContent collapsableContentFAQ answer ">
                                <p>Homepage Second CTA Background: <a rel="nofollow" href="http://www.freepik.com">Designed by upklyak / Freepik</a></p>
                                <p>Homepage First CTA Background: <a rel="nofollow" href="https://www.freepik.com/photos/technology">Technology photo created by rawpixel.com - www.freepik.com</a></p>
                          </div>
                      </li>
              </ul>

              <br />
              <?php insertAds('freq02', false); ?>
              <br />

            </div>

          </div>
        </section>

        <div class="placeholder"></div>

        <?php include 'footer.php';?>

        <script data-cookieconsent="ignore" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/detectmobilebrowser.js"></script>
        <script async data-cookieconsent="ignore" src="js/analytics.js"></script>
        <script data-cookieconsent="ignore" src="js/mobile_nav.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>
