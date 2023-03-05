<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    * {
    margin: 0;
    padding: 0;
}

/* header */

#header {
    background: black;
    padding:4px 0;
}

#header small {
    color: #fc3;
    position: relative;
    left: 20px;
    font-family: 'Courier New', Courier, monospace;
    text-transform: uppercase;
}

#header h1 {
    color: white;
    padding: 0 20px;
    font-family: 'Raleway', sans-serif;
}

#header h1 span {
    color: #fc3;
    text-transform: uppercase;
}

#landscape {
    background-color: #efefef;
}

#landscape .inline-img #cats-img {
    display: inline;
}

#landscape .inline-img {
    text-align: center;
}

.inline-img #cats-img img {
    padding: 10px 20px;
} 

#square {
    background-color: #efefef;
}

#square .inline-square .square-img {
    display: inline;
}

#square .inline-square {
    text-align: center;
}

.inline-square .square-img img {
    padding: 10px;
}

.container-l {
    text-align:center;
    position:fixed;
    top: 45%;
    left:50%;
    width:500px;
    height:350px;
    margin-top:-125px;
    margin-left:-250px;
    background:white;
    border:solid 1px white;
}

.container-s {
    text-align:center;
    position:fixed;
    top: 48%;
    left:50%;
    width:600px;
    height:470px;
    margin-top:-235px;
    margin-left:-300px;
    background:white;
    border:solid 1px white;
}

.container-s button,
.container-l button {
    position:absolute;
    right:0;
    padding: 1px 10px;
}

</style>
</head>
<body>
    <!--Cats-->

    <div id="header">
        <small>Pets Club</small>
        <h1>Photos of <span>Cats</span></h1>
    </div><!--END OF catsHarder-->

    <div id="cats">
        <div id="landscape">
            <div class="inline-img">
                <div id="cats-img">
                    <img src="pets/cats/Devon Rex.jpg" width="40%" class="1-l"> 
                </div>

                <div id="cats-img">
                    <img src="pets/cats/Maine Coon.jpg"width="40%" class="2-l"> 
                </div>
            </div>
            <div class="inline-img">
                <div id="cats-img">
                    <img src="pets/cats/russian blue.jpg" width="40%" class="3-l">
                </div>

                <div id="cats-img">
                    <img src="pets/cats/Scottish Fold.jpg" width="40%" class="4-l"> 
                </div>
            </div>
        </div><!--END OF landscape-->

            <div class="big-img">
                <img src="pets/cats/Persian.jpg" width="100%"> 
            </div><!--big-img-->

        <div id="square">
            <div class="inline-square">
                <div class="square-img">
                    <img src="pets/cats/Burmese.jpg" width="18%" class="1-s">
                </div>
                <div class="square-img">
                    <img src="pets/cats/Chinchilla Cat.jpg" width="18%" class="2-s"> 
                </div>
                <div class="square-img">
                    <img src="pets/cats/Munchkin Cat.jpg" width="18%" class="3-s"> 
                </div>
                <div class="square-img">
                    <img src="pets/cats/Siamese.jpg" width="18%" class="4-s"> 
                </div>
                <div class="square-img">
                    <img src="pets/cats/Siberian.jpg" width="18%" class="5-s"> 
                </div>
            </div>
        </div><!--END OF square-->
    </div><!--END OF cats-->

    <!--Details of Cats-->

    <div class="container-l" id="1-l">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Devon Rex.jpg" width=60%>
        <h2>Devon Rex</h2>
        <hr>
        <p>The Devon Rex is a relatively small cat, with males weighing in at 3 – 4 kg while females weigh between 2 and 3 kg. Their lifespan is 9 – 13 years.</p>
    </div>
    <div class="container-l" id="2-l">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Maine Coon.jpg" width=60%>
        <h2>Maine Coon</h2>
        <hr>
        <p>Male Maine Coons weigh between 6 and 8 kg and females weigh around 4 – 6 kg. Height can reach 41cm and they can reach up to 100cm long. The lifespan of the Maine Coon is 13 years and over.</p>
    </div>
    <div class="container-l" id="3-l">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/russian blue.jpg" width=60%>
        <h2>Russian Blue</h2>
        <hr>
        <p>The Russian Blue cat has a striking bluish grey coat that is quite unique. The average weight is 3.5 to 7 kgs with males cats heavier than females. The lifespan is about 15 to 18 years.</p>
    </div>
    <div class="container-l" id="4-l">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Scottish Fold.jpg" width=60%>
        <h2>Scottish Fold</h2>
        <hr>
        <p>Their folded ears, round face and eyes give an owl like appearance. Male Scottish Folds weight between 4 to 6kg and females weigh between 2.7 and 4 kg. The average lifespan is 12 to 14 years.</p>
    </div>
    <div class="container-s" id="1-s">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Burmese.jpg" width=50%>
        <h2>Burmese</h2>
        <hr>
        <p>The Burmese is a strong, sporty cat that holds a surprising amount of weight considering its size. Burmese cats can weigh up to 5.5 kg and can live beyond the age of 15 years old.</p>
    </div>  
    <div class="container-s" id="2-s">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Chinchilla Cat.jpg" width=50%>
        <h2>Chinchilla Cat</h2>
        <hr>
        <p>Chinchilla cats are large cats with luxurious pure white coats named after the South African Rodent. The Chinchilla weighs between 3.5 and 5.5 kg and the average lifespan is 12 to 15 years.</p>
    </div>
    <div class="container-s" id="3-s">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Munchkin Cat.jpg" width=50%>
        <h2>Munchkin Cat</h2>
        <hr>
        <p>The Munchkin cat is a relatively new breed known for its very short legs, resulting from a genetic mutation. Munchkins are a small-medium breed weighing between 2 and 4 kg and standing around 18 –20 cm tall. Their lifespan is around 12 – 14 years.</p>
    </div>  
    <div class="container-s" id="4-s">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Siamese.jpg" width=50%>
        <h2>Siamese</h2>
        <hr>
        <p>The Siamese coat is quite unique. Male Siamese Cats weigh between 4 and 6 kg and stand 29 – 31 cm tall, while females weigh around 2.5 – 4.5 kg and stand between 27 and 31 cm tall. Their lifespan is around 15 – 20 years.</p>
    </div>  
    <div class="container-s" id="5-s">
        <button class="btn btn-danger"> X </button><br>
        <img src="pets/cats/Siberian.jpg" width=50%>
        <h2>Siberian</h2>
        <hr>
        <p>Siberians are large, solid cats that take up to five years to reach their full size. Siberian cats weigh between 6.8-9.1 kg for the males and 4.5-6.8 kg for females. The average lifespan of a Siberian cat is 10 to 18 years.</p>
    </div>     

    

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="Jquery/js/jquery.js"></script>
    <script>
        $('.container-l').hide();
        $('.container-s').hide();

        $('.1-l').click(function(){
            $('#1-l').show();
        });
        $('.2-l').click(function(){
            $('#2-l').show();
        });
        $('.3-l').click(function(){
            $('#3-l').show();
        });
        $('.4-l').click(function(){
            $('#4-l').show();
        });
        $('.1-s').click(function(){
            $('#1-s').show();
        });
        $('.2-s').click(function(){
            $('#2-s').show();
        });
        $('.3-s').click(function(){
            $('#3-s').show();
        });
        $('.4-s').click(function(){
            $('#4-s').show();
        });
        $('.5-s').click(function(){
            $('#5-s').show();
        });

        $('.btn-danger').click(function(){
            $('.container-s, .container-l').hide();
        });
    </script>
</body>
</html>