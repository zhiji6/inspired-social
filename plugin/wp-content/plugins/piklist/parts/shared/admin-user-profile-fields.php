
<script type="text/javascript">
  
  (function($)
  {
    $(document).ready(function()
    {      
      var sections = ['<?php echo implode("', '", $sections); ?>'];
      
      $('#your-profile h3').each(function()
      {
        if ($.inArray($(this).text(), sections) == -1)
        {
          $(this)
            .hide()
            .nextUntil('.form-table')
            .andSelf()
            .next('.form-table')
            .andSelf()
            .hide();
        }
      });
      
      $('#your-profile').submit(function()
      {
        if ($('#pass1').val() != $('#pass2').val())
        {
          $('#pass1, #pass2').val('');
        }
      });
      
      $('#your-profile').show();
    });
  })(jQuery);
  
</script>

<style type="text/css">

  #your-profile {
    display: none;
  }
  
</style>