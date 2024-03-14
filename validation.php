<?php


        $err_msg    =   false;
		$name       =   $_POST['name'];
        $TempChitNo = $_POST['TempChitNo'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $mobile2 = $_POST['mobile2'];
        $presentAdd = $_POST['presentAdd'];
        $residence = $_POST['residence'];
        $pincode = $_POST['pincode'];
        $employment = $_POST['employment'];
        $options = array("Service", "Business", "Profession");
        $bName = $_POST['bName'];
        $designation = $_POST['designation'];
		$yearofService = $_POST['yearofService'];
        $yearoption = array("2 Years", "3 Years", "4 Years", "5 Years or more");
        $bAddress = $_POST['bAddress'];
        $monthlySalary = $_POST['monthlySalary'];
        $monthlyOtherIncome = $_POST['monthlyOtherIncome'];
        $totalIncome = $_POST['totalIncome'];
        $monthlyEMI = $_POST['monthlyEMI'];
        $surplusIncome = $_POST['surplusIncome'];
        $amountLooking = $_POST['amountLooking'];
        $chitNo        = $_POST['chitNo'];
        $refNo        = $_POST['refNo'];

		if( !preg_match ("/^[a-z. ]*$/", $name) ) 
		{
			$err_msg    =   'Invalid Name, Please enter a valid name';
		}
        if (!preg_match("/^[0-9a-zA-Z\/]{3,15}+$/", $TempChitNo)) {
            $err_msg    =   'Please enter a valid chit number';
        }
        if (!preg_match("/^[0-9]{10}+$/", $mobile)) {
            $err_msg    =   'Invalid Phone Number, Please enter a valid 10 Digit Phone Number';
        }
        if (!preg_match("/(0[1-9]|1[0-9]|2[0-9]|3(0|1))\/(0[1-9]|1[0-2])\/\d{4}/", $dob)) {
            $err_msg = 'Invalid Date of Birth';
        }
        $email_pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match($email_pattern, $email)) {
            $err_msg    =   'Invalid Email, Please enter a valid Email id';
        }
        if (!preg_match("/^[0-9]{10}+$/", $mobile2)) {
            $err_msg    =   'Invalid Phone Number, Please enter a valid 10 Digit Phone Number';
        }
        if (!preg_match("/^[a-zA-Z0-9,.&()-:\n\r ]+$/", $presentAdd)) {
            $err_msg    =   'Special characters not allowed';
        }
        if (!preg_match("/^[a-zA-Z0-9,.&()-:\n\r ]+$/", $residence)) {
            $err_msg    =   'Special characters not allowed';
        }
        if (!preg_match("/^[0-9]{6}+$/", $pincode)) {
            $err_msg    =   'Enter valid pincode';
        }
        if (!in_array($employment, $options)) {
            $err_msg = 'Please enter correct option';
        }
        if (!preg_match("/^[a-zA-Z0-9,.&()-:\n\r ]+$/", $bName)) {
            $err_msg    =   'Special characters not allowed';
        }
        if (!preg_match("/^[a-zA-Z0-9,.&()-:\n\r ]+$/", $designation)) {
            $err_msg    =   'Special characters not allowed';
        }
        if (!in_array($yearofService, $yearoption)) {
            $err_msg = 'Please enter correct option';
        }
        if (!preg_match("/^[a-zA-Z0-9,.&()-:\n\r ]+$/", $bAddress)) {
            $err_msg    =   'Special characters not allowed';
        }
        if (!preg_match("/^[0-9\,]{3,10}+$/", $monthlySalary)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9\,]{3,10}+$/", $monthlyOtherIncome)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9\,]{3,10}+$/", $totalIncome)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9\,]{2,10}+$/", $monthlyEMI)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9\,]{3,10}+$/", $surplusIncome)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9\,]{3,10}+$/", $amountLooking)) {
            $err_msg    =   'Please enter a valid number';
        }
        if (!preg_match("/^[0-9a-zA-Z\/]{3,15}+$/", $chitNo)) {
            $err_msg    =   'Please enter a valid chit number';
        }
        if (!preg_match("/^[0-9\,]+$/", $refNo)) {
            $err_msg    =   'Please enter a valid reference number';
        }


		 if(!empty($err_msg)){
            echo $err_msg;
         }else{
            echo "Success";
         }

?>