<?php
// Recupera i dati dalla query string
$nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
$cognome = isset($_GET['cognome']) ? htmlspecialchars($_GET['cognome']) : '';
$mail = isset($_GET['mail']) ? htmlspecialchars($_GET['mail']) : '';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Dati</title>
</head>
<body>
    <h1>Dati inviati:</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $cognome; ?></td>
                <td><?php echo $mail; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
