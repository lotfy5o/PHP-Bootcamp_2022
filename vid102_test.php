<?php

// I can't access this session name
// without session_start()
session_start();
echo "Welcome " . $_SESSION["name"] . " and your Id is " . $_SESSION["id"];