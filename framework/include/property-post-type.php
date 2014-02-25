<?php
/* Property Custom Post Type */
function create_property_post_type()
{

  $labels = array(
		'name' => __( 'Properties','framework'),
		'singular_name' => __( 'Property','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Property','framework'),
		'edit_item' => __('Edit Property','framework'),
		'new_item' => __('New Property','framework'),
		'view_item' => __('View Property','framework'),
		'search_items' => __('Search Property','framework'),
		'not_found' =>  __('No Property found','framework'),
		'not_found_in_trash' => __('No Property found in Trash','framework'),
		'parent_item_colon' => ''
	  );

  $args = array(
    	'labels' => $labels,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
		'menu_icon' => get_template_directory_uri() . '/images/prop-icon.png',
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => false,
    	'menu_position' => 5,
    	'supports' => array('title','editor','thumbnail','author'),
		'rewrite' => array( 'slug' => __('property', 'framework') )
  );


  register_post_type('property',$args);
}

add_action('init', 'create_property_post_type');


/* Create Property Taxonomies */
function build_taxonomies(){
    $labels = array(
        'name' => __( 'Property Features', 'framework' ),
        'singular_name' => __( 'Property Features', 'framework' ),
        'search_items' =>  __( 'Search Property Features', 'framework' ),
        'popular_items' => __( 'Popular Property Features', 'framework' ),
        'all_items' => __( 'All Property Features', 'framework' ),
        'parent_item' => __( 'Parent Property Feature', 'framework' ),
        'parent_item_colon' => __( 'Parent Property Feature:', 'framework' ),
        'edit_item' => __( 'Edit Property Feature', 'framework' ),
        'update_item' => __( 'Update Property Feature', 'framework' ),
        'add_new_item' => __( 'Add New Property Feature', 'framework' ),
        'new_item_name' => __( 'New Property Feature Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Property Features with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or remove Property Features', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Property Features', 'framework' ),
        'menu_name' => __( 'Property Features', 'framework' )
    );

    register_taxonomy(
        'property-feature',
        array('property'),
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => __('property-feature', 'framework'))
        )
    );


    $type_labels = array(
        'name' => __( 'Property Type', 'framework' ),
        'singular_name' => __( 'Property Type', 'framework' ),
        'search_items' =>  __( 'Search Property Types', 'framework' ),
        'popular_items' => __( 'Popular Property Types', 'framework' ),
        'all_items' => __( 'All Property Types', 'framework' ),
        'parent_item' => __( 'Parent Property Type', 'framework' ),
        'parent_item_colon' => __( 'Parent Property Type:', 'framework' ),
        'edit_item' => __( 'Edit Property Type', 'framework' ),
        'update_item' => __( 'Update Property Type', 'framework' ),
        'add_new_item' => __( 'Add New Property Type', 'framework' ),
        'new_item_name' => __( 'New Property Type Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Property Types with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or remove Property Types', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Property Types', 'framework' ),
        'menu_name' => __( 'Property Types', 'framework' )
    );

    register_taxonomy(
        'property-type',
        array( 'property' ),
        array(
            'hierarchical' => false,
            'labels' => $type_labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => __('property-type', 'framework'))
        )
    );

    $city_labels = array(
        'name' => __( 'Property City', 'framework' ),
        'singular_name' => __( 'Property City', 'framework' ),
        'search_items' =>  __( 'Search Property Cities', 'framework' ),
        'popular_items' => __( 'Popular Property Cities', 'framework' ),
        'all_items' => __( 'All Property Cities', 'framework' ),
        'parent_item' => __( 'Parent Property City', 'framework' ),
        'parent_item_colon' => __( 'Parent Property City:', 'framework' ),
        'edit_item' => __( 'Edit Property City', 'framework' ),
        'update_item' => __( 'Update Property City', 'framework' ),
        'add_new_item' => __( 'Add New Property City', 'framework' ),
        'new_item_name' => __( 'New Property City Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Property Cities with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or remove Property Cities', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Property Cities', 'framework' ),
        'menu_name' => __( 'Property Cities', 'framework' )
    );

    register_taxonomy(
        'property-city',
        array( 'property' ),
        array(
            'hierarchical' => false,
            'labels' => $city_labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => __('property-city', 'framework'))
        )
    );


    $status_labels = array(
        'name' => __( 'Property Status', 'framework' ),
        'singular_name' => __( 'Property Status', 'framework' ),
        'search_items' =>  __( 'Search Property Status', 'framework' ),
        'popular_items' => __( 'Popular Property Status', 'framework' ),
        'all_items' => __( 'All Property Status', 'framework' ),
        'parent_item' => __( 'Parent Property Status', 'framework' ),
        'parent_item_colon' => __( 'Parent Property Status:', 'framework' ),
        'edit_item' => __( 'Edit Property Status', 'framework' ),
        'update_item' => __( 'Update Property Status', 'framework' ),
        'add_new_item' => __( 'Add New Property Status', 'framework' ),
        'new_item_name' => __( 'New Property Status Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Property Status with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or remove Property Status', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Property Status', 'framework' ),
        'menu_name' => __( 'Property Status', 'framework' )
    );

    register_taxonomy(
        'property-status',
        array( 'property' ),
        array(
            'hierarchical' => false,
            'labels' => $status_labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => __('property-status', 'framework'))
        )
    );

}
add_action( 'init', 'build_taxonomies', 0 );


