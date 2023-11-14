<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вікторина</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            border-top: 50px solid darkslateblue;
            background-color: rgb(128, 128, 128);
            margin: 0;
            padding: 0;
        }

        form {
            position:relative;
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
        .inp{
            width: 300px;
            background: lightgray;
        }
        .paginat{
            margin: 0 0 0 390px;
        }

    </style>

</head>
<body>

<form action="statistic.php" method="post" >
    <a class="paginat" href="statistic.php">Статистика</a>
    <h1>Тест по PHP</h1>
    <input class="inp" type="text" name="name" placeholder="Ваше ім'я">
    <p>
        <p>1.Що означає абревіатура php?</p>
        <input type="radio" name="question1" value="1"> Public hosting platt <br>
        <input type="radio" name="question1" value="2"> perfomance platjjfj <br>
        <input type="radio" name="question1" value="3"> PHP hypertext preprossesor <br>
        <input type="radio" name="question1" value="4"> hypertext <br>
    </p>

    <p>
    <p>2. Як створити змінну в php?</p>
    <input type="radio" name="question2" value="1"> $name <br>
    <input type="radio" name="question2" value="2"> name <br>
    <input type="radio" name="question2" value="3"> var name <br>
    <input type="radio" name="question2" value="4"> echo name <br>
    </p>

    <p>3. Яка команда щоб вивести щось на екран?</p>
    <input type="radio" name="question3" value="1"> echo <br>
    <input type="radio" name="question3" value="2"> cout <br>
    <input type="radio" name="question3" value="3"> Console.WriteLine <br>
    <input type="radio" name="question3" value="4"> write <br>
    </p>

    <p>4. Яка команда щоб присвоїть значення змінній?</p>
    <input type="radio" name="question4" value="1"> = <br>
    <input type="radio" name="question4" value="2"> == <br>
    <input type="radio" name="question4" value="3"> === <br>
    <input type="radio" name="question4" value="4"> += <br>
    </p>

    <p>5. Який тип використовується для зберігання числа з комою?</p>
    <input type="radio" name="question5" value="1"> int <br>
    <input type="radio" name="question5" value="2"> string <br>
    <input type="radio" name="question5" value="3"> float <br>
    <input type="radio" name="question5" value="4"> bool <br>
    </p>

    <p>6. Який оператор для порівняння двох значень?</p>
    <input type="radio" name="question6" value="1"> $ <br>
    <input type="radio" name="question6" value="2"> * <br>
    <input type="radio" name="question6" value="3"> != <br>
    <input type="radio" name="question6" value="4"> == <br>
    </p>

    <p>7. Які цикли існують?</p>
    <input type="radio" name="question7" value="1"> for<br>
    <input type="radio" name="question7" value="2"> forwhile<br>
    <input type="radio" name="question7" value="3"> each<br>
    <input type="radio" name="question7" value="4"> true<br>
    </p>

    <p>8. Який тип данних для зберігання рядка?</p>
    <input type="radio" name="question8" value="1"> int <br>
    <input type="radio" name="question8" value="2"> string <br>
    <input type="radio" name="question8" value="3"> float <br>
    <input type="radio" name="question8" value="4"> bool <br>
    </p>

    <input type="submit" value="Отправить">
</form>
</body>
</html>