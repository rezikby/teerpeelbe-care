<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
  

    <div class="container">
   

    <div class="main">
      
        <h1>
             <i class="fas fa-clinic-medical"></i>
        Terpelebe <span>Care</span>
    
   
    </h1>

        <div class="kes">
            <p>KESEHATAN DIGITAL #1 INDONESIA</p>
        </div>

        <div class="judul">
            <h1>Satu Platform
Untuk Semua
Kebutuhan Sehat</h1>

                  <div class="texs">
                <p>Bergabung dan dapatkan akses ke dokter terbaik, diagnosis AI canggih, komunitas kesehatan, dan layanan inklusif untuk semua.</p>
            </div>
        </div>
    </div>

<div class="form-wrapper">
   <form action="/login" method="POST">

    
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    
       <div class="kata">
                <a href="{{ route('register') }}" 
                   class="{{ request()->routeIs('register') ? 'aktif' : '' }}">
                   Register
                </a>

                <a href="{{ route('login') }}" 
                   class="{{ request()->routeIs('login') ? 'aktif' : '' }}">
                   Login
                </a>
            </div>


        @csrf
        <div>
            <label>Username:</label>
            <input type="text" name="Username" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="Password" required>
        </div>
        <button type="submit">Login</button>
         <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
    </form>
</div>

   
</body>
</html>