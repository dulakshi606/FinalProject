<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs | Linkup</title>
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
    background-color: #2c3e50;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    font-size: 2.5rem;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 20px 0 0;
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


section.jobs {
    max-width: 1100px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section.jobs h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 30px;
    color: #333;
}

.job {
    background-color: #fafafa;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.job:hover {
    background-color: #f0f0f0;
}

.job h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #333;
}

.job p {
    font-size: 1rem;
    margin-bottom: 15px;
    color: #666;
}

.job a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
    transition: background-color 0.3s ease;
}

.job a:hover {
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
        <h1>Job Listings</h1>
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

    <section class="jobs">
        <h2>Available Jobs</h2>
        <div class="job">
            <h3>Software Engineer</h3>
            <p>TechCorp is looking for a Software Engineer with 3+ years of experience in web development...</p>
            <a href="#">Apply Now</a>
        </div>
        <div class="job">
            <h3>Product Manager</h3>
            <p>InnovateCo is seeking a Product Manager with a background in Agile methodology and product lifecycle management...</p>
            <a href="#">Apply Now</a>
        </div>
        <div class="job">
            <h3>Graphic Designer</h3>
            <p>CreativeWorks is hiring a Graphic Designer to join their team. Experience with Adobe Suite is a must...</p>
            <a href="#">Apply Now</a>
        </div>
        <div class="job">
            <h3>Data Analyst</h3>
            <p>DataSolutions is looking for a Data Analyst with expertise in SQL, Python, and data visualization...</p>
            <a href="#">Apply Now</a>
        </div>
        <div class="job">
            <h3>UX/UI Designer</h3>
            <p>DesignPro is hiring a UX/UI Designer to help craft amazing user experiences for web and mobile applications...</p>
            <a href="#">Apply Now</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Linkup. All Rights Reserved.</p>
    </footer>

</body>
</html>
