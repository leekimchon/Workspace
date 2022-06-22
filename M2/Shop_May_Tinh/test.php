<?php
function gradingStudents($grades) {
    for($i = 0; $i < count($grades); $i++){
        if($grades[$i] < 40){
            continue;
        }
        $grades[$i] = str_split($grades[$i]);
        if($grades[$i][count($grades[$i]) - 1] > 2 && $grades[$i][count($grades[$i]) - 1] < 5){
            $grades[$i][count($grades[$i]) - 1] = 5;
        }
        if($grades[$i][count($grades[$i]) - 1] > 7 && $grades[$i][count($grades[$i]) - 1] <= 9){
            $grades[$i][count($grades[$i]) - 2]++;
            $grades[$i][count($grades[$i]) - 1] = 0;
        }
        $grades[$i] = implode("", $grades[$i]);
    }
    return $grades;
}
$arr = [12, 24, 26];
$arr = gradingStudents($arr);
print_r($arr);
?>