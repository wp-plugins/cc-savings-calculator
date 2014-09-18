<?php
function load_calc($id, $title, $currency, $show_url = 0, $bg_color, $border_color, $text_color)
{
    if ($show_url == 1)
        load_ccs_custom_colors($id, $bg_color, $border_color, $text_color);
?>

<div class="CCWidget CC-Widget-<?php echo $id; ?>">
	 	<div class="CCWidgetTitle CC-WidgetTitle-<?php echo $id; ?>"><?php echo $title; ?></div>		   
        <div class="ccrowdiv">
			 <div class="ccleftdiv">
                <label for="<?php echo $id; ?>-deposit">Deposit <?php echo $currency; ?> :</label>
			 </div>
			 <div class="ccrightdiv">
  	    	    <input id="<?php echo $id; ?>-deposit" class="deposit" type="text" placeholder="enter amount">
			 </div>
        </div>
        <div class="ccrowdiv">
            <div class="ccleftdiv">
                <label for="<?php echo $id; ?>-term">Years of savings :</label>
            </div>
			<div class="ccrightdiv">
                <input id="<?php echo $id; ?>-term" class="term" type="text" placeholder="enter term">
			</div>
        </div>
        <div class="ccrowdiv">
			<div class="ccleftdiv">
                <label for="<?php echo $id; ?>-rate">Interest rate % :</label>
			 </div>
			 <div class="ccrightdiv">
                <input id="<?php echo $id; ?>-rate" class="rate" type="text" placeholder="enter rate">
			 </div>
        </div>
        <div class="ccrowdiv">
    		<div class="CCWidgetLine"></div>
		</div>
        <div class="ccrowdiv">
			 <div class="ccleftresultdiv">
                <label for="<?php echo $id; ?>-interest">Interest earned <?php echo $currency; ?> :</label>
			 </div>
			 <div class="ccrightresultdiv">
                <span id="<?php echo $id; ?>-interest" class=""></span>
			 </div>
        </div>
        <?php if ($show_url) { ?>
    		<div class="ccrowdiv" >
                <div id="CCWidgetSignature">Provided by <a href="http://CalculatorsCanada.ca" target="_blank">CalculatorsCanada.ca</a></div>
		    </div>
        <?php } ?>
		
</div>

		
		<?php 
}

function load_ccs_custom_colors($id, $bg_color, $border_color, $text_color)
{
?>
<style type="text/css">
.CC-Widget-<?php echo $id; ?>, .CC-WidgetTitle-<?php echo $id; ?> a, .CC-WidgetTitle-<?php echo $id; ?> a:visited, .CC-WidgetSignature-<?php echo $id; ?> a, .CC-WidgetSignature-<?php echo $id; ?> a:visited, .CC-WidgetLine-<?php echo $id; ?> {
    <?php echo (isset( $border_color) ? "border-color:" . $border_color . ";" : ""); ?>
    <?php echo (isset( $bg_color) ? "background-color:" . $bg_color . ";": ""); ?>
    <?php echo (isset( $text_color) ? "color:" . $text_color . " !important;": ""); ?>
}

.CC-Widget-<?php echo $id; ?> input[type=text] {
    <?php echo (isset( $border_color) ? "border-color:" . $border_color . ";": ""); ?>
    <?php echo (isset( $text_color) ? "color:" . $text_color . ";": ""); ?>
    <?php echo (isset( $input_bg_color) ? "background-color:" . $input_bg_color . ";": ""); ?>
} 
</style>
<?php 
}
?>