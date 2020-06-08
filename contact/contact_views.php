<?php
function getPreContactView($name = false, $email = false, $county = false, $message = false) {
?>
    <div class="title-div">
        <p class="title-text">Enter your information below</p>
        <hr />
    </div>
    <form id="contactForm" action="index.php" method="post" style="width: 80%; margin: 0 auto 0 auto;">
        <div class="center-div container search-again-div">
            <input type="hidden" name="contact" value="true" />
            <input type="text" name="name" class="form-control search-again-text-input" placeholder="Name*"
                   <?php if ($name) {
                       ?> value="<?php echo $name ?>" />
                    <?php
                   } else {
                       ?> />
                    <?php
                    }
                    ?>
            <input type="text" name="email" class="form-control search-again-text-input" placeholder="Email*"
                    <?php if ($email) {
                        ?> value="<?php echo $email ?>" />
                    <?php
                    } else {
                        ?> />
                        <?php
                    }
                    ?>
            <p class="title-subtext-2">If you select "Other" please specify the county in your message.</p>
            <select id="county" name="county">
                <option value="Other">Other</option>
                <option value="Stark">Stark</option>
                <option value="Summit">Summit</option>
                <option value="Cuyahoga">Cuyahoga</option>
                <option value="Medina">Medina</option>
                <option value="Portage">Portage</option>
                <option value="Wayne">Wayne</option>
                <option value="Tuscarawas">Tuscarawas</option>
            </select>
            <textarea rows="4" cols="50" id="message" name="message" style="font-family: Roboto;" placeholder="Your Message*"></textarea>
            <input type="submit" name="count" value="Submit" class="btn btn-primary btn-block" style="margin-top: 15px;" />
        </div>
    </form>
    <div class="title-div">
        <hr />
    </div>
<?php
}

function getPostContactView($subject, $message) {
    ?>
    <div class="title-div">
        <p class="title-text">Thank you for contacting us! Please allow 2 - 3 business days for a response.</p>
        <hr />
    </div>
    <?php
}
?>