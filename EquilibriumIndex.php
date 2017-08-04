<!-- Hey Tyler,

I had a bunch of ideas here. The first of which had nested loops which seemed really inefficient. My gut tells me there's a way to work this backwards using a while loop that might be the cleanest / "DRY-est" but I felt like I was maybe wandering down an unecessary rabbit hole so I checked back to this idea. Given a second pass I might push on that while loop idea a little further. It wasn't clear whether the calculations should be inclusive of the current value/index so I just followed what I gleaned from google to be the standard approach. If it were to be inclusive I would just tweak the start and end values in the slice methods appropriately and everything else should run fine I think. 

I'm sure there are some edge cases that I have't explored and I didn't add any checks to make sure the data was clean ( i.e. make sure everything is an integer, no unexpected data types etc.) or error handling so I think That would be my next point of focus. I would also put an if block in the return to handle an empty array should there be no eq index.-->

<?php

# Put a valid docblock here!
function getEquilibriums($arr) {
	$output = array();
   
// I used a bunch of echos here just to make sure I was on the right track. I think they illustrate the process pretty well so I left them in. 

// Loop through the array
for ($i = 0; $i< count($arr); $i++) {
    echo "index $i value $arr[$i] <br>";
    
// Gather left values and find their sum
    $left =  array_slice($arr,0,$i);
    $lsum = array_sum($left);
    echo "Test L: " . $lsum . "<br>";
    
// Gather right values and find their sum
    $right = array_slice($arr,$i+1, count($arr));
    $rsum = array_sum($right);
    echo "Test R: " . $rsum . "<br>";

// Compare the values and build the $output
    if ($lsum == $rsum) {
        array_push($output,$i);
        echo "push:" . $i , "<br>";
    } else {
       echo  "No push<br>";
    }
    
}

	return $output;
}
?>
 
