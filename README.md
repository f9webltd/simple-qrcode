[![Run Tests - Current](https://github.com/f9webltd/simple-qrcode/actions/workflows/run-tests.yml/badge.svg)](https://github.com/f9webltd/simple-qrcode/actions/workflows/run-tests.yml)
[![Packagist Version](https://img.shields.io/packagist/v/f9webltd/simple-qrcode?style=flat-square)](https://packagist.org/packages/f9webltd/simple-qrcode)
[![Packagist PHP Version](https://img.shields.io/packagist/php-v/f9webltd/simple-qrcode?style=flat-square)](https://packagist.org/packages/f9webltd/simple-qrcode)

Simple QrCode Generator For Laravel
========================

This is a PHP `^8.2` and Laravel `^10.0` / `^11.0` / `^12.0`  fork of `SimpleSoftwareIO/simple-qrcode` (which appears to be a dead repository). The fork applies the major none merged pull requests.

## Introduction

Simple QrCode is an easy to use wrapper for the popular Laravel framework based on the great work provided by [Bacon/BaconQrCode](https://github.com/Bacon/BaconQrCode).

## Installation

`composer require f9webltd/simple-qrcode`

## Quick Start

#### Within a Blade view

```php
{!! QrCode::size(100)->generate(Request::url()); !!}
```

#### As an image

```html
<img src="{!! QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png') !!}" />
```

##### As an image inline (no image saved to disk)

```html
<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) !!}" />
```

Full documentation available [here](https://github.com/f9webltd/simple-qrcode/blob/develop/docs/en/README.md)

## Usage Outside Laravel

You may use this package outside of Laravel by instantiating a new `F9WebLtd\QrCode\Generator` class.

```php
use F9WebLtd\QrCode\Generator;

$qrcode = new Generator;
$qrcode->size(500)->generate('Make a qrcode without Laravel!');
```

## License

This software is released under the [MIT license.](https://opensource.org/licenses/MIT)
