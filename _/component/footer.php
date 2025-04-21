<?php 
    function print_footer($root_folder)
    {
        $image_folder = $root_folder . '_/media/image/brand/';
        $html = '
            <div id="footer">
                <a href="'. $root_folder .'home">
                    <img src="'. $image_folder .'logo_horizontal.webp" alt="The Inspirata Group header Logo" height="100%">
                </a>
                
                <h3>We are Makers of the <span>Luxury</span> Living</h3>

                <nav>
                    <a href="'. $root_folder .'home">HOME</a>
                    <a href="'. $root_folder .'home">SERVICES</a>
                    <a href="'. $root_folder .'home">PROJECTS</a>
                    <a href="'. $root_folder .'home">ABOUT</a>
                    <a href="'. $root_folder .'home">CONTACT</a>
                </nav>
            </div> 
        ';
        return $html;
    }
?>