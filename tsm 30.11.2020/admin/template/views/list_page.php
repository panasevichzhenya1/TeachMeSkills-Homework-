<?php
//$sql = "SELECT * FROM pages";
//$res = mysqli_query($connection, $sql);
//$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sql = "SELECT * FROM pages where 1";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>

<a href="/admin/?action=add_page" class="btn btn-sm btn-success">Добавить статью</a>
<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pages as $page):?>
        <tr>
            <td><?=$page['title']?></td>
            <td>
                <a href="/admin/?action=edit_page&id=<?=$page['id']?>">Редактировать</a>
                <a href="/admin/?action=delete_page&id=<?=$page['id']?>">Удалить</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>


