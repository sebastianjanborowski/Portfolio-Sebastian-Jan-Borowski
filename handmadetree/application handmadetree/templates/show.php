<?php
    session_start();
    if ($_SESSION['zalogowany'] == 'false')
    {
        header('Location:../public/index.php');
    }
?>

<?php
    require_once '../config/db.php';
    $sql = "SELECT * FROM Users";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC); // Pobranie wszystkich rekordów jako tablica asocjacyjna
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Wyświetl użytkowników</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Lista użytkowników</h1>
        </div>
        <div id="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>idUser</th>
                        <th>name</th>
                        <th>last name</th>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['idUser']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['password']); ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="back_to_menu" class="backToMenu">Powrót</div>
    </div>
   
</body>
<script src="../js/navigation.js"></script>
</html>
