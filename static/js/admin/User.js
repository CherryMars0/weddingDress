class User {
    constructor() {
        this.content =
            this.deleteBtn = $('.delete')
        this.changeBtn = $('.change')
        this.init()
    }
    init() {
        this.binder()
    }
    binder() {
        this.changeBtn.click(function () {
            let context = $(this.parentNode.parentNode).find('input')
            context.toggleClass('noInput')
            if ($(this).text() == "submit") {
                $(this).text("change")
                context.prop('disabled', true)
                let params = new URLSearchParams()
                params.append('id', $(this.parentNode.parentNode).find('.userID').text())
                params.append('name', context[0].value)
                params.append('password', context[1].value)
                params.append('permissions', context[2].value)
                axios.post('/weddingDress/backend/admin/UserManager/ChangeUser.php', params).then(res => {
                    if (res.data) {
                        alert("修改成功！")
                    }
                })
            } else {
                $(this).text("submit")
                context.prop('disabled', false)
            }
        })

        this.deleteBtn.click(function () {
            let params = new URLSearchParams()
            params.append('id', $(this.parentNode.parentNode).find('.userID').text())
            axios.post('/weddingDress/backend/admin/UserManager/DeleteUser.php', params).then(res => {
                if (res.data) {
                    alert("删除成功！")
                    window.location.reload()
                }
            })
        })
    }
}
new User()