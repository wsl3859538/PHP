<?php 
 
    $username = isset($_GET['ly_name'])?$_GET['ly_name']:"";
    $title = isset($_GET['ly_title'])?$_GET['ly_title']:"";
    $content = isset($_GET['ly_content'])?$_GET['ly_content']:"";
    $act = isset($_GET['act'])?$_GET['act']:"";
    $time = date('Y-m-d h:i:s');
    
    $fileName = 'text.txt';
    if(file_exists($fileName) && filesize($fileName)>0){
        $str = unserialize(file_get_contents($fileName));
        $arr = $str;
    };
   
    if($act == 'add'){
        $arr[] = array(
            'username'=>$username,
            'title'=>$title,
            'content'=>$content,
            'act'=>$act,
            'time'=>$time
        );
    }

    $arr = serialize($arr);
    if(file_put_contents($fileName, $arr)){
        echo '������Գɹ�!','<br />',
        '<a href="index.php">��������</a>',"\n",
        '<a href="msgdetails.php">�鿴����</a>';
    }else{
        echo '�������ʧ��!';
    }
    
?>





