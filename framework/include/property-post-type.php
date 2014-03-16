<?php
/* Property Custom Post Type */
function create_property_post_type()
{

  $labels = array(
		'name' => __( 'Empreendimento','framework'),
		'singular_name' => __( 'Empreendimento','framework' ),
		'add_new' => __('Adicionar novo','framework'),
		'add_new_item' => __('Adicionar novo Empreendimento','framework'),
		'edit_item' => __('Editar Empreendimento','framework'),
		'new_item' => __('Novo Empreendimento','framework'),
		'view_item' => __('Visualizar Empreendimento','framework'),
		'search_items' => __('Pesquisar Empreendimento','framework'),
		'not_found' =>  __('Nenhum Empreendimento encontrado','framework'),
		'not_found_in_trash' => __('Nenhum Empreendimento na Lixeira','framework'),
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
    $city_labels = array(
        'name' => __( 'Cidade', 'framework' ),
        'singular_name' => __( 'Cidade', 'framework' ),
        'search_items' =>  __( 'Pesquisar por Cidades', 'framework' ),
        'popular_items' => __( 'Cidades populares', 'framework' ),
        'all_items' => __( 'Todas as Cidades', 'framework' ),
        'parent_item' => __( 'Parent Cidade', 'framework' ),
        'parent_item_colon' => __( 'Parent Cidade:', 'framework' ),
        'edit_item' => __( 'Editar Cidade', 'framework' ),
        'update_item' => __( 'Atualizar Cidade', 'framework' ),
        'add_new_item' => __( 'Adicionar nova Cidade', 'framework' ),
        'new_item_name' => __( 'Nova Cidade', 'framework' ),
        'separate_items_with_commas' => __( 'Separe Cidades com vírgulas', 'framework' ),
        'add_or_remove_items' => __( 'Adicione ou remova Cidades', 'framework' ),
        'choose_from_most_used' => __( 'Escolha das Cidades mais usadas', 'framework' ),
        'menu_name' => __( 'Cidades', 'framework' )
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
    ////////////
    $labels = array(
        'name' => __( 'UF', 'framework' ),
        'singular_name' => __( 'UF', 'framework' ),
        'search_items' =>  __( 'Pesquisar por Estado', 'framework' ),
        'popular_items' => __( 'Popular UF', 'framework' ),
        'all_items' => __( 'Todas propriedades por Estado', 'framework' ),
        'parent_item' => __( 'Parent Property Feature', 'framework' ),
        'parent_item_colon' => __( 'Parent Property Feature:', 'framework' ),
        'edit_item' => __( 'Edit Property Feature', 'framework' ),
        'update_item' => __( 'Update Property Feature', 'framework' ),
        'add_new_item' => __( 'Novo Estado', 'framework' ),
        'new_item_name' => __( 'Novo Estado', 'framework' ),
        'separate_items_with_commas' => __( 'Estados', 'framework' ),
        'add_or_remove_items' => __( 'Adicione ou remova Estado', 'framework' ),
        'choose_from_most_used' => __( 'Escolha dos Estados mais usados', 'framework' ),
        'menu_name' => __( 'UF', 'framework' )
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
    /////////////
    $type_labels = array(
        'name' => __( 'Tipo de Empreendimento', 'framework' ),
        'singular_name' => __( 'Tipo de Empreendimento', 'framework' ),
        'search_items' =>  __( 'Pesquisar por Tipo de Empreendimentos', 'framework' ),
        'popular_items' => __( 'Populares Tipos de Empreendimentos', 'framework' ),
        'all_items' => __( 'Todos os Tipos de Empreendimentos', 'framework' ),
        'parent_item' => __( 'Parent Tipo de Empreendimento', 'framework' ),
        'parent_item_colon' => __( 'Parent Tipo de Empreendimento:', 'framework' ),
        'edit_item' => __( 'Editar Tipo de Empreendimento', 'framework' ),
        'update_item' => __( 'Atualizar Tipo de Empreendimento', 'framework' ),
        'add_new_item' => __( 'Adicionar novo Tipo de Empreendimento', 'framework' ),
        'new_item_name' => __( 'Novo Tipo de Empreendimento Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separe Tipos de Empreendimentos por vírgula', 'framework' ),
        'add_or_remove_items' => __( 'Adicione ou remova Tipos de Empreendimentos', 'framework' ),
        'choose_from_most_used' => __( 'Escolha dos Tipos de Empreendimentos mais usados', 'framework' ),
        'menu_name' => __( 'Tipos de Empreendimentos', 'framework' )
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
    ////////////
    $status_labels = array(
        'name' => __( 'Status do Empreendimento', 'framework' ),
        'singular_name' => __( 'Status do Empreendimento', 'framework' ),
        'search_items' =>  __( 'Pesquisar Status do Empreendimento', 'framework' ),
        'popular_items' => __( 'Popular Status do Empreendimento', 'framework' ),
        'all_items' => __( 'Todos os Status do Empreendimento', 'framework' ),
        'parent_item' => __( 'Parent Status do Empreendimento', 'framework' ),
        'parent_item_colon' => __( 'Parent Status do Empreendimento:', 'framework' ),
        'edit_item' => __( 'Editar Status do Empreendimento', 'framework' ),
        'update_item' => __( 'Atualizar Status do Empreendimento', 'framework' ),
        'add_new_item' => __( 'Adicione novo Status do Empreendimento', 'framework' ),
        'new_item_name' => __( 'Novo Status do Empreendimento', 'framework' ),
        'separate_items_with_commas' => __( 'Separe Status do Empreendimento com vírgulas', 'framework' ),
        'add_or_remove_items' => __( 'Adicione ou remova Status do Empreendimento', 'framework' ),
        'choose_from_most_used' => __( 'Escolha do Status de Empreendimento mais usados ', 'framework' ),
        'menu_name' => __( 'Status do Empreendimento', 'framework' )
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
        "title" => __( 'Empreendimento','framework' ),
        "thumb" => __( 'Thumbnail','framework' ),
        "address" => __('Endereço','framework'),
		"city" => __( 'Cidade','framework' ),
		"type" => __('Tipo','framework'),
		"status" => __('Status','framework'),
        "price" => __('Preço','framework'),
        "bed" => __('Quartos','framework'),
        "bath" => __('Banheiros','framework'),
        "garage" => __('Garagens','framework'),
        "features" => __('UF','framework'),
        "date" => __( 'Data de publicação','framework' )
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