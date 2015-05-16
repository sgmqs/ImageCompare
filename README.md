# :ImageCompare

[![Latest Version](https://img.shields.io/github/release/coding-sunshine/ImageCompare.svg?style=flat-square)](https://github.com/thephpleague/:package_name/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/coding-sunshine/ImageCompare/master.svg?style=flat-square)](https://travis-ci.org/thephpleague/:package_name)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/coding-sunshine/ImageCompare.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/:package_name/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/coding-sunshine/ImageCompare.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/sunshine/image-compare.svg?style=flat-square)](https://packagist.org/packages/league/:package_name)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_website``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

> A perceptual hash is a fingerprint of a multimedia file derived from various features from its content. Unlike cryptographic hash functions which rely on the avalanche effect of small changes in input leading to drastic changes in the output, perceptual hashes are "close" to one another if the features are similar.

Perceptual hashes are a different concept compared to cryptographic hash functions like MD5 and SHA1. With cryptographic hashes, the hash values are random. The data used to generate the hash acts like a random seed, so the same data will generate the same result, but different data will create different results. Comparing two SHA1 hash values really only tells you two things. If the hashes are different, then the data is different. And if the hashes are the same, then the data is likely the same. In contrast, perceptual hashes can be compared -- giving you a sense of similarity between the two data sets.

This code was based on:
 - https://github.com/kennethrapp/phasher
 - http://www.phash.org
 - http://www.hackerfactor.com/blog/index.php?/archives/529-Kind-of-Like-That.html
 - http://www.hackerfactor.com/blog/?/archives/432-Looks-Like-It.html
 - http://blog.iconfinder.com/detecting-duplicate-images-using-python
 - https://github.com/jenssegers/php-imagehash
 
**WARNING**: the PerceptualHash implementation is still under development.

## Installation

Require this package with composer:

``` bash
$ composer require sunshine/image-compare
```

Or Add 
"sunshine/image-compare": "1.0.*@dev"
in your composer.json file and do 

``` bash
$ composer update
```

After updating composer, add the ServiceProvider to the providers array in config/app.php

```
'Sunshine\ImageCompare\ImageCompareProvider',
```
If you want to use the facade to log messages, add this to your facades in app.php:

```
'ImageCompare'		=> 'Sunshine\ImageCompare\Facades\ImageCompare',
```

## Usage

``` php

    $first_file = '/path/to/file_1.jpg';
    $second_file = '/path/to/file_2.jpg';

    //get hash of both files
    $hash1 = \ImageCompare::hash($first_file);
    $hash2 = \ImageCompare::hash($second_file);
   
    //computer similarity
    $similarity = \ImageCompare::distance($hash1, $hash2);
    print_r($similarity);
    
    $comparision = \ImageCompare::compare($first_file, $second_file);
    print_r($comparision);
    
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email sunshine.mahant@gmail.com instead of using the issue tracker.

## Credits

- [Sunshine](https://github.com/coding-sunshine)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
