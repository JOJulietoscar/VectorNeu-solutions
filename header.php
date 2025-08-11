<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VectorNeu Solutions - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --accent-gradient: linear-gradient(135deg, #231dddff, #1ab3d9ff);
            --bg-color: #1c1c1c;
            --text-color: #fff;
            --hover-glow: rgba(14, 164, 205, 0.65);
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #000;
        }

        .tech-header {
            background-color: #000000ff;
            padding: 0px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 100px;
             width: 100px;
              object-fit: contain;
              filter: brightness(1.2) invert(0);
            
        }

        .tech-nav ul {
            display: flex;
            gap: 10px;
            list-style: none;
            padding: 10px;
            background-color: var(--bg-color);
            border-radius: 50px;
            box-shadow: 0 0 12px rgba(255, 0, 255, 0.2);
        }

        .tech-nav ul li a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: transparent;
            color: #ddd;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .tech-nav ul li a:hover,
        .tech-nav ul li a.active {
            background: var(--accent-gradient);
            box-shadow: 0 0 15px var(--hover-glow);
            color: #fff;
        }

        .tech-nav ul li a i {
            font-size: 18px;
        }

        .mobile-menu-toggle {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .tech-nav {
                display: none;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                padding: 20px;
                backdrop-filter: blur(5px);
                border-radius: 0 0 20px 20px;
            }

            .tech-nav.active {
                display: block;
            }

            .tech-nav ul {
                flex-direction: column;
                background-color: transparent;
                box-shadow: none;
            }

            .tech-nav ul li a {
                justify-content: center;
                background-color: rgba(255, 255, 255, 0.1);
                padding: 12px;
                border-radius: 20px;
            }

            .tech-nav ul li a:hover,
            .tech-nav ul li a.active {
                background: var(--accent-gradient);
            }

            .mobile-menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <header class="tech-header">
        <div class="container">
            <div class="logo-container">
                <img src="vectorneulogo.jpg" alt="VectorNeu Solutions Logo" class="logo">
            </div>
            <nav class="tech-nav" id="mainNav">
                <ul>
                    <li><a href="index.php" class="<?php echo $pageTitle == 'Home' ? 'active' : ''; ?>"><i class="fas fa-home"></i><span>Home</span></a></li>
                    <li><a href="about.php" class="<?php echo $pageTitle == 'About' ? 'active' : ''; ?>"><i class="fas fa-search"></i><span>About</span></a></li>
                    <li><a href="service.php" class="<?php echo $pageTitle == 'Service' ? 'active' : ''; ?>"><i class="fas fa-chart-bar"></i><span>Service</span></a></li>
                    <li><a href="team.php" class="<?php echo $pageTitle == 'Team' ? 'active' : ''; ?>"><i class="fas fa-users"></i><span>Team</span></a></li>
                    <li><a href="contact.php" class="<?php echo $pageTitle == 'Contact' ? 'active' : ''; ?>"><i class="fas fa-user"></i><span>Contact</span></a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <script>
        document.getElementById('mobileMenuToggle').addEventListener('click', function () {
            document.getElementById('mainNav').classList.toggle('active');
        });
    </script>
</body>
</html>
