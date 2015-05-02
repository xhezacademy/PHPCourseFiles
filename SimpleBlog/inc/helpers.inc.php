<?php

function getSetting($section)
{
    global $config;
    return (object) $config[$section];
}
