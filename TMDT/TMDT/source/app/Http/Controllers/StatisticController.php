<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function getSaleStatistic()
    {
    	return view('admin.pages.sale_statistic');
    }

    public function getTest()
    {
       $totals=DB::select('SELECT SUM(product.price*billitem.quantity) AS doanhso FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND bill.datetime>="2018-11-10" AND bill.datetime<="2018-11-20"');
       var_dump($totals[0]);
    }

    public function getIncomeStatistic()
    {
        return view('admin.pages.income_statistic');
    }

    public function getProfitStatistic()
    {
        return view('admin.pages.profit_statistic');
    }

    public function postSaleStatistic(Request $req)
    {
    	$timestart=date('Y-m-d',strtotime($req->timestart));
    	$timeend=date('Y-m-d',strtotime($req->timeend));
        $s=DB::select('SELECT DATE_FORMAT(bill.datetime, "%d/%m/%Y") AS ngay,SUM(product.price*billitem.quantity) AS doanhso FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"
            GROUP BY DATE_FORMAT(bill.datetime, "%d/%m/%Y")');
        $totals=DB::select('SELECT SUM(product.price*billitem.quantity) AS doanhso FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"');
    	$str='';
    	
        $total=0;
        if($totals[0]->doanhso!=null){
            $total=$totals[0]->doanhso;
        }
        if(count($s)>0){
            $i=1;
            foreach ($s as $value) {
                $str.='<tr>';
                $str.='             <td>'.$i.'</td>';
                $str.='             <td>'.$value->ngay.'</td>';
                $str.='             <td>'.$value->doanhso.'VND</td>';
                $str.='         </tr>';
                $i++;
            }
        }
		$data=array('str'=>$str,'total'=>$total);
    	return $data;
    }

    public function postIncomeStatistic(Request $req)
    {
    	$timestart=date('Y-m-d',strtotime($req->timestart));
        $timeend=date('Y-m-d',strtotime($req->timeend));
        $s=DB::select('SELECT DATE_FORMAT(bill.datetime, "%d/%m/%Y") AS ngay,SUM(billitem.quantity*((100-product.discountPercent)/100)*product.price) AS doanhthu FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"
            GROUP BY DATE_FORMAT(bill.datetime, "%d/%m/%Y")');
        $totals=DB::select('SELECT SUM(billitem.quantity*((100-product.discountPercent)/100)*product.price) AS doanhthu FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"');
        $str='';
        
        $total=0;
        if($totals[0]->doanhthu!=null){
            $total=$totals[0]->doanhthu;
        }
        if(count($s)>0){
            $i=1;
            foreach ($s as $value) {
                $str.='<tr>';
                $str.='             <td>'.$i.'</td>';
                $str.='             <td>'.$value->ngay.'</td>';
                $str.='             <td>'.$value->doanhthu.'VND</td>';
                $str.='         </tr>';
                $i++;
            }
        }
        $data=array('str'=>$str,'total'=>$total);
        return $data;
    }

    public function postProfitStatistic(Request $req)
    {
    	$timestart=date('Y-m-d',strtotime($req->timestart));
        $timeend=date('Y-m-d',strtotime($req->timeend));
        $s=DB::select('SELECT DATE_FORMAT(bill.datetime, "%d/%m/%Y") AS ngay,SUM((product.price-product.purchase)*billitem.quantity) AS loinhuan FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"
            GROUP BY DATE_FORMAT(bill.datetime, "%d/%m/%Y")');
        $totals=DB::select('SELECT SUM((product.price-product.purchase)*billitem.quantity) AS loinhuan FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATE(bill.datetime)>="'.$timestart.'" AND DATE(bill.datetime)<="'.$timeend.'"');
        $str='';
        
        $total=0;
        if($totals[0]->loinhuan!=null){
            $total=$totals[0]->loinhuan;
        }
        if(count($s)>0){
            $i=1;
            foreach ($s as $value) {
                $str.='<tr>';
                $str.='             <td>'.$i.'</td>';
                $str.='             <td>'.$value->ngay.'</td>';
                $str.='             <td>'.$value->loinhuan.'VND</td>';
                $str.='         </tr>';
                $i++;
            }
        }
        $data=array('str'=>$str,'total'=>$total);
        return $data;
    }

    public function getTotalNow()
    {
        $s1=DB::select('SELECT SUM((product.price-product.purchase)*billitem.quantity) AS loinhuan FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(bill.datetime,NOW())=0');
        $s2=DB::select('SELECT SUM(product.price*billitem.quantity) AS doanhso FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(bill.datetime,NOW())=0');
        $s3=DB::select('SELECT SUM(((100-product.discountPercent)/100)*product.price) AS doanhthu FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(bill.datetime,NOW())=0');
        $doanhso=0;
        $doanhthu=0;
        $loinhuan=0;
        if($s1[0]->loinhuan!=null){
            $loinhuan=$s1[0]->loinhuan;
        }
        if($s2[0]->doanhso!=null){
            $doanhso=$s2[0]->doanhso;
        }
        if($s3[0]->doanhthu!=null){
            $doanhthu=$s3[0]->doanhthu;
        }

        // Hôm nay
            $doanhso_homnay=DB::select('SELECT SUM(billitem.quantity*product.price) as doanhso
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=0');
            $t_doanhso_homnay=0;
            if($doanhso_homnay[0]->doanhso!=null){
                $t_doanhso_homnay=$doanhso_homnay[0]->doanhso;
            }

            $doanhthu_homnay=DB::select('SELECT SUM(billitem.quantity*((100-product.discountPercent)/100)*product.price)
            as doanhthu
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=0');
            $t_doanhthu_homnay=0;
            if($doanhthu_homnay[0]->doanhthu!=null){
                $t_doanhthu_homnay=$doanhthu_homnay[0]->doanhthu;
            }

            $loinhuan_homnay=DB::select('SELECT SUM(billitem.quantity*(product.price - product.purchase))
            as loinhuan
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=0');
            $t_loinhuan_homnay=0;
            if ($loinhuan_homnay[0]->loinhuan!=null) {
                $t_loinhuan_homnay=$loinhuan_homnay[0]->loinhuan;
            }

        // Hôm qua
            $doanhso_homqua=DB::select('SELECT SUM(billitem.quantity*product.price)
            as doanhso
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=1');
            $t_doanhso_homqua=0;
            if ($doanhso_homqua[0]->doanhso!=null) {
                $t_doanhso_homqua=$doanhso_homqua[0]->doanhso;
            }

            $doanhthu_homqua=DB::select('SELECT SUM(billitem.quantity*((100-product.discountPercent)/100)*product.price)
            as doanhthu
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=1');
            $t_doanhthu_homqua=0;
            if ($doanhthu_homqua[0]->doanhthu!=null) {
                $t_doanhthu_homqua=$doanhthu_homqua[0]->doanhthu;
            }

            $loinhuan_homqua=DB::select('SELECT SUM(billitem.quantity*(product.price - product.purchase))
            as loinhuan
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=1');
            $t_loinhuan_homqua=0;
            if ($loinhuan_homqua[0]->loinhuan!=null) {
                $t_loinhuan_homqua=$loinhuan_homqua[0]->loinhuan;
            }

        // Hôm kia
            $doanhso_homkia=DB::select('SELECT SUM(billitem.quantity*product.price)
            as doanhso
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=2');
            $t_doanhso_homkia=0;
            if ($doanhso_homkia[0]->doanhso!=null) {
                $t_doanhso_homkia=$doanhso_homkia[0]->doanhso;
            }

            $doanhthu_homkia=DB::select('SELECT SUM(billitem.quantity*((100-product.discountPercent)/100)*product.price)
            as doanhthu
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=2');
            $t_doanhthu_homkia=0;
            if ($doanhthu_homkia[0]->doanhthu!=null) {
                $t_doanhthu_homkia=$doanhthu_homkia[0]->doanhthu;
            }

            $loinhuan_homkia=DB::select('SELECT SUM(billitem.quantity*(product.price - product.purchase))
            as loinhuan
            FROM bill,billitem,product
            WHERE bill.id=billitem.billid
            AND billitem.productid=product.id
            AND DATEDIFF(NOW(),bill.datetime)=2');
            $t_loinhuan_homkia=0;
            if ($loinhuan_homkia[0]->loinhuan!=null) {
                $t_loinhuan_homkia=$loinhuan_homkia[0]->loinhuan;
            }

        // So sánh nay - qua
            $ss_doanhso_nay_qua=0;
            if ($t_doanhso_homqua==0 && $t_doanhso_homnay==0) {
                $ss_doanhso_nay_qua=100;
            }elseif($t_doanhso_homqua==0 || $t_doanhso_homnay==0){
                if($t_doanhso_homnay==0){
                    $ss_doanhso_nay_qua=0;
                }else{
                    $ss_doanhso_nay_qua=200;
                }
            }else{
                $ss_doanhso_nay_qua=($t_doanhso_homnay/$t_doanhso_homqua)*100;
            }

            $ss_doanhthu_nay_qua=0;
            if ($t_doanhthu_homqua==0 && $t_doanhthu_homnay==0) {
               $ss_doanhthu_nay_qua=100;
            }elseif($t_doanhthu_homqua==0 || $t_doanhthu_homnay==0){
                if($t_doanhthu_homnay==0){
                    $ss_doanhthu_nay_qua=0;
                }else{
                    $ss_doanhthu_nay_qua=200;
                }
            }else{
                $ss_doanhthu_nay_qua=($t_doanhthu_homnay/$t_doanhthu_homqua)*100;
            }

            $ss_loinhuan_nay_qua=0;
            if ($t_loinhuan_homqua==0 && $t_loinhuan_homnay==0) {
                $ss_loinhuan_nay_qua=100;
            }elseif($t_loinhuan_homqua==0 || $t_loinhuan_homnay==0){
                if($t_loinhuan_homnay==0){
                    $ss_loinhuan_nay_qua=0;
                }else{
                    $ss_loinhuan_nay_qua=200;
                }
            }else{
                $ss_loinhuan_nay_qua=($t_loinhuan_homnay/$t_loinhuan_homqua)*100;
            }

        // So sánh qua - kia
            $ss_doanhso_qua_kia=0;
            if ($t_doanhso_homqua==0 && $t_doanhso_homkia==0) {
                $ss_doanhso_qua_kia=100;
            }elseif($t_doanhso_homqua==0 || $t_doanhso_homkia==0){
                if($t_doanhso_homkia==0){
                    $ss_doanhso_qua_kia=200;
                }else{
                    $ss_doanhso_qua_kia=0;
                }
            }else{
                $ss_doanhso_qua_kia=($t_doanhso_homqua/$t_doanhso_homkia)*100;
            }

            $ss_doanhthu_qua_kia=0;
            if ($t_doanhthu_homqua==0 && $t_doanhthu_homkia==0) {
                $ss_doanhthu_qua_kia=100;
            }
            elseif($t_doanhthu_homqua==0 || $t_doanhthu_homkia==0){
                if($t_doanhthu_homkia==0){
                    $ss_doanhthu_qua_kia=200;
                }else{
                    $ss_doanhthu_qua_kia=0;
                }
            }else{
                $ss_doanhthu_qua_kia=($t_doanhthu_homqua/$t_doanhthu_homkia)*100;
            }

            $ss_loinhuan_qua_kia=0;
            if ($t_loinhuan_homqua==0 && $t_loinhuan_homkia==0) {
                $ss_loinhuan_qua_kia=100;
            }elseif($t_loinhuan_homqua==0 || $t_loinhuan_homkia==0){
                if($t_loinhuan_homkia==0){
                    $ss_loinhuan_qua_kia=200;
                }else{
                    $ss_loinhuan_qua_kia=0;
                }
            }else{
                $ss_loinhuan_qua_kia=($t_loinhuan_homqua/$t_loinhuan_homkia)*100;
            }

        $kq=array($doanhso,$doanhthu,$loinhuan,$ss_doanhso_nay_qua,$ss_doanhthu_nay_qua,$ss_loinhuan_nay_qua,$ss_doanhso_qua_kia,$ss_doanhthu_qua_kia,$ss_loinhuan_qua_kia);
        return $kq;
    }

    public function getDoanhSoTuan()
    {
        $t=DB::select('SELECT WEEKDAY(DATE(bill.datetime)) AS day_of_week,DAYNAME(bill.datetime) As Name,
        (
            SUM(billitem.quantity*product.price)*100/
            (
                SELECT SUM(billitem.quantity*product.price) FROM bill,billitem,product
                WHERE bill.id=billitem.billid
                AND billitem.productid=product.id
                AND DATE(bill.datetime)
                IN 
                (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
                )
            )
        ) AS percent
        FROM bill,billitem,product
        WHERE bill.id=billitem.billid
        AND billitem.productid=product.id
        AND DATE(bill.datetime) IN
        (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
        )
        GROUP BY  WEEKDAY(DATE(bill.datetime))');
        $arr=array(0,0,0,0,0,0,0);
        foreach ($t as $value) {
            if (array_key_exists($value->day_of_week,$arr)) {
                $arr[$value->day_of_week]=round($value->percent,2);
            }
        }
        return $arr;
    }

    public function getDoanhThuTuan()
    {
        $t=DB::select('SELECT WEEKDAY(DATE(bill.datetime)) AS day_of_week,DAYNAME(bill.datetime) As Name,
        (
            SUM(billitem.quantity*((100-product.discountPercent)*100)*product.price)*100/
            (
                SELECT SUM(billitem.quantity*((100-product.discountPercent)*100)*product.price) FROM bill,billitem,product
                WHERE bill.id=billitem.billid
                AND billitem.productid=product.id
                AND DATE(bill.datetime)
                IN 
                (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
                )
            )
        ) AS percent
        FROM bill,billitem,product
        WHERE bill.id=billitem.billid
        AND billitem.productid=product.id
        AND DATE(bill.datetime) IN
        (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
        )
        GROUP BY  WEEKDAY(DATE(bill.datetime))');
        $arr=array(0,0,0,0,0,0,0);
        foreach ($t as $value) {
            if (array_key_exists($value->day_of_week,$arr)) {
                $arr[$value->day_of_week]=round($value->percent,2);
            }
        }
        return $arr;
    }

    public function getLoiNhuanTuan()
    {
        $t=DB::select('SELECT WEEKDAY(DATE(bill.datetime)) AS day_of_week,DAYNAME(bill.datetime) As Name,
        (
            SUM(billitem.quantity*(product.price-product.purchase))*100/
            (
                SELECT SUM(billitem.quantity*(product.price-product.purchase)) FROM bill,billitem,product
                WHERE bill.id=billitem.billid
                AND billitem.productid=product.id
                AND DATE(bill.datetime)
                IN 
                (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
                )
            )
        ) AS percent
        FROM bill,billitem,product
        WHERE bill.id=billitem.billid
        AND billitem.productid=product.id
        AND DATE(bill.datetime) IN
        (
                    SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AS day
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 1 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 2 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 3 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 4 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 5 DAY
                    UNION SELECT DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) + INTERVAL 6 DAY
        )
        GROUP BY  WEEKDAY(DATE(bill.datetime))');
        $arr=array(0,0,0,0,0,0,0);
        foreach ($t as $value) {
            if (array_key_exists($value->day_of_week,$arr)) {
                $arr[$value->day_of_week]=round($value->percent,2);
            }
        }
        return $arr;
    }
}
