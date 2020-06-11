<?php
    require_once('main.inc.php');
    require_once('hosting-nav.php');
    require_once(get_root_dir() . '/static/html/header.php');
    setHostingNav(array('Home'), 'Welcome To RSMA L.L.C Services!');
?>
            <div class="title-div">
                <p class="title-text">Notary and Title Services</p>
                <p class="title-subtext">Now serving Northeast Ohio.</p>
                <hr />
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-4 center-div" style="padding-top: 10px;">
                    <img alt src="static/assets/steph.jpg" style="height: 400px; width: 300px; margin-top: 40px;">
                </div>
                <div class="col-md-8" style="padding-top: 10px; padding-left: 30px;">
                    <p class="title-text">Who are we?</p>
                    <hr style="margin-right: 30px;"/>
                    <p style="font-size:16px; font-family: Roboto; margin-right: 30px; margin-bottom: 25px;">
                        RSMA L.L.C Services is a company based out of northeast Ohio, specializing in title services.
                        The services our company provides can be found <a href="/services">here</a>.
                    </p>
                    <hr />
                    <div class="center-div" style="margin-right: 50px;">
                        <img alt src="static/assets/vet.png">
                    </div>
                    <hr />
                    <p style="font-size:16px; font-family: Roboto; margin-right: 30px; margin-bottom: 25px;">
                        Stephanie Bendel Samples is the found of RSMA L.L.C Services. She is a United States Air Force
                        Veteran and a 2019 graduate of Kent State with a B.A. in Communications.
                        Stephanie is a licensed notary public in the state of Ohio with authorization to
                        perform online notarial services.
                        Stephanie has 16 years of title service experience with her career beginning in Florida,
                        where she was a licensed notary public and title agent.
                        Upon her return to Ohio, she pursued her degree and started RSMA LLC Services. Her knowledge of
                        title translated perfectly to Ohio, giving her the inspiration to start this business.
                        Stephanie is happily married to her high school sweetheart and together they have two children.
                    </p>
                </div>
            </div>
            </section>
            <hr>
<?php
    require_once(get_root_dir() . '/static/html/footer.php');
?>