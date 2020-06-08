<?php
function setHostingNav($items_arr, $title) {
    $page_str = implode(' / ', $items_arr);
    ?>
    <div id="content">
        <div id="hostingNavDiv" style="margin: 20px 0 20px 0;">
            <div>
                <p class="statusText"><?php echo $page_str; ?></p>
            </div>
            <hr />
            <h3 style="font-size: 32px; font-family: Roboto"><?php echo $title; ?></h3>
        </div>

    <section id="primary-section" class="simple-section" style="padding-left: 15px">
        <div class="center-div">
            <img alt src="/static/assets/ohioseal.png">
        </div>
    <?php
}
?>