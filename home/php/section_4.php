<?php
    function section_4($root_folder)
    {
        $html ='
        <div id="section_4">
            <h2>Projects</h2>
            <div class="section_4_vertical_container_container">
                <div class="section_4_vertical_container">
                    '.
                    card_project($root_folder,"5011 Modern Oasis","Miami, Florida","March 12 of 2019","Under Construction","services","projects_1") 
                    . 
                    card_project($root_folder,"5465 Pine Tree Drive","Miami, Florida","March 12 of 2019","built","services","projects_2")
                    .'
                </div>
                <div class="section_4_vertical_container">
                    '.
                    card_project( $root_folder,"55 Brookville","Long Island, New York","December 20 of 2021","built","https://www.scalaa.com","projects_3")
                    .
                    card_project( $root_folder,"55 Brookville","Long Island, New York","December 20 of 2021","built","https://www.scalaa.com","projects_3")
                    .'
                </div>
            </div>
        </div>
        ';
        return $html;
    }

    function card_project
    (
        string $root_folder,
        string $project_name,
        string $address,
        string $date,
        string $status,
        string $button_href,
        string $image_name
    )
    {
        $html = '';
        $html .= '
        <a class="card_project">
            <div class="card_project_background">
                <img src="media/'.$image_name.'.webp" alt="Service image" height:100%">
            </div>
            <div class="card_project_information_container_hidden">
                <h3>
                    '. $project_name .'
                </h3>
                <p>
                    '. $address .'
                </p>
                <p>
                    '. $date .'
                </p>
                <h4>
                    '. ucfirst($status) .'
                </h4>                
            </div>
        </a>';

        return $html;
    };
?>