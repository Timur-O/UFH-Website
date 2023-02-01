//Collapsable JS
const collapsableElements = document.getElementsByClassName("collapsable");

for (let i = 0; i < collapsableElements.length; i++) {
    collapsableElements[i].addEventListener("click", function() {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.maxHeight) {
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
    const searchBox = document.getElementById("searchBarFAQ");
    const searchTerm = searchBox.value.toLowerCase();

    const questionsAndAnswers = document.getElementById("answersFAQ");
    const sectionHeaders = questionsAndAnswers.getElementsByClassName("faq_section_head");
    const questions = questionsAndAnswers.getElementsByClassName("collapsable");

    let numberOfResults = 0;

    for (let i = 0; i < questions.length; i++) {
        // Collapse all open questions
        if (questions[i].classList.contains("active")) {
            questions[i].classList.remove("active");
            const questionContent = questions[i].nextElementSibling;
            questionContent.style.maxHeight = null;
            questionContent.style.display = "none";
        }

        // Show normal FAQ page if empty search value
        if (searchTerm === "") {
            questions[i].style.display = "block";
            numberOfResults = questions.length;
        } else {
            // Search for questions
            const questionText = questions[i].textContent.toLowerCase();
            const answerText = questions[i].nextElementSibling.textContent.toLowerCase();
            if (questionText.search(searchTerm) === -1) {
                if (answerText.search(searchTerm) === -1) {
                    // Hide these questions => not found in question/answer
                    questions[i].style.display = "none";
                } else {
                    // Found in answer, but not question
                    numberOfResults++;
                }
            } else {
                // Found in question
                numberOfResults++;
            }
        }
    }

    for (let i = 0; i < sectionHeaders.length; i++) {
        if (searchTerm === "") {
            sectionHeaders[i].style.display = "block";
        } else {
            const nextSiblings = getNextSiblingsWhoseFirstChildIsVisibleUntil(sectionHeaders[i], ".faq_section_head");
            if (nextSiblings.length === 0) {
                sectionHeaders[i].style.display = "none";
            }
        }
    }

    // Show or Hide "Not Found" Text
    if (numberOfResults === 0) {
        document.getElementById("no_results_text").style.display = "block";
    } else {
        document.getElementById("no_results_text").style.display = "none";
    }
}

// Helper function to get next elements until
function getNextSiblingsWhoseFirstChildIsVisibleUntil(elem, selector) {
    let siblings = [];
    let next = elem.nextElementSibling;

    // Loop through all siblings
    while (next) {
        // If the matching item is found, quit
        if (selector && next.matches(selector)) break;

        // Otherwise, push to array
        if (next.firstElementChild.style.display !== "none") {
            siblings.push(next);
        }

        // Get the next sibling
        next = next.nextElementSibling
    }

    return siblings;
}

$(document).ready(function(){
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