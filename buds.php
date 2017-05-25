<?php
    $friend_name_first = $_GET["recipient_first"];
    $friend_name_last = $_GET["recipient_last"];
    $friend_name = $friend_name_first . " " . $friend_name_last;
    $my_name = $_GET["sender"];
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    function encode($first, $second)
    {
        $solution = $first + $second;
        while ($solution > 6) {
            $solution = $solution - 6;
        }
        if ($solution == 6) {
            $solution = $solution - 1;
        }
        return $solution;
    }
    $solution = encode($first_number, $second_number);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greetings!</title>
</head>
<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <strong><?php echo $friend_name ?></strong>,</p>
    <p>How are you? I hope that you are having a nice float. I'm vacationing in the mountains of Mt. Coronet while I learn great pokemon trainning pratices!</p>
    <p><strong><?php echo $friend_name_first ?></strong>, you would not believe how cold it is here. I should have gone to the Alolan islands instead. But I wanted to see dawn, so I've been havin' fun.</p>
    <p>Looking forward to seeing you soon. I need you on my team Asap I have a spot for you right now I have a team of <strong><?php echo $solution ?></strong>, so I need you buddy</p>
    <p>Cheers,</p>
    <p><strong><?php echo $my_name ?></strong></p>
</body>
</html>
