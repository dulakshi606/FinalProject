<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Resources | Linkup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

h1, h2, h3 {
    margin: 0;
    padding: 0;
}

/* Header Styles */
header {
    background-color: #2c3e50;
    color: white;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1em;
}

nav ul li a:hover {
    text-decoration: underline;
}

/* Learning Section */
section.learning {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section.learning h2 {
    font-size: 2em;
    margin-bottom: 30px;
    color: #2c3e50;
}

.course {
    background-color: #ecf0f1;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.course h3 {
    font-size: 1.6em;
    color: #2c3e50;
    margin-bottom: 10px;
}

.course p {
    font-size: 1.1em;
    line-height: 1.6;
    color: #7f8c8d;
}

.course a {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
}

.course a:hover {
    text-decoration: underline;
}

/* Footer Styles */
footer {
    text-align: center;
    background-color: #2c3e50;
    color: white;
    padding: 20px 0;
    font-size: 0.9em;
}

/* Responsive Styles */
@media (max-width: 768px) {
    header h1 {
        font-size: 2em;
    }

    nav ul {
        text-align: center;
    }

    nav ul li {
        display: block;
        margin-bottom: 10px;
    }

    section.learning {
        padding: 20px;
    }

    .course {
        padding: 15px;
    }
}
</style>

    <header>
        <h1>Learning Resources</h1>
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

    <section class="learning">
        <h2>Courses to Enhance Your Skills</h2>
        <div class="course">
            <h3>Full-Stack Development</h3>
            <p>Master both front-end and back-end development with this comprehensive course.</p>
            <a href="#">Enroll Now</a>
        </div>
        <div class="course">
            <h3>Data Science with Python</h3>
            <p>Learn data analysis and machine learning with Python in this course.</p>
            <a href="#">Enroll Now</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Professional Network</p>
    </footer>

</body>
</html>
