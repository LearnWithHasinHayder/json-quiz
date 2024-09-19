<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <?php
    $quizData = file_get_contents('data/sports.json');
    $quizzes = json_decode($quizData, true);
    ?>
    <h1>
        <?php //echo $quizzes['title']; ?>
        <?= $quizzes['title'] ?>
    </h1>

    <form action="result.php" method="POST">
        <?php
        foreach ($quizzes['questions'] as $index => $quiz) {
            echo "<h2>Question: {$quiz['question']}</h2>";
            if ($quiz['type'] == 'single') {
                foreach ($quiz['options'] as $option) {
                    echo "<label><input type='radio' name='quiz{$index}' value=\"{$option}\" >{$option}</label><br>";
                }
            } elseif ($quiz['type'] == 'multiple') {
                foreach ($quiz['options'] as $option) {
                    echo "<label><input type='checkbox' name='quiz{$index}[]' value=\"{$option}\">{$option}</label><br>";
                }
            }
        }
        ?>
        <button type="submit" class="active">Submit</button>
    </form>
    
    <br>
    <br>
    <br>
    <br>
</body>

</html>