<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LaborTrack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/css/main.css">
        <link rel="icon" href="resources/labortrack.png" type="image/x-icon">
        <script src="js/index.js" defer></script>
    </head>
    <body>
        <div class="scroll-container">
            <header>
                <div class="header-flex">
                    <div class="header-flex-container">
                        <a href="index.php"class="header-flex-container">
                            <img src="resources/labortrack.png" alt="MedWeb Logo" id="logo" class ="header-flex-item">
                            <h1 id="logo-text" class ="header-flex-item">LaborTrack</h1>
                        </a>
                    </div>
                    <nav class="nav-container">
                        <ul class="nav">
                            <li class="nav-item"><a href="index.php">HOME</a></li>
                            <li class="nav-item"><a id="pop-up-btn" href="#">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <!-- This is the part -->
            <div class="search-div">
                <h2 class="page-heading">Labor Rights Library</h2>
                <p class="page-body">Explore a comprehensive collection of labor rights resources, including articles, guides, and legal information to empower workers and promote fair labor practices. <br>
                Use the search bar below to find specific topics or keywords within the library.</p> <br>
                <input id="input-search" placeholder="Search" type="search">
            </div>
        </div>
        

        <!-- Articles starts here -->
        <div class="articles-container">

            <!-- Article1 -->
            <div class="articles-content" id="articles">
                <div class="article">
                    <h3 class="article-title">Understanding Your Labor Rights</h3>
                    <p class="article-body">This article provides an overview of fundamental labor rights, including the right to fair wages, safe working conditions, and freedom from discrimination. It also outlines the legal protections available to workers under various labor laws.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="articles-content">
                <div class="article">
                    <h3 class="article-title">How to Report Workplace Violations</h3>
                    <p class="article-body">Learn the steps to take if you believe your labor rights have been violated. This guide covers how to document violations, whom to contact, and what to expect during the reporting process.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="articles-content">
                <div class="article">
                    <h3 class="article-title">The Role of Labor Unions</h3>
                    <p class="article-body">Explore the history and significance of labor unions in advocating for workers' rights. This article discusses how unions operate, their benefits, and how to get involved.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="articles-content">
                <div class="article">
                    <h3 class="article-title">The Importance of Workplace Safety</h3>
                    <p class="article-body">This article highlights the critical aspects of workplace safety, including common hazards, safety protocols, and the rights of workers to a safe working environment.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="articles-content">
                <div class="article">
                    <h3 class="article-title">The Impact of Labor Laws on Workers</h3>
                    <p class="article-body">Understand how labor laws affect workers' rights and protections. This article examines key legislation and its implications for both employees and employers.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>


        <footer>
            <p>&copy; 2025 MedWeb. All rights reserved.</p>
        </footer>
    </body>
</html>