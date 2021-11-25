var noiCong = {
    levelUrl: "",
    currentLevel: 1,
    jump(e){
        e.preventDefault();
        window.location.href = this.levelUrl + "/" + this.currentLevel;
    }
};

var listFrame = {
    showFlg: true
};