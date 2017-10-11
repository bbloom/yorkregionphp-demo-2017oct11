<?php

echo "<h3>PHP's Array Access</h3>";
echo '<a href="http://php.net/manual/en/class.arrayaccess.php">Documentation at PHP.net</a>';

echo "<br /><br />Interface to provide accessing objects as arrays. It's an interface! You have to figure out the implementation!";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
ArrayAccess {

    abstract public boolean offsetExists ( mixed $offset )
    abstract public mixed offsetGet ( mixed $offset )
    abstract public void offsetSet ( mixed $offset , mixed $value )
    abstract public void offsetUnset ( mixed $offset )
}

</code></pre>
</div>
';

echo '<br /><br /><br /><hr /><a href="slide7.php">previous slide...</a> | <a href="slide9.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';