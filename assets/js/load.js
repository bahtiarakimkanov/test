$(function(){



    var page = 2,
    post_count = $('#post-count').text(),
    btn_load_post = $('#load-post'),
    url_controller = "/wp-content/themes/test/load-post.php";

$(function(){
    if(post_count <= 2) {btn_load_post.hide();}

    btn_load_post.on('click',function(e){
        e.preventDefault();
        page++;
        $.ajax({
            type       : "GET",
            data       : {posts_per_page : 2, paged: page},
            dataType   : "html",
            url        : url_controller,
            success    : function(data){
                if(!data) {
                    btn_load_post.fadeOut();
                }
                var $data = $(data);
                $data.hide();
                $('.posts').append($data);
                $data.fadeIn(500, function(){
                    if($('.posts > article').size() == post_count) {
                        btn_load_post.hide();
                    }
                });
            }
        });
    });
});














})