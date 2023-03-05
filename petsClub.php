<!DOCTYPE html>
<html>
<head>
    <title>Pets Club</title>
    <style>     
* {
    margin: 0;
    padding: 0;
}

/* Header */

#header {
    background-color: black;
    padding: 17px;
}

/*#header nav ul li a.logo {
    padding: 5px;
    border: solid 1px white;
    color: #fc3;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    letter-spacing: 1px;
    text-decoration: none;
}

#header nav ul li a.logo:hover {
    color: white;
    border: solid 1px #fc3;
    text-decoration: none;
}*/

#header nav ul li {
    display:inline;
    padding:2px;
}

#header nav ul{
    text-align:center;
}

/*#header nav ul div.hidden li {
    padding:8px;
}*/

#header nav ul li a {
    text-decoration: none;
    color: #fc3;
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
    text-transform: uppercase;
    padding:0 10px
}

#header nav ul li a:hover {
    color: black;
    background-color:#fc3;
    padding:3px 5px;
    border-radius:2px;
    font-weight:bolder;
}

/* Title */

#title {    
    text-align: center;
    padding: 130px;
    background: rgba(29, 29, 29, 0.815);
    background-size: cover;
}

#title1 {
    background: url('images/petss.jpeg');
    background-size: cover;
    margin: 2px 0 5px 0;
}

#title h1.logo1 {
    border: solid 1px white;   
    margin: 0 auto;
    width: 18%;
    color: #fc3;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    letter-spacing: 1px;
    padding: 5px;
}

#title p {
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
    font-size: 19px;
    text-transform: uppercase;
    color: white;
    letter-spacing: 1px;
    padding: 6px;
}

#title p.p {
    margin: 10px 0 0px 0;
}

/* Headings */

.title-text {
    margin: 0 38px;
}

.title-text p {
    color: rgba(207, 157, 5, 0.986);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 0 120px;
}

.title-text h2 {
    font-family: Arial, Helvetica, sans-serif;
}


#aboutPets1 {
    background: url('images/bg55.png');
    padding: 20px;
    border-top: solid 1px black;
    border-bottom:solid 1px black;
}

.aboutPets-img {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}

#journey {
    text-align: center;
}

#journey h1 {
    color: rgba(226, 173, 15, 0.986);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 10px 0 5px 0;
    font-size: 26px;
    text-decoration: underline;
}

#journey p {
    color: black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    letter-spacing: 1px;
    padding: 10px 100px;
    margin: 0 40px;
}


/* Adopt Pets */

#adopt {
    width: 100%;
    padding: 20px 0;
    background: #efefef;
}

#adopt-service {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}

.adopt-img {
    text-align: center;
    position: relative;
}

.adopt-img img {
    padding: 10px 10px;
    border-radius: 7px;
}

.adopt-img:hover .service-desc {
    bottom: 10%;
    opacity: 1;
}

p.note {
    font-size: 12px;
    border: solid 1px black;
    margin: 10px 34px 0 34px;
    padding: 2px;
    width: 19%;
}

/* Book Pets */

#bookPets {
    margin: 0 auto;
    width: 65%;
    border: solid 1px black;
    background: url('images/dog21.jpeg') no-repeat;
    background-size: cover;
}

#bookpets-o {
    background: rgba(0, 0, 0, 0.644);
    padding: 20px 70px;
}

.bookpets-h1 {
    text-align: center;
    color: rgba(175, 133, 6, 0.986);
    border: solid 1px white;
    width: 27%;
    margin: auto;
    font-family: cursive;    
}

#bookPets form input,
#bookPets form select,
#bookPets form button {
    margin: 10px;
    padding: 5px;
}

.bookPets {
    font-family: "Fira Sans", sans-serif;
    color: white;
    background-color: rgba(175, 133, 6, 0.986);
    border: solid 1px white;
    border-radius: 3px;
}

/* Pets Videos */

#video-section {
    margin: 20px 0px;
    padding: 0px 0px;
    text-align: center;
    background: url('images/bgvv.jpg') no-repeat;
    background-size: cover;
}

.videos1 video  {
    padding: 170px 0 20px 0;
    margin: 20px;
}

.videos2 video  {
    padding: 0px 0 160px 0;
    margin: 30px;
}

/* Pets Food */

.title-text-p {
    margin-left: 15px;
}

#service {
    width: 100%;
    padding: 20px 0;
    background: #efefef;
}

