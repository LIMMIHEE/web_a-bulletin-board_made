<?php 

    $id=$_GET[id];
    $user_id=$_GET[user_id];
    $name=$_GET[name];
    $pw=$_GET[pw];
    $memo=$_GET[memo];

    echo $regdate=date("YmdHis",time());//날짜, 시간
    $ip=getenv("REMOTE_ADDR");

    $connect = mysql_connect("localhost","mirimhee020","qlalfqjsghdlqslek");
    mysql_select_db("mirimhee020",$connect);
    if(!$connect){
        echo "연결에 실패." .mysql_error();
    }


    //퀘리 전송
    $query= "insert into bbs_1(id,user_id,name,pw,memo,regdate,ip)
            values('$id','$user_id','$name','$pw','$memo','$regdate','$ip')";
    mysql_query($query,$connect);
    mysql_close($connect);


?>