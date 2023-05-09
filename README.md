# Laravel License Checker And Obfuscator

[![Packagist](https://badgen.net/packagist/v/jenssegers/optimus)](https://packagist.org/packages/deno/obfuscator)
[![Downloads](https://badgen.net/packagist/dt/jenssegers/optimus)](https://packagist.org/packages/deno/obfuscator/stats)
[![Build](https://github.com/jenssegers/optimus/workflows/tests/badge.svg)](https://github.com/deno/obfuscator/actions) 
[![Coverage](http://img.shields.io/coveralls/jenssegers/optimus.svg)](https://coveralls.io/r/deno/obfuscator?branch=master)

With this package, you can transform your internal id's to obfuscated integers based on Knuth's integer hash. It is similar to Hashids, but will generate integers instead of random strings. It is also super fast.
It also allows the software to check licence. This means it check if software is still running accordance to licence agreements . it also provide webhooks that comes immediately the software comes online.

<p align="center">
<img src="https://jenssegers.com/static/media/optimus.png">
</p>

## Installation

Install using composer:

```bash
composer require deno/obfuscator
```

If you will be running your code on a 32 bit system or will be working with large prime numbers it is suggested that you install the [GMP extension](http://php.net/manual/en/book.gmp.php). 
For debian/ubuntu you can install the extension with one of these commands:

```bash
apt-get install php7.4-gmp
apt-get install php8.0-gmp
apt-get install php8.1-gmp
```


**Third-party integrations**

* An integration with Laravel is provided by the [propaganistas/laravel-fakeid](https://packagist.org/packages/propaganistas/laravel-fakeid) package.
* Laravel Optimus with multiple connections provided by the [cybercog/laravel-optimus](https://github.com/cybercog/laravel-optimus) package.
* An integration with Silex 2 is provided by the [jaam/silex-optimus-provider](https://packagist.org/packages/jaam/silex-optimus-provider) package.
* An integration with Laravel is provided by the [elfsundae/laravel-hashid](https://github.com/ElfSundae/laravel-hashid) package.
* A PSR-15 middleware provided by the [icanhazstring/optimus-middleware](https://github.com/icanhazstring/optimus-middleware) package.

## Security contact information

To report a security vulnerability send email to chumbadennis695@gmail.com

## License

The [MIT](https://opensource.org/licenses/MIT) License.
