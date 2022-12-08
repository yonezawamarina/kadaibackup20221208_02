
<html>

<head>

</head>
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="style.css">
<body>
<div id="abc">
<div>健康管理アプリ</div>
<div>Profile</div>

<div id="prf">
<div id="name">name:そら</div>
<img src="img/prf.jpg" alt="" width=100px>
</div>


<form action="write.php" method="post">

<!-- <?php 
     $today = date('Y/m/d');
     echo $today;
?>  -->

<div id="foodwrapper">
<dt></dt>
  <div id="food">food</div>   
  <input type="text" name="food" size="7" >グラム
</div>

<div id="weightwrapper">
  <div id="weight">weight</div>
  <input type="text" name="weight" size="7">キロ
</div>

<div  id="walkwrapper">
  <div id="walk">walking</div>
  <input type="text" name="walk" size="7">分
</div>

<div id="cdnwrapper">
  <div id="cdt">condition</div>
    <div id="radio">
      <input type="checkbox" name="cdt[]" value="★">★
      <input type="checkbox" name="cdt[]" value="★★">★★
      <input type="checkbox" name="cdt[]" value="★★★">★★★
    </div>
</div> 


<div id="cmt">comment</div><input type="text" name="cmt">
<input type="submit" value="送信">
</form>
</div>



<script src="<https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html> 



