<?php

class TemplateLoader {

    public function __construct() {}

    public static function loadTemplate($control='inc/empty_content.php',$template=null) {

        self::loadBeforeBody('inc/header.php');
        self::loadBeforeBody('inc/helpers.php');
        self::loadBeforeBody('clase/User.php');
        
        banner();

        echo "<div class=\"container-fluid mt-5\">";
        echo "<div class=\"row\">";
        sidebar($_SESSION['entitati']);
        echo " <div class=\"col col-lg-7\">";
        
        self::loadBody($control);
       
        echo "</div>";
        rightbar();
        echo "</div>";
        echo" </div>";

        footer();
    }

    public static function loadBeforeBody($file) {
        require_once($file);
    }
    public static function loadBody($control) {
        require_once($control);
    }
}
?>
