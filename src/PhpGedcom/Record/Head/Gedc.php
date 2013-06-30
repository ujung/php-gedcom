<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom 
 * @license         GPL-3.0
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Head;

/**
 * Class Gedc
 * @package PhpGedcom\Record\Head
 */
class Gedc extends \PhpGedcom\Record
{
    /**
     * @var string
     */
    protected $vers;
    
    /**
     * @var string
     */
    protected $form;

    /**
     * @param mixed $vers
     */
    public function setVers($vers)
    {
        $this->vers = $vers;
    }

    /**
     * @return mixed
     */
    public function getVers()
    {
        return $this->vers;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }
}