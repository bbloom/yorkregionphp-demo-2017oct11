<?php

echo "<h3>using an object gives us the full power of PHP to manipulate arrays and a 'fluent' way to write code</h3>";
echo "hey, just use foreach loops!";

echo  "<br /><br /><b><u>multiply by 3</u></b><br />";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$data = [1, 2, 3, 4, 5];
$multiply = [];
foreach ($data as $number) {
    $multiply[] = $number * 3;
}
</code></pre>
</div>
';

$data = [1, 2, 3, 4, 5];
$multiply = [];
foreach ($data as $number) {
    $multiply[] = $number * 3;
}

echo "<br />original array:<br /> ";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "multiply by 3:<br />";
echo "<pre>";
print_r($multiply);
echo "</pre>";



echo "<br /><b><u>extract the email addresses";
echo "<br />mimic a database query</u></b>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
$data = [
    [\'name\' => \'Rachel\',   \'email\' => \'rachel@abc.com\'],
    [\'name\' => \'Jonathon\', \'email\' => \'jonathon@abc.com\'],
    [\'name\' => \'Aaron\',    \'email\' => \'aaron@abc.com\' ]
];

$emails = [];
foreach ($data as $user) {
    foreach ($user as $key => $value) {
        if ($key == "email") {
            $emails[] = $value;
        }
    }
}
</code></pre>
</div>
';

$data = [
    ['name' => 'Rachel',   'email' => 'rachel@abc.com'],
    ['name' => 'Jonathon', 'email' => 'jonathon@abc.com'],
    ['name' => 'Aaron',    'email' => 'aaron@abc.com' ]
];
$emails = [];
foreach ($data as $user) {
    foreach ($user as $key => $value) {
        if ($key == "email") {
            $emails[] = $value;
        }
    }
}

echo "<br />original array:";
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<br />array with emails only:";
echo "<pre>";
print_r($emails);
echo "</pre>";





echo '<br /><br /><br /><hr /><a href="slide4.php">previous slide...</a> | <a href="slide6.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';