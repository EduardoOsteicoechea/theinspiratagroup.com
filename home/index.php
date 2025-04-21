<?php
    include '../_/global.php';
    include 'php/section_1.php';
    include 'php/section_2.php';
    include 'php/section_3.php';
    include 'php/section_4.php';
    include 'php/section_5.php';
    include 'php/section_6.php';
    $root_folder = "../";
    $page_name = "home";
?>

<?php echo print_page_top($root_folder, "Home"); ?>
    <link rel="stylesheet" type="text/css" href="css/section_1.css">
    <link rel="stylesheet" type="text/css" href="css/section_2.css">
    <link rel="stylesheet" type="text/css" href="css/section_3.css">
    <link rel="stylesheet" type="text/css" href="css/section_4.css">
    <link rel="stylesheet" type="text/css" href="css/section_5.css">
    <link rel="stylesheet" type="text/css" href="css/section_6.css">
<?php echo print_page_body($root_folder); ?>
    <?php echo print_header($root_folder, $page_name); ?>
    <?php echo section_1($root_folder); ?>
    <?php echo section_2($root_folder); ?>
    <?php echo section_3($root_folder); ?>
    <?php echo section_4($root_folder); ?>
    <?php echo section_5($root_folder); ?>
    <?php echo section_6($root_folder); ?>
    <script defer type="module" src="js/section_1.js"></script>
    <script defer type="module" src="js/section_2.js"></script>
    <script defer type="module" src="js/section_3.js"></script>
    <script defer type="module" src="js/section_4.js"></script>
<?php echo print_page_bottom($root_folder); ?>

