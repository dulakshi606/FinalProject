<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile | Linkup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
}


header {
    background-color:#2c3e50;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ff6347; 
}


section.profile {
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section.profile h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

section.profile p {
    font-size: 1.2rem;
    margin: 10px 0;
    color: #666;
}

section.profile h3 {
    font-size: 1.6rem;
    margin-top: 30px;
    color: #333;
    text-align: center;
}

form input[type="text"]:focus,
form input[type="email"]:focus {
    border-color: #ff6347; /* Highlight border on focus */
    outline: none;
}

form button {
    width: 100%;
    padding: 12px;
    background-color: #333;
    color: #fff;
    font-size: 1.2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #ff6347; 
}


footer {
    background-color: #2c3e50;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
}

footer p {
    font-size: 1rem;
}
</style>

    <header>
        <h1>Your Profile</h1>
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

    <section class="profile">
    <h2>Your Information</h2>
        <p>Name: Dulakshi chathurika</p>
        <p>Email: Dulakshichathurika@gmial.com</p>
        <p>Job Title: Software Engineer</p>
        <p>Company: TechCorp</p>

        <h3>Update Profile</h3>
        
        <form action="profile.php" method="POST">
            <input type="text" name="name" value="Dulakshi chathurika" placeholder="Your Name" required>
            <input type="email" name="email" value="Dulakshichathurika@gmail.com" placeholder="Your Email" required>
            <input type="text" name="profession" value="Software Engineer" placeholder="Your Profession" required>
            <button type="submit">Update</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Professional Network</p>
    </footer>

</body>
</html>
