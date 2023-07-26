<!DOCTYPE html>
<html manifest="cache.appcache">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Conspiracy Dots</title>
  <link rel="icon" href ="shitty.png" type ="image/x-icon">
  <style>
body, html {
    margin: 0;
    -webkit-user-select: none; /* Safari */
    -ms-user-select: none; /* IE 10 and IE 11 */
    user-select: none; /* Standard syntax */
    padding: 0;
    height: 100%;
    min-height:100%;
    max-height:100%;
    overflow: hidden;
    color:white;
  }

  #diagram {
    width: 100%;
    height: 100%;
    min-height:100%;
    max-height:100%;
    background-color: #252525;
  }
  #bar {
    position: absolute;
    display:flex;
    
    align-self: center;
    justify-content: space-between ;
    top:0;
    float:right;
    padding:0.5%;
    left:0;
    right:0;
    margin: auto;
    bottom: 90%;
    align-items: center;
    background: fixed;
    background-color: red;
  }
  .hidden {
    display: none;
    visibility: hidden;
  }

  #clickPanel {
    position: absolute;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    padding: 10px;
  }
  #nodeModification{
    display: flex;
    
    width: 20%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .label {
    fill:white;
    font-size: 12px;
    background-color: rgba(0, 0, 0, .25); 
    text-anchor: middle; /* Align text in the middle horizontally */
  }
  #descript{
    position: absolute;
    left:-5%;
    top:-5%;
    bottom:90%;
    right:100%;
    background: fixed;
    resize: none;
    background-color: rgb(69, 69, 69);
    fill:white;
    color:white;
    transition-duration: 0.5s;
  }
  #closebtn {
    position: absolute;
    left:1%;
    top:11%;
    font-size: 200%;
    font-family: "Lato", sans-serif;
    text-decoration: none;
    color:whitesmoke;
  }
  #zoomin {
    position: absolute;
    left:1%;
    top:21%;
    font-size: 200%;
    font-family: "Lato", sans-serif;
    text-decoration: none;
    color:whitesmoke;
  }
  #zoomout {
    position: absolute;
    left:1%;
    top:11%;
    font-size: 200%;
    font-family: "Lato", sans-serif;
    text-decoration: none;
    color:whitesmoke;
  }

  </style>
</head>
<body>
  <div id="diagram"></div>
  <a href="javascript:void(0)" id="closebtn" class="hidden" onclick="toggleDescript()">&times;</a>
  <!-- <a href="javascript:void(0)" id="zoomin">&times;</a> -->
  <!-- <a href="javascript:void(0)" id="zoomout">&times;</a> -->
  <textarea  type="text" id="descript" class="hidden"></textarea >
  <div id="bar">
    
    <a>Current Action: <b id="CA">Edit Dots</b></a>
    <div id="nodeModification" class="hidden">
      <h6 style="margin:0%">Change Node</h6>
      <div>
        <input id="Change Name" type="text" placeholder="Name"></input>
        <input id="Change Color" type="color" value="#FFFFFF"></input>
        <button id="delete Node">DELETE</button>
      </div>
    </div>
    
    <button onclick="linkNodes(this)" id="linker">unlink/link</button>
  </div>
  <button style="left: 45%; top:2%; position: fixed;" id="newNode" >NEW NODE</button>

  <!-- <sc zript src="https://cdn.jsdelivr.net/npm/chart.js"></script>  -->
  <!-- unused and leftover(i was going to use chart.js, but d3 is what i ended up using) -->
  <script src="D3.js"></script>
  <!-- the framework -->
  <script src="name.js"></script>
  <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyDJ93i6nbJrzuNyNIQFy8aA1V8bxDJIFPU",
    authDomain: "nodeproject-df641.firebaseapp.com",
    projectId: "nodeproject-df641",
    storageBucket: "nodeproject-df641.appspot.com",
    messagingSenderId: "500183027225",
    appId: "1:500183027225:web:ea57752061e5d84dd2e488"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
</script>
  <script><?php
// Replace 'example.bin' with the path to your binary file
// $fileFolder = '001';
// $jsons = array("center", "links", "nodes", "position");
// foreach($jsons as $index => $js){
//     echo 'const '.$js.' = '.file_get_contents($fileFolder."/".$js.'.json').";";
// }
?></script>
  <script src="diagram.js"></script>
  <!-- the main script -->
</body>
</html>
