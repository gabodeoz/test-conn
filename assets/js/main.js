 $(document).ready(function () {
     
        $( "form" ).submit(function(){            
            
             $.ajax($( "form" ).attr('action'), {
                        type: 'POST',  // http method
                        data: $("form").serialize(),  // data to submit
                        success: function (data, status) {
                                $('p').append('status: ' + status + ', data: ' + data);
                        },
                        error: function (errorMessage) {
                                        $('p').append('Error: ' + errorMessage);
                                }
                });
            
            return false; 
        });
        
    });