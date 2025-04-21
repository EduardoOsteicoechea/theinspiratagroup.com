<?php
    include 'footer.php';
    function print_page_bottom($root_folder)
    {
        $html = print_footer($root_folder) . 
        '
                </body>
            </html>       
        ';
        return $html;
    };
?>