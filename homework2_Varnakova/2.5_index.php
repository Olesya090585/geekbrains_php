<?php

function power($val,$pow)
{
    if ($pow == 1)
    {
    return $val;
    } else {
    return ($val * power ($val, $pow - 1));
    }
}
echo power(3, 3);