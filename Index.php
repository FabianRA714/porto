<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Menyimpan data ke database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="web_portofolio.css">
</head>
<body>
    <header>
        <div class="profile">
            <img src="Foto profile.jpeg" alt="Foto Profil" class="profile-img">
            <h1>Fabian Rafif Azmi</h1>
            <h2>Siswa SMK Telkom Purwokerto</h2>
            <p>Deskripsi Singkat tentang Diri Saya</p>
        </div>
    </header>

    </form>
    <nav>
        <ul>
            <li><a href="#about">Tentang Saya</a></li>
            <li><a href="#skills">Keahlian</a></li>
            <li><a href="#educational history and Project">Riwayat Pendidikan dan pengalaman</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>

    <section id="about">
        <h2>Tentang Saya</h2>
        <p>Perkenalkan Nama Saya Fabian Rafif Azmi, Saya siswa SMK Telkom Purwokerto. Saya Lahir di Cilacap 6 November 2008, alamat saya di Perumahan Griya Satria Bantarsoka
            BLOK RD-16 RT/RW 02/11 Kecamatan Purwokerto Barat,Kabupaten Banyumas,JawaTengah,Indonesia. Bila ingin berteman dengan saya bisa Follow akun tiktok dan instagram saya yang berada 
            dibawah.
        </p>
    </section>

    <section id="skills">
        <h2>Keahlian</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Desain Canva dan Figma</li>
        </ul>
    </section>

    <section id="educational history and Project">
        <h2>Riwayat Pendidikan dan pengalaman</h2>
        <div class="educational background">
            <h3>Riwayat Pendidikan</h3>
            <p>TK YWKA Purwokerto (2011-2013),
                MI Darul Hikmah Purwokerto (2014-2019),
                SDN 1 Bantarsoka, Purwokerto (2019),
                SDN 4 Depok (2019-2020),
                SMPIT Al-Qalam, Depok (2021-2024),
                SMK Telkom Purwokerto (2024-2027).
            </p>
        </div>
        <div class="Pengalaman">
            <h3>Pengalaman</h3>
            <p>Saya membuat portofolio ini dengan menggunakan website, saya merancang sebaik mungkin agar dapat
                menarik perhatian pembaca. Selain membuat portofolio menggunakan website, saya juga bisa membuat desain canva dan figma.
            </p>
        </div>
        <div class="container">
            <h2>Kirim Pesan</h2>
            <form action="Index.php" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit">Kirim</button>
            </form>
        </div>
        </body>
        </html>
    </section>

    <footer>
        <p>&copy; 2025, Fabian Rafif Azmi. Semua hak dilindungi.</p>
    </footer>
</body>
</html>