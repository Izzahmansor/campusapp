<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Attractions - Campus App UiTMCK</title>
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

        /* Container helper */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* --- PAGE HEADER --- */
        .page-header {
            padding: 130px 2rem 40px 2rem;
            text-align: center;
            background: linear-gradient(130deg, #40082c);
            color: #ffffff;
            margin-bottom: 3rem;
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
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- ATTRACTIONS GRID SECTION --- */
        .attractions-wrapper {
            max-width: 1200px;
            margin: 0 auto 5rem auto;
            padding: 0 2rem;
        }

        .attractions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .attraction-card {
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #f1f5f9;
            display: flex;
            flex-direction: column;
        }

        .attraction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .attraction-img {
            height: 220px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .attraction-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
            color: #0f172a;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
        }

        .attraction-info {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }

        .attraction-info h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .attraction-info p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .attraction-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .location-text {
            font-size: 0.85rem;
            color: #475569;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-maps {
            background-color: #40082c;
            color: #ffffff;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: background 0.2s;
        }

        .btn-maps:hover {
            background-color: #5a123f;
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .attractions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .attractions-grid {
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
        <h1>Campus Main Attractions</h1>
        <p>Explore key landmarks, academic hubs, and student popular spots around UiTM Cawangan Kelantan Kampus Machang.</p>
    </header>

    <!-- ATTRACTIONS DIRECTORY SECTION -->
    <div class="attractions-wrapper">
        <div class="attractions-grid">

            <!-- Item 1: Administrative Building -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('admin.png');">
                    <span class="attraction-badge">Landmark</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Administrative Building</h3>
                        <p>The core hub for campus management, executive offices, and official administration counters.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Main Entrance</span>
                        <a href="https://maps.app.goo.gl/KToNzRg82ogEpXSMAass=" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 2: Perpustakaan Tengku Anis (PTA) -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('pta.png');">
                    <span class="attraction-badge">Study Zone</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Perpustakaan Tengku Anis (PTA)</h3>
                        <p>Central campus library equipped with extensive reading spaces, book reserves, and e-research labs.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Kompleks Jati</span>
                        <a href="https://maps.app.goo.gl/2U8kXbTRfpS8FsZ27" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 3: Block A, B and C -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('block.png');">
                    <span class="attraction-badge">Academic Zone</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Block A, B and C</h3>
                        <p>Primary lecture halls, tutorial rooms, and faculty computer laboratories for daily classes.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Academic Complex</span>
                        <a href="https://maps.app.goo.gl/MWyDBJLWpZ5W77SN7" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 4: Student Centre -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('student_center.png');">
                    <span class="attraction-badge">Student Hub</span>
                    </div>
                <div class="attraction-info">
                    <div>
                        <h3>Student Centre</h3>
                        <p>Dynamic hub for student activities, club meetings, discussions, and campus events.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Student Square</span>
                        <a href="https://maps.app.goo.gl/JnCt2jpkcvGyvEug6ass=" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 5: Sport Complex -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('sport.png');">
                    <span class="attraction-badge">Recreation</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Sport Complex</h3>
                        <p>Features fields, indoor courts, and recreational spaces for student sports and fitness initiatives.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Sports Zone</span>
                        <a href="https://maps.app.goo.gl/6ozD1jW61HNtsf2K6ass=" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 6: Nasken Coffee -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('nasken.png');">
                    <span class="attraction-badge">Dining</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Nasken Coffee</h3>
                        <p>Popular campus café hotspot for coffee, discussions, and relaxing between lectures.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Campus Ground</span>
                        <a href="https://maps.app.goo.gl/MvEkmUjZ2cZz3eDS6ass=" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 7: Rumah Putih -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('rumah_putih.png');">
                    <span class="attraction-badge">Architecture</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Rumah Putih</h3>
                        <p>Classic heritage-style building on campus known for its distinct architectural aesthetic.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Heritage Zone</span>
                        <a href="https://maps.app.goo.gl/LEoaMHd2hicao4Q19ass=" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 8: Kem Wawasan -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('kem.png');">
                    <span class="attraction-badge">Adventure</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Kem Wawasan</h3>
                        <p>Outdoor camping and adventure training ground used for co-curricular activities and programs.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Upper Campus</span>
                        <a href="https://maps.google.com/?q=Kem+Wawasan+UiTM+Machang" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

            <!-- Item 9: Dewan Professional -->
            <div class="attraction-card">
                <div class="attraction-img" style="background-image: url('dewan.png');">
                    <span class="attraction-badge">Events</span>
                </div>
                <div class="attraction-info">
                    <div>
                        <h3>Dewan Professional</h3>
                        <p>Large grand hall hosting major university ceremonies, conferences, and student performances.</p>
                    </div>
                    <div class="attraction-footer">
                        <span class="location-text"><i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Main Event Area</span>
                        <a href="https://maps.google.com/?q=Dewan+Professional+UiTM+Machang" target="_blank" class="btn-maps"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Dynamic Footer Inclusion -->
    <?php include 'footer.php'; ?>

</body>
</html>