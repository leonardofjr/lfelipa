
$.fn.timer = function (progress) {
    class progressBar {
        constructor(progress) {
            this.progress = progress;
        }

        init(target) {
            this.render(target)
        }

        getProgress() {
            return this.progress;
        }

        render(target) {
            this.animation(target)
        }
        
        animation(target) {
            target[0]

            var timeleft = this.getProgress();
            var time = this.getProgress();
            var timer = setInterval(function () {
                target[0].innerHTML = time- --timeleft + '%';
                if (timeleft <= 0)
                    clearInterval(timer);
            }, 30);

        }

    }
  
    var javascript = new progressBar(progress);
    javascript.init($(this))
};

