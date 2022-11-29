class Details {
    constructor() {
        this.Index = $(".shop_pic").find("img")
        this.shppingCartDom = $(".shop_submit").find('button')
        this.imgSrc = this.GetQueryString("name")
        this.addDom = $('.add')
        this.userName = $('.userCenter').find('a')
        this.subtractDom = $('.subtract')
        this.countDom = $('.count')
        this.userCenterDom = $(".userCenter")
        this.IdDom = $(".shopID")
        this.init()
    }
    init() {
        this.binder()
        this.countDom.val(Number(1))
    }
    binder() {

        this.shppingCartDom.click(() => {
            if (!this.userCenterDom.is('.logined')) {
                window.location.href = "/weddingDress/login.php"
                alert("您未登录,请先登录！")
            } else {
                let shopName = $('.center').text()
                let count = this.countDom.val()
                let ID = this.IdDom.text()
                let params = new URLSearchParams()
                params.append('ID', ID)
                params.append('count', count)
                params.append('shopName', shopName)
                axios.post('/weddingDress/backend/cart/addShop.php', params).then(res => {
                    alert(res.data)
                })
            }
        })
        this.addDom.click(() => {
            this.countDom.val(Number(this.countDom.val()) + Number(1))
        })
        this.subtractDom.click(() => {
            if (Number(this.countDom.val()) > 0) {
                this.countDom.val(Number(this.countDom.val()) - Number(1))
            }
        })
    }
    GetQueryString(names) {
        var urls = urls || window.location.href
        urls && urls.indexOf("?") > -1 ? urls = urls
            .substring(urls.indexOf("?") + 1) : ""
        var reg = new RegExp("(^|&)" + names + "=([^&]*)(&|$)", "i");
        var r = urls ? urls.match(reg) : window.location.search.substr(1)
            .match(reg)
        if (r != null && r[2] != "")
            return decodeURI(r[2])
        return null;
    }
}
new Details();