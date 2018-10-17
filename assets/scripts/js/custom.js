jQuery("[data-menu-underline-from-center] a").addClass("underline-from-center");

var coursecStep1 = document.querySelector("#coursec-step-1");
var coursecStep1Buttons = coursecStep1.querySelectorAll(".coursec-top-nav");
var coursecStep2 = document.querySelector("#coursec-step-2");
var coursecStep2Buttons = document.querySelectorAll("#coursec-step-2 div.cell button.coursec-middle-but");
var coursecStep3 = document.querySelector("#coursec-step-3");
var coursecStep3Buttons = document.querySelectorAll("#coursec-step-3 div.cell button.coursec-bottom-but");
var coursecAll = document.querySelectorAll("#coursec-step-1 button.coursec-top-nav, #coursec-step-2 div.cell button.coursec-middle-but,#coursec-step-3 div.cell button.coursec-bottom-but");
var coursecInactiveCard = document.querySelectorAll("#coursec-step-2 .card div.inactive");

coursecStep1.addEventListener('click', function activeAdd(t) {
  if (t.target.tagName == "BUTTON") {
    Array.from(coursecAll).forEach(function (button) {
      button.classList.replace('primary', 'secondary')
    })
    t.target.classList.remove('secondary');
    t.target.classList.add('primary');
    Array.from(coursecInactiveCard).forEach(function (inactive) {
      inactive.classList.remove('inactive');
    })
  }
}, 'passive');

coursecStep3.addEventListener('click', function activeAdd(t) {
  if (t.target.tagName == "BUTTON") {
    Array.from(coursecAll).forEach(function (button) {
      button.classList.replace('primary', 'secondary')
    })
    t.target.classList.remove('secondary');
    t.target.classList.add('primary');
    Array.from(coursecInactiveCard).forEach(function (inactive) {
      inactive.classList.add('inactive');
    })
  }
}, 'passive');

coursecStep2.addEventListener('click', function activeAdd(t) {
  if (t.target.tagName == "BUTTON") {
    Array.from(coursecStep3).forEach(function (button) {
      button.classList.replace('primary', 'secondary')
    })
    t.target.classList.remove('secondary');
    t.target.classList.add('primary');
  }
}, 'passive')