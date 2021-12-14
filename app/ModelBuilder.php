<?php
 
namespace app;

class ModelBuilder{
    private $config_data;
    
    public function __construct() {
        $this->config_data = json_decode(file_get_contents(__DIR__ . '/storage/configuration.json'));
    }
    
    public function getconfig()
    {
        return $this->config_data;
    }

    public function build()
    {
        
    }
    
}


?>