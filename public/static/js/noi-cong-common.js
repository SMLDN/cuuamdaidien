var noiCong = {
    levelUrl: "",
    currentLevel: 1,
    jump(){
        window.location.href = this.levelUrl + "/" + this.currentLevel;
    }
};

var listFrame = {
    showFlg: true
};