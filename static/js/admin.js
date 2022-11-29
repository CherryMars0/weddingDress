class Admin {
    constructor() {
        this.Items = $(".layui-nav-child").find("a")
        this.LogoutDom = $(".logout")
        this.context = $(".layui-body")
        this.titleDom = $(".title p")
        this.role = $(".role")
        this.UserManagerDom = $(".Management")

        this.init()
    }
    init() {
        this.binder()
        this.judgement()
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
        this.Items[0].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_Index.php")
        })
        this.Items[1].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_BridalVeil.php")
        })
        this.Items[2].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_ChidalVeil.php")
        })
        this.Items[3].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_Formal.php")
        })
        this.Items[4].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_Seller.php")
        })
        this.Items[5].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_Buyers.php")
        })
        this.Items[6].addEventListener('click', () => {
            this.context.load("../../weddingDress/backend/admin/child_WarehouseAdministartor.php")
        })
    }
    judgement(){
        if(this.role.text() == "WarehouseAdministartor"){
            this.UserManagerDom.css("display", "none")
            console.log(111);
        }else if(this.role.text() == "Sellers"){
            this.UserManagerDom.css("display", "block")
        }
    }
}
new Admin();