var noiCong1 = {
    basePoint: {
        lucTay: 100,
        thanPhap: 1,
        noiTuc: 1,
        canhKhi: 1,
        thePhach: 1
    },
    equipMaxPoint: {
        lucTay: 1,
        thanPhap: 1,
        noiTuc: 1,
        canhKhi: 1,
        thePhach: 1
    },

    repository: [],

    currentLevel: 1,

    currentInfo: {},

    init(){
        (async () => {
            let data = null;
            const response = await fetch("/api/noi-cong/vo-vong-than-cong");
            if (response.ok) {
                this.initAttribute(await response.json());
            }
            this.updateInfo();
            this.$watch("currentLevel", this.updateInfo.bind(this));
        })();
    },

    initAttribute(data){
        if(data != null){
            this.repository = data;
        }
    },

    increaseLevel(){
        if(this.currentLevel < this.repository.attributes.length){
            this.currentLevel++;
            this.updateInfo();
        }
    },

    decreaseLevel(){
        if(this.currentLevel > 1){
            this.currentLevel--;
            this.updateInfo();
        }
    },
    
    updateInfo(){
        this.currentInfo = this.repository.attributes[this.currentLevel - 1] ?? this.currentInfo;
    }
};