 $(document).ready(function () {
     
        $( "form" ).submit(function(){            
            //$( "form" ).attr('action')
            alert('the action is: ' + $( "form" ).attr('action'));
           /*
             $.ajax($( "form" ).attr('action'), {
                        type: 'POST',  // http method
                        data: $("form").serialize(),  // data to submit
                        success: function (data, status, xhr) {
                                $('p').append('status: ' + status + ', data: ' + data);
                        },
                        error: function (jqXhr, textStatus, errorMessage) {
                                        $('p').append('Error: ' + errorMessage);
                                }
                });
            
            return false; */
        });
         $('.ajaxBtn').click(function(){
             
               // alert('hello-world');
             /*   $.ajax('/jquery/submitData', {
                        type: 'POST',  // http method
                        data: { myData: 'This is my data.' },  // data to submit
                        success: function (data, status, xhr) {
                                $('p').append('status: ' + status + ', data: ' + data);
                        },
                        error: function (jqXhr, textStatus, errorMessage) {
                                        $('p').append('Error: ' + errorMessage);
                                }
                }); */
        });
    });