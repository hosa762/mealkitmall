<?php
include $_SERVER['DOCUMENT_ROOT'].'/board/dbconn.php';
//$board_idx=1;
$board_idx=$_GET['board_idx'];
$query = "SELECT * FROM board where board_idx=".$board_idx;
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$read_num =$row['read_num']+1;
$update_query="update board set read_num=".$read_num." where board_idx=".$board_idx;
$result2 = mysqli_query($conn, $update_query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
</head>
<body>
<h3>문의 게시판 읽기</h3>
<table border=1>
    <tr>
        <td>이름</td><td><?php echo $row['write_name']; ?> </td>
    </tr>
    <tr>
        <td>제목</td><td><?php echo $row['title']?></td>
    </tr>
    <tr>
        <td>내용</td><td><?php echo nl2br($row['contents']) ?></td>
    </tr>
	    <tr>
        <td>ip</td><td><?php echo $row['writer_ip'] ?></td>
    </tr>
    <tr>
	    <td colspan='2'><A href=./board_list.php> 목록</A><A href="./board_delete.php?board_idx=<?php echo $row['board_idx'] ?> "> 삭제</A></td>
    </tr>
</table>

</body>
</html>