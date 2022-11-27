class Judgement {
    constructor() {
        this.loginDom = $(".login")
        this.registerDom = $(".register")
        this.userCenterDom = $(".userCenter")
        this.init()
    }
    init() {
        this.binder()
    }
    binder() {
        if (this.userCenterDom.text() == 404) {
            this.loginDom.css("display", "block")
            this.registerDom.css("display", "block")
            this.userCenterDom.css("display", "none")
            this.userCenterDom.removeClass("logined")
        } else {
            this.loginDom.css("display", "none")
            this.registerDom.css("display", "none")
            this.userCenterDom.css("display", "block")
            this.userCenterDom.addClass("logined")
        }
    }
}
new Judgement()

