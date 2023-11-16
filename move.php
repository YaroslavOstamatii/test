<?php
include_once 'header.php';

?>
<body>
<div>
    <a  href="index.php">Назад</a>

    <?php
    $db = new PDO('mysql:host=localhost;dbname=quiz', 'root', '');
    $stmt = $db->query('SELECT * FROM results ORDER BY correct_answer DESC LIMIT 10;');
    echo '<table>
  <tr>
    <th scope="col">Ім\'я</th>
    <th scope="col">Всього</th>
    <th scope="col">Правильні</th>
    <th scope="col">Неправильні</th>
  </tr>';

    while ($row = $stmt->fetch())
    {
        echo '<tr>
      <td>' . $row['name'] . '</td>
      <td>' . $row['count'] . '</td>
      <td>' . $row['correct_answer'] . '</td>
      <td>' . $row['wrong_answer'] . '</td>
    </tr>';
    }
    $db = null;
    $stmt=null;
    ?>


</div>
</body>
</html>