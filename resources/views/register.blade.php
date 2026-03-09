<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
  
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
   <form method="POST" action="/register">
      <div class="kata">
      <h2 >Register</h2>
    <h2> <a href="{{ route('login') }}">Login </a></h2>
    </div>
    @csrf
    <div><label>Username:</label><input type="text" name="Username" required></div>
    <div><label>Nama:</label><input type="text" name="Nama" required></div>
    
    <!-- Ganti input Asal jadi dropdown -->
    <div>
        <label>Asal:</label>
        <select name="Asal" required>
            <option value="">--Pilih Provinsi--</option>
            <option value="Aceh">Aceh</option>
            <option value="Sumatera Utara">Sumatera Utara</option>
            <option value="Sumatera Barat">Sumatera Barat</option>
            <option value="Riau">Riau</option>
            <option value="Kepulauan Riau">Kepulauan Riau</option>
            <option value="Jambi">Jambi</option>
            <option value="Sumatera Selatan">Sumatera Selatan</option>
            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
            <option value="Bengkulu">Bengkulu</option>
            <option value="Lampung">Lampung</option>
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
            <option value="DI Yogyakarta">DI Yogyakarta</option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="Banten">Banten</option>
            <option value="Bali">Bali</option>
            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
            <option value="Kalimantan Barat">Kalimantan Barat</option>
            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
            <option value="Kalimantan Timur">Kalimantan Timur</option>
            <option value="Kalimantan Utara">Kalimantan Utara</option>
            <option value="Sulawesi Utara">Sulawesi Utara</option>
            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
            <option value="Gorontalo">Gorontalo</option>
            <option value="Sulawesi Barat">Sulawesi Barat</option>
            <option value="Maluku">Maluku</option>
            <option value="Maluku Utara">Maluku Utara</option>
            <option value="Papua">Papua</option>
            <option value="Papua Barat">Papua Barat</option>
            <option value="Papua Selatan">Papua Selatan</option>
            <option value="Papua Tengah">Papua Tengah</option>
            <option value="Papua Pegunungan">Papua Pegunungan</option>
            <option value="Papua Barat Daya">Papua Barat Daya</option>
        </select>
    </div>

    <div><label>Alamat:</label><input type="text" name="Alamat" required></div>
    <div><label>No Telpon:</label><input type="text" name="No_Telpon" required></div>
    <div><label>Password:</label><input type="password" name="Password" required></div>
    <div><label>Konfirmasi Password:</label><input type="password" name="Password_confirmation" required></div>
    <button type="submit">Register</button>
</form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
</body>
</html>