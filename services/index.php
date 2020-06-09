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
            BANANAS
        </div>
        <div class="title-div">
            <p class="title-text">Mobile Notary</p>
            <hr />
        </div>
        <div style="font-family: Roboto; margin-left: 30px;">
            BANANAS
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