import express from "express";
import cors from "cors";

const app = express();
app.use(cors());
app.use(express.json());

function randomChoice(arr) {
  return arr[Math.floor(Math.random() * arr.length)];
}

function jawabanUmum(input) {
  const text = input.toLowerCase();

  // sapaan
  if (text.includes("halo") || text.includes("hai") || text.includes("hi")) {
    return randomChoice([
      "Halo 👋 Ada yang bisa saya bantu? Anda bisa bertanya soal kesehatan atau keluhan tubuh.",
      "Hai 😊 Saya siap membantu. Silakan ceritakan gejala atau pertanyaan Anda.",
      "Halo, saya siap membantu Anda. Bisa tanya soal kesehatan atau pertanyaan umum."
    ]);
  }

  if (text.includes("siapa kamu")) {
    return "Saya adalah asisten kesehatan virtual. Saya bisa membantu menjawab pertanyaan umum dan memberikan analisis awal gejala.";
  }

  if (text.includes("terima kasih") || text.includes("makasih")) {
    return "Sama-sama 😊 Jika ada keluhan atau pertanyaan lain, silakan tanya saja.";
  }

  if (text.includes("apa kabar")) {
    return "Saya baik dan siap membantu 😊 Bagaimana kondisi Anda hari ini?";
  }

  if (text.includes("bisa bantu apa")) {
    return `
Saya bisa membantu Anda dalam hal berikut:

1. Analisis awal gejala
2. Memberi saran kesehatan ringan
3. Menentukan tingkat urgensi (ringan / sedang / darurat)
4. Menjawab pertanyaan umum seputar kesehatan

Contoh:
- "Saya demam dan batuk"
- "Kenapa kepala saya pusing?"
- "Apa itu flu?"
`;
  }

  if (text.includes("apa itu flu")) {
    return `
Flu adalah infeksi virus yang menyerang saluran pernapasan.

Gejala umum flu:
- Demam
- Batuk
- Pilek
- Sakit tenggorokan
- Badan lemas

Saran:
- Istirahat cukup
- Minum air putih
- Konsumsi makanan bergizi
- Periksa ke dokter jika gejala berat
`;
  }

  if (text.includes("apa itu demam")) {
    return `
Demam adalah kondisi saat suhu tubuh meningkat di atas normal.

Penyebab umum:
- Infeksi virus
- Infeksi bakteri
- Peradangan

Saran:
- Istirahat cukup
- Minum air putih
- Pantau suhu tubuh
- Ke dokter jika demam tinggi atau lebih dari 3 hari
`;
  }

  return `
Saya bisa membantu menjawab pertanyaan kesehatan dan analisis gejala 😊

Contoh pertanyaan:
- "Saya demam dan batuk"
- "Saya mual sejak pagi"
- "Apa itu flu?"
- "Kapan harus ke dokter?"

Silakan ketik pertanyaan atau keluhan Anda.
`;
}

function analisisGejala(input) {
  const text = input.toLowerCase();

  // Darurat
  if (
    text.includes("sesak napas") ||
    text.includes("nyeri dada") ||
    text.includes("pingsan") ||
    text.includes("kejang")
  ) {
    return `
🩺 Analisis Awal:
Gejala yang Anda masukkan perlu perhatian medis segera.

📊 Kemungkinan Kondisi:
- Gangguan pernapasan
- Gangguan jantung
- Kondisi darurat lainnya

💡 Saran:
- Segera periksa ke dokter / IGD
- Jangan menunda pemeriksaan
- Jika kondisi memburuk, segera cari bantuan medis

🚨 Tingkat Urgensi:
TINGGI / DARURAT
`;
  }

  // Flu / ISPA
  if (
    text.includes("demam") &&
    (text.includes("batuk") || text.includes("pilek") || text.includes("flu"))
  ) {
    return `
🩺 Analisis Awal:
Gejala Anda cenderung mengarah ke infeksi saluran pernapasan ringan.

📊 Kemungkinan Kondisi:
- Flu
- Common cold
- Infeksi virus ringan

📈 Estimasi Kemungkinan:
- Flu: 70%
- Infeksi virus ringan: 20%
- Radang tenggorokan: 10%

💡 Saran:
- Istirahat cukup
- Minum air hangat
- Konsumsi makanan bergizi
- Pantau suhu tubuh

🚨 Tingkat Urgensi:
RENDAH - SEDANG

⚠️ Ke dokter jika:
- Demam tinggi lebih dari 3 hari
- Sesak napas
- Batuk semakin parah
`;
  }

  // Pencernaan
  if (
    text.includes("mual") ||
    text.includes("muntah") ||
    text.includes("diare") ||
    text.includes("sakit perut") ||
    text.includes("maag")
  ) {
    return `
🩺 Analisis Awal:
Gejala Anda cenderung mengarah ke gangguan pencernaan.

📊 Kemungkinan Kondisi:
- Maag / gastritis
- Gangguan lambung
- Infeksi saluran cerna ringan

📈 Estimasi Kemungkinan:
- Maag / gastritis: 60%
- Gangguan lambung: 25%
- Infeksi cerna ringan: 15%

💡 Saran:
- Minum air yang cukup
- Hindari makanan pedas / berminyak
- Makan teratur
- Istirahat cukup

🚨 Tingkat Urgensi:
RENDAH - SEDANG

⚠️ Ke dokter jika:
- Muntah terus menerus
- Diare parah
- Nyeri perut hebat
`;
  }

  // Kepala / lemas
  if (
    text.includes("pusing") ||
    text.includes("sakit kepala") ||
    text.includes("lemas") ||
    text.includes("capek")
  ) {
    return `
🩺 Analisis Awal:
Gejala Anda bisa berhubungan dengan kelelahan atau kondisi ringan lainnya.

📊 Kemungkinan Kondisi:
- Kelelahan
- Kurang tidur
- Dehidrasi ringan
- Sakit kepala tegang

📈 Estimasi Kemungkinan:
- Kelelahan: 40%
- Kurang tidur: 30%
- Dehidrasi ringan: 20%
- Sakit kepala tegang: 10%

💡 Saran:
- Istirahat cukup
- Minum air putih
- Makan teratur
- Kurangi aktivitas berat

🚨 Tingkat Urgensi:
RENDAH

⚠️ Ke dokter jika:
- Sakit kepala berat
- Penglihatan terganggu
- Disertai muntah
`;
  }

  return null;
}

function responAI(input) {
  const hasilGejala = analisisGejala(input);

  if (hasilGejala) {
    return hasilGejala;
  }

  return jawabanUmum(input);
}

app.post("/chat", (req, res) => {
  const userMessage = req.body.message || "";
  const hasil = responAI(userMessage);

  res.json({ reply: hasil });
});

app.listen(3000, () => {
  console.log("Server AI gratis jalan di http://localhost:3000");
});