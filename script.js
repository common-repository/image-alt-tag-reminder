jQuery(window).ready(function(){

jQuery('img').each(function(){

if(! jQuery(this).attr('alt') && ! jQuery(this).hasClass('avatar')){
jQuery(this).wrap('<div class="alt-tag-required"></div>')
jQuery(this).after('<div class="alt-tag-required-text">Alt tag missing</div>');
}

})

})