<?php
  function twoSum($nums, $target) {
    $map = []; // Map to store the complement of each number
    
    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];
        
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        
        $map[$nums[$i]] = $i;
    }
    
    return []; // Return an empty array if no solution is found
}

// Example usage
$nums = [2, 7, 11, 15];
$target = 26;
$result = twoSum($nums, $target);
echo "[{$result[0]}, {$result[1]}]";