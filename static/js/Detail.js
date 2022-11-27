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
        this.init()
    }
    init() {
        this.binder()
        this.countDom.val(Number(1))
    }
    binder() {
        
        this.shppingCartDom.click(() => {
            if(!this.userCenterDom.is('.logined')){
                window.location.href = "/weddingDress/login.php"
                alert("您未登录,请先登录！")
            }else{
                let shopName = this.Index[0].src.split('/').slice(-1)[0].split('.')[0]
                let userName = this.subtractDom.text()
                let count = this.countDom.val()
                let params = new URLSearchParams()
                params.append('userName', userName)
                params.append('count', count)
                params.append('shopName', shopName)
                axios('/weddingDress/backend/Detail/addCart.php', params).then(res => {
                    if (res.data) {
                        alert("添加成功，请到购物车查看商品！");
                    } else {
                        alert("添加失败，请联系卖家！");
                    }
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