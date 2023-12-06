<<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- CSS file -->
        <link rel="stylesheet" href="CSS/style.css">
        <!-- swiper css-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />
    </head>
    <body>
            <!-- nav bar -->
       <section class="header">
        <a href= "Home.php"  class="logo" > Travel </a>
        <nav class="navbar">
            <a href="Home.php" > Home </a>
            <a href="Book.php" > Book </a>
            <a href="Package.php" > Package </a>
            <a href="Book_From.php" > Book_From </a>
            <a href="About.php" > About </a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
        </section> 


        <div class="heading" style="background:url(Images/marek-piwnicki-MVAy8tfiGQk-unsplash.jpg) no-repeat">
            <h1> Book Now</h1>
        </div>




<section class="booking">
    <h1 class="heading-title">book yuor trip</h1>
    <form action="Book_From.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="your name.." name="name" required/>
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="email" placeholder="your email.." name="email" required/>
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="phone" placeholder="your phone.." name="phone" required/>
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="your address.." name="address" required/>
            </div>
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="your place want to visit.." name="location" required/>
            </div>
            <div class="inputBox">
                <span>howmany:</span>
                <input type="number" placeholder="your num of guest.." name="guests" required/>
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date"  name="arrivals" required/>
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date"  name="leaving" required/>
            </div>
           
            
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>




















<!-- footer --->
        <section class= "footer">
            <div class="box-container">
                <div class="box">
                    <h3> Quick links</h3>
                    <a href="Home.php" > <i class="fas fa-angel-right"></i> Home </a>
                    <a href="Book.php" >  <i class="fas fa-angel-right"></i>Book </a>
                    <a href="Package.php" >  <i class="fas fa-angel-right"></i>Package </a>
                    <a href="Book_From.php" > <i class="fas fa-angel-right"></i> Book_From </a>
                    <a href="About.php" > <i class="fas fa-angel-right"></i> About </a>
                </div>
                <div class="box">
                    <h3> extra links</h3>
                    <a href="#" > <i class="fas fa-angel-right"></i> ask question </a>
                    <a href="#" > <i class="fas fa-angel-right"></i> about us </a>
                    <a href="#" > <i class="fas fa-angel-right"></i> policy </a>
                    <a href="#" > <i class="fas fa-angel-right"></i> our terms </a>
                </div>
                <div class="box">
                    <h3> contact links</h3>
                <a href="#" > <i class="fas fa-phone"></i> 01060883466 </a>
                <a href="#" > <i class="fas fa-phone"></i> 0472550047 </a>
                <a href="#" > <i class="fas fa-envelope"></i> abdelrahmanramzy19@gmail.com </a>
                <a href="#" > <i class="fas fa-map"></i> kafrelshekh , dessouk, el-stade street </a>
                </div>
                <div class="box">
                    <h3> follow us </h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                </div>
            </div>
            <div class="credit">created by <apan> eng.abdelrahman ramzy </apan>| all righta reserved.</div>
        </section>
        






                 <!-- js swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- js file -->
        <script src="JS/script.js" async defer></script>
    </body>
</html>