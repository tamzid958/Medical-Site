$(document).ready(function () {


    $('#content').load('conetent/index.php');
    
    
    $('ul#nav li a').click(function ()
    
    {
      var page = $(this).attr('href');
      $('#content').load('content/' + page + '.php');     
    
    }
    );
    
    
    })
       