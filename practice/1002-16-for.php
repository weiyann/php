<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border='1'>
    <?php for ($i = 1; $i <= 9; $i++) : ?> <!-- : 用來替代{}-->
      <tr>
        <?php for ($k = 2; $k <= 9; $k++) : ?>
           <td><?= "$k * $i = ".$i*$k ?></td>  <!-- . 用來連接字串-->
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>