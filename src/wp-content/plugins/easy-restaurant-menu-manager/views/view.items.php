<?php
/*** Returns HTML UL/LI items elements for frontend display */
function wprmm_view_items(&$category, &$items){

  /* Output default layout use override for custom layout */
  $m = '';
  $custom_layout = 'wprmm_view_'.str_replace(array('-'),array('_'),$category->layout);
  if(function_exists($custom_layout)) {
    $m = call_user_func($custom_layout, $category,$items);
    return $m;
  }


  $m .=   '<ul class="'.$category->layout.'">'."\r\n";

  foreach($items as $i){
    if($i->category_id == $category->id && $i->active){
      $m .=   '<li>';
                 if(!empty($i->image)){
                   $m.= '<a href="'.$i->image.'"><img class="menu_thumb" src="'.$i->image.'" alt="'.$i->name.'" /></a>';
                 }

      $m .=    '<h3>'.$i->name.'</h3>
                <span class="menu_price" title="">';
                    if(!empty($i->icon_image)){ 
                      $m .= '<img class="wprmm_tooltip" rel="tooltip" title="'.$i->icon_description.'" alt="'.$i->icon_description.'" src="'.$i->icon_image.'" />';
                    }
                    if($i->show_price):
                      $m .= $i->price;
                      if(!empty($i->second_price)) $m .= '<span class="second_price">'.$i->second_price.'</span>';
                    endif;
      $m .=    '</span>
                <p>'.nl2br($i->description).'</p>
                <div class="clear"></div>
             </li>';
    }
  }

  $m .=   '<li class="clear"></li></ul>'."\r\n";

  return $m;   
}




/* Custom layouts: functions name wprmm_view_{layout name} */


/*** Two column layout */
function wprmm_view_two_column($category,$items){
  $clear = false;

  $m  = '';
  $m .=   '<ul class="'.$category->layout.'">'."\r\n";

  foreach($items as $i){
    if($i->category_id == $category->id && $i->active){
      $m .=   '<li>
                 <div class="menu_item_info">
                   <h3>'.$i->name.'</h3>
                   <span class="menu_price">';
                     if(!empty($i->icon_image)) {
                       $m .= '<img class="wprmm_tooltip" rel="tooltip" title="'.$i->icon_description.'" alt="'.$i->icon_description.'" src="'.$i->icon_image.'" />';
                     }
                     if($i->show_price):
                       $m .= $i->price;
                       if(!empty($i->second_price)) $m .= '<span class="second_price">'.$i->second_price.'</span>';
                     endif;
      $m .=        '</span>
                 </div>';
                 if(!empty($i->image)){
                   $m.= '<a href="'.$i->image.'"><img class="menu_thumb" src="'.$i->image.'" alt="'.$i->name.'" /></a>';
                 }

      $m .=     '<p>'.nl2br($i->description).'</p>
                 <div class="clear"></div>
               </li>';

      $m .= ($clear)? '<li class="clear"></li>' : '';
      $clear = !$clear;
    }
  }

  $m .=   '<li class="clear"></li></ul>'."\r\n";

  return $m;
}

?>
