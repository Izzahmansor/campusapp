<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Us - Campus App UiTMCK</title>
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
            padding: 140px 2rem 40px 2rem;
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

        /* --- SEARCH & FILTERS SECTION --- */
        .filter-section {
            max-width: 1200px;
            margin: 0 auto 3rem auto;
            padding: 0 2rem;
        }

        .filter-card {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        /* Search Box Wrapper for Clear Button Positioning */
        .search-box {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .input-wrapper {
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
        }

        .input-wrapper .search-input {
            width: 100%;
            padding-right: 2.8rem;
        }

        .clear-btn {
            position: absolute;
            right: 1rem;
            background: none;
            border: none;
            color: #94a3b8;
            font-size: 1.1rem;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            transition: color 0.2s;
        }

        .clear-btn:hover {
            color: #40082c;
        }

        .search-input {
            flex: 1;
            padding: 0.85rem 1.5rem;
            border-radius: 50px;
            border: 1px solid #cbd5e1;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #40082c;
        }

        .search-btn {
            background-color: #40082c;
            color: #ffffff;
            border: none;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-btn:hover {
            background-color: #5a123f;
        }

        /* Category Filter Buttons Row */
        .category-filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            justify-content: center;
            margin-top: 1.8rem; 
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .cat-filter-btn {
            background-color: #f1f5f9;
            color: #475569;
            border: none;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }

        .cat-filter-btn:hover, .cat-filter-btn.active {
            background-color: #40082c;
            color: #ffffff;
        }

        /* A-Z Alphabet Filter Bar */
        .alphabet-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            justify-content: center;
        }

        .alpha-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
            color: #334155;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .alpha-btn:hover, .alpha-btn.active {
            background-color: #40082c;
            color: #ffffff;
            border-color: #40082c;
        }

        /* --- DIRECTORY GRID --- */
        .directory-wrapper {
            max-width: 1200px;
            margin: 0 auto 5rem auto;
            padding: 0 2rem;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1.5rem;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .card-item {
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #f1f5f9;
            display: flex;
            flex-direction: column;
        }

        .card-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .card-img {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .card-badge {
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

        .card-info {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }

        .card-info h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .card-info p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .card-meta {
            font-size: 0.85rem;
            color: #475569;
            font-weight: 500;
        }

        .btn-action {
            background-color: #f1f5f9;
            color: #1e293b;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: background 0.2s;
        }

        .btn-map {
            background-color: #40082c;
            color: #ffffff;
        }

        .card-item:hover .btn-action {
            background-color: #40082c;
            color: #ffffff;
        }
        
        .card-item:hover .btn-map {
            background-color: #5a123f;
        }

        /* --- MODAL POPUP --- */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 750px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            animation: modalFadeIn 0.3s ease;
            display: flex;
            flex-direction: column;
            max-height: 90vh;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            background-color: #40082c;
            color: #ffffff;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.2s;
        }

        .modal-close:hover {
            color: #f6ad55;
        }

        .modal-body {
            padding: 2rem;
            overflow-y: auto;
            flex: 1;
        }

        .modal-step-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 1.2rem;
        }

        .level-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .level-btn {
            background-color: #f8fafc;
            border: 2px solid #e2e8f0;
            padding: 1.2rem;
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 600;
            color: #334155;
            cursor: pointer;
            text-align: left;
            transition: all 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .level-btn:hover {
            border-color: #40082c;
            background-color: #fdf2f8;
            color: #40082c;
        }

        .layout-view {
            display: none;
        }

        .layout-view.active {
            display: block;
        }

        .back-levels-btn {
            background: none;
            border: none;
            color: #40082c;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 1.2rem;
        }

        .back-levels-btn:hover {
            text-decoration: underline;
        }

        .classroom-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.8rem;
            margin-bottom: 1.5rem;
        }

        .room-item {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #1e293b;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .room-item span.badge {
            background-color: #e2e8f0;
            font-size: 0.75rem;
            padding: 2px 8px;
            border-radius: 6px;
            color: #475569;
        }

        .building-map-preview {
            width: 100%;
            height: 220px;
            border-radius: 14px;
            background-color: #e2e8f0;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #64748b;
            font-weight: 500;
            border: 1px dashed #cbd5e1;
        }

        /* Clickable Room Style for Student Centre */
        .room-item.clickable-room {
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .room-item.clickable-room:hover, 
        .room-item.clickable-room.active-room {
            border-color: #40082c;
            background-color: #fdf2f8;
            color: #40082c;
            transform: translateY(-2px);
        }

        @media (max-width: 1024px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
            .search-box {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Dynamic Navbar Inclusion -->
    <?php include 'navbar.php'; ?>

    <!-- PAGE HEADER -->
    <header class="page-header">
        <h1>Discover Us</h1>
        <p>Explore all campus zones, academic facilities, dining spots, leisure hubs, and administrative offices across UiTM Machang.</p>
    </header>

    <!-- SEARCH & FILTERS -->
    <section class="filter-section">
        <div class="filter-card">
            <!-- Search Box with Fixed Input Wrapper -->
            <div class="search-box">
                <div class="input-wrapper">
                    <input type="text" id="globalSearchInput" class="search-input" placeholder="Search rooms, offices, gym, student centre..." oninput="toggleClearBtn()" onkeyup="handleSearchKey(event)">
                    <button type="button" id="clearSearchBtn" class="clear-btn" onclick="clearSearch()" title="Clear search">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <button class="search-btn" onclick="executeSearch()"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
            </div>

            <!-- Category Filter Buttons -->
            <div class="category-filter-bar">
                <button class="cat-filter-btn active" onclick="filterCategory('ALL')">All Categories</button>
                <button class="cat-filter-btn" onclick="filterCategory('Academic')">Academic</button>
                <button class="cat-filter-btn" onclick="filterCategory('Diner')">Diner & Cafe</button>
                <button class="cat-filter-btn" onclick="filterCategory('Leisure')">Leisure & Sports</button>
                <button class="cat-filter-btn" onclick="filterCategory('Management')">Management</button>
                <button class="cat-filter-btn" onclick="filterCategory('Accommodation')">Accommodation</button>
            </div>

            <!-- A to Z Alphabet Filter Bar -->
            <div class="alphabet-bar">
                <button class="alpha-btn active" onclick="filterAlpha('ALL')">All</button>
                <button class="alpha-btn" onclick="filterAlpha('A')">A</button>
                <button class="alpha-btn" onclick="filterAlpha('B')">B</button>
                <button class="alpha-btn" onclick="filterAlpha('C')">C</button>
                <button class="alpha-btn" onclick="filterAlpha('D')">D</button>
                <button class="alpha-btn" onclick="filterAlpha('E')">E</button>
                <button class="alpha-btn" onclick="filterAlpha('F')">F</button>
                <button class="alpha-btn" onclick="filterAlpha('G')">G</button>
                <button class="alpha-btn" onclick="filterAlpha('H')">H</button>
                <button class="alpha-btn" onclick="filterAlpha('I')">I</button>
                <button class="alpha-btn" onclick="filterAlpha('J')">J</button>
                <button class="alpha-btn" onclick="filterAlpha('K')">K</button>
                <button class="alpha-btn" onclick="filterAlpha('L')">L</button>
                <button class="alpha-btn" onclick="filterAlpha('M')">M</button>
                <button class="alpha-btn" onclick="filterAlpha('N')">N</button>
                <button class="alpha-btn" onclick="filterAlpha('O')">O</button>
                <button class="alpha-btn" onclick="filterAlpha('P')">P</button>
                <button class="alpha-btn" onclick="filterAlpha('Q')">Q</button>
                <button class="alpha-btn" onclick="filterAlpha('R')">R</button>
                <button class="alpha-btn" onclick="filterAlpha('S')">S</button>
                <button class="alpha-btn" onclick="filterAlpha('T')">T</button>
                <button class="alpha-btn" onclick="filterAlpha('U')">U</button>
                <button class="alpha-btn" onclick="filterAlpha('V')">V</button>
                <button class="alpha-btn" onclick="filterAlpha('W')">W</button>
                <button class="alpha-btn" onclick="filterAlpha('X')">X</button>
                <button class="alpha-btn" onclick="filterAlpha('Y')">Y</button>
                <button class="alpha-btn" onclick="filterAlpha('Z')">Z</button>
            </div>
        </div>
    </section>

    <!-- UNIFIED DIRECTORY GRID -->
    <div class="directory-wrapper">
        <h2 class="section-title" id="sectionTitle">All Campus Places & Facilities</h2>
        
        <div class="grid-container" id="directoryGrid">

            <!-- ================= ACADEMIC & ADMIN BUILDINGS ================= -->
            
            <!-- Block A -->
            <div class="card-item search-item" data-category="Academic Management" data-name="Block A" data-keywords="block a lecture halls rooms">
                <div class="card-img" style="background-image: url('block.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Block A</h3>
                        <p>Main lecture halls, tutorial rooms, and faculty offices for undergraduate programs.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Block A', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Block B -->
            <div class="card-item search-item" data-category="Academic Management" data-name="Block B" data-keywords="block b computer labs">
                <div class="card-img" style="background-image: url('block.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Block B</h3>
                        <p>Specialized computer laboratories, discussion rooms, and multimedia hardware setups.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Block B', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Block C -->
            <div class="card-item search-item" data-category="Academic" data-name="Block C" data-keywords="block c lecture theatres">
                <div class="card-img" style="background-image: url('block.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Block C</h3>
                        <p>Lecture theatres, administrative desks, and academic advisor consultation rooms.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Block C', 2, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Block D -->
            <div class="card-item search-item" data-category="Academic" data-name="Block D" data-keywords="block d department rooms classrooms">
                <div class="card-img" style="background-image: url('block.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Block D</h3>
                        <p>Advanced department rooms, seminar spaces, and student project discussions.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Block D', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Bangunan Pentadbiran -->
            <div class="card-item search-item" data-category="Academic Management" data-name="Bangunan Pentadbiran" data-keywords="bangunan pentadbiran administration rektor hep">
                <div class="card-img" style="background-image: url('admin.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Bangunan Pentadbiran</h3>
                        <p>Main campus management office, rector office, and student financial services counter.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 3 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Bangunan Pentadbiran', 3, 'admin.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Library (PTA) -->
            <div class="card-item search-item" data-category="Academic" data-name="Library (PTA)" data-keywords="library pta perpustakaan tengku anis">
                <div class="card-img" style="background-image: url('pta.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Library (PTA)</h3>
                        <p>Central campus library offering quiet reading zones, book collections, and e-learning hubs.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Library (PTA)', 2, 'pta.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Bengkel Besi -->
            <div class="card-item search-item" data-category="Academic" data-name="Bengkel Besi" data-keywords="bengkel besi technical workshop">
                <div class="card-img" style="background-image: url('kem.png');">
                    <span class="card-badge">Academic</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Bengkel Besi</h3>
                        <p>Technical and hands-on workshop facility equipped for practical engineering and vocational activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-screwdriver-wrench" style="color: #40082c;"></i> Ground Level</span>
                        <button class="btn-action" onclick="openWorkshopModal('Bengkel Besi', 'kem.png')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Pusat Islam -->
            <div class="card-item search-item" data-category="Academic Management Leisure" data-name="Pusat Islam" data-keywords="pusat islam mosque prayer hall religious cultural">
                <div class="card-img" style="background-image: url('pi.png');">
                    <span class="card-badge">Academic & Religious</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Pusat Islam</h3>
                        <p>Islamic center providing a serene environment for prayer, reflection, religious classes, and cultural activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-action" onclick="openBuildingModal('Pusat Islam', 2, 'pi.png')">View Rooms</button>
                    </div>
                </div>
            </div>


            <!-- ================= DINER & CAFES ================= -->

            <!-- Nasken Coffee -->
            <div class="card-item search-item" data-category="Diner" data-name="Nasken Coffee" data-keywords="nasken coffee cafe drinks chill">
                <div class="card-img" style="background-image: url('nasken.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Nasken Coffee</h3>
                        <p>Popular campus café offering specialty coffee, western food, and a relaxing study ambiance.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-mug-hot" style="color: #40082c;"></i> Cafe</span>
                        <a href="https://maps.app.goo.gl/xFZ3KbVgro858HGz5" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Block D Cafe / Diner -->
            <div class="card-item search-item" data-category="Diner" data-name="Block D Cafe" data-keywords="block d cafe food drinks">
                <div class="card-img" style="background-image: url('block_d_cafe.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Stalls at Block D</h3>
                        <p>Convenient snack and beverage spot located near Block D academic suites.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-utensils" style="color: #40082c;"></i> Cafe</span>
                        <a href="https://maps.app.goo.gl/fvCZiUB1WHgzhW9u7" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Cafe at Bangunan Pentadbiran -->
            <div class="card-item search-item" data-category="Diner" data-name="Cafe at Bangunan Pentadbiran" data-keywords="cafe bangunan pentadbiran admin food">
                <div class="card-img" style="background-image: url('admin_cafe.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Cafe at Bangunan Pentadbiran</h3>
                        <p>Accessible dining option near administrative offices and staff counters.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-utensils" style="color: #40082c;"></i> Diner</span>
                        <a href="https://maps.app.goo.gl/baugqnPyVKbZYxnj6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Foodcourt THO -->
            <div class="card-item search-item" data-category="Diner" data-name="Foodcourt THO" data-keywords="foodcourt tho tun hussein onn cafeteria makan">
                <div class="card-img" style="background-image: url('tho_foodcourt.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Foodcourt THO</h3>
                        <p>Tun Hussein Onn college food court serving local breakfast, lunch, and beverages.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-utensils" style="color: #40082c;"></i> Food Court</span>
                        <a href="https://maps.app.goo.gl/nZ8tJvJKVXNTfnWFA" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Stalls near Unit Sukan -->
            <div class="card-item search-item" data-category="Diner" data-name="Stalls near Unit Sukan" data-keywords="stalls unit sukan sports center food drinks">
                <div class="card-img" style="background-image: url('sukan_stalls.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Stalls near Unit Sukan</h3>
                        <p>Refreshing beverage and snack stalls situated right next to the campus sports complex.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-utensils" style="color: #40082c;"></i> Food Stalls</span>
                        <a href="https://maps.app.goo.gl/gdnEZ3zikaTqJAhz6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Dataran Masmed -->
            <div class="card-item search-item" data-category="Diner" data-name="Dataran Masmed" data-keywords="dataran masmed kiosks business incubator food">
                <div class="card-img" style="background-image: url('masmed.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dataran Masmed</h3>
                        <p>Student entrepreneurship hub and kiosk area offering various food and beverage choices.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-store" style="color: #40082c;"></i> Student Kiosks</span>
                        <a href="https://maps.app.goo.gl/z8nKudvRmZMcDnxf8" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Foodcourt TDM -->
            <div class="card-item search-item" data-category="Diner" data-name="Foodcourt TDM" data-keywords="foodcourt tdm kiosks business incubator food">
                <div class="card-img" style="background-image: url('foodcourt_tdm.png');">
                    <span class="card-badge">Diner & Cafe</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Foodcourt TDM</h3>
                        <p>Various food and beverage options available in the central food court.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-utensils" style="color: #40082c;"></i> Food Court</span>
                        <a href="https://maps.app.goo.gl/aqjADWQMEJBFNAca6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Student Centre (Main Building with 2-Level Modal) -->
            <div class="card-item search-item" data-category="Leisure Diner" data-name="Student Centre" data-keywords="student centre food court cafe gym theater music non-resident">
                <div class="card-img" style="background-image: url('student_centre.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Student Centre</h3>
                        <p>Multi-facility student hub housing food stalls, gymnasium, theater room, music room, and non-resident lounge.</p>
                    </div>
                    <div class="card-footer" style="display: flex; gap: 8px;">
                        <button class="btn-action" onclick="openBuildingModal('Student Centre', 2, 'student_centre.png')">View Rooms</button>
                        <a href="https://maps.google.com/?q=Student+Centre+UiTM+Machang" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>


            <!-- ================= LEISURE & SPORTS ================= -->

            <!-- 1. Dewan Badminton -->
            <div class="card-item search-item" data-category="Leisure" data-name="Dewan Badminton" data-keywords="dewan badminton badminton hall sports court">
                <div class="card-img" style="background-image: url('dewan_badminton.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dewan Badminton</h3>
                        <p>Dedicated indoor badminton courts for recreational play and campus tournaments.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-circle-nodes" style="color: #40082c;"></i> Sports Hall</span>
                        <a href="https://maps.app.goo.gl/HnHkc2AyzsWGgNui9" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 2. Kompleks Sukan A -->
            <div class="card-item search-item" data-category="Leisure" data-name="Kompleks Sukan A" data-keywords="kompleks sukan a sports complex field stadium">
                <div class="card-img" style="background-image: url('kompleks_sukan_a.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kompleks Sukan A</h3>
                        <p>Primary sports complex featuring fields, courts, and outdoor athletic facilities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-person-running" style="color: #40082c;"></i> Sports Complex</span>
                        <a href="https://maps.app.goo.gl/ebdQh3CyCLrZbwWY6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 3. Kompleks Sukan B -->
            <div class="card-item search-item" data-category="Leisure" data-name="Kompleks Sukan B" data-keywords="kompleks sukan b sports complex secondary">
                <div class="card-img" style="background-image: url('kompleks_sukan_b.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kompleks Sukan B</h3>
                        <p>Secondary sports complex accommodating various outdoor games and student physical activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-basketball" style="color: #40082c;"></i> Sports Complex</span>
                        <a href="https://maps.app.goo.gl/aGpaC24Z54MyDBr18" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 4. Unit Sukan -->
            <div class="card-item search-item" data-category="Leisure" data-name="Unit Sukan" data-keywords="unit sukan sports department office equipment">
                <div class="card-img" style="background-image: url('unit_sukan.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Unit Sukan</h3>
                        <p>Campus sports management office handling equipment borrowing and athletic programs.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-medal" style="color: #40082c;"></i> Office / Hub</span>
                        <a href="https://maps.app.goo.gl/h6w9cuqzLYjVSUUz7" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 5. Dewan Terbuka THO -->
            <div class="card-item search-item" data-category="Leisure" data-name="Dewan Terbuka THO" data-keywords="dewan terbuka tho tun hussein onn open hall">
                <div class="card-img" style="background-image: url('dewan_terbuka_tho.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dewan Terbuka THO</h3>
                        <p>Tun Hussein Onn open-air multipurpose hall used for student gatherings and sports.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Open Hall</span>
                        <a href="https://maps.app.goo.gl/thVLHEVScsUxZvaE9" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 6. Dewan Tertutup THO -->
            <div class="card-item search-item" data-category="Leisure" data-name="Dewan Tertutup THO" data-keywords="dewan tertutup tho tun hussein onn indoor hall">
                <div class="card-img" style="background-image: url('dewan_tertutup_tho.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dewan Tertutup THO</h3>
                        <p>Tun Hussein Onn indoor hall equipped for events, meetings, and indoor recreational activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-chimney" style="color: #40082c;"></i> Indoor Hall</span>
                        <a href="https://maps.app.goo.gl/1zEYMQUvCPiWrbtt79" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 7. Dewan Tertutup DO -->
            <div class="card-item search-item" data-category="Leisure" data-name="Dewan Tertutup DO" data-keywords="dewan tertutup do tun hussein onn indoor hall">
                <div class="card-img" style="background-image: url('dewan_tertutup_do.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dewan Tertutup DO</h3>
                        <p>Tun Hussein Onn indoor hall equipped for events, meetings, and indoor recreational activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-chimney" style="color: #40082c;"></i> Indoor Hall</span>
                        <a href="https://maps.app.goo.gl/DEgs67q6eyDmhxum7" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 8. Kem Wawasan -->
            <div class="card-item search-item" data-category="Leisure" data-name="Kem Wawasan" data-keywords="kem wawasan tun hussein onn indoor hall">
                <div class="card-img" style="background-image: url('kem_wawasan.png');">
                    <span class="card-badge">Leisure & Sports</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kem Wawasan</h3>
                        <p>Kem Wawasan is a modern outdoor sports facility designed for various recreational and sporting activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-chimney" style="color: #40082c;"></i> Outdoor Facility</span>
                        <a href="https://maps.app.goo.gl/uMcJA4JT3UCvVLB1A" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- ================= MANAGEMENT & CAMPUS SERVICES ================= -->

            <!-- 1. Bahagian Pengurusan Fasiliti -->
            <div class="card-item search-item" data-category="Management" data-name="Bahagian Pengurusan Fasiliti" data-keywords="bahagian pengurusan fasiliti facility management maintenance office">
                <div class="card-img" style="background-image: url('fasiliti.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Bahagian Pengurusan Fasiliti</h3>
                        <p>Campus facility management office responsible for building maintenance, repairs, and infrastructure upkeep.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-shield" style="color: #40082c;"></i> Maintenance</span>
                        <a href="https://maps.app.goo.gl/V3XY1KfHYJA1wNpcA" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 2. Unit Psikologi dan Kaunseling -->
            <div class="card-item search-item" data-category="Management" data-name="Unit Psikologi dan Kaunseling" data-keywords="unit psikologi dan kaunseling counseling psychological support student welfare">
                <div class="card-img" style="background-image: url('kaunseling.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Unit Psikologi dan Kaunseling</h3>
                        <p>Counseling and psychological support unit providing guidance, mental health counseling, and student welfare services.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-hand-holding-heart" style="color: #40082c;"></i> Support Services</span>
                        <a href="https://maps.app.goo.gl/oNAooxCXbVn1TSTx8" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 3. Pejabat Polis Bantuan -->
            <div class="card-item search-item" data-category="Management" data-name="Pejabat Polis Bantuan" data-keywords="pejabat polis police station auxiliary security campus">
                <div class="card-img" style="background-image: url('polis.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Pejabat Polis Bantuan</h3>
                        <p>Campus auxiliary police and security office ensuring safety, traffic regulation, and emergency response across the university.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-shield-halved" style="color: #40082c;"></i> Campus Security</span>
                        <a href="https://maps.app.goo.gl/zvQtBxaK1aopTWHo9" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 4. Unit Residensi & Hospitaliti Pelajar -->
            <div class="card-item search-item" data-category="Management" data-name="Unit Residensi & Hospitaliti Pelajar" data-keywords="unit residensi hospitaliti pelajar college hostel accommodation residential">
                <div class="card-img" style="background-image: url('residensi.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Unit Residensi & Hospitaliti Pelajar</h3>
                        <p>Student residential and hospitality unit handling college accommodations, room placements, and hostel facilities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-user" style="color: #40082c;"></i> Accommodation</span>
                        <a href="https://maps.app.goo.gl/2cr6ShBLwdS8sETN7" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 5. Unit Kesihatan -->
            <div class="card-item search-item" data-category="Management" data-name="Unit Kesihatan" data-keywords="unit kesihatan health clinic medical center doctor">
                <div class="card-img" style="background-image: url('kesihatan.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Unit Kesihatan</h3>
                        <p>Campus health center providing outpatient medical checkups, treatments, and emergency health services for students and staff.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-medical" style="color: #40082c;"></i> Medical Clinic</span>
                        <a href="https://maps.app.goo.gl/W6asMpFsNWpYq5qo6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 6. Unit Pengurusan Non Resident -->
            <div class="card-item search-item" data-category="Management" data-name="Unit Pengurusan Non Resident" data-keywords="unit pengurusan non resident NR management office off-campus">
                <div class="card-img" style="background-image: url('non_resident_mgmt.png');">
                    <span class="card-badge">Management</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Unit Pengurusan Non Resident</h3>
                        <p>Non-resident student management unit overseeing off-campus student welfare, registry, and community activities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-laptop" style="color: #40082c;"></i> NR Management</span>
                        <a href="https://maps.app.goo.gl/EADwvKDuorXdq4r7A" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- ================= ACCOMMODATION & RESIDENTIAL ================= -->

            <!-- 1. Kolej Tun Dr Mahathir (TDM) -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Kolej Tun Dr Mahathir (TDM)" data-keywords="kolej tun dr mahathir tdm hostel college residential">
                <div class="card-img" style="background-image: url('tdm.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kolej Tun Dr Mahathir (TDM)</h3>
                        <p>Student residential college providing accommodation rooms and student activity spaces.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Residential College</span>
                        <a href="https://maps.app.goo.gl/eUEs5KFnxJeXC4yS8" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 2. Kolej Dato Onn (DO) -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Kolej Dato Onn (DO)" data-keywords="kolej dato onn do hostel college residential">
                <div class="card-img" style="background-image: url('do.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kolej Dato Onn (DO)</h3>
                        <p>Comfortable student residential college complex equipped with daily amenities and a conducive environment.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Residential College</span>
                        <a href="https://maps.app.goo.gl/KjLhMDG6138xMGGf9" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 3. Kolej Tun Hussein Onn (THO) -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Kolej Tun Hussein Onn (THO)" data-keywords="kolej tun hussein onn tho hostel college residential">
                <div class="card-img" style="background-image: url('tho.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kolej Tun Hussein Onn (THO)</h3>
                        <p>Student residential college located near the open hall and college food court for daily student convenience.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Residential College</span>
                        <a href="https://maps.app.goo.gl/v96SLjVpqQaiL1g27" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 4. Kolej Tun Abdul Razak (TR) -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Kolej Tun Abdul Razak (TR)" data-keywords="kolej tun abdul razak tr hostel college residential">
                <div class="card-img" style="background-image: url('tr.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kolej Tun Abdul Razak (TR)</h3>
                        <p>Student residential college area featuring room blocks and community facilities.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Residential College</span>
                        <a href="https://maps.app.goo.gl/YySJaCHXd7wSaXD38" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 5. Kolej Tunku Abdul Rahman (TAR) -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Kolej Tunku Abdul Rahman (TAR)" data-keywords="kolej tunku abdul rahman tar hostel college residential">
                <div class="card-img" style="background-image: url('tar.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Kolej Tunku Abdul Rahman (TAR)</h3>
                        <p>Student residential college housing the campus community with easy access to academic zones.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building-columns" style="color: #40082c;"></i> Residential College</span>
                        <a href="https://maps.app.goo.gl/yiQECUQVAT2ebRT56" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 6. Rumah Universiti -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Rumah Universiti" data-keywords="rumah universiti guest house accommodation lodge">
                <div class="card-img" style="background-image: url('rumah_universiti.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Rumah Universiti</h3>
                        <p>Official university guest house/lodge for VIP guests, visiting lecturers, and official campus visitors.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house" style="color: #40082c;"></i> Guest House</span>
                        <a href="https://maps.app.goo.gl/BHarwEHPjh3fXEs9A" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- 7. Rumah Staff -->
            <div class="card-item search-item" data-category="Accommodation" data-name="Rumah Staff" data-keywords="rumah staff quarters kuarters staf housing">
                <div class="card-img" style="background-image: url('rumah_staff.png');">
                    <span class="card-badge">Accommodation</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Rumah Staff</h3>
                        <p>Official quarters and housing area for university administrative and academic staff.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-house-chimney-user" style="color: #40082c;"></i> Staff Quarters</span>
                        <a href="https://maps.app.goo.gl/dWaCan38neuuXTTw6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>

            <!-- Dewan Professional -->
            <div class="card-item search-item" data-category="Academic Leisure Accommodation" data-name="Dewan Professional" data-keywords="dewan professional conference hall">
                <div class="card-img" style="background-image: url('dewan_professional.png');">
                    <span class="card-badge">Event Space</span>
                </div>
                <div class="card-info">
                    <div>
                        <h3>Dewan Professional</h3>
                        <p>Conference hall and equipment for professional use and official events.</p>
                    </div>
                    <div class="card-footer">
                        <span class="card-meta"><i class="fa-solid fa-building" style="color: #40082c;"></i> Event Space</span>
                        <a href="https://maps.app.goo.gl/w72QbPP6ALDNYkoY6" target="_blank" class="btn-action btn-map"><i class="fa-solid fa-location-dot"></i> Maps</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- DYNAMIC BUILDING MODAL -->
    <div class="modal-overlay" id="buildingModal">
        <div class="modal-container">
            <div class="modal-header">
                <h2 id="modalBuildingName">Building Name</h2>
                <button class="modal-close" onclick="closeBuildingModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div id="levelSelectView">
                    <p class="modal-step-title">Please select a level to view layout:</p>
                    <div class="level-grid" id="levelButtonsContainer"></div>
                </div>

                <div class="layout-view" id="layoutView">
                    <button class="back-levels-btn" onclick="backToLevels()"><i class="fa-solid fa-arrow-left"></i> Back to Levels</button>
                    <p class="modal-step-title" id="layoutTitle">Level Layout & Facilities</p>
                    
                    <div class="classroom-list" id="classroomListContainer"></div>

                    <p class="modal-step-title" id="previewLabel" style="margin-top: 1.5rem;">Floor Plan Layout Preview:</p>
                    <div class="building-map-preview" id="mapPreviewBox">Building Floor Plan / Photo</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dynamic Footer Inclusion -->
    <?php include 'footer.php'; ?>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        const buildingData = {
            "Block A": {
                defaultImg: "block.png",
                levels: {
                    1: { rooms: [{ name: "Unit Audiovisual", type: "Facility" }, 
                                 { name: "HRD A", type: "Office" }, 
                                 { name: "BA-103 (Lecture Hall)", type: "Capacity: 60" }, 
                                 { name: "BA-104 (Staff Office)", type: "Admin" }], layoutImg: "block-a-lvl1.png" },

                    2: { rooms: [{ name: "A201 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A202 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A203 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A204 (Classroom)", type: "Capacity: 30" }], layoutImg: "block-a-lvl2.png" },

                    3: { rooms: [{ name: "A301 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A302 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A303 (Classroom)", type: "Capacity: 30" }, 
                                 { name: "A304 (Classroom)", type: "Capacity: 30" }], layoutImg: "block-a-lvl3.png" },
                                 
                    4: { rooms: [{ name: "A401 (Classroom)", type: "Capacity: 30" }, { name: "A402 (Classroom)", type: "Capacity: 30" }, { name: "A403 (Classroom)", type: "Capacity: 30" }, { name: "A404 (Classroom)", type: "Capacity: 30" }], layoutImg: "block-a-lvl4.png" }
                }
            },
            "Block B": {
                defaultImg: "block.png",
                levels: {
                    1: { rooms: [{ name: "HRD B", type: "Seminar Room" }, { name: "Bilik Proses Kad Pelajar", type: "Management" }], layoutImg: "block-b-lvl1.png" },
                    2: { rooms: [{ name: "B201 (Makmal Komputer)", type: "Capacity: 35" }, { name: "B202 (Server Room)", type: "Restricted" }], layoutImg: "block-b-lvl2.png" },
                    3: { rooms: [{ name: "B301 (Networking Lab)", type: "Capacity: 30" }, { name: "B302 (Project Room)", type: "Capacity: 25" }], layoutImg: "block-b-lvl3.png" },
                    4: { rooms: [{ name: "BB-401 (Research Center)", type: "Staff Only" }], layoutImg: "block-b-lvl4.png" }
                }
            },
            "Block C": {
                defaultImg: "block.png",
                levels: {
                    1: { rooms: [{ name: "BC-101 (Lecture Theatre)", type: "Capacity: 100" }, { name: "BC-102 (Consultation Room)", type: "Staff" }], layoutImg: "block-c-lvl1.png" },
                    2: { rooms: [{ name: "BC-201 (Staff Offices)", type: "Faculty" }, { name: "BC-202 (Meeting Hall)", type: "Capacity: 50" }], layoutImg: "block-c-lvl2.png" }
                }
            },
            "Block D": {
                defaultImg: "block.png",
                levels: {
                    1: { rooms: [{ name: "D101KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D102KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D103KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D104KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D105KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D106KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D107KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D108KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D109KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D110KL (Classroom)", type: "Capacity: 30" }], layoutImg: "block-d-lvl1.png" },

                    2: { rooms: [{ name: "D201KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D202KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D203KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D204KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D205KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D206BP (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D207BP (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D208BP (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D209KL (Classroom)", type: "Capacity: 30" }, 
                                 { name: "D210KL (Classroom)", type: "Capacity: 30" }], layoutImg: "block-d-lvl2.png" },

                    3: { rooms: [{ name: "AUD 100 (Auditorium)", type: "Capacity: 100" }, 
                                 { name: "AUD 200 (Auditorium)", type: "Capacity: 200" }, 
                                 { name: "Bilik Mesyuarat Perdana", type: "Meeting Room" }, 
                                 { name: "D301 BP - D361 BP", type: "Lecturer's Room" }], layoutImg: "block-d-lvl3.png" },

                    4: { rooms: [{ name: "D401 BP - D452 BP", type: "Lecturer's Room" }, 
                                 { name: "D401MK (Classroom)", type: "Capacity: 30" }], layoutImg: "block-d-lvl4.png" }
                }
            },
            "Bangunan Pentadbiran": {
                defaultImg: "admin.png",
                levels: {
                    1: { rooms: [{ name: "Bahagian Penyelidikan, Jaringan Industri & Alumni", type: "PJIA" }, 
                                 { name: "Bahagian Hal Ehwal Pelajar (HEP)", type: "Student Affairs" }, 
                                 { name: "Galeri UiTM", type: "Exhibition" }, 
                                 { name: "Unit Peperiksaan", type: "Examination" },
                                 { name: "Premier Lounge", type: "Diner" }], layoutImg: "admin-lvl1.png" },

                    2: { rooms: [{ name: "Bahagian Hal Ehwal Akademik (HEA)", type: "Academic Affairs" }, 
                                 { name: "Bahagian Korporat", type: "Corporate" }, 
                                 { name: "Bahagian Pentadbiran", type: "Administration" }, 
                                 { name: "Bilik Mesyuarat Professional", type: "Meeting Room" }, 
                                 { name: "Pejabat Rektor", type: "Rector's Office" }], layoutImg: "admin-lvl2.png" },

                    3: { rooms: [{ name: "Bahagian Kewangan", type: "Finance" }, 
                                 { name: "P301 BP", type: "Lecturer's Office" }, 
                                 { name: "P301", type: "Classroom" }], layoutImg: "admin-lvl3.png" }
                }
            },
            "Library (PTA)": {
                defaultImg: "pta.png",
                levels: {
                    1: { rooms: [{ name: "Main Circulation Desk", type: "Service" }, 
                                 { name: "Book Stacks & Reading Area", type: "Quiet Zone" }], layoutImg: "library-lvl1.png" },
                    2: { rooms: [{ name: "Discussion Rooms 1-6", type: "Group Study" }], layoutImg: "library-lvl2.png" }
                }
            },
            "Pusat Islam": {
                defaultImg: "pi.png",
                levels: {
                    1: { rooms: [{ name: "Dewan Solat Utama", type: "Prayer Hall" }], layoutImg: "pi-lvl1.png" },
                    2: { rooms: [{ name: "Bilik Kuliah Agama", type: "Classroom" }], layoutImg: "pi-lvl2.png" }
                }
            },
            "Student Centre": {
                defaultImg: "student_centre.png",
                levels: {
                    1: { 
                        rooms: [
                            { name: "Food Stalls & Dining Area", type: "Diner", img: "student_centre.png" }, 
                            { name: "Bilik Non-Resident", type: "Lounge", img: "non_resident.png" }, 
                            { name: "Bilik Mesyuarat MPP", type: "Meeting", img: "meeting-mpp_room.png" },
                            { name: "Bilik Majlis Perwakilan Pelajar", type: "Lounge", img: "bilik-mpp.png" },
                            { name: "Parcel Hub", type: "Parcel Hub", img: "parcel_hub.png" },
                            { name: "ATM Machine", type: "ATM", img: "atm_machine.png" },
                            { name: "FoodBank UiTMCK", type: "Diner", img: "foodbank.png" }
                        ], 
                        layoutImg: "student_centre_lvl1.png" 
                    },
                    2: { 
                        rooms: [
                            { name: "Gymnasium", type: "Fitness", img: "gym.png" }, 
                            { name: "Bilik Theater", type: "Auditorium", img: "theater.png" },
                            { name: "Bilik Musik", type: "Music Room", img: "music_room.png" },
                            { name: "Studio MPP", type: "Studio", img: "studio-mpp.png" }
                        ], 
                        layoutImg: "student_centre_lvl2.png" 
                    }
                }
            }
        };

        const modal = document.getElementById('buildingModal');
        const modalTitle = document.getElementById('modalBuildingName');
        const levelSelectView = document.getElementById('levelSelectView');
        const layoutView = document.getElementById('layoutView');
        const levelContainer = document.getElementById('levelButtonsContainer');
        const classroomListContainer = document.getElementById('classroomListContainer');
        const layoutTitle = document.getElementById('layoutTitle');
        const mapPreviewBox = document.getElementById('mapPreviewBox');

        let currentBuilding = '';
        let activeCategory = 'ALL';
        let activeLetter = 'ALL';

        function openBuildingModal(buildingName, totalLevels, bgImage) {
            currentBuilding = buildingName;
            modalTitle.innerText = buildingName;
            levelSelectView.style.display = 'block';
            layoutView.classList.remove('active');
            
            levelContainer.innerHTML = '';
            for (let i = 1; i <= totalLevels; i++) {
                let btn = document.createElement('button');
                btn.className = 'level-btn';
                btn.innerHTML = `<span><i class="fa-solid fa-building" style="margin-right: 10px; color:#40082c;"></i> Level ${i}</span> <i class="fa-solid fa-chevron-right"></i>`;
                btn.onclick = () => selectLevel(i);
                levelContainer.appendChild(btn);
            }
            modal.classList.add('active');
        }

        function openWorkshopModal(buildingName, bgImage) {
            currentBuilding = buildingName;
            modalTitle.innerText = buildingName;
            levelSelectView.style.display = 'none';
            layoutView.classList.add('active');
            layoutTitle.innerText = buildingName + " - Workshop Overview & Facilities";
            classroomListContainer.innerHTML = `<div class="room-item">Main Welding Area <span class="badge">Zone 1</span></div><div class="room-item">Machining & Lathe Room <span class="badge">Zone 2</span></div>`;
            mapPreviewBox.style.backgroundImage = `url('${bgImage}')`;
            mapPreviewBox.innerText = "";
            modal.classList.add('active');
        }

        function selectLevel(levelNum) {
            levelSelectView.style.display = 'none';
            layoutView.classList.add('active');
            layoutTitle.innerText = `${currentBuilding} - Level ${levelNum} Facilities`;

            let buildingInfo = buildingData[currentBuilding];
            let levelInfo = buildingInfo ? buildingInfo.levels[levelNum] : null;
            let previewLabel = document.getElementById('previewLabel');

            // Dynamically change label for Student Centre
            if (currentBuilding === "Student Centre") {
                if (previewLabel) previewLabel.innerText = "Facility Photo Preview:";
            } else {
                if (previewLabel) previewLabel.innerText = "Floor Plan Layout Preview:";
            }

            if (levelInfo && levelInfo.rooms) {
                let htmlContent = '';
                levelInfo.rooms.forEach((room, index) => {
                    if (currentBuilding === "Student Centre") {
                        // Make rooms clickable for Student Centre
                        htmlContent += `<div class="room-item clickable-room ${index === 0 ? 'active-room' : ''}" onclick="showRoomImage('${room.img}', this)">
                            <span><i class="fa-solid fa-image" style="color: #40082c; margin-right: 6px;"></i> ${room.name}</span>
                            <span class="badge">${room.type || 'Facility'}</span>
                        </div>`;
                    } else {
                        // Standard view for Academic buildings
                        htmlContent += `<div class="room-item">${room.name} <span class="badge">${room.type || 'Facility'}</span></div>`;
                    }
                });
                classroomListContainer.innerHTML = htmlContent;

                // Set default image to first room image if Student Centre, otherwise standard layout image
                let initialImg = (currentBuilding === "Student Centre" && levelInfo.rooms[0] && levelInfo.rooms[0].img) 
                    ? levelInfo.rooms[0].img 
                    : levelInfo.layoutImg;

                mapPreviewBox.style.backgroundImage = `url('${initialImg}')`;
            } else {
                classroomListContainer.innerHTML = `<div class="room-item">No specific rooms listed yet. <span class="badge">Standard Floor</span></div>`;
                mapPreviewBox.style.backgroundImage = `url('${buildingInfo ? buildingInfo.defaultImg : 'block.png'}')`;
            }
            mapPreviewBox.innerText = "";
        }

        // Handles room selection click to update image preview
        function showRoomImage(imgSrc, element) {
            mapPreviewBox.style.backgroundImage = `url('${imgSrc}')`;
            
            // Highlight active room item
            let allRooms = document.querySelectorAll('.clickable-room');
            allRooms.forEach(room => room.classList.remove('active-room'));
            if (element) element.classList.add('active-room');
        }

        function backToLevels() {
            layoutView.classList.remove('active');
            levelSelectView.style.display = 'block';
        }

        function closeBuildingModal() {
            modal.classList.remove('active');
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeBuildingModal();
        });

        function normalizeSearch(term) {
            return term.toLowerCase()
                       .replace(/\bmeeting\b/g, 'mesyuarat')
                       .replace(/\boffice\b/g, 'pejabat')
                       .trim();
        }

        function toggleClearBtn() {
            let inputVal = document.getElementById('globalSearchInput').value;
            let clearBtn = document.getElementById('clearSearchBtn');
            clearBtn.style.display = inputVal.trim() !== "" ? "flex" : "none";
            applyFilters();
        }

        function handleSearchKey(event) {
            toggleClearBtn();
            if (event.key === 'Enter') {
                event.preventDefault();
                executeSearch();
            }
        }

        function clearSearch() {
            let inputField = document.getElementById('globalSearchInput');
            inputField.value = "";
            document.getElementById('clearSearchBtn').style.display = "none";
            
            activeCategory = 'ALL';
            activeLetter = 'ALL';
            
            applyFilters();
            inputField.focus();
        }

        function filterCategory(category) {
            activeCategory = category;
            let buttons = document.getElementsByClassName('cat-filter-btn');
            for (let btn of buttons) {
                btn.classList.remove('active');
                if (btn.innerText.includes(category) || (category === 'ALL' && btn.innerText === 'All Categories')) {
                    btn.classList.add('active');
                }
            }
            applyFilters();
        }

        function filterAlpha(letter) {
            activeLetter = letter;
            let buttons = document.getElementsByClassName('alpha-btn');
            for (let btn of buttons) {
                btn.classList.remove('active');
                if (btn.innerText === letter) {
                    btn.classList.add('active');
                }
            }
            applyFilters();
        }

        function applyFilters() {
            let rawInput = document.getElementById('globalSearchInput').value;
            let input = normalizeSearch(rawInput);
            let items = document.getElementsByClassName('search-item');
            let sectionTitle = document.getElementById('sectionTitle');

            if (input.trim() !== "" || activeCategory !== 'ALL' || activeLetter !== 'ALL') {
                sectionTitle.innerText = "Search Results";
            } else {
                sectionTitle.innerText = "All Campus Places & Facilities";
            }

            for (let i = 0; i < items.length; i++) {
                let item = items[i];
                let name = item.getAttribute('data-name').toLowerCase();
                let categoryAttr = item.getAttribute('data-category') || "";
                let itemCategories = categoryAttr.split(" "); // Splits multi-categories into an array
                let keywords = item.getAttribute('data-keywords') || "";
                let desc = item.querySelector('p').innerText.toLowerCase();

                let matchesSearch = name.includes(input) || keywords.includes(input) || desc.includes(input) || input === "";

                if (!matchesSearch && buildingData[item.getAttribute('data-name')]) {
                    let bData = buildingData[item.getAttribute('data-name')];
                    for (let lvl in bData.levels) {
                        for (let room of bData.levels[lvl].rooms) {
                            let roomNameNorm = normalizeSearch(room.name);
                            let roomTypeNorm = normalizeSearch(room.type || "");
                            if (roomNameNorm.includes(input) || roomTypeNorm.includes(input)) {
                                matchesSearch = true;
                                break;
                            }
                        }
                        if (matchesSearch) break;
                    }
                }

                // Check if activeCategory matches ANY of the item's categories
                let matchesCategory = (activeCategory === 'ALL' || itemCategories.includes(activeCategory));
                let matchesAlpha = (activeLetter === 'ALL' || name.startsWith(activeLetter.toLowerCase()));

                if (matchesSearch && matchesCategory && matchesAlpha) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            }
        }

        function executeSearch() {
            let rawInput = document.getElementById('globalSearchInput').value;
            let input = normalizeSearch(rawInput);
            if (input === "") return;

            applyFilters();

            for (let bName in buildingData) {
                let bData = buildingData[bName];
                for (let lvl in bData.levels) {
                    for (let room of bData.levels[lvl].rooms) {
                        let roomNameNorm = normalizeSearch(room.name);
                        let roomTypeNorm = normalizeSearch(room.type || "");
                        if (roomNameNorm.includes(input) || roomTypeNorm.includes(input)) {
                            let totalLevels = Object.keys(bData.levels).length;
                            openBuildingModal(bName, totalLevels, bData.defaultImg);
                            selectLevel(lvl);
                            return;
                        }
                    }
                }
                if (bName.toLowerCase().includes(input)) {
                    let totalLevels = Object.keys(bData.levels).length;
                    openBuildingModal(bName, totalLevels, bData.defaultImg);
                    return;
                }
            }
        }
    </script>
</body>
</html>