<style>
#quiz-area{ 
	color: #fff;
}
#test_progress {

}
.quiz-question {
	font-size: 2rem;
}
.init-back {
	background-image: url("http://kylebonar.com/images/fun-quiz-init-back.jpg");
	height: 500px;
	width: 100%;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: #fff;
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
}
</style>


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
</div>
<script>
var index = 0;
var numCorrect = 0;
var test, test_progress, question, choice, choices, choiceA, choiceB, choiceC, choiceD, holder;
var questions = [
    [ "Question 1", "1", "2", "3", "1", "B" ],
	[ "Question 2", "1", "2", "3", "1", "C" ],
	[ "Question 3", "1", "2", "3", "1", "A" ],
	[ "Question 4", "10", "2", "4", "1", "C" ],
	[ "Question 5", "10", "2", "4", "1", "C" ],
	[ "Question 6", "10", "2", "4", "1", "C" ]
];

function renderQuestion(){
	test = document.getElementById("test");
	document.getElementById("test_progress").innerHTML = "<p class='status'>Question "+(index+1)+" of "+questions.length+"</p>"; // progress of test
	question = questions[index][0]; //get question
	choiceA = questions[index][1]; //option A
	choiceB = questions[index][2]; //option B
	choiceC = questions[index][3]; //option C
	choiceD = questions[index][4]; //option D

	holder = "<br /><p class='quiz-question'>"+question+"</p>"; //going to create holder variable and set innerHTML after
	holder += "<div class='row'><div class='medium-1 medium-offset-1 columns'><input type='radio' name='choices' value='A'> "+ choiceA +"</div><br />";
	holder += "<div class='medium-1 medium-offset-3 columns'> <input type='radio' name='choices' value='B'> "+ choiceB +"</div></div><br><br>";
	holder += "<div class='row'><div class='medium-1 medium-offset-1 columns'><input type='radio' name='choices' value='C'> "+ choiceC +"</div>";
	holder += "<div class='medium-1 medium-offset-3 columns'><input type='radio' name='choices' value='D'> "+ choiceD +"</div></div><br><br>";
	holder += "<div class='row'><div class='medium-2 medium-offset-3 columns'><button class='button' onclick='checkAnswer()'>Submit Answer</button></div></div>";
	
	test.innerHTML = holder;
}

function checkAnswer(){
	choices = document.getElementsByName("choices"); //will be array of all the choices elements
	for(var i=0; i<choices.length; i++) //loop through all choice options
	{ 
		if(choices[i].checked) //get the one that was checked by user
		{
			choice = choices[i].value; //assign for comparison
		}
	}
	if(choice == questions[index][5])  //if answered choice is same as the assigned answer
	{ 
		numCorrect++; //incriment number correct
	}

	index++; //incriment index to go to next question
	if(index >= questions.length) //if exceeded number of questions in array
	{
		test.innerHTML = "<p class='show-results'>You got "+numCorrect+" of "+questions.length+" questions correct</p>";
		document.getElementById("test_progress").innerHTML = "Test Completed";
		index = 1;
		
	}
	else
	{
		renderQuestion();
	}
}
renderQuestion();
</script>