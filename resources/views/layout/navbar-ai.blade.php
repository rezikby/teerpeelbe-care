<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

<nav class="navbar">
    <div class="logo">
        <i class="fas fa-hospital-user"></i>
        TERPLEBE <span>CARE</span>
    </div>

    <div class="nav-wrapper" id="menu">
        <ul class="menu-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/ai-diagnosis">Ai Diagnosis</a></li>
            <li><a href="/komunitas">Komunitas</a></li>
            <li><a href="/artikel">Artikel</a></li>
            <li><a href="/darurat">Darurat</a></li>
        </ul>
    </div>

    <div class="hamburger" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </div>
</nav>

<script>
function toggleMenu(){
    const navWrapper = document.getElementById("menu");
    navWrapper.classList.toggle("active");
}
</script>