<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:34
 */

class StrUtils
{

    private $str;

    public function __construct()
    {
        $this->str = 'Texte par défaut';
    }

    public function bold()
    {
        return '<strong>'.$this->str.'</strong>';
    }
    public function italic()
    {
        return '<i>'.$this->str.'</i>';
    }
    public function underline()
    {
        return '<u>'.$this->str.'</u>';
    }
    public function capitalize()
    {
        return '<span style="text-transform: uppercase">'.$this->str.'</span>';

    }
    public function uglify()
    {
        return '<span style="text-transform: uppercase"><strong><i><u>'.$this->str.'</u></i></strong></span>';
    }
    public function getStr($str)
    {
        $this->str = $str;
    }
    public function setStr()
    {
        return $this->str;
    }
}