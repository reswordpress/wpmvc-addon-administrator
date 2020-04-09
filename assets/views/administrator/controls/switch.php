<?php
/**
 * Input control.
 * WordPress MVC view.
 * 
 * @author 10 Quality <info@10quality.com>
 * @package wpmvc-addon-administrator
 * @license MIT
 * @version 1.0.0
 */
$class = array_merge( ['switch control'], isset( $class ) ? $class : [] );
?>
<input id="<?php echo esc_attr( $id ) ?>"
    type="text"
    name="<?php echo esc_attr( isset( $name ) ? $name : $id ) ?>"
    class="<?php echo esc_attr( implode( ' ', $class ) ) ?>"
    value="<?php echo esc_attr( $value ) ?>"
    <?php echo $html_attributes ?>
/>
<label id="<?php echo esc_attr( $id ) ?>"
    for="switch-input2"
    role="switch"
    class="<?php echo esc_attr( implode( ' ', $class ) ) ?>"
    <?php echo $html_attributes ?>
>
    <input id="switch-input"
        type="number"
        name="<?php echo esc_attr( isset( $name ) ? $name : $id ) ?>"
        value="<?php echo esc_attr( $value ) ?>"
        style="display:none"
    />
    <div class="controller">
        <div class="switch-val on"><?php __( 'On' ) ?></div>
        <div class="switch-val off"><?php __( 'Off' ) ?></div>
    </div>
</label>