class Formal{
    constructor(){
        this.Index = $(".shop_banner").find("img");
        this.init()
    }
    init(){
        this.binder()
    }
    binder(){
        this.Index.click(()=>{
            window.location.href = "/weddingDress/shoppingCart.php"
        })
    }
}
new Formal();