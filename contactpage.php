<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'; ?>
    <?php require_once 'header.php'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactpage</title>
</head>
            <?php
            if(isset($_GET['msg'])){
            echo $_GET['msg'];
            }

            ?>
<body>
    <h1>contactpage</h1>
        <div class="form-container">
           <form action="backend/receiveForm.php" method="POST">
                <div class="form-group">
                    <label for="name">naam:</label>
                    <input type="text" id="name" name="name" placeholder="typ hier uw naam">
                </div>
                <div class="form-group">
                     <label for="achternaam">achternaam:</label>
                     <input type="text" id="surname" name="surname" placeholder="typ hier uw achternaam">
                </div>
                <div class="form-group">
                    <label for="title">titel:</label>
                    <input type="text" id="title" name="title" placeholder="vul hier uw onderwerp in">
                </div>
                <div class="form-group">
                    <label for="message">uw klacht/recensie:</label>
                    <input for="textarea" id=message name="message" placeholder="typ hier uw bericht">
                </div>
                <div class="form-group">
                    <input type="submit" value="verstuur uw bericht">
                </div>
            </form>
        </div>

       

        <?php require_once 'footer.php'; ?>
</body>
</html>