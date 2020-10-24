<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show product</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php require('config.php'); ?>
    <div class="jumbotron text-center">
        <h1 class="display-3">Show Product</h1>     
    </div>
    <div class="container">
        <div class="row">
            <?php 
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="'.$row['img'].'" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$row['name'].'</h5>
                                            <p class="card-text">'.$row['des'].'</p>
                                            <p class="card-text"> Price : '.$row['price'].'</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                </div>
                            </div>';
                    }
                }
            ?>
           
            </div>
        </div>
    </div>
</body>
</html>