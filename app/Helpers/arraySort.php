<?php

if (!function_exists('arraySort')) {
    /**
     * Функция отсортировывает элементы переданного массива, по указанному ключу в указанном направлении
     * @param array $array
     * @param string $key по которому будет сорироваться
     * @param int $sort для сортировки по возрастанию: SORT_ASC , по убыванию SORT_DESC
     * @return array отсортированный массив
     */
    function arraySort(array $array, string $key = 'sort', int $sort = SORT_ASC): array
    {
        usort($array, function ($a, $b) use ($key, $sort) {
            return $sort == SORT_DESC ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
        });
        return $array;
    }
}
