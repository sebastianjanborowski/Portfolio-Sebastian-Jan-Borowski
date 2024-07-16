<?php
    session_start();
    if ($_SESSION['zalogowany'] == 'false')
    {
        header('Location:../public/index.php');
    }
?>

<?php
    require_once '../config/db.php';
    $sql = "select * from Approval_Request";
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
    <title>Wyświetl pracowników</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Lista zatwierdzeń</h1>
        </div>
        <div id="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Approver</th>
                        <th>Leave_Request</th>
                        <th>Status</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ID']); ?></td>
                            <td><?php echo htmlspecialchars($row['Approver']); ?></td>
                            <td><?php echo htmlspecialchars($row['Leave_Request']); ?></td>                           
                            <td><?php echo htmlspecialchars($row['Status']); ?></td>
                            <td><?php echo htmlspecialchars($row['Comment']); ?></td>
                             
                            </td>
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
