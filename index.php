<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/png" href="Logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <title>Kedai Vegetarian Thien En</title>
</head>
<body>
    <div class="menu-bar">
        <div class="logo-section">
            <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
            <img src="Thien En/Logo.png" alt="Thien En Logo">
            <div class="text-section">
                <h1>Kedai Vegetarian Thien En</h1>
                <div class="containername">
                    <div id="welcomeMessage" class="welcome-message">
                        <!-- Welcome message content here -->
                    </div>
                </div>
            </div>
        </div>
        <ul class="menu-list">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="about.html"><i class="fa fa-info-circle"></i> About Us</a></li>
            <li><a href="menu.html"><i class="fa fa-list"></i> Menu</a></li>
            <li><a href="article.html"><i class="fa fa-newspaper"></i> Article</a></li>
            <li><a href="contact.html"><i class="fa fa-phone"></i> Contact</a></li>
        </ul>
    </div>

    <div class="firsthall">
        <h1>Kedai Vegetarian Thien En</h1><br>
        <h3 style="color: #FF5F00">Rumah Makan Vegetarian dan Vegan</h3><br>
        <img src="./fotofoto/fotoresto.JPG" class="resto" alt="Kedai Vegetarian Thien En">
    </div>
    
    <main>
        <section class="best-seller-menu">
            <div class="menu-header">
                <div class="menu-title">
                    <h2>Best Seller Menu</h2>
                    <button class="view-all"><a href="menu.html">View All</a></button>
                </div>
                <div class="carousel-container">
                    <div class="product-carousel" id="carousel">
                        <div class="product">
                            <img src="Thien En/Bakwan.png" alt="Product 1">
                            <h3>Bakwan</h3>
                            <p>Rp 15.000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Nasi Jamur Geprek.png" alt="Product 2">
                            <h3>Jamur Geprek</h3>
                            <p>Rp 18.000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Kwecap.png" alt="Product 3">
                            <h3>Kwecap</h3>
                            <p>Rp 18.000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Sushi Crispy.png" alt="Product 4">
                            <h3>Sushi Crispy</h3>
                            <p>Rp. 22,000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Sushi Udang.png" alt="Product 5">
                            <h3>Sushi Udang</h3>
                            <p>Rp. 22,000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Sushi Nori.png" alt="Product 5">
                            <h3>Sushi Nori</h3>
                            <p>Rp. 22,000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Nasgor.png" alt="Product 5">
                            <h3>Nasgor Sambal</h3>
                            <p>Rp. 17,000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Jamur geprek Moza.png" alt="Product 5">
                            <h3>Jamur Geprek Moza</h3>
                            <p>Rp. 22,000</p>
                        </div>
                        <div class="product">
                            <img src="Thien En/Tahu Walik.png" alt="Product 5">
                            <h3>Tahu Walik</h3>
                            <p>Rp. 15,000</p>
                        </div>
                        
                    </div>
                    <button class="carousel-button right-button" id="nextBtn">&#8594;</button>
                    <button class="carousel-button left-button" id="prevBtn">&#8592;</button>
                </div>
            </div>
        </section>
        <script src="index.js"></script>
    </main>


        <hr class="aligned-hr">
        <div class="review-container">
        <h1>Customer Reviews</h1>
        <?php
        include 'db.php'; // Pastikan file ini ada dan bisa diakses

        // Buat koneksi ke database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Ambil data review dari database
        $sql = "SELECT first_name, message, created_at FROM reviews ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Tampilkan setiap review
            while($row = $result->fetch_assoc()) {
                echo '<div class="review-card">';
                echo '<img src="Thien En/photo.png" alt="Person Image">'; // Ganti dengan gambar profil pengguna jika ada
                echo '<div class="content">';
                echo '<h3>' . htmlspecialchars($row['first_name']) . '</h3>';
                echo '<p>' . htmlspecialchars($row['message']) . '</p>';
                echo '<span>' . htmlspecialchars($row['created_at']) . '</span>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No reviews yet.</p>';
        }

        $conn->close();
        ?>
    </div>

        <hr class="aligned-hr">

        
        <div class="backgroud">
        <nav>
            <div class="container1">
                <section id="menu1">
                    <div class="menu-header1">
                        <h1><a href="#bagian menu"> Our Menu's</a></h1>
                    </div>
                 </section>
            </div>

            <div class="filter-container1">
                <button class="filter-btn1 active" data-filter="all" onclick="showCategory('all')">All</button>
                <button class="filter-btn1" data-filter="food" onclick="showCategory('food')">Food</button>
                <button class="filter-btn1" data-filter="snacks" onclick="showCategory('snacks')">Snacks</button>
                <button class="filter-btn1" data-filter="japanese" onclick="showCategory('japanese')">Japanese Food</button>
                <button class="filter-btn1" data-filter="korean" onclick="showCategory('korean')">Korean Food</button>
                <button class="filter-btn1" data-filter="chinese" onclick="showCategory('chinese')">Chinese Food</button>
                <button class="filter-btn1" data-filter="drinks" onclick="showCategory('drinks')">Drinks</button>
            </div>
        </nav>
        
        <section class="menu-container1">
            <div class="menu1">
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Bakwan.png" alt="Bakwan">
                    <div class="menu-item-details1">
                        <h2 id="bagian menu">Bakwan</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Batagor.png" alt="Batagor">
                    <div class="menu-item-details1">
                        <h2>Batagor</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Siomay.png" alt="Siomay">
                    <div class="menu-item-details1">
                        <h2>Siomay</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Tempe Mendoan.png" alt="Tempe Mendoan">
                    <div class="menu-item-details1">
                        <h2>Tempe Mendoan</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="chinese">
                    <img class="menu-img1" src="Thien En/Nyong Tahu.png" alt="Nyong Tahu">
                    <div class="menu-item-details1">
                        <h2>Nyong Tahu</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Pentol.png" alt="Tempe Mendoan">
                    <div class="menu-item-details1">
                        <h2>Pentol Kuah</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Nasi Jamur Geprek.png" alt="food Image">
                    <div class="menu-item-details1">
                        <h2>Nasi Jamur Geprek</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Mie Jamur Geprek.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Mie Jamur Geprek</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="korean">
                    <img class="menu-img1" src="Thien En/Raboki.png" alt="korean Image">
                    <div class="menu-item-details1">
                        <h2>Raboki</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="korean">
                    <img class="menu-img1" src="Thien En/TTetoboki.png" alt="korean Image">
                    <div class="menu-item-details1">
                        <h2>TTetoboki</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="chinese">
                    <img class="menu-img1" src="Thien En/Kwecap.png" alt="Chinese Food Image">
                    <div class="menu-item-details1">
                        <h2>Kwecap</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="chinese">
                    <img class="menu-img1" src="Thien En/Kwetiau.png" alt="Chinese Food Image">
                    <div class="menu-item-details1">
                        <h2>Kwetiau</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="japanese">
                    <img class="menu-img1" src="Thien En/Sushi Crispy.png" alt="Japanese Food Image">
                    <div class="menu-item-details1">
                        <h2>Sushi Crispy</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="japanese">
                    <img class="menu-img1" src="Thien En/Sushi Udang.png" alt="Japanese Food Image">
                    <div class="menu-item-details1">
                        <h2>Sushi Udang</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="japanese">
                    <img class="menu-img1" src="Thien En/Sushi Nori.png" alt="Japanese Food Image">
                    <div class="menu-item-details1">
                        <h2>Sushi Nori</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="japanese">
                    <img class="menu-img1" src="Thien En/Tamago Sushi.png" alt="Japanese Food Image">
                    <div class="menu-item-details1">
                        <h2>Tamago Sushi</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="japanese">
                    <img class="menu-img1" src="Thien En/Sushi Goreng.png" alt="Japanese Food Image">
                    <div class="menu-item-details1">
                        <h2>Fried Sushi</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Tahu Pedas.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Tahu Pedas</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="chinese">
                    <img class="menu-img1" src="Thien En/Sayur Capcai.png" alt="Chinese Food Image">
                    <div class="menu-item-details1">
                        <h2>Capcay</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Nasgor Petai.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Nasi Goreng Petai</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Nasgor 2.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Nasi Goreng XiangChun Petai</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Nasgor 3.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Nasi Goreng Kampung</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Nasgor.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Nasi Goreng Sambal</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Pentol Bakar.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>Pentol Bakar</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Burger.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>Burger</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/HotDog.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>HotDog</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Burshi.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>Burshi (Burger Sushi)</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Tahu Walik.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>Tahu Walik</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="food">
                    <img class="menu-img1" src="Thien En/Seblak.png" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Seblak</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="korean">
                    <img class="menu-img1" src="" alt="Food Image">
                    <div class="menu-item-details1">
                        <h2>Crispy Gochujang Chicken</h2>
                    </div>
                </div>
                <div class="menu-item1" data-category="snacks">
                    <img class="menu-img1" src="Thien En/Kentang Goreg.png" alt="Snacks Image">
                    <div class="menu-item-details1">
                        <h2>French Fries</h2>
                    </div>
                </div>
                
                
            </div>
        </section>
    </div>
        
        <script>
            function showCategory(category) {
                const items = document.querySelectorAll('.menu-item1');
                items.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn1').forEach(btn => btn.classList.remove('active'));
                // Add active class to the clicked button
                document.querySelector(`.filter-btn1[data-filter="${category}"]`).classList.add('active');
            }
        
            document.querySelectorAll('.menu-item1').forEach(item => {
                item.addEventListener('click', () => {
                    document.querySelectorAll('.menu-item1').forEach(el => el.classList.remove('active'));
                    item.classList.add('active');
                });
            });
        </script>
        

        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h4>Kedai Vegetarian Thien En</h4>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/thien_en_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="article.html">Article</a></li>
                        <li><a href="https://wa.me/6289515973228?text=Halo%20Thien%20En,%20saya%20ingin%20memesan%20makanan%20untuk%20acara%20kantor">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="contact.html">FAQ</a></li>
                        <li><a href="https://wa.me/6289515973228?text=Halo%20Thien%20En,%20saya%20ingin%20memesan%20makanan%20untuk%20acara%20kantor">Need Help</a></li>
                        <li><a href="index.html">Page</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="https://gofood.link/u/qe79x">GO-FOOD</a></li>
                        <li><a href="https://maps.app.goo.gl/7r8sA9b7tZ62shBd7">Maps</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-links">
                    <a href="#">Privacy Statement</a>
                    <a href="#">Terms Of Use</a>
                    <a href="https://maps.app.goo.gl/7r8sA9b7tZ62shBd7">Site Map</a>
                    <a href="#">Cookie Preferences</a>
                </div>
                <p>&copy; 2024 Kedai Thien En, All Rights Reserved</p>
            </div>
        </footer>
    

    <script src="script.js">
        // Ambil nama pengguna dari localStorage
        var username = localStorage.getItem('username');
        if (username) {
            // Ganti XXX dengan nama pengguna yang diambil
            document.getElementById('welcomeMessage').textContent =  username;
        } else {
            document.getElementById('welcomeMessage').textContent = 'Selamat datang!';
        }
    </script>

    
<script src="index.js"></script>

</body>
</html>