<?php

echo "<h3>Example Array Access</h3>";
echo "Right from the PHP.net doc, but slightly adapted.";


echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
class obj implements ArrayAccess {
    private $container = array();

    public function __construct($data = []) {
        $this->container = $data;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}
$object = new obj($data);

</code></pre>
</div>
';

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$data = [
    \'name\' => "Aaron",
    \'city\' => "Richmond HIll",
    \'email\' => \'aaron@bloom.com"\',
];

$object = new obj($data);


</code></pre>
</div>
';


class obj implements ArrayAccess {
    private $container = array();

    public function __construct($data = []) {
        $this->container = $data;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$data = [
    'name' => "Aaron",
    'city' => "Richmond HIll",
    'email' => 'aaron@bloom.com"',
];
$object = new obj($data);

echo "<br /><h3>Let's output stuff</h3>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
var_dump($object);
</code></pre>
</div>
';
echo "<pre>";
var_dump($object);
echo "</pre>";



echo "<hr>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
echo $object->offsetGet(\'name\');
</code></pre>
</div>
';
echo "name = ". $object->offsetGet('name');



echo "<hr>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
echo $object[\'email\'];
</code></pre>
</div>
';
echo "email = " . $object['email'];

echo "<hr>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$object["honda"] = "Civic";
echo $object["honda"]
</code></pre>
</div>
';
$object["honda"] = "Civic";
echo "honda = " . $object["honda"];




echo '<br /><br /><br /><hr /><a href="slide8.php">previous slide...</a> | <a href="slide10.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';