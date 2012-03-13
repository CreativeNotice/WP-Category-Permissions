<script type="text/javascript">var __namespace = '<?php echo $namespace; ?>';</script>
<div class="wrap">

    <h2><?php echo $page_title; ?></h2>
        
    <?php if( isset( $_GET['message'] ) ): ?>
        <div id="message" class="updated below-h2"><p>Options successfully updated!</p></div>
    <?php endif; ?>

    <form action="" method="post" id="<?php echo $namespace; ?>-form">
        <?php wp_nonce_field( $namespace . "-update-options" ); ?>
        
        <p>
            <label><input type="text" name="data[option_1]" value="<?php echo $this->get_option( 'option_1' ); ?>" /> This is an example of an option.</label> 
        </p>
        
        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php _e( "Save Changes", $namespace ) ?>" />
        </p>
    </form>
    ----- Roles ------------------------------
    <ul>
    <?php foreach($roles as $key => $value): ?>
        <li><?php echo $value; ?></li>
    <?php endforeach; ?>
    </ul>
    ----- Categories -------------------------
<!--     <ul>-->
    <?php //foreach($categories as $cat): ?>
        <li>
            <!--<label><input type="checkbox" value="<?php echo $cat->term_id; ?>"> <?php echo $cat->name; ?> </label>-->
            <!-- <pre> -->
                <?php //print_r($cat); ?>
            <!-- </pre> -->
       <!--  </li> -->
    <?php //endforeach; ?>
   <!--  </ul> -->
 <ul>
    <?php 

        $cust_walker = new cn_Walker_Category_Input_Hierarchy();
        $args = array('hierarchical' => 1, 'title_li' => '', 'walker' => $cust_walker);
        wp_list_categories( $args ); 
    ?>
</ul>
</div>