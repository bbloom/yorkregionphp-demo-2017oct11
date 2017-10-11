<?php

include('/Users/bob/LaSalleSoftware/mbp.yrphp-demo-2017oct11.com/vendor/autoload.php');
use Illuminate\Support\Collection;
use Illuminate\Support\CollectionNoArrayAccess;


echo '<hr /><a href="slide10.php">previous slide...</a> | <a href="slide12.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';
echo "<hr />";



echo "<h3>ArrayAccess with Laravel's Collection class</h3>";

$data = [1, 2, 3];
$collection = new Collection($data);
$collection['name']  = "Ellen";
$collection['city']  = "Richmond Hill";
$collection['email'] = "ellen@abc.com";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
use Illuminate\Support\Collection;

$data = [1, 2, 3];
$collection = new Collection($data);
$collection[\'name\']  = "Ellen";
$collection[\'city\']  = "Richmond Hill";
$collection[\'email\'] = "ellen@abc.com";
</code></pre>
</div>
';
echo "name  = " . $collection['name'];
echo "<br />city  = " . $collection['city'];
echo "<br />email = " . $collection['email'];


echo "<br /><br /><h3>Taking out the ArrayAccess implementation in Laravel's Collection class (should *not* work!)</h3>";
echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
// copied the Collection class and removed the ArrayAccess implementation!
use Illuminate\Support\CollectionNoArrayAccess;

$data = [1, 2, 3];
$collectionnoarrayaccess = new CollectionNoArrayAccess($data);
$collectionnoarrayaccess[\'name\']  = "Ellen";
$collectionnoarrayaccess[\'city\']  = "Richmond Hill";
$collectionnoarrayaccess[\'email\'] = "ellen@abc.com";

</code></pre>
</div>
';

$collectionnoarrayaccess = new CollectionNoArrayAccess($data);

echo "<br /><em>should get a 'Fatal error' at the next line...</em>";

$collectionnoarrayaccess['name']  = "Ellen";
$collectionnoarrayaccess['city']  = "Richmond Hill";
$collectionnoarrayaccess['email'] = "ellen@abc.com";

echo "<br />name  = " . $collectionnoarrayaccess['name'];
echo "<br />city  = " . $collectionnoarrayaccess['city'];
echo "<br />email = " . $collectionnoarrayaccess['email'];







echo '<br /><br /><br /><hr /><a href="slide10.php">previous slide...</a> | <a href="slide12.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';