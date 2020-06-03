<?php	
    class telefoon{
        public $samsung, $color;
        function __construct($samsung, $color){
            $this->samsung = $samsung;
            $this->color = $color;
        }
    function get_name(){
        return $this->samsung;
    }
    function get_color(){
        return $this->color;
    }
}

    $samsungtel = new telefoon("s9", "zwart");
    echo $samsungtel->get_name();
    echo "<br>";
    echo $samsungtel->get_color();
    

        

?>