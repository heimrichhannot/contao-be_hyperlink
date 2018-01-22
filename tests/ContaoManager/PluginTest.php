<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @author  Thomas Körner <t.koerner@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


namespace HeimrichHannot\BeHyperlinkBundle\Tests\ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use HeimrichHannot\BeHyperlinkBundle\ContaoManager\Plugin;
use HeimrichHannot\BeHyperlinkBundle\HeimrichHannotContaoBeHyperlinkBundle;
use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase
{
    public function testInstantiation()
    {
        static::assertInstanceOf(Plugin::class, new Plugin());
    }

    public function testGetBundles()
    {
        $plugin = new Plugin();
        $bundles = $plugin->getBundles(new DelegatingParser());
        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertEquals(HeimrichHannotContaoBeHyperlinkBundle::class, $bundles[0]->getName());
        $this->assertEquals([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
    }

}