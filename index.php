<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL FUNCTIONS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
</head>

<style>
  body{
    font-family: Arial;
    margin: 15px;
  }

  table{
    width: 100%;
    border-collapse: collapse;
  }

  th{
    border: 1px solid black;
    padding: 3px;
    text-align: center;
  }

 td{
    border: 1px solid black;
    padding: 3px;
    text-align: left;
  }

  th{
    background-color: #e7e7e7 !important;
  }

  .func{
    text-align: center;
  }

  .link{
    text-align: center;
  }

  .functions{
    text-align: center;
    padding: 10px;
  }

  .sec{
    text-align: right;
  }
</style>

<body>
  <h1 class="func"><b>IT223 - Advance Database System</b></h1>
  <h2 class="func"><b>Task 3</b></h2><br><br>
  <p>Liezel Tumagan   <br> BSIT 2B</p>



  <table>
    <tr>
      <th><b>SQL Function</b></th>
      <th><b>Description</b></th>
      <th><b>Example Code</b></th>
      <th><b>Example Output</b></th>
    </tr>

    <tr>
      <td colspan="6" class="functions"><b> String Functions</b></td>
    </tr>

    <tr>
      <td class="func"><b>ASCII</b></td>
      <td>The ASCII() function returns the ASCII value for the specific character.</td>
      <td>SELECT first_name, ASCII(first_name) AS ascii_value FROM employees;</td>
      <td class="link"><a href="sql-functions/string/ascii.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CHAR_LENGTH</b></td>
      <td>The CHAR_LENGTH() function return the length of a string (in characters).</td>
      <td>SELECT first_name, CHAR_LENGTH(first_name) AS char_length FROM employees;</td>
      <td class="link"><a href="sql-functions/string/char_length.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CHARACTER_LENGTH</b></td>
      <td>The CHARACTER_LENGTH() function return the length of a string (in characters).</td>
      <td>SELECT first_name, CHARACTER_LENGTH(first_name) AS character_length FROM employees;</td>
      <td class="link"><a href="sql-functions/string/character_length.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CONCAT</b></td>
      <td>The CONCAT() function adds two or more expressions together.</td>
      <td>SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/concat.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CONCAT_WS</b></td>
      <td>The CONCAT_WS() function adds two or more expressions together with a separator.</td>
      <td>SELECT CONCAT_WS(', ', first_name, last_name, department) AS employee_info FROM employees;</td>
      <td class="link"><a href="sql-functions/string/concat_ws.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>FIELD</b></td>
      <td>The FIELD() function returns the index position of a value in a list of values.</td>
      <td>SELECT department, FIELD(department, 'Administrative', 'Sales', 'HR', 'Marketing', 'Operations', 'Service Development') AS position FROM employees;</td>
      <td class="link"><a href="sql-functions/string/field.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>FIND_IN_SET</b></td>
      <td>The FIND_IN_SET() function returns the position of a string within a list of strings.</td>
      <td>SELECT first_name, FIND_IN_SET('Sales', 'Sales,Operations,HR,Marketing,Service Development,Administrative') AS found_position FROM employees;</td>
      <td class="link"><a href="sql-functions/string/find_in_set.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>FORMAT</b></td>
      <td>The FORMAT() function formats a number to a format like "#,###,###.##", rounded to a specified number of decimal places, then it returns the result as a string.</td>
      <td>SELECT first_name, salary, FORMAT(salary, 2) AS formatted_salary FROM employees;</td>
      <td class="link"><a href="sql-functions/string/format.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>INSERT</b></td>
      <td>The INSERT() function inserts a string within a string at the specified position and for a certain number of characters.</td>
      <td>SELECT first_name, INSERT(first_name, 1, 0, 'Mr. ') AS modified_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/insert.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>INSTR</b></td>
      <td>The INSTR() function returns the position of the first occurrence of a string in another string.</td>
      <td>SELECT email, INSTR(email, '@') AS at_position FROM employees;</td>
      <td class="link"><a href="sql-functions/string/instr.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LCASE</b></td>
      <td>The LCASE() function converts a string to lower-case.</td>
      <td>SELECT first_name, LCASE(first_name) AS lowercase_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/lcase.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LEFT</b></td>
      <td>The LEFT() function extracts a number of characters from a string (starting from left).</td>
      <td>SELECT first_name, LEFT(first_name, 4) AS first_three FROM employees;</td>
      <td class="link"><a href="sql-functions/string/left.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LENGTH</b></td>
      <td>The LENGTH() function returns the length of a string (in bytes).</td>
      <td>SELECT first_name, LENGTH(first_name) AS name_length FROM employees ORDER BY name_length;</td>
      <td class="link"><a href="sql-functions/string/length.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LOCATE</b></td>
      <td>The LOCATE() function returns the position of the first occurrence of a substring in a string.</td>
      <td>SELECT last_name, LOCATE('o', last_name) AS o_position FROM employees;</td>
      <td class="link"><a href="sql-functions/string/locate.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LOWER</b></td>
      <td>The LOWER() function converts a string to lower-case.</td>
      <td>SELECT email, LOWER(email) AS lowercase_email FROM employees;</td>
      <td class="link"><a href="sql-functions/string/lower.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LPAD</b></td>
      <td>The LPAD() function left-pads a string with another string, to a certain length.</td>
      <td>SELECT first_name, LPAD(first_name, 10, '*') AS padded_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/lpad.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LTRIM</b></td>
      <td>The LTRIM() function removes leading spaces from a string.</td>
      <td>SELECT LTRIM(' Hello World') AS trimmed_text FROM employees;</td>
      <td class="link"><a href="sql-functions/string/ltrim.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>MID</b></td>
      <td>The MID() function extracts a substring from a string (starting at any position).</td>
      <td>SELECT first_name, MID(first_name, 2, 3) AS middle_chars FROM employees;</td>
      <td class="link"><a href="sql-functions/string/mid.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>POSITION</b></td>
      <td>The POSITION() function returns the position of the first occurrence of a substring in a string.</td>
      <td>SELECT email, POSITION('@' IN email) AS at_position FROM employees;</td>
      <td class="link"><a href="sql-functions/string/position.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>REPEAT</b></td>
      <td>The REPEAT() function repeats a string as many times as specified.</td>
      <td>SELECT first_name, REPEAT(first_name, 2) AS repeated_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/repeat.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>REPLACE</b></td>
      <td>The REPLACE() function replaces all occurrences of a substring within a string, with a new substring.</td>
      <td>SELECT email, REPLACE(email, '@gmail.com', '@corporation.com') AS new_email FROM employees;</td>
      <td class="link"><a href="sql-functions/string/replace.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>REVERSE</b></td>
      <td>The REVERSE() function reverses a string and returns the result.</td>
      <td>SELECT first_name, REVERSE(first_name) AS reversed_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/reverse.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>RIGHT</b></td>
      <td>The RIGHT() function extracts a number of characters from a string (starting from right).</td>
      <td>SELECT first_name, RIGHT(first_name, 3) AS last_three FROM employees;</td>
      <td class="link"><a href="sql-functions/string/right.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>RPAD</b></td>
      <td>The RPAD() function right-pads a string with another string, to a certain length.</td>
      <td>SELECT first_name, RPAD(first_name, 10, '*') AS padded_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/rpad.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>RTRIM</b></td>
      <td>The RTRIM() function removes trailing spaces from a string.</td>
      <td>SELECT RTRIM('Hello World ') AS trimmed_text FROM employees;</td>
      <td class="link"><a href="sql-functions/string/rtrim.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SPACE</b></td>
      <td>The SPACE() function returns a string of the specified number of space characters.</td>
      <td>SELECT CONCAT('Hello', SPACE(10), 'World') AS spaced_text FROM employees;</td>
      <td class="link"><a href="sql-functions/string/space.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>STRCMP</b></td>
      <td>The STRCMP() function compares two strings.</td>
      <td>SELECT first_name, last_name, STRCMP(first_name, last_name) AS comparison FROM employees;</td>
      <td class="link"><a href="sql-functions/string/strcmp.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SUBSTR</b></td>
      <td>The SUBSTR() function extracts a substring from a string (starting at any position).</td>
      <td>SELECT email, SUBSTR(email, 1, 5) AS email_substr FROM employees;</td>
      <td class="link"><a href="sql-functions/string/substr.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SUBSTRING</b></td>
      <td>The SUBSTRING() function extracts a substring from a string (starting at any position).</td>
      <td>SELECT email, SUBSTRING(email, 1, 5) AS email_prefix FROM employees;</td>
      <td class="link"><a href="sql-functions/string/substring.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SUBSTRING_INDEX</b></td>
      <td>The SUBSTRING_INDEX() function returns a substring of a string before a specified number of delimiter occurs.</td>
      <td>SELECT email, SUBSTRING_INDEX(email, '@', 1) AS username FROM employees;</td>
      <td class="link"><a href="sql-functions/string/substring_index.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>TRIM</b></td>
      <td>The TRIM() function removes leading and trailing spaces from a string.</td>
      <td>SELECT TRIM(' Hello World ') AS trimmed_text FROM employees;</td>
      <td class="link"><a href="sql-functions/string/trim.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>UCASE</b></td>
      <td>The UCASE() function converts a string to upper-case.</td>
      <td>SELECT first_name, UCASE(first_name) AS uppercase_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/ucase.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>UPPER</b></td>
      <td>The UPPER() function converts a string to upper-case.</td>
      <td>SELECT first_name, UPPER(first_name) AS uppercase_name FROM employees;</td>
      <td class="link"><a href="sql-functions/string/upper.php">view output</a></td>
    </tr>
    
    <tr>
      <td colspan="4" class="functions"><b> Numeric Functions</b></td>
    </tr>

    <tr>
      <td class="func"><b>ABS</b></td>
      <td>The ABS() function returns the absolute (positive) value of a number.</td>
      <td>SELECT salary, ABS(salary - 20000) AS difference_from_20k FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/abs.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ACOS</b></td>
      <td>The ACOS() function returns the arc cosine of a number.</td>
      <td>SELECT ACOS(0.5) AS acos_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/acos.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ASIN</b></td>
      <td>The ASIN() function returns the arc sine of a number.</td>
      <td>SELECT ASIN(0.5) AS asin_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/asin.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ATAN</b></td>
      <td>The ATAN() function returns the arc tangent of one or two numbers.</td>
      <td>SELECT ATAN(1) AS atan_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/atan.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ATAN2</b></td>
      <td>The ATAN2() function returns the arc tangent of two numbers.</td>
      <td>SELECT ATAN2(1, 2) AS atan2_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/atan2.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>AVG</b></td>
      <td>The AVG() function returns the average value of an expression.</td>
      <td>SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department;</td>
      <td class="link"><a href="sql-functions/numeric/avg.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CEIL</b></td>
      <td>The CEIL() function returns the smallest integer value that is bigger than or equal to a number.</td>
      <td>SELECT salary, CEIL(salary / 1000) AS ceiled_thousands FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/ceil.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CEILING</b></td>
      <td>The CEILING() function returns the smallest integer value that is bigger than or equal to a number.</td>
      <td>SELECT salary, CEILING(salary / 1000) AS ceiling_thousands FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/ceiling.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>COS</b></td>
      <td>The COS() function returns the cosine of a number.</td>
      <td>SELECT COS(PI()) AS cos_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/cos.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>COT</b></td>
      <td>The COT() function returns the cotangent of a number.</td>
      <td>SELECT COT(1) AS cot_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/cot.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>COUNT</b></td>
      <td>The COUNT() function returns the number of records returned by a select query.</td>
      <td>SELECT department, COUNT(*) AS employee_count FROM employees GROUP BY department;</td>
      <td class="link"><a href="sql-functions/numeric/count.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>DEGREES</b></td>
      <td>The DEGREES() function converts a value in radians to degrees.</td>
      <td>SELECT DEGREES(PI()) AS degrees_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/degrees.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>DIV</b></td>
      <td>The DIV function is used for integer division (x is divided by y). An integer value is returned.</td>
      <td>SELECT salary, salary DIV 1000 AS thousands FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/div.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>EXP</b></td>
      <td>The EXP() function returns e raised to the power of the specified number.</td>
      <td>SELECT EXP(1) AS exp_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/exp.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>FLOOR</b></td>
      <td>The FLOOR() function returns the largest integer value that is smaller than or equal to a number.</td>
      <td>SELECT salary, FLOOR(salary / 1000) AS floor_thousands FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/floor.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>GREATEST</b></td>
      <td>The GREATEST() function returns the greatest value of the list of arguments.</td>
      <td>SELECT first_name, salary, GREATEST(salary, 20000, 30000) AS greatest_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/greatest.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LEAST</b></td>
      <td>The LEAST() function returns the smallest value of the list of arguments.</td>
      <td>SELECT first_name, salary, LEAST(salary, 20000, 30000) AS least_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/least.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LN</b></td>
      <td>The LN() function returns the natural logarithm of a number.</td>
      <td>SELECT LN(10) AS ln_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/ln.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LOG</b></td>
      <td>The LOG() function returns the natural logarithm of a specified number, or the logarithm of the number to the specified base.</td>
      <td>SELECT LOG(10) AS log_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/log.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LOG10</b></td>
      <td>The LOG10() function returns the natural logarithm of a number to base-10.</td>
      <td>SELECT LOG10(100) AS log10_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/log10.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LOG2</b></td>
      <td>The LOG2() function returns the natural logarithm of a number to base-2.</td>
      <td>SELECT LOG2(8) AS log2_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/log2.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>MAX</b></td>
      <td>The MAX() function returns the maximum value in a set of values.</td>
      <td>SELECT department, MAX(salary) AS max_salary FROM employees GROUP BY department;</td>
      <td class="link"><a href="sql-functions/numeric/max.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>MIN</b></td>
      <td>The MIN() function returns the minimum value in a set of values.</td>
      <td>SELECT department, MIN(salary) AS min_salary FROM employees GROUP BY department;</td>
      <td class="link"><a href="sql-functions/numeric/min.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>MOD</b></td>
      <td>The MOD() function returns the remainder of a number divided by another number.</td>
      <td>SELECT id, id MOD 2 AS is_odd FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/mod.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>PI</b></td>
      <td>The PI() function returns the value of PI.</td>
      <td>SELECT PI() AS pi_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/pi.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>POW</b></td>
      <td>The POW() function returns the value of a number raised to the power of another number.</td>
      <td>SELECT POW(2, 3) AS power_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/pow.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>POWER</b></td>
      <td>The POWER() function returns the value of a number raised to the power of another number.</td>
      <td>SELECT POWER(2, 3) AS power_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/power.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>RADIANS</b></td>
      <td>The RADIANS() function converts a degree value into radians.</td>
      <td>SELECT RADIANS(180) AS radians_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/radians.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>RAND</b></td>
      <td>The RAND() function returns a random number between 0 (inclusive) and 1 (exclusive).</td>
      <td>SELECT first_name, RAND() AS random_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/rand.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ROUND</b></td>
      <td>The ROUND() function rounds a number to a specified number of decimal places.</td>
      <td>SELECT first_name, salary, ROUND(salary, 0) AS rounded_salary FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/round.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SIGN</b></td>
      <td>The SIGN() function returns the sign of a number.</td>
      <td>SELECT salary, SIGN(salary - 20000) AS sign_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/sign.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SIN</b></td>
      <td>The SIN() function returns the sine of a number.</td>
      <td>SELECT SIN(PI() / 2) AS sin_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/sin.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SQRT</b></td>
      <td>The SQRT() function returns the square root of a number.</td>
      <td>SELECT SQRT(16) AS sqrt_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/sqrt.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SUM</b></td>
      <td>The SUM() function calculates the sum of a set of values.</td>
      <td>SELECT department, SUM(salary) AS total_salary FROM employees GROUP BY department;</td>
      <td class="link"><a href="sql-functions/numeric/sum.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>TAN</b></td>
      <td>The TAN() function returns the tangent of a number.</td>
      <td>SELECT TAN(PI() / 4) AS tan_value FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/tan.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>TRUNCATE</b></td>
      <td>The TRUNCATE() function truncates a number to the specified number of decimal places.</td>
      <td>SELECT salary, TRUNCATE(salary, 0) AS truncated_salary FROM employees;</td>
      <td class="link"><a href="sql-functions/numeric/truncate.php">view output</a></td>
    </tr>

    <tr>
      <td colspan="4" class="functions"><b> Date Functions</b></td>
    </tr>

     <tr>
      <td class="func"><b>ADDDATE</b></td>
      <td>The ADDDATE() function adds a time/date interval to a date and then returns the date.</td>
      <td>SELECT hire_date, ADDDATE(hired_date, INTERVAL 30 DAY) AS date_plus_30 FROM employees;</td>
      <td class="link"><a href="sql-functions/date/adddate.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>ADDTIME</b></td>
      <td>The ADDTIME() function adds a time interval to a time/datetime and then returns the time/datetime.</td>
      <td>SELECT NOW() AS current_datetime, ADDTIME(NOW(), '02:30:00') AS time_plus_2h30m FROM employees;</td>
      <td class="link"><a href="sql-functions/date/addtime.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>CURDATE</b></td>
      <td>The CURDATE() function returns the current date.</td>
      <td>SELECT CURDATE() AS today_date FROM employees;</td>
      <td class="link"><a href="sql-functions/date/curdate.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>CURRENT_DATE</b></td>
      <td>The CURRENT_DATE() function returns the current date.</td>
      <td>SELECT CURRENT_DATE() AS today_date FROM employees;</td>
      <td class="link"><a href="sql-functions/date/current_date.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>CURRENT_TIME</b></td>
      <td>The CURRENT_TIME() function returns the current time.</td>
      <td>SELECT CURRENT_TIME() AS current_time_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/current_time.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>CURRENT_TIMESTAMP</b></td>
      <td>The CURRENT_TIMESTAMP() function returns the current date and time.</td>
      <td>SELECT CURRENT_TIMESTAMP() AS current_ts FROM employees;</td>
      <td class="link"><a href="sql-functions/date/current_timestamp.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>CURTIME</b></td>
      <td>The CURTIME() function returns the current time.</td>
      <td>SELECT CURTIME() AS current_time_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/curtime.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DATE</b></td>
      <td>The DATE() function extracts the date part from a datetime expression.</td>
      <td>SELECT NOW() AS datetime_value, DATE(NOW()) AS date_only FROM employees;</td>
      <td class="link"><a href="sql-functions/date/date.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DATEDIFF</b></td>
      <td>The DATEDIFF() function returns the number of days between two date values.</td>
      <td>SELECT first_name, hired_date, DATEDIFF(CURDATE(), hired_date) AS days_employed FROM employees;</td>
      <td class="link"><a href="sql-functions/date/datediff.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DATE_ADD</b></td>
      <td>The DATE_ADD() function adds a time/date interval to a date and then returns the date.</td>
      <td>SELECT hire_date, DATE_ADD(hired_date, INTERVAL 1 YEAR) AS date_plus_year FROM employees;</td>
      <td class="link"><a href="sql-functions/date/date_add.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DATE_FORMAT</b></td>
      <td>The DATE_FORMAT() function formats a date as specified.</td>
      <td>SELECT first_name, hired_date, DATE_FORMAT(hired_date, '%M %d, %Y') AS formatted_date FROM employees;</td>
      <td class="link"><a href="sql-functions/date/date_format.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DATE_SUB</b></td>
      <td>The DATE_SUB() function subtracts a time/date interval from a date and then returns the date.</td>
      <td>SELECT hired_date, DATE_SUB(hired_date, INTERVAL 6 MONTH) AS date_minus_6months FROM employees;</td>
      <td class="link"><a href="sql-functions/date/date_sub.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DAY</b></td>
      <td>The DAY() function returns the day of the month for a given date (a number from 1 to 31).</td>
      <td>SELECT hire_date, DAY(hired_date) AS day_of_month FROM employees;</td>
      <td class="link"><a href="sql-functions/date/day.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DAYNAME</b></td>
      <td>The DAYNAME() function returns the weekday name for a given date.</td>
      <td>SELECT hired_date, DAYNAME(hired_date) AS day_name FROM employees;</td>
      <td class="link"><a href="sql-functions/date/dayname.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DAYOFMONTH</b></td>
      <td>The DAYOFMONTH() function returns the day of the month for a given date (a number from 1 to 31).</td>
      <td>SELECT hired_date, DAYOFMONTH(hired_date) AS day_of_month FROM employees;</td>
      <td class="link"><a href="sql-functions/date/dayofmonth.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DAYOFWEEK</b></td>
      <td>The DAYOFWEEK() function returns the weekday index for a given date (a number from 1 to 7).</td>
      <td>SELECT hired_date, DAYOFWEEK(hired_date) AS day_of_week FROM employees;</td>
      <td class="link"><a href="sql-functions/date/dayofweek.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>DAYOFYEAR</b></td>
      <td>The DAYOFYEAR() function returns the day of the year for a given date (a number from 1 to 366).</td>
      <td>SELECT hired_date, DAYOFYEAR(hired_date) AS day_of_year FROM employees;</td>
      <td class="link"><a href="sql-functions/date/dayofyear.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>EXTRACT</b></td>
      <td>The EXTRACT() function extracts a part from a given date.</td>
      <td>SELECT hired_date, EXTRACT(YEAR FROM hired_date) AS extracted_year FROM employees;</td>
      <td class="link"><a href="sql-functions/date/extract.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>FROM_DAYS</b></td>
      <td>The FROM_DAYS() function returns a date from a numeric datevalue.</td>
      <td>SELECT FROM_DAYS(738000) AS date_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/from_days.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>HOUR</b></td>
      <td>The HOUR() function returns the hour part for a given date (from 0 to 838).</td>
      <td>SELECT NOW() AS current_datetime, HOUR(NOW()) AS hour_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/hour.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>LAST_DAY</b></td>
      <td>The LAST_DAY() function extracts the last day of the month for a given date.</td>
      <td>SELECT hired_date, LAST_DAY(hired_date) AS last_day_of_month FROM employees;</td>
      <td class="link"><a href="sql-functions/date/last_day.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>LOCALTIME</b></td>
      <td>The LOCALTIME() function returns the current date and time.</td>
      <td>SELECT LOCALTIME() AS local_time FROM employees;</td>
      <td class="link"><a href="sql-functions/date/localtime.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>LOCALTIMESTAMP</b></td>
      <td>The LOCALTIMESTAMP() function returns the current date and time.</td>
      <td>SELECT LOCALTIMESTAMP() AS local_timestamp FROM employees;</td>
      <td class="link"><a href="sql-functions/date/localtimestamp.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MAKEDATE</b></td>
      <td>The MAKEDATE() function creates and returns a date based on a year and a number of days value.</td>
      <td>SELECT MAKEDATE(2024, 100) AS date_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/makedate.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MAKETIME</b></td>
      <td>The MAKETIME() function creates and returns a time based on an hour, minute, and second value.</td>
      <td>SELECT MAKETIME(10, 30, 45) AS time_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/maketime.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MICROSECOND</b></td>
      <td>The MICROSECOND() function returns the microsecond part of a time/datetime (from 0 to 999999).</td>
      <td>SELECT NOW() AS current_datetime, MICROSECOND(NOW()) AS microsecond_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/microsecond.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MINUTE</b></td>
      <td>The MINUTE() function returns the minute part of a time/datetime (from 0 to 59).</td>
      <td>SELECT NOW() AS current_datetime, MINUTE(NOW()) AS minute_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/minute.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MONTH</b></td>
      <td>The MONTH() function returns the month part for a given date (a number from 1 to 12).</td>
      <td>SELECT first_name, birth_date, MONTH(birth_date) AS birth_month FROM employees;</td>
      <td class="link"><a href="sql-functions/date/month.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>MONTHNAME</b></td>
      <td>The MONTHNAME() function returns the name of the month for a given date.</td>
      <td>SELECT birth_date, MONTHNAME(birth_date) AS month_name FROM employees;</td>
      <td class="link"><a href="sql-functions/date/monthname.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>NOW</b></td>
      <td>The NOW() function returns the current date and time.</td>
      <td>SELECT NOW() AS current_datetime FROM employees;</td>
      <td class="link"><a href="sql-functions/date/now.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>PERIOD_ADD</b></td>
      <td>The PERIOD_ADD() function adds a specified number of months to a period.</td>
      <td>SELECT PERIOD_ADD(202301, 3) AS period_result FROM employees;</td>
      <td class="link"><a href="sql-functions/date/period_add.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>PERIOD_DIFF</b></td>
      <td>The PERIOD_DIFF() function returns the difference between two periods. The result will be in months.</td>
      <td>SELECT PERIOD_DIFF(202312, 202301) AS period_difference FROM employees;</td>
      <td class="link"><a href="sql-functions/date/period_diff.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>QUARTER</b></td>
      <td>The QUARTER() function returns the quarter of the year for a given date value (a number from 1 to 4).</td>
      <td>SELECT hired_date, QUARTER(hired_date) AS quarter_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/quarter.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>SECOND</b></td>
      <td>The SECOND() function returns the seconds part of a time/datetime (from 0 to 59).</td>
      <td>SELECT NOW() AS current_datetime, SECOND(NOW()) AS second_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/second.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>SEC_TO_TIME</b></td>
      <td>The SEC_TO_TIME() function returns a time value (in format HH:MM:SS) based on the specified seconds.</td>
      <td>SELECT SEC_TO_TIME(3665) AS time_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/sec_to_time.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>STR_TO_DATE</b></td>
      <td>The STR_TO_DATE() function returns a date based on a string and a format.</td>
      <td>SELECT STR_TO_DATE('January 15 2024', '%M %d %Y') AS date_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/str_to_date.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>SUBDATE</b></td>
      <td>The SUBDATE() function subtracts a time/date interval from a date and then returns the date.</td>
      <td>SELECT hired_date, SUBDATE(hired_date, INTERVAL 15 DAY) AS date_minus_15 FROM employees;</td>
      <td class="link"><a href="sql-functions/date/subdate.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>SUBTIME</b></td>
      <td> The SUBTIME() function subtracts time from a time/datetime expression and then returns the new time/datetime.</td>
      <td>SELECT NOW() AS current_datetime, SUBTIME(NOW(), '01:30:00') AS time_minus_1h30m FROM employees;</td>
      <td class="link"><a href="sql-functions/date/subtime.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>SYSDATE</b></td>
      <td>The SYSDATE() function returns the current date and time.</td>
      <td>SELECT SYSDATE() AS system_date FROM employees;</td>
      <td class="link"><a href="sql-functions/date/sysdate.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TIME</b></td>
      <td>The TIME() function extracts the time part from a given time/datetime.</td>
      <td>SELECT NOW() AS datetime_value, TIME(NOW()) AS time_only FROM employees;</td>
      <td class="link"><a href="sql-functions/date/time.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TIME_FORMAT</b></td>
      <td>The TIME_FORMAT() function formats a time by a specified format.</td>
      <td>SELECT NOW() AS current_datetime, TIME_FORMAT(NOW(), '%H:%i:%s') AS formatted_time FROM employees;</td>
      <td class="link"><a href="sql-functions/date/time_format.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TIME_TO_SEC</b></td>
      <td>The TIME_TO_SEC() function converts a time value into seconds.</td>
      <td>SELECT TIME_TO_SEC('01:30:45') AS seconds FROM employees;</td>
      <td class="link"><a href="sql-functions/date/time_to_sec.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TIMEDIFF</b></td>
      <td>The TIMEDIFF() function returns the difference between two time/datetime expressions.</td>
      <td>SELECT TIMEDIFF('13:30:00', '10:00:00') AS time_difference FROM employees;</td>
      <td class="link"><a href="sql-functions/date/timediff.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TIMESTAMP</b></td>
      <td>The TIMESTAMP() function returns a datetime value based on a date or datetime value.</td>
      <td>SELECT TIMESTAMP('2024-01-15', '10:30:00') AS timestamp_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/timestamp.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>TO_DAYS</b></td>
      <td>The TO_DAYS() function returns the number of days between a date and year 0 (date "0000-00-00").</td>
      <td>SELECT hired_date, TO_DAYS(hired_date) AS days_value FROM employees;</td>
      <td class="link"><a href="sql-functions/date/todays.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>WEEK</b></td>
      <td>The WEEK() function returns the week number for a given date (a number from 0 to 53).</td>
      <td>SELECT hired_date, WEEK(hired_date) AS week_number FROM employees;</td>
      <td class="link"><a href="sql-functions/date/week.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>WEEKDAY</b></td>
      <td>The WEEKDAY() function returns the weekday number for a given date.</td>
      <td>SELECT hired_date, WEEKDAY(hired_date) AS weekday_index FROM employees;</td>
      <td class="link"><a href="sql-functions/date/weekday.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>WEEKOFYEAR</b></td>
      <td>The WEEKOFYEAR() function returns the week number for a given date (a number from 1 to 53).</td>
      <td>SELECT hired_date, WEEKOFYEAR(hired_date) AS week_of_year FROM employees;</td>
      <td class="link"><a href="sql-functions/date/weekofyear.php">view output</a></td>
    </tr>

     <tr>
      <td class="func"><b>YEAR</b></td>
      <td>The YEAR() function returns the year part for a given date (a number from 1000 to 9999).</td>
      <td>SELECT first_name, hired_date, YEAR(hired_date) AS hire_year FROM employees;</td>
      <td class="link"><a href="sql-functions/date/year.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>YEARWEEK</b></td>
      <td>The YEARWEEK() function returns the year and week number (a number from 0 to 53) for a given date.</td>
      <td>SELECT hired_date, YEARWEEK(hired_date) AS year_week FROM employees;</td>
      <td class="link"><a href="sql-functions/date/yearweek.php">view output</a></td>
    </tr>

     <tr>
      <td colspan="4" class="functions"><b> Advanced Functions</b></td>
    </tr>

    <tr>
      <td class="func"><b>BIN</b></td>
      <td>The BIN() function returns a binary representation of a number, as a string value.</td>
      <td>SELECT id, BIN(id) AS binary_value FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/bin.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>BINARY </b></td>
      <td>The BINARY function converts a value to a binary string.</td>
      <td>SELECT first_name, BINARY first_name AS binary_name FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/binary.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CASE </b></td>
      <td>The CASE statement goes through conditions and return a value when the first condition is met (like an IF-THEN-ELSE statement). So, once a condition is true, it will stop reading and return the result.</td>
        <td>SELECT first_name, salary, CASE WHEN salary >= 30000 THEN 'High' WHEN salary >= 15000 THEN 'Medium' ELSE 'Low' END AS salary_level FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/case.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CAST</b></td>
      <td>The CAST() function converts a value (of any type) into the specified datatype.</td>
      <td>SELECT id, CAST(id AS CHAR) AS id_as_char FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/cast.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>COALESCE</b></td>
      <td>The COALESCE() function returns the first non-null value in a list.</td>
      <td>SELECT first_name, COALESCE(NULL, NULL, first_name, 'N/A') AS coalesce_result FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/coalesce.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CONNECTION_ID</b></td>
      <td>The CONNECTION_ID() function returns the unique connection ID for the current connection.</td>
      <td>SELECT CONNECTION_ID() AS connection_id FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/connection_id.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CONV</b></td>
      <td>The CONV() function converts a number from one numeric base system to another, and returns the result as a string value.</td>
      <td>SELECT CONV(15, 10, 2) AS decimal_to_binary FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/conv.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CONVERT</b></td>
      <td>The CONVERT() function converts a value into the specified datatype or character set.</td>
      <td>SELECT id, CONVERT(id, CHAR) AS id_converted FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/convert.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>CURRENT_USER</b></td>
      <td>The CURRENT_USER() function returns the user name and host name for the MySQL account that the server used to authenticate the current client. 
        <br>The result is returned as a string in the UTF8 character set.</td>
      <td>SELECT CURRENT_USER() AS current_user_value FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/current_user.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>DATABASE</b></td>
      <td>The DATABASE() function returns the name of the current database. 
        <br>If there is no current database, this function returns NULL or "".</td>
      <td>SELECT DATABASE() AS database_name FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/database.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>IF</b></td>
      <td>The IF() function returns a value if a condition is TRUE, or another value if a condition is FALSE.</td>
      <td>SELECT first_name, salary, IF(salary > 30000, 'High', 'Low') AS salary_level FROM employees; </td>
      <td class="link"><a href="sql-functions/advanced/if.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>IFNULL</b></td>
      <td>The IFNULL() function returns a specified value if the expression is NULL. 
      <td>SELECT first_name, IFNULL(NULL, first_name) AS ifnull_result FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/ifnull.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>ISNULL</b></td>
      <td>The ISNULL() function returns 1 or 0 depending on whether an expression is NULL. 
      <td>SELECT first_name, ISNULL(first_name) AS is_null FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/isnull.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>LAST_INSERT_ID</b></td>
      <td>The LAST_INSERT_ID() function returns the AUTO_INCREMENT id of the last row that has been inserted or updated in a table.</td>
      <td>SELECT LAST_INSERT_ID() AS last_insert_id FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/last_insert_id.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>NULLIF</b></td>
      <td>The NULLIF() function compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned.</td>
      <td>SELECT first_name, NULLIF(first_name, 'John') AS nullif_result FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/nullif.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SESSION_USER</b></td>
      <td>The SESSION_USER() function returns the current user name and host name for the MySQL connection.</td>
      <td>SELECT SESSION_USER() AS session_user FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/session_user.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>SYSTEM_USER</b></td>
      <td>The SYSTEM_USER() function returns the current user name and host name for the MySQL connection.</td>
      <td>SELECT SYSTEM_USER() AS system_user FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/system_user.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>USER</b></td>
      <td>The USER() function returns the current user name and host name for the MySQL connection.</td>
      <td>SELECT USER() AS user_info FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/user.php">view output</a></td>
    </tr>

    <tr>
      <td class="func"><b>VERSION</b></td>
      <td>The VERSION() function returns the current version of the MySQL database, as a string.</td>
      <td>SELECT VERSION() AS mysql_version FROM employees;</td>
      <td class="link"><a href="sql-functions/advanced/version.php">view output</a></td>
    </tr>

  </table>
</body>
</html>