<?php
session_start();
if (isset($_POST["dato"])) {
    $_SESSION["datos"] = implode(",", $_SESSION[$_POST["dato"]]);
    header("Location:ver");
} else {
}
