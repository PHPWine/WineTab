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
                "COMPONENT_REGISTERED_KEY_COMPONENT" 
            ) 
        ) { 
            throw new \Exception( 
                "attempt invalid key : " . 
                    $this->icon . 
                    "!" 
            ); 
            die(); 
        } 
        if ( 
            !wine_compare( 
                $this->prefix, 
                "COMPONENT_REGISTERED_KEY_PREFIX" 
            ) 
        ) { 
            throw new \Exception( 
                "attempt invalid key : " . 
                    $this->prefix . 
                    "!" 
            ); 
            die(); 
        }
        if ( 
            !wine_compare(
         
               $this->hook,
             
              'DOCTRINE_REGISTERED_KEY_HOOKS') 
           ) {
           throw new \Exception("attempt invalid key : ".$this->hook."!");
           die();
       }

    } 
    public function tab() 
    { 
        return $this->wine_action(); 
    } 
} 