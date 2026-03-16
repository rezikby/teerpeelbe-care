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
            <li><a href="/ai">Ai</a></li>
            <li><a href="/komunitas">Komunitas</a></li>
            <li><a href="/artikel">Artikel</a></li>
            <li><a href="/darurat">Darurat</a></li>
        </ul>

        <div class="auth">
            <a href="/login" class="login">Masuk</a>
            <a href="/register" class="register">Register</a>
        </div>
    </div>

    <div class="hamburger" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </div>
</nav>
<section class="hero">

  <div class="hero-left">
    <div class="badge">kesehatan adalah prioritas kami</div>
    <h1 class="hero-title">
      <span class="black">Layanan<br>Kesehatan<br></span>
      <span class="blue">Digital Terbaik</span>
    </h1>
    <p class="hero-desc">
      Terhubung dengan dokter terbaik, dapatkan wawasan kesehatan berbasis AI, dan temukan fasilitas medis terdekat — semuanya dalam satu platform yang aman dan terpercaya.
    </p>
    <div class="search-bar">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="search hospital......">
      <button type="button">cari</button>
    </div>
    <div class="quick-actions">
      <a href="#" class="quick-btn"><i class="fas fa-robot"></i> Coba Ai Diagnosis</a>
      <a href="#" class="quick-btn outline"><i class="fas fa-location-dot"></i> Cari RS Terdekat</a>
    </div>
  </div>

  <div class="hero-right">

    <div class="card-konsultasi">
      <div class="label">Konsultasi hari ini</div>
      <div class="count">1,247</div>
      <div class="growth">12% kemarin</div>
    </div>

    <div class="card-dokter">
      <div class="card-dokter-header">
        <span class="title">Dokter yg Tersedia Sekarang</span>
        <span class="badge-online">online</span>
      </div>
      <div class="dokter-item">
        <div class="dokter-avatar"></div>
        <div class="dokter-info">
          <div class="name">dr. Sari Dewi, Sp.JP</div>
          <div class="spec">Kardiologi · RS Cipto</div>
        </div>
        <div class="dokter-rating">★ 4.9</div>
      </div>
      <div class="dokter-item">
        <div class="dokter-avatar"></div>
        <div class="dokter-info">
          <div class="name">dr. Sari Dewi, Sp.JP</div>
          <div class="spec">Kardiologi · RS Cipto</div>
        </div>
        <div class="dokter-rating">★ 4.9</div>
      </div>
      <div class="dokter-item">
        <div class="dokter-avatar"></div>
        <div class="dokter-info">
          <div class="name">dr. Sari Dewi, Sp.JP</div>
          <div class="spec">Kardiologi · RS Cipto</div>
        </div>
        <div class="dokter-rating">★ 4.9</div>
      </div>
    </div>

    <div class="card-ai">
      <div class="ai-icon"><i class="fas fa-robot"></i></div>
      <div class="ai-text">
        <div class="title">Ai Aktif</div>
        <div class="sub">Siap membantu kamu</div>
      </div>
    </div>

    <div class="card-respons">
      <div class="label">Respons Rat Rata</div>
      <div class="time">
        <i class="fas fa-less-than"></i>
        <span>5 mnt</span>
      </div>
      <div class="speed">
        <i class="fas fa-bolt"></i> Super Cepat
      </div>
    </div>

  </div>
</section>
<div class="stats">
  <div class="stat-item">
    <div class="stat-number">2.4k+</div>
    <div class="stat-label">Dokter Terverifikasi</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">98%</div>
    <div class="stat-label">Pasien Puas</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">24/7</div>
    <div class="stat-label">Layanan aktif</div>
  </div>
</div>

<section class="features">

  <div class="feature-item">
    <div class="feature-icon green">
      <i class="fas fa-check-square"></i>
    </div>
    <h3 class="feature-title">Dokter Terverifikasi</h3>
    <p class="feature-desc">
      Semua dokter bersertifikat dan melalui proses verifikasi ketat sebelum bergabung.
    </p>
  </div>

  <div class="feature-item">
    <div class="feature-icon blue">
      <i class="fas fa-clock"></i>
    </div>
    <h3 class="feature-title">Tersedia 24/7</h3>
    <p class="feature-desc">
      Layanan kesehatan round-the-clock — kapanpun dan dimanapun kamu butuh bantuan.
    </p>
  </div>

  <div class="feature-item">
    <div class="feature-icon yellow">
      <i class="fas fa-lock"></i>
    </div>
    <h3 class="feature-title">Data Aman & Privat</h3>
    <p class="feature-desc">
      Enkripsi end-to-end dan perlindungan data standar HIPAA untuk ketenangan pikiranmu.
    </p>
  </div>

</section>
<script>
function toggleMenu(){
    const navWrapper = document.getElementById("menu");
    navWrapper.classList.toggle("active");
}
</script>