.service-box {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
    
.single-service {
    /*flex-basis: 48%;*/
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
}

.single-service img {
    padding: 10px 10px;
    border-radius: 7px;
}

.overlay {
    width:100%;
    height: 100%;
    position: absolute;
    top: 0;
    border-radius: 7px;
    cursor: pointer;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: 1s;
    /*linear-gradient(rgba(0,0,0,0.5),#fc3)*/
}

.single-service:hover .overlay,
.adopt-img:hover .overlay {
    opacity: 1;
}

.service-desc {
    width: 80%;
    position: absolute;
    bottom: 40%;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}

hr {
    background: white;
    height: 2px;
    border: 0;
    margin: 10px auto;
    width: 100%;
}

.service-desc p {
    font-size: 14px;
    color: white;
    font-weight: bold;
}

.service-desc p a {
    text-decoration: none;
    color:#fc3;
    font-size: 18px;
}

.service-desc p a:hover {
    text-decoration: underline;
}

.single-service:hover .service-desc {
    bottom: 30%;
    opacity: 1;
}

.service-desc h3 {
    color: white;
    font-family: cursive;
}

p.note-1 {
    font-size: 12px;
    border: solid 1px black;
    margin: 0px 34px 0 34px;
    padding: 2px;
    width: 19%;
}

/* Order Food */

#bookFood {
    margin: 20px auto;
    width: 65%;
    border: solid 1px black;
    background: url('images/feed21.jpeg') no-repeat;
    background-size: cover;
}

#bookFood-o {
    background: rgba(0, 0, 0, 0.644);
    padding: 20px 70px;
}

.bookFood-h1 {
    text-align: center;
    color: rgba(175, 133, 6, 0.986);
    border: solid 1px white;
    width: 27%;
    margin: auto;    
    font-family: cursive;
}

#bookFood form input,
#bookFood form select,
#bookFood form button {
    margin: 10px;
    padding: 5px;
}

.bookPets {
    font-family: "Fira Sans", sans-serif;
    color: white;
    background-color: rgba(175, 133, 6, 0.986);
    border: solid 1px white;
    border-radius: 3px;
}

.bookPets:hover {
    cursor: pointer;
    text-decoration: underline;
    color: black;
}

#bookPets form p,
#bookFood form p {
    color: white;
    padding: 10px;
}
/* Footer */

#footer {
    background: black;
    color: white;
    text-align: center;
}

#footer h2.SM,
#footer h2.WO,
#footer h2.NL {
    text-align: center;
    margin: 10px auto;
} 

#footer h2.SM {
    font-family: cursive;
    padding: 15px 20px 5px 20px;
    width: 23%;
    color: rgba(175, 133, 6, 0.986);
}

.links {
    margin:30px 20px 0 20px;
}

.links a {
    width: 150px;
    font-weight: bold;
    text-decoration: none;
    display: inline;
    color: white;
    border: solid 1px white;
    padding: 7px 10px;
    margin: 18px;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}

.links a span {
    width: 0%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    z-index: -1;
    transition: 0.5s;
}

.links a:hover span {
    width: 100%;
}

.links a:hover {
    color: black;
    font-weight: bold;
}

#footer .hr-footer {
    width: 100%;
    height: 1px;
}

#footer h2.WO {
    font-family: cursive;
    padding: 30px 20px 0px 20px;
    width: 15%;
    color: rgba(175, 133, 6, 0.986);
}

#footer .weOffer p {
    margin: 0px 20px;
}

#footer .weOffer p a {
    text-decoration: none;
    color:white;
    font-weight:bold;
    font-size:20px;
}

#footer .weOffer p a:hover {
    text-decoration: underline;
}

#footer h2.NL {
    font-family: cursive;
    padding: 30px 20px 0px 20px;
    width: 10%;
    color: rgba(175, 133, 6, 0.986);
}

#footer .newsletter p {
    margin: 0 20px;
}

#footer form input[type="email"] {
    margin: 15px 20px;
    padding: 3px;
}

#footer form .bookPets {
    padding: 4px 6px;
    font-size: 12px;
    border-radius: 2px;
}

