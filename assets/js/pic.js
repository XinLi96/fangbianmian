 define(function (){
            'use strict';
                a('img').addEventListener('change', function() {
                    a('overlay').style.display = 'flex';
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var compressImg = compress(this.result,fileSize,'imgInfo','overlay');
                    };
                    reader.readAsDataURL(this.files[0]);
                    var fileSize = Math.round(this.files[0].size / 1024 / 1024);
                }, false);
                a('img1').addEventListener('change', function() {
                    a('overlay1').style.display = 'flex';
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var compressImg = compress(this.result,fileSize,'imgInfo1','overlay1');
                    };
                    reader.readAsDataURL(this.files[0]);
                    var fileSize = Math.round(this.files[0].size / 1024 / 1024);
                }, false);




                var compress = function(res,fileSize,imgf,over) {
                    var img = new Image(),
                        maxW = 200; //设置最大宽度
                    img.onload = function() {
                        var cvs = document.createElement('canvas'),
                            ctx = cvs.getContext('2d');
                        if (img.width > maxW) {
                            img.height *= maxW / img.width;
                            img.width = maxW;
                        }
                        cvs.width = img.width;
                        cvs.height = img.height;
                        ctx.clearRect(0, 0, cvs.width, cvs.height);
                        ctx.drawImage(img, 0, 0, img.width, img.height);
                        var compressRate = getCompressRate(1, fileSize);
                        var dataUrl = cvs.toDataURL('image/jpeg', compressRate);

                        a(imgf).setAttribute('src', dataUrl);
                        a(over).style.display = 'none';
                    };
                    img.src = res;
                };

                function getCompressRate(allowMaxSize, fileSize) { //计算压缩比率，size单位为MB
                    var compressRate = 1;
                    if (fileSize / allowMaxSize > 4) {
                        compressRate = 0.5;
                    } else if (fileSize / allowMaxSize > 3) {
                        compressRate = 0.6;
                    } else if (fileSize / allowMaxSize > 2) {
                        compressRate = 0.7;
                    } else if (fileSize > allowMaxSize) {
                        compressRate = 0.8;
                    } else {
                        compressRate = 0.9;
                    }
                    return compressRate;
                }

                function a(id) {
                    if (typeof id === 'string' && id.constructor === String) {
                        return document.getElementById(id);
                    } else {
                        return;
                    }
                }
});