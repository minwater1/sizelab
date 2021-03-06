<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css"> 
    <title>로그인 | SizeLab</title>
    <style>
    @media(max-height: 705px) {
  .container{
    height: 705px;
  }
}
    </style>
</head>

<body>
    <div class = "container">
        <center>
        <div class="sizelab-wrapper wrapper-member devicePC">
            <div class="n-member-area">
            <a href="../Main.html" style= "color:black; text-decoration: none">
            <h1 style="font-size: 3em">SizeLab</h1>
            </a>
                <!-- Header -->
                    <header class="header2">
                        <div class="header__area">
                            <h1 class="header__title2">로그인</h1>
                        </div>    
                    </header>
                <!-- //Header -->
                
                <!-- Login -->
                <form name="loginform" class="login-form" action="/login/v1/login" method="post" onsubmit="return loginCheck(this);"> <!-- 나중에 수정 필요 -->
                <!--<input type="hidden" id="refererFromLoginPage" name="referer" value="http://www.musinsa.com/index.php?"/>     나중에 수정 필요 -->
                    <input type="text" name="id" class="n-input" title="아이디" value="" placeholder="아이디를 입력해 주세요."/>
                    <input type="password" name="pw" class="n-input" title="패스워드" value="" placeholder="비밀번호를 입력해 주세요."/>
                <!--<input type="hidden" id="isCheckGoogleRecaptcha" name="isCheckGoogleRecaptcha" value="false"/>나중에 수정 필요 -->
                    <button type="submit" class="n-btn btn-md btn-accent">로그인</button>
                    <button type="button" class="n-btn btn-md btn-accent" onclick="document.location.href='member.html'">회원가입</button> 
                    <div class="login-help-feature">
                        <div>
                            <br>
                            <input type="checkbox" class="n-check" id="autologin" name="autologin" value="1"> <!-- 클래스 현재 기능 없음-->
                            <label for="autologin" class="ui-toggle-btn" id="tooltipAutoLogin">자동로그인</label> <!-- 클래스 현재 기능 없음-->
                            <p class="n-tooltip">
                                <span class="n-tooltip-arrow arrow-top"></span>                               <!-- 자동로그인 기능을 구현해야함 -->
                            </p>
                        </div>
                        <!-- Util -->
                        <div class="login-util">
                        <br>
                            <a href="#"style="text-decoration: none"><font color="black">아이디 찾기</font></a>   <!-- 기능과 페이지 구현 필요 -->
                            <span></span>
                            <a href="#"style="text-decoration: none"><font color="black">비밀번호 찾기</font></a> <!-- 기능과 페이지 구현 필요 -->
                        </div><!-- //Util -->
                    </div>
                </form>
            </div><!-- //Member -->
        </div><!-- //WRAPPER -->
        </center>
    </div>
</body>
</html>