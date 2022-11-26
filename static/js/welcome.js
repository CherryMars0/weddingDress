class Welcome {
    constructor() {
        this.nameDom = $(".main_banner_title").find("span")
        this.backendDom = $(".joinBackendBtn")
        this.logoutDom = $(".logoutBtn")
        this.init()
    }
    init() {
        this.binder()
        let role = this.nameDom[1].innerHTML.split(":")[1]
        if (role.length != 0) {
            if (role == " Buyers") {
                this.backendDom.css("display", "none")
            }
        }else{
            alert("非法登入")
            window.location.href = "/weddingDress/index.php"
        }
    }
    binder() {
        this.backendDom.click(() => {
            window.location.href = "/weddingDress/admin.php"
        })
        this.logoutDom.click(() => {
            window.location.href = "/weddingDress/backend/logout.php"
        })
    }
}

new Welcome();