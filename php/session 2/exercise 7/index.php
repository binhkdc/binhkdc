<table  width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for($i=1;$i<8;$i++){
        echo "<tr>";
        for($j=1;$j<8;$j++) {
            $total=$i+$j;
            if($total%2 == 0)
            {
                echo "<td class='color'></td>";
            }
            else
            {
                echo "<td class='color-1'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
<style>
    .color{
        height:30px;
        width:30px;
        background-color: #FFFFFF;
    }
    .color-1{
        height:30px;
        width:30px;
        background-color: #000000;
    }
</style>
