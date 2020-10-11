

  $(document).ready(function ()
  {
    var Age="";
    $('#DOB').datepicker(
      {
        onSelect: function (value,ui)
        {
          var today = new Date();
          age=today.getFullYear() - ui.selectYear;
          $('#Age').val(Age);
        },
        changeMonth: true,
        changeYear: true
      }
    )
  }
  
  )
