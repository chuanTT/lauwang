<!-- script -->
<script src="./assets/js/validate.js"></script>
<script src="./assets/js/lib.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Validate from 
    Validator({
        form: '#form-order',
        rules: [
            Validator.isRequired('#fullname'),
            Validator.isRequired('#num-adult', "Số lượng người lớn là bắt buộc"),
            Validator.isPhoneNumber('#phone-number'),
            Validator.isRequired('#location', 'Vui lòng chọn địa chỉ'),
            Validator.isRequired('#date', 'Vui lòng chọn đủ ngày và giờ'),
            Validator.isRequired('#time', 'Vui lòng chọn đủ ngày và giờ')
        ]
    })

    function checkValid () {
        const $ = document.querySelector.bind(document);

        if($('.feedback__list') != null) {
            slider({
                parentSlider: 'feedback__list',
                loop: true,
                slideToShow: 3,
                slideDots: true,
                autoPlay: true,
                Duration: 5000,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            slideToShow: 1,
                            slideToScroll: 1,
                        }
                    }
                ]
            })
        }
    }
    // check slider
    checkValid();

    //thêm lớp phủ khi thêm bàn thành công 
    function Valid_check () {
        const $$ = document.querySelectorAll.bind(document);
        const $ = document.querySelector.bind(document);
        // tất cả các element
        let NameInput = $$('.form__field-input');
        let indexElement = NameInput.length;
        let Note = $('.form__note');
        let arrayValue = [];

        for(let i=0;i<indexElement;i++) {
            if(NameInput[i].value != "") {
                arrayValue.push(NameInput[i].value)
            } else {
                break;
            }
        }

        if(arrayValue.length === indexElement) {
            createElementNode('div','overlay',$('Body'));
            if($('.overlay')) {
                $('.overlay').innerHTML = 
                `
                    <div class="overlay">
                        <div class="overlay__messager">
                            <h2>Đặt bàn thành công!<br> Nhân viên bên tôi sẽ mau chóng phản hồi</h2>
                            <button class="btn" onclick="ClickEnd(this)" style="padding: 11px 47px;background-color: aliceblue; border-radius: 10px;">OK</button>
                        </div>
                    </div>
                `;
            }
        }
    }
    
    function ClickEnd (event) {
        jQuery('.overlay').remove();
        return true;
    }
    function Parent(element,select) {
        while(element.parentElement) {
            if(element.parentElement.matches(select)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    function createElementNode(tagName,className,parentElement,clone=1) {
        const element = document.createElement(tagName);
        element.className = className;
        parentElement.appendChild(element);
        if(clone>1) {
            for(let i=0;i<clone;i++) {
                parentElement.appendChild(element.cloneNode(true));
            }
        }
    }

    function AjaxLoad (ID, Unsigned, Title) {
        $.get('./modules/endow/endow_details.php',{ID: ID},function (data) {
            $('.endow__list-left').html(data);
        })
        // $.load('./modules/endow/endow_details.php')
        // $.ajax({
        //     type: 'POST',
        //     url: './modules/endow/endow_details.php',
        //     data: {
        //         ID: ID,
        //     }
        // })
    }

</script>