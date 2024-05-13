<?php 
$nilai1 = 50;
$nilai2 = 5;
if ($nilai1 < $nilai2){
    echo "nilai 1 lebih kecil dari nilai 2";
} elseif ($nilai1 > $nilai2){
    echo "nilai 1 lebih besar dari nilai 2";
}elseif ($nilai1 == $nilai2){
    echo "nilai 1 sama dengan nilai 2";
}elseif ($nilai1 >= $nilai2){
    echo "nilai 1 lebih besar sama dengan nilai 2";
}else {
    echo "jawaban tidak diketahui";
}
echo "<br>";

$day = date('D');
echo "hari ini adalah $day";
echo "<br>";
if($day == "sat") {
    echo "kelas jarvis telah di mulai";
} elseif ($day == "sun") {
    echo "kelas jarvis telah di mulai";
} elseif ($day == "mon") {
    echo "kelas jarvis telah di mulai";
} else {
    echo "jawaban tidak di ketahui";
}
?>