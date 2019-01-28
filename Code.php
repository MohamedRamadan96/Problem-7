function isLucky($n) {
    return array_sum(str_split(substr($n, 0, strlen($n) / 2))) == array_sum(str_split(substr($n, strlen($n) / 2)));
}
