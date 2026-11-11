<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Directory - Campus App UiTMCK</title>
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
            padding: 140px 2rem 40px 2rem;
            text-align: center;
            background: linear-gradient(130deg, #40082c 0%, #78c0d1 100%);
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

        /* --- SEARCH & A-Z FILTER SECTION --- */
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

        .search-box {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
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

        /* --- BUILDINGS & CLASSROOMS GRID --- */
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

        .buildings-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .building-card {
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #f1f5f9;
            display: flex;
            flex-direction: column;
        }

        .building-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .building-img {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .building-badge {
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

        .building-info {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }

        .building-info h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .building-info p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .building-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .room-count {
            font-size: 0.85rem;
            color: #475569;
            font-weight: 500;
        }

        .btn-view {
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

        .btn-view:hover {
            background-color: #40082c;
            color: #ffffff;
        }

        /* --- MODAL POPUP STYLES --- */
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

        /* Level Grid Selectors */
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

        .level-btn i {
            color: #cbd5e1;
            transition: color 0.2s;
        }

        .level-btn:hover i {
            color: #40082c;
        }

        /* Classroom Layout View */
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

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .buildings-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .buildings-grid {
                grid-template-columns: 1fr;
            }
            .search-box {
                flex-direction: column;
            }
            .level-grid, .classroom-list {
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
        <h1>Academic Directory</h1>
        <p>Quickly search for classrooms, lecture halls, and explore academic buildings across UiTM Machang.</p>
    </header>

    <!-- REUSABLE SEARCH & A-Z FILTER SECTION -->
    <?php include 'search-bar.php'; ?>

    <!-- ACADEMIC BUILDINGS CARDS SECTION -->
    <div class="directory-wrapper">
        <h2 class="section-title">Academic Buildings & Facilities</h2>
        
        <div class="buildings-grid" id="buildingsGrid">

            <!-- Card 1: Block A -->
            <div class="building-card" data-name="Block A">
                <div class="building-img" style="background-image: url('block.png');">
                    <span class="building-badge">4 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Block A</h3>
                        <p>Main lecture halls, tutorial rooms, and faculty offices for undergraduate programs.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Block A', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 2: Block B -->
            <div class="building-card" data-name="Block B">
                <div class="building-img" style="background-image: url('block.png');">
                    <span class="building-badge">4 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Block B</h3>
                        <p>Specialized computer laboratories, discussion rooms, and multimedia hardware setups.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Block B', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 3: Block C -->
            <div class="building-card" data-name="Block C">
                <div class="building-img" style="background-image: url('block.png');">
                    <span class="building-badge">2 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Block C</h3>
                        <p>Lecture theatres, administrative desks, and academic advisor consultation rooms.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Block C', 2, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 4: Block D -->
            <div class="building-card" data-name="Block D">
                <div class="building-img" style="background-image: url('block.png');">
                    <span class="building-badge">4 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Block D</h3>
                        <p>Advanced department rooms, seminar spaces, and student project discussions.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 4 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Block D', 4, 'block.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 5: Bangunan Pentadbiran -->
            <div class="building-card" data-name="Bangunan Pentadbiran">
                <div class="building-img" style="background-image: url('admin.png');">
                    <span class="building-badge">3 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Bangunan Pentadbiran</h3>
                        <p>Main campus management office, rector office, and student financial services counter.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 3 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Bangunan Pentadbiran', 3, 'admin.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 6: Library (PTA) -->
            <div class="building-card" data-name="Library (PTA)">
                <div class="building-img" style="background-image: url('pta.png');">
                    <span class="building-badge">2 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Library (PTA)</h3>
                        <p>Central campus library offering quiet reading zones, book collections, and e-learning hubs.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Library (PTA)', 2, 'pta.png')">View Rooms</button>
                    </div>
                </div>
            </div>

            <!-- Card 7: Bengkel Besi -->
            <div class="building-card" data-name="Bengkel Besi">
                <div class="building-img" style="background-image: url('kem.png');">
                    <span class="building-badge">Workshop</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Bengkel Besi</h3>
                        <p>Technical and hands-on workshop facility equipped for practical engineering and vocational activities.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-screwdriver-wrench" style="color: #40082c;"></i> Ground Level</span>
                        <button class="btn-view" onclick="openWorkshopModal('Bengkel Besi', 'kem.png')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Card 8: Pusat Islam -->
            <div class="building-card" data-name="Pusat Islam">
                <div class="building-img" style="background-image: url('pi.png');">
                    <span class="building-badge">2 Levels</span>
                </div>
                <div class="building-info">
                    <div>
                        <h3>Pusat Islam</h3>
                        <p>Islamic center providing a serene environment for prayer, reflection, and cultural activities.</p>
                    </div>
                    <div class="building-footer">
                        <span class="room-count"><i class="fa-solid fa-layer-group" style="color: #40082c;"></i> 2 Floors</span>
                        <button class="btn-view" onclick="openBuildingModal('Pusat Islam', 2, 'pi.png')">View Rooms</button>
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
                <!-- Step 1: Level Selection -->
                <div id="levelSelectView">
                    <p class="modal-step-title">Please select a level to view classroom layouts:</p>
                    <div class="level-grid" id="levelButtonsContainer">
                        <!-- Dynamically populated -->
                    </div>
                </div>

                <!-- Step 2: Classroom & Layout View -->
                <div class="layout-view" id="layoutView">
                    <button class="back-levels-btn" onclick="backToLevels()"><i class="fa-solid fa-arrow-left"></i> Back to Levels</button>
                    <p class="modal-step-title" id="layoutTitle">Level Layout & Classrooms</p>
                    
                    <div class="classroom-list" id="classroomListContainer">
                        <!-- Dynamically populated classrooms -->
                    </div>

                    <p class="modal-step-title" style="margin-top: 1.5rem;">Floor Plan Layout Preview:</p>
                    <div class="building-map-preview" id="mapPreviewBox">
                        Building Floor Plan / Photo
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dynamic Footer Inclusion -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript for Search, Filter, and Modal interactions -->
    <script>
        // --- CUSTOM BUILDING & LEVEL DATABASE ---
        const buildingData = {
            "Block A": {
                defaultImg: "block.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "Unit Audiovisual", type: "Facility" },
                            { name: "HRD A", type: "Office" },
                            { name: "BA-103 (Lecture Hall)", type: "Capacity: 60" },
                            { name: "BA-104 (Staff Office)", type: "Admin" }
                        ],
                        layoutImg: "block-a-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "A201 (Classroom)", type: "Capacity: 30" },
                            { name: "A202 (Classroom)", type: "Capacity: 30" },
                            { name: "A203 (Classroom)", type: "Capacity: 30" },
                            { name: "A204 (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-a-lvl2.png"
                    },
                    3: {
                        rooms: [
                            { name: "A301 (Classroom)", type: "Capacity: 30" },
                            { name: "A302 (Classroom)", type: "Capacity: 30" },
                            { name: "A303 (Classroom)", type: "Capacity: 30" },
                            { name: "A304 (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-a-lvl3.png"
                    },
                    4: {
                        rooms: [
                            { name: "A401 (Classroom)", type: "Capacity: 30" },
                            { name: "A402 (Classroom)", type: "Capacity: 30" },
                            { name: "A403 (Classroom)", type: "Capacity: 30" },
                            { name: "A404 (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-a-lvl4.png"
                    }
                }
            },
            "Block B": {
                defaultImg: "block.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "HRD B", type: "Seminar Room" },
                            { name: "Bilik Proses Kad Pelajar", type: "Management" }
                        ],
                        layoutImg: "block-b-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "B201 (Makmal Komputer)", type: "Capacity: 35" },
                            { name: "B202 (Server Room)", type: "Restricted" }
                        ],
                        layoutImg: "block-b-lvl2.png"
                    },
                    3: {
                        rooms: [
                            { name: "B301 (Networking Lab)", type: "Capacity: 30" },
                            { name: "B302 (Project Room)", type: "Capacity: 25" }
                        ],
                        layoutImg: "block-b-lvl3.png"
                    },
                    4: {
                        rooms: [
                            { name: "BB-401 (Research Center)", type: "Staff Only" }
                        ],
                        layoutImg: "block-b-lvl4.png"
                    }
                }
            },
            "Block C": {
                defaultImg: "block.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "BC-101 (Lecture Theatre)", type: "Capacity: 100" },
                            { name: "BC-102 (Consultation Room)", type: "Staff" }
                        ],
                        layoutImg: "block-c-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "BC-201 (Staff Offices)", type: "Faculty" },
                            { name: "BC-202 (Meeting Hall)", type: "Capacity: 50" }
                        ],
                        layoutImg: "block-c-lvl2.png"
                    }
                }
            },
            "Block D": {
                defaultImg: "block.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "D101KL (Classroom)", type: "Capacity: 30" },
                            { name: "D102KL (Classroom)", type: "Capacity: 30" },
                            { name: "D103KL (Classroom)", type: "Capacity: 30" },
                            { name: "D104KL (Classroom)", type: "Capacity: 30" },
                            { name: "D105KL (Classroom)", type: "Capacity: 30" },
                            { name: "D106KL (Classroom)", type: "Capacity: 30" },
                            { name: "D107KL (Classroom)", type: "Capacity: 30" },
                            { name: "D108KL (Classroom)", type: "Capacity: 30" },
                            { name: "D109KL (Classroom)", type: "Capacity: 30" },
                            { name: "D110KL (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-d-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "D201KL (Classroom)", type: "Capacity: 30" },
                            { name: "D202KL (Classroom)", type: "Capacity: 30" },
                            { name: "D203KL (Classroom)", type: "Capacity: 30" },
                            { name: "D204KL (Classroom)", type: "Capacity: 30" },
                            { name: "D205KL (Classroom)", type: "Capacity: 30" },
                            { name: "D206BP (Classroom)", type: "Capacity: 30" },
                            { name: "D207BP (Classroom)", type: "Capacity: 30" },
                            { name: "D208BP (Classroom)", type: "Capacity: 30" },
                            { name: "D209KL (Classroom)", type: "Capacity: 30" },
                            { name: "D210KL (Classroom)", type: "Capacity: 30" },
                            { name: "D211KL (Classroom)", type: "Capacity: 30" },
                            { name: "D212KL (Classroom)", type: "Capacity: 30" },
                            { name: "D213KL (Classroom)", type: "Capacity: 30" },
                            { name: "D214KL (Classroom)", type: "Capacity: 30" },
                            { name: "D215KL (Classroom)", type: "Capacity: 30" },
                            { name: "D216KL (Classroom)", type: "Capacity: 30" },
                            { name: "D217KL (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-d-lvl2.png"
                    },
                    3: {
                        rooms: [
                            { name: "AUD 100 (Auditorium)", type: "Capacity: 100" },
                            { name: "AUD 200 (Auditorium)", type: "Capacity: 200" },
                            { name: "AUD 300 (Auditorium)", type: "Capacity: 300" },
                            { name: "Bilik Mesyuarat Perdana", type: "Meeting Room" },
                            { name: "D301 BP - D361 BP", type: "Lecturer's Room" },
                            { name: "D301MB (Classroom)", type: "Capacity: 30" },
                            { name: "D302SC (Classroom)", type: "Capacity: 30" },
                            { name: "D303MB (Classroom)", type: "Capacity: 30" },
                            { name: "D304SC (Classroom)", type: "Capacity: 30" },
                            { name: "D305MK (Classroom)", type: "Capacity: 30" },
                            { name: "D306KL (Classroom)", type: "Capacity: 30" },
                            { name: "D307MK (Classroom)", type: "Capacity: 30" },
                            { name: "D308MK (Classroom)", type: "Capacity: 30" },
                            { name: "D309MM (A) (Classroom)", type: "Capacity: 30" },
                            { name: "D309MM (B) (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-d-lvl3.png"
                    },
                    4: {
                        rooms: [
                            { name: "D401 BP - D452 BP", type: "Lecturer's Room" },
                            { name: "D401MK (Classroom)", type: "Capacity: 30" },
                            { name: "D402MK (Classroom)", type: "Capacity: 30" },
                            { name: "D403MK (Classroom)", type: "Capacity: 30" },
                            { name: "D404MK (Classroom)", type: "Capacity: 30" },
                            { name: "D405MK (Classroom)", type: "Capacity: 30" },
                            { name: "D406MK (Classroom)", type: "Capacity: 30" },
                            { name: "D407MK (Classroom)", type: "Capacity: 30" },
                            { name: "D408KL (Classroom)", type: "Capacity: 30" },
                            { name: "D409MB (Classroom)", type: "Capacity: 30" },
                            { name: "D410MN (Classroom)", type: "Capacity: 30" }
                        ],
                        layoutImg: "block-d-lvl4.png"
                    }
                }
            },
            "Bangunan Pentadbiran": {
                defaultImg: "admin.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "Bahagian Penyelidikan, Jaringan Industri & Alumni", type: "PJIA" },
                            { name: "Bahagian Hal Ehwal Pelajar (HEP)", type: "Student Affairs" },
                            { name: "Galeri UiTM", type: "Exhibition" },
                            { name: "Unit Peperiksaan", type: "Examination" }
                        ],
                        layoutImg: "admin-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "Bahagian Hal Ehwal Akademik (HEA)", type: "Academic Affairs" },
                            { name: "Bahagian Korporat", type: "Corporate" },
                            { name: "Bahagian Pentadbiran", type: "Administration" },
                            { name: "Bilik Mesyuarat Professional", type: "Meeting Room" },
                            { name: "Pejabat Rektor", type: "Rector's Office" }
                        ],
                        layoutImg: "admin-lvl2.png"
                    },
                    3: {
                        rooms: [
                            { name: "P301 BP", type: "Lecturer's Office" },
                            { name: "P301", type: "Classroom" },
                            { name: "P302", type: "Classroom" },
                            { name: "P303", type: "Classroom" }
                        ],
                        layoutImg: "admin-lvl3.png"
                    }
                }
            },
            "Library (PTA)": {
                defaultImg: "pta.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "Main Circulation Desk", type: "Service" },
                            { name: "Book Stacks & Reading Area", type: "Quiet Zone" },
                            { name: "E-Catalog Stations", type: "Computers" }
                        ],
                        layoutImg: "library-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "Discussion Rooms 1-6", type: "Group Study" },
                            { name: "Archive & Special Collection", type: "Reference" },
                            { name: "Multimedia Room", type: "Viewing" }
                        ],
                        layoutImg: "library-lvl2.png"
                    }
                }
            },
            "Pusat Islam": {
                defaultImg: "pi.png",
                levels: {
                    1: {
                        rooms: [
                            { name: "Dewan Solat Utama", type: "Prayer Hall" },
                            { name: "Pejabat Pusat Islam", type: "Admin" }
                        ],
                        layoutImg: "pi-lvl1.png"
                    },
                    2: {
                        rooms: [
                            { name: "Bilik Kuliah Agama", type: "Classroom" },
                            { name: "Bilik Seminar", type: "Meeting Room" }
                        ],
                        layoutImg: "pi-lvl2.png"
                    }
                }
            }
        };

        // Modal Logic
        const modal = document.getElementById('buildingModal');
        const modalTitle = document.getElementById('modalBuildingName');
        const levelSelectView = document.getElementById('levelSelectView');
        const layoutView = document.getElementById('layoutView');
        const levelContainer = document.getElementById('levelButtonsContainer');
        const classroomListContainer = document.getElementById('classroomListContainer');
        const layoutTitle = document.getElementById('layoutTitle');
        const mapPreviewBox = document.getElementById('mapPreviewBox');

        let currentBuilding = '';

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
            
            classroomListContainer.innerHTML = `
                <div class="room-item">Main Welding Area <span class="badge">Zone 1</span></div>
                <div class="room-item">Machining & Lathe Room <span class="badge">Zone 2</span></div>
                <div class="room-item">Safety & Tool Storage <span class="badge">Office</span></div>
                <div class="room-item">Practical Assembly Bay <span class="badge">Zone 3</span></div>
            `;

            mapPreviewBox.style.backgroundImage = `url('${bgImage}')`;
            mapPreviewBox.innerText = "";
            modal.classList.add('active');
        }

        function selectLevel(levelNum) {
            levelSelectView.style.display = 'none';
            layoutView.classList.add('active');
            layoutTitle.innerText = `${currentBuilding} - Level ${levelNum} Classrooms & Layout`;

            let buildingInfo = buildingData[currentBuilding];
            let levelInfo = buildingInfo ? buildingInfo.levels[levelNum] : null;

            if (levelInfo && levelInfo.rooms) {
                let htmlContent = '';
                levelInfo.rooms.forEach(room => {
                    htmlContent += `<div class="room-item">${room.name} <span class="badge">${room.type || 'Facility'}</span></div>`;
                });
                classroomListContainer.innerHTML = htmlContent;
                mapPreviewBox.style.backgroundImage = `url('${levelInfo.layoutImg}')`;
            } else {
                classroomListContainer.innerHTML = `<div class="room-item">No specific rooms listed yet. <span class="badge">Standard Floor</span></div>`;
                mapPreviewBox.style.backgroundImage = `url('${buildingInfo ? buildingInfo.defaultImg : 'block.png'}')`;
            }

            mapPreviewBox.innerText = "";
        }

        function backToLevels() {
            layoutView.classList.remove('active');
            levelSelectView.style.display = 'block';
        }

        function closeBuildingModal() {
            modal.classList.remove('active');
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeBuildingModal();
            }
        });

        // --- SEARCH & FILTER LOGIC ---
        
        // Real-time card filter as user types
        function searchClassroom() {
            let input = document.getElementById('classroomSearch').value.toLowerCase().trim();
            let cards = document.getElementsByClassName('building-card');

            for (let i = 0; i < cards.length; i++) {
                let card = cards[i];
                let cardTitle = card.querySelector('h3').innerText.trim();
                
                // Match building title directly
                let isMatch = cardTitle.toLowerCase().includes(input) || input === "";

                // Look inside rooms/facilities database
                if (!isMatch && buildingData[cardTitle]) {
                    let bData = buildingData[cardTitle];
                    for (let lvl in bData.levels) {
                        let rooms = bData.levels[lvl].rooms;
                        for (let room of rooms) {
                            if (room.name.toLowerCase().includes(input) || room.type.toLowerCase().includes(input)) {
                                isMatch = true;
                                break;
                            }
                        }
                        if (isMatch) break;
                    }
                }

                card.style.display = isMatch ? "flex" : "none";
            }
        }

        // Listen for "Enter" key press inside search bar
        function handleSearchKey(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                triggerDirectPopup();
            }
        }

        // Triggered when clicking Search button or hitting Enter: opens modal directly to level
        function triggerDirectPopup() {
            let input = document.getElementById('classroomSearch').value.toLowerCase().trim();
            if (input === "") return;

            // Search through buildingData to find the exact building and level match
            for (let bName in buildingData) {
                let bData = buildingData[bName];
                for (let lvl in bData.levels) {
                    let rooms = bData.levels[lvl].rooms;
                    for (let room of rooms) {
                        if (room.name.toLowerCase().includes(input) || room.type.toLowerCase().includes(input)) {
                            // Match found! Open modal and directly select that level
                            let totalLevels = Object.keys(bData.levels).length;
                            openBuildingModal(bName, totalLevels, bData.defaultImg);
                            selectLevel(lvl);
                            return;
                        }
                    }
                }

                // If searched directly for building name (e.g. "Block D")
                if (bName.toLowerCase().includes(input)) {
                    let totalLevels = Object.keys(bData.levels).length;
                    openBuildingModal(bName, totalLevels, bData.defaultImg);
                    return;
                }
            }
        }

        // Alphabet Filter
        function filterAlpha(letter) {
            let buttons = document.getElementsByClassName('alpha-btn');
            for (let btn of buttons) {
                btn.classList.remove('active');
                if (btn.innerText === letter) {
                    btn.classList.add('active');
                }
            }

            let cards = document.getElementsByClassName('building-card');
            for (let i = 0; i < cards.length; i++) {
                let name = cards[i].querySelector('h3').innerText.toLowerCase();
                if (letter === 'ALL' || name.startsWith(letter.toLowerCase())) {
                    cards[i].style.display = "flex";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }

        // Auto-run search and popup if redirected from another page (e.g., discoverus.php)
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const searchQuery = urlParams.get('search');
            if (searchQuery) {
                document.getElementById('classroomSearch').value = searchQuery;
                searchClassroom();
                triggerDirectPopup();
            }
        });
    </script>
</body>
</html>