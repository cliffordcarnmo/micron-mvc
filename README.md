# micron-mvc
An extremely minimal MVC framework for PHP that consists of two files:

`.htaccess` and `index.php`

##Example usage
Accessing the URI http://www.yoursite.com/customer/show/604 creates the array `$request` that contains the following:  
~~~~
array(3) {
  ["class"]=>
  string(8) "customer"
  ["method"]=>
  string(4) "show"
  ["parameter"]=>
  string(3) "604"
}
~~~~
##Note
`.htaccess` requires `mod_rewrite` to be enabled and configured properly with your webserver.
