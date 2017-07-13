<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>日历</title>
		<style>
			div{
				margin:0 auto;
				width:600px;
				text-align:center;
			}
			th{
				width:100px;
			}
			tr{
				height:50px;
			}
		
		</style>
	</head>
	<body>
		<div>
			<form action="doRi.php" method="post">
				年份：<select name="year">
						<option value="0">--请选择--</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
					</select>
				月份：<select name="month">
						<option value="0">--请选择--</option>
						<option value="1">1月</option>
						<option value="2">2月</option>
						<option value="3">3月</option>
						<option value="4">4月</option>
						<option value="5">5月</option>
						<option value="6">6月</option>
						<option value="7">7月</option>
						<option value="8">8月</option>
						<option value="9">9月</option>
						<option value="10">10月</option>
						<option value="11">11月</option>
						<option value="12">12月</option>
					</select>
					<input type="submit" value="查询">
					<input type="reset" value="重置">
			</form>
			<h3>XX年XX月日历</h3>
			<table border="1">
				<tr>
					<th>星期日</th>
					<th>星期一</th>
					<th>星期二</th>
					<th>星期三</th>
					<th>星期四</th>
					<th>星期五</th>
					<th>星期六</th>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>	
	</body>
</html>




