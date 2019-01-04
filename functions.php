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

    //remove duplicates
    function removeDups($array)
    {
        //new array that will contain duplicates
        $noDuplicates = array();

        foreach(array_count_values($array) as $key => $val)
        {
            array_push($noDuplicates, $key);
        }

        return $noDuplicates;
    }

    function distribution($array)
    {
        $noDuplicates = removeDups($array);
        sort($noDuplicates);
        $newArray = array();

        foreach($noDuplicates as $val)
        {
            $count = 0;

            foreach($array as $value)
            {
                if ($val == $value)
                {
                    $count += 1;
                }
            }

            $newArray[$val] = $count;
        }

        return $newArray;
    }