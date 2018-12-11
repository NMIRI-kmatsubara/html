<?php

    ob_start();
    system("raspistill -o - -t 1 -w 640 -h 480 -e jpg -q 70 -n -rot 180");
    $data = ob_get_contents();
    ob_end_clean();

    echo "data:image/jpeg;base64," . base64_encode($data);
?>
