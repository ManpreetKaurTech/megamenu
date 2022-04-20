<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- <script>
$(".js-example-tags").select2({
  tags: true
});
	</script>
	 -->

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>
//   $("#add-city-name").keyup(function(event){
//         event.preventDefault();
// 		//var city = {Name: "name"};  
//         // query = $.ajax({
// 		// 	type: "POST",
//         //     url : 'megamenu\wp-content\themes\ajaxTest.php',
// 		// 	dataType: "json",
// 		// 	contentType: "application/json",
// 		// 	data: JSON.stringify( { "name": $('#add-city-name').val()} ),
//     	// 	//processData: false,
//         // });
//         // query.done(function(chang){
// 		// 	$('#cityname').html(chang);
		
// 		// });
//// 2nd code
// 		jQuery.ajax({
//         url: 'wp-content\themes\ajaxTest.php',
//         type: 'post',
// 		dataType: "json",
//         data: { "name": $('#add-city-name').val()},
//         success: function(chang) {
// 			$('#cityname').html(chang);
//         }
//     });
// 	});
//3rd code 
function fetch(){
	$("#add-city-name").keyup(function(event){
      event.preventDefault();

jQuery.ajax({
	url: 'wp-content\themes\ajaxTest.php',
	type: 'post',
	data: { action: 'data_fetch', keyword: jQuery('#add-city-name').val() },
	success: function(data) {
		jQuery('#datafetch').html( data );
	}
});
});
}
</script>

	</body>
</html>
