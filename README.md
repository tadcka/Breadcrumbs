Breadcrumbs
===========

[![Build Status](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/badges/build.png?b=master)](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tadcka/Breadcrumbs/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/tadcka/breadcrumbs/v/stable.svg)](https://packagist.org/packages/tadcka/breadcrumbs) [![Total Downloads](https://poser.pugx.org/tadcka/breadcrumbs/downloads.svg)](https://packagist.org/packages/tadcka/breadcrumbs) [![Latest Unstable Version](https://poser.pugx.org/tadcka/breadcrumbs/v/unstable.svg)](https://packagist.org/packages/tadcka/breadcrumbs) [![License](https://poser.pugx.org/tadcka/breadcrumbs/license.svg)](https://packagist.org/packages/tadcka/breadcrumbs)

Breadcrumbs component.

## Installation

### Step 1: Download Breadcrumbs using composer

Add TadckaAddressBundle in your composer.json:

```js
{
    "require": {
        "tadcka/breadcrumbs": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update tadcka/breadcrumbs
```

### Step 2: How use?

Create breadcrumb object:

``` php
<?php
$breadcrumb = new \Tadcka\Component\Breadcrumbs\Breadcrumb();
$breadcrumb->add('acme', '/acme');
$breadcrumb->add('hello');
```

Render html with twig:

``` twig
<ul class="breadcrumb">
    {% for item in breadcrumb %}
        <li><a href="{{ item.url is not empty ? item.url : 'javascript:;' }}">{{ item.title }}</a></li>
    {% endfor %}
</ul>
```
