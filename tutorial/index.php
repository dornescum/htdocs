<?php  
// // connetc to db
// $conn =mysqli_connect('localhost', 'Misu', 'test1234', 'ninja_pizza');
// // check connection
// if(!$conn){
//     echo "Connection error : " . mysqli_connect_error();
// }

include('./config/db_connect.php');
// write querry for all pizza
// $sql ="SELECT * FROM pizzas"; 
$sql ="SELECT title, ingredients, id  FROM pizzas ORDER BY created_at"; 

// make querry & get result
$result = mysqli_query($conn, $sql); 

// fetch resulting rows as arrays
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);


// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

// print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<?php include('templates/header.php'); ?>



	<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
  <div class="row">

    <?php foreach($pizzas as $pizza): ?>

      <div class="col s6 md3"> 
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
            <!-- <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div> -->

             <ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
          </div>

         
          <div class="card-action right-align">
            <a class="brand-text" href="#">more info</a>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</div>

	<?php include('templates/footer.php'); ?>
</html>