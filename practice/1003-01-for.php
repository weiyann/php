<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  
  <?php /*
  <table border='1'>
    <?php for ($i = 1; $i <= 9; $i++) : ?> 
      <tr>
        <?php for ($k = 2; $k <= 9; $k++) : ?>
           <td><?php printf("%s * %s = %s",$k,$i,$i*$k ) ?></td>  
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
  */ ?>
  <table border='1'>
    <?php for ($i = 1; $i <= 9; $i++) : ?> 
      <tr>
        <?php for ($k = 2; $k <= 9; $k++) : ?>
           <td><?= sprintf("%s * %s = %s",$k,$i,$i*$k ) ?></td>  
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>