<div class="gb_news">
    <div class="gb_newsn">
        <div class="gb_news_l">
            <!-- 新闻滚动 begin -->
            <div style="float:left; line-height:30px; padding-top:0px;" id="Marquee">
                <ul>
                    <?php $return = $this->list_tag("action=module module=news catid=1 order=updatetime num=10"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <li style="float:left;">
                        <a href="<?php echo $t['url']; ?>">News：<?php echo dr_strcut($t['title'], 60); ?></a>
                        <span style="padding-left:40px; color:#ccc;"><?php echo date('Y-m-d',strtotime(strip_tags($t['updatetime']))); ?></span>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
            <script>
                var Mar = document.getElementById("Marquee");
                var child_div = Mar.getElementsByTagName("li")
                var picH = 16; //移动高度
                var scrollstep = 2; //移动步幅,越大越快
                var scrolltime = 200; //移动频度(毫秒)越大越慢
                var stoptime = 3000; //间断时间(毫秒)
                var tmpH = 0;
                Mar.innerHTML += Mar.innerHTML;

                function start() {
                    if (tmpH < picH) {
                        tmpH += scrollstep;
                        if (tmpH > picH) tmpH = picH;
                        Mar.scrollTop = tmpH;
                        setTimeout(start, scrolltime);
                    } else {
                        tmpH = 0;
                        Mar.appendChild(child_div[0]);
                        Mar.scrollTop = 0;
                        setTimeout(start, stoptime);
                    }
                }
                onload = function() {
                    setTimeout(start, stoptime)
                };
            </script>
            <!-- 新闻滚动 end -->
        </div>
        <div class="gb_news_r">
            <!--<script type="text/javascript" src="../../skin/js/jquery.1.4.2-min.js"></script>-->
            <script type="text/javascript">
                $(function() {
                    $("#showimg").mouseover(function() {
                        $("#weixins").css("display", "block");
                    }).mouseout(function() {
                        $("#weixins").css("display", "none");
                    });
                })
            </script>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="8%">&nbsp;</td>
                    <td width="80%" align="right" style="color:#FFFFFF;font-size:16px;font-family:微软雅黑">CUSTOMER SERVICE:</td>
                    <td width="22%" align="left" valign="top" style=" padding-top:0px; padding-left:5px;">
                        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo dr_block(2); ?>&amp;menu=yes" target="_blank"><img src="skin/images/kefu.png" width="20" height="25" /></a>
                        <div id="weixins" style="position:absolute; top:564px; display:none; right:120px; z-index:10001100; text-align:left"><img src="skin/images/erweima2.jpg" width="100" height="100" /></div>
                    </td>
                </tr>
            </table>
        </div>
        <div style=" clear:both;"></div>
    </div>
</div>

<div class="gb_footer">
    <div style="height:80px;">
        <div class="gb_footer_l"><?php echo dr_block(1); ?> All Rigthts Reserved
        </div>
        <div class="gb_footer_r" style="padding-top:10px;padding-left:40px">
            <select name="select4" onchange="window.open(this.value)" size="1" style="width:160px;font-size:16px; font-family:楷体;text-align:center;position:absolute">
                <option>Friend Links</option>
                <?php $return = $this->list_tag("action=navigator type=4"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <option value="<?php echo $t['url']; ?>" target="_blank"><?php echo $t['name']; ?></option>
                <?php } } ?>
            </select>
        </div>
        <div style=" clear:both;"></div>
    </div>
</div>
</body>
</html>