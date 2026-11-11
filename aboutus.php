<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Campus App UiTMCK</title>
    <!-- Google Fonts & FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f2eb;
            color: #1e293b;
            overflow-x: hidden;
        }

        /* --- PAGE HEADER --- */
        .page-header {
            padding: 160px 2rem 60px 2rem;
            text-align: center;
            background: linear-gradient(135deg, #40082c);
            color: #ffffff;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(64, 8, 44, 0.15);
            position: relative;
            overflow: hidden;
        }

        .page-header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .page-header p {
            font-size: 1.05rem;
            opacity: 0.95;
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* --- MAIN CONTAINER --- */
        .about-container {
            max-width: 1250px;
            margin: 0 auto 5rem auto;
            padding: 0 2rem;
        }

        .section-hero-title {
            font-size: 3.8rem;
            font-weight: 900;
            color: #40082c;
            text-transform: uppercase;
            letter-spacing: -1px;
            margin-bottom: 0.2rem;
            line-height: 1;
        }

        .section-subtext {
            font-size: 1.05rem;
            color: #64748b;
            margin-bottom: 3.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* SECTION CATEGORY HEADERS */
        .hierarchy-group {
            margin-bottom: 4rem;
        }

        .hierarchy-title {
            font-size: 1.3rem;
            font-weight: 800;
            color: #40082c;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .hierarchy-title::after {
            content: '';
            flex: 1;
            height: 2px;
            background-color: #cbd5e1;
        }

        /* MEMBER GRID LAYOUTS */
        .grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem 2rem;
        }

        /* --- LANYARD ID BADGE CARD --- */
        .member-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: transform 0.3s ease;
            padding-top: 25px; /* Space for lanyard clip */
        }

        .member-card:hover {
            transform: translateY(-8px);
        }

        /* LANYARD CLIP & LOOP AT TOP */
        .lanyard-clip-container {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .lanyard-strap {
            width: 18px;
            height: 12px;
            background: #111827;
            border-radius: 2px 2px 0 0;
        }

        .metal-ring {
            width: 28px;
            height: 10px;
            border: 3px solid #94a3b8;
            border-radius: 6px;
            background: #cbd5e1;
        }

        .metal-clip {
            width: 38px;
            height: 14px;
            background: linear-gradient(180deg, #e2e8f0 0%, #94a3b8 100%);
            border-radius: 3px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border: 1px solid #64748b;
        }

        /* BADGE PLASTIC HOLDER */
        .badge-holder {
            width: 100%;
            background: #ffffff;
            border-radius: 18px;
            padding: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08), 
                        inset 0 0 0 2px rgba(255, 255, 255, 0.8),
                        inset 0 0 0 4px #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        /* SESSION TAG INSIDE BADGE */
        .badge-session {
            font-size: 0.65rem;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            padding-left: 4px;
        }

        /* PHOTO FRAME WITH GLASS GLOW */
        .portrait-wrapper {
            position: relative;
            width: 100%;
            height: 270px;
            border-radius: 12px;
            overflow: hidden;
            background-color: #f1f5f9;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.1);
        }

        .member-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
        }

        /* MEMBER DETAILS BELOW BADGE */
        .member-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-top: 1.2rem;
            width: 100%;
        }

        .member-name {
            font-size: 1.2rem;
            font-weight: 900;
            color: #0f172a;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.2;
            margin-bottom: 0.3rem;
        }

        .member-role {
            font-size: 0.75rem;
            font-weight: 700;
            color: #40082c;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            line-height: 1.3;
        }

        /* RESPONSIVE LAYOUT */
        @media (max-width: 1024px) {
            .grid-4 {
                grid-template-columns: repeat(3, 1fr);
            }
            .section-hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .section-hero-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 480px) {
            .grid-4 {
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
        <h1>Our Team</h1>
        <p>MAJLIS PERWAKILAN PELAJAR (MPP) UiTM CAWANGAN KELANTAN SESI 2025/2026</p>
        <h5>Meet the dedicated student leaders driving the Campus App initiative across UiTM Cawangan Kelantan Kampus Machang.</h5>
    </header>

    <!-- MAIN EDITORIAL SECTION -->
    <main class="about-container">


        <!-- GROUP 1: EXECUTIVE LEADERSHIP -->
        <section class="hierarchy-group">
            <h3 class="hierarchy-title"><i class="fa-solid fa-crown" style="font-size: 1.1rem;"></i> Jawatankuasa Eksekutif Utama</h3>
            
            <div class="grid-4">
                <!-- 1. Yang Di-Pertua -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="ydp.jpg" alt="Nik Alif Aiman" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">NIK ALIF AIMAN</h3>
                        <span class="member-role">Yang Di-Pertua</span>
                    </div>
                </div>

                <!-- 2. Naib Yang Di-Pertua -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="nydp.jpg" alt="Muhammad Faris Faisal" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">FARIS FAISAL</h3>
                        <span class="member-role">Naib Yang Di-Pertua</span>
                    </div>
                </div>

                <!-- 3. Setiausaha Agung -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="sua.jpg" alt="Anis Syafiqa Riduan" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">ANIS SYAFIQA</h3>
                        <span class="member-role">Setiausaha Agung</span>
                    </div>
                </div>

                <!-- 4. Bendahari Kehormat -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="bendahari.jpg" alt="Arisya Khadija Khairulnizam" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">ARISYA KHADIJA</h3>
                        <span class="member-role">Bendahari Kehormat</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- GROUP 3: EXECUTIVE DEPARTMENTS -->
        <section class="hierarchy-group">
            <h3 class="hierarchy-title"><i class="fa-solid fa-users-gear" style="font-size: 1.1rem;"></i> Barisan Exco Jabatan</h3>
            
            <div class="grid-4">
                <!-- Kebajikan 1 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="kebajikan1.jpg" alt="Aidil Hannan Hussin" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">AIDIL HANNAN</h3>
                        <span class="member-role">Jabatan Kebajikan & Khidmat Mahasiswa</span>
                    </div>
                </div>

                <!-- Kebajikan 2 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="kebajikan2.jpg" alt="Che Nurul Syahadah Che Zabidi" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">CHE NURUL SYAHADAH</h3>
                        <span class="member-role">Jabatan Kebajikan & Khidmat Mahasiswa</span>
                    </div>
                </div>

                <!-- Skolastik -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="skolastik.jpg" alt="Muhammad Thaqif Jazimin Abdullah" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">THAQIF JAZIMIN</h3>
                        <span class="member-role">Jabatan Skolastik & Jaringan Industri</span>
                    </div>
                </div>

                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="kerohanian.jpg" alt="Siti Nor Maisarah Mohd Darzi" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">SITI NOR MAISARAH</h3>
                        <span class="member-role">Exco Kerohanian</span>
                    </div>
                </div>

                <!-- Perhubungan 1 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="perhubungan1.jpg" alt="Nurul Ashiqin Abu Azari" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">NURUL ASHIQIN</h3>
                        <span class="member-role">Jabatan Perhubungan & Pengantarabangsaan</span>
                    </div>
                </div>

                <!-- Perhubungan 2 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="mppperhubungan2.jpg" alt="Nurul Izzah Mansor" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">NURUL IZZAH</h3>
                        <span class="member-role">Jabatan Perhubungan & Pengantarabangsaan</span>
                    </div>
                </div>

                <!-- Pembangunan 1 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="pembangunan2.jpg" alt="Kiasateena Alliyah Azmi" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">KIASATEENA ALLIYAH</h3>
                        <span class="member-role">Jabatan Pembangunan Mahasiswa</span>
                    </div>
                </div>

                <!-- Pembangunan 2 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="pembangunan1.jpg" alt="Faris Mohd Fakri" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">FARIS FAKRI</h3>
                        <span class="member-role">Jabatan Pembangunan Mahasiswa</span>
                    </div>
                </div>

                <!-- Pengurusan 1 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="mpp/pengurusan1.png" alt="Emil Syahril Afzanizam" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">EMIL SYAHRIL</h3>
                        <span class="member-role">Jabatan Pengurusan Sumber & Informasi</span>
                    </div>
                </div>

                <!-- Pengurusan 2 -->
                <div class="member-card">
                    <div class="lanyard-clip-container">
                        <div class="lanyard-strap"></div>
                        <div class="metal-ring"></div>
                        <div class="metal-clip"></div>
                    </div>
                    <div class="badge-holder">
                        <div class="badge-session">MPP UiTMCK 25/26</div>
                        <div class="portrait-wrapper">
                            <img src="mpp/pengurusan2.png" alt="Putra Rifdee Zharfan" class="member-photo">
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">PUTRA RIFDEE</h3>
                        <span class="member-role">Jabatan Pengurusan Sumber & Informasi</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Dynamic Footer Inclusion -->
    <?php include 'footer.php'; ?>

</body>
</html>