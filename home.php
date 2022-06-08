<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/baju.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry mahkamah </title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>


    <div class="header">
        <nav id="navbar">
            <img src="assets/css/baju.png" class="logo">
            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="pelanggan.php">About</a></li>
                <li>Service</li>
                <li>Contact</li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <p class="text">
    <br><strong><font size="9">Kamu Tinggal atau Lagi Main di Sibolga?</font></strong> <br>
<br> Trus Punya Masalah Seperti Ini : <br>

<br> 1. Baju kotor menumpuk gak sempat nyuci <br>

<br> 2. Stok baju bersih habis pas lagi butuh <br>

<br> 3. Mau nyuci males pergi ke Laundry <br>

<br> 4. Hasil nyuci di Laundry gak bersih, kurang fresh dan lama. <br>

<br> 5. Bingung nyari tempat laundry yg terpercaya <br>

<br> Tenang, @laundrymahkamah menghadirkan pengalaman mencuci yg bisa mengatasi masalah-masalah kamu diatas.

Ada FREE Antar Jemput Laundry loh buat kamu.. Ayo tunggu apalagi, hubungi kami sekarang juga di: <br>

<br> WhatsApp: 082293830315 <br>
<br> Atau DM @laundrymakamah <br>
    </p>


    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }

    </script>
    
</body>
</html>