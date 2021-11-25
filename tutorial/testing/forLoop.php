<?php 
// $test = 'name';
// print_r($test);

$names = ['name1', 'name2', 'name3', 'name4', 'name5'];

// for($i =0; $i<count($names); $i++){
//    echo $names[$i];
// } 

// foreach($names as $name){
//   echo $name . '<br>';
// }


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
  <div>
    <?php  foreach($names as $name){ ?>
        <h3> 
        <?php    echo $name  ?>  
      </h3>

    <?php }?>
  </div>
</body>
</html>