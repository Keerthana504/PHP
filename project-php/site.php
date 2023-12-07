<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Project </title>
  </head>
  <body>

    <form action="site.php" method="post">
      <!-- Name: <input type="text" name="username">
      Age : <input type="number" name="age"> -->

      <!-- <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <br> -->

      <!-- Color : <input type="text" name="color">
      Plural Noun : <input type="text" name="pluralNoun">
      Celebrity : <input type="text" name="celebrity"> -->
      <!-- Password : <input type="password" name="password"> <br> -->
      <!-- Apples: <input type ="checkbox" name="fruits[]" value="apples">
      Mangoes: <input type ="checkbox" name="fruits[]" value="mangoes">
      Bananas: <input type ="checkbox" name="fruits[]" value="bananas"> -->
      <!-- <input type="text" name="student" > -->
      First Number: <input type="number" name="num1" value=""> <br>
      Second Number: <input type="number" name="num2" value=""> <br>
      Operator : <input type="text" name="op" value=""> <br>
      <input type="submit"> <br>
    </form>
    <br> <br>

    <?php $title="Project";
    $author= "Keerthana";
    include "header.php";

    sayHi($author);
    echo "Total count: $count"

    // $num1 =  $_POST["num1"];
    // $num2 =  $_POST["num2"];
    // $operator =  $_POST["op"];
    //
    // if( $operator == "+" ){
    //   echo $num1 + $num2;
    // } else if( $operator == "-" ){
    //   echo $num1 - $num2;
    // } else if( $operator == "/" ){
    //   echo $num1 / $num2;
    // } else if( $operator == "*" ){
    //   echo $num1 * $num2;
    // } else{
    //   echo "Invalid Operation";
    // }
      // function sayHi($name){
      //   echo "Hey $name";
      // }
      //
      // sayHi("Keerthana");
      // $student = $_POST["student"];
      // //associative array
      // $grades = array("Joey" => "C-" , "Monika" => "A+" , "Chandler" => "A-");
      // echo " $student : $grades[$student]";
      // $fruits = $_POST["fruits"];
      // echo $fruits[0];

      // $friends = array("Joey", "Ross", "Monika", "Chandler","Rachel","Phebie");
      // echo $friends[0];
      //echo $_POST["password"];
      // $color = $_GET['color'];
      // $pluralNoun = $_GET['pluralNoun'];
      // $celebrity = $_GET['celebrity'];
      //
      // echo "Roses are $color <br>" ;
      // echo "Voilets are $pluralNoun <br>";
      // echo "I love $celebrity <br>";

    ?>

    <!-- Answer : <?php echo $_GET["num1"] + $_GET["num2"];
    ?> -->

    <!-- Your name is <?php echo $_GET["username"] ;?>
     and age is <?php echo $_GET["age"] ;?> -->

    <!-- <?php
      $characterName = "Keerthana";
      $characterAge = 30;
      //  echo("Hello World");
      echo "<h1> $characterName's Site </h1>";
      echo "<hr>";
      echo "<p>This is my site </p>";
    ?> -->
  </body>
</html>
