# Nobel Prize List :trophy:
## Built using PHP, Bootstrap, JSON.
```php
<?php
//Loads JSON from .json-file
$nobelData = file_get_contents('json/prizes.json');
//Turns JSON data into PHP associative array with json_decode
$nobelData = json_decode($nobelData, true);
```
## Länkar

* [PHP.net Documentation](http://php.net/)
* [PHP.net: `require`](http://php.net/manual/en/function.require.php)
* [PHP.net: `include`](http://php.net/manual/en/function.include.php)
* [Bootstrap Getting Started](https://v4-alpha.getbootstrap.com/getting-started/introduction/)
* [Bootstrap - **Component: Card**](https://v4-alpha.getbootstrap.com/components/card/)
* [Nobel Prize API](https://nobelprize.readme.io/docs)
