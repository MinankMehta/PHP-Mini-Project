<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    session_unset();
    session_destroy();
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLIB - Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Signup form styles */
.signup-container {
    text-align: center;
    margin: 70px auto;
    max-width: 400px;
    color: #000;
    background-color: #bf953f;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.leftie{
    text-align: left;
}

.signup-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 18px;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    background-color: #bf953f; /* Darker gold color */
    color: #000;
    padding: 10px 20px;
    border: 2px solid black;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s, transform 0.3s;
}

button:hover {
    background-color: #fff; /* White background on hover */
    color: #bf953f; /* Darker gold text color on hover */
    border-color: #fff; /* White border on hover */
    transform: scale(1.05); /* Slight scale-up on hover for a subtle effect */
}

input[type="submit"] {
    background-color: #bf953f; /* Darker gold color */
    color: #000;
    padding: 10px 20px;
    border: 2px solid black;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px; /* Add space between buttons */
    transition: background-color 0.3s, color 0.3s, border-color 0.3s, transform 0.3s;
}

input[type="submit"]:hover {
    background-color: #fff; /* White background on hover */
    color: #bf953f; /* Darker gold text color on hover */
    border-color: #fff; /* White border on hover */
    transform: scale(1.05); /* Slight scale-up on hover for a subtle effect */
}
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="wp.html">&ensp;MLIB</a>
            </div>
            <div class="navbar-menu">
                <!-- You can include navigation links if needed -->
            </div>
        </nav>
    </header>
    <main>
        <div class="signup-container">
            <h1>LOG IN</h1>
            <br>
            <br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="leftie">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <br>
                </div>
                <input type="submit" name="btn" value="Submit">&ensp;&ensp;
                <input type="submit" name="btn" value="Signup">&ensp;&ensp;
                <br>
            </form>
        </div>
    </main>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($_POST['btn']=="Signup")
        {
            header("Location:signup.php");
        }
        else if($_POST['btn']=="Submit")
        {
            $email=$_POST['email'];
            $passwrd=$_POST['password'];
            require 'connection.php';
            $sql="SELECT Type,name from Userdata WHERE Emailid='$email' AND Password='$passwrd'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_assoc($result);
                $_SESSION['loggedin']=true;
                if($row['name']=='admin'){
                    $_SESSION['type'] = 'admin';
                    $_SESSION['name']=$row['name'];
                    header('location: halfway.php');
                }
                else{
                    $_SESSION['name']=$row['name'];
                    header('location: index.php');
                }
            }
            else
            {
                echo "<script type='text/javascript'>";
                echo "alert('Wrong Email or Password')";
                echo "</script>";
            }
        }
    }
    ?>
</body>
</html>
