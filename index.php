<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fevicon -->
  <link rel="shortcut icon" href="img/logo_icon_sourav.png" type="image/x-icon">
  <!-- link css  -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
  <title>50 EXAMPLE</title>
</head>
<body>


    <div class="container py-4">
      <h2 class="text-center mb-0  pb-5" style="text-decoration: underline;"><b>PHP [/] STRING FUNCTION</b></h2>
      <div class="row">
          <!-- 1 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-1</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."addcslashes()"."</h2>";
            $a = "Hello World How are you?";
            echo $a."<br>";
            echo addcslashes($a,'w',)."<br>";
            echo addcslashes($a,'H',);
            
            ?>
        </div>
        <!-- 1 -->
         <!-- 2 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-2</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."addslashes()"."</h2>";
            $b ="Who's Peter Griffin?";
            echo $b."This is not safe in a database query"."<br>";
            echo addslashes($b. "This is not safe in a database query.<br>");
            
            
            ?>
       </div>
       <!-- 2 -->
         <!-- 3 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-3</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            
            echo "<h2>"."bin2hex()"."</h2>";
            $c = "Hello world!";
            echo $c . "<br>";
            echo bin2hex($c) . "<br>";
            echo pack("H*",bin2hex($c));
            
            ?>
       </div>
       <!-- 3 -->
         <!-- 4 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-4</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."chunk_split()"."</h2>";
            $d = "Hello World";
            echo $d . "<br>";
            echo chunk_split($d,6,'...');
            
            ?>
       </div>
       <!-- 4 -->
         <!-- 5 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-5</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."count_chars()"."</h2>";
            $f = "Hello world!";
            echo $f ."<br>";
            echo count_chars($f,3);
            
            ?>
       </div>
       <!-- 5 -->
         <!-- 6 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-6</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."explode()"."</h2>";
            $g = "Hello world. It's a beautiful day";
            echo $g;
            print_r (explode(" ",$g));
            ?>
       </div>
       <!-- 6 -->
         <!-- 7 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-7</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."implode()"."</h2>";
            $arr = array('Hello','World!','Beautiful','Day!');
            echo implode(" ",$arr);
          
            ?>
       </div>
       <!-- 7 -->
         <!-- 8 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-8</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."join()"."</h2>";
            $arj = array('Hello','World!','Beautiful','Day!');
            echo join(" ",$arj);
            
            ?>
       </div>
       <!-- 8 -->
         <!-- 9 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-9</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."lcfirst()"."</h2>";
            echo lcfirst("Make a string's first character lowercase");
            
            ?>
       </div>
       <!-- 9 -->
         <!-- 10 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-10</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."ltrim()"."</h2>";
            $str = "Hello World!";
            echo $str . "<br>";
            echo ltrim($str,"Hello");
            
            ?>
       </div>
       <!-- 10 -->
         <!-- 11 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-11</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."md5()"."</h2>";
            $i = "md sourav";
            echo $i."<br>";
            echo md5($i);

            ?>
       </div>
       <!-- 11 -->
         <!-- 12 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-12</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."metaphone()"."</h2>";
            echo metaphone("sourav");           
            ?>
       </div>
       <!-- 12 -->
         <!-- 13 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-13</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."nl2br()"."</h2>";
            echo nl2br("Sajid Haider.\nSourav.");
            
            ?>
       </div>
       <!-- 13 -->
         <!-- 14 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-14</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."number_format()"."</h2>";
            echo number_format(100000000)."<br>";
            echo number_format(52052052020)."<br>";
            echo number_format(123123123123123)."<br>";
            
            ?>
       </div>
       <!-- 14 -->
         <!-- 15 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-15</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."rtrim()"."</h2>";
            $str = "Hello World!";
            echo $str . "<br>";
            echo rtrim($str,"World!");
            
            ?>
       </div>
       <!-- 15 -->
         <!-- 16 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-16</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."sha1()"."</h2>";
            $sha = "Sajid haider sourav";
            echo $sha . "<br>";
            echo sha1($sha);
            
            ?>
       </div>
       <!-- 16 -->
         <!-- 17 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-17</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."similar_text()"."</h2>";

            echo similar_text("Hello World","Hello Peter How are you?",);
            
            ?>
       </div>
       <!-- 17 -->
         <!-- 18 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-18</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."soundex()"."</h2>";
            $sou = "sajid haider sourav";
            echo $sou."<br>";
            echo soundex($sou);
           
            
            ?>
       </div>
       <!-- 18 -->
         <!-- 19 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-19</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."strcmp()"."</h2>";
            echo strcmp("Hello World","Hello World");

            ?>
       </div>
       <!-- 19 -->
         <!-- 20 -->
        <div class="col-6 bg-light text-center py-4 mb-3">
          <h2 class="mb-0 pb-2"><b>EXAMPLE-20</b></h2>
          <div class="line mx-auto mb-3" style="width: 200px; height: 3px; background-color: red;"></div>
        <?php
            
            echo "<h2>"."strcspn()"."</h2>";
            echo strcspn("Hello world!","w");
            
            ?>
       </div>
       <!-- 20 -->
    </div>
</div>
  

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>