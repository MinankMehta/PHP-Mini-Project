<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php
    session_start();
    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin'] || $_SESSION['type'] != 'admin') {
          header("Location: login.php"); 
          exit();
      }
    ?>
<head>
    <meta charset="utf-8">
    <title>Site with Links</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your stylesheet if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .btn-container {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            background-color: #bf953f;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #fff;
            color: #bf953f;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome, Admin!</h1>
        </div>
    </header>
    <div class="container">
        <h2>&ensp;&ensp;&ensp;&ensp;Choose an Option:</h2>
        <br>
        <br>
        <div class="btn-container">
            <a class="btn" href="adminpg.php">Admin Page</a>&ensp;&ensp;&ensp;&ensp;
            <a class="btn" href="index.php">Home Page</a>
        </div>
    </div>
</body>
</html>
