class LangController{
    supportedLang = [
        'FR',
        'EN'
    ]
    currentLang;

    constructor() {
        this.currentLang = this.getCurrentLang()
    }

    getCurrentLang(){
        if (localStorage.getItem('lang') === undefined) {
            this.setLang("FR");
        }
        return localStorage.getItem('lang');
    }

    setCurrentLang(lang){
        this.currentLang = lang;
        if (!this.isLangSupported()){
            this.currentLang = this.supportedLang[0];
        }
        return this.currentLang;
    }

    setLang(){
        localStorage.removeItem('lang');
        if (this.isLangSupported()){
            localStorage.setItem('lang',this.currentLang);
        }else{
            localStorage.setItem('lang',this.supportedLang[0]);
        }
    }

    isLangSupported(){
        /*
        let error = false;
        for (let i = 0; i < this.supportedLang.length; i++){
            if (this.currentLang === this.supportedLang[i]){
                error = false;
                return true;
            }else{
                error = true;
            }
        }
        if (error){
            return false;
        }
        */
        return this.supportedLang.includes(this.currentLang);

    }
}


