<?php

    require_once("View.php");

    public function Index() : void {
        $indexView = new View('Index');
        $indexView->generer(['nomDresseur' => "Red"]);
    }
    
?>