<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Viewing Site</title>
    
    <style>
        body {
    background-color:brown;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    width: 90%;
    margin: auto;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    margin: 0;
    font-size: 24px;
    color: #333;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #007bff;
}

/* Existing CSS styles for header and other sections */

.hero {
    background-image: url('hero-background.jpg'); /* Replace 'hero-background.jpg' with the path to your image */
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 48px;
    margin: 0;
}

.hero p {
    font-size: 24px;
    margin-bottom: 30px;
}

.cta-btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 18px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-btn:hover {
    background-color: #0056b3;
}

/* Existing CSS styles for header, hero, and other sections */

.features {
    background-color: #f9f9f9;
    padding: 80px 0;
    text-align: center;
}

.features h2 {
    font-size: 36px;
    margin-bottom: 40px;
}

.feature-item {
    margin-bottom: 40px;
}

.feature-item i {
    font-size: 48px;
    margin-bottom: 20px;
    color: #007bff; /* Adjust icon color as needed */
}

.feature-item h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.feature-item p {
    font-size: 18px;
}

/* Existing CSS styles for header, hero, features, and other sections */

.browse-movies {
    padding: 80px 0;
    text-align: center;
}

.browse-movies h2 {
    font-size: 36px;
    margin-bottom: 40px;
}

.movie-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 20px;
}

.movie {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
}

.movie img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.movie h3 {
    font-size: 18px;
    margin: 0;
}

a{
    text-decoration:none;
}

a h1:hover{
    color:blue;
}

    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">
        <a href="/"><h1>Movie Viewing Site</h1></a>
        </div>
        <nav>
        <ul>
                <li><a href="home">Home</a></li>
                <li><a href="browse">Browse Movies</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="login">Sign In/Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>

@section('home')
    <section class="features">
        <div class="container">
            <h2>Features</h2>
            <div class="feature-item">
                <i class="fas fa-film"></i>
                <h3>Largest Collection of Movies</h3>
                <p>Explore a vast library of movies across various genres.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-desktop"></i>
                <h3>High-Quality Streaming</h3>
                <p>Enjoy seamless streaming with high-quality video playback.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-heart"></i>
                <h3>Personalized Recommendations</h3>
                <p>Get personalized movie recommendations based on your preferences.</p>
            </div>
            <!-- Add more feature items as needed -->
        </div>
    </section>
    @show

@section('content')
<section class="hero">
        <div class="container">
            <h1>Welcome to Movie Watching Site</h1>
            <p>Your Ultimate Destination for Movie Lovers!</p>
            <a href="#" class="cta-btn">Start Viwing Now</a>
        </div>
    </section>
    @show

    <section class="browse-movies">
        <div class="container">
            <h2>Browse Movies</h2>
            <div class="movie-grid">
                <div class="movie">
                    <img src="movie1.jpg" alt="Movie 1">
                    <h3>Wanted</h3>
                </div>
                <div class="movie">
                    <img src="movie2.jpg" alt="Movie 2">
                    <h3>God Will Hunting</h3>
                </div>
                <div class="movie">
                    <img src="movie5.jpg" alt="Movie 2">
                    <h3>Reedeming Love</h3>
                </div>
                <div class="movie">
                    <img src="movie4.jpg" alt="Movie 2">
                    <h3>The Lost City</h3>
                </div>
                <!-- Add more movie items as needed -->
            </div>
        </div>
    </section>
</main>
<footer>
    <!-- Your footer content here -->
</footer>

</body>
</html>
