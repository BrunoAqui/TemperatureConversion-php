<?php
class temperatura {
    private $refCValue = 0.0;
    private $refFValue = 32.0;
    private $refKValue = 273.15;
    
    public $results = [];

    //Funções que eu chamo no index.
    public function celsius($value, $type){
        $valueForWrite = $value ."°C";
        switch($type){
            case 1:
                $answer = round((($value * 9/5) + $this->refFValue), 2) ."°F";
            break;
            case 2:
                $answer = round(($value + $this->refKValue), 2) ."°K";
            break;
        }
        
        //Codigo para manter uma Array com os meus calculos e mostrar o resultado na tela.
        array_push($this->results, $valueForWrite, $answer);  
        echo  "<li>".$valueForWrite ." = " .$answer ."</li>";
        echo "<br>";

        return $answer;
    }
    public function fahrenheit($value, $type){
        $valueForWrite = $value ."°F";
        switch($type){
            case 0:
                $answer = round(($value - $this->refFValue * 5/9), 2) ."°C";
            break;
            case 2:
                $answer = round((($value - $this->refFValue) * 5/9 + $this->refKValue),2) ."°K";
            break;
        }
        
        array_push($this->results, $valueForWrite, $answer);
        echo  "<li>".$valueForWrite ." = " .$answer ."</li>";
        echo "<br>";
        
        return $answer;
    }
    public function kelvin($value, $type){
        $valueForWrite = $value ."°K";
        switch($type){
            case 0:
                $answer = round(($value - $this->refKValue), 2) ."°C";
            break;
            case 1:
                $answer = round((($value - $this->refKValue) * 9/5 + $this->refFValue), 2) ."°F";
            break;
        }

        array_push($this->results, $valueForWrite, $answer);
        echo  "<li>".$valueForWrite ." = " .$answer ."</li>";
        echo "<br>";

        return $answer;
    }
}
?>