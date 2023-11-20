<?php
include_once 'header.php';

?>
<body>
<div>
    <a  href="index.php">Назад</a>

    <?php

    $correctAnswers = [
        'question1' => '3',
        'question2' => '1',
        'question3' => '1',
        'question4' => '1',
        'question5' => '3',
        'question6' => '4',
        'question7' => '1',
        'question8' => '2',
    ];

    $correct_answers_count = 0;

    foreach ($correctAnswers as $question => $answer) {
        if (($_POST[$question] ?? null) === $answer) {
            $correct_answers_count+=1;
        }
    }
    $userName=htmlspecialchars($_POST['name']);
    $db = new PDO('mysql:host=localhost;dbname=quiz', 'root', '');

    $query = $db->prepare('INSERT INTO results ( name, count,correct_answer,wrong_answer) VALUES (?,?,?,?)');
    $query->execute(array($userName, count($correctAnswers), $correct_answers_count,count($correctAnswers) - $correct_answers_count));
    echo '<p>Ви пройшли тест <b>'. $userName . '!</b></p>';
    echo '<p>Ось ваш результат:</br></p>';
    echo '<p><b>Всього питань</b>: ' . count($correctAnswers) . '</p>';
    echo '<p><b>Правильні відповіді:</b> ' . $correct_answers_count . '</p>';
    echo '<p><b>Неправильні відповіді:</b> ' . (count($correctAnswers) - $correct_answers_count) . '</p>';
    $db = null;
    $stmt=null;
    ?>
    </div>
</body>
</html>