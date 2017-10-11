<?php

include('/Users/bob/LaSalleSoftware/mbp.yrphp-demo-2017oct11.com/vendor/autoload.php');

use Illuminate\Support\Collection;

echo "<h3>Using the Laravel Collection class</h3>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
use Illuminate\Support\Collection;

// set the data array -- pretend it is a user returned from a database query!
$data = [
    \'name\'  => \'Rachel\',
    \'city\'  => \'Richmond Hill\',
    \'email\' => \'rachel@abc.com\'
];

// create the collection object
// the data array is a property within the object
$collection_object = new Collection($data);

// create the collection object
// the data array is a property within the object
$collection_object = new Collection($data);

// What does the collection object look like?
echo "print_r(Scollection_object)";

// what does the "array" property look like?
print_r($collection_object->all());
</code></pre>
</div>
';


// set the data array -- pretend it is a user returned from a data query!
$data = [
    'name'  => 'Rachel',
    'city'  => 'Richmond Hill',
    'email' => 'rachel@abc.com'
];

// create the collection object
// the data array is a property within the object
$collection_object = new Collection($data);


echo "<br /><h3>What does the collection object look like?</h3>";
echo "<pre>";
print_r($collection_object);
echo "</pre>";


echo '<h3>What does the "array" property look like?</h3>';
echo "<pre>";
print_r($collection_object->all());
echo "</pre>";



echo '<br /><br /><br /><hr /><a href="slide2.php">previous slide...</a> | <a href="slide4.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';
