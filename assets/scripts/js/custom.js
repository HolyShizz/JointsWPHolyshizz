jQuery("[data-menu-underline-from-center] a").addClass("underline-from-center");

/*filterSelection("common");

function filterSelection(c) {
  let x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "common") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], " show");
  }
}

function filterSelectionSide(b) {
  let o, i;
  o = document.getElementsByClassName("filterDiv1");
  if (event.currentTarget.classList.contains("show")) {
    for (i = 0; i < o.length; i++) {
      w3RemoveClass(o[i], "sideshow");
      if (o[i].className.indexOf(b) > -1) w3AddClass(o[i], " sideshow");
    }
  }
}

function w3AddClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn-top");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    let currentNeighbor = document.getElementsByClassName("active1");
    if (currentNeighbor.length > 0) {
      currentNeighbor[0].className = currentNeighbor[0].className.replace(" active1", " ");
    }
    let current = document.getElementsByClassName("active");
    if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", " ");
    }
    this.className += " active";
  });
}

var btnMiddle = document.getElementById("btnMiddleContainer");
var btnsM = btnMiddle.getElementsByClassName("btn-middle");
for (let p = 0; p < btnsM.length; p++) {
  btnsM[p].addEventListener("click", function () {
      let current = document.getElementsByClassName("active1");
      if (current.length > 0) {
        current[0].className = current[0].className.replace("active1", "");
      }
      event.currentTarget.className.addClass += " active1";
  });
}
*/