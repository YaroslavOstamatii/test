<style>
    table {
        border-collapse: collapse;
        width: 500px;
        border: 1px solid #ccc;
        position:relative;
    }

    th, td {
        padding: 5px;
    }

    th {
        background-color: #f0f0f0;
        text-align: center;
    }

    td {
        text-align: center;
    }

    tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

</style>
<a class="paginat" href="index.php">Назад</a>
<?php
$db = new PDO('mysql:host=localhost;dbname=vodila', 'root', '');
$stmt = $db->query('SELECT * FROM users');

echo '<table>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Quest</th>
    <th scope="col">CorrQest</th>
    <th scope="col">WrongQest</th>
  </tr>';

// Loop through the results and generate table rows
while ($row = $stmt->fetch()) {
    echo '<tr>
      <th scope="row">' . $row['id'] . '</th>
      <td>' . $row['name'] . '</td>
      <td>' . $row['count'] . '</td>
      <td>' . $row['correct_answer'] . '</td>
      <td>' . $row['wrong_answer'] . '</td>
    </tr>';
}
$db = null;
?>