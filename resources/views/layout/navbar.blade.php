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
            <li><a href="/artikel">Booking Rs</a></li>
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

<section class="services">
  <!-- MODAL -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <div id="modal-body"></div>
  </div>
</div>
  <h1>Layanan Khusus untuk <span>Penyandang Disabilitas</span></h1>
  <p>
    Kami percaya kesehatan adalah hak semua orang. Platform kami dirancang
    inklusif untuk semua kondisi.
  </p>

  <div class="card-container">
    <div id="content" style="margin-top:20px;"></div>

    <div class="card" onclick="show('mobilitas')">
      <div class="icon">
        <i class="fa-solid fa-wheelchair"></i>
      </div>
      <h3>Mobilitas Terbatas</h3>
      <p>Konsultasi dari rumah, navigasi RS ramah kursi roda, dan antar-jemput medis bersubsidi.</p>
      <button>Tersedia</button>
    </div>

    <div class="card" onclick="show('tuli')">
      <div class="icon">
        <i class="fa-solid fa-ear-listen"></i>
      </div>
      <h3>Tunarungu / Tuli</h3>
      <p>Konsultasi via teks & video dengan interpreter bahasa isyarat (BISINDO) terlatih.</p>
      <button>Tersedia</button>
    </div>

    <div class="card" onclick="show('netra')">
      <div class="icon">
        <i class="fa-solid fa-eye"></i>
      </div>
      <h3>Tunanetra / Low Vision</h3>
      <p>Antarmuka screen reader-friendly, audio guidance, dan notifikasi suara untuk semua fitur.</p>
      <button>Tersedia</button>
    </div>

      <div class="card" onclick="show('bicara')">
      <div class="icon">
        <i class="fa-solid fa-comment-dots"></i>
      </div>
      <h3>Gangguan Bicara</h3>
      <p>Komunikasi berbasis teks dan papan komunikasi AAC untuk konsultasi yang nyaman.</p>
      <button>Tersedia</button>
    </div>

  </div>
</section>

<!-- Accessibility -->
<div class="accessibility">

  <button class="btn-plus"><i class="fa-solid fa-plus"></i></button>
  <button class="btn-minus"><i class="fa-solid fa-minus"></i></button>
  <button class="btn-dark"><i class="fa-solid fa-circle-half-stroke"></i></button>
  <button><i class="fa-solid fa-wheelchair"></i></button>

  <button class="sos">SOS</button>

</div>
<script>
function toggleMenu(){
    const navWrapper = document.getElementById("menu");
    navWrapper.classList.toggle("active");

    
}

document.addEventListener("DOMContentLoaded", function () {

  let zoomLevel = 1;

  const btnPlus = document.querySelector(".btn-plus");
  const btnMinus = document.querySelector(".btn-minus");
  const btnDark = document.querySelector(".btn-dark");

  // 🔥 ZOOM IN (bukan cuma teks)
  btnPlus.addEventListener("click", () => {
    zoomLevel += 0.1;
    document.body.style.zoom = zoomLevel;
  });

  // 🔥 ZOOM OUT
  btnMinus.addEventListener("click", () => {
    zoomLevel -= 0.1;
    document.body.style.zoom = zoomLevel;
  });

  // DARK MODE
  btnDark.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });

});



function show(type) {
    let content = "";

    if (type === "mobilitas") {
        content = `
            <h2 style="color:#1e1e1e; font-weight:bold; text-align:center; background:none;">
           Konsultasi dari Rumah
          </h2>
            <button onclick="alert('Ke halaman booking')">Booking RS</button>
            <button onclick="alert('Konsultasi online')">Konsultasi Online</button>
        `;
    }

    if (type === "tuli") {
        content = `
            <h2 style="color:#1e1e1e; font-weight:bold; >Chat Dokter</h2>
            <div style="height:100px; background:#eee; padding:10px;">
                <b>Dokter:</b> Halo, ada keluhan?
            </div>
            <input placeholder="Ketik pesan..." />
            <button>Kirim</button>
        `;
    }

    if (type === "netra") {
        content = `
            <div style="background:white;color:black;padding:15px;border-radius:10px;">
                <h2 style="color:black; text-align:center;">Mode Tunanetra</h2>
                <p>Blockt texs yg ingin di bacakan Contoh: "Layanan Khusus untuk Penyandang Disabilitas"</p>
                <button onclick="speak()">🔊 Bacakan</button>
                <button onclick="zoom()">A+ Perbesar</button>
            </div>
        `;
    }

    if (type === "bicara") {
        content = `
            <h2 style="color:#1e1e1e; font-weight:bold;">Chat Dokter</h2>
            <input id="textInput" placeholder="Ketik..." />
            <button onclick="kirimDanBaca()">Kirim</button>
        `;
    }

    document.getElementById("modal-body").innerHTML = content;
    document.getElementById("modal").style.display = "block";
}

// TEXT TO SPEECH
function speak() {
    let msg = new SpeechSynthesisUtterance("Selamat datang di layanan kesehatan");
    speechSynthesis.speak(msg);
}

function speakText() {
    let text = document.getElementById("textInput").value;
    let msg = new SpeechSynthesisUtterance(text);
    speechSynthesis.speak(msg);
}

// ZOOM TEXT
function zoom() {
    document.body.style.fontSize = "20px";
}

window.onclick = function(event) {
  let modal = document.getElementById("modal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function closeModal() {
    let modal = document.getElementById("modal");
    if (modal) {
        modal.style.display = "none";
    }
}

document.addEventListener("mouseup", function () {
    let selectedText = window.getSelection().toString().trim();

    if (selectedText.length > 0) {
        speechSynthesis.cancel(); // stop suara sebelumnya

        let msg = new SpeechSynthesisUtterance(selectedText);
        msg.lang = "id-ID";

        speechSynthesis.speak(msg);
    }
});
function kirimDanBaca() {
    let text = document.getElementById("textInput").value;

    fetch('/chat-dokter', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            pesan: text
        })
    })
    .then(res => res.json())
    .then(data => {
        alert("Pesan terkirim");
    });
}
</script>