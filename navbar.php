<?php
// Determine current page for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus App - UiTM Machang</title>
    <!-- FontAwesome for Mobile Menu Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Embedded CSS for the Navbar -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Header & Navbar Container */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            z-index: 1000;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        /* Logo Image Styling */
        .nav-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .nav-logo img {
            height: 75px;
            width: auto;
            object-fit: contain;
            display: block;
            border-radius: 6px;
        }

        /* Nav Menu Links */
        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: #555555;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s ease, transform 0.2s ease;
            position: relative;
            padding: 0.25rem 0;
        }

        /* Underline hover effect */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #40082c;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #40082c;
            font-weight: 600;
        }

        /* Hamburger Icon (Hidden on Desktop) */
        .hamburger {
            display: none;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #333;
        }

        /* Responsive Styles for Mobile & Tablets */
        @media (max-width: 992px) {
            .hamburger {
                display: block;
            }

            /* Slide-down Mobile Menu */
            .nav-links {
                position: fixed;
                left: -100%;
                top: 80px; 
                gap: 0;
                flex-direction: column;
                background-color: #ffffff;
                width: 100%;
                text-align: center;
                transition: 0.3s ease-in-out;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.05);
                padding: 1.5rem 0;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-item {
                margin: 1rem 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar HTML Content -->
    <header class="header">
        <nav class="navbar">
            <!-- Logo Image -->
            <a href="index.php" class="nav-logo">
                <img src="logo.png" alt="Website Logo">
            </a>

            <!-- Navigation Links -->
            <ul class="nav-links" id="navLinks">
                <li class="nav-item"><a href="index.html" class="nav-link <?= ($current_page == 'index.html') ? 'active' : ''; ?>">Home</a></li>
                <li class="nav-item"><a href="discoverus.php" class="nav-link <?= ($current_page == 'discoverus.php') ? 'active' : ''; ?>">Discover Us</a></li>
                <li class="nav-item"><a href="main-attraction.php" class="nav-link <?= ($current_page == 'main-attraction.php') ? 'active' : ''; ?>">Main Attraction</a></li>
                <li class="nav-item"><a href="eaduan.php" class="nav-link <?= ($current_page == 'eaduan.php') ? 'active' : ''; ?>">E-Aduan</a></li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link <?= ($current_page == 'aboutus.php') ? 'active' : ''; ?>">About Us</a></li>
            </ul>

            <!-- Mobile Hamburger Menu Toggle -->
            <button class="hamburger" id="hamburger" aria-label="Toggle Navigation">
                <i class="fa-solid fa-bars" id="hamburgerIcon"></i>
            </button>
        </nav>
    </header>

    <!-- Embedded JavaScript for Navbar Interaction -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const navLinksMenu = document.getElementById('navLinks');
        const navItems = document.querySelectorAll('.nav-link');

        // Toggle mobile menu open/close on click
        hamburger.addEventListener('click', () => {
            navLinksMenu.classList.toggle('active');
            if (navLinksMenu.classList.contains('active')) {
                hamburgerIcon.classList.remove('fa-bars');
                hamburgerIcon.classList.add('fa-xmark');
            } else {
                hamburgerIcon.classList.remove('fa-xmark');
                hamburgerIcon.classList.add('fa-bars');
            }
        });

        // Close mobile menu when clicking any navigation link
        navItems.forEach(link => {
            link.addEventListener('click', () => {
                navLinksMenu.classList.remove('active');
                hamburgerIcon.classList.remove('fa-xmark');
                hamburgerIcon.classList.add('fa-bars');
            });
        });
    </script>
</body>
</html>