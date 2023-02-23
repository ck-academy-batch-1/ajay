
    <?php
    echo "<pre>";
    $rows = 7;
    $cols = ($rows * 2) - 1;

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {
            $diff = abs($j - ($rows + 1));
            $min = min($i - 1, $rows - $i);
            if ($diff <= $min) {
                echo ($min + 1 - $diff) * 3 . " ";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo"<pre>"
    ?>



