<?php  

// === (Identical)     --> Returns true if both $a and $b are equal, and have the same data type
// !== (Not Identical) --> Returns true if both $a and $b not equal, or if they don`t have the same data type

var_dump(1 === "1");
echo "<br>";
var_dump(Abc !== "Abc");
echo "<br>";
var_dump(A !== "Abc");
echo "<br>";
var_dump(1 !== "Abc");

?>