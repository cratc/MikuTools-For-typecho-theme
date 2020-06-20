<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<script language="javascript">
 function stateChangeIE(_frame)
    {
       if (_frame.readyState=="interactive")
     {
          var loader = document.getElementById("loading");
          loader.innerHTML      = "";
          loader.style.display = "none";
          _frame.style.visibility = "visible";
         }
 }
    function stateChangeFirefox(_frame)
      {
          var loader = document.getElementById("loading");
          var f= document.getElementById("iframe-box");
          f.style.display="block";
          loader.innerHTML      = "";
          loader.style.display = "none";
          _frame.style.visibility = "visible";
 }
</script>
<fieldset class="nya-container">
    <legend itemprop="name headline" class="nya-title">
        <a itemprop="url" href="<?php $this->options ->siteUrl(); ?>" style="color:#fff">
            <span>首页</span>
        </a>
        <span>&nbsp;--&nbsp;</span>
        <a itemprop="url" href="<?php $this->permalink() ?>" style="color:#fff">
            <span>
                <?php $this->title() ?></span>
        </a>
    </legend>
    <legend itemprop="name headline" class="full-right">
        <a itemprop="url" href="<?php $this->test_url(); ?>" style="color:#fff">
            <i class="fa fa-arrows-alt"></i>
            <span>全屏显示</span>
        </a>
    </legend>
    <div class='loader' id="loading">
        <div class='loader_overlay'></div>
        <div class='loader_cogs'>
            <div class='loader_cogs__top'>
                <div class='top_part'></div>
                <div class='top_part'></div>
                <div class='top_part'></div>
                <div class='top_hole'></div>
            </div>
            <div class='loader_cogs__left'>
                <div class='left_part'></div>
                <div class='left_part'></div>
                <div class='left_part'></div>
                <div class='left_hole'></div>
            </div>
            <div class='loader_cogs__bottom'>
                <div class='bottom_part'></div>
                <div class='bottom_part'></div>
                <div class='bottom_part'></div>
                <div class='bottom_hole'></div>
            </div>
            <p class="p-css">工具加载中</p>
        </div>
    </div>
    <iframe class="iframe-box" id="iframe-box" onreadystatechange=stateChangeIE(this) onload=stateChangeFirefox(this) src="<?php $this->test_url(); ?>" style="width: 100%; border: medium none; display:none;" onload="this.height=100"></iframe>
</fieldset>
<fieldset class="nya-container">
    <legend class="nya-title">
        <i class="fa fa-leanpub"></i>
        <span>工具简介</span>
    </legend>
    <div class="post-content" itemprop="articleBody">
        <h3>
            <?php $this->title() ?>
        </h3>
        <?php $this->content(); ?><br>
        <ul class="nya-list">
            <li>若此工具侵犯了您的权益，请邮箱联系我们，我们将第一时间处理：<a href="mailto:<?php $this->options->BlogMail();?>">
                    <?php $this->options->BlogMail();?></a></li>
        </ul>
    </div>
</fieldset>
<fieldset class="nya-container">
    <legend class="nya-title">
        <i class="fa fa-cny"></i>
        <span>打赏</span>
    </legend>
    <br>
    <ul class="pay">
        <li style="margin: 0 .4375rem;">
            <img src="<?php $this->options->Payqq();?>" alt="qq">
            <div class="name">QQ</div>
        </li>
        <li style="margin: 0 .4375rem;">
            <img src="<?php $this->options->Paywx();?>" alt="weixin">
            <div class="name">微信</div>
        </li>
        <li style="margin: 0 .4375rem;">
            <img src="<?php $this->options->Payali();?>" alt="alipay">
            <div class="name">支付宝</div>
        </li>
    </ul>
