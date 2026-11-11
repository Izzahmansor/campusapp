<style>
    /* --- FOOTER SECTION --- */
    .site-footer {
        background-color: #40082c;
        color: #94a3b8;
        padding: 4rem 2rem 2rem 2rem;
        margin-top: 4rem;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 3rem;
        padding-bottom: 3rem;
        border-bottom: 1px solid #5a123f;
    }

    .footer-col h3 {
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .footer-col p {
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    /* Social Icons Styling Fix */
    .social-icons {
        display: flex;
        gap: 0.8rem;
        align-items: center;
        margin-top: 1rem;
    }

    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: #ffffff !important;
        text-decoration: none;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: #78c0d1;
        color: #40082c !important;
        transform: translateY(-3px);
    }

    .footer-links {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .footer-links a {
        color: #94a3b8;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.2s;
    }

    .footer-links a:hover {
        color: #ffffff;
    }

    .footer-bottom {
        max-width: 1200px;
        margin: 2rem auto 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    /* MPP Initiative Branding Container */
    .mpp-branding {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .mpp-logo {
        height: 100px; 
        width: auto;
        object-fit: contain;
        border-radius: 6px;
    }

    .mpp-branding p {
        color: #94a3b8;
        font-size: 0.85rem;
        line-height: 1.3;
    }

    .footer-bottom p span {
        color: #e2e8f0;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }
        .mpp-branding {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<!-- FOOTER SECTION -->
<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-col">
            <h3>Campus App UiTMCK</h3>
            <p>An initiative dedicated to simplifying campus life, navigation, and student accessibility across UiTM Cawangan Kelantan Kampus Machang.</p>
            <div class="social-icons">
                <a href="https://instagram.com/mppuitmkelantan?rpxt=MWltMjZpbWQ5NWV3Mw%3D%3D" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@mppuitmkelantan?_r=1&_t=ZS-9AXO79Y6XC5" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="discoverus.php">Discover Us</a></li>
                <li><a href="main-attraction.php">Main Attractions</a></li>
                <li><a href="initiatives.php">Our Initiatives</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Support & Services</h3>
            <ul class="footer-links">
                <li><a href="eaduan.php">E-Aduan Portal</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Campus App UiTMCK. All rights reserved.</p>
        
        <!-- MPP Branding Block -->
        <div class="mpp-branding">
            <img src="LOGOMPP.png" alt="MPP UiTM Cawangan Kelantan Logo" class="mpp-logo">
            <p>An initiative by <br><span>Majlis Perwakilan Pelajar (MPP) UiTM Cawangan Kelantan Sesi 2025/2026</span></p>
        </div>
    </div>
</footer>