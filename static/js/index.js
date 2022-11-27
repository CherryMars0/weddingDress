let banners = [
    {
        imageName: "home_wlf.png",
    },
    {
        imageName: "home_au.png",
    },
    {
        imageName: "p1.png",
    },
    {
        imageName: "p2.png",
    },
    {
        imageName: "p3.png",
    },
];



class Index {
    constructor() {
        this.images = $(".shop_banner").find("img")
        this.init()
    }

    init() {
        new Slide(banners).init()
        this.binder()
    }

    binder() {
        this.images.click(function () {
            window.location.href = '/weddingDress/Detail.php?' + this.src.split('/').slice(-1)[0].split('.')[0];
        })
    }
}

new Index();