</fieldset>
</div>
</main>
</div>
<div class="vfooter">
    <a title="QQ群" href="<?php $this->options->BlogQurl();?>" target="_blank" rel="noopener noreferrer">
        <svg aria-hidden="true" class="icon"><svg id="icon-QQ" viewBox="0 0 1024 1024">
                <path d="M514 964c160.163 0 290 33.944 290-13s-129.837-85-290-85-290 38.056-290 85 129.837 13 290 13z" fill="#F9AE08"></path>
                <path d="M224.158 497.219c-2.116-38.964-2.62-84.091-2.62-134.219 0-173.97 122.396-315 291-315 168.602 0 291 141.03 291 315 0 48.89-0.871 92.934-3.246 131.16 22.727 15.037 53.817 70.943 76.723 141.44 28.33 87.192 33.413 163.686 11.352 170.854-18.69 6.073-50.865-39.56-77.489-106.667 0.437 5.524 0.66 11.097 0.66 16.713 0 137.795-130.422 249.5-298.5 249.5-168.079 0-298.5-111.705-298.5-249.5 0-7.367 0.381-14.66 1.13-21.865-28.252 69.69-62.545 117.475-81.642 110.9-21.932-7.552-15.515-83.946 14.332-170.63 22.972-66.714 53.127-120.08 75.8-137.686z" fill="#000000"></path>
                <path d="M580.876 315.71c-28.884-2.526-49.334-38.472-45.676-80.286 3.658-41.814 30.04-73.662 58.924-71.135 28.884 2.527 49.334 38.473 45.676 80.287-3.658 41.814-30.04 73.662-58.924 71.135z m-136.752 0c-28.885 2.528-55.266-29.32-58.924-71.134-3.658-41.814 16.792-77.76 45.676-80.287 28.885-2.527 55.266 29.321 58.924 71.135 3.658 41.814-16.792 77.76-45.676 80.287zM451.5 274c12.426 0 22.5-12.984 22.5-29s-10.074-29-22.5-29-22.5 12.984-22.5 29 10.074 29 22.5 29z m173.319-16.75A17.27 17.27 0 0 0 626 251c0-13.807-16.79-25-37.5-25S551 237.193 551 251a17.252 17.252 0 0 0 1.181 6.25l0.052-0.1c4.23-8.144 18.864-14.15 36.267-14.15 17.473 0 32.156 6.055 36.319 14.25zM288 709h-1V483h450v204.647c0.662 7.029 1 14.151 1 21.353 0 124.264-100.736 225-225 225S288 833.264 288 709z" fill="#FFFFFF"></path>
                <path d="M512.5 429.95c79.42 0 179.5-40.292 179.5-60.45S611.635 333 512.5 333 333 349.342 333 369.5s100.08 60.45 179.5 60.45z" fill="#F9AE08"></path>
                <path d="M221.537 438c97.553 26 194.753 39 291.601 39 96.848 0 193.648-13 290.4-39 8.31 18.87 15.465 36.87 21.462 54 8.687 24.813 14.02 42.48 16 53-110.195 32-219.528 48-328 48-11.974 0-29.931-0.439-53.871-1.316V717c-15.563 4.07-39.273 5.737-71.129 5-31.856-0.737-51.382-3.403-58.578-8V577.702L188 545c0.167-6.087 4.833-23.754 14-53s15.68-47.246 19.537-54z" fill="#EA1C27"></path>
            </svg></svg>
    </a>
    <a title="Blog" href="<?php $this->options->Blogurl();?>" target="_blank" rel="noopener noreferrer">
        <svg aria-hidden="true" class="icon"><svg t="1562558301960" class="icon" viewBox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5218" width="90%" height="90%">
                <path d="M383.99232 0l0 96.00832c73.48077 0 144.708786 14.376672 211.718006 42.699946 64.776944 27.401692 122.959461 66.640587 172.950141 116.631267s89.229575 108.173197 116.631267 172.950141c28.343753 67.00922 42.720426 138.237235 42.720426 211.718006l96.00832 0c0-353.457251-286.529949-639.9872-639.9872-639.9872z" p-id="5219" fill="#249ffd"></path>
                <path d="M383.99232 191.99616l0 96.00832c94.0218 0 182.411712 36.617508 248.888462 103.094258s103.094258 154.866663 103.094258 248.888462l96.00832 0c0-247.413932-200.577108-447.99104-447.99104-447.99104z" p-id="5220" fill="#249ffd"></path>
                <path d="M480.00064 383.99232l-63.99872 63.99872-224.00576 63.99872-191.99616 416.00192 25.374213 25.374213 232.791504-232.791504c-1.413092-5.283734-2.170837-10.833703-2.170837-16.567989 0-35.347773 28.650947-63.99872 63.99872-63.99872s63.99872 28.650947 63.99872 63.99872-28.650947 63.99872-63.99872 63.99872c-5.734285 0-11.284254-0.757745-16.567989-2.170837l-232.791504 232.791504 25.374213 25.374213 416.00192-191.99616 63.99872-224.00576 63.99872-63.99872-160.00704-160.00704z" p-id="5221" fill="#249ffd"></path>
            </svg></svg>
    </a>
    <!--    <a title="GitHub" href="https://github.com/Ice-Hazymoon/MikuTools" target="_blank" rel="noopener noreferrer">
            <svg aria-hidden="true" class="icon"><use xlink:href="#icon-github"></use></svg>
        </a>
        <a title="Telegram" href="https://t.me/mikutools" target="_blank" rel="noopener noreferrer">
            <svg aria-hidden="true" class="icon"><use xlink:href="#icon-telegram"></use></svg>
        </a>    -->
    <a title="微博" href="<?php $this->options->Weibo();?>" target="_blank" rel="noopener noreferrer">
        <svg aria-hidden="true" class="icon"><svg id="icon-weibo" viewBox="0 0 1026 1024">
                <path d="M1012.49 451.553v0.159c-6.697 20.66-28.861 31.99-49.449 25.288a39.352 39.352 0 0 1-25.287-49.582l-0.067-0.031c20.536-63.6 7.516-136.156-40.315-189.363-47.892-53.212-118.502-73.554-183.731-59.659-21.222 4.537-42.133-9.047-46.638-30.3-4.506-21.253 9.021-42.194 30.239-46.73 91.709-19.563 191.114 8.98 258.467 83.881 67.36 74.839 85.515 176.85 56.781 266.337z" fill="#D32024"></path>
                <path d="M740.429 304.348v-0.03c-18.217 3.973-36.178-7.732-40.06-26.01-3.947-18.31 7.763-36.373 25.98-40.254 44.692-9.548 93.143 4.322 125.885 40.781 32.866 36.496 41.631 86.17 27.607 129.772a33.833 33.833 0 0 1-42.562 21.847c-17.782-5.76-27.484-24.914-21.724-42.69h-0.062c6.887-21.346 2.565-45.635-13.46-63.473-16.026-17.818-39.752-24.546-61.604-19.943z m30.05 192.184c-14.46-4.352-24.352-7.326-16.774-26.352 16.333-41.313 18.027-76.964 0.317-102.385-33.31-47.734-124.451-45.133-228.838-1.28 0-0.061-32.799 14.367-24.412-11.704 16.056-51.774 13.645-95.186-11.361-120.192-56.658-56.878-207.304 2.12-336.477 131.64C56.187 463.32 0 566.14 0 655.1 0 825.18 217.503 928.594 430.28 928.594c278.917 0 464.527-162.504 464.527-291.59 0-77.936-65.546-122.193-124.329-140.472zM430.842 867.62c-169.774 16.84-316.35-60.155-327.368-171.96-11.049-111.74 117.72-216.034 287.488-232.873 169.805-16.84 316.355 60.16 327.368 171.904 11.018 111.866-117.683 216.09-287.488 232.929z" fill="#D32024"></path>
                <path d="M447.805 548.859c-80.783-21.09-172.119 19.287-207.206 90.65-35.743 72.862-1.188 153.681 80.44 180.1 84.578 27.357 184.233-14.525 218.88-93.148 34.181-76.81-8.478-155.94-92.114-177.602zM386.12 734.792c-16.43 26.29-51.584 37.806-78.065 25.661-26.107-11.889-33.833-42.44-17.403-68.045 16.215-25.538 50.207-36.869 76.498-25.856 26.604 11.392 35.087 41.687 18.97 68.24z" fill="#D32024"></path>
            </svg></svg>
    </a>
</div>
<script type="text/javascript">
function reinitIframe() {
    var iframe = document.getElementById("iframe-box");
    try {
        var bHeight = iframe.contentWindow.document.body.scrollHeight;
        var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
        var height = Math.max(bHeight, dHeight);
        iframe.height = height;
    } catch (ex) {}
}
window.setInterval("reinitIframe()", 200);
</script>
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('footer.php'); ?>
