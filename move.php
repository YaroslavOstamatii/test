
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

        div {
            position:relative;
            width: 550px;
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
        table {
            border-spacing: 10px;
            border-collapse: separate;
            width: 500px;
            position:relative;
        }

        th, td {
            padding: 10px;
            background-color: lightgrey;
            text-align: center;
        }
    </style>

</head>
<body>
<div>
    <a class="paginat" href="index.php">Назад</a>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=vodila', 'root', '');
    $stmt = $db->query('SELECT * FROM users');

    echo '<table>
  <tr>
    <th scope="col">Ім\'я</th>
    <th scope="col">Всього</th>
    <th scope="col">Правильні</th>
    <th scope="col">Неправильні</th>
  </tr>';

    // Loop through the results and generate table rows
    while ($row = $stmt->fetch()) {
        echo '<tr>
      <td>' . $row['name'] . '</td>
      <td>' . $row['count'] . '</td>
      <td>' . $row['correct_answer'] . '</td>
      <td>' . $row['wrong_answer'] . '</td>
    </tr>';
    }
    $db = null;
    ?>

</div>
</body>
</html>