<?php
// Nastavení proměnných
$recipient = "hanna.ryb@seznam.cz";
$subject = "Nový formulář odeslán";
$name = $_POST["jmeno"];
$email = $_POST["email"];
$message = $_POST["zprava"];

// Vytvoření hlavičky e-mailu
$header = "From: " . $email . "\r\n";
$header .= "Reply-To: " . $email . "\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";

// Vytvoření těla e-mailu
$body = "<p>Jméno: " . $name . "</p>";
$body .= "<p>E-mail: " . $email . "</p>";
$body .= "<p>Zpráva:</p>";
$body .= "<p>" . $message . "</p>";

// Odeslání e-mailu
if (mail($recipient, $subject, $body, $header)) {
    echo "Formulář byl úspěšně odeslán.";
} else {
    echo "Nastala chyba při odesílání formuláře.";
}
?>