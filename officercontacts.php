<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/officercontact.css">
    
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" >
    <title>Contact</title>
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous">
    </script>
</head>
<body >

<div class="container">
    <span class="big-circle"></span>
    
    <div class="form">
        <div class="contact-info">
        <h3>Let's get in touch</h3>    
        <p class="text">Fill in this form to send us an email<p>
            <div class="info">
                <div class="information">
<img src="../img/map.png" class="icon"alt="">
<p>Gem suites apartments</p>
                </div>
                <div class="information">
<img src="../img/mail.png" class="icon"alt="">
<p>sameerakherdin@gmail.com</p>
                </div>
                <div class="information">
<img src="../img/phone.png" class="icon"alt="">
<p>+254112946092</p>
                </div>
            </div> 
            <div class="social-media">
                <p>Connect with us:</p>
                <div class="social-icon">
                <a href=""><i class="fab fa-facebook-f"></i></a>
    <a href=""><i class="fab fa-twitter"></i></a>
    <a href=""><i class="fab fa-instagram"></i></a>
    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
</div>
            <div class="contact-form">
<span class="circle one"></span>
<span class="circle two"></span>
<form class="myForm"autocomplete="off" method="POST" action="https://formsubmit.co/sameerakherdin@gmail.com" enctype="multipart/form-data"onsubmit="return validate();">
    <input type="hidden" name="_next"value="http://localhost/secondYearProject/php/officeremailsubmission.php" required>
    <h3 class="title">Contact us</h3>
    <div class="input-container focus ">
   
  
    <input type="text"name="name"class="input"placeholder="username">
    <span>Username</span>
    </div>
    <div class="input-container focus">
    <input type="email"name="email"class="input"placeholder="email">
    
    <span>Email</span>
    </div>
    <div class="input-container focus">
    <input type="tel"name="phone"class="input"placeholder="phonenumber">
    
    <span>Phonenumber</span>
    </div>
    <div class="input-container textarea focus">
    <textarea name="message" class="input" placeholder="message"></textarea>
    
    <span>Message</span>
    </div>
    <input type="submit"value="Send" class="btn">
</form>
            </div>
        </div>
    </div>

    <a href="officerhome.php">Go Back</a>
      
       
    
    <script src="app.js"></script>
 
   
</body>
</html>