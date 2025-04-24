<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        .desktop-label {
            background-color: #333;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
        }
        
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        
        .search-bar {
            background-color: #34495e;
            padding: 10px;
            text-align: center;
        }
        
        .search-bar input {
            padding: 8px;
            width: 300px;
            border: none;
            border-radius: 4px;
        }
        
        .sidebar {
            background-color: #34495e;
            color: white;
            width: auto;
            height: calc(150vh - 130px);
            height: auto;
            float: left;
        }
        
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar li {
            padding: 15px 20px;
            border-bottom: 1px solid #2c3e50;
            cursor: pointer;
        }
        
        .sidebar li:hover {
            background-color: #2c3e50;
        }
        
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 250px;
        }
        
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .action-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            width: 200px;
        }
        
        .action-button:hover {
            background-color: #2980b9;
        }


        /* Add a black background color to the top navigation */
        .topnav {
        background-color: #34495e;
        overflow: hidden;
        display: flex;
        justify-content: center;
        border-bottom: 2px solid #2c3e50;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
        color: #f2f2f2;
        padding: 14px 20px;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .top-header {
            background-color: #2c3e50;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header-title {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            color: #ecf0f1;
            letter-spacing: 1px;
        }

    </style>
</head>
<body>
    <header>
        <div class="top-header">
            <h1 class="header-title">Appointment Management System</h1>
        </div>
        <nav class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </nav>
    </header>

    <!-- <div class="desktop-label">Desktop - 3</div> -->
    
    <!-- <div class="header">APPOINTMENT MANAGEMENT SYSTEM</div> -->
    
    <!-- <div class="search-bar">
        <input type="text" placeholder="Search">
    </div> -->
    
    <!-- <div class="sidebar">
        <ul>
            <li>HOME</li>
            
        </ul>
    </div> -->
    
    <div class="main-content">
        <div class="action-buttons">
            <a href="<?= base_url('appointments/make') ?>" class="action-button">Make Appointments</a>
            <a href="<?= base_url('appointments/viewSchedules') ?>" class="action-button">View Schedules</a>
        </div>
    </div>

</body>
</html>