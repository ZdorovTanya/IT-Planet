<?php

session_set_cookie_params(31100000);
session_start();
require "app/core/router.php";
Router::start();
