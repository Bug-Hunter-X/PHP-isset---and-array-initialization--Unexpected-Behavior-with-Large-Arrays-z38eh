```php
function incrementArrayValue(array &$arr, int $index, int $increment): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if index doesn't exist
  }
  $arr[$index] += $increment; // Increment the value
}

$myArray = [1, 2, 3];
incrementArrayValue($myArray, 3, 5); // Try to increment a non-existent index
echo json_encode($myArray);
```