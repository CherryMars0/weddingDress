class Welcome {
    constructor() {
        this.nameDom = $(".main_banner_title").find("span")
        this.backendBtnDom = $(".joinBackendBtn")
        this.logoutBtnDom = $(".logoutBtn")
        this.shpooingBtnDom = $(".shppingBtn")
        this.loginDom = $(".login")
        this.registerDom = $(".register")
        this.userCenterDom = $(".userCenter")
        this.init()
    }
    init() {
        this.binder()
        let role = this.nameDom[1].innerHTML.split(":")[1]
        if (role.length != 0) {
            this.loginDom.css("display", "none")
            this.registerDom.css("display", "none")
            this.userCenterDom.css("display", "block")
            if (role == " Buyers") {
                this.backendBtnDom.css("display", "none")
            }
            if (role == " Sellers" || role == " WarehouseAdministartor") {
                this.shpooingBtnDom.css("display", "none")
            }
        } else {
            alert("非法登入")
            window.location.href = "/weddingDress/index.php"
        }
    }
    binder() {
        this.backendBtnDom.click(() => {
            window.location.href = "/weddingDress/admin.php"
        })
        this.logoutBtnDom.click(() => {
            window.location.href = "/weddingDress/backend/index/logout.php"
        })
        this.shpooingBtnDom.click(() => {
            window.location.href = "/weddingDress/shoppingCart.php"
        })
    }
}

new Welcome();