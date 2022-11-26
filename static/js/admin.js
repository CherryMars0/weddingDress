class Admin {
    constructor() {
        this.Items = $(".layui-nav-child").find("a")
        this.LogoutDom = $(".logout")
        this.context = $(".layui-body")
        this.init()
    }
    init() {
        this.binder()
    }
    binder() {
        this.Items.click(() => {
            this.context.html(null)
        })
        this.LogoutDom.click(() => {
            window.location.href = "/weddingDress/backend/logout.php"
        })
    }
}
new Admin();