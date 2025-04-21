<?php 
    function print_head($root_folder)
    {
        $html = '
            <meta charset="UTF-8">
            <meta name="keywords" content="Architecture, Construction, Building, Luxury, Opulence, Design, Interior Design, Planning, Excelence, Miami, New York">
            <meta name="theme-color" content="#000">
            <meta name="description" content="The Inspirata Group Official Website">
            <meta name="author" content="Eduardo Osteicoechea">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="icon" type="image/x-icon" href="'.$root_folder.'_/media/image/brand/iso.webp">
            <link rel="stylesheet" href="'.$root_folder.'_/css/global.css">
            <link rel="stylesheet" href="'.$root_folder.'_/css/header.css">
            <link rel="stylesheet" href="'.$root_folder.'_/css/footer.css">
            <script defer src="'.$root_folder.'_/global.js"></script>
        ';
        return $html;
    }
?>