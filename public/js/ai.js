document.addEventListener("DOMContentLoaded", function () {

  const btn = document.getElementById("btnKirim");

  if (btn) {
    btn.addEventListener("click", kirimPesan);
  }

});

async function kirimPesan() {
  let input = document.getElementById("userInput");
  let teks = input.value.trim();

  if (!teks) return;

  tambahPesan(teks, "user");
  input.value = "";

  tambahPesan("⏳ Menghubungkan ke server...", "ai");

  try {
    let balasan = await responAI(teks);

    hapusPesanTerakhir();
    tambahPesan(balasan, "ai");

  } catch (err) {
    hapusPesanTerakhir();
    tambahPesan("❌ Tidak bisa konek ke server", "ai");
  }
}

function tambahPesan(teks, tipe) {
  let box = document.getElementById("chatBox");
  let div = document.createElement("div");

  div.className = "pesan " + tipe;
  div.innerText = teks;

  box.appendChild(div);
  box.scrollTop = box.scrollHeight;
}

function hapusPesanTerakhir() {
  let box = document.getElementById("chatBox");
  box.removeChild(box.lastChild);
}

async function responAI(input) {
  const res = await fetch("http://127.0.0.1:3000/chat", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      message: input
    })
  });

  const data = await res.json();
  return data.reply;
}


document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("btnKirim");

  if (btn) {
    btn.addEventListener("click", kirimPesan);
    console.log("EVENT SIAP");
  } else {
    console.log("BUTTON GA KETEMU");
  }
});