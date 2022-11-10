<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$correct = 0;
$total = 5;
echo "Name: " . $name . "<br>";

if($Q1 == "Japan"){
  $correct++;
}
if($Q2 == "little black cat"){
  $correct++;
}
if($Q3 == "Pigs"){
  $correct++;
}
if($Q4 == "Wolf"){
  $correct++;
}
if($Q5 == "Ponyo"){
  $correct++;
}
echo "Question 1: Where is Studio Ghibli from?<br>";
echo "Your answer: ".$Q1."<br>";
echo "Corrent answer: Japan <br><br>";
echo "Question 2: What animal is Kiki's pet?<br>";
echo "Your answer: ".$Q2."<br>";
echo "Corrent answer: little black cat <br><br>";
echo "Question 3: What were Chihiro's parents turned into?<br>";
echo "Your answer: ".$Q3."<br>";
echo "Corrent answer: Pigs <br><br>";
echo "Question 4: What animal does Princess Mononoke ride?<br>";
echo "Your answer: ".$Q4."<br>";
echo "Corrent answer: Wolf <br><br>";
echo "Question 5: Which Studio Ghibli film is based on The Little Mermaid?<br>";
echo "Your answer: ".$Q5."<br>";
echo "Corrent answer: Ponyo <br><br>";
$percent = $correct/$total *100;
echo "Score: ".$percent."%";

?>