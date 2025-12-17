<?php

    require 'app.php';

    function includeTemplate( string $templateName, bool $intro = false ) : void {
        include __DIR__ . "/templates/$templateName.php";
    }

?>