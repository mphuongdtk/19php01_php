<?php
	//bài 2
	echo "Bạn A gửi ngân hàng 20 triệu đồng, lãi suất 0.6%/tháng. Hỏi sau 3 năm, bạn A nhận được cả gốc lẫn lãi là bao nhiêu?";
	echo "<br>";
	$tongTienA = 20000000;
	$tienLai = 0.6/100;
	for ($i = 1; $i <= 36; $i ++)
	{
		$tongTienA = $tongTienA + $tongTienA*$tienLai;
	}  
	echo "Tổng số tiền gốc và lãi  sau 3 năm là: ".(int)$tongTienA; 
	// bài 3
		echo "<br>";
		echo "<br>";
		echo "Bạn B gửi ngân hàng 150 triệu đồng. Lãi suất 0.7%/tháng cứ 3 thángbạn B rút 3 triệu đồng, 3 tháng sau rút hơn 3 tháng trước 1 triệu đồng.Hỏi sau 3 năm, bạn B còn lại cả gốc lẫn lãi la bao nhiêu?";
		$tongTienB = 150000000;
		$laiSuat = 0.7/100;
		$tienRut = 3000000;
		for($i=1; $i <= 36; $i++){
			$tongTienB = $tongTienB + $tongTienB*$laiSuat;
			if($i % 3 == 0){
				$tongTienB = $tongTienB - ($tienRut + 1000000*($i/3 - 1));
			}
		}
		echo "<br>";
		echo "Tổng số tiền gốc và lãi  sau 3 năm là: ".(int)$tongTienB; 
?> 