class Admin {
    constructor() {
        this.Items = $(".layui-nav-child").find("a")
        this.LogoutDom = $(".logout")
        this.context = $(".layui-body")
        this.titleDom = $(".title p")
        this.init()
    }
    init() {
        this.binder()
        console.log(this.titleDom);
    }
    binder() {
        this.Items.click(() => {
            this.context.html(null)
        })
        this.LogoutDom.click(() => {
            window.location.href = "/weddingDress/backend/index/logout.php"
        })
        this.titleDom.click(() => {
            window.location.reload()
        })
    }
}
new Admin();