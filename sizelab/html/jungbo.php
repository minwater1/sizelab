<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>정보 변경 | SizeLab</title>
	<style>
	@media(max-height: 888px) {
  .container{
    height: 100%;
  }
}
</style>
</head>
<body>
  <div class = "container">
	<div class="sizelab-wrapper wrapper-member">
	<h1 class="header__title" style="font-size: 3em;"><a href="../main.html" style="color: black; text-decoration: none">SizeLab</a></h1>
        

	<!-- Member -->
	<div class="n-member-area form-area">
		<form name="joinForm" id="joinForm" action="/member/v2/join/verify" method="post" novalidate>    <!--음 나중에 -->
		   <!-- 추가 수정 필요(어, 고정적인 거 비밀번호는 바꿀 수있는데 아이디랑 이름은 그대로해야대잖아)
			<input type="hidden" name="checkId" value="0">
			<input type="hidden" name="checkPassword" value="0">
			<input type="hidden" name="checkConfirmPassword" value="0">
			<input type="hidden" name="checkEmail" value="0">
			<input type="hidden" name="checkRecommendMemberId" value="0">
			<input type="hidden" name="checkPhoneNumber" value="0">
			<input type="hidden" id="joinToken" name="joinToken" value="d104e9fb1e61ff2ce388850055e8042885add571"/>
			<input type="hidden" name="eventToken" value=""/>
			<input type="hidden" name="snsToken" value=""/>
			<input type="hidden" id="partnerCode" name="partnerCode" value=""/>
			<input type="hidden" name="eventPage" value=""/>
			<input type="hidden" name="eventCode" value=""/>
			<input type="hidden" name="returnUrl" value=""/>
            -->
			<!-- Header -->
			<header>
				<h1 style = "text-align: center">정보 변경</h1>
			</header>
			<br>
			<div>
				<div>
					<label for="memberId">아이디 </label>
					<input type="text" class="n-input2 input" id="memberId" name="memberId" minlength="5" maxlength="11">
					<p id="hLayerid"></p>
				</div>
				<br>
				<div>
					<label for="password">비밀번호 </label>
					<div>
						<input type="password" class="n-input2 input" id="password" name="password" minlength="8" autocomplete="new-password"
							   placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)">
						<p id="passwordValidMessage"></p>
					</div>
				</div>
				<br>
				<div>
					<label for="dasi-password">비밀번호 다시 입력 </label>
					<div>
						<input type="password" class="n-input2 input" id="dasi-password" name="dasi-password" minlength="8" autocomplete="dasi-new-password"
							   placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)">
						<p id="dasi-passwordValidMessage"></p>
					</div>
				</div>
				<br>
				<div>
					<label for="nickname">닉네임 </label>
					<div>
						<input type="text" class="n-input2 input" id="nickname" name="nickname" minlength="8" 
							   placeholder="닉네임 입력" >
						<p id="nicknameValidMessage"></p>
						<button type="button" class="btn" onclick="togglePassword('password', this);" >
							<i>닉네임 중복 확인</i>
						</button>
					</div>
				</div>
				<br>
				<div>
					<label for="email">이메일 </label>
					<div id = "emailFromLayer">
						<input type="email" class="n-input2 input" id="email" name="email" maxlength="50" placeholder="이메일 입력" autocomplete="off" value="">
						<p id="hLayeremail"></p>
					</div>
				</div>
				<br>
                <!--
				<div> 
					<label for="tel">전화번호 </label>    이메일이랑 전화번호 중에 인증항목에 해당한 것만 남기고 아닌 것은 지우기 
					<div id = "telFromLayer">
						<input type="number" class="n-input2 input" id="tel" name="tel" maxlength="50" placeholder="전화번호 입력" autocomplete="off" value="">
						<p id="telLayeremail"></p>
					</div>
				</div>
				<br>
                -->
				<div>
					<label for="gender">성별 </label>
					<div>
						<p id="genderValidMessage"></p>
						<input type = "radio" name = "gender" checked>남자&emsp;
						<input type = "radio" name = "gender">여자
					</div>
				</div>
				<br><br>
			</div>
			<div id="joinBtnDiv" class="member-btn">
					<button type="submit" id="joinBtn" class="n-btn btn-md btn-accent">수정하기</button>
			</div>
		</form>
	</div>
    </div>
</div>
</body>
</html>