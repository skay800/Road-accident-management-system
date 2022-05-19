<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/homepage.css">
   
</head>
<body  >
    <nav class="navbar">
        <h1 class="logo">UHAI ROAD ACCIDENT MANAGEMENT SYSTEM</h1>
        <ul class="nav-links">
        <li><a class="ctn"href="NEW.php">Home</a></li>
                <ion-icon name="laptop-outline"></ion-icon>
                <li><a class="ctn" href="adminlogin.php">Admin</a></li>
                <ion-icon name="call-outline"></ion-icon>
                <li><a class="ctn"href="bot.php">Help</a></li>
                <li><a class="ctn"href="contacts.php">Contacts</a></li>
                <ion-icon name="information-circle-outline"></ion-icon>
                </ul>
              
</nav>

    <header >
        <div class="header-content">
      

            <h1>WELCOME TO OUR WEBSITE</h1>
            <a href="about.php"class="ctn">Learn more</a>
        </div>
</header>

<section>
    <div class="title">
        <h1>WHO ARE YOU?</h1>
 
            <div class="line"></div>
            <p>Click one of the links below</p>

    </div>
    <div class="row">
        <div class="col">
        <a href="login.php">A police officer</a>
            <img src="../img/police.jpg" alt=""width="200"height="250">
            <h4>Click If you want to assist citizens</h4>
        </div>
        <div class="col">
            <h4><a href="citizenhome.php">A casualty/witness</a></h4>
            <img src="../img/people.png" alt="">
            <h4>Click if you want to report an accident</h4>
        </div>
    </div>
</section>
<a href="#top">Back to the top</a>












<script>
    const menuBtn =document.querySelector('.menu-btn')
    const navlinks=document.querySelector('.nav-links')
    menuBtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu')
    })
</script>
</body>
</html>