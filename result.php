<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <!-- <code>
        <?php
        //print_r($_POST);
        ?>
    </code> -->
    <?php
    $quizData = file_get_contents('data/sports.json');
    $quizzes = json_decode($quizData, true);
    $score = 0;
    $questions = $quizzes['questions'];
    $totalQuestions = count($questions);


    for ($i = 0; $i < $totalQuestions; $i++) {
        $userAnswer = $_POST['quiz' . $i] ?? null;
        if ($questions[$i]['type'] == 'single') {
            $answer = $questions[$i]['answer'];
            if ($answer == $userAnswer) {
                $score++;
            }
        } elseif ($questions[$i]['type'] == 'multiple') {
            $answer = $questions[$i]['answer'];
            // if(array_diff($answer, $userAnswer) == null){
            //     $score++;
            // }
            if ($answer == $userAnswer) {
                $score++;
            }
        }
    }

    echo "<h1>Your score is $score out of $totalQuestions</h1>";

    ?>
    <p>
        Go back to <a href="index.php">Quiz</a>
    </p>

</body>

</html>