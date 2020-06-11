<?php
function get_services() {
    if (!$GLOBALS['mobile']) {
    ?>
    <div class="col-md-4" style="padding-top: 10px;">
        <div style="text-align: left; margin-left: 20px">
            <p class="title-text">Service</p>
        </div>
        <hr />
        <div style="text-align: left; margin-left: 20px;">
            <p style="font-size: 15px; font-family: Roboto;">Online Notary</p>
        </div>
        <hr />
        <div style="text-align: left; margin-left: 20px;">
            <p style="font-size: 15px; font-family: Roboto;">Update Title</p>
        </div>
        <hr />
        <div style="text-align: left; margin-left: 20px;">
            <p style="font-size: 15px; font-family: Roboto;">County Transactions</p>
        </div>
        <hr />
        <div style="text-align: left; margin-left: 20px;">
            <p style="font-size: 15px; font-family: Roboto;">Mobile Closings</p>
        </div>
        <hr />
        <div style="text-align: left; margin-left: 20px;">
            <p style="font-size: 15px; font-family: Roboto;">Courtesy Closing For Second Morgage When Closing With First Morgage</p>
        </div>
    </div>
    <div class="col-md-8" style="padding-top: 10px;">
        <div style="text-align: left;">
            <p class="title-text">Cost</p>
        </div>
        <hr />
        <div style="text-align: left;">
            <p style="font-size: 15px; font-family: Roboto;">$25.00 / Notorial Act</p>
        </div>
        <hr />
        <div style="text-align: left;">
            <p style="font-size: 15px; font-family: Roboto;">$25.00</p>
        </div>
        <hr />
        <div style="text-align: left;">
            <p style="font-size: 15px; font-family: Roboto;">$15.00 - $40.00</p>
        </div>
        <hr />
        <div style="text-align: left;">
            <p style="font-size: 15px; font-family: Roboto;">Buyer: $100.00 / Seller: $100.00 / Both: $200.00</p>
        </div>
        <hr />
        <div style="text-align: left; margin-bottom: 60px;">
            <p style="font-size: 15px; font-family: Roboto;">$25.00</p>
        </div>
    </div>
    <?php
    } else {
        ?>
        <div class="col-md-4" style="padding-top: 10px;">
            <div style="text-align: left; margin-left: 20px">
                <p class="title-text">Service and Cost</p>
            </div>
            <hr />
            <div style="text-align: left; margin-left: 20px;">
                <p style="font-size: 15px; font-family: Roboto;">Online Notary</p>
                <p style="font-size: 15px; font-family: Roboto;">$25.00 / Notorial Act</p>
            </div>
            <hr />
            <div style="text-align: left; margin-left: 20px;">
                <p style="font-size: 15px; font-family: Roboto;">Update Title</p>
                <p style="font-size: 15px; font-family: Roboto;">$25.00</p>
            </div>
            <hr />
            <div style="text-align: left; margin-left: 20px;">
                <p style="font-size: 15px; font-family: Roboto;">County Transactions</p>
                <p style="font-size: 15px; font-family: Roboto;">$15.00 - $40.00</p>
            </div>
            <hr />
            <div style="text-align: left; margin-left: 20px;">
                <p style="font-size: 15px; font-family: Roboto;">Mobile Closings</p>
                <p style="font-size: 15px; font-family: Roboto;">Buyer: $100.00 / Seller: $100.00 / Both: $200.00</p>
            </div>
            <hr />
            <div style="text-align: left; margin-left: 20px;">
                <p style="font-size: 15px; font-family: Roboto;">Courtesy Closing For Second Morgage When Closing With First Morgage</p>
                <p style="font-size: 15px; font-family: Roboto;">$25.00</p>
            </div>
        </div>
    <?php
    }
}
?>