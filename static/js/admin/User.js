class User {
    constructor() {
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
            } else {
                $(this).text("submit")
                context.prop('disabled', false)
                let params = new URLSearchParams()
                params.append('id', context[0].value)
                params.append('name', context[1].value)
                params.append('password',context[2].value)
                params.append('permissions',context[3].value)
                axios()
            }
        })

        this.deleteBtn.click(function () {
            console.log(this)
        })
    }
}
new User()