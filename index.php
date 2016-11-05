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
			<span class='header'>Work</span>
			<p class='details'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor nibh eget nisi posuere molestie. Aenean volutpat vel ante in lacinia. Praesent dapibus lacinia elit at placerat. Aenean sollicitudin nibh sed faucibus volutpat. Curabitur gravida nunc rhoncus tempus dignissim. In eu elementum diam. Aenean nisi mi, faucibus ut erat quis, aliquet posuere nunc. </p>
			
			<span class='header'>Physics Department at Texas A&M</span>
			<p class='details'><span class='descriptor'>Purpose: </span>You can find some of the public code I've written at <a href='https://github.com/KyleBonar'>https://github.com/KyleBonar</a>.
			<br><span class='descriptor'>Tools: </span> PHP 5.4, CSS3, HTML5, MySQL, Wordpress, JavaScript, jQuery </p>

			<span class='header'>Mitchell Institute at Texas A&M</span>
			<p class='details'><span class='descriptor'>Purpose: </span>You can find some of the public code I've written at <a href='https://github.com/KyleBonar'>https://github.com/KyleBonar</a>.
			<br><span class='descriptor'>Tools: </span> PHP 5.4, CSS3, HTML5, MySQL, Wordpress, JavaScript, jQuery</p>

			<span class='header'>JavaScript Fun Quiz</span>
			<p class='details'><span class='descriptor'>Purpose: </span>You can find some of the public code I've written at <a href='https://github.com/KyleBonar'>https://github.com/KyleBonar</a>.
			<br><span class='descriptor'>Tools: </span> JavaScript, HTML5, CSS3</p>
			

		</div>
		<div id='contact-block' class='page'>
			<span class='header'>GitHub</span>
			<p class='details'>You can find some of the public code I've written at <a href='https://github.com/KyleBonar'>https://github.com/KyleBonar</a>.</p>
			<span class='header'>Email</span>	
			<p class='details'>Email me at <a href='mailto:kylewb2011@gmail.com'>kylewb2011@gmail.com</a>. I'll be sure to get back to you as soon as I can.</p>
		</div>
		<div id='blog-block' class='page'>

		</div>

	</div>

</div>

<script type="text/javascript">

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

</script>
<?php include 'footer.php'; ?>
