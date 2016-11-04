<div id='quiz-background' >
	<div class='wrap' id='portfolio'>
		<div class='row'>
			<div class='medium-12 columns' >
				<h3>Quiz</h3>
				<hr />
			</div>
		</div>	
		<div class='row'>
			<div class='medium-12 columns init-back' id='quiz-area'>
				<div id="test_progress"></div>
				<div id="test"></div>
			</div>
		</div>
	</div>
	<br />
</div>

<script>
var index = 0;
var numCorrect = 0;
var test, test_progress, question, choice, choices, choiceA, choiceB, choiceC, choiceD, holder;
var globalQuestionObject = {}; //globally scopped object


function renderTopic(){
	test = document.getElementById("test");

	holder = "<br /><p class='quiz-select'>"+"Welcome to my quiz! Choose the topic below."+"</p>";

	holder += "<div class='row'>"; //open row
		holder += "<label for='ct1' class='topicChoiceArea medium-4 medium-offset-1 columns'><input type='radio' id='ct1' name='topicChoices' value='Astronomy'> "+ "Astronomy" +"</label><br />"; 
		holder += "<label for='ct2' class='topicChoiceArea medium-4 medium-offset-2 columns'> <input type='radio' id='ct2' name='topicChoices' value='Mathematics'> "+ "Mathematics" +"</label>";
	holder += "</div><br><br>"; //close
	holder += "<div class='row'>"; //open row
		holder += "<label for='ct3' class='topicChoiceArea medium-4 medium-offset-1 columns'><input type='radio' id='ct3' name='topicChoices' value='Forestry'> "+ "Forestry" +"</label>";
		holder += "<label for='ct4' class='topicChoiceArea medium-4 medium-offset-2 columns'><input type='radio' id='ct4' name='topicChoices' value='PopCulture'> "+ "Pop Culture" +"</label>";
	holder += "</div><br><br>"; //close
	holder += "<div class='row'>"; //open row
		holder += "<label for='ct5' class='topicChoiceArea medium-4 medium-offset-1 columns'><input type='radio' id='ct5' name='topicChoices' value='History'> "+ "History" +"</label>";
		holder += "<label for='ct6' class='topicChoiceArea medium-4 medium-offset-2 columns'><input type='radio' id='ct6' name='topicChoices' value='Random'> "+ "Random Topic" +"</label>";
	holder += "</div><br><br>"; //close

	holder += "<div class='row'><div class='medium-2 medium-offset-5 columns'><button class='submit' onclick='alterBackground()'>Select Topic</button></div></div>";

	test.innerHTML = holder;
}

