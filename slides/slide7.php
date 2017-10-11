<?php

include('/Users/bob/LaSalleSoftware/mbp.yrphp-demo-2017oct11.com/vendor/autoload.php');

use Illuminate\Support\Collection;



echo "<h3>use the Laravel Collection class to multiply and to extract the email address</h3>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$data = [1, 2, 3, 4, 5];
$collection = new Collection($data);
$multiplied = $collection->map(function ($item, $key) {
    return $item * 3;
});

print_r($multiplied->all());
</code></pre>
</div>
';


$data = [1, 2, 3, 4, 5];
$collection = new Collection($data);
$multiplied = $collection->map(function ($item, $key) {
    return $item * 3;
});

echo "multiply:";
echo "<pre>";
print_r($multiplied->all());
echo "</pre>";



echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$data = [
    [\'name\' => \'Rachel\',   \'email\' => \'rachel@abc.com\'],
    [\'name\' => \'Jonathon\', \'email\' => \'jonathon@abc.com\'],
    [\'name\' => \'Aaron\',    \'email\' => \'aaron@abc.com\' ]
];

$collection = new Collection($data);
$emails = $collection->pluck(\'email\');
print_r($emails->all());
</code></pre>
</div>
';

$data = [
    ['name' => 'Rachel',   'email' => 'rachel@abc.com'],
    ['name' => 'Jonathon', 'email' => 'jonathon@abc.com'],
    ['name' => 'Aaron',    'email' => 'aaron@abc.com' ]
];
$collection = new Collection($data);
$emails = $collection->pluck('email');

echo "extract emails:";
echo "<pre>";
print_r($emails->all());
echo "</pre>";



echo '<br /><br /><br /><hr /><a href="slide6.php">previous slide...</a> | <a href="slide8.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';