<?php

        $num_correct = 0;

        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];

        if ($answer1 == "Fraser Hall") { 
                $num_correct++; 
        }
        if ($answer2 == "Jayhawks") { 
                $num_correct++; 
        }
        if ($answer3 == "Budig Hall") { 
                $num_correct++; 
        }
        if ($answer4 == "1865") { 
                $num_correct++; 
        }
        if ($answer5 == "Watson") { 
                $num_correct++; 
        }

        echo "You got<b> $num_correct / 5 correct</b><br>";
        $percent = $num_correct * 20;
        echo "Your total score is: <b>$percent%</b><br><br>";

        echo "<b>Question 1:</b> What building is the sociology department located?<br>";
        echo "You answered: $answer1<br>";
        echo "Correct answer: Fraser Hall<br><br>";

        echo "<b>Question 2:</b> What is KU's mascot?<br>";
        echo "You answered: $answer2<br>";
        echo "Correct answer: Jayhawks<br><br>";

        echo "<b>Question 3:</b> What building did the basketball team use to play in before Allen Fieldhouse?<br>";
        echo "You answered: $answer3<br>";
        echo "Correct answer: Budig Hall<br><br>";

        echo "<b>Question 4:</b> What year was KU founded?<br>";
        echo "You answered: $answer4<br>";
        echo "Correct answer: 1865<br><br>";

        echo "<b>Question 5:</b> What is the largest library on Campus?<br>";
        echo "You answered: $answer5<br>";
        echo "Correct answer: Watson<br><br>";
 ?>