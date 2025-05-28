<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        td {
            background-color: #ffffff;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        td:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            font-size: 18px;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to Student Management System</h1>
    <table>
        <tr>
            <td><a href="studentlogui.php">User Login</a></td>
        </tr>
        <tr>
            <td><a href="studentreg.php">User Signup</a></td>
        </tr>
    </table>
</body>
</
