<?php
    //find the largest number in the array
    function largest($array)
    {
        rsort($array);
        return $array[0];
    }

    //find the average of all numbers in the array
    function average($array)
    {
        $total = 0;

        for ($i = 0; $i < count($array); $i++)
        {
            $total += $array[$i];
        }

        return ($total / count($array));
    }