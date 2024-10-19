<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login2.html");
    exit();
}
?>
<!DOCTYPE html>
<!-- Your existing index.html content -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #3f3f3f;
            padding: 20px;
            color: white;
            text-align: left;
        }

        nav {
            background-color: #333;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            display: block;
        }

        nav ul li a:hover {
            background-color: #575757;
        }

        .programs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 50px 0;
            background-color: #f8f9fa;
        }

        .program {
            background-color: white;
            border-radius: 10px;
            margin: 15px;
            padding: 20px;
            text-align: center;
            width: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .program img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .program p {
            margin: 0;
            font-weight: bold;
            color: #333;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }
    </style>
            
       
</head>
<body>
    <header>
        <nav class="nav-bar">
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="login2.html">Login</a>
            <a href="registration2.html">Register</a>
            <a href="contact.html">Contact Us</a>
        </nav>
        <div class="header-container">
            <h1>YOGA</h1>
            
        </div>
    </header>
    
    <section class="programs">
        <div class="program">
            <img src="degree.png" alt="Degree Engineering">
            <p>Degree Engg.</p>
        </div>
        <div class="program">
            <img src="pharmacy.png" alt="Pharmacy">
            <p>Pharmacy</p>
        </div>
        <div class="program">
            <img src="diploma.png" alt="Diploma Engineering">
            <p>Diploma Engg.</p>
        </div>
        <div class="program">
            <img src="mba.png" alt="MCA/MBA">
            <p>MCA/MBA</p>
        </div>
        <div class="program">
            <img src="bba.png" alt="BBA/BCA">
            <p>BBA/BCA</p>
        </div>
        <div class="program">
            <img src="bed.png" alt="B.Ed">
            <p>B.Ed.</p>
        </div>
        <div class="program">
            <img src="nursing.png" alt="Nursing">
            <p>Nursing</p>
        </div>
        <div class="program">
            <img src="paramedical.png" alt="Paramedical">
            <p>Paramedical</p>
        </div>
        <div class="program">
            <img src="texas.png" alt="Texas">
            <p>TEXAS</p>
        </div>
        <div class="program">
            <img src="environmental.png" alt="Environmental Audit">
            <p>Environmental Audit</p>
        </div>
        <div class="program">
            <img src="civil.png" alt="Civil Material Testing">
            <p>Civil Material Testing</p>
        </div>
    </section>



    <footer>
        <p>&copy; CozyCore Yoga</p>
    </footer>
</body>
</html>
