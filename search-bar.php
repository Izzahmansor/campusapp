<!-- Reusable Global Search Component -->
<div class="filter-section">
    <div class="filter-card">
        <div class="search-box">
            <input type="text" id="globalSearchInput" class="search-input" placeholder="Search buildings, classrooms, offices (e.g. Pejabat Rektor, Block D)..." onkeyup="handleGlobalSearchKey(event)">
            <button class="search-btn" onclick="executeGlobalSearch()"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </div>

        <!-- A to Z Filter Buttons -->
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
</div>