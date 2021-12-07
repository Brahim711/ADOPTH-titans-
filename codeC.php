<?php
include 'config.php';



class codeC {
    



    function afficherclient(){
        $sql="SELECT * FROM coupon";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
        
    function supprimercode($coupon_code){
        $sql="DELETE FROM coupon WHERE coupon_code=:coupon_code";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':coupon_code', $coupon_code);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }



    
    
}


?>