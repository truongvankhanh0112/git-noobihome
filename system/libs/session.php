<?php 
    class session{
        public static function init(){
            // session_start();
        }
        public static function set($key, $value)
        {
            $_SESSION[$key] = $value;
        }
        public static function get($key){
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        public static function checkSession(){
            self::init();
            if (self::get('login') == false) {
                self::destroy();
                // session_destroy();
                header ("Location:".BASE_URL."login");
            }else{

            }
        }
        public static function destroy(){
            session_destroy();
        }
        public static function unset($key){
            unset($_SESSION[$key]);
        }
    }
?>