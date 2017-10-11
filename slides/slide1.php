<?php

echo "<h2>Why This Topic?</h2>";

echo "<br />Scratching an itch... ";

echo "<br /><br /><br /><b><u>(1) ArrayAccess is used a lot in the Laravel Framework</b></u>";
echo '<br ><br />examples: <a href="https://github.com/laravel/framework/blob/5.5/src/Illuminate/Database/Eloquent/Factory.php">Eloquent\'s Factory class</a>, ';
echo '<a href="https://github.com/laravel/framework/blob/5.5/src/Illuminate/Database/Eloquent/Model.php">Eloquent\'s Model class</a>, ';
echo '<a href="https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Arr.php">Array helper class</a>';

echo '<br /><br />and in the <a href="https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Collection.php">Collection class</a>.';
echo '<br /><br />but never really looked at Array Access -- what is it?';



echo "<br /><br /><br /><b><u>(2) Collections class is a way to get rid of loops</b></u>";
echo '<br><br />see <a href="https://www.youtube.com/watch?v=crSUWtRYw-M">Adam Wathan - Curing the common loop - Laracon EU 2016</a> ';
echo '<br />';
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/crSUWtRYw-M?rel=0" frameborder="0" allowfullscreen></iframe>';

echo '<br /><br />The Collection class "provides a wrapper for working with arrays of data" (<a href="https://laravel.com/docs/5.5/collections">Laravel Doc</a>)';
echo '<br /><br />So what is the connection between ArrayAccess and the Collection class?';

echo '<br /><br /><br /><hr /><a href="slide2.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';