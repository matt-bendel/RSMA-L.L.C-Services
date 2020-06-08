<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/main.inc.php');
require_once(get_root_dir() . '/static/html/header.php');
require_once('services.php');
require_once(get_root_dir() . '/hosting-nav.php');
setHostingNav(array('Home','Fees'), 'Our Fees');
?>
    <div class="title-div">
        <p class="title-text">Fees</p>
        <hr />
    </div>
    <div class="row" style="margin-top: 15px;">
        <?php get_services(); ?>
    </div>
    <div class="title-div">
        <hr />
        <p style="font-size: 18px; font-family: Roboto;">
            The counties we service are Stark, Cuyahoga, Summit, Medina, Portage, Wayne,
            and Tuscarawas. If you require our services in a different count, please <a href="http://<?php echo get_root_url() ?>/contact">contact us.</a>
        </p>
        <hr />
    </div>

    </section>
    <hr>
<?php
require_once(get_root_dir() . '/static/html/footer.php');
?>