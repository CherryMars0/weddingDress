class Login {
    constructor() {
        this.Code = null
        this.CodeDom = $('#code')
        this.LoginDom = $('.loginBtn')
        this.InputBoxDoms = $('.inputBox').find('input')
        this.ErrorDom = $('.errorTab')
        this.init()
    }
    init() {
        this.binder()
        this.createRandCode()
    }
    binder() {
        this.CodeDom.click(() => {
            this.createRandCode()
        })
        this.LoginDom.click(() => {
            this.ErrorDom.html(" ");
            if (this.InputBoxDoms[0].value.length != 0) {
                if (this.InputBoxDoms[1].value.length != 0) {
                    if (this.InputBoxDoms[2].value == this.Code) {
                        this.login()
                    } else {
                        this.ErrorDom.html("验证码错误！")
                    }
                } else {
                    this.ErrorDom.html("请输入密码！")
                }
            } else {
                this.ErrorDom.html("请输入用户名！")
            }
        })
    }
    login() {
        let params = new URLSearchParams();
        params.append("userName", this.InputBoxDoms[0].value)
        params.append("userPassword", this.InputBoxDoms[1].value)
        axios.post("/weddingDress/backend/index/login.php", params).then(res => {
            if(res.data){
                window.location.href = "/weddingDress/welcome.php"
            }else{
                this.ErrorDom.html("登录失败，用户名或密码错误！")
                this.createRandCode()
            }
        })
    }
    createRandCode() {
        let chars = ['1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k']
        let randcode = "";
        for (let i = 0; i < 4; i++) {
            let randpos = Math.floor(Math.random() * (chars.length - 1))
            randcode += chars[randpos]
        }
        this.Code = randcode
        $('#code')[0].innerHTML = randcode;
    }
}


new Login()
