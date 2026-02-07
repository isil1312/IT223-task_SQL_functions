<?php
include '../../db.php';
$sql = "SELECT hired_date, WEEKOFYEAR(hired_date) AS week_of_year FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEEKOFYEAR() Function</title>
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
    <h2>WEEKOFYEAR() Function</h2>
    <p>Returns the week number for a given date</p>
    <p><b>SQL Query:</b></p>
    <p><?php echo $sql; ?></p>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>Hired Date</th>
            <th>Week of Year</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['hired_date'] . "</td><td>" . $row['week_of_year'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>