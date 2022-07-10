<?php
session_start();
$result = session_destroy();

if ($result) {
?><script>
        history.back();
    </script>
<?php } ?>
