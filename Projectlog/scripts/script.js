
$(function () {
            var body = $('body');
            var addtoLog = $('.topbar');
            var form = $('form');
            var date=0 ;
            
            $('.toptoggle').bind('click', function () {
                console.log("clicked");

                body.toggleClass('top-open');
                
                return false;

            });

            $('.close').bind('click', function () {

                body.toggleClass('top-open');
                return false;
            });
            
            $('.custom-submit').bind('click', function(){
                
                     if($('#password').val()=="4illuminaties")
                    {
                            date = $('#month').val()*100 + $('#date').val()*1 ;

                            if(date >=114 && date <= 224)
                             form.submit();
                            else{
                                        alert("Data out of bounds");
                                 
                            }
                    }
                    else{
                                alert("Incorrect Password");
                    }
                    
                       
    
                       
            })  ;
            
            
        });
