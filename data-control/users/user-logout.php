<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
    function preventBack() {
        window.history.forward();
    }
    setTimeout(() => {
        preventBack()
    }, 0);
    window.onunload = function() {
        null
    };
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>

</html>

<?php
header("Location: ../../");
exit();
?>