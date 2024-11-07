<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007acc;
        }
        h2 {
            border-bottom: 2px solid #007acc;
            padding-bottom: 5px;
            margin-top: 20px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <h1>PHP Control Statements</h1>

    <?php
    // IF-ELSE Statement
    $num = 10;
    echo "<h2>If-Else Statement</h2>";
    if ($num > 0) {
        echo "<p>$num is a positive number.</p>";
    } else {
        echo "<p>$num is not a positive number.</p>";
    }

    // SWITCH Statement
    $day = 3;
    echo "<h2>Switch Statement</h2>";
    switch ($day) {
        case 1:
            echo "<p>Today is Monday.</p>";
            break;
        case 2:
            echo "<p>Today is Tuesday.</p>";
            break;
        case 3:
            echo "<p>Today is Wednesday.</p>";
            break;
        default:
            echo "<p>Invalid day.</p>";
            break;
    }

    // FOR Loop
    echo "<h2>For Loop</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Number: $i</li>";
    }
    echo "</ul>";

    // WHILE Loop
    echo "<h2>While Loop</h2>";
    $count = 1;
    echo "<ul>";
    while ($count <= 3) {
        echo "<li>While count: $count</li>";
        $count++;
    }
    echo "</ul>";

    // FOREACH Loop (Array iteration)
    echo "<h2>Foreach Loop</h2>";
    $colors = array("Red", "Green", "Blue");
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>Color: $color</li>";
    }
    echo "</ul>";

    // IF-ELSEIF-ELSE Statement
    echo "<h2>If-Elseif-Else Statement</h2>";
    $grade = 85;
    if ($grade >= 90) {
        echo "<p>You got an A.</p>";
    } elseif ($grade >= 80) {
        echo "<p>You got a B.</p>";
    } elseif ($grade >= 70) {
        echo "<p>You got a C.</p>";
    } else {
        echo "<p>You need to improve your grades.</p>";
    }
    ?>

</body>
</html>
