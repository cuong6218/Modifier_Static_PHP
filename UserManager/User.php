<?php
    class User{
        private $id;
        private $subname;
        private $name;
        private $birth;
        private $address;
        private $job;

        public function __construct($id, $subname, $name, $birth, $address, $job)
        {
            $this->id = $id;
            $this->subname = $subname;
            $this->name = $name;
            $this->birth = $birth;
            $this->address = $address;
            $this->job = $job;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }

        public function setSubName($subname){
            $this->subname = $subname;
        }
        public function getSubName(){
            return $this->subname;
        }


        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }


        public function setBirth($birth){
            $this->birth = $birth;
        }
        public function getBirth(){
            return $this->birth;
        }


        public function setAddress($address){
            $this->address = $address;
        }
        public function getAddress(){
            return $this->address;
        }


        public function setJob($job){
            $this->job = $job;
        }
        public function getJob(){
            return $this->job;
        }

    }