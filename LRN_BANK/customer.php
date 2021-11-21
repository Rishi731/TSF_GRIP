<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRN Bank - Customer</title>
    <link rel = "stylesheet" href = "style_b.css">
</head>
<body>
    <header class = "main">
        <div class = "main">
                <div class = "logo"> 
                    <h1>LRN BANK</h1>
                </div>
                <ul>
                    <li> <a href = "index.php">Home</a> </li>
                    <li> <a href = "customer.php">Customer</a> </li>
                    <li> <a href = "transfer.php">Money Transfer</a> </li>
                    <li> <a href = "contact.php">Contact</a> </li>
                </ul>
            </div>
    </header>


    <header class = "cost">
            <div class = "cost1">
                <div class="tlogo">
                    <h2>CUSTOMER</h2>
                </div>
                <table border = 3 >
                    <tr>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Current Balance </th>
                    </tr>

                    <?php
                        include("connection.php");
                        error_reporting(0);

                        $sql = "SELECT name, email, balance FROM Customer_Info";
                        $result = $conn->query($sql);
                            
                        if ($result->num_rows > 0) {
                            
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["balance"]. "</td></tr>";
                            }
                            
                            echo "</table>";
                        } 
                            
                        else { 
                            echo "0 results"; 
                        }
                            
                        $conn->close();

                    ?>


                    <?php
                    

                    ?>
                </table>
            </div>  
        </header>
</body>
</html>