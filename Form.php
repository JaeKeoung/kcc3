<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>20502최재경</title>
        <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
        <script>
            //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
            function sample4_execDaumPostcode() {
                new daum.Postcode({
                    oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                        // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
                        var extraRoadAddr = ''; // 도로명 조합형 주소 변수

                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraRoadAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                           extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraRoadAddr !== ''){
                            extraRoadAddr = ' (' + extraRoadAddr + ')';
                        }
                        // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
                        if(fullRoadAddr !== ''){
                            fullRoadAddr += extraRoadAddr;
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        document.getElementById('sample4_postcode').value = data.zonecode; //5자리 새우편번호 사용
                        document.getElementById('sample4_roadAddress').value = fullRoadAddr;
                        document.getElementById('sample4_jibunAddress').value = data.jibunAddress;

                        // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                        if(data.autoRoadAddress) {
                            //예상되는 도로명 주소에 조합형 주소를 추가한다.
                            var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                            document.getElementById('guide').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

                        } else if(data.autoJibunAddress) {
                            var expJibunAddr = data.autoJibunAddress;
                            document.getElementById('guide').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

                        } else {
                            document.getElementById('guide').innerHTML = '';
                        }
                    }
                }).open();
            }
        </script>
            
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript"></script>
        <script>
        $(document).ready(function() {
            var re_id = /^[a-z0-9_-]{3,16}$/; // 아이디 검사식
            var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 검사식
            var re_mail = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/;
            
            var 
		form = $('.form'), 
		uid = $('#uid'), 
		upw = $('#upw'), 
		mail = $('#mail')
        
            form.submit( function() {
		if (re_id.test(uid.val()) != true) { // 아이디 검사
			alert('[ID 입력 오류] 유효한 ID를 입력해 주세요.');
                        if(uid.regExp){
                            die();
                        }
			uid.focus();
			return false;
		} else if(re_pw.test(upw.val()) != true) { // 비밀번호 검사
			alert('[PW 입력 오류] 유효한 PW를 입력해 주세요.');
                        if(upw.regExp){
                            die();
                        }
			upw.focus();
			return false;
		} else if(re_mail.test(mail.val()) != true) { // 이메일 검사
			alert('[Email 입력 오류] 유효한 이메일 주소를 입력해 주세요.');
			mail.focus();
			return false;
                }
            });
            
            // #uid, #upw 인풋에 입력된 값의 길이가 적당한지 알려주려고 한다
            // #uid, #upw 다음 순서에 경고 텍스트 출력을 위한 빈 strong 요소를 추가한다
            // 무턱대고 자바스크립트를 이용해서 HTML 삽입하는 것은 좋지 않은 버릇
            // 그러나 이 경우는 strong 요소가 없어도 누구나 form 핵심 기능을 이용할 수 있으니까 문제 없다
            $('#uid, #upw').after('<strong></strong>');
            
            // #uid 인풋에서 onkeyup 이벤트가 발생하면
            uid.keyup( function() {
		var s = $(this).next('strong'); // strong 요소를 변수에 할당
		if (uid.val().length == 0) { // 입력 값이 없을 때
			s.text(''); // strong 요소에 포함된 문자 지움
		} else if (uid.val().length < 3) { // 입력 값이 3보다 작을 때
			s.text('너무 짧아요.'); // strong 요소에 문자 출력
		} else if (uid.val().length > 16) { // 입력 값이 16보다 클 때
			s.text('너무 길어요.'); // strong 요소에 문자 출력
		} else { // 입력 값이 3 이상 16 이하일 때
			s.text('적당해요.'); // strong 요소에 문자 출력
		}
            });
            
            // #upw 인풋에서 onkeyup 이벤트가 발생하면
            upw.keyup( function() {
                    var s = $(this).next('strong'); // strong 요소를 변수에 할당
                    if (upw.val().length == 0) { // 입력 값이 없을 때
                            s.text(''); // strong 요소에 포함된 문자 지움
                    } else if (upw.val().length < 6) { // 입력 값이 6보다 작을 때
                            s.text('너무 짧아요.'); // strong 요소에 문자 출력
                    } else if (upw.val().length > 18) { // 입력 값이 18보다 클 때
                            s.text('너무 길어요.'); // strong 요소에 문자 출력
                    } else { // 입력 값이 6 이상 18 이하일 때
                            s.text('적당해요.'); // strong 요소에 문자 출력
                    }
            });
            
            function regExp(){  
                //특수문자 검증 start
                var str = "2011-12-27";
                var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]/gi
                if(regExp.test(str)){
                 //특수문자 제거
                 var t = str.replace(regExp, "")
                 alert("특수문자를 제거했습니다. ==>" + t)
                }else{
                 alert("정상적인 문자입니다. ==>" + str)
                }
                //특수문자 검증 end
           }

        });
        </script>
    </head>
    <body>
        <form method="post" action="View.php" class="form">
            <!--ID-->
            <label for="ID">아이디</label>
            <input type="text" name="ID" id="uid"><br>
            <!--비밀번호-->
            <label for="password">비밀번호</label>
            <input type="password" name="Password" id="upw"><br>
            <!--e-mail-->
            <label for="EMail">e-mail</label>
            <input type="text" name="EMail" id="mail"><br>
            <!--radio버튼-->
            <input type="radio" name="raaaa" value="yes" checked="checked"><label for="y">yes</label>
            <input type="radio" name="raaaa" value="no"><label for="n">no</label><br>
            <!--우편번호-->
            <input type="text" id="sample4_postcode" placeholder="우편번호" name="postNumber">
            <input type="button" onclick="sample4_execDaumPostcode()" value="우편번호 찾기"><br>
            <input type="text" id="sample4_roadAddress" placeholder="도로명주소" name="roadAdress">
            <input type="text" id="sample4_jibunAddress" placeholder="지번주소" name="geoAdress">
            <span id="guide" style="color:#999"></span><br>

            <input type="submit" value="전송">
        </form>
        
        <?php
            
        ?>
    </body>
</html>
