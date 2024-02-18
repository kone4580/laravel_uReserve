<div class="login_section page_section__gray">
    <div class="header_logo">
        {{ $logo }}
    </div>

    <div class="login-box">
        <div class="login-form">
            {{ $slot }}
        </div>
    </div>

    <a href="../signin/" class="register-btn">
        はじめてご利用の方
        <img src="../assets/images/common/angle_right_white.png" class="angle_right_white" alt="">
    </a>

    <ul class="useful_link">
        <li><a href="../terms/">利用規約</a></li>
        <li><a href="../privacy/">プライバシーポリシー</a></li>
    </ul>

    <address class="copyright">© 2023 ISHIGAKIJIMA-ACTIBITY All Rights Reserved.</address>
</div>
