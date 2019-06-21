function like(post_id,username){
    $.ajax({
        url: 'likedislike.php',
        type: 'post',
        data: {
            'like':1,
            'postid':post_id,
            'username':username
        },
        success: function(data) {
          //called when successful
         $('#like'+postid).attr('value','dislike');
        // alert("getting data");
        },
        error: function(e) {
          //called when there is an error
          //console.log(e.message);
        }
      });
}