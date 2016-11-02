<?php include 'header.php'; ?>

<div id='content-wrapper'>
	<div id='navigation'>
		<a href='#' class='img-link active' id='home'><img src='http://kylebonar.com/images/home.svg'><span>Home</span></a>
		<a href='#' class='img-link' id='portfolio'><img src='http://kylebonar.com/images/work.svg'><span>Portfolio</span></a>
		<a href='#' class='img-link' id='contact' ><img src='http://kylebonar.com/images/contact.svg'><span>Contact</span></a>
		<a href='#' class='img-link' id='blog'><img src='http://kylebonar.com/images/blog.svg'><span>Blog (?)</span></a>
	</div>

	<div id='main'>
		<div id='home-block' class='page active'>
			<img src='http://kylebonar.com/images/KBonar.jpg'>
			<span id='name'>Kyle Bonar</span>
			<span id='self-title'>Self Proclaimed Awesome Guy</span>
		</div>
		<div id='portfolio-block' class='page'>
			<span id='work-title'>Work</span>
			<p id='work-paragraph'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor nibh eget nisi posuere molestie. Aenean volutpat vel ante in lacinia. Praesent dapibus lacinia elit at placerat. Aenean sollicitudin nibh sed faucibus volutpat. Curabitur gravida nunc rhoncus tempus dignissim. In eu elementum diam. Aenean nisi mi, faucibus ut erat quis, aliquet posuere nunc. </p>
			<div class='img-row'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
			</div>
			<div class='img-row'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
				<img src='http://kylebonar.com/images/fillerImage.jpg' class='work-img'>
			</div>

		</div>
		<div id='contact' class='page'>

		</div>
		<div id='blog-blocker' class='page'>

		</div>

	</div>

</div>

<script type="text/javascript">

var navItems = document.getElementsByClassName("img-link");
const navItemsLength = navItems.length;
var rateOfScroll = 360;

for(let j = 0; j < navItemsLength; j++) {

	navItems[j].addEventListener("click", function() {

		var moveToInactive = document.querySelectorAll(".active"); //find all with active class.

		moveToInactive[0].classList.remove("active"); //remove active from nav
		this.classList.add("active"); //add active to nav

		moveToInactive[1].classList.remove("active"); //remove active from page		
		document.querySelectorAll(".page")[j].classList.add("active"); //add active to page
  		
	});

}


</script>
<?php include 'footer.php'; ?>
