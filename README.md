>This repository was forked from the the PagesOnDemand mediawiki extension
at http://www.mediawiki.org/wiki/Extension:PagesOnDemand . The original maintainer
left the following email address for questions: jim.hu.biobio@gmail.com

# Pages On Demand
This is a MediaWiki extension that allows you to generate a new page from a red link.

This project was forked to update it for compatibility on Mediawiki versions >= 1.35.0.

## Quickstart
1) Set the following values at the bottom of your LocalSettings.php file in your
mediawiki installation folder:
```php
wfLoadExtension( 'PagesOnDemand' );
```

2) Drop this repo in your extensions/ directory.  It should look as follows:
```bash
PagesOnDemand
├── extension.json
├── i18n
│   ├── en.json
│   └── PagesOnDemand.i18n.php
├── includes
│   ├── DemoOnDemand.php
│   └── PagesOnDemand.php
└── README.md
```
