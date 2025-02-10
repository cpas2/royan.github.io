<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Kimia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            background: url('atom5.png') center/cover no-repeat;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            background: #212529;
        }
    </style>
</head>
<body>
    <header class="py-3 shadow-sm bg-white">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 text-primary fw-bold">tugas.kimia</h1>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-primary" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-primary" href="#tentang">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link text-primary" href="#struktur">Struktur</a></li>
                        <li class="nav-item"><a class="nav-link text-primary" href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="hero text-center py-5 d-flex flex-column justify-content-center align-items-center" style="height: 60vh;">
        <h2 class="display-4 fw-bold">Jelajahi Dunia Kimia</h2>
        <p class="lead">Memahami reaksi, senyawa, dan unsur yang membentuk dunia kita.</p>
        <a href="#tentang" class="btn btn-primary">Pelajari Lebih Lanjut</a>
    </section>
    
    <section id="tentang" class="py-5">
        <div class="container text-center">
            <h2 class="text-primary">Apa Itu Kimia?</h2>
            <p class="lead">Kimia adalah cabang ilmu yang mempelajari komposisi, struktur, sifat, dan perubahan materi.
            Kimia adalah cabang ilmu pengetahuan yang mempelajari struktur, komposisi, sifat, perubahan, dan interaksi zat atau materi dalam berbagai kondisi. Ilmu kimia berperan dalam memahami bagaimana suatu zat berubah menjadi zat lain melalui reaksi kimia dan bagaimana zat-zat tersebut berinteraksi dalam berbagai keadaan.
            </p>
        </div>
    </section>

    <section id ="tentang" class="py-5">
        <div class="container text-center">
            <h2 class="text-primary">Cabang-Cabang Ilmu Kimia</h2>
            <p class="lead">Kimia Organik → Mempelajari senyawa yang mengandung karbon, seperti bahan bakar, plastik, dan obat-obatan.
                Kimia Anorganik → Mempelajari senyawa yang tidak mengandung karbon, seperti logam, mineral, dan garam.
                Kimia Fisik → Menggabungkan kimia dengan fisika untuk memahami energi dan dinamika reaksi kimia.
                Kimia Analitik → Mempelajari teknik analisis zat untuk mengetahui komposisi dan kandungannya.
                Biokimia → Mempelajari reaksi kimia yang terjadi dalam makhluk hidup, seperti metabolisme dan enzim.</p>
        </div>

        <section id="tentang" class="py-5">
        <div class="container text-center">
        <h2 class="text-primary">Konsep Model Atom</h2>
        <p>Model Dalton  Atom sebagai bola pejal.
           Model Thomson  Atom seperti roti kismis dengan elektron tersebar.
           Model Rutherford  Atom memiliki inti yang bermuatan positif.
           Model Bohr  Elektron mengorbit dalam tingkat energi tertentu.
          Model Mekanika Kuantum  Elektron memiliki sifat gelombang dan partikel</p>

          <section id="tentang" class="py-5">
        <div class="container text-center">
        <h2 class="text-primary">Sejarah Tabel Periodik</h2>
        <p>Antoine Lavoisier (1789)

Lavoisier menyusun daftar unsur berdasarkan sifatnya dan membaginya menjadi logam dan nonlogam.
Meskipun cara ini cukup sederhana, namun belum mempertimbangkan hubungan lebih mendalam antara unsur-unsur.
Johann Döbereiner (1829)  Hukum Triad

Döbereiner mengamati bahwa beberapa unsur dapat dikelompokkan dalam kelompok tiga-tiga (triad) berdasarkan kemiripan sifatnya.
Contohnya adalah Litium (Li), Natrium (Na), dan Kalium (K), di mana massa atom natrium berada di antara litium dan kalium, serta memiliki sifat kimia yang mirip.
Konsep ini masih terbatas karena tidak semua unsur bisa dikelompokkan dengan cara ini.
John Newlands (1864)  Hukum Oktaf

Newlands menyusun unsur berdasarkan kenaikan massa atom, dan menemukan bahwa setiap unsur kedelapan memiliki sifat yang mirip.
Ia membandingkannya dengan tangga nada musik, di mana pola unsur berulang setiap delapan unsur.
Namun, sistem ini kurang akurat karena tidak mempertimbangkan unsur-unsur yang belum ditemukan saat itu</p>



<section id="tentang" class="py-5">
        <div class="container text-center">
        <h2 class="text-primary">Klasifikasi Unsur dalam Tabel Periodik</h2>
        <p>Logam (Sebagian besar di kiri & tengah tabel)

           Menghantarkan listrik & panas dengan baik.
            Bersifat mengkilap dan dapat ditempa.
            Contoh: Besi (Fe), Tembaga (Cu), Aluminium (Al).
            Nonlogam (Sebagian besar di kanan tabel)

            Tidak menghantarkan listrik & panas dengan baik.
            Bersifat rapuh dan tidak dapat ditempa.
            Contoh: Oksigen (O), Karbon (C), Klorin (Cl).
            Metaloid (Unsur peralihan antara logam & nonlogam)

            Memiliki sifat campuran logam dan nonlogam.
            Contoh: Silikon (Si), Boron (B), Arsenik (As).</p>

    
    <section id="struktur" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="text-primary">Struktur Atom</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h3>Atom</h3>
                        <p>Unit dasar materi yang terdiri dari inti dan elektron.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h3>Proton</h3>
                        <p>Partikel bermuatan positif (+) di dalam inti atom.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h3>Neutron</h3>
                        <p>Partikel netral (0) di dalam inti atom.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-sm">
                        <h3>Elektron</h3>
                        <p>Partikel bermuatan negatif (-) yang mengelilingi inti atom.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer id="kontak" class="text-white text-center py-4">
        <div class="container">
            <p>Hubungi Kami: info@royan.com</p>
            <p>&copy; 2025 Kimia Dunia</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
