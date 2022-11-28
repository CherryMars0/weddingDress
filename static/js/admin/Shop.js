class Shop {
    constructor() {
        this.deleteBtn = $('.delete')
        this.changeBtn = $('.change')
        this.picBtn = $('.changePic')
        this.init()
    }
    init() {
        this.binder()
    }
    binder() {
        this.changeBtn.click(function () {
            let context = $(this.parentNode.parentNode).find('input')
            context.toggleClass('noInput')
            if ($(this).text() == "提交") {
                $(this).text("更改信息")
                context.prop('disabled', true)
            } else {
                $(this).text("提交")
                context.prop('disabled', false)
                let params = new URLSearchParams()
                params.append('name', context[0].value)
                params.append('illustrate', context[1].value)
                params.append('designer', context[2].value)
                params.append('price', context[3].value)
            }
        })

        this.deleteBtn.click(function () {
            console.log(this)
        })

        $("#uploadImage").change(function () {
            let fileData = this.files[0];
            let reader = new FileReader();
            let pettern = /^image/;
            if (!pettern.test(fileData.type)) {
                alert("图片格式不正确")
                return;
            }
            reader.readAsDataURL(fileData);
            reader.onload = function () {
                let params = new URLSearchParams()
                params.append("image", this.result)
                axios.post("/weddingDress/backend/admin/photoUploader.php", params).then(res => {
                    let src = "." + res.data
                    console.log(src)
                })
            }

        });
        this.picBtn.click(function () {
            let imgUploader = $('#uploadImage')
            console.log(imgUploader);
            return imgUploader.click()
        })
    }
}
var shop = new Shop()