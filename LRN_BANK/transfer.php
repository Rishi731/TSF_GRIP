<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRN Bank - Transfer Money</title>
    <link rel = "stylesheet" href = "style_t.css">
</head>
<body>
    <header class = "bac">
        <div class = "tmain">
            <div class = "tlogo"> 
                <h1>LRN BANK</h1>
            </div>
            <ul>
                <li> <a href = "index.php">Home</a> </li>
                <li> <a href = "customer.php">Customer</a> </li>
                <li class = "tra"> <a  href = "transfer.php">Money Transfer</a> </li>
                <li> <a href = "contact.php">Contact</a> </li>
            </ul>
        </div>

        <section class = "cont_are">
                <div class = "cont_box">
                    <form  class = "form2">
                        <h1>Money Trasfer</h1>
                        <div class="inp">
                            <input type = "email" class = "input_field" name = "s_email" placeholder = "Sender Email">
                            <input type = "email" class = "input_field" name = "r_email" placeholder = "Receiver Email">
                            <input type = "number" class = "input_field" name = "g_amount" placeholder = "Amount">
                            <textarea type = "text" class = "input_field" name = "s_remark" placeholder = "Remark"></textarea>
                            <button type = "submit" class = "btn_cont" name = "submit" onclick = "return mess()">Transfer</button>
                        </div>
                    </form>
                </div> 
        </section> 

        <script type = "text/javascript">
            function mess() {
                alert ("your record is successfully saved");
                return true;
            }
        </script>

        <?php
            include("connection.php")
        ?>

        <?php

            error_reporting(0);

            $se = $_GET['s_email'];
            $re = $_GET['r_email'];
            $ga = $_GET['g_amount'];
            $sr = $_GET['s_remark'];

            $query = "insert into mon_trans values('$se','$re','$ga','$sr')";

            $data = mysqli_query($conn, $query);

            if($data){
                echo "transfer done";
                
            }

            else{
                echo "transfer unsuccesseful";
            }
            
            

        ?>

    </header>

</body>
</html>