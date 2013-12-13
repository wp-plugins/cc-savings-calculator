<?php
function load_calc($title, $currency, $show_url = 0, $bg_color, $border_color, $text_color)
{

?>

<style type="text/css">
#CCWidget, .CCWidgetLine, #CCWidgetTitle a {
    <?php echo (isset( $bg_color) ? "background-color:" . $bg_color . ";": ""); ?>
    <?php echo (isset( $border_color) ? "border-color:" . $border_color . ";": ""); ?>
    <?php echo (isset( $text_color) ? "color:" . $text_color . ";": ""); ?>
}

#CCWidget input[type=text] {
    <?php echo (isset( $border_color) ? "border-color:" . $border_color . ";": ""); ?>
    <?php echo (isset( $text_color) ? "color:" . $text_color . ";": ""); ?>
    <?php echo (isset( $input_bg_color) ? "background-color:" . $input_bg_color . ";": ""); ?>
} 
</style>
<div id="CCWidget">
	 	<div id="CCWidgetTitle"><?php echo $title; ?></div>		   
        <div class="ccrowdiv">
			 <div class="ccleftdiv">
                <label for="deposit">Deposit <?php echo $currency; ?> :</label>
			 </div>
			 <div class="ccrightdiv">
  	    	    <input id="deposit" type="text" placeholder="enter amount">
			 </div>
        </div>
        <div class="ccrowdiv">
            <div class="ccleftdiv">
                <label for="term">Years of savings :</label>
            </div>
			<div class="ccrightdiv">
                <input id="term" type="text" placeholder="enter term">
			</div>
        </div>
        <div class="ccrowdiv">
			<div class="ccleftdiv">
                <label for="rate">Interest rate % :</label>
			 </div>
			 <div class="ccrightdiv">
                <input id="rate" type="text" placeholder="enter rate">
			 </div>
        </div>
        <div class="ccrowdiv">
    		<div class="CCWidgetLine"></div>
		</div>
        <div class="ccrowdiv">
			 <div class="ccleftresultdiv">
                <label for="interest">Interest earned <?php echo $currency; ?> :</label>
			 </div>
			 <div class="ccrightresultdiv">
                <span id="interest" class=""></span>
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
?>