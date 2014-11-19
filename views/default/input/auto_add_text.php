<?php

$name = $vars['name'];
$entity = $vars['entity'];

$request_n = $name . '_n';
$request_fields = 'array_' . $name;
$field_n = $vars[$request_n];

$array_fields= $vars[$request_fields]; 

$i = 0
?>


<div id="<?php echo $name; ?>"><?php echo elgg_view('input/button', array('id' => 'new_' . $name . '_field', 'value' => elgg_echo('aat:add' , array($name))));?>
<label><?php echo elgg_echo('aat:fields', array($name)); ?></label><br />
<?php foreach ($array_fields as $field) {
	
	echo "<div id=\"$i\"><br>";
	echo elgg_view('input/text', array('class' => 'options_field', 'id' => "options_field$i", 'name' => "options_field$i", 'value' => $field )); 
		
	echo "<span rel=\"$i\" class=\"delete\">" . elgg_echo('delete') . "</span></div>";
	
	//echo "</div>";
	$i++;
	
}
?>

<div>
<?php

//importante acordarse de este input hidden para pasar el número de fields que hemos creado
echo elgg_view('input/hidden', array('name' => $name . '_n_fields', 'id' => $name . '_n_fields', 'value' => $n_fields)); ?>

</div>

<script type="text/javascript">

	$('#new_<?php echo $name; ?>_field').click(function() {
				
		var n_fields = $('.<?php echo $name . '_field'; ?>').length;		
		$('#<?php echo $name; ?>').append ('<div id="'+n_fields+'"><br /><input type="text" name="<?php echo $name . '_field'; ?>'+n_fields+'" id="<?php echo $name . '_field'; ?>'+n_fields+'" class="elgg-input-text <?php echo $name . '_field'; ?>" /><span class="delete" rel="'+n_fields+'" ><?php echo elgg_echo('delete'); ?></span></div>');
		
		return false; 
	});
	$('.delete').live('click', function() {
	   
	    var which_delete = $(this).attr('rel');	    
	    var delete_this = "#"+ which_delete;
	    $(delete_this).remove();
	    return false;
	});
	$('.elgg-form').submit(function() {
		$('#<?php echo $name;?>_n_fields').val($('.<?php echo $name . '_field'; ?>').length);
	});

</script>




