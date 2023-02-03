<?php

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $map = [
            "0" => 0,
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];

        $elements = str_split($s);
        $num = 0;

        foreach ($elements as $e) {
            $currentValue = current($elements);
            $nextValue = next($elements);

            if ($map[$currentValue] >= $map[$nextValue]) {
                $num = $num + $map[$e];
            } else {
                $num = $num - $map[$e];
            }
        }

        return $num;
    }
}

class Solution2
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $s = strtr(
            $s,
            [
                'M' => '1000,',
                'CM' => '900,',
                'D' => '500,',
                'CD' => '400,',
                'C' => '100,',
                'XC' => '90,',
                'L' => '50,',
                'XL' => '40,',
                'X' => '10,',
                'IX' => '9,',
                'V' => '5,',
                'IV' => '4',
                'I' => '1,'
            ]
        );
        return array_sum(explode(',', $s));
    }
}
