function filterSelection(c) {
    console.log("Filter called with:", c);
    
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    console.log("Found this many filterDiv elements:", x.length);
    
    if (c == "all") c = "";
    
    for (i = 0; i < x.length; i++) {
      console.log("Card classes:", x[i].className);
      w3RemoveClass(x[i], "show");
      
      console.log("After removing show, classes are:", x[i].className); // ADD THIS
      console.log("Looking for:", c); // ADD THIS
      console.log("Index result:", x[i].className.indexOf(c)); // ADD THIS
      
      if (x[i].className.indexOf(c) > -1) {
        console.log("Showing card:", i);
        w3AddClass(x[i], "show");
      }
    }
  }

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("category-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}