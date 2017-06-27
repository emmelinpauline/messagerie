<?php

/**
 * @param string $currentPage slug de la page courante
 * @param string $slug slug de la page que je veux tester........ mouais
 * @return string active ou pas
 */
function isActive($currentPage, $slug){
    if($currentPage === $slug){
        return ' class="active"';
    }
    return '';
}
