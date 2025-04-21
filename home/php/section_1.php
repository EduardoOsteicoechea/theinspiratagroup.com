<?php
    function section_1($root_folder)
    {
        $html ='';
        $html .= '
            <div id="section_1">
                <video alt="The inspirata Group presentation video" autoplay muted loop>
                    <source src="media/hero_video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h2 class="section_1_h2_hidden">
                    Where <span>Luxury</span> Meets Technical Excelence
                </h2>
            </div>
        ';
        return $html;
    }
?>