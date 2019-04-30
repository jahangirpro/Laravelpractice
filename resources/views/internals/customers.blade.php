<ul>
@php
$n=0;  
foreach ($keys as $key) {  
$bigar[$n][1] = $key;  
$n++;  
}
$n=0; 
foreach ($values as $value) {
$bigar[$n][2] = $value;  
$n++;
}
foreach ($bigar as $part) {  
echo "<li>".$part[1]."  : ".$part[2]."</li>";
}  
    
@endphp

</ul>