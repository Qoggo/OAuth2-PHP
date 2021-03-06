<?php

/*
 *
 * Sample client add script.
 * Obviously not production-ready code, just simple and to the point.
 *
 */
ini_set('display_errors', 1);
error_reporting(-1);

include "lib/PDOOAuth2.inc";

if ($_POST && isset($_POST["id"]) && isset($_POST["pw"]) && isset($_POST["uri"])) {
    $oauth = new PDOOAuth2();
    $oauth->add_client($_POST["id"], $_POST["pw"], $_POST["uri"]);
}

?>

<html>
    <head>Add Client</head>
    <body>
        <form method="post" action="addclient.php">
            <p>
                <label for="id">Client ID:</label>
                <input type="text" name="id" id="id" />
            </p>
            <p>
                <label for="pw">Client Secret (password/key):</label>
                <input type="text" name="pw" id="pw" />
            </p>
            <p>
                <label for="uri">Redirect URI:</label>
                <input type="text" name="uri" id="uri" />
            </p>

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
