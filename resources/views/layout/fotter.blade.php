<style>
/* =========================
   FOOTER HEALTHCARE
========================= */
.footer-healthcare {
  margin-top: 70px;
  background: linear-gradient(135deg, #1f3f98 0%, #0c6b72 100%);
  color: white;
  padding: 60px 20px 25px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.footer-container {
  max-width: 1180px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.4fr 1fr 1fr 1fr;
  gap: 45px;
  align-items: start;
}

/* =========================
   BRAND
========================= */
.footer-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 18px;
}

.brand-icon {
  width: 54px;
  height: 54px;
  border-radius: 16px;
  background: rgba(255, 255, 255, 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px;
  box-shadow: inset 0 0 0 1px rgba(255,255,255,0.05);
}

.brand-text {
  font-size: 22px;
  font-weight: 800;
  color: #ffffff;
}

.footer-desc {
  color: rgba(255,255,255,0.84);
  font-size: 15px;
  line-height: 1.8;
  max-width: 300px;
  margin-bottom: 24px;
  text-align: left;
}

/* =========================
   SOCIAL
========================= */
.footer-social {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
}

.footer-social a {
  width: 46px;
  height: 46px;
  border-radius: 14px;
  background: rgba(255,255,255,0.10);
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  font-size: 15px;
  font-weight: 700;
  transition: all 0.25s ease;
}

.footer-social a:hover {
  background: rgba(255,255,255,0.20);
  transform: translateY(-3px);
}

/* =========================
   COLUMN
========================= */
.footer-column h3 {
  font-size: 17px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 22px;
}

.footer-column a,
.footer-column p {
  display: block;
  color: rgba(255,255,255,0.84);
  text-decoration: none;
  margin-bottom: 14px;
  font-size: 15px;
  line-height: 1.7;
  transition: all 0.2s ease;
}

.footer-column a:hover {
  color: #ffffff;
  transform: translateX(4px);
}

/* =========================
   BOTTOM
========================= */
.footer-bottom {
  max-width: 1180px;
  margin: 42px auto 0;
  padding-top: 24px;
  border-top: 1px solid rgba(255,255,255,0.12);
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.footer-bottom span {
  color: rgba(255,255,255,0.78);
  font-size: 15px;
}

.footer-links-bottom {
  display: flex;
  gap: 28px;
  flex-wrap: wrap;
}

.footer-links-bottom a {
  color: rgba(255,255,255,0.82);
  text-decoration: none;
  font-size: 15px;
  transition: 0.2s;
}

.footer-links-bottom a:hover {
  color: #ffffff;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 992px) {
  .footer-container {
    grid-template-columns: 1fr 1fr;
    gap: 35px;
  }
}

@media (max-width: 768px) {
  .footer-healthcare {
    padding: 45px 18px 22px;
  }

  .footer-container {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .footer-desc {
    max-width: 100%;
  }

  .footer-bottom {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
  }

  .footer-links-bottom {
    gap: 16px;
  }
}

@media (max-width: 480px) {
  .brand-text {
    font-size: 20px;
  }

  .footer-column h3 {
    font-size: 16px;
  }

  .footer-column a,
  .footer-column p,
  .footer-bottom span,
  .footer-links-bottom a {
    font-size: 14px;
  }

  .footer-social a {
    width: 42px;
    height: 42px;
    font-size: 14px;
  }
}
</style>
<footer class="footer-healthcare">
  <div class="footer-container">

    <!-- KOLOM 1 -->
    <div>
      <div class="footer-brand">
        <div class="brand-icon">👥</div>
        <div class="brand-text">HealthCare+</div>
      </div>

      <div class="footer-desc">
        Mitra kesehatan terpercaya untuk Anda dan keluarga. Memberikan layanan
        kesehatan berkualitas dengan kepedulian dan profesionalisme.
      </div>

      <div class="footer-social">
        <a href="#">f</a>
        <a href="#">t</a>
        <a href="#">ig</a>
        <a href="#">in</a>
      </div>
    </div>

    <!-- KOLOM 2 -->
    <div class="footer-column">
      <h3>Quick Links</h3>
      <a href="#">Home</a>
      <a href="#">AI Diagnosis</a>
      <a href="#">Konsultasi Online</a>
      <a href="#">Cari Klinik</a>
      <a href="#">Tentang Kami</a>
    </div>

    <!-- KOLOM 3 -->
    <div class="footer-column">
      <h3>Services</h3>
      <a href="#">Emergency Care</a>
      <a href="#">Konsultasi Spesialis</a>
      <a href="#">Tes Lab & Diagnostik</a>
      <a href="#">Layanan Farmasi</a>
      <a href="#">Paket Kesehatan</a>
    </div>

    <!-- KOLOM 4 -->
    <div class="footer-column">
      <h3>Contact Us</h3>
      <p>📍 123 Healthcare Avenue, Medical District</p>
      <p>📞 +62 812-3456-7890</p>
      <p>✉ support@healthcareplus.com</p>
    </div>

  </div>

  <div class="footer-bottom">
    <span>© 2026 HealthCare+. Semua hak dilindungi.</span>
    <div class="footer-links-bottom">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Cookie Policy</a>
    </div>
  </div>
</footer>