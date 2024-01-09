<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bank Management System</h2>
        
        <!-- Navigation Links -->
        <ul>
            <li><a href="#add_account">Add New Account</a></li>
            <li><a href="#view_details">View Account Details</a></li>
            <li><a href="#view_balances">View Balances</a></li>
        </ul>

        <!-- Add New Account Section -->
        <section id="add_account">
            <h3>Add New Account</h3>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $account_number = $_POST['account_number'];
                $name = $_POST['name'];
                $balance = $_POST['balance'];

                // Process the data (in a real-world scenario, store in a database)

                // Display the added account details
                echo "<p>New Account Added:</p>";
                echo "<p>Account Number: $account_number</p>";
                echo "<p>Name: $name</p>";
                echo "<p>Balance: $balance</p>";
            }
            ?>
            <!-- Add New Account Form -->
            <form action="#add_account" method="post">
                <label for="account_number">Account Number:</label>
                <input type="text" name="account_number" required>

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="balance">Balance:</label>
                <input type="text" name="balance" required>

                <button type="submit">Add New Account</button>
            </form>
        </section>

        <!-- View Account Details Section -->
        <section id="view_details">
            <h3>View Account Details</h3>
            <!-- Add logic to display account details here -->
        </section>

        <!-- View Balances Section -->
        <section id="view_balances">
            <h3>View Balances</h3>
            <!-- Add logic to display account balances here -->
        </section>
    </div>
</body>
</html>
