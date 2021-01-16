<?php

function getFromRequest($param){
    $request = (isset($_REQUEST [$param])) ? $_REQUEST [$param] : null;
    return $request;
}
