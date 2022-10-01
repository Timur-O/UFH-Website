if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./js/serviceWorker.js', {
    scope: './'
  });
}

$.extend($.easing,{
    easeInOutExpo: function(x, t, b, c, d){
        if (t==0) return b;
        if (t==d) return b+c;
        if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
        return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
    }
});

var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
  if (imgDefer[i].getAttribute('data-src')) {
    imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
  } 
}

var backgroundDefer = document.querySelectorAll('section[data-src]');
var style = "background-image: url({url})";
for (var i = 0; i < backgroundDefer.length; i++) {
  backgroundDefer[i].setAttribute('style', style.replace("{url}", backgroundDefer[i].getAttribute('data-src')));
}

// Function called if AdBlock is not detected
function adBlockNotDetected() {
  var banners = document.getElementsByClassName("banner-funding");
  for (var i=0;i<banners.length;i+=1){
    banners[i].style.display = 'none';
  }
  var adContainers = document.getElementsByClassName("leaderad_container");
  for (var i=0;i<adContainers.length;i+=1){
    adContainers[i].style.display = 'block';
  }
}
// Function called if AdBlock is detected
function adBlockDetected() {
  var banners = document.getElementsByClassName("banner-funding");
  for (var i=0;i<banners.length;i+=1){
    banners[i].style.display = 'block';
  }
  var adContainers = document.getElementsByClassName("leaderad_container");
  for (var i=0;i<adContainers.length;i+=1){
    adContainers[i].style.display = 'none';
  }
}
// Recommended audit because AdBlock lock the file 'blockadblock.js' 
// If the file is not called, the variable does not exist 'blockAdBlock'
// This means that AdBlock is present
if(typeof blockAdBlock === 'undefined') {
  adBlockDetected();
} else {
  blockAdBlock.onDetected(adBlockDetected);
  blockAdBlock.onNotDetected(adBlockNotDetected);
  // and|or
  blockAdBlock.on(true, adBlockDetected);
  blockAdBlock.on(false, adBlockNotDetected);
  // and|or
  blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
}