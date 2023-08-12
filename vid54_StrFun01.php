<?php
// (1) lcfirst
// (2) ucfirst
// (3) ucwords
// (4) strtolower
// (5) strtoupper
// (6) str_repeat

//lotfy Mohamed Lotfy
echo lcfirst("Lotfy Mohamed Lotfy"). '<br>';

// Lotfy Mohamed Lotfy
echo ucfirst("lotfy mohamed lotfy"). '<br>';

// lotfy mohamed lotfy
echo strtolower("LOTFY MOHAMED LOTFY"). '<br>';

// LOTFY MOHAMED LOTFY
echo strtoupper("lotfy mohamed lotfy"). '<br>';

// Lotfy |Mohamed|Lotfy
echo ucwords("lotfy |mohamed|lotfy","|"). '<br>';

// Lotfy Mohamed Lotfy
echo ucwords("lotfy mohamed lotfy"). '<br>';

// lotfy lotfy lotfy
echo str_repeat("lotfy ", 3);



