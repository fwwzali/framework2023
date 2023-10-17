<?php

function kapital($text)
{
    return strtoupper($text);
}

function jenis_kelamin($kode)
{
    if ($kode == 'L') return 'Laki-Laki';
    else return 'Perempuan';
}
