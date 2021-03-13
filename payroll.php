<!DOCTYPE html>
<html>
<head>
	<title>payroll</title>
	<style>
	table, th , td
	{

	border: 1px solid black;

	}
</style>
</head>
<body>


<form action="" method="POST" >
	
	<label>Basic salary</label><br>
	<input type="text" id="basic" name="basic"><br>

	<label>Benefits</label><br>
	<input type="text" id="benefits" name="benefits"><br>

	<label>Submit</label><br>
	<input type="submit" id="submit" name="submit"><br>

</form>

<?php 

if(empty($_POST["basic"]) || empty($_POST["benefits"]))
{

	echo "You did not fill out the required fields.";

}

else

{
	$basic=$_POST["basic"];
	$benefits=$_POST["benefits"];
	$total = ($basic + $benefits);
	$relief = 2400;
	echo $total;
	if ($total <= 18000) {

		$nssf = (0.06 * $total);
		
	}

	else{

		$nssf = 1080;
	}

		$gross = ($total - $nssf);




if (($gross > 0) && ($gross <= 5999))
{

	$nhif = 150;
}

elseif (($gross >= 6000) && ($gross <= 7999))
{

	$nhif = 300;
}

elseif (($gross >= 8000) && ($gross <= 11999))
{

	$nhif = 400;
}
elseif (($gross >= 12000) && ($gross <= 14999))
{

	$nhif = 500;
}
elseif (($gross >= 15000) && ($gross <= 19999))
{

	$nhif = 600;
}
elseif (($gross >= 20000) && ($gross <= 24999))
{

	$nhif = 750;
}
elseif (($gross >= 25000) && ($gross <= 29999))
{

	$nhif = 850;
}
elseif (($gross >= 30000) && ($gross <= 34999))
{

	$nhif = 900;
}
elseif (($gross >= 35000) && ($gross <= 39999))
{

	$nhif = 950;
}
elseif (($gross >= 40000) && ($gross <= 44999))
{

	$nhif = 1000;
}
elseif (($gross >= 45000) && ($gross <= 49999))
{

	$nhif = 1100;
}
elseif (($gross >= 50000) && ($gross <= 59999))
{

	$nhif = 1200;
}
elseif (($gross >= 60000) && ($gross <= 69999))
{

	$nhif = 1300;
}
elseif (($gross >=70000) && ($gross <= 79999))
{

	$nhif = 1400;
}
elseif (($gross >= 80000) && ($gross <= 89999))
{

	$nhif = 1500;
}
elseif (($gross >= 90000) && ($gross <= 99999))
{

	$nhif = 1600;
}
else{

	$nhif = 1700;

}

$payee = 0;

if (($gross > 0) && ($gross <= 24000))
{

	$payee = $payee + (0.1* ($gross));
	echo $payee;

}

elseif (($gross >= 24001) && ($gross <= 32333))
{


	$payee = $payee + (0.1 * 24000) + (0.25*($gross - 24000));
	

}

else
{

	$payee = $payee + (0.1 * 24000) + (0.25*($gross - 24000)) + (0.3*($gross - 32333));


}

	$deduction = ($nhif + $nssf +$payee);
	$net = ($gross - $deduction);





echo "<table style='width: 100%''border: 1px solid black'>
		<tr>
			<th>Basic Salary</th>
			<th>Benefits</th>
			<th>Total Salary</th>
			<th>Payee</th>
			<th>NHIF Deductions</th>
			<th>NSSF Deductions</th>
			<th>Gross Salary</th>
			<th>Relief</th>
			<th>Net Salary</th>
		</tr>
		<tr>
			<td> $basic </td>
			<td> $benefits </td>
			<th> $total </th>
			<td> $payee </td>
			<td> $nhif </td>
			<td> $nssf </td>
			<td> $gross </td>
			<td> $relief </td>
			<td> $net </td>
		</tr>
	
</table>";
}
 ?>

</body>
</html>