class shoppingCart{
    constructor(){
        this.Index = $(".shop_pic").find("img");
        this.shppingCartDom = $(".shop_submit").find('button');
        this.init()
    }
    init(){
        this.binder()
    }
    binder(){
        this.shppingCartDom.click(()=>{
            window.location.href = "/weddingDress/shoppingCart.php"
            console.log(this.Index.attr("src"))
        })
    }
}
new shoppingCart();