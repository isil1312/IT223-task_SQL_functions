<?php
include '../../db.php';
$sql = "SELECT first_name, LEFT(first_name, 4) AS first_three FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEFT() Function</title>
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
    <h2>LEFT() Function</h2>
    <p>Extracts a number of characters from a string (starting from left).</p>
    <p><b>SQL Query:</b></p>
    <p><?php echo $sql; ?></p>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>First Name</th>
            <th>First 4 Characters</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['first_three'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>