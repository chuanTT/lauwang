<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    function Click(e) {
        let msg = '';
        let action = e.getAttribute('data-action');
        if(e.name == 'add') {
            msg = 'Bạn có chắc chắn muốn duyệt không!!!';
        }
        else if(action == 'update') {
            msg = 'Bạn có muốn chỉnh sửa hay không!!!';
        }
        else {
            msg = 'Bạn có chắc chắn muốn xóa không!!!';
        }
        let result = confirm(msg);
        return result;
    }

    // thay đỗi ảnh
    let fileMenu = document.querySelector('#fileMenu');
    let imgfile = document.querySelector('#imgFile');

    if(fileMenu&&imgfile) {
        fileChange(fileMenu,imgfile);
    }

    let fileNews = document.querySelector('#fileNews');
    let newsIMG = document.querySelector('#newsIMG');

    if(fileNews&&newsIMG) {
        fileChange(fileNews,newsIMG);
    }

    let filethumnail = document.querySelector('#thumnail');
    let imgthumnail = document.querySelector('.box__thumnail img');

    if(filethumnail&&imgthumnail) {
        fileChange(filethumnail,imgthumnail);
    }
    // end thay đổi ảnh


    function fileChange (fileName,fileImg) {
        fileName.onchange = function (e) {
            let file = e.target.files[0];
            let srcImg = URL.createObjectURL(file);
    
            fileImg.src = srcImg;
            function validateFrom (srcImg) {
               let fileElement =  fileMenu;
               URL.revokeObjectURL(srcImg);
            }
        }
    }


    jQuery('#newsDesc').summernote({
        height: 300,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'video']],
         ],
        image: [
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
        ],
    });

    function Parent(element,select) {
        while(element.parentElement) {
            if(element.parentElement.matches(select)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    function disable (e) {
        let parentElement = Parent(e,'.error__mesage');
        parentElement.remove();
    }


    function Check () {
        let $ = document.querySelector.bind(document);
        let checkName = $('#node').name;
        let msg = '';
        // check name
        if(checkName == 'disableProfile') {
            msg = 'Bạn có chắc muốn vô hiệu hóa không?';
        } else {
            msg = 'Bạn có chắn muốn hủy vô hiệu không?';
        }
        $result = confirm(msg);
        return $result;
    }

    // window.onload = function () {
    //     if(jQuery('.error__mesage')) {
    //         jQuery('html').style.overflow = 'hidden';
    //     }
    // }
</script>