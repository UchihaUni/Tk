<?php
require ('db.php');
$db = new db;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>№</th>
        <th>Название книги</th>
        <th>ISBN</th>
        <th>ФИО автора</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql =$db->query('SELECT products.name as `product`,ISBN,CONCAT_WS(" ",last_name,initials) as `fio` from products
 join authors on products.author_id=authors.id order by ISBN ASC');
    $sql->execute();
    $data = $sql->fetchAll();
    foreach ($data as $key => $row) {
        ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $row["product"];?></td>
            <td><?php echo $row["ISBN"];?></td>
            <td><?php echo $row["fio"];?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<table>
    <thead>
        <th>№</th>
        <th>Логин</th>
        <th>Дата регистрации</th>
    </thead>
    <tbody>
    <?php
    $usersAll = $db->usersNotFIO();
    foreach ($usersAll as $key =>$row){
    ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["created_at"]; ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>

</body>
</html>