#footer p.footNote {
    padding: 10px 20px 25px 20px;
    text-align: center;
}
</style>
</head>
<body>

    <div id="header">
        <nav>
            <ul>
            <!--    <li><a href="#" class="logo">Menu</a></li>
                <div class="hidden">-->
                <li><a href="#header">Home</a></li>
                <li><a href="#adopt">Pets</a></li>
                <li><a href="#service">Food</a></li>
                <li><a href="#aboutPets">About us</a></li>
                <li><a href="#footer">Contact Us</a></li>
                </div>
            </ul>
        </nav>
    </div>

    <div id="title1">
        <div id="title">
            <h1 class="logo1">PETS CLUB</h1><br><br>
            <p class="p">Welcome to PetsClub.com</p><br>
            <p class="p">Here, You can see all about pets</p><br>
        </div><!--END OF title-->   
    </div><!--END OF title1-->

    <div id="aboutPets">
        <div id="aboutPets1">
            <div class="aboutPets-img">
                <img src="images/groom2.jpg" width="220px">
                <img src="images/train.jpeg" width="220px">
                <img src="images/feed.jpeg" width="220px">
                <img src="images/play.jpeg" width="220px">
            </div>   
            <div id="journey">
                <h1>About us</h1>

                <p>Cras adipiscing enim eu turpis egestas pretium aenean pharetra magna. Tempus uran et pharetra pharetra massa massa uultricles mi quis. Ut faucibus pulvinar elementum integer enim neque volutpat. Argue mauris augue neque gravida in. Venenatisi cras sed feils eget velit aliquet sagittis. Morbi leo uran molestie at. </p>
            </div>
        </div>  
    </div>  

    <section id="adopt">
        <div class="title-text">
            <p>Adopt Pets</p>
            <h2>Here you can see</h2>
        </div>

        <div id="adopt-service">
            <div class="adopt-img">
                <img src="images/cat11.jpeg" width="200px">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Cats</h3>
                    <hr>
                    <p>The cat is a domastic species of small carnivorous mammal.<a href="pets.php ">See more...</a></p>
                </div>
            </div>
            <div class="adopt-img">
                <img src="images/dog22.jpeg" width="200px">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Dogs</h3>
                    <hr>
                    <p>The dogs is domesticated descendant of the wolf which is characterized by upturning tail.<a href="pets.php #dog-h">See more...</a></p>
                </div>
            </div>
            <div class="adopt-img">
                <img src="images/parrot33.jpeg" width="200px">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Birds</h3>
                    <hr>
                    <p>Birds are believed to be one of the most intelligent species.<a href="pets.php #small-birds">See more...</a></p>
                </div>
            </div>
            <div class="adopt-img">
                <img src="images/rabits44.jpeg" width="200px">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Rabbits</h3>
                    <hr>
                    <p>Rabbits are the crepuscular, that is they are most active at the dawn and dusk.<a href="pets.php #small-rabbits">See more...</a></p>
                </div>
            </div>
            <div class="adopt-img">
                <img src="images/fishes55.jpeg" width="200px">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Fishes</h3>
                    <hr>
                    <p>Fishes are popular pets and some kinds are easy to take care of. Pet fish are kept in glass tank.<a href="pets.php #small-fishes">See more...</a></p>
                </div>
            </div>
        </div>
        <p class="note">NOTE &colon; Click on the given images to know more !!</p>
    </section><!--END OF adoptPets-->
