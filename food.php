<!DOCTYPE html>
<html>
<head>
    <title>Pets</title>
    <style>
        * {
    margin: 0;
    padding: 0;
}

/* header */

#header {
    background: black;
    padding: 6px 30px;
    width: 95.5%;
}

#header small {
    color: whitesmoke;
    margin: 0 159px;
    font-family: 'Courier New', Courier, monospace;
}

#header h1 {
    color: white;
    margin: 0 20px;
    font-family: 'Raleway', sans-serif;
}

#header h1 span {
    color: #fc3;
    text-transform: uppercase;
}

#header #small-dog {
    margin: 0 167px;
}

#header #small-birds {
    margin: 0 173px;
}

#header #small-rabbits {
    margin: 0 215px;
}

#header #small-fishes {
    margin: 0 188px;
}

/* Cats */

#cats #landscape,
#dogs #landscape,
#birds #landscape,
#rabbits #landscape,
#fishes #landscape {
    width: 98.5%;
    margin: 20px 0px;
    padding: 10px;
    display: flex;
    flex-wrap: wrap;
    background-color: #efefef;
}

.desc {
    margin-top: 5px;
    text-decoration:underline;
}

.desc h2 span {
    color: green;
}

#cats #landscape #cats-img,
#dogs #landscape #dogs-img,
#birds #landscape #birds-img,
#rabbits #landscape #rabbits-img,
#fishes #landscape #fishes-img {
    text-align: center;
    flex-basis: 48%;
    padding: 10px;
}

.big-img {
    width: 100%;
    margin: 20px 0px 20px 0;
}

#square {
    margin:20px 0px 10px 0px;
    padding: 20px 40px;
    background-color: #efefef;
}

#square #cats-img img,
#square #dogs-img img,
#square #birds-img img,
#square #rabbits-img img,
#square #fishes-img img {
    padding: 0px;
    margin: 0 10px 0 10px;
}
    </style>
</head>
<body>
    <div id="header">
        <small>Pets Club</small>
        <h1>Food of <span>Cats</span></h1>
    </div><!--END OF catsHarder-->

    <div id="cats">
        <div id="landscape">
            <div id="cats-img">
                <img src="images/food/cf1.jpg" width="70%"> 
                <div class="desc">
                    <h2>Kitty Yums <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="cats-img">
                <img src="images/food/cf2.jpg" width="70%"> 
                <div class="desc">
                    <h2>Matisse <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="cats-img">
                <img src="images/food/cf3.jpg" width="70%">
                <div class="desc">
                    <h2>Classic 32 <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="cats-img">
                <img src="images/food/cf4.jpg" width="70%"> 
                <div class="desc">
                    <h2>Whiskas <span>$ 9.99</span</h2>
                </div>
            </div>
        </div><!--END OF landscape-->

        <div id="big-img">
            <div class="big-img">
                <img src="images/food/cfB.jpg" width="100%"> 
            </div>
        </div><!--END OF big-img-->

    <div id="dog-f"></div>
    <div id="header">
        <small id="small-dog">Pets Club</small>
        <h1>Food of <span>Dogs</span></h1>
    </div><!--END OF dogsHeader-->

    <div id="dogs">
        <div id="landscape">
            <div id="dogs-img">
                <img src="images/food/df3.webp" width="70%"> 
                <div class="desc">
                    <h2>Drools <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="dogs-img">
                <img src="images/food/df5.jpg" width="70%"> 
                <div class="desc">
                    <h2>Pedigree <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="dogs-img">
                <img src="images/food/d6.jpg" width="70%">
                <div class="desc">
                    <h2>Super Coat <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="dogs-img">
                <img src="images/food/df1.jpg" width="70%"> 
                <div class="desc">
                    <h2>Puppy Maxi <span>$ 9.99</span</h2>
                </div>
            </div>
        </div><!--END OF landscape-->

        <div id="big-img">
            <div class="big-img">
                <img src="images/food/dfB.jpg" width="100%"> 
            </div>
        </div><!--END OF big-img-->

        <div id="birds-f"></div>    
    <div id="header">
        <small id="small-birds">Pets Club</small>
        <h1>Food of <span>Birds</span></h1>
    </div><!--END OF birdsHeader-->

    <div id="birds">
        <div id="landscape">
            <div id="birds-img">
                <img src="images/food/pf1.png" width="70%"> 
                <div class="desc">
                    <h2>FEEDERS CHOICE <em>(Wild Birds)</em> <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="birds-img">
                <img src="images/food/pf2.png" width="70%"> 
                <div class="desc">
                    <h2>FEEDERS CHOICE <em>(Pigeons)</em> <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="birds-img">
                <img src="images/food/pf3.png" width="70%">
                <div class="desc">
                    <h2>FEEDERS CHOICE <em>(Parrots)</em> <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="birds-img">
                <img src="images/food/pf4.png" width="70%"> 
                <div class="desc">
                    <h2>FEEDERS CHOICE <em>(Canaries)</em> <span>$ 9.99</span</h2>
                </div>
            </div>
        </div><!--END OF landscape-->

        <div id="big-img">
            <div class="big-img">
                <img src="images/food/pfB.jpeg" width="100%"> 
            </div>
        </div><!--END OF big-img-->
        <div id="rabbits-f"></div>
    <div id="header">
        <small id="small-rabbits">Pets Club</small>
        <h1>Food of <span>Rabbits</span></h1>
    </div><!--END OF rabbitsHeader-->

    <div id="rabbits">
        <div id="landscape">
            <div id="rabbits-img">
                <img src="images/food/rf1.jpg" width="70%"> 
                <div class="desc">
                    <h2>Chipsi Sunshine <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="rabbits-img">
                <img src="images/food/rf11.png" width="70%"> 
                <div class="desc">
                    <h2>Rabbit Food Junior <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="rabbits-img">
                <img src="images/food/rf3.jpg" width="70%">
                <div class="desc">
                    <h2>SMART HEART <em>(Apple)</em> <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="rabbits-img">
                <img src="images/food/rf5.jpg" width="70%"> 
                <div class="desc">
                    <h2>SMART HEART <em>(Corn)</em> <span>$ 9.99</span</h2>
                </div>
            </div>
        </div><!--END OF landscape-->

        <div id="big-img">
            <div class="big-img">
                <img src="images/food/rfB.jpeg" width="100%"> 
            </div>
        </div><!--END OF big-img-->
        <div id="fishes-f"></div>
    <div id="header">
        <small id="small-fishes">Pets Club</small>
        <h1>Food of <span>Fishes</span></h1>
    </div><!--END OF fishesHeader-->

    <div id="fishes">
        <div id="landscape">
            <div id="fishes-img">
                <img src="images/food/ff1.jpeg" width="70%"> 
                <div class="desc">
                    <h2>Goldfish Flakes <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="fishes-img">
                <img src="images/food/ff2.jpeg" width="70%"> 
                <div class="desc">
                    <h2>Spirulina Flakes <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="fishes-img">
                <img src="images/food/ff3.jpeg" width="70%">
                <div class="desc">
                    <h2>Goldfish Formula <span>$ 9.99</span</h2>
                </div>
            </div>

            <div id="fishes-img">
                <img src="images/food/ff4.jpeg" width="70%"> 
                <div class="desc">
                    <h2>EnRiched Flakes <span>$ 9.99</span</h2>
                </div>
            </div>
        </div><!--END OF landscape-->

        <div id="big-img">
            <div class="big-img">
                <img src="images/food/ffB.jpeg" width="100%"> 
            </div>
        </div><!--END OF big-img-->
    </div><!--END OF fishes-->
</body>
</html>