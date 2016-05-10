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
	[ "Question 4", "10", "2", "4", "1", "C" ]
	[ "Question 5", "10", "2", "4", "1", "C" ]
	[ "Question 6", "10", "2", "4", "1", "C" ]
];

function renderQuestion(){
	test = document.getElementById("test");
	document.getElementById("test_progress").innerHTML = "<p class='status'>Question "+(index+1)+" of "+questions.length+"</p>";
	question = questions[index][0];
	choiceA = questions[index][1];
	choiceB = questions[index][2];
	choiceC = questions[index][3];
	choiceD = questions[index][4];

	holder = "<br /><p class='quiz-question'>"+question+"</p>";
	holder += "<div class='row'><div class='medium-1 medium-offset-1 columns'><input type='radio' name='choices' value='A'> "+ choiceA +"</div><br />";
	holder += "<div class='medium-1 medium-offset-3 columns'> <input type='radio' name='choices' value='B'> "+ choiceB +"</div></div><br><br>";
	holder += "<div class='row'><div class='medium-1 medium-offset-1 columns'><input type='radio' name='choices' value='C'> "+ choiceC +"</div>";
	holder += "<div class='medium-1 medium-offset-3 columns'><input type='radio' name='choices' value='D'> "+ choiceD +"</div></div><br><br>";
	holder += "<div class='row'><div class='medium-2 medium-offset-3 columns'><button class='submit' onclick='checkAnswer()'>Submit Answer</button></div></div>";
	
	test.innerHTML = holder;
}

function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[index][4]){
		numCorrect++;
	}
	index++;
	if(index >= questions.length){
		test.innerHTML = "<h2>You got "+numCorrect+" of "+questions.length+" questions correct</h2>";
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