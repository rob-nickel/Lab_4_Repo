<?php

        echo '<body style="background-color:DarkOrange">';

        $correct = 0;

        $a1 = $_POST['q1'];
        $a2 = $_POST['q2'];
        $a3 = $_POST['q3'];
        $a4 = $_POST['q4'];
        $a5 = $_POST['q5'];

        if ($a1 == "Blue") { $correct++; }
        if ($a2 == "Zolotor") { $correct++; }
        if ($a3 == "Sight") { $correct++; }
        if ($a4 == "Carota") { $correct++; }
        if ($a5 == "China") { $correct++; }

        echo "You got<b> $correct / 5 correct!</b><br>";
        $percent = $correct * 20;
        echo "That means <b>$percent%</b><br><br>";

        echo "<b>Question 1:</b> Which of the following is not a color of carrots?<br>";
        echo "You answered: $a1<br>";
        echo "Correct answer: Blue<br><br>";

        echo "<b>Question 2:</b> Which of the following is not a type of carrot?<br>";
        echo "You answered: $a2<br>";
        echo "Correct answer: Zolotor<br><br>";

        echo "<b>Question 3:</b> Eating carrots helps which sense?<br>";
        echo "You answered: $a3<br>";
        echo "Correct answer: Sight<br><br>";

        echo "<b>Question 4:</b> What is the scientific name for a carrot?<br>";
        echo "You answered: Daucus $a4<br>";
        echo "Correct answer: Daucus Carota<br><br>";

        echo "<b>Question 5:</b> Which country produces the most carrots?<br>";
        echo "You answered: $a5<br>";
        echo "Correct answer: China<br><br>";
 ?>
