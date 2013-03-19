#Contact form for CakePHP 2.x

##features
* multi language
* no tables needed
* custom routes
* validation
* spam protection

## installation
* clone github repository into your CakePHP Application plugin folder:

```bash
git clone https://github.com/patrickhafner/ContactForm-CakePHP-2.git Plugin/Contactform
```

* add following code into your Config/email.php and configure:

```php
public $contactform = array(
	    'transport' => 'Mail',
	    'from' => array('mail@example.com' => 'example.com | contact form'),
	    'bcc' => 'yourmail@example.com',
	    'charset' => 'utf-8',
	    'headerCharset' => 'utf-8',
	);
```

other config:

```php
public $smtp = array(
		'transport' => 'Smtp',
		'from' => array('site@localhost' => 'My Site'),
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'user',
		'password' => 'secret',
		'client' => null,
		'log' => true,
		'charset' => 'utf-8',
		'headerCharset' => 'utf-8',
);
```

* if you'd like to use an existing email configuration, please change Controller/ContactformController.php:

```php
$email->config('YOURCONFIG_IN_EMAIL_PHP');
```

* add following code in {APP_DIR}/Config/bootstrap.php

```php
CakePlugin::load('Contactform', array('routes' => true));
```

or use this code to load all plugins, located in your application
```php
CakePlugin::loadAll(); // Loads all plugins at once
```

* test contact form with following url: **http://yourapp.example.com/contact**

##screenshot
![screenshot](https://raw.github.com/patrickhafner/ContactForm-CakePHP-2/master/screenshot.png)

## todo

* ~~create mail template~~

##license
MIT license

You are free to use this contact form plugin in commercial projects as long as the copyright header is left intact.

Copyright (C) 2013 Patrick Hafner <dev@patrickhafner.de>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.