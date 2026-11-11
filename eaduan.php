<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Aduan - Campus App UiTMCK</title>
    <!-- Google Fonts & FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f8f6f0;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* --- PAGE HEADER --- */
        .page-header {
            padding: 140px 2rem 50px 2rem;
            text-align: center;
            background: linear-gradient(130deg, #40082c);
            color: #ffffff;
            margin-bottom: 3rem;
            position: relative;
        }

        .page-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .page-header p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 650px;
            margin: 0 auto;
        }

        /* --- MAIN SPLIT LAYOUT --- */
        .aduan-container {
            max-width: 1200px;
            margin: 0 auto 5rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 2.5rem;
            align-items: start;
        }

        /* LEFT SIDE: Info & Categories */
        .aduan-info-side {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .card-panel {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.03);
            border: 1px solid #f1f5f9;
        }

        .card-panel h3 {
            font-size: 1.2rem;
            color: #40082c;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
        }

        .category-pill-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
        }

        .cat-pill {
            background-color: #fdf2f8;
            color: #40082c;
            border: 1px solid #fbcfe8;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .guidelines-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .guidelines-list li {
            font-size: 0.9rem;
            color: #475569;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.4;
        }

        .guidelines-list li i {
            color: #0d9488;
            margin-top: 3px;
        }

        /* RIGHT SIDE: Action Launch Card */
        .aduan-action-side {
            background: linear-gradient(145deg, #40082c 0%, #2a051d 100%);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            color: #ffffff;
            box-shadow: 0 15px 35px rgba(64, 8, 44, 0.2);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .aduan-action-side::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            pointer-events: none;
        }

        .action-badge {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            color: #f6ad55;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 5px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 1.2rem;
        }

        .aduan-action-side h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .aduan-action-side p {
            font-size: 0.95rem;
            opacity: 0.85;
            line-height: 1.6;
            margin-bottom: 2.2rem;
        }

        .btn-launch {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background-color: #ffffff;
            color: #40082c;
            width: 100%;
            padding: 1.1rem 2rem;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-launch:hover {
            background-color: #fef3c7;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        }

        .support-info {
            margin-top: 1.5rem;
            font-size: 0.8rem;
            opacity: 0.7;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 900px) {
            .aduan-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Dynamic Navbar Inclusion -->
    <?php include 'navbar.php'; ?>

    <!-- PAGE HEADER -->
    <header class="page-header">
        <h1>e-Aduan Portal</h1>
        <p>Your centralized reporting hub for facility maintenance, infrastructure feedback, and campus inquiries across UiTM Machang.</p>
    </header>

    <!-- MAIN INTERACTIVE SECTION -->
    <div class="aduan-container">
        
        <!-- LEFT COLUMN: Guidelines & Categories -->
        <div class="aduan-info-side">
            
            <!-- Categories Panel -->
            <div class="card-panel">
                <h3><i class="fa-solid fa-tags"></i> Complaint Categories</h3>
                <div class="category-pill-grid">
                    <span class="cat-pill"><i class="fa-solid fa-building-columns"></i> Facilities & Classrooms</span>
                    <span class="cat-pill"><i class="fa-solid fa-bed"></i> Residential Hostels</span>
                    <span class="cat-pill"><i class="fa-solid fa-broom"></i> Cleanliness & Hygiene</span>
                    <span class="cat-pill"><i class="fa-solid fa-wifi"></i> Wi-Fi & IT Network</span>
                    <span class="cat-pill"><i class="fa-solid fa-shield-halved"></i> Safety & Security</span>
                </div>
            </div>

            <!-- Guidelines Panel -->
            <div class="card-panel">
                <h3><i class="fa-solid fa-circle-check"></i> Submission Guidelines</h3>
                <ul class="guidelines-list">
                    <li><i class="fa-solid fa-check"></i> Provide clear location indicators (Block name, room number, or college zone).</li>
                    <li><i class="fa-solid fa-check"></i> Attach photos or snapshots if you are reporting physical damage.</li>
                    <li><i class="fa-solid fa-check"></i> Make sure your active UiTM student email and contact information are correct.</li>
                    <li><i class="fa-solid fa-check"></i> Reports are reviewed during official operation hours (Sunday – Thursday).</li>
                </ul>
            </div>

        </div>

        <!-- RIGHT COLUMN: Action Launch Card -->
        <div class="aduan-action-side">
            <span class="action-badge">Official Submission Portal</span>
            <h2>Ready to Submit a Report?</h2>
            <p>Click below to launch the official Google Form securely. Your feedback helps us maintain a comfortable and conducive campus environment for everyone.</p>
            
            <a href="https://forms.gle/59QhQ1zoZ4pY37f4A" target="_blank" class="btn-launch">
                <i class="fa-solid fa-square-poll-horizontal"></i> Launch e-Aduan Form <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.85rem;"></i>
            </a>

            <div class="support-info">
                <i class="fa-solid fa-headset"></i> Need urgent assistance? Contact the administration office directly.
            </div>
        </div>

    </div>

    <!-- Dynamic Footer Inclusion -->
    <?php include 'footer.php'; ?>

</body>
</html>