
$(document).ready(function(){

    $(document).off('click','.thumbnail').on('click','.thumbnail',function(event){
        event.preventDefault();
        event.stopPropagation();

        var id = $(this).attr("id")
        var url = '/getLinks';

        $.ajax({type:"get",url :url,dataType:'html',data:{id:id},   
        success: function(html) 
        {
            $('#changeCon').html(html);
            

        }
        });
    });  

    $(document).off('click','#request').on('click','#request',function(event){
        event.preventDefault();
        event.stopPropagation();

        $('.form-group').removeClass('has-error');
        $('.help-block').html('');

        var dataString = $('#request-form').serialize(); 
        var section = $('#section').val();
        var url = '/saveRequestForm';

        $.ajax({type:"post",url :url,dataType:'json',data:dataString,   
        error: function(data) 
        {
            var errors = $.parseJSON(data.responseText);

            $.each(errors, function(index, value){

                $("#"+index).addClass('has-error');
                $("#"+index).find('.help-block').html('<strong>'+value+'</strong>');
            });
            button.removeClass('btn-default').addClass('btn-danger');
        },
        success: function(data) 
        {
            $('#request-form')[0].reset();
            $('.alert-success').show();
        }
        });  
    });

})


function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}