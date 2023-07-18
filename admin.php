<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>
  <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'shop';
    $link = mysqli_connect($host, $user, $pass, $db_name);

    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
  ?>

  <?php
  if (isset($_POST["name"])) {
    $sql = mysqli_query($link, "INSERT INTO `products` (`name`, `image`, `oldprice`, `newprice`) VALUES ('{$_POST['name']}', '{$_POST['image']}', '{$_POST['oldprice']}', '{$_POST['newprice']}')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
  if (isset($_POST["id"])) {
    $name = $link->real_escape_string($_POST["id"]);
    $sql = mysqli_query($link, "DELETE FROM `products` WHERE `id` = '$name'");
    if ($sql) {
      echo '<p>Данные успешно удалены.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>
<div>
<div>
  <h1>Добавление товара в БД</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Имя товара:</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Путь изображения:</td>
        <td><input type="text" name="image" value="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"></td>
      </tr>
      <tr>
        <td>Цена без скидки:</td>
        <td><input type="text" name="oldprice"></td>
      </tr>
      <tr>
        <td>Цена со скидкой:</td>
        <td><input type="text" name="newprice"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Добавить"></td>
      </tr>
    </table>
  </form>
</div>

<div>
  <h1>Удаление товара</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Id:</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Удалить"></td>
      </tr>
    </table>
  </form>
</div>
<h1>Товары в базе данных</h1>
<table class='tabl'>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Image</td>
                <td>Old price</td>
                <td>New price</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = mysqli_query($link,"SELECT * FROM `products`");
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['image']?></td>
                    <td><?php echo $row['oldprice']?></td>
                    <td><?php echo $row['newprice']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
</div>

</body>
</html>
