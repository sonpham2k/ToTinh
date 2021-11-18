<!DOCTYPE html>
<?php
session_start();
// include('connect.php');
// if($_SESSION["login"] != true){
//     header("location:admin.php");
// }
?>
<html>
<head>
    <title>Bí mật</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="love.css" />
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>
        
        <form method="post" action="love2.php">
        
        <div>
            <label class="labelNhap" type = "text" >
            Tao hỏi mày cái này, mày phải trả lời thật lòng đấy nhé nghe chưa. Không trả lời thật lòng đánh bỏ mẹ mày đấy!!!
            </label>     
        </div>
       

        <input type="submit" name="btn_ok" value="OK ^^" class="input"> 
        
        </form> 
           
  
</body>
</html>