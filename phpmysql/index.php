<?php
require ('header.php');
?>
<a href="forms.php">Формы</a>
<table>
    <caption>Авторы книг</caption>
    <thead>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $authors = $db->getAuthors();
    foreach ($authors as $key=>$author){
        ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo ++$author['first_name'] ?></td>
            <td><?php echo ++$author['last_name'] ?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<div class="container-fluid"?>
<table class="table table-hover table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
</div>
<?php
require ('footer.php');
?>
