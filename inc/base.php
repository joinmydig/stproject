function MBThemes_get_zans($pid){
  $result = get_post_meta($pid,"zan",true);
  return $result ? $result : "0";
}
