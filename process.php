<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>

    <h2>Form Submission Receipt</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Start the receipt layout
        echo "<table>";
        echo "<tr><th>Field</th><th>Details</th></tr>";

        // User Information
        echo "<tr><td>Full Name</td><td>" . htmlspecialchars($_POST['uname']) . "</td></tr>";
        echo "<tr><td>Email</td><td>" . htmlspecialchars($_POST['email']) . "</td></tr>";
        echo "<tr><td>Date of Birth</td><td>" . htmlspecialchars($_POST['dob']) . "</td></tr>";
        echo "<tr><td>Country</td><td>" . htmlspecialchars($_POST['country']) . "</td></tr>";
        echo "<tr><td>Your Opinion</td><td>" . htmlspecialchars($_POST['opinion']) . "</td></tr>";

        // Terms Accepted (Checkbox)
        echo "<tr><td>Terms Accepted</td><td>" . (isset($_POST['terms']) ? 'Yes' : 'No') . "</td></tr>";

        echo "</table>";
        echo "<p>Thank you for submitting your information. Your form has been received!</p>";
    } else {
        echo "<p>Invalid request method. Please submit the form correctly.</p>";
    }
    ?>

</body>
</html>
