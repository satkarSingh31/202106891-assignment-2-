<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About.php</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <!-- Satkar Singh(202106891) -->

    <header class="navbar">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <section class="about-me-section">
                <h2>About Me</h2>
                <div class="black-box">
                    <img src="satkar.jpeg" alt="Satkar Singh" class="profile-image">
                    <p>
                        <?php 
                        // Dynamic PHP content starts here
                        echo "Hello, I'm Satkar Singh, a computer technician currently employed at the Nike warehouse. I successfully completed my studies at Northern Pures College, where I specialized in computer systems and networking. To enhance my skills and knowledge, I pursued various courses, including HTML, Cisco Cyber Ops, Java programming, Window Server Administration, Data Analysis, IT Essentials, and Cyber Security Analysis.
                    
                        Among these, I found a particular passion for cybersecurity analysis, and I'm eager to further develop my expertise in this dynamic field. It's an area that I truly enjoy, and I'm committed to honing my skills to stay at the forefront of emerging technologies.
                  
                        In addition to my technical focus, I have a creative side. I find joy in crafting visually appealing webpages using HTML. A notable project in this regard is the design and development of the Nike webpage, where I combined my technical knowledge with creative flair to deliver an engaging online experience.
                
                        Beyond the professional realm, my enthusiasm for computers extends to continuous learning and exploration of various facets of information technology. I'm dedicated to staying informed about the latest industry trends, ensuring that my skills remain relevant and adaptable in the ever-evolving landscape of computer science."; 
                        ?>
                    </p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
