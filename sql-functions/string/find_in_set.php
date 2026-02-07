<?php
include '../../db.php';
$sql = "SELECT first_name, FIND_IN_SET('Sales', 'Sales,Operations,HR,Marketing,Service Development,Administrative') AS found_position FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND_IN_SET() Function</title>
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
    <h2>FIND_IN_SET() Function</h2>
    <p>Returns the position of a string within a list of strings.</p>
    <p><b>SQL Query:</b></p>
    <p><?php echo $sql; ?></pr>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>First Name</th>
            <th>Found Position</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['found_position'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>