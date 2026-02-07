<?php
include '../../db.php';
$sql = "SELECT first_name, salary, FORMAT(salary, 2) AS formatted_salary FROM employees";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMAT() Function</title>
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
    <h2>FORMAT() Function</h2>
    <p>a number to a format like "#,###,###.##", rounded to a specified number of decimal places, then it returns the result as a string.</p>
    <p><b>SQL Query:</b></p>
    <pr><?php echo $sql; ?></pr>
    <p><b>Results:</b></p>
    <table>
        <tr>
            <th>First Name</th>
            <th>Salary</th>
            <th>Formatted Salary</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['salary'] . "</td><td>" . $row['formatted_salary'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../../index.php">Back</a></p>
</body>

</html>