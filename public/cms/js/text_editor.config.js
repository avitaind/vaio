tinymce.init({
    selector:'.text_editor',
    branding: false,
    menubar: false,
    height: 300,
    plugins: "image lists link code youtube noneditable table",
    noneditable_noneditable_class: 'embed-responsive embed-responsive-item',
    content_css: '/libs/bootstrap/css/bootstrap.min.css',
    toolbar: 'undo redo | styleselect removeformat | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignnone | indent outdent | bullist numlist | link unlink | image code youtube | table ',
    file_browser_callback: function(field_name, url, type, win) {
        // trigger file upload form
        if (type == 'image') {
            $('#formUpload input').click();
        }
    },
    setup: function (ed) {
    ed.on('keydown',function(e) {
        if(e.keyCode == 13){
            if(ed.dom.hasClass(ed.selection.getNode(), 'embed-responsive')){               
                ed.selection.setContent(''); 
                return false;                   
            } else {                
                return true;
            }
        }
    });
    },
    image_dimensions: false,
    image_class_list: [
        {title: 'Responsive', value: 'img-fluid'},
      ],
    relative_urls : false,
    remove_script_host : false,
    convert_urls : true,
    table_responsive_width: true
});