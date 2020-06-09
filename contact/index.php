<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/main.inc.php');
require_once('contact_views.php');
require_once(get_root_dir() . '/static/html/header.php');
require_once(get_root_dir() . '/hosting-nav.php');
setHostingNav(array('Home','Contact Us'), 'Contact Us');

require_once('../vendor/autoload.php');
use Mailgun\Mailgun;

if (!isset($_POST['contact'])) {
    getPreContactView();
    unset($GLOBALS['sent']);
} else {
    $error_msg = '';
    $error = false;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $county = $_POST['county'];
    $message = $_POST['message'];

    if ($name == '' and !$error) {
        $error_msg = 'Please fill out the name field.';
        $error = true;
    }

    if (!strpos($email, '@') || $email == '' and !$error) {
        $error_msg = 'Please enter a valid email address.';
        $error = true;
    }

    if ($message == '' &!$error) {
        $error_msg = 'Please fill out a message.';
        $error = true;
    }

    if ($error) {
        unset($GLOBALS['sent']);
        getPreContactView($name, $email, $county, $message);
        ?>
        <script>
            displayError('<?php echo $error_msg ?>');
        </script>
        <?php
    } else {
        $subject = $name . ' - ' . $email . ' - ' . $county . ' County';

        if (!isset($GLOBALS['sent'])) {
            $to = 'mattbendel60@gmail.com';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("auto@rsmallcservices.com", "Auto");
            $email->setSubject($subject);
            $email->addTo($to, "Example User");
            $email->addContent("text/plain", $message);
            $email->addContent(
                "text/html", "<strong>$message</strong>"
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
                print $response->statusCode() . "\n";
                print_r($response->headers());
                print $response->body() . "\n";
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }

            $GLOBALS['sent'] = 'sent';
            var_dump($name);
        }

        getPostContactView($subject, $message);
    }
}
?>
<!--Contact us forms end here-->
        <div class="title-div" style="margin-left: 165px;">
            <p class="title-text">Contact Info:</p>
            <p class="title-subtext-2">Phone: (330) 697 - 4049</p>
            <p class="title-subtext-2">Address: </p>
            <p class="title-subtext-2">P.O. Box 383, </p>
            <p class="title-subtext-2">Greentown,OH 44630 </p>
            <p class="title-subtext-2">Email: rsmallc18@gamil.com</p>
        </div>
        </section>

        <hr>
<?php
require_once(get_root_dir() . '/static/html/footer.php');
?>