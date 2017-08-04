<?php 
    $fileName = 'text.txt';
     if(file_exists($fileName) && filesize($fileName)>0){
        $str = unserialize(file_get_contents($fileName));
        $arr = $str;
    };
    
    
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Document</title>
</head>
<body>
<h2>留言列表页面-</h2><a href="index.php">添加留言</a>
<div>
    <table>
        <tr>
            <th>编号</th>
            <th>标题</th>
            <th>内容</th>
            <th>留言者</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        <?php 
            foreach ($arr as $key=>$val){
            ?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $val['title']?></td>
            <td><?php echo $val['content']?></td>
            <td><?php echo $val['username']?></td>
            <td><?php echo $val['time']?></td>
            <td>
                <a href="#">更新</a>
                <a href="#">删除</a>
            </td>
        </tr>    
           
           
       <?php 
        }?>
        
        
    </table>
</div>
</body>
<style>
    h2{
	    display: initial;
    }
    table{
	   border-collapse: collapse;
       width: 80%;
       text-align: center;
    }
    tr{
	    height: 40px;
    }
    td,th{
	    border: 1px solid;
    	padding: 0 10px;
    }
    
</style>
</html>

