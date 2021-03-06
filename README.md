# Compress #

Simple wrapper that provides a common interface for data compression. Making easy to change the compression algorithm and use a common interface.

[![Latest Stable Version](https://poser.pugx.org/ebidtech/compress/v/stable.png)](https://packagist.org/packages/ebidtech/compress)
 [![Build Status](https://travis-ci.org/ebidtech/compress.png?branch=master)](https://travis-ci.org/ebidtech/compress) [![Coverage Status](https://coveralls.io/repos/ebidtech/compress/badge.png?branch=master)](https://coveralls.io/r/ebidtech/compress?branch=master) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/ebidtech/compress/badges/quality-score.png?s=c80105e945436933fb277a0595d02394495f63b0)](https://scrutinizer-ci.com/g/ebidtech/compress/) [![Dependency Status](https://www.versioneye.com/user/projects/52977ab3632baca8b4000002/badge.png)](https://www.versioneye.com/user/projects/52977ab3632baca8b4000002)

## Requirements ##

* PHP >= 5.4

## Installation ##

The recommended way to install is through composer.

Just create a `composer.json` file for your project:

``` json
{
    "require": {
        "ebidtech/compress": "@stable"
    }
}
```

**Tip:** browse [`ebidtech/compress`](https://packagist.org/packages/ebidtech/compress) page to choose a stable version to use, avoid the `@stable` meta constraint.

And run these two commands to install it:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ composer install
```

Now you can add the autoloader, and you will have access to the library:

```php
<?php

require 'vendor/autoload.php';
```

## Usage ##

### Builder ###

```php
use EBT\Compress\CompressBuilder;

$compressor = CompressBuilder::create()->get('gzencode');
$compressedData = $compressor->compress('some text');
echo $compressor->uncompress($compressedData); // will print 'some text'
```

### Regular way ###

```php
use EBT\Compress\GzcompressCompressor as Compressor;

$compressor = new Compressor();
$compressedData = $compressor->compress('some text');
echo $compressor->uncompress($compressedData); // will print 'some text'
```

### Traits ###

```php
use EBT\Compress\GzcompressCompressorTrait as CompressorTrait;

class Test
{
    use CompressorTrait;

    public function test()
    {
        $compressedData = $this->compress('test');
        echo $this->uncompress($compressedData); // will print 'some text'
    }
}
```

## Contributing ##

See CONTRIBUTING file.

## Credits ##

* Ebidtech developer team, compress Lead developer [Eduardo Oliveira](https://github.com/entering) (eduardo.oliveira@ebidtech.com).
* [All contributors](https://github.com/ebidtech/compress/contributors)

## License ##

Compress library is released under the MIT License. See the bundled LICENSE file for details.

