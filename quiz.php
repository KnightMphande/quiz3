<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="quizLayout.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{
            background-image:url(https://i.pinimg.com/736x/08/bb/27/08bb277c3580a8d64df796882ad70aff.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .content{
            background: white;
            width: 50%;
            padding: 40px;
            margin: 100px auto;
        }
    </style>
</head>
<body text="blue">


<form action="upload.php" method="post" enctype="multipart/form-data">
<fieldset>
 
    <legend>Results from the quiz:</legend>

    <?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
    $answer11 = $_POST['question-11-answers'];
    $answer12 = $_POST['question-12-answers'];
    $answer13 = $_POST['question-13-answers'];
    $answer14 = $_POST['question-14-answers'];
    $answer15 = $_POST['question-15-answers'];
    $answer16 = $_POST['question-16-answers'];
    $answer17 = $_POST['question-17-answers'];
    $answer18 = $_POST['question-18-answers'];
    $answer19 = $_POST['question-19-answers'];
    $answer20 = $_POST['question-20-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++;}
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }
    if ($answer6 == "C") { $totalCorrect++; }
    if ($answer7 == "A") { $totalCorrect++; }
    if ($answer8 == "D") { $totalCorrect++;}
    if ($answer9 == "A") { $totalCorrect++; }
    if ($answer10 == "B") { $totalCorrect++; }
    if ($answer11 == "C") { $totalCorrect++; }
    if ($answer12 == "D") { $totalCorrect++; }
    if ($answer13 == "B") { $totalCorrect++; }
    if ($answer14 == "A") { $totalCorrect++; }
    if ($answer15 == "D") { $totalCorrect++; }
    if ($answer16 == "B") { $totalCorrect++; }
    if ($answer17 == "C") { $totalCorrect++; }
    if ($answer18 == "A") { $totalCorrect++; }
    if ($answer19 == "D") { $totalCorrect++; }
    if ($answer20 == "C") { $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 20 correct</div>"; 

    if ($totalCorrect<10) {
        echo "<h1> Bad Score </h1> <br/>";
        echo "<h1> I recommennd you do a MCU movie marthon!";
    }

    if ($totalCorrect>=10 && $totalCorrect<15) {
        echo "<h1> Good Score! </h1> <br/>";
    }

    if ($totalCorrect>=15 && $totalCorrect<21) {
        echo "<h1> Outstanding knowledge! </h1> <br/>";
        echo "<h1> You must be an agent of some kind. </h1> <br/>";
    } 
?>
        <a href="index.php">Retake the Quiz </a>
</fieldset>
</form>






</body>
</html>