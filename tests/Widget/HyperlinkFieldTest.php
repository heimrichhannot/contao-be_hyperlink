<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @author  Thomas Körner <t.koerner@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\BeHyperlinkBundle\Tests\Widget;

use Contao\CoreBundle\Framework\Adapter;
use Contao\System;
use Contao\TemplateLoader;
use Contao\TestCase\ContaoTestCase;
use HeimrichHannot\BeHyperlinkBundle\Widget\HyperlinkField;
use PHPUnit\Framework\TestCase;

class HyperlinkFieldTest extends ContaoTestCase
{
    /**
     * @var HyperlinkField
     */
    protected $widget;

    public function setUp()
    {
        $container = $this->mockContainer();
        System::setContainer($container);

        $globalPage = new \stdClass();
        $globalPage->outputFormat = '';
        $globalPage->templateGroup = '';

        $GLOBALS['objPage'] = $globalPage;
        $this->widget = new HyperlinkField();
    }

    public function testCanBeInstantiated()
    {
        $this->assertInstanceOf(HyperlinkField::class, $this->widget);
    }

    /**
     *
     */
    public function testGenerate()
    {
        $this->markTestIncomplete();
        $this->assertEquals('', $this->widget->generate());
    }
}