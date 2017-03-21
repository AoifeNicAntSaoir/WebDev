<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Simple Video Tag</title>
    <meta charset='utf-8'>
  <style type="text/css">
  body {
  margin: 0%;
  padding: 0%;
  font-family: Arial, Helvetica, sans-serif;
  }
  video {
  width: 70%;
  margin-left: 15%;
  height: auto;
  }
  
  iframe {
  width: 60%;
  height: auto;
  margin-left: 20%;
  }
  
  h1{
  text-align: center;
  color: green;
  padding-bottom: 30px;
  border-bottom: 1px solid;
  }
  
    h2{
  text-align: center;
  color: blue;
  padding-bottom: 10px;
  }
  
  </style>
  </head>
    
  <body>
  
  <h1>Aoife's Favorite Videos</h1>

  <h2>Mike the frog video</h2>
  <video controls loop>     
       <source src="mikethefrog.mp4">   
      <source src="mikethefrog.ogv">   
           <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English" default>
      <p>Sorry your browser does not support the HTML5 video tag</p>
  </video>
  
  
<iframe src="https://www.youtube.com/embed/uhJv3BYH0zo" style="border:0;"
 allowfullscreen></iframe>

 
 <?php
 echo "Hi";
 ?>
  </body>
</html>
