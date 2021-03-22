<?php

function convertToReadableSize($size)
{
    // $base = log($size) / log(1024);
    // $suffix = array("bps", "Kbps", "Mbps", "Gbps", "Tbps");
    // $f_base = floor($base);
    // // Fix for bits per second
    // return round(pow(1024, $base - floor($base)), 1) * 8 . ' ' . $suffix[$f_base];

    return round(($size/125000),2).' Mbps';
}
