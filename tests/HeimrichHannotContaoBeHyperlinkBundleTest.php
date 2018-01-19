<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @author  Thomas Körner <t.koerner@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


namespace HeimrichHannot\BeHyperlinkBundle\Tests;


use HeimrichHannot\BeHyperlinkBundle\HeimrichHannotContaoBeHyperlinkBundle;
use PHPUnit\Framework\TestCase;

class HeimrichHannotContaoBeHyperlinkBundleTest extends TestCase
{
    public function testCanBeInstantiated() 
    {
        $bundle = new HeimrichHannotContaoBeHyperlinkBundle();
        $this->assertInstanceOf(HeimrichHannotContaoBeHyperlinkBundle::class, $bundle);
    }
}