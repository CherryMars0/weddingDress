class shoppingCart {
    constructor() {
        this.clearDom = $('.clear')
        this.countAddDom = $('.shop_count_add')
        this.subtractAddDom = $('.shop_count_subtract')
        this.deleteDom = $('.shop_delete')
        this.signTotalPriceDom = $('.signTotalPrice')
        this.rowDom = $('.signal')
        this.init()
    }
    init() {
        this.binder()
        this.signTotalPriceDom.each(function () {
            let totalPriceDom = $('.totalPrice')
            totalPriceDom.text(Number(totalPriceDom.text()) + Number($(this).text()))
        })
        this.rowDom.each(function () {
            let commit = $(this).find('.shppingCart_detail_shop_right')
            let price = commit.find('input').val() * commit.find('.signPrice').text()
            commit.find('.signTotalPrice').text(price)
        })
    }
    binder() {
        this.deleteDom.click(function () {
            let shopID = $(this.parentNode.parentNode.parentNode).find('.shopID').find('span').text()
            let params = new URLSearchParams();
            params.append("ID", shopID)
            axios.post("/weddingDress/backend/cart/deleteShop.php", params).then(res => {
                window.location.reload()
            })
        })
        this.countAddDom.click(function () {
            let count = $(this.parentNode).find('input')
            let signTotalPriceDom = $(this.parentNode.parentNode).find('.signTotalPrice')
            let signPriceDom = $(this.parentNode.parentNode).find('.signPrice')
            count.val(Number(count.val()) + 1)
            signTotalPriceDom.text(signPriceDom.text() * count.val())
        })
        this.subtractAddDom.click(function () {
            let count = $(this.parentNode).find('input')
            let signTotalPriceDom = $(this.parentNode.parentNode).find('.signTotalPrice')
            let signPriceDom = $(this.parentNode.parentNode).find('.signPrice')
            if (count.val() > 1) {
                count.val(Number(count.val()) - 1)
                signTotalPriceDom.text(signPriceDom.text() * count.val())
            }
        })
        this.signTotalPriceDom.bind("DOMNodeInserted", () => {
            $('.totalPrice').text(0)
            this.signTotalPriceDom.each(function () {
                let totalPriceDom = $('.totalPrice')
                totalPriceDom.text(Number(totalPriceDom.text()) + Number($(this).text()))
            })
        })
    }
}

new shoppingCart();