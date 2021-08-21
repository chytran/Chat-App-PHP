<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var from = null; start = 0;
        $(document).ready(function) {
            from = prompt("Please enter your name");
            alert("Hello " + from);
        }
    </script>
    <!--====== CSS ======-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div id="messages"></div>
    <form action="" type="text">
        <input type="text" id="message" autocomplete="off" autofocus placeholder="Type Message...">
        <input type="submit" value="Send">
    </form>
</body>
</html>