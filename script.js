var navItems = document.getElementsByClassName("img-link");
const navItemsLength = navItems.length;

for(let j = 0; j < navItemsLength; j++) { //loop through all nav items to apply listener to each

	navItems[j].addEventListener("click", function() { //add event listener to each nav item

		var moveToInactive = document.querySelectorAll(".active"); //find all with active class.

		moveToInactive[0].classList.remove("active"); //remove active from nav
		this.classList.add("active"); //add active to nav

		moveToInactive[1].classList.remove("active"); //remove active from page		
		document.querySelectorAll(".page")[j].classList.add("active"); //add active to page
  		
	});

}
