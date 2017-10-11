<?php

echo "<h3>let's whip up a class to do the foreach loops...</h3>";

echo "<br /><b>use a function to multiply</b>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
function multiply($data = [])
{
    $multiply = [];
    foreach ($data as $number) {
        $multiply[] = $number * 3;
    }

    return $multiply;
}

$data = [1, 2, 3, 4, 5];
$result = multiply($data);
print_r($result);
</code></pre>
</div>
';


function multiply($data = [])
{
    $multiply = [];
    foreach ($data as $number) {
        $multiply[] = $number * 3;
    }

    return $multiply;
}

$data = [1, 2, 3, 4, 5];
$result = multiply($data);

echo "<pre>";
print_r($result);
echo "</pre>";



echo "<br /><b>use a function to extract the email</b>";

echo '
<div style="border: 1px solid grey; background-color: lightgray;">
<pre><code data-language="php">
function findemails($data = [])
{
    $emails = [];
    foreach ($data as $user) {
        foreach ($user as $key => $value) {
            if ($key == "email") {
                $emails[] = $value;
            }
        }
    }

    return $emails;
}

$data = [
    [\'name\' => \'Rachel\',   \'email\' => \'rachel@abc.com\'],
    [\'name\' => \'Jonathon\', \'email\' => \'jonathon@abc.com\'],
    [\'name\' => \'Aaron\',    \'email\' => \'aaron@abc.com\' ]
];
$result = findemails($data);
print_r($result);
</code></pre>
</div>
';

function findemails($data = [])
{
    $emails = [];
    foreach ($data as $user) {
        foreach ($user as $key => $value) {
            if ($key == "email") {
                $emails[] = $value;
            }
        }
    }

    return $emails;
}

$data = [
    ['name' => 'Rachel',   'email' => 'rachel@abc.com'],
    ['name' => 'Jonathon', 'email' => 'jonathon@abc.com'],
    ['name' => 'Aaron',    'email' => 'aaron@abc.com' ]
];
$result = findemails($data);

echo "<pre>";
print_r($result);
echo "</pre>";




echo '<br /><br /><br /><hr /><a href="slide5.php">previous slide...</a> | <a href="slide7.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';