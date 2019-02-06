<?php
    class Article{
        private $idAnimal;
        private $texte;
        private $cheminPhoto;
        private $datePublication;
        private $listCom;
       
        
        public function __construct($idAnimal,$texte, $cheminPhoto,$datePublication,$listCom){
            $this->idAnimal=$idAnimal;
            $this->texte=$texte;
            $this->cheminPhoto=$cheminPhoto;
            $this->datePublication=$datePublication;
            $this->listCom=$listCom;
          
        }

        /**
         * Get the value of cheminPhoto
         */ 
        public function getCheminPhoto()
        {
                return $this->cheminPhoto;
        }

        /**
         * Get the value of texte
         */ 
        public function getTexte()
        {
                return $this->texte;
        }

        /**
         * Get the value of listCom
         */ 
        public function getListCom()
        {
                return $this->listCom;
        }

        /**
         * Get the value of datePublication
         */ 
        public function getDatePublication()
        {
                return $this->datePublication;
        }

        /**
         * Set the value of cheminPhoto
         *
         * @return  self
         */ 
        public function setCheminPhoto($cheminPhoto)
        {
                $this->cheminPhoto = $cheminPhoto;

                return $this;
        }

        /**
         * Set the value of texte
         *
         * @return  self
         */ 
        public function setTexte($texte)
        {
                $this->texte = $texte;

                return $this;
        }

        /**
         * Set the value of datePublication
         *
         * @return  self
         */ 
        public function setDatePublication($datePublication)
        {
                $this->datePublication = $datePublication;

                return $this;
        }
    } 
?>