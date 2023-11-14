<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статистикаa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            border-top: 50px solid darkslateblue;
            background-color: gray;
            margin: 0;
            padding: 0;
        }

        form {
            position: relative;
            width: 500px;
            margin: -50px auto 0px;
            padding: 20px;
            background-color: white;
        }

        h1 {
            color: black;
            font-size: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 110px;
            height: 40px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #9A72AC;
            margin: 0 0 0 350px;
        }

        .inp {
            width: 300px;
            background: lightgray;
        }

        .paginat {
            margin: 0 0 0 390px;
        }

    </style>
</head>
<body>
<form action="/" method="get">
    <a class="paginat" href="index.php">Назад</a>
    <h1>Статистика</h1>
    <h1>Тест по PHP</h1>
</form>
<?php
$name = $_POST['name'];

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
    //var_dump($_POST[$question].'-'.$answer);

    if (($_POST[$question] ?? null) === $answer) {
        $correct_answers_count+=1;
        //var_dump('in if'.$correct_answers_count);
    }
}

echo '<h1>Всього питань:' . count($correctAnswers) . '</h1>';
echo '<p>Правильних питань: ' . $correct_answers_count . '</p>';
echo '<p>Неправильні відповіді ' . (count($correctAnswers) - $correct_answers_count) . '</p>';
?>

</body>
</html>