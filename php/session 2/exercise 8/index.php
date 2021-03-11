<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    function snt($x)
    {
        if ($x < 2) {
            return false;
        }
        $j= sqrt($x);
        for ($i = 2; $i <= $j; $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 10 == 0) {
            echo "<td>$i</td>";
            echo "<tr></tr>";
        } else {
            if (snt($i)) {
                echo "<td class='color-black'>$i</td>";
            } else {
                echo "<td>$i</td>";
            }
        }
    }
    ?>
</table>
<style>
    .color-black {
        background-color: #00ced1;
    }
</style>
















