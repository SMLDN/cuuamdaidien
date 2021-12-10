var noiCong = {
    levelUrl: "",
    currentLevel: 1,
    jump(e){
        e.preventDefault();
        window.location.href = this.levelUrl + "/" + this.currentLevel + "#current-inner-link";
    }
};

var listFrame = {
    showFlg: true
};