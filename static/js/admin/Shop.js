class Shop {
    constructor() {
        this.deleteBtn = $('.delete')
        this.changeBtn = $('.change')
        this.picBtn = $('.changePic')
        this.targetID = null;
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
                let params = new URLSearchParams()
                params.append('id', $(this.parentNode.parentNode).find('.shopID').text())
                params.append('name', context[0].value)
                params.append('illustrate', context[1].value)
                params.append('designer', context[2].value)
                params.append('price', context[3].value)
                axios.post('/weddingDress/backend/admin/ShopManager/ChangeShop.php', params).then(res => {
                    if (res.data) {
                        alert("修改成功！");
                    }
                })
            } else {
                $(this).text("提交")
                context.prop('disabled', false)
            }
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
                params.append("id", window.shop.targetID)
                axios.post("/weddingDress/backend/admin/photoUploader.php", params).then(res => {
                    if (res.data) {
                        alert("修改成功！")
                    }
                })
            }
        })

        this.picBtn.click(function () {
            let imgUploader = $('#uploadImage')
            window.shop.targetID = $(this.parentNode.parentNode).find('.shopID').text()
            return imgUploader.click()
        })
    }
}
window.shop = new Shop()
