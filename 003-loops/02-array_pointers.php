<?php
/*
PHP maintains a pointer that points to one of the items in an array. That item is reffered to as the current item.
By default it is always the first item in the array.
When we start looping through arrays, using foreach for example, PHP moves the pointer down the array as it assigns each value to the loops variable. Using thispointer PHP knows at which position we are in the array and what is the next item in the array.

But loops are not the only way to move pointers around.

When we declare an array, the pointer points to the first item in the array. As we loop through the array, the pointer moves. The pointer moves from the first, to the second, etc until it arrives at the end of the array. As it does not find any element at the end, it knows it has finished iterating.

We can see the current pointer value by using the current(array) function.
Manually we can move the pointer to the next item using the next(array) function.
We can move the pointer backwards using the prev(array) function.
To move the pointer back to the first element we use the reset(array) function.
end(array) will put the pointer at the last element.
When we go past the last element, nothing is returned and the pointer knows it has reached the end of the array.

The pointer is important when we are looping through a result set in the database.

In the while loop below, we assign the value of the current pointer to the $age variable. If a value was obtained at the current position of the pointer, the while loop is executed.
In the loop, we increment the positon of the pointer. and recheck our while condition at the current position. If nothing is obtained, the loop ends.

As we can see, the while loop below is like a foreach loop. 
Database pointers are not the same as array pointers.
They are similar but not the same.
The database pointer is moved by the database driver each time we request a row. As soon as we access the current pointer element, the cursor is moved to the next element.
 */

$ages = [4, 8, 15, 16, 9, 23, 54, 14, 5, 6];
echo 'First item: ' . current($ages) . '<br>';
echo 'Second item: ' . next($ages) . '<br>';
next($ages);
$current = next($ages);
echo 'Current item: ' . $current . '<br>';
prev($ages);
echo 'Current item: ' . current($ages) . '<br>';
echo 'Reset occurs. Current element: ' . reset($ages) . '<br>';
echo 'Last element: ' . end($ages) . '<br>';
echo 'We go past the last element, there is nothing at the current position: ' . next($ages) . '<br>';

echo '<br><br><hr>';
/*This will not work if we don't reset the pointer as we are currently pointing to null - we are past the last element*/
reset($ages);
while($age = current($ages)) {
	echo $age . ', ';
	next($ages);
}