ClassicEditor
    .create( document.querySelector( '#dom3_text' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

if ($(".alert").length) {
    setTimeout("$('.alert').alert('close')", 2000)
}

