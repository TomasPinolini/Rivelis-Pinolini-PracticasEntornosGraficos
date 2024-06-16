<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularito</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center aligns form vertically */
            background-color: lightblue; /* Adjust background color */
            margin: 0; /* Remove default margin */
            height: 100vh; /* Ensure full viewport height */
            justify-content: center; /* Center aligns form horizontally */
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 20px); /* Adjust input width */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        #cuerpo{
            height: 20em;
            width: 100%;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="addfrom">Dirección de emisario:</label>
        <input type="text" name="addfrom" id="">

        <label for="addto">Dirección de destinatario:</label>
        <input type="email" name="addto" id="">

        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" id="">

        <label for="cuerpo">Mensaje:</label>
        <textarea name="cuerpo" id="cuerpo" rows="4"></textarea><br>

        <input type="submit" value="Enviar email">
    </form>
</body>
</html>
<?php    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $mail = require __DIR__ . "/mailer.php";
        if ($mail) {
            $mail->setFrom($_POST["addfrom"]);
            $mail->addAddress($_POST["addto"]);
            $mail->Subject = $_POST["asunto"];
            $mail->Body = $_POST["cuerpo"];
    
            try {
                $mail->send();
                echo "Message has been sent successfully.";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Failed to initialize mailer.";
        }
    }
?> 