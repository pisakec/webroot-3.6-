<div class="search-box">
<!--<form role="search" method="get" class="searchform group input-field col s12" action="<?php echo home_url( '/' ); ?>">
  <label> <span class="offscreen"><i class="icon-search"></i></span> </label>
    <input type="search" class="search-field"  placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"  value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">  
</form>-->


 <form action="<?php echo home_url(  ); ?>" class="search-form" method="get" >
  
      <input type="search" class="search-field" id="search-input" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	 <label class="search" for="search-term" autocomplete="off"><i class="demo-icon icon-search"></i></label>
  
</form> 
</div>
