class shoppingCart {
    constructor() {
        this.Index = $(".shop_pic").find("img");
        this.shppingCartDom = $(".shop_submit").find('button');
        this.init()
    }
    init() {
        this.binder()
        console.log(this.GetQueryString("name"))
    }
    binder() {
        this.shppingCartDom.click(() => {
            window.location.href = "/weddingDress/shoppingCart.php"
            console.log(this.Index.attr("src"))
        })
    }
    GetQueryString(name) {
        var after = window.location.hash.split("?")[1];
        if (after) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = after.match(reg);
            if (r != null) {
                return decodeURIComponent(r[2]);
            } else {
                return null;
            }
        }
    }
}   

new shoppingCart();