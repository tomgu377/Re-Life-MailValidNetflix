<?php
$config = [
    /*
    syarat instalasi:
        - XAMPP dengan versi php terbaru
        - IONCUBE LOADER (install nya di dalam xampp)
    Pengecekkan dapat dilakukan dengan format:
        - username@email.com
        - username@email.com:password
    simpan file list kamu di folder validator ini dan ganti namanya
    agar mempermudah pembacaan saat tools ini dijalankan
    menjalankan tools: php run.php namalistkamu.txt
    */
    /* [ LISENCE APIKEY CONFIGURATION ] */
    'APIKEY'            => 'YOUR APIKEY',       // APIKEY KAMU

    // DISARANKAN MENGGUNAKAN PROXY AGAR TIDAK TERJADI BLOCK REQUEST
    // YANG DAPAT MENGAKIBATKAN IP KAMU DI BLOCK
    /* [ PROXY CONFIGURATION ] */
    'USE_PROXY'         => TRUE,                // TRUE UNTUK MENGKATIFKAN DAN FALSE MENONAKTIFKAN PENGGUNAAN PROXY
    'PROXYSERVER'       => TRUE,                // TRUE UNTUK MENGAKTIFKAN DAN FALSE MENONAKTIFKAN PROXYSERVER
    'PROXY_AUTH'        => TRUE,                // TRUE UNTUK MENGAKTIFKAN DAN FALSE MENONAKTIFKAN AUTH PROXY
    'PROXYUSER'         => 'USERNAME:PASSWORD', // USERNAME DAN PASSWORD PROXY
    'PROXYTYPE'         => 'SOCKS5',            // SESUAIKAN DENGAN TYPE PROXY KAMU
    'SERVEROR_IP_PROXY' => 'proxy.txt',         // ISI FILE .txt ATAU LANGSUNG DENGAN PROXY KAMU

    /* [ PROGRAM CONFIGURATION PROCESSING ] */
    'THREAD'            => 50,                  // CONFIGURASI THREAD KAMU MENYESUAIKAN DENGAN BATAS YANG KAMU PUNYA
    'DELAY'             => 2,                   // DELAY PER CHECK
    'DETECT_DUPLICATE'  => TRUE,                // DETECT DUPLICATE EMAIL

    /* [ SAVE CONFIGURATION ] */
    'SAVE_FOLDER'       => 'result',            // LOKASI PENYIMPANAN
];
