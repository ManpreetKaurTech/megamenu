<?php /* Template Name: Airport */ ?>

<?php get_header(); ?>
<label>   
Airport :  
</label>  
<?php
   global $wpdb;
   $ariport = $wpdb->get_results( "select * from airports order by name asc" );
//    echo "<pre>";
//    print_r($ariport);
    ?> 
<select name="Airport" value="<?php echo @$ariport; ?>">  
    
        <option disabled selected hidden>Ariport</option>
           <?Php
           
           foreach($ariport as $result)
            {
             echo "<option >".$result->name."</option>";
            }
            
          ?> 
</select>



<?php get_footer(); ?>