<?php
namespace PHPWineTab;

ini_set("\144\151\x73\x70\x6c\141\171\137\x65\x72\162\x6f\x72\x73", 1);
ini_set(
    "\x64\151\163\160\x6c\x61\x79\x5f\x73\x74\x61\x72\164\x75\x70\137\145\162\162\157\x72\x73",
    1
);
error_reporting(E_ALL);

/**
* @copyright (c) 2023 PHPWine App Tab Cooked by nielsoffice
*
* MIT License
*
* PHPWine App Tab free software: you can redistribute it and/or modify.
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @category   PHPWine Component Accordion
*
*
* @author    Leinner Zednanref <syncdevprojects@gmail.com>
* @license   MIT License
* @link      https://github.com/PHPWine/WineAccordion/tree/main
* @link      https://github.com/PHPWine/WineAccordion/README.md
* @version   v1.0
* @since     11.29.2023
*
*/

class WineTab 
extends \PHPWineOptimizedHtml\Doctrine\Tab 
implements \PHPWineOptimizedHtml\Interfaces\TabInterface
{
    public function __construct(array $wine = [])
    {
        parent::__construct($wine);
        if (
            !wine_compare(
                $this->icon,
                "\x43\x4f\115\x50\117\x4e\x45\116\124\x5f\x52\105\107\111\123\x54\x45\x52\x45\x44\x5f\113\x45\x59\137\x41\103\x43\117\122\x44\x49\117\116"
            )
        ) {
            throw new \Exception(
                "\141\164\164\145\x6d\160\x74\x20\x69\156\166\141\154\x69\144\x20\x6b\x65\x79\x20\x3a\x20" .
                    $this->icon .
                    "\x21"
            );
            die();
        }
        if (
            !wine_compare(
                $this->prefix,
                "\103\x4f\x4d\120\x4f\x4e\x45\116\x54\137\122\105\x47\111\x53\x54\x45\x52\x45\104\137\x4b\105\x59\x5f\x50\x52\105\x46\111\x58"
            )
        ) {
            throw new \Exception(
                "\141\164\164\x65\155\x70\164\40\151\156\x76\141\154\151\x64\40\x6b\145\171\x20\72\x20" .
                    $this->prefix .
                    "\41"
            );
            die();
        }
    }
    public function tab()
    {
        return $this->wine_action();
    }
}
