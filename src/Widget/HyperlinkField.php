<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) Heimrich & Hannot GmbH
 *
 * @package be_hyperlink
 * @author  Dennis Patzer
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\BeHyperlinkBundle\Widget;

use Contao\BackendTemplate;
use Contao\System;
use Contao\Widget;

class HyperlinkField extends Widget
{
    protected $strTemplate = 'be_widget';

    public function generate()
    {
        $objTemplate = new BackendTemplate('be_hyperlink');
        $objTemplate->setData($this->arrConfiguration);

        // prepare url
        $strUrl = '#';

        if (isset($this->arrConfiguration['url']))
        {
            if (is_string($this->arrConfiguration['url']))
            {
                $strUrl = $this->arrConfiguration['url'];
            }
            elseif (is_array($this->arrConfiguration['url']))
            {
                $arrCallback = $this->arrConfiguration['url'];

                $objCallback = System::importStatic($arrCallback[0]);

                $strUrl = $objCallback->{$arrCallback[1]}($this->objDca, $this);
            }
            elseif (is_callable($this->arrConfiguration['url']))
            {
                $strUrl = $this->arrConfiguration['url']($this, $this->objDca);
            }
        }

        $objTemplate->url = $strUrl;

        return $objTemplate->parse();
    }
}
