<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/pop.css">

    <title></title>
</head>
<body>

<h2>创建模态框（Modal）</h2>
<!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">开始演示模态框</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="model-con">

                <button type="button" class="close" data-dismiss="modal" id="circle-btn" aria-hidden="true">&times;</button>
            <div class="modal-header" id="neitui-head">
                <h4 class="modal-title" id="neitui-title">内推订单详情</h4>
            </div>
            <div class="modal-body" id="mod-body">
                <p class="body-p"><span class="span1">订单编号:</span><span class="span2">382900000000</span></p>
                <p class="body-p"><span class="span1">订单时间:</span><span class="span2">2017年1月12日9:01</span></p>
                <p class="body-p"><span class="span1">订单状态:</span><span class="span2">内推成功</span></p>
                <p class="body-p"><span class="span1">推&nbsp;&nbsp;荐&nbsp;&nbsp;人:</span><span class="span2">小李子导师</span></p>
                <p class="body-p"><span class="span1">联系电话:</span><span class="span2">18846177835</span></p>
                <p class="body-p"><span class="span1">内推公司:</span><span class="span2">腾讯科技</span></p>
                <p class="body-p"><span class="span1">内推职位:</span><span class="span2">产品经理</span></p>
                <p class="body-p"><span class="span1">内推时间:</span><span class="span2">2016&nbsp;年&nbsp;8&nbsp;月<span class="span-contanct">至</span>2016&nbsp;年&nbsp;12&nbsp;月</span></p>
                <p class="body-p"><span class="span1">内推方式:</span><span class="span2">发短信</span></p>
                <p class="body-p"><span class="span1">求&nbsp;&nbsp;职&nbsp;&nbsp;者:</span><span class="span2">小王子</span></p>
                <p class="body-p"><span class="span1">内推金额gwdhgdajshdgashjdg:</span><span class="span2">4500元</span></p>
                <p class="body-p"><span class="span1">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注xiix:</span><span class="span2">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</span></p>


            </div> 
            <div class="modal-footer" id="mod-foot">
                <button type="button" class="btn btn-default" id="btn-back" data-dismiss="modal">返回</button>
                <button type="button" class="btn btn-primary">提交更改</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>




<script type="text/javascript" src="./assets/js/jquery.js"></script>

<script type="text/javascript" src="./assets/lib/bootstrap/js/bootstrap.min.js" ></script>
<script>

//    $(function() {
//        $('#myModal').modal({
//            keyboard: true
//        })
//    });
</script>
</body>
</html>
