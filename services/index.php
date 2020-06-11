<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/main.inc.php');
require_once(get_root_dir() . '/static/html/header.php');
require_once(get_root_dir() . '/hosting-nav.php');
setHostingNav(array('Home','Services'), 'Our Services');
?>
        <script>
            displayIdMessage('Note: Photo ID is required for Notarial Services.');
        </script>
        <div class="title-div" id="id-banner" >
            <p class="title-text">Title Services</p>
            <hr />
        </div>
        <div style="font-family: Roboto; margin-left: 30px;">
            <p style="margin-right: 5px; font-family: Roboto; font-size: 16px;">
                RSMA LLC Services offers comprehensive services that include updating title and filing the documentation.
                When a transaction is ready to file, we will check the title from the date of commitment until the date of
                filing. This ensures that there hasn’t been any new transactions before the filing of the deed or mortgage.
                RSMA LLC Services also will assist with completing a walk-through. A walk-through is filing deeds and mortgages
                within the county.
            </p>
        </div>
        <div class="title-div">
            <p class="title-text">Mobile Notary</p>
            <hr />
        </div>
        <div style="font-family: Roboto; margin-left: 30px;">
            <p style="margin-right: 5px; font-family: Roboto; font-size: 16px;">
                A mobile notary is a notary public who travels to clients for purposes of notarizing a single signature
                or assist in a loan signing. Our specialty at RSMA LLC Services is traveling to Seller/Buyers  to assist
                in the closing of real estate transactions.
            </p>
        </div>
        <div class="title-div">
            <p class="title-text">Online Notary</p>
            <p class="title-subtext">Don't know what an Online Notary is? <a href="https://www.ohiosos.gov/notary/information/#electronic">Click here.</a></p>
            <hr />
        </div>
        <div class="title-div">
            <p class="title-text">Want to know our fees? <a href="http://<?php echo get_root_url() . '/fees' ?>">Click here.</a></p>
        </div>
        </section>
        <hr>
<?php
//https://notarysearch.ohiosos.gov/ords/f?p=ENSEARCH:SEARCH:23697314198417::NO:RP::
require_once(get_root_dir() . '/static/html/footer.php');
?>