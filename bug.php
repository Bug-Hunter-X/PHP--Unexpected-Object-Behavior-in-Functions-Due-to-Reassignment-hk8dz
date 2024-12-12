In PHP, a common yet subtle error arises when dealing with object references and their modification within functions.  Consider this example:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass $obj) {
    $obj->value = 10;
}

$myObject = new MyClass();
modifyObject($myObject);
echo $myObject->value; // Outputs 10
```

This works as expected. However, if you try to modify the object by reassigning it within the function:

```php
function modifyObject(MyClass $obj) {
    $obj = new MyClass(); // Creates a new object
    $obj->value = 10;
}

$myObject = new MyClass();
modifyObject($myObject);
echo $myObject->value; // Outputs 0, unexpectedly!
```

The issue is that inside `modifyObject`, `$obj` is reassigned to a *new* object. The original `$myObject` remains unchanged.  This is a common source of confusion, especially for programmers accustomed to pass-by-reference behavior in other languages.  The solution involves altering the object's properties directly, without reassignment, as shown in the first example. 