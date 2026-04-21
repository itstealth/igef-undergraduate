<?php
//   echo "<pre>";print_r($_POST);
//   die;

$name   = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$mobile   = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);

if(!empty($name) && !empty($email) && !empty($mobile))
{
    $state   = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $city   = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $percentage = filter_var($_POST['percentage'], FILTER_SANITIZE_STRING);

    $query = "<b>Percentage </b>". $percentage ." <br/>";

    $referrer = $_POST['referrer_name'];
    $keyword = $_POST['keyword'];
    $source = $_POST['sourcemedium'];
    $medium = $_POST['medium'];
    $orderid = $_POST['orderid'];
    $sitename = $_POST['sitename']; 
    $campaign_url = $_POST['campaign_url'];
    $campaign_name = $_POST['campaign_name'];
    $network = $_POST['network'];


    $fields = array(
        'college_id' => '454',
        'name' => $name,
        'email' => $email,
        'country_dial_code' => '+91',
        'mobile' => $mobile,
        'source' => 'stealth',
        'medium' => $medium,
        'campaign' => $campaign_name,
        'state' => $state,
        'city' => $city,
        'secret_key' => 'ac62a7ba81228c331b92ba47406876de',
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.nopaperforms.com/dataporting/454/stealth',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $fields,
    CURLOPT_HTTPHEADER => array(
        'Cookie: AWSALB=8a9Fu6li1jEO7q7v83bIfRovXovGQOFv+dglegGE16EPycwiX/WjB4EqjCKzGQV8mlwipUXdDf+joBD7F5vfbNMiTnFi+WfiNG39/+1o7gHBT/5ORBS1sPXkPn0q; AWSALBCORS=8a9Fu6li1jEO7q7v83bIfRovXovGQOFv+dglegGE16EPycwiX/WjB4EqjCKzGQV8mlwipUXdDf+joBD7F5vfbNMiTnFi+WfiNG39/+1o7gHBT/5ORBS1sPXkPn0q'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    //echo $response;

    $response_data = json_decode($response);
    $successStatus = $response_data->status;
    $successMessage =  $response_data->message;

    if($successStatus == 'Success' || $successStatus == 'Duplicate'){
        header('Location:thankyou.html');
    } else {
        echo $successMessage;
    }


}