<?php 
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @category   Pimcore
 * @package    Object_Class
 * @copyright  Copyright (c) 2009-2010 elements.at New Media Solutions GmbH (http://www.elements.at)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Object_Class_Layout_Button extends Object_Class_Layout {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "button";


    public $handler;

    public $text;


    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }


    public function getHandler() {
        return $this->handler;
    }

    public function setHandler($handler) {
        $this->handler = $handler;
        return $this;
    }

}
