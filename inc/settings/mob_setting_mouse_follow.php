<!--- Mouse Follow Circle  --->
<?php
    $_opt_id = "asadpro_mob_mouse_follow";
    $_opt_title = "Mobile Mouse Follow Circle";
    $value = get_option( $_opt_id );

    if ( $value == 'on' ) {
        $opt1 = 'checked="checked"';
        $opt2 = '';
    } else {
        $opt1 = '';
        $opt2 = 'checked="checked"';
    }

    $_content = <<<EOD
    <tr>
        <th scope="row" class="title">{$_opt_title}</th>
        <td>
            <div id="{$_opt_id}">
                <fieldset id="active" class="fieldset-switch-toggle">
                    <div class="switch-toggle switch-candy switch-candy-red switch-my_toggle">
                        <input type="radio" id="{$_opt_id}_on" name="{$_opt_id}" value="on" {$opt1}>
                        <label for="{$_opt_id}_on">On</label>

                        <input type="radio" id="{$_opt_id}_off" name="{$_opt_id}" value="off" {$opt2}>
                        <label for="{$_opt_id}_off">Off</label>
                        <a></a>
                    </div>
                </fieldset>
            </div>
        </td>
    </tr>
EOD;
    echo $_content;
?>
<!--- Mouse Follow Circle  --->