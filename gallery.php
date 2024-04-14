<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gallery</title>
     <style>
      *{
            box-sizing: border-box;
        }
         
        body {
            margin: 0;
            width:100%vh;
            background:url('img/regist.jpg') no-repeat;
            background-size:cover;
        }
        .row {
            padding:50px;
            
        }
        .col1{
            width:25%;
            padding: 10px 20px 10px;
            border: 5px solid black;
            background-color: white;
            box-shadow: 10px 10px 5px darkgreen;
            float: left;
            -ms-transform: rotate(7deg);
            -webkit-transform: rotate(7deg);
            transform:rotate(7deg);

        }
        .col1 span{
            font-weight: bold;
            font-size: 25px;
        }
         
        .col1:hover{
            transform: rotate(0deg);

        }
         
        .col2 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid black;
            background-color: white;
            box-shadow: 10px 10px 5px lightgreen;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform:rotate(-8deg);
        }
         
        .col2 span {
            font-weight: bold;
            font-size: 25px;
        }
         
        .col2:hover{
            transform:rotate(0deg);

        }
         
        .row:after {
            content: " ";
            display: table;
            clear: both;
        }
         
        @media screen and (max-width:600px) {
            .col1 {
               width: 100%;
            }
            .col2 {
                width: 100%;
            }

        }
        .he a{
           float: left;
           color: black;
           padding: 14px 16px;
           text-align: center;
           font-size: 28px;
           text-decoration: none;

        }
        .he a:hover{
           background-color: lightgreen;
           color: black;
    
        }

</style>
</head>

<body>
    <div class="he">
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>
    </div>
    <div class="row">
        
        <div class="col1">
            <img src="img/UI.JPg" width="100%">
            <span> Landing Page </span>
            <p class="desc1">The landing page of our Capstone Project it features the  ABOUT, TEAM, ACCOUNT and Timein/Timeout.</p>
        </div>
        
        <div class="col2">
            <img src="img/ads.jpg" width="100%">
            <span> Admin Page </span>
            <p class="desc2"> Admin dashboard, where it contains the list of Hk students and teachers.
            Also the record of their duty hours and rendered hours.</p>
        </div>

        <div class="col1">
            <img src="img/teach.jpg" width="100%">
            <span> Teacher Page </span>
            <p class="desc1">Teacher dashboard it contains hk student/s where they will do duty, 
            when they choose there if they want to be lab assistant or assistant facilitator. 
            Their time records and rendered hours can also be found there.</p>
        </div>

       <div class="col2">
            <img src="img/tud.jpg" width="100%">
            <span> Student Page </span>
            <p class="desc2">Student dashboard contains their DTR where they can see their duty consumption and 
            when they finish it they will receive a certificate which is proof that they have completed the duty hours given to them.</p>
        </div>

    </div>
</body>
</html>