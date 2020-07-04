<?php
    class Group{

        protected $filename;
        public function __construct($filename)
        {   
            $this->filename = $filename;
        }
        function register($user){
            $data = $this->readFileJSON();
            $users = [
                'id' => $user->getId(),
                'subname' => $user->getSubName(),
                'name' => $user->getName(),
                'birth' => $user->getBirth(),
                'address' => $user->getAddress(),
                'job' => $user->getJob()
            ];
            array_push($data, $users);
            $this->saveFileJSON($data);
            print_r($users);
        }
        public function getInfo(){
            $data = $this->readFileJSON();
            $users = [];
            foreach($data as $item){
                $user = new User($item['id'],$item['subname'], $item['name'], 
                $item['birth'], $item['address'], $item['job']);
                
                array_push($users, $user);
            }
        }
        // return data JSON (convert JSON data as array)
        public function readFileJSON(){
            $data = file_get_contents($this->filename);
            return json_decode($data, true);
        }

        // save data into file JSON (convert array as string)
        public function saveFileJSON($arr){
        $data = json_encode($arr);
        file_put_contents($this->filename, $data);
        }
        public function displayData($users){
            $table = "";
            foreach ($users as $user){
                $table += '<tr>';
                foreach ($user as $key => $value){
                $table += '<td>';
                echo $value;
                $table += '</td>';
                }
            $table = '</tr>';
            }
        }
    }  