
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/fc9281e832.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.jpeg">
    <link rel="stylesheet" href="personal.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SELF</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
           <ul>
                <li><a href="personal.html" title="GO TO HOME PAGE">HOME<i class="fa-regular fa-house"></i></a></li>
                <li><a href="about_me.html" title="GO TO ABOUT ME PAGE">ABOUT-ME<i class="fa-solid fa-person"></i></a></li>
                <li><a href="my_project.html" title="GO TO MY PROJECT PAGE">MY-PROJECT<i class="fa-solid fa-suitcase"></i></a></li>
                <li><a href="contact_me.php" title="GO TO CONTACT ME PAGE">CONTACT-ME<i class="fa-solid fa-phone"></i></a></li>
            </ul>
            <h1 style="text-align: center; color:white" title="Personal portfolio"><u>PERSONAL PORTFOLIO WEBSITE</u></h1> 
            </nav>
            <button id="themeToggle">🌙 Dark Mode</button>
    </header>
    <main class="main">
        <aside class="aside">
           <hr> <div class="picha"><img 
  src="haina background.png"  alt="Logo"></div>
<hr>        
</aside>
        <section class="section">
            <hr>
        <center>
            <form action="SUBMIT.php" method="post">
                <label for="name">YOUR FULL NAME</label>
                <br><input type="text" name="fname" id="name">
                 <br><label for="email">YOUR EMAIL</label>
                <br><input type="email" name="email" id="email">
                <br><label for="phone">PHONE NUMBER</label>
                <br><input type="tel" id="phone" name="phone">
                <p>GENDER</p>
                <label for="boy">MALE</label>
                <input type="radio" id="boy" value="male" name="gender">
                <br><label for="girl">FEMALE</label>
                <input type="radio" id="girl" name="gender" value="female">
                <br><p>ANY COMMENT PLEASE</p><textarea name="text" >please text something...</textarea>
                <br><input type="submit" name="submit" value="send data">
                
            </form>
            </center>
        <hr>
        <p>Thank you for your interest in reaching out to me
            . This page provides an opportunity to connect, ask questions,
             or<br> discuss ideas related to Information Technology, software development,
              or web design. I value communication and believe collaboration plays a key
               role in learning and professional growth.</p>

<p>If you would like to know more about my projects, academic background, 
or technical skills, feel free to contact me.</p>
<hr>
        </section>
    </main>
   <footer class="footer">
    <p><u><img src="logo.jpeg" alt="developer-image"><strong>SWALEHE MUHAMMED HAJI <br>FULL STACK DEVELOPER<u></strong></p>
  <h5>&copy; SWALEHE MUHAMMED HAJI 2026. ALL RIGHTS RESERVED.</h5>
  <p>
    <a href="#">LinkedIn</a> | 
    <a href="#">GitHub</a> | 
    <a href="#">Email</a>
  </p>
</footer>
<script src="theme.js" defer></script>
</body>
</html>