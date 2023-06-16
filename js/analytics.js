notMainFolder = false;

window.onload = function() {
    insertArc();
    insertAdsense();
    // insertCrisp();
    insertGoogleAnalytics();
    insertAddThis();
    insertHotjar();
};

function insertGoogleAnalytics() {
    let googleAnalyticsScript = document.createElement("script");
    googleAnalyticsScript.src = "https://www.googletagmanager.com/gtag/js?id=G-E68ZD2V8RC";
    googleAnalyticsScript.async = true;
    googleAnalyticsScript.setAttribute("data-cookieconsent", "statistics");
    document.head.appendChild(googleAnalyticsScript);
    let googleAnalyticsScript2 = document.createElement("script");
    googleAnalyticsScript2.text = "window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-E68ZD2V8RC');";
    googleAnalyticsScript2.setAttribute("data-cookieconsent", "statistics");
    document.head.appendChild(googleAnalyticsScript2);

    let googleAnalyticsEventsScript = document.createElement('script');
    if (window.location.pathname.includes('/error/') || window.location.pathname.includes('/legal/')) {
        googleAnalyticsEventsScript.src = "../js/googleAnalyticsEvents.js";
    } else {
        googleAnalyticsEventsScript.src = "js/googleAnalyticsEvents.js";
    }
    googleAnalyticsEventsScript.setAttribute("data-cookieconsent", "statistics");
    document.head.appendChild(googleAnalyticsEventsScript);
}

function insertAddThis() {
  // Social Addons (Addthis.com) Script Dynamic Insert
  var script3 = document.createElement("script");
  script3.src = "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5d55c577a3cd50";
  script3.async = true;
  script3.setAttribute("data-cookieconsent", "statistics, marketing");
  document.head.appendChild(script3);
}

function insertHotjar() {
  // Hotjar Code
  var script4 = document.createElement("script");
  script4.text = "(function(h,o,t,j,a,r){h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};h._hjSettings={hjid:1396112,hjsv:6};a=o.getElementsByTagName('head')[0];r=o.createElement('script');r.async=1;r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;a.appendChild(r);})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');";
  script4.async = true;
  script4.setAttribute("data-cookieconsent", "statistics, marketing");
  document.head.appendChild(script4);
}

function insertArc() {
  // Arc Widget Import
  var script = document.createElement("script");
  script.async = true;
  script.src = "https://arc.io/widget.min.js#KzBA3Hym";
  document.head.appendChild(script);
}

function insertCrisp() {
  var script = document.createElement("script");
  script.async = true;
  script.text = 'window.$crisp=[];window.CRISP_WEBSITE_ID="876c3034-7c27-42dd-825a-98eadeb85171";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();';
  document.head.appendChild(script);
  var script2 = document.createElement("script");
  script2.text = '$crisp.push(["safe", true]);';
  document.head.appendChild(script2);
}

function insertAdsense() {
 var script7 = document.createElement("script");
 script7.async = true;
 script7.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";
 script7.setAttribute("data-ad-client", "ca-pub-3463250437937128");
 document.head.appendChild(script7);
}