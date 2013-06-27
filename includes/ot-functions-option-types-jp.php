<?php
/**
 * Post Select option type. (_a_1)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_1' ) ) {
  
  function ot_type_post_select_a_1( $args = array() ) {
	$cat = ot_get_option( 'album_1_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_1 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => 3, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}


/**
 * Post Select option type. (_a_2)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_2' ) ) {
  
  function ot_type_post_select_a_2( $args = array() ) {
	$cat = ot_get_option( 'album_2_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_2 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => $cat, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}
/**
 * Post Select option type. (_a_3)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_3' ) ) {
  
  function ot_type_post_select_a_3( $args = array() ) {
	$cat = ot_get_option( 'album_3_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_3 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => $cat, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}

/**
 * Post Select option type. (_a_4)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_4' ) ) {
  
  function ot_type_post_select_a_4( $args = array() ) {
	$cat = ot_get_option( 'album_4_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_4 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => $cat, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}

/**
 * Post Select option type. (_a_5)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_5' ) ) {
  
  function ot_type_post_select_a_5( $args = array() ) {
	$cat = ot_get_option( 'album_5_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_5 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => $cat, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}


/**
 * Post Select option type. (_a_6)
 *
 * See @ot_display_by_type to see the full list of available arguments.
 *
 * @param     array     An array of arguments.
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_post_select_a_6' ) ) {
  
  function ot_type_post_select_a_6( $args = array() ) {
	$cat = ot_get_option( 'album_6_cat', '1');
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-post-select_a_6 ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
      
        /* build page select */
        echo '<select name="' . esc_attr( $field_name ) . '" id="' . esc_attr( $field_id ) . '" class="option-tree-ui-select ' . $field_class . '">';
        
        /* query posts array */
        $query = new WP_Query( array( 'post_type' => array( 'post' ), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'cat' => $cat, 'post_status' => 'any' ) );
        
        /* has posts */
        if ( $query->have_posts() ) {
          echo '<option value="">-- ' . __( 'Choose One', 'option-tree' ) . ' --</option>';
          while ( $query->have_posts() ) {
            $query->the_post();
            echo '<option value="' . esc_attr( get_the_ID() ) . '"' . selected( $field_value, get_the_ID(), false ) . '>' . esc_attr( get_the_title() ) . '</option>';
          }
        } else {
          echo '<option value="">' . __( 'No Posts Found', 'option-tree' ) . '</option>';
        }
        echo '</select>';
        
      echo '</div>';
      
    echo '</div>';
    
  }
  
}

