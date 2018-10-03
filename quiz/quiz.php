<?php
    // Input
	$q1_a = $_POST["q1"];
	$q2_a = $_POST["q2"];
	$q3_a = $_POST["q3"];
	$q4_a = $_POST["q4"];
	$q5_a = $_POST["q5"];


	// Score
	$score = 0;
	if($q1_a == "10") {
		$score++;
	}
	if($q2_a == "Sunday") {
		$score++;
	}
	if($q3_a == "e^x") {
		$score++;
	}
	if($q4_a == "Qatar") {
		$score++;
	}
	if($q5_a == "Peru") {
		$score++;
	}

    // Correct answer key
    echo "Question 1: What is 1+1? <br>";
    echo "You answered: " . $q1_a . "<br>";
    echo "Correct answer: 10 <br> <br>";

    echo "Question 2: What is the first day of the week? <br>";
    echo "You answered: " . $q2_a . "<br>";
    echo "Correct answer: Sunday <br> <br>";

    echo "Question 3: What is the derivative of e^x? <br>";
    echo "You answered: " . $q3_a . "<br>";
    echo "Correct answer: e^x <br> <br>";

    echo "Question 4: Where is the next FIFA World Cup? <br>";
    echo "You answered: " . $q4_a . "<br>";
    echo "Correct answer: Qatar <br> <br>";

    echo "Question 5: Who is going to win the next FIFA World Cup? <br>";
    echo "You answered: " . $q5_a . "<br>";
    echo "Correct answer: Peru <br> <br>";

    // Total score
	echo "The total score is: " . $score . "<br> <br>";

    // Percent
    $percent = $score * 20 ;
    echo "Percent: " . $percent . "% <br> <br>"
?>
