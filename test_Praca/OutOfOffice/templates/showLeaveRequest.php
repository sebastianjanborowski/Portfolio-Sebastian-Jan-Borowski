<?php
    session_start();
    if ($_SESSION['zalogowany'] == 'false')
    {
        header('Location:../public/index.php');
    }
?>

<?php
    require_once '../config/db.php';
    $sql = "SELECT * FROM Leave_Request";
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
            <h1>Lista projektów</h1>
        </div>
        <div id="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Absense_Reason</th>
                        <th>Start_Date</th>
                        <th>End_Date</th>
                        <th>Comment</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ID']); ?></td>
                            <td><?php echo htmlspecialchars($row['Employee']); ?></td>
                            <td><?php echo htmlspecialchars($row['Absense_Reason']); ?></td>
                            <td><?php echo htmlspecialchars($row['Start_Date']); ?></td>
                            <td><?php echo htmlspecialchars($row['End_Date']); ?></td>
                            <td><?php echo htmlspecialchars($row['Comment']); ?></td>
                            <td><?php echo htmlspecialchars($row['Status']); ?></td> 
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