/* Add Custom Columns */
function property_edit_columns($columns)
{

    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => __( 'Property Title','framework' ),
        "thumb" => __( 'Thumbnail','framework' ),
        "address" => __('Address','framework'),
		"city" => __( 'City','framework' ),
		"type" => __('Type','framework'),
		"status" => __('Status','framework'),
        "price" => __('Price','framework'),
        "bed" => __('Beds','framework'),
        "bath" => __('Baths','framework'),
        "garage" => __('Garages','framework'),
        "features" => __('Features','framework'),
        "date" => __( 'Publish Time','framework' )
    );

    return $columns;
}
add_filter("manage_edit-property_columns", "property_edit_columns");


function property_custom_columns($column){
    global $post;
    switch ($column)
    {
        case 'thumb':
            if(has_post_thumbnail($post->ID)){
                ?>
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php the_post_thumbnail('post-thumbnail');?>
                </a>
                <?php
            }
            else{
                _e('No Thumbnail','framework');
            }
            break;
		case 'city':
            echo get_the_term_list($post->ID,'property-city', '', ', ','');
            break;
        case 'address':
            $address = get_post_meta($post->ID,'REAL_HOMES_property_address',true);
            if(!empty($address)){
                echo $address;
            }
            else{
                _e('No Address Provided!','framework');
            }
            break;
		case 'type':
            echo get_the_term_list($post->ID,'property-type', '', ', ','');
            break;		
		case 'status':
            echo get_the_term_list($post->ID,'property-status', '', ', ','');
            break;	
        case 'price':
            property_price();
            break;
        case 'bed':
            $bed = get_post_meta($post->ID,'REAL_HOMES_property_bedrooms',true);
            if(!empty($bed)){
                echo $bed;
            }
            else{
                _e('NA','framework');
            }
            break;
        case 'bath':
            $bath = get_post_meta($post->ID,'REAL_HOMES_property_bathrooms',true);
            if(!empty($bath)){
                echo $bath;
            }
            else{
                _e('NA','framework');
            }
            break;
        case 'garage':
            $garage = get_post_meta($post->ID,'REAL_HOMES_property_garage',true);
            if(!empty($garage)){
                echo $garage;
            }
            else{
                _e('NA','framework');
            }
            break;
        case 'features':
            echo get_the_term_list($post->ID,'property-feature', '', ', ','');
            break;
    }
}
add_action("manage_posts_custom_column", "property_custom_columns");


?>