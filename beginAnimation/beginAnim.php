<!-- <!DOCTYPE html> -->
 <!-- <html lang="zh-TW"> -->
 <!-- <head> -->
     <!-- <meta charset="UTF-8"> -->
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     <!-- <link rel="stylesheet" href="./lib/animate/animate.css"> -->
     <!-- <link rel="stylesheet" href="./css/animate.css"> -->
     <!-- <link rel="shortcut icon" href="./gundog03.ico" type="image/x-icon" /> -->
     <!-- <script src=./lib/jquery/jquery-1.9.1.min.js></script> -->
     
     <!-- <title>開頭動畫</title> -->
 <!-- </head> -->
     <style>
        body{
            width:100vw;
            display:flex;
            justify-content: center;
            flex-wrap: wrap;
        }
         body .beginAnimation{
             width:960px;
             display:flex;
             flex-direction:column;
             justify-content: center;
             
         }
     </style>
 <!-- <body> -->
     <div>
        <?php
           include "./beginAnimation/beginAnimation.php";
        ?>
     </div>

         

     
     <!-- <script>
    // $.get("https://developer.mozilla.org/zh-TW/docs/Web/HTTP/CORS",function(res){
    $.get("./temp.php",function(res){
        console.log(res)
        $("#content").html(res)
    })
     </script> -->
 <!-- </body>
 </html> -->
 
 
 