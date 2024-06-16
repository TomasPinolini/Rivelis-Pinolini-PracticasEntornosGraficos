<?php    
    $mail = require __DIR__ . "/mailer.php";
    if ($mail) {
        $mail->setFrom("noreply@example.com", "No Reply");
        $mail->addAddress("tomaspinolini2003@gmail.com");
        $mail->Subject = "Account Activation";
        $cuerpo = "Esto es una prueba de envío de correo a través del servidor";
        $mail->Body = $cuerpo;

        try {
            $mail->send();
            echo "Message has been sent successfully.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to initialize mailer.";
    }
?> 