<?php
include '../../db.php';
$sql = "SELECT SEC_TO_TIME(3665) AS time_value FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEC_TO_TIME() Function</title>
</head>

<style>
    
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
    }
</style>

<body>
    <h2>SEC_TO_TIME() Function</h2>
    <p>Returns a time value (in format HH:MM:SS) based on the specified seconds.</p>
    <p><b>SQL Query:</b></p>
    <p><?php echo $sql; ?></p>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>Time Value</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['time_value'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>