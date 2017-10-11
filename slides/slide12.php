<?php

include('/Users/bob/LaSalleSoftware/mbp.yrphp-demo-2017oct11.com/vendor/autoload.php');
use Illuminate\Support\CollectionNoArrayAccess;

echo "<br /><b>... but the Collection methods work!</b>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
use Illuminate\Support\CollectionNoArrayAccess;

$data = [1, 2, 3];
$collectionnoarrayaccess = new CollectionNoArrayAccess($data);
$emails = $collectionnoarrayaccess->map(function ($item, $key) {
    return $item * 3;
});
</code></pre></div>
';


$data = [1, 2, 3];
$collectionnoarrayaccess = new CollectionNoArrayAccess($data);
$emails = $collectionnoarrayaccess->map(function ($item, $key) {
    return $item * 3;
});
echo "<br /><b>multiply by 3</b>";
echo "<br />the original data array:";
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<br />the array multiplied by 3";
echo "<pre>";
print_r($emails->all());
echo "</pre>";


echo '<br /><br /><br /><hr /><a href="slide11.php">previous slide...</a> | <a href="slide13.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';