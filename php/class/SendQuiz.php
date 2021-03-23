
<?php

class SendQuiz{
    private $pdo;
    private $table;
    private $eemlly;
    private $id_x;
    private $sum_all;
    private $an1;
    private $an2;
    private $an3;
    private $an4;
    private $an5;
    private $an6;
    private $an7;
    private $an8;
    private $an9;
    private $an10;
    
    
    function __constructor(PDO $pdo, string $table, string $eemlly, string $id_x, string $sum_all, string $an1, string $an2, string $an3, string $an4, string $an5, string $an6, string $an7, string $an8, string $an9, string $an10){
        $this->pdo = $pdo;
        $this->table = $table;
        $this->eemlly = $eemlly;
        $this->id_x = $id_x;
        $this->sum_all = $sum_all;
        $this->an1 = $an1;
        $this->an2 = $an2;
        $this->an3 = $an3;
        $this->an4 = $an4;
        $this->an5 = $an5;
        $this->an6 = $an6;
        $this->an7 = $an7;
        $this->an8 = $an8;
        $this->an9 = $an9;
        $this->an10 = $an10;
    }

        
    public function insertQuiz($pdo, $table, $eemlly, $id_x, $sum_all, $an1, $an2, $an3, $an4, $an5, $an6, $an7, $an8, $an9, $an10){
            $sql = "INSERT INTO `regs` (`emailr`, `id_x`, `points`, `opp1`, `opp2`, `opp3`, `opp4`, `opp5`, `opp6`, `opp7`, `opp8`, `opp9`, `opp10`) VALUES(:emailr, :id_x, :points, :opp1, :opp2, :opp3, :opp4, :opp5, :opp6, :opp7, :opp8, :opp9, :opp10)";
            $stmt = $pdo->prepare($sql);
            $stmt-> bindValue(':emailr', $eemlly);
            $stmt-> bindValue(':id_x', $id_x);
            $stmt-> bindValue(':points', $sum_all);
            $stmt-> bindValue(':opp1', $an1);
            $stmt-> bindValue(':opp2', $an2);
            $stmt-> bindValue(':opp3', $an3);
            $stmt-> bindValue(':opp4', $an4);
            $stmt-> bindValue(':opp5', $an5);
            $stmt-> bindValue(':opp6', $an6);
            $stmt-> bindValue(':opp7', $an7);
            $stmt-> bindValue(':opp8', $an8);
            $stmt-> bindValue(':opp9', $an9);
            $stmt-> bindValue(':opp10', $an10);
            $stmt-> execute(); 
            
            //return $stmt;
    }
    
        
}

?>