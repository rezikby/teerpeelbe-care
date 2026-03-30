

  <style>
    body {
  font-family: Arial, sans-serif;
  background: #edf2f7;
  margin: 0;
  padding: 0;
}

.ai-container {
  max-width: 980px;
  width: 100%;
  margin: 90px auto;
}

.ai-wrapper {
  display: flex;
  justify-content: center;
  width: 100%;
}
  .ai-container h1,
.ai-container .judul-utama {
  text-align: center;
  font-size: 40px;
  color: #243b9f;
  margin-bottom: 10px;
  font-weight: 800;
}

.ai-container p,
.ai-container .subjudul {
  text-align: center;
  font-size: 18px;
  color: #555;
  margin-bottom: 30px;
}

.ai-container input {
  flex: 1;
  padding: 16px 18px;
  border-radius: 18px;
}

.ai-container button {
  padding: 15px 26px;
  border-radius: 18px;
}

    /* BOX CHAT UTAMA */
    .chat-box {
      background: #f7f7f7;
      padding: 25px;
      height: 420px;
      overflow-y: auto;
      border-radius: 28px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border: 1px solid #ececec;
    }

    /* BUBBLE CHAT */
    .pesan {
      padding: 16px 20px;
      margin: 14px 0;
      border-radius: 18px;
      max-width: 72%;
      line-height: 1.6;
      font-size: 15px;
      word-wrap: break-word;
      white-space: pre-wrap;
    }

    /* PESAN USER */
    .user {
      background: linear-gradient(90deg, #3b82f6, #27c98f);
      color: white;
      margin-left: auto;
      border-bottom-right-radius: 8px;
    }

    /* PESAN AI */
    .ai {
      background: #e9ecef;
      color: #333;
      margin-right: auto;
      border-bottom-left-radius: 8px;
    }

    /* INPUT AREA */
    .chat-input {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-top: 18px;
    }

    /* INPUT */
    input {
      flex: 1;
      padding: 16px 18px;
      border: none;
      border-radius: 18px;
      outline: none;
      font-size: 15px;
      background: white;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
    }

    /* TOMBOL */
    button {
      padding: 15px 26px;
      border: none;
      border-radius: 18px;
      background: linear-gradient(90deg, #3b82f6, #27c98f);
      color: white;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 6px 18px rgba(59, 130, 246, 0.18);
    }

    button:hover {
      transform: translateY(-1px);
      opacity: 0.96;
    }

    button:active {
      transform: scale(0.98);
    }

    /* SCROLLBAR */
    .chat-box::-webkit-scrollbar {
      width: 8px;
    }

    .chat-box::-webkit-scrollbar-thumb {
      background: #cfd6dd;
      border-radius: 10px;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .ai-container {
        margin: 20px auto;
        padding: 0 12px;
      }

      .chat-box {
        height: 380px;
        padding: 18px;
      }

      .pesan {
        max-width: 88%;
        font-size: 14px;
      }

      .chat-input {
        flex-direction: column;
      }

      input,
      button {
        width: 100%;
      }

      h1,
      .judul-utama {
        font-size: 34px;
      }

      p,
      .subjudul {
        font-size: 15px;
      }
    }

    /* DISCLAIMER MEDIS */
    .medical-disclaimer {
      margin-top: 18px;
      background: #f6edd8;
      border: 1px solid #ead9a7;
      color: #8a5a13;
      padding: 16px 18px;
      border-radius: 18px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 15px;
      line-height: 1.7;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.03);
    }

    .medical-disclaimer strong {
      color: #8b4d00;
    }

    .icon-warning {
      font-size: 22px;
      line-height: 1;
      margin-top: 2px;
      flex-shrink: 0;
    }

    @media (max-width: 768px) {
      .medical-disclaimer {
        font-size: 14px;
        padding: 14px 16px;
        border-radius: 16px;
      }

      .icon-warning {
        font-size: 20px;
      }
    }
  </style>

<div class="ai-wrapper">
  <div class="ai-container" id="ai-section">

    <h1 id="judul">Pemeriksa Gejala Bertenaga AI</h1>
    <p>
      Dapatkan wawasan instan tentang gejala Anda dengan asisten AI canggih kami.
      Tersedia 24/7 untuk membantu mengarahkan Anda menuju perawatan yang tepat.
    </p>

    <div class="chat-box" id="chatBox">
    <div class="pesan ai">
  Asisten AI
  Halo! Saya asisten kesehatan Anda. Silakan jelaskan gejala yang Anda rasakan, dan saya akan membantu memberikan informasi awal.
</div>
    </div>

    <div class="medical-disclaimer">
      <span class="icon-warning">⚠</span>
      <div>
        <strong>Disclaimer Medis:</strong>
        AI ini hanya memberikan informasi kesehatan awal dan bukan pengganti diagnosis,
        pemeriksaan, atau saran langsung dari tenaga medis profesional.
      </div>
    </div>

    <div class="chat-input">
      <input id="userInput" placeholder="Tulis..." />
      <button id="btnKirim">Kirim</button>
    </div>

  </div>
</div>