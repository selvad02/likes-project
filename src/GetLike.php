<?php

namespace App;

class GetLike {

    public function get(array $names)
    {
        $numberOfNames = count($names);

        if (empty($numberOfNames)) {
            return 'no one likes this';
        }

        if ($numberOfNames === 1) {
            return $names[0] . ' likes this';
        }

        if ($numberOfNames === 2) {
            return $names[0] . ' and ' . $names[1] . ' like this';
        }

        if ($numberOfNames === 3) {
            return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
        }
        
        return $names[0] . ', ' . $names[1] . ' and ' . ($numberOfNames - 2) . ' others like this';        
    }
}
