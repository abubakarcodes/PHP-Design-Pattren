<?php

// line 2: make them interchangeable

interface Logger {
    public function log($data);

}


//line 1: write some algorithms
class FileLogger implements  Logger{
    public function log($data){
        var_dump('logging to file');
    }
}

class DatabaseLogger implements  Logger{
    public function log($data){
        var_dump('logging to database');
    }
}


class LogToXService implements  Logger {
    public function log($data){
        var_dump('logging to xservice');
    }
}





class App {
    public function log($data , Logger $logger){
        $logger->log($data);
    }
}



(new App())->log('some information here' , new FileLogger);
(new App())->log('some information here' , new DatabaseLogger);
(new App())->log('some information here' , new LogToXService);