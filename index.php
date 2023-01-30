<?php
    $result = explode('/', $_SERVER['REQUEST_URI']);
    switch($result[1]) {
        case '':
            include "page1.html";
            break;
        case '2':
            include "page2.html";
            break;
    }