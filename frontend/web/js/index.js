$('#map').click(function(){
    $(this).hide();
    $('#map_img').css({
        'width':'100%',
        'height':'700px',
        'margin-left':'auto',
        'float':'none'
    });
    $('#main').after('<div id="map_close" style="background-color: rgba(0,0,0,0);width: 3%;height: 40px;float: right;margin-right: 2%;margin-top: -1100px">' +
        '<img src="../uploads/guest/close.png" style="width: 100%"></div>');
    $('#map_close').click(function(){
        $(this).hide();
        $('#map_img').css({
                'width':'50%',
                'height':'400px',
                'float':'right'
            }
        );
        $('#map').show();
    });
});

/**
 * Created by hustcrab on 2016/6/11.
 */
