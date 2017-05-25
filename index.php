<?php $message = "Hello PHP!"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hey whats up Php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css" type="text/css">
  </head>
  <body>
    <div class="container">
        <h1>Add your name and a buddys to wright a message to your drifloon Whoot Whoot</h1>

        <form action="buds.php">
            <div class="form-group">
                <label for="sender">Your name</label>
                <input id="sender" name="sender" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient_first">Your friend's first name</label>
                <input id="recipient_first" name="recipient_first" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient_last">Your friend's last name</label>
                <input id="recipient_last" name="recipient_last" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="first_number">Your first number</label>
                <input id="first_number" name="first_number" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="second_number">Your second number</label>
                <input id="second_number" name="second_number" class="form-control" type="text">
            </div>
            <button type="submit" class="btn-success btn">Go!</button>
        </form>

    </div>
  </body>
</html>
