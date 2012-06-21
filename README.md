#Contact form for CakePHP 2

##features
* multi language
* no tables needed
* custom routes
* validation

## installation
* clone github repository into your CakePHP Application plugin folder
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

* if you'd like to use an existing email configuration, please change Controller/ContactformController.php:

```php
$email->config('YOURCONFIG_IN_EMAIL_PHP');
```

* test contact form with following url: **http://yourapp.com/contact**