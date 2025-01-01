```php
function incrementArrayValue(array &$arr, int $index, int $increment): void {
  $arr[$index] = ($arr[$index] ?? 0) + $increment; // Use null coalescing operator
}

$myArray = [1, 2, 3];
incrementArrayValue($myArray, 3, 5); // Try to increment a non-existent index
echo json_encode($myArray);
```