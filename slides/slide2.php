<?php

echo "<h1>Let's Start With Laravel's Collection Class</h1>";

echo "<ul>";
echo '<li><a href="https://laravel.com/docs/5.5/collections">Doc</a></li>';
echo '<li><a href="https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Collection.php">https://github.com/laravel/framework/blob/5.5/src/Illuminate/Support/Collection.php</a></li>';
echo '</ul>';

echo "<br />Stick the array into an object (as a property), and then mess with the array within the object";

echo "<br /><br />This is a *highly* excerpted snippet:";

echo '<div style="border: 1px grey solid; background-color: lightgray;"><pre>';
echo '
// a highly excerpted snippet of Laravel\'s Collection class
class Collection
{
   /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];

    
    /**
     * Create a new collection.
     *
     * @param  mixed  $items
     * @return void
     */
    public function __construct($items = [])
    {
        $this->items = $this->getArrayableItems($items);
    }
    
    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

}
';
echo "</div></pre>";

echo '<br /><br />The collection class cannot be "Composer\'d" separately. So I brought in the entire Laravel Framework. <a href="https://github.com/tightenco/collect">You can try https://github.com/tightenco/collect</a>. ';




echo '<br /><br /><br /><hr /><a href="slide1.php">previous slide...</a> | <a href="slide3.php">next slide...</a>';
echo '<br /><a href="https://github.com/bbloom/yorkregionphp-demo-2017oct11">https://github.com/bbloom/yorkregionphp-demo-2017oct11</a>';