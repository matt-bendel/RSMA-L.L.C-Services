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
        # Instantiate the client.
        $mgClient = new Mailgun('284c125d45c2f111b58c522a809f3cad-8b34de1b-b8235432');
        $domain = "https://api.mailgun.net/v3/sandbox6a5f749dad6848468e056ed07e74b052.mailgun.org/messages";
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'	=> 'Excited User <mailgun@sandbox6a5f749dad6848468e056ed07e74b052.mailgun.org>',
            'to'	=> 'Matt <mattbendel60@gmail.com>',
            'subject' => $subject,
            'text'	=> $message
        ));

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