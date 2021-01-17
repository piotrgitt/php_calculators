<?php

namespace Core;

class ClassLoader {

    public $paths = array();
    public function __construct() {
        spl_autoload_register(function($class) {
            $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            $fileName = getConfig()->root_path . DIRECTORY_SEPARATOR . $class . '.class.php';
            if (is_readable($fileName)) {
                require_once $fileName;
            }
        });
    }

    
    
    
    //NA AKTUALNE ZAJĘCIA PONIŻSZA FUNKCJA JEST W OGÓLE NIE POTRZEBNA
    public function addPath($path) {
        $this->paths [] = $path;
        if (count($this->paths) == 1) {
            spl_autoload_register(function($class) {
                $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
                foreach (getLoader()->paths as $path) {
					$path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
                    $fileName = getConf()->root_path . $path . DIRECTORY_SEPARATOR . $class . '.class.php';
                    if (is_readable($fileName)) {
                        require_once $fileName;
                    }
                }
            });
        }
    }

}