<?php
session_start();
if(!isset($_SESSION['username'])){
header('Location:index1.php');
 exit();
}
//include 'db_con.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tutorial</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="javascript.js"></script>
        <script>
        
function speak(){
    var audio = new Audio();
audio.src ='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q=Hello%20World';
audio.play();
}
        </script>
       
    </head>
    <body>
        
        <header>
            <nav>
                <div class="main_wrapper">
                   <!-- <a href="select.php"> HOME</a>-->
                     <br>
                     <a href="logout1.php"> Logout</a> 
                 <!--<a href="select.php"> home</a>-->
                 <h2>   TUTORIAL </h2>
                 
               </div>
            </nav>
        </header>
          
        <div>
       <center>
           
           <div>
               
               <h3 id="tuhead"> WATER REACTION</h3>
               <p id="tupar">
                   <strong>WATER REACTIONS:</strong><br><br>
               
                   metal oxide+water-->metal hydroxide <br><br>
                   non-metal oxide+water-->oxyacid <br><br>
                   salt containing an ion that is astronger base than hydroxide ion+water-->metal hydroxide+conjugate acid of an ion <br><br>
                   non-metal halide or oxyhalide+water-->oxyacid+hydrolic acid <br><br>
                   
                   
               
                   
               </p>
               <a href="select.php"> skip</a>
           </div>
           
           <footer id="tufo">
               <a href="tutorialreac.php">
                   <img src="backbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go back">
</a>
              <!-- <button type="submit" name="submit" id='tubut' data-toggle="tooltip" data-placement="left" title="click to go to next page" onclick="location.href='tutorialreac.php'"><img src="forwardbut.gif" alt=/> </button> <br><br>-->
                <a href="tucombi1.php">
                    <img src="forwardbut.gif" alt="" style="width:42px;height:42px;border:0;" data-toggle="tooltip" data-placement="left" title="click to go to next page"><br><br>
</a>
           <a href="select.php"> home</a> 
           
               
           </footer>




                                                                                                                                                                                                  