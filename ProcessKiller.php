<?php

class ProcessKiller{
    
    public $time;
    public $stopped = false;

    public function __construct($timeout = 5, $warn = 1){ //1 - Warning enabled, 2 - Warning disabled
        $this->timeout = $timeout;
        $this->warn = $warn;
    }

    public function changeStopped($status){
        if($status === "true"){
            $this->stopped = true;
        }elseif($status === "false"){
            $this->stopped = false;
        }
    }

    public function getStopped(){
        if($status === true){
            return "yes";
        }elseif($status === false){
            return "no";
        }
    }

    public function processKill(){
        if($this->warn === 1){
            sleep($this->timeout);
            echo "\nThe script will be disabled in 1...";
            sleep(1);
            echo "\nThe script will be disabled in 2...";
            sleep(1);
            echo "\nThe script will be disabled in 3";
            sleep(1);
            $this->changeStopped("true");
            echo "\nScript disabled!";
            $this->changeStopped("false");
            exit(1);
        }elseif($this->warn === 2){
            sleep($this->timeout);
            $this->changeStopped("true");
            echo "\nScript disabled!";
            $this->changeStopped("false");
            exit(1);
        }
    }
}