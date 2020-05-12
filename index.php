<?php
    // constant defining forbidden status code.
    DEFINE('STATUS_CODE_FORBIDDEN', 403);

    // change http status code.
    http_response_code(STATUS_CODE_FORBIDDEN);

    /**
     * Define text that should be displayed
     * on a given http status code.
     *
     * return @string - title of statuscode.
     */
    function getResponseCodeTitle(): string
    {
        switch (http_response_code()) {
            case STATUS_CODE_FORBIDDEN:
                return 'Forbidden';

            default:
                return 'Not defined';
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= getResponseCodeTitle() ?></title>
</head>
<body>
    <h1><?= http_response_code() ?> - <?= getResponseCodeTitle() ?></h1>
    <p>You've tried to access <b><?= $_SERVER['HTTP_HOST'] ?></b> which have been blocked on this machine!</p>
    <p>sites blocked on this machine, are either malicious and/or toxic and should be avoided at all times.</p>
</body>
</html>
