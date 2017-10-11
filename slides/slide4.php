<?php

include('/Users/bob/LaSalleSoftware/mbp.yrphp-demo-2017oct11.com/vendor/autoload.php');
use Illuminate\Support\Collection;


echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
// Example of Laravel\'s Collection class methods
// https://laravel.com/docs/5.5/collections#available-methods
use Illuminate\Support\Collection;

$data = [5, 4, 3, 2, 1];
$collection = new Collection($data);
$sorted = $collection->sort();

// sorted with original keys
print_r($sorted->all());

// sorted with reset the keys to consecutively numbered indexes
print_r($sorted->values()->all());
</code></pre>
</div>
';


// Example of Laravel's Collection class methods
$data = [5, 4, 3, 2, 1];
$collection = new Collection($data);
$sorted = $collection->sort();

echo "sorted with original keys";
echo "<pre>";
print_r($sorted->all());
echo "</pre>";

echo "<br />sorted with reset the keys to consecutively numbered indexes";
echo "<pre>";
print_r($sorted->values()->all());
echo "</pre>";






echo '<br /><br /><br /><hr /><a href="slide3.php">previous slide...</a> | <a href="slide5.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';