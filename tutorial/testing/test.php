<?php 
$name = 'some name';
define("NAME", "Gigi");
$people =["name1", "name2", "name3"];
$test = $people[1];
$ages =[10,20,30];
$ages[]=60;
array_push($ages, 70);
// print_r($ages);
// echo count($ages);

$concat = array_merge($people, $ages);
// print_r($concat);

$popped = array_pop($people);
print_r($popped);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>
    <?php echo 'whatever'; ?>
    <?php echo $name; ?>
    <div>
      <p>
        <?php echo NAME ?>
      </p>

      <p>
        <?php echo $test ?>
      </p>

      <p>
        <?php echo count($ages)?>
      </p>
      <p><?php echo $ages[0] ?></p>
    </div>

  </h1>

</body>
</html>