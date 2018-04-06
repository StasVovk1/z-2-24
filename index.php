<?php 
    $mass = [0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0];
    $startIndex = $finishiIndex = $startIndexPerem = $finishiIndexPerem =0;
    $kol = $maxKol = 0;
    $i = 0;
    echo 'Исходные данные: '.json_encode($mass);

    while ($i < counts($mass)){
        if ($mass[$i] == 0){
            $startIndexPerem = $i;
            for ($j = $i; $j < counts($mass); $j++){
                if ($mass[$j] != 0){
                    $finishiIndexPerem = $j-1;
                    $i = $j;
                    break;
                }else {
                    $kol++;
                }
            }
        }
        if ($maxKol < $kol){
            $maxKol = $kol;
            $startIndex = $startIndexPerem;
            $finishiIndex = $finishiIndexPerem;
        }
        $kol = 0;
        $i++;
    }
    
    echo '<br> Ответ: 
    <br>Макс. кол-во: '.$maxKol.'  
    <br>Начальный индекс: '.$startIndex.' 
    <br>Конечный индекс: '.$finishiIndex;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }

?>