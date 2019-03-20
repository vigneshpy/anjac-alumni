
    $(function()
     {

      $('#fname1').hide();
      $('#lastids').hide();
      $('#email1').hide();
      $('#pno1').hide();
      $('#p11').hide();
      $('#p21').hide();

      var fname_error=false;
      var lname_error=false;
      var email_error=false;
      var phoneno_error=false;
      var p1_error=false;
      var p2_error=false;

      $('#fname').focusout(
          function() {check_fname()});
      $('#lname').focusout(
          function() {check_lname()});
      $('#email').focusout(
          function() {check_email()});
      $('#pno').focusout(
          function() {check_pno()});
      $('#p1').focusout(
          function() {check_p1()});
      $('#p2').focusout(
          function() {check_p2()});


      function check_fname()
      {
        var pattern=/[a-z][A-Z]*$/;
        var fname=$('#fname').val()

        if(pattern.test(fname) && fname !=="")
        {
          $('#fname1').hide();
          $('#fname').css("box-shadow","0px 0px 1px 1px #5CB85C");
          
        }
        else
        {
          $('#fname1').html("Invalid User Name");
          $('#fname1').show(); 
          $('#fname').css("box-shadow","0px 0px 1px 1px #d9534f");
          var fname_error=true;
        }

      }
        function check_lname()
      {
        var pattern=/[a-z][A-Z]*$/;
        var lname=$('#lname').val()

        if(pattern.test(lname) && lname !=="")
        {
          $('#lastids').hide();
          $('#lname').css("box-shadow","0px 0px 1px 1px #5CB85C");
          
        }
        else
        {
          $('#lastids').html("Invalid User Name<br>");
          $('#lastids').show();
          $('#lname').css("box-shadow","0px 0px 1px 1px #d9534f");
           lname_error=true;
        }
        
      }
      function check_email()
      {
        var pattern=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         email=$('#email').val()

        if(pattern.test(email) && email !=="")
        {
          $('#email1').hide();
          $('#email').css("box-shadow","0px 0px 1.5px 1.5px #5CB85C");
          
        }
        else
        {
          $('#email1').html("Invalid Email Id<br>");
          $('#email1').show()
          $('#email').css("box-shadow","0px 0px 1.5px 1.5px #d9534f");
        email_error=true;
        }
        
      }
            function check_pno()
      {
        var pattern=/^\d{3}\d{3}\d{4}/;
        var pno=$('#pno').val()
       

        if(pattern.test(pno) && pno !=="")
        {
          $('#pno1').hide();
          $('#pno').css("box-shadow","0px 0px 1.5px 1.5px #5CB85C");
          
        }
        else
        {
          $('#pno1').html("Invalid Mobile No<br>");
          $('#pno1').show()
          $('#pno').css("box-shadow","0px 0px 1.5px 1.5px #d9534f");
           pno_error=true;
        }
        
      }

       function check_p1()
      {
        
        var p1=$('#p1').val()
       

        if(!(p1.length<8))
        {
                $('#p11').hide()
          $('#p1').css("box-shadow","0px 0px 1.5px 1.5px #5CB85C");
        }
        else
       { 
            $('#p11').html("Atleast 8 Characters<br>")

            $('#p11').show();
           $('#p1').css("box-shadow","0px 0px 1.5px 1.5px #d9534f");
           p1_error=true; }
        
      }

       function check_p2()
      {
        
        var p1=$('#p1').val()
        var p2=$('#p2').val()
       

        if(p1!=p2 || p2=="" )
        {
            $('#p21').html("Password Does Not Matches Try Again<br>")

            $('#p21').show();
           $('#p2').css("box-shadow","0px 0px 1.5px 1.5px #d9534f");
           p2_error=true; 
         }
        else
        {
   
          $('#p21').hide()
          $('#p2').css("box-shadow","0px 0px 1.5px 1.5px #5CB85C");
          
        }
        
      }

        $('#rform').submit(

          function (event)
          {
             var fname_error=false;
      var lname_error=false;
      var email_error=false;
      var phoneno_error=false;
      var p1_error=false;
      var p2_error=false;

      check_fname();
      check_lname();
      check_email();
      check_pno();
      check_p1();
      check_p2();

      alert("hlo world")


      if(fname_error===false && lname_error===false && email_error===false && pno_error===false && p1_error ===false &&p2_error===false)
      {
        alert("Registration complete");

        return true;
      }
      else
      {
          

       event.preventDefault();
      }
          

          }
          

          );





    });