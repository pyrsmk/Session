Session 0.1.0
=============

A simple session manager based on [Chernozem](https://github.com/pyrsmk/Chernozem).

Install
-------

You can install it with [Composer](https://getcomposer.org/) :

```json
{
    "require": {
        "pyrsmk/session": "0.1.*"
    }
}
```

Or you can pick up the `Session.php` source file, but do not forget to add [Chernozem](https://github.com/pyrsmk/Chernozem) to your project.

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