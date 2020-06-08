<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/main.inc.php');
require_once(get_root_dir() . '/static/html/header.php');
require_once(get_root_dir() . '/hosting-nav.php');
setHostingNav(array('Home','What is a Notary?'), 'What is a Notary?');
?>
            <div class="title-div">
                <p class="title-text">Insert Title Here</p>
                <p class="title-subtext">Insert subtext here</p>
                <hr />
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-4" style="padding-top: 10px;">

                </div>
                <div class="col-md-8" style="padding-top: 10px; padding-left: 30px;">

                </div>
            </div>
            </section>
            <hr>
<?php
require_once(get_root_dir() . '/static/html/footer.php');
?>