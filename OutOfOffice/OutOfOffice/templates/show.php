<?php
    session_start();
    if ($_SESSION['zalogowany'] == 'false')
    {
        header('Location:../public/index.php');
    }
?>

<?php
    require_once '../config/db.php';
    $sql = "SELECT * FROM Employees";
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
            <h1>Lista pracowników</h1>
        </div>
        <div id="main">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full_Name </th>
                        <th>Subdivision</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>People_Partner</th>
                        <th>Out_of_Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ID']); ?></td>
                            <td><?php echo htmlspecialchars($row['Full_Name']); ?></td>
                            <td><?php echo htmlspecialchars($row['Subdivision']); ?></td>
                            <td><?php echo htmlspecialchars($row['Position']); ?></td>
                            <td><?php echo htmlspecialchars($row['Status']); ?></td>
                            <td><?php echo htmlspecialchars($row['People_Partner']); ?></td>
                            <td><?php echo htmlspecialchars($row['Out_of_Balance']); ?></td> 
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
