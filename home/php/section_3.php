<?php
    function section_3($root_folder)
    {
        $html ='';
        $html .= '
        <div id="section_3">

            <div id="section_3_background_image">
                <img src="media/projects_1.webp" width="100%" alt="About section background image">
            </div>

            <div id="section_3_information_container">
                <div id="section_3_heading_text">
                    <h2>About</h2>
                    <p>
                        Building the future of upscale living
                        Moving beyond standard elegance
                        Leveraging taste and technology
                        Crafting intelligent Masterpieces 
                    </p>
                </div>

                <div id="section_3_statictics_text">
                    <div> <h3>1990</h3> <p>Founded on</p>             </div>
                    <div> <h3>30</h3>   <p>Construction projects</p>  </div>
                    <div> <h3>20</h3>   <p>AEC professionals</p>      </div>
                    <div> <h3>12</h3>   <p>Building Partners</p>      </div>
                </div>

                <div id="section_3_signature_text">
                    <img src="media/signature_1.png" alt="Founder Signature">
                    <h3>Andrea D\'Alessio</h3>
                    <p>Founder</p>
                </div>
                
            </div>
        </div>
        ';
        return $html;
    }
?>