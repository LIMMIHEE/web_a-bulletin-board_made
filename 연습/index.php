<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
        <title>연ㅅ급</title>
        <link href="style.css" rel="stylesheet">
       
    </head>
    <body>
        <div>
            <div class="top"> 홈페이지 상단입니다.</div>
           
            <p class="top-box">mysql 데이터 생성</p>

            <from action="./test2.php" name="test" method="post">
                <li>아이디:<input type="text" name="user_id" size="10"></li>
                <li>이름:<input type="text" name="name"size="10"></li>
                <li>비밀번호:<input type="password" name="pw"size="10"></li>
				<li>-메모- <br>
					<textarea name="memo" cols=100 rows=5></textarea>
				</li>
			
			<input type="submit" value="전 송" onclick="location.href='./test2.php'">
			</form>
		</div>
	
		

    </body>
</html>