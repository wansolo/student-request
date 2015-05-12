var timer;

function up()
{
    timer = setTimeout(function()
    {
        var keywords = $('#search-input').val();

        if (keywords.length > 0)
        {
            $.post('search', {keywords: keywords}, function(markup)
            {
               
                     $('#search-results').html(markup);
                
               
            });
        }else{
             $('#search-results').empty();
        }

    }, 500);
}

function down()
{
    clearTimeout(timer);
}