function alterBackground(){
	var quizBackground = document.getElementById("quiz-area").className;  //for conveniece later
	topicChoices = document.getElementsByName("topicChoices"); //array of topic choices
	choice = ""; //intialize as blank
	for(var j=0; j<topicChoices.length; j++)
	{
		if(topicChoices[j].checked)
		{
			choice = topicChoices[j].value;
		}
	}

	if(choice === "") //if not assigned to anything
	{
		renderTopic(); // call function to allow user to choose topic again
	}
	else if(choice!=="Random") //check to make sure user didn't click random
	{
		document.getElementById("quiz-area").className = document.getElementById("quiz-area").className.replace("init-back", choice+"-back"); //remove init-back from classname and replace with appropriate value for css
	}
	else //if user selected random
	{
		var randomBackground = Math.floor((Math.random() * 5) + 1);  //random whole number between 1 and 5
		if(randomBackground ===1)
		{
			choice = 'Astronomy';
		} 
		else if(randomBackground ===2)
		{
			choice = 'Mathematics';
		}
		else if(randomBackground ===3)
		{
			choice = 'Forestry';
		}
		else if(randomBackground ===4)
		{
			choice = 'History';
		}
		else if(randomBackground ===5)
		{
			choice = 'PopCulture';
		}

		document.getElementById("quiz-area").className = document.getElementById("quiz-area").className.replace("init-back", choice+"-back"); //remove init-back from classname and replace with appropriate value for css

	}

	//need to load appropriate questions depending on the topic choice of the user
	if(choice === 'Astronomy')
	{
		var questions = [
		    [ "How many miles are in a light-year?", "6 billion", "9 billion", "6 trillion", "9 trillion", "C" ],
			[ "On average, how many miles is the Earth from the Sun?", "30 million", "72 million", "93 million", "150 million", "C" ],
			[ "Who proposed the 3 laws of planetary motion?", "Nicolaus Copernicus", "Johannes Kepler", "Neil Armstrong", "Carl Sagan", "B" ],
			[ "Which two planets are Gas Giants?", "Saturn and Mars", "Saturn and Jupiter", "Jupiter and Mars", "Venus and Mercury", "B" ],
			[ "Which planet has a moon almost as big as itself?", "Earth", "Neptune", "Uranus", "Pluto", "D" ],
			[ "Which planet is the hottest", "Venus", "Mars", "Mercury", "All of the planets are equally attractive", "A" ]
		];
	} 
	else if(choice ==='Mathematics')
	{
		var questions = [
		    [ "What is 7 * 3 + 3 ?", "24", "42", "21", "44", "A" ],
			[ "Find the median of the given data: 13, 13, 13, 13, 14, 14, 16, 18, 21.", "13", "14", "21", "15", "B" ],
			[ "Each side of a square has a length of 5m. What is the are of the square?", "1 m&#0178;", "5 m&#0178;", "20 m&#0178;", "25 m&#0178;", "D" ],
			[ "Subtract -5b from -1b.", "-6b", "4b", "-4b", "6b", "B" ],
			[ "What temperature, in Celsius, is equal to 300&#176;K", "27&#176; C", "30&#176; C", "300&#176; C", "None of these", "A" ],
			[ "If each edge of a cube is increased in length by 100%, how many times larger will the new volume be compared to the old?", "1x", "2x", "4x", "8x", "D" ]
		];
	}
	else if(choice ==='Forestry')
	{
		var questions = [
		    [ "A chain's length is...", "66 ft", "120 ft", "6 ft", "twenty paces", "A" ],
			[ "This tree depends on fire for species survival.", "Spruce Pine", "Yellow Poplar", "Longleaf Pine", "Scots Pine", "C" ],
			[ "To improve wildlife, a prescribed burn should be made during...?", "Summer", "Fall", "Winter", "Spring", "C" ],
			[ "The first four year school with a forestry curriculum was...?", "Texas A&M University", "Cornell", "Yale", "Rice", "B" ],
			[ "What product does a chip-n-saw operation produce?", "Chips", "Construction grade lumber", "Neither", "Both", "D" ],
			[ "Fines are...", "Sawdust byproduct", "Remanufactured trim", "inferior hardwood lumber", "A lie created by the Government", "A" ]
		];
	}
	else if(choice ==='History')
	{
		var questions = [
		    [ "Who was the only President to serve more than two terms?", "Franklin D. Roosevelt", "Ulysses S. Grant", "Theodore Roosevelt", "George Washington", "A" ],
			[ "Where was Malcolm X killed?", "Downtown Boston", "Massachusetts State Prison", "Audubon Ballroom, Manhatan", "New York, New York", "C" ],
			[ "At its height, what was the slave population in the U.S.?", "2 million", "500,000", "1 million", "4 million", "D" ],
			[ "Who said \"Give me liberty or give me death?\" ", "John Hancock", "James Madison", "Patrick Henry", "Samuel Adams", "C" ],
			[ "World War I began in which year?", "1914", "1917", "1923", "1930", "A" ],
			[ "Adolf Hitler was born in which country?", "France", "Austria", "Germany", "Hungary", "B" ]
		];
	}
	else if(choice ==='PopCulture')
	{
		var questions = [
		    [ "Caitlyn Jenner was revealed to the world via which magazine?", "Instyle", "Vanity Fair", "Vogue", "Marie Claire", "B" ],
			[ "Which singer left the band One Direction?", "Louis Tomlinson", "Niall Horan", "Zayn Malik", "Harry Styles", "C" ],
			[ "Harper Lee release her 'To Kill a Mockingbird' follow-up with ...?", "'Go Tell It On The Mountain'", "'Go To The End Of The Line'", "'Go Set A Watchman'", "'Go Fly A Kite'", "C" ],
			[ "Which is not one of the five core emotions/characters in Pixar's 'Inside Out'?", "Fear", "Joy", "Surprise", "Sadness", "C" ],
			[ ".... became the first black woman to win an Emmy in the Best Actress in a Drama category. ", "Regina King", "Kerry Washington", "Viola Davis", "Uzo Aduba", "C" ],
			[ "Which artist won Album of the Year at the 2015 Grammys?", "Beck", "Ed Sheeran", "Beyonce", "Sam Smith", "A" ]
		];
	}
	

	if (questions) //only if questions is set
	{
		questions = shuffle(questions);  //shuffle array order
		globalQuestionObject.questions = questions; //add to global object so we can access in other parts of application
		renderQuestion(); //now that background is set, we can render appropriate question
	}
		
}