<br>
    <div id="bookPets">
        <div id="bookpets-o">
        <h1 class="bookpets-h1">Book Here</h1>

        <form action="petsClub.php" method="get">
                <input type="text" placeholder="Enter Your Name" name="name1" required><br>

                <input type="email" placeholder="Enter Your Email" name="email1" required><br>

                <select name="options1">
                    <option disabled selected>Choose one option</option>
                    <option>Dog</option>
                    <option>Cat</option>
                    <option>Bird</option>
                    <option>Rabbit</option>
                    <option>Fish</option>
                </select>
                <br>
                <button class="bookPets" name="submit1">Submit</button>
                <p>Enter your details and click on submit button. You will recieve a mail with the stock we have available.</p>
        </form>
        </div>
        <?php
        require_once "dbconnection.php";
        if(isset($_GET['submit1'])){
            $date=date('Y-m-d');
            $ins=$conn->prepare("INSERT INTO `pets` (`id`,`name`,`email`,`catagory`,`date`)
            VALUES(null,:name1,:email1,:catagory1,:date1)");
            $ins->bindParam(':name1',$_GET['name1']);
            $ins->bindParam(':email1',$_GET['email1']);
            $ins->bindParam(':catagory1',$_GET['options1']);
            $ins->bindParam(':date1',$date);
            $ins->execute();
            if($ins->rowCount()){
                echo "<script>
                alert ('You will recieve an email soon');
                window.location.href='petsClub.php';
                </script>";
            }
            else{
                echo "error";
            }
        }
        ?>
    </div><!--END OF  bookPets-->

<section id="video-section">
    <div class="videos">
        <div class="videos1">
        <video src="videos/cat.mp4" autoplay loop controls width="24%"></video>
        <video src="videos/dog.mp4" autoplay loop controls width="24%"></video>
        <video src="videos/parrot.mp4" autoplay loop controls width="24%"></video>
        </div>
        <div class="videos2">
        <video src="videos/rabbit.mp4" autoplay loop controls width="24%"></video>
        <video src="videos/fish.mp4" autoplay loop controls width="24%"></video>
        </div>
    </div>    
</section><!--video-section-->

<section id="service">
    <div class="title-text">
        <p class="title-text-p">Pets Food</p>
        <h2>We Provide better</h2>
    </div>
    
    <div class="service-box">
        <div class="single-service">
            <img src="images/catfood.jpeg" width="200px">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Cat food</h3>
                <hr>
                <p><a href="food.php">Click here</a> to see more cats food collection.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/dogfood.jpeg" width="200px">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Dog food</h3>
                <hr>
                <p><a href="food.php #dog-f">Click here</a> to see more dogs food collection.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/rabbitfood1.jpeg" width="200px">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Rabbit food</h3>
                <hr>
                <p><a href="food.php #rabbits-f">Click here</a> to see more rabbits food collection.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/fishfood.jpeg" width="200px">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Fish food</h3>
                <hr>
                <p><a href="food.php #fishes-f">Click here</a> to see more fishes food collection.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/parrotfood.jpeg " width="200px">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Birds food</h3>
                <hr>
                <p><a href="food.php #birds-f">Click here</a> to see more parrots food collection.</p>
            </div>
        </div>
    </div>
    <p class="note-1">NOTE &colon; Click on the given images to know more... </p>
</section><!--END OF service-box-->

    <div id="bookFood">
        <div id="bookFood-o">
            <h1 class="bookFood-h1">Order Here</h1>
    
        <form action="petsClub.php" method="get">
                <input type="text" placeholder="Enter Your Name" name="name2" required><br>

                <input type="email" placeholder="Enter Your Email" name="email2"  required><br>

                <select name="options2">
                    <option disabled selected>Choose one option</option>
                    <option>Cat Food</option>
                    <option>Dog Food</option>
                    <option>Birds Food</option>
                    <option>Rabbit Food</option>
                    <option>Fish Food</option>
                </select>
                <br>
                <button class="bookPets" name="submit2">Submit</button>
                <p>Enter your details and click on submit button. You will recieve a mail with the stock we have available.</p>
        </form>
        </div>

        <?php
        require_once "dbconnection.php";
        if(isset($_GET['submit2'])){
        $date=date('Y-m-d');
        $ins=$conn->prepare("INSERT INTO `food` (`id`,`name`,`email`,`catagory`,`date`)
        VALUES(null,:name2,:email2,:catagory2,:date2)");
        $ins->bindParam(':name2',$_GET['name2']);
        $ins->bindParam(':email2',$_GET['email2']);
        $ins->bindParam(':catagory2',$_GET['options2']);
        $ins->bindParam(':date2',$date);
        $ins->execute();
        if($ins->rowCount()){
            echo "<script>
            alert ('Submitted Succefully !!');
            window.location.href='petsClub.php';
            </script>";
        }else{
            echo "error";
        }
        }
        ?>
    </div><!--END OF bookFood-->

    <div id="footer">
        <h2 class="SM">Connect with Social Media</h2>
        <div class="links">
        <a href=""><span class="fb"></span>Facebook</a>
        <a href=""><span class="tw"></span>Twitter</a>
        <a href=""><span class="ig"></span>Instgram</a>
        <a href=""><span class="yt"></span>Youtube</a>
        </div>

        <div class="weOffer">
        <h2 class="WO">Contact Us</h2>
        <p>For Any Problem Contact us <a href="#">petsclub@gmail.com</a></p>
        </div>

        <div class="newsletter">
        <h2 class="NL">NewsLetter</h2>
        <p>Subscribe to our Newsletter to get news.</p>
        <p>Amazing offers &amp; more...</p>
        </div>
        <form>
            <input type="email" placeholder="Enter Your Email..." required>
            <input type="submit" class="bookPets">
        </form>

        <p class="footNote">&copy; www,petsclub.com | All Right Reserved</p>

    </div><!--END OF footer-->
    <script src="Jquery/js/jquery.js"></script>
    <script></script>
</body>
</html>