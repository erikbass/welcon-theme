<?php
add_action('init','of_options');

if (!function_exists('of_options'))
{

    function of_options()
    {

        /*
        *	Theme Shortname
        */
        $themename = "theme";
        $shortname = "theme";

        /*
        *	Populate the options array
        */
        global $tt_options;

        $tt_options = get_option('of_options');

        /*
        *	Access the WordPress Pages via an Array
        */
        $tt_pages = array();

        $tt_pages_obj = get_pages('sort_column=post_parent,menu_order');

        foreach ($tt_pages_obj as $tt_page)
        {
            $tt_pages[$tt_page->ID] = $tt_page->post_name;
        }

        $tt_pages_tmp = array_unshift($tt_pages, "Select a page:" );


        /*
        *	Access the WordPress Categories via an Array
        */
        $tt_categories = array();
        $tt_categories_obj = get_categories('hide_empty=0');
        foreach ($tt_categories_obj as $tt_cat)
        {
            $tt_categories[$tt_cat->term_id] = $tt_cat->name;
        }
        $categories_tmp = array_unshift($tt_categories, "Select a category:");



        /*
		*	Access the WordPress Tags via an Array
		*/
        $tags_array = array();
        $tags_objects = get_tags('hide_empty=0');
        foreach ($tags_objects as $tag_inst)
        {
            $tags_array[$tag_inst->term_id] = $tag_inst->name;
        }
        $tags_tmp = array_unshift($tags_array, __('Select a Tag','framework'));


        /*
		*	Access the property-feature terms via an Array
		*/
        $features_array = array();
        $features_terms = $option_terms = get_terms('property-feature');
        foreach ($features_terms as $fetrms)
        {
            $features_array[$fetrms->slug] = $fetrms->name;
        }
        $featues_tmp = array_unshift($features_array, __('Select a Tag','framework'));



        /*
        *	Numbers Array
        */
        $numbers_array = array("1","2","3","4","5","6","7","8","9","10");
		$numbers_array_zero = array("0","1","2","3","4","5","6","7","8","9","10");



        /*
        *	Sample Advanced Array - The actual value differs from what the user sees
        */
        $sample_advanced_array = array("image" => "The Image","post" => "The Post");



        /*
        *	Folder Paths for "type" => "images"
        */
        $sampleurl =  get_template_directory_uri() . '/framework/admin/images/sample-layouts/';




        /*-----------------------------------------------------------------------------------*/
        /* Create The Custom Theme Options Panel
        /*-----------------------------------------------------------------------------------*/
        $options = array(); // do not delete this line - sky will fall


        /* Option Page - Header Options */
        $options[] = array( "name" => __('Header','framework'),
            "id" => $shortname."_header_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Logo','framework'),
            "desc" => __('Upload logo for your Website.','framework'),
            "id" => $shortname."_sitelogo",
            "std" => "",
            "type" => "upload");

        $options[] = array( "name" => __('Favicon','framework'),
            "desc" => __('Upload a 16px by 16px PNG image that will represent your website favicon.','framework'),
            "id" => $shortname."_favicon",
            "std" => "",
            "type" => "upload");

        $options[] = array( "name" => __('Banner Image','framework'),
            "desc" => __('Upload a banner image of minimum 230px height and minimum 2000px width.','framework'),
            "id" => $shortname."_general_banner_image",
            "std" => "",
            "type" => "upload");

        $options[] = array( "name" => __('Do you want to show social icons in header ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_social_menu",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array( "name" => __('Twitter','framework'),
            "desc" => __('Provide Twitter URL to display its icon in social icons widget.','framework'),
            "id" => $shortname."_twitter_link",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Facebook','framework'),
            "desc" => __('Provide Facebook URL to display its icon in social icons widget.','framework'),
            "id" => $shortname."_facebook_link",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Google Plus','framework'),
            "desc" => __('Provide Google Plus URL to display its icon in social icons widget.','framework'),
            "id" => $shortname."_google_link",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('LinkedIn','framework'),
            "desc" => __('Provide LinkedIn URL to display its icon in social icons widget.','framework'),
            "id" => $shortname."_linkedin_link",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('RSS','framework'),
            "desc" => __('Provide RSS URL to display its icon in social icons widget.','framework'),
            "id" => $shortname."_rss_link",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Header Email','framework'),
            "desc" => __("Provide Email address to display in header.",'framework'),
            "id" => $shortname."_header_email",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Header Phone Number','framework'),
            "desc" => __("Provide phone number to display in header.",'framework'),
            "id" => $shortname."_header_phone",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Tracking Code','framework'),
            "desc" => __('Paste Google Analytics (or other) tracking code here.','framework'),
            "id" => $shortname."_google_analytics",
            "std" => "",
            "type" => "textarea");



        /* Option Page - Styling */
        $options[] = array( "name" => __('Styling','framework'),
            "id" => $shortname."_styling_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Header Background Color','framework'),
            "desc" => __('Choose a Background Color for Header. Base Theme Color is #252A2B.','framework'),
            "id" => $shortname."_header_bg_color",
            "std" => "#252A2B",
            "type" => "color");

        $options[] = array( "name" => __('Header Text Color','framework'),
            "desc" => __('Choose a Header Text Color for Header. Base Theme Color is #929A9B.','framework'),
            "id" => $shortname."_header_text_color",
            "std" => "#929A9B",
            "type" => "color");

        $options[] = array( "name" => __('Header Borders Color','framework'),
            "desc" => __('Choose a Borders Color for Header. Base Theme Color is #343A3B.','framework'),
            "id" => $shortname."_header_border_color",
            "std" => "#343A3B",
            "type" => "color");

        $options[] = array( "name" => __('Drop Down Menu Background Color','framework'),
            "desc" => __('Choose a Background Color for Drop Down Menu. Base Theme Color is #ec894d.','framework'),
            "id" => $shortname."_menu_bg_color",
            "std" => "#ec894d",
            "type" => "color");

        $options[] = array( "name" => __('Drop Down Menu Text Color','framework'),
            "desc" => __('Choose a Text Color for Drop Down Menu. Base Theme Color is #ffffff.','framework'),
            "id" => $shortname."_menu_text_color",
            "std" => "#ffffff",
            "type" => "color");

        $options[] = array( "name" => __('Drop Down Menu Background Color on Mouse Over','framework'),
            "desc" => __('Choose a Background Color for Drop Down Menu on Mouse Over. Base Theme Color is #dc7d44.','framework'),
            "id" => $shortname."_menu_hover_bg_color",
            "std" => "#dc7d44",
            "type" => "color");

        $options[] = array( "name" => __('Header Phone Number Background Color','framework'),
            "desc" => __('Choose a Background Color for Header Phone Number. Base Theme Color is #4dc7ec.','framework'),
            "id" => $shortname."_phone_bg_color",
            "std" => "#4dc7ec",
            "type" => "color");

        $options[] = array( "name" => __('Header Phone Number Text Color','framework'),
            "desc" => __('Choose a Color for Header Phone Number Text. Base Theme Color is #e7eff7.','framework'),
            "id" => $shortname."_phone_text_color",
            "std" => "#e7eff7",
            "type" => "color");

        $options[] = array( "name" => __('Header Phone Icon Background Color','framework'),
            "desc" => __('Choose a Background Color for Header Phone Icon. Base Theme Color is #37b3d9.','framework'),
            "id" => $shortname."_phone_icon_bg_color",
            "std" => "#37b3d9",
            "type" => "color");

        $options[] = array( "name" => __('Quick CSS','framework'),
            "desc" => __('Just want to do some quick CSS changes? Enter them here, they will be applied to the theme. If you need to change major portions of the theme please use the "css/custom.css" file.','framework'),
            "id" => $shortname."_quick_css",
            "std" => "",
            "type" => "textarea");


        /* Home Page Slogan */
        $options[] = array( "name" => __('Home','framework'),
            "id" => $shortname."_home_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Do you want to display slider on homepage ?','framework'),
            "desc" => __("Yes",'framework'),
            "id" => $shortname."_display_slider",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array( "name" => __('Advance Search Form Title','framework'),
            "desc" => __('Provide Advance Search Form title.','framework'),
            "id" => $shortname."_home_advance_search_title",
            "std" => __('Find your Home','framework'),
            "type" => "text");

        $options[] = array( "name" => __('Search Page URL','framework'),
            "desc" => __('To Configure The Search Functionality. Create a Property Search Page Using "Property Search Template" and Provide its URL here.(Also, Make sure to Configure Permalinks)','framework'),
            "id" => $shortname."_search_url",
            "std" => '',
            "type" => "text");

        $options[] = array( "name" => __('Slogan Title','framework'),
            "desc" => __("Slogan title  will appear on Homepage below slider.",'framework'),
            "id" => $shortname."_slogan_title",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Slogan Text','framework'),
            "desc" => __("Slogan text  will appear on Homepage below slider.",'framework'),
            "id" => $shortname."_slogan_text",
            "std" => "",
            "type" => "textarea");

        $options[] = array( "name" => __('Number of Properties to display on Homepage','framework'),
            "id" => $shortname."_properties_on_home",
            "std" => "4",
            "type" => "select",
            "options" => array(2,4,6,8,10,12,14,16,18,20));

        $options[] = array( "name" => __('Do you want to display Featured Properties on Homepage ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_featured_properties",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array( "name" => __('Featured Properties Title','framework'),
            "desc" => __('Provide Featured Properties Custom Title.','framework'),
            "id" => $shortname."_featured_prop_title",
            "std" => __('Featured Properties','framework'),
            "type" => "text");

        $options[] = array( "name" => __('Featured Properties Text','framework'),
            "desc" => __('Provide Featured Properties Custom Text.','framework'),
            "id" => $shortname."_featured_prop_text",
            "std" => __('View a list of Featured Properties.','framework'),
            "type" => "textarea");



        /* Option Page - News */
        $options[] = array( "name" => __('News','framework'),
            "type" => "heading");

        $options[] = array( "name" => __('Banner Title','framework'),
            "desc" => __('Provide the Banner Title for News Page.','framework'),
            "id" => $shortname.'_news_banner_title',
            "std" => __('News', 'framework'),
            "type" => "text");

        $options[] = array( "name" => __('Banner Sub Title','framework'),
            "desc" => __('Provide the Banner Sub Title for News Page.','framework'),
            "id" => $shortname.'_news_banner_sub_title',
            "std" => __('Check out market updates', 'framework'),
            "type" => "text");


        /* Option Page - Gallery */
        $options[] = array( "name" => __('Gallery','framework'),
            "type" => "heading");

        $options[] = array( "name" => __('Banner Title','framework'),
            "desc" => __('Provide the Banner Title for Gallery Pages.','framework'),
            "id" => $shortname.'_gallery_banner_title',
            "std" => __('Properties Gallery', 'framework'),
            "type" => "text");

        $options[] = array( "name" => __('Banner Sub Title','framework'),
            "desc" => __('Provide the Banner Sub Title for Gallery Pages.','framework'),
            "id" => $shortname.'_gallery_banner_sub_title',
            "std" => __('Look for your desired property more efficiently', 'framework'),
            "type" => "text");


        /* Option Page - Price Format Options */
        $options[] = array( "name" => __('Price Format','framework'),
            "id" => $shortname."_price_format",
            "type" => "heading");


        $options[] = array( "name" => __('Currency Sign','framework'),
            "desc" => __('Provide currency sign. For Example: $','framework'),
            "id" => $shortname."_currency_sign",
            "std" => "$",
            "type" => "text");

        $options[] = array( "name" => __('Number of Decimals Points','framework'),
            "desc" => __('Provide the number of decimals points','framework'),
            "id" => $shortname."_decimals",
            "type" => "select",
            "options" => $numbers_array_zero);

        $options[] = array( "name" => __('Decimal Point Separator','framework'),
            "desc" => __('Provide the decimal point separator. For Example: .','framework'),
            "id" => $shortname."_dec_point",
            "std" => ".",
            "type" => "text");

        $options[] = array( "name" => __('Thousands Separator','framework'),
            "desc" => __('Provide the thousands separator. For Example: ,','framework'),
            "id" => $shortname."_thousands_sep",
            "std" => ",",
            "type" => "text");


        /* Option Page - General */
        $options[] = array( "name" => __('General','framework'),
            "id" => $shortname."_general_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Number of Properties to display in Property Listing Template','framework'),
            "desc" => '',
            "id" => $shortname."_number_of_properties",
            "std" => "3",
            "type" => "select",
            "options" => array(3,6,9,12,15,18,21,24,27));

        $options[] = array( "name" => __('Lightbox Plugin','framework'),
            "desc" => __('Select the lightbox plugin that you want to use','framework'),
            "id" => $shortname."_lightbox_plugin",
            "std" => "swipebox",
            "type" => "radio",
            "options" => array(
                'swipebox'      => 'Swipebox Plugin',
                'pretty-photo'  => 'Pretty Photo Plugin'
            ));

        /* Option Page - Contact */
        $options[] = array( "name" => __('Contact','framework'),
            "id" => $shortname."_contactus_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Do you want to show Google Map on contact page ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_contact_map",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array( "name" => __('Google Map Latitude','framework'),
            "desc" => __("Provide Google Map Latitude",'framework'),
            "id" => $shortname."_map_lati",
            "std" => "-37.817917",
            "type" => "text");

        $options[] = array( "name" => __('Google Map Longitude','framework'),
            "desc" => __("Provide Google Map Longitude",'framework'),
            "id" => $shortname."_map_longi",
            "std" => "144.965065",
            "type" => "text");

        $options[] = array( "name" => __('Google Map Zoom','framework'),
            "desc" => __("Provide Google Map Zoom Level. Example: 17",'framework'),
            "id" => $shortname."_map_zoom",
            "std" => "17",
            "type" => "text");

        $options[] = array( "name" => __('Do you want to show Contact Details Section on contact page ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_details",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array( "name" => __('Contact Details Section Title','framework'),
            "desc" => __("Provide Title for contact details section.",'framework'),
            "id" => $shortname."_contact_details_title",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Contact Address','framework'),
            "desc" => __("Provide address that will be displayed in contact details section.",'framework'),
            "id" => $shortname."_contact_address",
            "std" => "",
            "type" => "textarea");

        $options[] = array( "name" => __('Cell Number','framework'),
            "desc" => __("Provide Cell Number that will be displayed in contact details section.",'framework'),
            "id" => $shortname."_contact_cell",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Phone Number','framework'),
            "desc" => __("Provide Phone Number that will be displayed in contact details section.",'framework'),
            "id" => $shortname."_contact_phone",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Email Address','framework'),
            "desc" => __("Provide Email Address that will be displayed in contact details section.",'framework'),
            "id" => $shortname."_contact_display_email",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Contact Form Heading','framework'),
            "desc" => __("Provide heading for contact form.",'framework'),
            "id" => $shortname."_contact_form_heading",
            "std" => __("Send us a message", "framework"),
            "type" => "text");

        $options[] = array( "name" => __('Contact Email','framework'),
            "desc" => __("Provide target email address that will receive messages from contact form.",'framework'),
            "id" => $shortname."_contact_email",
            "std" => "",
            "type" => "text");



        /* Option Page - Footer */
        $options[] = array( "name" => __('Footer','framework'),
            "id" => $shortname."_footer_heading",
            "type" => "heading");

        $options[] = array( "name" => __('Do you want to show Partners Carousel above footer ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_partners",
            "std" => "false",
            "type" => "checkbox");

        $options[] = array( "name" => __('Partners Carousel Title ?','framework'),
            "desc" => __('Provide partners carousel title text.','framework'),
            "id" => $shortname."_partners_title",
            "std" => "",
            "type" => "text");

        $options[] = array( "name" => __('Footer Copyright Text','framework'),
            "desc" => __("Enter Footer Copyright Text here.",'framework'),
            "id" => $shortname."_copyright_text",
            "std" => "Copyright &copy; 2013. All Rights Reserved.",
            "type" => "textarea");

        $options[] = array( "name" => __('Footer Designed by Text','framework'),
            "desc" => __("Enter Footer Designed by Text here.",'framework'),
            "id" => $shortname."_designed_by_text",
            "std" => " Designed by Theme Designer &amp; Developed by",
            "type" => "textarea");

        apply_filters('framework_theme_options',$options);

        update_option('of_template',$options);
        update_option('of_themename',$themename);
        update_option('of_shortname',$shortname);

    }
}

?>