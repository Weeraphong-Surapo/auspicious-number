function Swal(result,title,txt){
    setTimeout(function() {
        swal({
            type: result,
            title: title,
            text: txt,
            timer: 1000,
            showConfirmButton: true
        });
    });
}
