$('.sidebar-menu-item').on('click', function() {
  for(let i=0; i < $('.sidebar-dropdown-container').length; i++){
    if($(this).data('toggler') == $('.sidebar-dropdown-container').eq(i).data('toggle')){
        
      if($(this).data('toggled') == false){
        $(this).data('toggled', true)
        $('.sidebar-dropdown-container').eq(i).css('display', 'block')
      }else{
        $(this).data('toggled', false)
        $('.sidebar-dropdown-container').eq(i).css('display', 'none')
      }
      
    }
  }
})

const check_active = () => {
  for(let i=0; i < $('.sidebar-dropdown-container-item').length; i++){
    if($('.sidebar-dropdown-container-item').eq(i).hasClass('active')){

      for(let j=0; j < $('.sidebar-menu-item').length; j++){
        if(
          $('.sidebar-dropdown-container-item').eq(i).parents('.sidebar-dropdown-container').data('toggle') == 
          $('.sidebar-menu-item').eq(j).data('toggler')
        ){
          $('.sidebar-menu-item').eq(j).trigger('click')
        }
      }
    }
  }
}
check_active()