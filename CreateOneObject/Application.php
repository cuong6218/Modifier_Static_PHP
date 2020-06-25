<?php
    namespace app;
    class Application{
        private static $instance;

        private function _construct(){

        }
        public static function getInstance(){
            if (self::$instance === NULL){
                self::$instance = new Application();
                echo 'alo';
            }
            return self::$instance;
        }
    }
    $app1 = Application::getInstance();
    $app2 = Application::getInstance();
    $app3 = new Application();