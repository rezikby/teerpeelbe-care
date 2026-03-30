import express from "express";
import cors from "cors";

const app = express();

// 🔥 FIX CORS (biar Laravel bisa akses)
app.use(cors({
  origin: "*",
  methods: ["GET", "POST"],
}));

app.use(express.json());

// TEST ROUTE (biar bisa dicek di browser)
app.get("/", (req, res) => {
  res.send("AI SERVER HIDUP 🔥");
});

function randomChoice(arr) {
  return arr[Math.floor(Math.random() * arr.length)];
}

function jawabanUmum(input) {
  const text = input.toLowerCase();

  if (text.includes("halo") || text.includes("hai") || text.includes("hi")) {
    return randomChoice([
      "Halo 👋 Ada yang bisa saya bantu?",
      "Hai 😊 Silakan ceritakan gejala Anda.",
      "Halo, saya siap membantu Anda."
    ]);
  }

  if (text.includes("siapa kamu")) {
    return "Saya adalah asisten kesehatan virtual.";
  }

  if (text.includes("terima kasih") || text.includes("makasih")) {
    return "Sama-sama 😊";
  }

  return "Silakan ketik gejala atau pertanyaan kesehatan Anda.";
}

function analisisGejala(input) {
  const text = input.toLowerCase();

  if (
    text.includes("sesak napas") ||
    text.includes("nyeri dada") ||
    text.includes("pingsan")
  ) {
    return "🚨 DARURAT! Segera ke dokter / IGD.";
  }

  if (text.includes("demam") && text.includes("batuk")) {
    return "Kemungkinan flu ringan. Istirahat dan minum air.";
  }

  return null;
}

function responAI(input) {
  return analisisGejala(input) || jawabanUmum(input);
}

// 🔥 ROUTE UTAMA
app.post("/chat", (req, res) => {
  try {
    const userMessage = req.body.message || "";
    const hasil = responAI(userMessage);

    res.json({ reply: hasil });
  } catch (err) {
    console.error(err);
    res.status(500).json({ reply: "Server error" });
  }
});

// 🔥 PENTING BANGET (biar gak kena REFUSED)
app.listen(3000, "0.0.0.0", () => {
  console.log(" server ai jalan di di http://127.0.0.1:3000");
});