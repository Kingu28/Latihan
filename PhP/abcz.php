<?php
    $z = ' handal';

    function a() {
        global $a;
        $a = ' saya';
        function b() {
            global $b;
            $b = ' programmer';
            function c() {
                global $a, $b, $z;
                $c = ' web';
                echo $a, $b, $c, $z;
            }c();
        }b();
    }a();
?>