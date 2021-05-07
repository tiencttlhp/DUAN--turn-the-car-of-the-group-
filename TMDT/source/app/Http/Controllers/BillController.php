<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Bill;
use App\Product;
use App\Billitem;

class BillController extends Controller
{
    public function request(Request $req)
    {
    	Session::put('customername', $req->customername);
    	Session::put('customeremail', $req->customeremail);
    	Session::put('customeraddress', $req->customeraddress);
    	Session::put('customernumber', $req->customernumber);
    	$input = $req->all();
		
		/* -----------------------------------------------------------------------------

		 Version 2.0

		 @author OnePAY

		------------------------------------------------------------------------------*/

		// *********************
		// START OF MAIN PROGRAM
		// *********************

		// Define Constants
		// ----------------
		// This is secret for encoding the MD5 hash
		// This secret will vary from merchant to merchant
		// To not create a secure hash, let SECURE_SECRET be an empty string - ""
		// $SECURE_SECRET = "secure-hash-secret";
		// Khóa bí mật - được cấp bởi OnePAY
		$SECURE_SECRET = "A3EFDFABA8653DF2342E8DAC29B51AF0";

		// add the start of the vpcURL querystring parameters
		// *****************************Lấy giá trị url cổng thanh toán*****************************
		$vpcURL = $input["virtualPaymentClientURL"] . "?";

		// Remove the Virtual Payment Client URL from the parameter hash as we 
		// do not want to send these fields to the Virtual Payment Client.
		// bỏ giá trị url và nút submit ra khỏi mảng dữ liệu
		unset($input["virtualPaymentClientURL"]); 
		unset($input["SubButL"]);

		//$stringHashData = $SECURE_SECRET; *****************************Khởi tạo chuỗi dữ liệu mã hóa trống*****************************
		$stringHashData = "";
		// sắp xếp dữ liệu theo thứ tự a-z trước khi nối lại
		// arrange array data a-z before make a hash
		ksort ($input);

		// set a parameter to show the first pair in the URL
		// đặt tham số đếm = 0
		$appendAmp = 0;

		foreach($input as $key => $value) {

		    // create the md5 input and URL leaving out any fields that have no value
		    // tạo chuỗi đầu dữ liệu những tham số có dữ liệu
		    if (strlen($value) > 0) {
		        // this ensures the first paramter of the URL is preceded by the '?' char
		        if ($appendAmp == 0) {
		            $vpcURL .= urlencode($key) . '=' . urlencode($value);
		            $appendAmp = 1;
		        } else {
		            $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
		        }
		        //$stringHashData .= $value; *****************************sử dụng cả tên và giá trị tham số để mã hóa*****************************
		        if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
				    $stringHashData .= $key . "=" . $value . "&";
				}
		    }
		}
		//*****************************xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa*****************************
		$stringHashData = rtrim($stringHashData, "&");
		// Create the secure hash and append it to the Virtual Payment Client Data if
		// the merchant secret has been provided.
		// thêm giá trị chuỗi mã hóa dữ liệu được tạo ra ở trên vào cuối url
		if (strlen($SECURE_SECRET) > 0) {
		    //$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($stringHashData));
		    // *****************************Thay hàm mã hóa dữ liệu*****************************
		    $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $stringHashData, pack('H*',$SECURE_SECRET)));
		}

		// FINISH TRANSACTION - Redirect the customers using the Digital Order
		// ===================================================================
		// chuyển trình duyệt sang cổng thanh toán theo URL được tạo ra
		return redirect()->away($vpcURL);

		// *******************
		// END OF MAIN PROGRAM
		// *******************
    }

    public function response(Request $req)
    {
    	$input=$req->all();
    	
    	/* -----------------------------------------------------------------------------

		 Version 2.0

		--------------------------------------------------------------------------------

		 @author OnePAy JSC

		------------------------------------------------------------------------------*/

		// *********************
		// START OF MAIN PROGRAM
		// *********************


		// Define Constants
		// ----------------
		// This is secret for encoding the MD5 hash
		// This secret will vary from merchant to merchant
		// To not create a secure hash, let SECURE_SECRET be an empty string - ""
		// $SECURE_SECRET = "secure-hash-secret";
		$SECURE_SECRET = "A3EFDFABA8653DF2342E8DAC29B51AF0";

		// If there has been a merchant secret set then sort and loop through all the
		// data in the Virtual Payment Client response. While we have the data, we can
		// append all the fields that contain values (except the secure hash) so that
		// we can create a hash and validate it against the secure hash in the Virtual
		// Payment Client response.


		// NOTE: If the vpc_TxnResponseCode in not a single character then
		// there was a Virtual Payment Client error and we cannot accurately validate
		// the incoming data from the secure hash. */

		// get and remove the vpc_TxnResponseCode code from the response fields as we
		// do not want to include this field in the hash calculation
		$vpc_Txn_Secure_Hash = $input ["vpc_SecureHash"];
		unset ( $input ["vpc_SecureHash"] );

		// set a flag to indicate if hash has been validated
		$errorExists = false;

		ksort ($input);

		if (strlen ( $SECURE_SECRET ) > 0 && $input ["vpc_TxnResponseCode"] != "7" && $input ["vpc_TxnResponseCode"] != "No Value Returned") {
			
		    //$stringHashData = $SECURE_SECRET;
		    //*****************************khởi tạo chuỗi mã hóa rỗng*****************************
		    $stringHashData = "";
			
			// sort all the incoming vpc response fields and leave out any with no value
			foreach ( $input as $key => $value ) {
		//        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
		//            $stringHashData .= $value;
		//        }
		//      *****************************chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về*****************************
		        if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
				    $stringHashData .= $key . "=" . $value . "&";
				}
			}
		//  *****************************Xóa dấu & thừa cuối chuỗi dữ liệu*****************************
		    $stringHashData = rtrim($stringHashData, "&");	
			
			
		//    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $stringHashData ) )) {
		//    *****************************Thay hàm tạo chuỗi mã hóa*****************************
			if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $stringHashData, pack('H*',$SECURE_SECRET)))) {
				// Secure Hash validation succeeded, add a data field to be displayed
				// later.
				$hashValidated = "CORRECT";
			} else {
				// Secure Hash validation failed, add a data field to be displayed
				// later.
				$hashValidated = "INVALID HASH";
			}
		} else {
			// Secure Hash was not validated, add a data field to be displayed later.
			$hashValidated = "INVALID HASH";
		}

		// Define Variables
		// ----------------
		// Extract the available receipt fields from the VPC Response
		// If not present then let the value be equal to 'No Value Returned'
		// Standard Receipt Data
		$amount = $this->null2unknown ( $input ["vpc_Amount"] );
		$locale = $this->null2unknown ( $input ["vpc_Locale"] );
		//$batchNo = null2unknown ( $_GET ["vpc_BatchNo"] );
		$command = $this->null2unknown ( $input ["vpc_Command"] );
		//$message = null2unknown ( $_GET ["vpc_Message"] );
		$version = $this->null2unknown ( $input ["vpc_Version"] );
		//$cardType = null2unknown ( $_GET ["vpc_Card"] );
		$orderInfo = $this->null2unknown ( $input ["vpc_OrderInfo"] );
		//$receiptNo = null2unknown ( $_GET ["vpc_ReceiptNo"] );
		$merchantID = $this->null2unknown ( $input ["vpc_Merchant"] );
		//$authorizeID = null2unknown ( $_GET ["vpc_AuthorizeId"] );
		$merchTxnRef = $this->null2unknown ( $input ["vpc_MerchTxnRef"] );
		$transactionNo = $this->null2unknown ( $input ["vpc_TransactionNo"] );
		//$acqResponseCode = null2unknown ( $_GET ["vpc_AcqResponseCode"] );
		$txnResponseCode = $this->null2unknown ( $input ["vpc_TxnResponseCode"] );

		$transStatus = "";
		if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
			$transStatus = "Giao dịch thành công";

			$customername=Session::get('customername');
			$customernumber=Session::get('customernumber');
			$customeraddress=Session::get('customeraddress');
			$customeremail=Session::get('customeremail');

			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$date=date('Y-m-d H:i:s',time());

			$bill=new Bill;
			$bill->add($date,$customername,$customeremail,$customeraddress,$customernumber);

			$cart=Session::get('cart');
			$items=$cart->items;

			foreach ($items as $value) {
				$billitem=new Billitem;
				$billitem->add($value['item']->isProduct->id,$bill->id,$value['qty']);
			}

			return view('guest.pages.cart.checkout-notice',['transStatus'=>'Thành Công','isComplete'=>true,'notice'=>$this->getResponseDescription($txnResponseCode),'bill'=>$bill]);

		}elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
			$transStatus = "Giao dịch Pendding";
			echo $transStatus;
		}else {
			$transStatus = "Giao dịch thất bại";
			echo $transStatus;
		}
				
    }

    public function clearSession()
    {
    	if(Session::has('cart')){
    		Session::forget('cart');
    	}
    	if(Session::has('customername')){
    		Session::forget('customername');
    	}
    	if(Session::has('customernumber')){
    		Session::forget('customernumber');
    	}
    	if(Session::has('customeraddress')){
    		Session::forget('customeraddress');
    	}
    	if(Session::has('customeremail')){
    		Session::forget('customeremail');
    	}
    }

    // This is the display title for 'Receipt' page 
	//$title = $_GET ["Title"];


	// This method uses the QSI Response code retrieved from the Digital
	// Receipt and returns an appropriate description for the QSI Response Code
	//
	// @param $responseCode String containing the QSI Response Code
	//
	// @return String containing the appropriate description
	//
	function getResponseDescription($responseCode) {
	
		switch ($responseCode) {
			case "0" :
				$result = "Giao dịch thành công - Approved";
				break;
			case "1" :
				$result = "Ngân hàng từ chối giao dịch - Bank Declined";
				break;
			case "3" :
				$result = "Mã đơn vị không tồn tại - Merchant not exist";
				break;
			case "4" :
				$result = "Không đúng access code - Invalid access code";
				break;
			case "5" :
				$result = "Số tiền không hợp lệ - Invalid amount";
				break;
			case "6" :
				$result = "Mã tiền tệ không tồn tại - Invalid currency code";
				break;
			case "7" :
				$result = "Lỗi không xác định - Unspecified Failure ";
				break;
			case "8" :
				$result = "Số thẻ không đúng - Invalid card Number";
				break;
			case "9" :
				$result = "Tên chủ thẻ không đúng - Invalid card name";
				break;
			case "10" :
				$result = "Thẻ hết hạn/Thẻ bị khóa - Expired Card";
				break;
			case "11" :
				$result = "Thẻ chưa đăng ký sử dụng dịch vụ - Card Not Registed Service(internet banking)";
				break;
			case "12" :
				$result = "Ngày phát hành/Hết hạn không đúng - Invalid card date";
				break;
			case "13" :
				$result = "Vượt quá hạn mức thanh toán - Exist Amount";
				break;
			case "21" :
				$result = "Số tiền không đủ để thanh toán - Insufficient fund";
				break;
			case "99" :
				$result = "Người sủ dụng hủy giao dịch - User cancel";
				break;
			default :
				$result = "Giao dịch thất bại - Failured";
		}
		return $result;
	}

	//  -----------------------------------------------------------------------------
	// If input is null, returns string "No Value Returned", else returns input
	function null2unknown($data) {
		if ($data == "") {
			return "No Value Returned";
		} else {
			return $data;
		}
	}
	//  ----------------------------------------------------------------------------

	public function getNotice()
	{
		return view('guest.pages.cart.checkout-notice');
	}

	public function getListBill()
	{
		$bills=Bill::all();
		return view('employee.pages.bill.bills',['bills'=>$bills]);
	}

	public function getDeleteBill($id)
	{
		$bill=Bill::find($id);
		$billitems=$bill->getBillItem;
		foreach ($billitems as  $billitem) {
			$billitem->delete();
		}
		$bill->delete();
		return redirect()->back();
	}

	public function getBill($id)
	{
		$bill=Bill::find($id);
		$billitems=$bill->getBillItem;
		return view('employee.pages.bill.bill',['bill'=>$bill,'billitems'=>$billitems]);
	}
}
