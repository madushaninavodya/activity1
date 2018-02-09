<!DOCTYPE html>
<html>
    <head>
    <title>Activity1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="nav.css" rel="stylesheet" type="text/css"/>
    <link href="index.css" rel="stylesheet" type="text/css"/>
    <link href="slider.css" rel="stylesheet" type="text/css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet"> 



    <style>
        #header{
             background: #803e53; /* For browsers that do not support gradients */
    background: linear-gradient( #803e53, #fff); /* Standard syntax (must be last) */
          
            text-align: center;
            color:blue;
            font-family: 'Playball', cursive;
         

        }
        #social {
           padding-bottom: 30px;
           padding-top: 30px;
        }

        #nav{
               background: #803e53; /* For browsers that do not support gradients */
    background: linear-gradient( #803e53, #fff); /* Standard syntax (must be last) */
            padding: 10px 10px 10px 10px;
     
        }
        #logo{
            width: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }
        
    </style>
    </head>
    <body>
     
        <div class="row" id="header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3" id="social">

                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-skype"></i>
                    </div>
                    <div class="col-md-3" >
                        <h1>Beauty of Nature</h1>

                    </div>
                    <div class="col-md-6" style="padding-left:10px;">
                        <h4>0236632467||lotus@gmail.com</h4>
                    

                    </div>
                </div>
            </div>
        </div>

        
        
        
        <div class="row" id="nav">
            <div class="col-md-12">
            <div class="row" id=>
                <div class="col-md-3" >
                    <img src="images/logo5.png" alt=""/>
        </div>
                <div class="col-md-9">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">News</a></li>
                        </ul>
                    </nav>
        </div>
        </div>
        </div>
        </div>
     

        <div id="slider">
            <figure>
                <img src="images/1.jpeg" alt>
                <img src="images/2.jpeg" alt>
                <img src="images/3.jpg" alt>
                <img src="images/4.jpg" alt>
                <img src="images/5.jpg" alt>
            </figure>
        </div>
  
        <script src="fontawesome-all.min.js" type="text/javascript"></script>
    </body>
</html> 