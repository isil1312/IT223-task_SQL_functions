<?php
include '../../db.php';
$sql = "SELECT department, FIELD(department, 'Administrative', 'Sales', 'HR', 'Marketing', 'Operations', 'Service Development') AS position FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIELD() Function</title>
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
    <h2>FIELD() Function</h2>
    <p>Returns the index position of a value in a list of values.</p>
    <p><b>SQL Query:</b></p>
    <p><?php echo $sql; ?></p>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>Department</th>
            <th>Position</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['department'] . "</td><td>" . $row['position'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>