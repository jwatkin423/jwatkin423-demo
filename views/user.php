Hello, <?=$user_login?>.
<br /><br />

Your items:<br />

<table border="1">
    <tr>
        <td>Item ID</td>
        <td>Item</td>
    </tr>
    <?
    foreach ($items as $item) { ?>
        <tr>
            <td><?=$item['item_id']?></td>
            <td><?=$item['item_name']?></td>
        </tr>
    <? } ?>
</table>