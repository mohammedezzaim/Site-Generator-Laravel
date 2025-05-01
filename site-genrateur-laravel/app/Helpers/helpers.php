<?php

if (!function_exists('hex2rgba')) {
    function hex2rgba($color, $opacity = 1) {
        // Conversion de l'opacité en float
        $opacity = max(0, min(1, (float)$opacity));
        
        // Nettoyage de la couleur
        $color = ltrim((string)$color, '#');
        
        // Gestion des formats courts (#FFF → FFFFFF)
        if (strlen($color) === 3) {
            $color = $color[0].$color[0].$color[1].$color[1].$color[2].$color[2];
        }
        
        // Validation finale
        if (!preg_match('/^[a-fA-F0-9]{6}$/', $color)) {
            return 'rgba(255, 255, 255, '.$opacity.')'; // Fallback sécurisé
        }
        
        // Conversion hex → rgb
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));
        
        return sprintf('rgba(%d, %d, %d, %.2f)', $r, $g, $b, $opacity);
    }
}