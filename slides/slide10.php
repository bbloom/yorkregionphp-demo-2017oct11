<?php

echo "<h3>Laravel's Collection class' implementation of ArrayAccess - excerpted</h3>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
use ArrayAccess;

class Collection implements ArrayAccess
{
    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->items[$key];
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if (is_null($key)) {
            $this->items[] = $value;
        } else {
            $this->items[$key] = $value;
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string  $key
     * @return void
     */
    public function offsetUnset($key)
    {
        unset($this->items[$key]);
    }
}
</code></pre>
</div>
';



echo '<br /><br /><br /><hr /><a href="slide9.php">previous slide...</a> | <a href="slide11.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';