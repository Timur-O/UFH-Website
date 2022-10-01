//Collapsable JS
var coll = document.getElementsByClassName("collapsable");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
      if ($(content).hasClass('collapsableContentFAQ')) {
        setTimeout(function() {content.style.display = "none";}, 150);
      } else {
        setTimeout(function() {content.style.display = "none";}, 1000);
      }
    } else {
      content.style.display = "block";
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

// FAQs JS
function faqSearch() {
  // Declare variables
  var input, filter, ul, li, div, i, txtValue;
  input = document.getElementById('searchBarFAQ');
  filter = input.value.toUpperCase();
  ul = document.getElementById("answersFAQ");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  hiddenCount = 1; // start at 1 to account for the text being pre hidden
  for (i = 0; i < li.length; i++) {
    div = li[i].getElementsByTagName("div")[0];
    txtValue = li[i].getElementsByTagName("div")[0].textContent;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      if (li[i].classList.contains("faq_section_head")) {
        if (filter == "") {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
          hiddenCount++;
        }
      } else {
        li[i].style.display = "";
      }
    } else {
      li[i].style.display = "none";
      hiddenCount++;
    }
  }
  if (hiddenCount == document.getElementById("answersFAQ").children.length) {
    document.getElementById('no_results_text').style.display = "";
  } else {
    document.getElementById('no_results_text').style.display = "none";
  }
}

$(document).ready(function(){
    $('#no_results_text').hide();
    
    $('a[href="#"]').click(function(e){
        e.preventDefault();
        $('nav').removeClass('visible');
        $('html,body').stop().animate({scrollTop: $('.'+$(this).data('scrollto')).offset().top-65 }, 700, 'easeInOutExpo', function(){});
    });

    $('.toggle-menu').click(function(){
        $('nav').toggleClass('visible');
    });

    if($(window).width() < 800){
        $('.pricing > div > div:nth-of-type(3)').insertAfter($('.pricing > div > div:nth-of-type(1)'));
    }

});