function renderQuestion(){
	test = document.getElementById("test");

	question = globalQuestionObject.questions[index][0];
	choiceA = globalQuestionObject.questions[index][1];
	choiceB = globalQuestionObject.questions[index][2];
	choiceC = globalQuestionObject.questions[index][3];
	choiceD = globalQuestionObject.questions[index][4];

	document.getElementById("test_progress").innerHTML = "<p class='status'>Question "+(index+1)+" of "+globalQuestionObject.questions.length+"</p>";
	
	holder = "<br /><p class='quiz-question'>"+question+"</p><br />";
	holder += "<div class='row'>";
		holder += "<label for='ac1' class='answerChoiceArea medium-4 medium-offset-1 columns'><input type='radio' id='ac1' name='answerChoices' value='A'> "+ choiceA +"</label><br />";
		holder += "<label for='ac2' class='answerChoiceArea medium-4 medium-offset-2 columns'> <input type='radio' id='ac2' name='answerChoices' value='B'> "+ choiceB +"</label>";
	holder += "</div><br><br>";
	holder += "<div class='row'>";
		holder += "<label for='ac3' class='answerChoiceArea medium-4 medium-offset-1 columns'><input type='radio' id='ac3' name='answerChoices' value='C'> "+ choiceC +"</label>";
		holder += "<label for='ac4' class='answerChoiceArea medium-4 medium-offset-2 columns'><input type='radio' id='ac4' name='answerChoices' value='D'> "+ choiceD +"</label>";
	holder += "</div><br><br>";
	holder += "<div class='row'><div class='medium-2 medium-offset-5 columns'><button class='submit' onclick='checkAnswer()'>Submit Answer</button></div></div>";
		
	test.innerHTML = holder;
}

function checkAnswer(){
	answerChoices = document.getElementsByName("answerChoices"); //get array of answerChoices
	choice = ""; //intialize choice as empty

	for(var i=0; i<answerChoices.length; i++) //loop through to find checked answer
	{
		if(answerChoices[i].checked) // found checked answer
		{
			choice = answerChoices[i].value; //assign to variable
		}
	}

	
	if(choice === "") //make sure user selected an answer before continueing
	{
		renderQuestion(); //dont move question forward -- force user to select an answer
	}
	else
	{
		if(choice == globalQuestionObject.questions[index][5]) //check if answer correct
		{
			numCorrect++; //incriment the "correct" counter
		}

		if(index+1 >= globalQuestionObject.questions.length) //check if at end of questions
		{
			document.getElementById("test_progress").innerHTML = "Test Complete!"; //inform that test is over
			test.innerHTML = "<h2 class='recapScore'>You answered "+numCorrect+" of "+globalQuestionObject.questions.length+" questions correctly.</h2>\n"; //inform user how many questions they got correct
			test.innerHTML += "<button class='submit' onclick='reloadPage()'> Reload Page to Continue";
		}
		else //if not at end then keep going
		{
			index++;
			renderQuestion();
		}
	}
	
}

//Fisher-Yates shuffle array algorithm
function shuffle(array){
	var m = array.length, t, i;

	// While there remain elements to shuffle…
	while (m)
	{
		i = Math.floor(Math.random() * m--); // Pick a remaining element

		// And swap it with the current element.
		t = array[m];
		array[m] = array[i];
		array[i] = t;
	}

	  return array;
	}

function reloadPage(){
	window.location.reload();
}


renderTopic(); //start it all off!

</script>

