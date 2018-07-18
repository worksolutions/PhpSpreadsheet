<?php

namespace PhpOffice\PhpSpreadsheet\Calculation;

class StringUtils
{

    /**
     * @param $str
     * @param int $index
     * @return string
     */
    public static function charAt($str, $index = 0)
    {
        return mb_substr($str, $index, 1);
    }

    /**
     * @param $str
     * @return int
     */
    public static function length($str)
    {
        return mb_strlen($str);
    }

    /**
     * @param $str
     * @param $index
     * @param null $length
     * @return string
     */
    public static function substr($str, $index, $length = null)
    {
        return mb_substr($str, $index, $length);
    }

    /**
     * @param $str
     * @return string
     */
    public static function toUpper($str)
    {
        return mb_strtoupper($str);
    }
}