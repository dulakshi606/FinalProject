<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Linkup | Professional Network</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
      
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f7fc;
    color: #333;
}

h1, h2 {
    color: white;
    font-weight: 600;
}


header {
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 10px 0;
    text-align: center;
}

nav ul li {
    display: inline-block;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffdd57;
}


section {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section h2 {
    text-align: center;
    margin-bottom: 20px;
}

/* Form styles */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input[type="email"],
input[type="password"],
input[type="text"] {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
}

button[type="submit"] {
    padding: 12px;
    background-color: #1a73e8;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0f59b5;
}


a {
    color: #1a73e8;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}


footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 14px;
}


@media (max-width: 768px) {
    header h1 {
        font-size: 24px;
    }

    nav ul {
        text-align: left;
        padding-left: 20px;
    }

    nav ul li {
        display: block;
        margin: 10px 0;
    }

    section {
        padding: 15px;
    }

    button[type="submit"] {
        padding: 10px;
    }
}
 
</style>

    <header>
        <h1>Welcome to Linkup</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="learning.php">Learning</a></li>
                <li><a href="jobs.php">Jobs</a></li>
            </ul>
        </nav>
    </header>

    
    <section class="login">
        <h2>Please log in</h2>
        <form action="authenticate.php" method="POST">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log in</button>
        </form>
        <p>Don't have an account? <a href="register.php">Sign up</a></p>
    </section>

    <section class="register">
        <h2>Sign Up</h2>
        <form action="create_account.php" m
        ethod="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </section>
        <p>&copy; 2024 Professional Network</p>
    </footer>

</body>
</html>
