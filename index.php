
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>
<div id="whole">
    <h1>愛犬健康管理アプリ</h1>
    <h2>Profile</h2>

    <!-- //プロフィール画像 -->
    <div id="prf">
        <div id="name">name:そら</div>
        <img src="img/prf.jpg" alt="" width=100px>
    </div>

    <!-- 以下フォーム-->
    <form action="write.php" method="post">

        <?php 
               $today = date('Y/m/d');
           echo $today;
         ?>     
          <dl>
              <!-- ご飯 -->
              <div id="foodwrapper">   
                  <dt class="food">food</dt>   
                  <dd><input type="text" name="food" size="7" >グラム</dd>
              </div>

              <!-- 体重 -->
              <div id="weightwrapper">
                  <dt>weight</dt>
                  <dd><input type="text" name="weight" size="7">キロ</dd>
              </div>

              <!-- お散歩 -->
              <div  id="walkwrapper">
                  <dt>walking</dt>
                  <dd><input type="text" name="walk" size="7">分</dd>
              </div>

              <!-- 体調を★で表す -->
              <div id="cdnwrapper">
                  <dt>condition</dt>
                    <dd>
                      <input type="checkbox" name="cdt[]" value="★">★
                      <input type="checkbox" name="cdt[]" value="★★">★★
                      <input type="checkbox" name="cdt[]" value="★★★">★★★
                    </dd>
              </div> 
             
             <!-- 一言コメント -->
             <div id="cmt">
                   <dt>comment</dt>
                    <dd>
                      <input type="text" name="cmt">
                    </dd>
              </div>
                  <!-- 送信ボタン -->
                  <input type="submit" value="送信">
          </dl>
        </form>
    <!-- フォーム↑ここまで -->
</div>




<script src="<https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html> 



