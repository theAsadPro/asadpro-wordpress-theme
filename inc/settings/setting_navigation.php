<?php
$_opt_id = "asadpro_nav_align";
$_opt_title = "Navigation Align";
$value = get_option( $_opt_id );

$opt1 = '';
$opt2 = '';
$opt3 = '';
$checked1 = '';
$checked2 = '';
$checked3 = '';

switch ( $value ) {
case 'center':
    $opt2 = 'center';
    $checked2 = 'checked="checked"';
    break;

case 'end':
    $opt3 = 'end';
    $checked3 = 'checked="checked"';
    break;

default:
    $opt1 = 'start';
    $checked1 = 'checked="checked"';
    break;
}

$_content = <<<EOD
    <tr>
    <th scope="row" class="title">{$_opt_title}</th>
        <td>
            <div id="{$_opt_id}">
                <fieldset id="active" class="fieldset-switch-toggle switch-item-3">
                    <div class="switch-toggle switch-candy switch-candy-red switch-my_toggle">

                        <input type="radio" id="{$_opt_id}_start" name="{$_opt_id}" value="start" {$checked1} >
                        <label for="{$_opt_id}_start">Left</label>

                        <input type="radio" id="{$_opt_id}_center" name="{$_opt_id}" value="center" {$checked2}>
                        <label for="{$_opt_id}_center">Center</label>

                        <input type="radio" id="{$_opt_id}_end" name="{$_opt_id}" value="end" {$checked3}>
                        <label for="{$_opt_id}_end">Right</label>

                        <a></a>
                    </div>
                </fieldset>
            </div>
        </td>
    </tr>
EOD;
echo $_content;
?>