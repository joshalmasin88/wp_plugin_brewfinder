jQuery(document).ready(function() {
    jQuery('#searchbtn').click(function() {
        jQuery('.contents').remove();
        console.log('here2');
        var searchParam = jQuery('#searchbox').val();
        console.log(searchParam);
        jQuery.ajax({
            url: `https://api.openbrewerydb.org/breweries?by_city=${searchParam}`,
            success: function(result, status, xhr){
                var res = '';
                if(result.length <= 0)
                {
                    var container = jQuery('<div></div>').addClass('contents').css('text-align' , 'center');
                    jQuery('.parent').append(container);
                    jQuery('.contents').html('No Results Found');
                } else {
                    for(var i = 0; i <result.length; i++)
                    {
                        res += '<div>';
                        res += '<strong>Name:</strong> ' + result[i]['name'];
                        res += '<br>';
                        res += `<strong>Website:</strong> <a href="${result[i]['website_url']}">${result[i]['website_url']}</a>`;
                        res += '<br>';
                        res += '<strong>Address:</strong> ' + result[i]['street'] + ' ' + result[i]['city'] + ' ' + result[i]['state'];
                        res += '<br>';
                        res += '<strong>Phone: </strong> ' + result[i]['phone'];
                        res += '<br><br>';
                        res += '</div>';
                    }
                    var container = jQuery('<div></div>').addClass('contents').css({'text-align' : 'center','height': '250px' ,'overflow' : 'scroll', 'overflow-x' :'hidden'});
                    jQuery('.parent').append(container);
                    jQuery('.contents').html(res);

                }

            }})

    })

})