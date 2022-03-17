
<style>

<?php
include 'core/init.php';
$userObj->updateSession();

?>
#img1{
  display: none;
}
#img2{
  display: none;
}
#img3{
  display: none;
}
#video {
  border: 1px solid black;
  box-shadow: 2px 2px 3px black;
  width:320px;
  height:240px;
}

#photo {
  border: 1px solid black;
  box-shadow: 2px 2px 3px black;
  width:320px;
  height:240px;
}

#canvas {
  display:none;
}

.camera {
  width: 340px;
  display:inline-block;
}

.output {
  width: 340px;
  display:inline-block;
  vertical-align: top;
}

#startbutton {
  display:block;
  position:relative;
  margin-left:auto;
  margin-right:auto;
  bottom:32px;
  background-color: rgba(0, 150, 0, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.7);
  box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
  font-size: 14px;
  font-family: "Lucida Grande", "Arial", sans-serif;
  color: rgba(255, 255, 255, 1.0);
}

.contentarea {
  font-size: 16px;
  font-family: "Lucida Grande", "Arial", sans-serif;
  width: 760px;
}

</style>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
<div class="contentarea">
  <h1>
    WebRTC: photo capture 
  </h1>
  
  <div class="camera">
    <video id="video">Video stream not available.</video>
    <button id="startbutton"></button> 
  </div>
  <canvas id="canvas">
  </canvas>
  <div class="output">
    <img id="photo" alt="The screen capture will appear in this box."> 
  </div>


  <div
    className='container'>
    <?php
    if($userObj->userID==1){
      echo 'Id  Name  Status  Face';
    }
    
    ?>
      <p className='element' id='n1'> </p>
      <p className='element' id='n2'> </p>
      <p className='element' id='n3'></p>

      <button onclick="togell()" id='btn1'>Monitor</button>
      <img id = 'img1' >

      
      <button onclick="togell2()" id='btn2'>Monitor</button> 
      <img id = 'img2' >
      
      
      
      <button onclick="togell3()" id='btn3'>Monitor</button>
      <img id = 'img3' >
    
</div>



  <button onclick="sendImg()">
  
  <?php


echo $userObj->userID;


?>
  </button>
</div>


  </body>
  <script>
              const conn = new WebSocket('ws://192.168.137.121:8080/?token=<?php
              echo $userObj->sessionID;
              ?>');
          </script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
