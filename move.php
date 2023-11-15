
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вікторина</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div>

    <a href="index.php">Назад</a>

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