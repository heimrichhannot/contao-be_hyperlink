# Backend Hyperlink

This module offers a simple backend hyperlink form field (text link or button).

> For Contao 4 compability check out [version 2](https://github.com/heimrichhannot/contao-be_hyperlink_bundle/tree/master).

## Technical instructions

Just add the field to some of your data container arrays as follows:

```
$GLOBALS['TL_DCA']['tl_*']['fields']['myHyperlink'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_*']['myHyperlink'],
    'inputType' => 'hyperlink',
    'eval'      => array(
        'hideLabel' => true,
        'text' => &$GLOBALS['TL_LANG']['tl_*']['myHyperlinkText'], // string
        'linkClass'    => 'tl_submit', // use this for contao's button styling
        'tl_class' => 'long',
        'target' => '_blank',
        // the url can be specified as string, callback array ora callable function
        'url'      => 'http://www.example.org',
        'url'      => ['MyClass', 'getUrl'],
        'url'      => function(\DataContainer $objDc) {
            return sprintf('http://www.example.org?id=%s', $objDc->id);
        }
    )
);
```