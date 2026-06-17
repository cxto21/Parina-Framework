<footer>
    <p>&copy; <?= date('Y')?> Parina Framework. All rights reserved.</p>
    <?php
    $time_end = microtime(true);
    $mem_end = memory_get_peak_usage();

    $time = round($time_end - PIN_START_TIME, 4);
    $mem = round(($mem_end - PIN_START_MEM) / 1024 / 1024, 2);

    echo "Time: {$time} sec. / Memory: {$mem} MB";
    ?>
</footer>