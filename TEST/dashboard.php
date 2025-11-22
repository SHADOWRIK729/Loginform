<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="logo">
            <h2>Logo</h2>
        </div>
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">service</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <?php
        include 'db_connection.php';
        echo"<pre>";
        $sql = "SELECT * FROM catagories";
        $result  = $conn->query($sql);
        // print_r($result);
        if ($result->num_rows>0){
            $allproducts =array();
            while($row = $result->fetch_assoc()) {
                $allproducts[]=$row;
            }
            print_r($allproducts);
            // exit;
        }
             {
            echo $allproducts[$i]['name'];
            echo $allproducts[$i]['price'];
            echo $allproducts[$i]['details'];
            if ($i%4 == 0) {
                echo "<br><br>";
            }
        }
        ?>
    </body>
</html>
