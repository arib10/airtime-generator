<?php
function generate_pin($number) {
    $generated_pins = array();
    $gen = 0;
    while($gen < $number) {
        $new_pin = "";
        for ($i = 0; $i < 16; $i++) {
            $new_pin .= rand(0, 9);
        }
        array_push($generated_pins, $new_pin);
        $gen++;
    }
    return $generated_pins;
}


$my_pins = generate_pin(200);

?>
<pre>
<?php print_r($my_pins); ?>
</pre>
