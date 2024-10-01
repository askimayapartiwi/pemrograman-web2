<?php

// Visibility.php

class Visibility {

        public $public = 'Public';
        private $private = 'Private';
        protected $protected = 'Protected';

        function tampilkanData (){
            echo "Akses di dalam kelas <br>";
            echo "Public: " . $this->public . "<br";
            echo "Private: " . $this->private . "<br>";
            echo "Protected: " . $this->protected . "<br>";
        }
}