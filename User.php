<?php 

class User{

 
    private $NOM_;
    private $MDP_;
    public function __construct($NewNOM,$motdepasse)
    {
        $this->NOM_=$NewNOM;
        $this->MDP_=$motdepasse;
    }
    public function getnom(){
        return $this->nom_;
    }
    public function seconnecter($motdepasse){
        if($motdepasse==$this->MDP_)
            return TRUE ;
        else 
            return FALSE;
    
    }
}
?>