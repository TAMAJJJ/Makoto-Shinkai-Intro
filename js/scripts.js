//	*******************************************************
//	Toggle element to hide/show
//	*******************************************************
// Step 1: Get a handle on the clickable element and create a variable to hold it
var button = document.getElementById("more");

// Step 2: Get a handle on the element to be toggled and create a variable to hold it
var div = document.getElementById("moreinfo");

// Step 3: Set the default state of the element to be toggled; either "block" (showing) or "none" (hidden)
div.style.display = 'none';

// Step 4: write the function to do the toggling (won't execute 'til called) - have it take-in an 'element' to toggle (note: there's nothing in this step to edit)
function toggleElement(e) {

	// Step 4a: IF display:block, it must be showing, so hide it
	if (e.style.display == 'block') {
		e.style.display = 'none'
	}
	// Step 4b: ELSE it must be hidden, so show it
	else {
		e.style.display = 'block'
	}
};

// Step 5: Apply a "click listener" to the clickable element, and when the element is clicked, run the function on the element to be toggled
more.addEventListener("click", function(){
	toggleElement(div)
});
