<?php

    class Database
    {
        public function __construct($name)
        {
            $this->pd=new PDO("mysql:host=localhost;dbname=$name","root","");
        }
        public function myExec($q)
        {
            $this->pd->exec($q);
        }
        public function getRows($q,$arg){
            $stm=$this->pd->prepare($q);
            $stm->execute($arg);
            return $stm->fetchAll();
        }
        public function getRow($q,$arg)
        {
            $stm=$this->pd->prepare($q);
            $stm->execute($arg);
            return $stm->fetchAll();
        }
        public function Execute($q,$arg)
        {
            $stm=$this->pd->prepare($q);
            $stm->execute($arg);
        }
    }
    $db=new Database("ns");
?>
