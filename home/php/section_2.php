<?php
    function section_2($root_folder)
    {
        $html ='';
        $html .= '
        <div id="section_2">
        <div class="service_card_horizontal_line_hidden"></div>
        <div class="service_card_vertical_line_hidden"></div>
            <h2>Services
            <div class="service_card_title_bottom_hidden"></div></h2>
            <div id="section_2_service_cards_container">
                '. 
                service_card (
                    $root_folder,
                    "Luxury Home Construction",
                    "The Inspirata Group crafts luxury homes, merging excellence in construction, design, and smart technology to create extraordinary living realities",
                    "extraordinary living",
                    "home",
                    "services_1",
                    "1_hidden"
                ) 
                .
                service_card (
                    $root_folder,
                    "Opulent Renovation",
                    "We redefine opulence in renovations, transforming existing homes into modern masterpieces of engineering, quality, and contemporary elegance",
                    "contemporary elegance",
                    "home",
                    "services_4",
                    "2_hidden"
                )
                .
                service_card (
                    $root_folder,
                    "Project Planning",
                    "Our team excels in planning, converting sophisticated visions into architecturally distinguished homes, setting new standards in luxury living",
                    "sophisticated visions",
                    "https://www.scalaa.com",
                    "services_3",
                    "3_hidden"
                )
                .'
            </div>
            <div class="section_2_message_hidden">
                <h2>We build the future of upscale living, moving beyond standard elegance</h2>
            </div>
        </div>
        ';
        return $html;
    }

    function service_card
    (
        string $root_folder,
        string $heading_text,
        string $paragraph_text,
        string $enfasis_text,
        string $button_href,
        string $image_name,
        string $class
    )
    {
        $new_paragraph_part_1 = substr_replace(
            $paragraph_text,
            " <span>" . $enfasis_text . "</span> ",
            (stripos($paragraph_text, $enfasis_text)-1)
            ,
            strlen($enfasis_text) + 1
        );

        $html = '';
        $html .= '
            <div class="service_card">

                <div class="service_card_background">
                    <img src="media/'.$image_name.'.webp" alt="Service image">
                </div>

                <div class="service_card_heading_background">
                    '.$heading_text.'
                </div>
                
                <div class="service_card_paragraph_hidden">
                    '.$new_paragraph_part_1.'
                </div>

                <a href="'. $button_href .'" class="service_card_button">
                <p>&lt;</p>
                </a>

            </div>
        ';

        return $html;
    }; 
?>