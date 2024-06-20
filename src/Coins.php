<?php
//$servername = "devweb2023.cis.strath.ac.uk";
//$username = "qrb21125";
//$password = "le7ivioViBop";
//$dbname = $username;
//$conn = new mysqli($servername, $username, $password, $dbname);

//$sql = "SELECT * FROM `Coin`";
//$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <script src="../script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coins</title>
</head>
<body>
<full-header></full-header>
<main>
    <h1>Coins</h1>

    <form id="CoinForm" name="CoinForm" method="post">
        <p>Coin Currency (£,$):
            <label for="coinCurrency"><input type="text" id="coinCurrency" name="coinCurrency" alt="Coin Currency" placeholder="Enter Coin Currency (£, $)"></label>
        </p>

        <p>Coin Denomination:
            <label for="coinDenomination"><input type="text" id="coinDenomination" name="coinDenomination" alt="Coin Denomination" placeholder="Enter Coin Denomination (1, 5, 10, 50)"></label>
        </p>

        <p><button type="submit">Submit</button></p>
    </form>


    <div id="CoinContainer">
        <?php
//        if ($result->num_rows > 0) {
//            while ($row = $result->fetch_assoc()) {
                ?>
                <div id="Card">
                    <div id="Image">
                        <img src="images/linkedin.png" alt="Coin">
                    </div>
                    <div id="Info">
<!--                        <p>--><?php //echo $row["Denomination"] ?><!--</p>-->
                        <p>Currency</p>
                        <p>Country</p>
                    </div>
                </div>
                <div id="Card">
                    <div id="Image">
                        <img src="images/linkedin.png" alt="Coin">
                    </div>
                    <div id="Info">
                        <!--                        <p>--><?php //echo $row["Denomination"] ?><!--</p>-->
                        <p>Currency</p>
                        <p>Country</p>
                    </div>
                </div>
                <div id="Card">
                    <div id="Image">
                        <img src="images/linkedin.png" alt="Coin">
                    </div>
                    <div id="Info">
                        <!--                        <p>--><?php //echo $row["Denomination"] ?><!--</p>-->
                        <p>Currency</p>
                        <p>Country</p>
                    </div>
                </div>

                <?php
//            }
//            return true;
//        }
//        $result->data_seek(0);
      ?>
    </div>
</main>
</body>
</html>


