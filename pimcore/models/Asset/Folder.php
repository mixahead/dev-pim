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
 * @package    Asset
 * @copyright  Copyright (c) 2009-2010 elements.at New Media Solutions GmbH (http://www.elements.at)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Asset_Folder extends Asset
{

    /**
     * @var string
     */
    public $type = "folder";

    /**
     * set the children of the document
     *
     * @return array
     */
    public function setChilds($childs)
    {
        $this->childs = $childs;
        if (is_array($childs) and count($childs > 0)) {
            $this->hasChilds = true;
        } else {
            $this->hasChilds = false;
        }
        return $this;
    }
}
