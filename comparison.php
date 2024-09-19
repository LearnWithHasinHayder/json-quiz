<?php 

$answers = ['Dhaka','Rajshahi','Khulna'];
$userAnswers = ['Dhaka','Khulna', 'Rajshahi'];

// if ($answers == $userAnswers) {
//     echo "Correct";
// } else {
//     echo "Incorrect";
// }

if (array_diff($answers, $userAnswers) == null) {
    echo "Correct";
} else {
    echo "Incorrect";
}