<?php
# Page: api_check.php

if(isset($_POST['uname'], $_POST['psw'])) {
    # Do your API checking here.

    if($success) {
        # Redirect to a thank you page if successful.
        header('Location: C:\wamp64\www\canteen\administrator.html');
    }
    else {
        # Redirect to a error page if unsuccessful.
        header('Location: error_page.html');
    }
}
else {
    # The data is missing, so just send them back
    # to the form. (I also put an error in the GET
    # string which could be used to print an error 
    # message with the form.)
    header('Location: form_page.php?error=form_nodata');
}
?>
