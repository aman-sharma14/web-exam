<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f4f4f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #464058;

        }
        div{
            
            align-items: center;

            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
            font-size: 18px;

            h1 {
                color: #5f72a9;
                margin-bottom: 20px;
                font-size: 28px;
                font-weight: 600;
            }

            #msg{
                font-size: 20px;
                
                
            }   
        }



    </style>
</head>
<body>
    <div>
        <h1>Welcome <?php echo ($_POST["user_name"]); ?>! </h1>

        <p>Your email address is: <strong><?php echo ($_POST["mail"]); ?></strong></p>
        
        <p>Your age is: <?php
            $dob = $_POST["dob"];
            $dobDate = new DateTime($dob);
            $currentDate = new DateTime();
            $age = $dobDate->diff($currentDate)->y;
            echo $age;
        ?></p>
        
        <p id="vote"><?php
            if ($age >= 18) {
                echo "You are eligible to vote!";
            } else {
                echo "You are not eligible to vote.";
            }
        ?></p>

        <p id="msg"><?php
            $user = ($_POST['user_name']);
            $messages = array(
                "Welcome, %s! Hope you have a great day!",
                "Hi %s! We're glad to see you.",
                "Hey %s! You're doing amazing.",
                "Greetings %s! Stay positive and keep shining.",
                "Hello %s! Keep up the great work!"
            );
            $rmessage = $messages[array_rand($messages)];
            $fmsg = sprintf($rmessage, $user);
            echo $fmsg;
        ?></p>

    </div>
</body>
</html>