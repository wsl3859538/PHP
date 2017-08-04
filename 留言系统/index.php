<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Document</title>
</head>
<body>
    <h2 style="text-align: center">添加留言</h2>
    <form action="jumpA.php" method="get">
        <input type="hidden" name="act" value="add">
        <table style="background: rgba(33, 150, 243, 0.58);border-collapse: collapse;width: 80%;">
            <tr>
                <td>留言者</td>
                <td>
                    <input type="text" name='ly_name' />
                </td>
            </tr>
            <tr>
                <td>标题</td>
                <td>
                    <input type="text" name='ly_title' />
                </td>
            </tr>
            <tr>
                <td>内容</td>
                <td>
                    <textarea  style="width: 200px;height: 100px;" name='ly_content'></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</body>
<style>
    td{
	    border: 2px solid;
    	padding: 2px;
    }

</style>
</html>
