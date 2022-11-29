class ChidalVeil {
    constructor() {
        this.Index = $(".shop_banner").find("img");
        this.init()
    }
    init() {
        this.binder()
    }
    binder() {
        this.Index.click(function () {
            window.location.href = '/weddingDress/Detail.php?' + this.src.split('/').slice(-1)[0].split('.')[0];
        })
    }
}
new ChidalVeil();