<?php 
    function print_header($root_folder,$page_name)
    {
        $image_folder = $root_folder . '_/media/image/brand/';
        $html = '
            <div id="header">
                <a href="'. $root_folder .'home">
                    <img src="'. $image_folder .'logo_horizontal.webp" alt="The Inspirata Group header Logo" height="50px">
                </a>
                <div id="header_menu_button">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <nav id="header_navigation">
                    <a href="'. $root_folder .'home">Home</a>
                    <a href="'. $root_folder .'home">Services</a>
                    <a href="'. $root_folder .'home">Projects</a>
                    <a href="'. $root_folder .'home">About</a>
                    <a href="'. $root_folder .'home">Contact</a>
                </nav>
                <script defer src="'. $root_folder .'_/component/header.js">
                </script>
                <script type="module"> 
                    import { Header_class } from "'.$root_folder.'_/component/header_class.js";   
                    let header = new Header_class(document.getElementById("header"),"'.$page_name.'","'.$root_folder.'") 
                    
                    // console.log(header.print_height())
                </script>
            </div> 
        ';
        return $html;
    }
?>