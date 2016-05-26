Session 0.1.3
=============

A simple session manager based on [Chernozem](https://github.com/pyrsmk/Chernozem).

Install
-------

Pick up the source or install it with [Composer](https://getcomposer.org/) :

```
composer require pyrsmk/session
```

If you're not installing it with Composer, don't forget to load its dependencies too : [Chernozem](https://github.com/pyrsmk/Chernozem).

Managing session variables
--------------------------

As mentioned above, this library is based on Chernozem. Therefore, its use is pretty simple :

```php
// Create the session object
$session=new Session();
// Define a session variable
$session['user_id']=$user_id;
// Print a previously defined session variable
echo $session['user_id'];
// Remove a variable
unset($session['user_id']);
```

If needed, you can add a namespace to your session by specifying it at instantiation :

```php
$session=new Session('my_namespace');
```

License
-------

Session is released under the [MIT license](http://dreamysource.mit-license.org).