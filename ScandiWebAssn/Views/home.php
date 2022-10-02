
<!--This is the product list page, where the information from the database will be placed on and removed from the screen.-->


<!DOCTYPE html>
<html lang="en">    
<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "/Public/css/style.css" />
<title>Document</title>
</head>

<body>

<!--The nav bar contains the 'Add' and 'Mass Delete' buttons with their respective classes and id's.-->


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/Views/home.php" style="font-style:cursive; font-weight:bold;">PRODUCTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <button> <a class="nav-item nav-link active" href="/Views/add.php">ADD <span class="sr-only">(current)</span></a></button>
      <button form = "del" id = "delete-product-btn" name = "delete-check-btn">MASS DELETE</button>
      
    
    </div>
  </div>
</nav>       
        


<form action = '/Controllers/Control.php'  id = 'del' method = 'get' name ='del'>
    <?php
        use Models\db;
        
        $servername = "us-cdbr-east-06.cleardb.net";
        $username = "b85b6000cc4c4a";
        $password = "dab54a11";
        mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
        $conn = new mysqli($servername, $username, $password);
        $sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
        $conn -> query($sql);
        $sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");

        // Information is retrieved from the database here.
                $sall = "SELECT * FROM AllProducts";
                $showall = $conn ->query($sall);
                if ($showall) {
                    // output data of each row
                    $i = 0;
                    echo '<table><tr>';
                    while($row = $showall->fetch_assoc()){
                    
                         $r = $row["id"];
                    echo '<td>';
                    echo '<div class = "dsn">';
                    echo "<div class = 'delete-checkbox'><input type = 'checkbox' name = 'delete_checkbox[]' class = 'delete-checkbox' value = {$r}  /><br></div>";
                      
                      $selprod = array(
                        $row["sku"] => "<p>{$row['sku']}<br></p>",
                        $row["name"] =>"<p>{$row['name']}<br></p>",
                        $row["price"] => "<p>{$row['price']}  .00 $ <br></p>",
                        $row['size'] => "<p>Size:  {$row['size']} MB <br><br></p>",
                        $row['weight'] => "<p>Weight: {$row['weight']} KG <br><br></p>",
                        $row['height'] => "<p>Dimension: {$row["height"]} x {$row["width"]} x {$row["length"]} <br><br></p>"
                      );


                      foreach($selprod as $key => $value) { 
                       if($key == ''){
                        unset($key); unset($value);
                    }
                        else{
                        echo $value;
                        }
                       }
                        
                        
                    
                    
                      ++$i;
                    if ($i == 4){
                        echo '</tr><tr>';
                        $i = 0;
                    }
                   

                    };
                    echo '</form>';
                    echo '</div>';
                    echo '</td>';
                   
                    
                }; 
            
                echo '</tr></table>'; 
        ?>
        </form>

            </body>

            <script src="/Public/js/work.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>