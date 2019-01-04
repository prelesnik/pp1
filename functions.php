<?php
    function largest($array)
    {
        rsort($array);
        return $array[0];
    }