<?php
    include 'head.php';
    function print_page_top($root_folder, $page_title)
    {
        $html = '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    '.print_head($root_folder).'
                    <title>'. $page_title .'</title>
        ';
        return $html;
    };
?>
        