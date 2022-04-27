<?php
function kelulusan($total_nilai) {
    if ($total_nilai > 55 ) {
        return 'KAMU LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}