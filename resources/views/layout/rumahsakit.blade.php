<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        /* ✅ FIX UTAMA */
        .main-wrapper {
            margin-top: 70px;
            padding: 100px 60px 40px 60px; /* kiri & kanan seimbang */
            background-color: #51c0f724;
        }

        .header-box {
            background: rgba(100, 149, 237, 0.2);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 30px;
            font-weight: bold;
            color: #163172;
        }

        .section-subtitle {
            font-size: 14px;
            color: #4b5563;
        }

        /* ✅ SLIDE FIX */
        .left-panel {
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            height: 710px;
        }

        .carousel,
        .carousel-inner,
        .carousel-item {
            height: 100%;
        }

        .map-frame,
        .cover-slide {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 0;
        }

        /* CARD */
        .hospital-card {
            background: #fff;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .hospital-title {
            font-weight: bold;
            font-size: 18px;
            color: #2246a3;
        }

        .status-open {
            background: #dcfce7;
            color: #15803d;
            padding: 5px 10px;
            border-radius: 999px;
            font-size: 12px;
        }

        .status-close {
            background: #fee2e2;
            color: #dc2626;
            padding: 5px 10px;
            border-radius: 999px;
            font-size: 12px;
        }

        .info-line {
            font-size: 13px;
            margin-top: 5px;
        }

        .btn-direction {
            background: linear-gradient(90deg, #2156f4, #0aa18f);
            color: white;
            border-radius: 999px;
            padding: 10px;
            text-align: center;
            display: block;
            text-decoration: none;
        }

        .btn-call {
            border: 1px solid #2a61f0;
            color: #2a61f0;
            border-radius: 999px;
            padding: 10px;
            text-align: center;
            display: block;
            text-decoration: none;
        }
    </style>
</head>

<body>

@php
    $allHospitals = collect($rumahSakits ?? []);
    $groupedHospitals = $allHospitals->groupBy('nama_rumah_sakit');
@endphp

<!-- ✅ GANTI KE container-fluid -->
<div class="container-fluid main-wrapper">
    <div class="row align-items-start">

        <!-- LEFT -->
        <div class="col-lg-7 pe-lg-4">
            <div class="left-panel">

                <div id="mainCarousel" class="carousel slide h-100" data-bs-ride="carousel">

                    <!-- INDICATOR -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>

                        @foreach($groupedHospitals as $hospitalGroup)
                            @php $rs = $hospitalGroup->first(); @endphp
                            @if($rs->cover)
                                <button type="button"
                                    data-bs-target="#mainCarousel"
                                    data-bs-slide-to="{{ $loop->index + 1 }}">
                                </button>
                            @endif
                        @endforeach
                    </div>

                    <!-- SLIDES -->
                    <div class="carousel-inner h-100">

                        <!-- MAP -->
                        <div class="carousel-item active">
                            <iframe class="map-frame"
                                src="https://www.google.com/maps?q=rumah sakit&output=embed">
                            </iframe>
                        </div>

                        <!-- COVER -->
                        @foreach($groupedHospitals as $hospitalGroup)
                            @php $rs = $hospitalGroup->first(); @endphp

                            @if($rs->cover)
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $rs->cover) }}" class="cover-slide">
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <!-- CONTROL -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-lg-5 ps-lg-4">

            <div class="header-box">
                <h1 class="section-title">Daftar Rumah Sakit</h1>
                <p class="section-subtitle">
                    Temukan informasi rumah sakit, lokasi, layanan, kontak, dan nomor kamar.
                </p>
            </div>

            @foreach($groupedHospitals as $hospitalGroup)
                @php $rs = $hospitalGroup->first(); @endphp

                <div class="hospital-card">

                    <div class="d-flex justify-content-between">
                        <div class="hospital-title">{{ $rs->nama_rumah_sakit }}</div>

                        @if($rs->status == 'Buka')
                            <span class="status-open">Open</span>
                        @else
                            <span class="status-close">Tutup</span>
                        @endif
                    </div>

                    <div class="info-line">Nomor Kamar {{ $rs->nomor_kamar ?? '-' }}</div>
                    <div class="info-line">⭐ {{ $rs->rating ?? '0.0' }}</div>
                    <div class="info-line">📍 {{ $rs->alamat }}</div>
                    <div class="info-line">📞 {{ $rs->nomor_kontak }}</div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($rs->alamat) }}"
                               target="_blank"
                               class="btn-direction">
                                Get Directions
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="tel:{{ $rs->nomor_kontak }}" class="btn-call">
                                Call Now
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>