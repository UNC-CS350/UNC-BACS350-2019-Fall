<?php

    /*
        Display PHP Information about Web Server
    */


    $page_title = "Display PHP Information";

    $site_title = 'UNC BACS 350';

    $content = '
        <p>
            <a href="info.php">Display PHP and Web Server Information</a>
        </p>
    ';

    include '../../views.php';

    echo render_page($site_title, $page_title, $content);

?>
