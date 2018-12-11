<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="mychart.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>chart of results</title>

  </head>
  <body>

    <header>
     <div class="container">
       <h1>室温測定</h1>
     </div>

   </header>

   <div class="main">
     <div class="left-container">
      <p>温度ログリスト</p>

      <?php
        // ディレクトリのパス
        $dir = "./log/";
        echo '<ul>';

        if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
                while( ($file = readdir($handle)) !== false ) {
                        if( filetype( $path = $dir . $file ) == "file" ) {
                          // $file: ファイル名
                          // $path: ファイルのパス
                          echo "<li>{$file}</li>";
                        }
                }
        }

        echo '</ul>';
      ?>

     </div>


     <div class="main-container">
      <!--ここにグラフが挿入されます-->
       <div style="width: 100%; height: 100%;">
        <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
       </div>
     </div>
   </div>


　 <div class="container">
       <h1>カメラ</h1>
   </div>

   <div class="main">
       <div class="left-container">
           <p>カメラ</p>
       </div>
       <div class="main-container">


       </div>
   </div>


</body>
</html>
