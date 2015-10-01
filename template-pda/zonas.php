	

<!--========================================================
    TAXONOMIAS(THUMBNAILS,TITLE,DESCRIPTION)  
    ========================================================-->

<?php     
      $delay = 0.5;

      $terms = get_terms('zona',array('parent'   => 0,));

      $output = '';

      foreach ($terms as $term) {
            $output .= '<div class="zona '.$term->slug.' wow fadeIn" data-wow-duration="2s" data-wow-delay="'.$delay.'s">';
            $output .= get_term_thumbnail($term->term_id, $size = 'full', $attr='class=zona__thumbnail');
            $output .= '<h2 class="zona__title">';
            $output .= '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
            $output .= '</h2>';
            $output .= '<p class="zona__description">'.$term->description.'</p>';
            $output .= '</div>';

            $delay += 0.4;
      }

      echo $output;
 ?>



