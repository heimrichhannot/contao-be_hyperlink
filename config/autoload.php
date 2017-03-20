<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Widgets
	'HeimrichHannot\BeHyperlink\HyperlinkField' => 'system/modules/be_hyperlink/widgets/HyperlinkField.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_hyperlink' => 'system/modules/be_hyperlink/templates/backend',
));
