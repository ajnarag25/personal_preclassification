<?php
include 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

$id = $_SESSION['user']['user_id'];

$query2_b = "SELECT * FROM form2_b WHERE user_id = $id";
$result2_b = $conn->query($query2_b);



while ($row = mysqli_fetch_array($result2_b)) {
    $init_ipsole_name_1 = $row['ipsole_name_1'];
    $init_ipsole_name_2 = $row['ipsole_name_2'];
    $init_ipsole_name_3 = $row['ipsole_name_3'];
    $init_ipsole_name_4 = $row['ipsole_name_4'];
    $init_ipsole_appdate_1 = $row['ipsole_appdate_1'];
    $init_ipsole_appdate_2 = $row['ipsole_appdate_2'];
    $init_ipsole_appdate_3 = $row['ipsole_appdate_3'];
    $init_ipsole_appdate_4 = $row['ipsole_appdate_4'];
    $init_ipsole_patapp_1 = $row['ipsole_patapp_1'];
    $init_ipsole_patapp_2 = $row['ipsole_patapp_2'];
    $init_ipsole_patapp_3 = $row['ipsole_patapp_3'];
    $init_ipsole_patapp_4 = $row['ipsole_patapp_4'];
    $init_ipsole_acceptdate_1 = $row['ipsole_acceptdate_1'];
    $init_ipsole_acceptdate_2 = $row['ipsole_acceptdate_2'];
    $init_ipsole_acceptdate_3 = $row['ipsole_acceptdate_3'];
    $init_ipsole_acceptdate_4 = $row['ipsole_acceptdate_4'];
    $init_ipmul_name_1 = $row['ipmul_name_1'];
    $init_ipmul_name_2 = $row['ipmul_name_2'];
    $init_ipmul_name_3 = $row['ipmul_name_3'];
    $init_ipmul_name_4 = $row['ipmul_name_4'];
    $init_ipmul_appdate_1 = $row['ipmul_appdate_1'];
    $init_ipmul_appdate_2 = $row['ipmul_appdate_2'];
    $init_ipmul_appdate_3 = $row['ipmul_appdate_3'];
    $init_ipmul_appdate_4 = $row['ipmul_appdate_4'];
    $init_ipmul_patapp_1 = $row['ipmul_patapp_1'];
    $init_ipmul_patapp_2 = $row['ipmul_patapp_2'];
    $init_ipmul_patapp_3 = $row['ipmul_patapp_3'];
    $init_ipmul_patapp_4 = $row['ipmul_patapp_4'];
    $init_ipmul_acceptdate_1 = $row['ipmul_acceptdate_1'];
    $init_ipmul_acceptdate_2 = $row['ipmul_acceptdate_2'];
    $init_ipmul_acceptdate_3 = $row['ipmul_acceptdate_3'];
    $init_ipmul_acceptdate_4 = $row['ipmul_acceptdate_4'];
    $init_ipmul_contrib_1 = $row['ipmul_contrib_1'];
    $init_ipmul_contrib_2 = $row['ipmul_contrib_2'];
    $init_ipmul_contrib_3 = $row['ipmul_contrib_3'];
    $init_ipmul_contrib_4 = $row['ipmul_contrib_4'];
    $init_umidsole_name_1 = $row['umidsole_name_1'];
    $init_umidsole_name_2 = $row['umidsole_name_2'];
    $init_umidsole_name_3 = $row['umidsole_name_3'];
    $init_umidsole_name_4 = $row['umidsole_name_4'];
    $init_umidsole_appdate_1 = $row['umidsole_appdate_1'];
    $init_umidsole_appdate_2 = $row['umidsole_appdate_2'];
    $init_umidsole_appdate_3 = $row['umidsole_appdate_3'];
    $init_umidsole_appdate_4 = $row['umidsole_appdate_4'];
    $init_umidsole_patapp_1 = $row['umidsole_patapp_1'];
    $init_umidsole_patapp_2 = $row['umidsole_patapp_2'];
    $init_umidsole_patapp_3 = $row['umidsole_patapp_3'];
    $init_umidsole_patapp_4 = $row['umidsole_patapp_4'];
    $init_umidsole_acceptdate_1 = $row['umidsole_acceptdate_1'];
    $init_umidsole_acceptdate_2 = $row['umidsole_acceptdate_2'];
    $init_umidsole_acceptdate_3 = $row['umidsole_acceptdate_3'];
    $init_umidsole_acceptdate_4 = $row['umidsole_acceptdate_4'];
    $init_umidmul_name_1 = $row['umidmul_name_1'];
    $init_umidmul_name_2 = $row['umidmul_name_2'];
    $init_umidmul_name_3 = $row['umidmul_name_3'];
    $init_umidmul_name_4 = $row['umidmul_name_4'];
    $init_umidmul_appdate_1 = $row['umidmul_appdate_1'];
    $init_umidmul_appdate_2 = $row['umidmul_appdate_2'];
    $init_umidmul_appdate_3 = $row['umidmul_appdate_3'];
    $init_umidmul_appdate_4 = $row['umidmul_appdate_4'];
    $init_umidmul_patapp_1 = $row['umidmul_patapp_1'];
    $init_umidmul_patapp_2 = $row['umidmul_patapp_2'];
    $init_umidmul_patapp_3 = $row['umidmul_patapp_3'];
    $init_umidmul_patapp_4 = $row['umidmul_patapp_4'];
    $init_umidmul_acceptdate_1 = $row['umidmul_acceptdate_1'];
    $init_umidmul_acceptdate_2 = $row['umidmul_acceptdate_2'];
    $init_umidmul_acceptdate_3 = $row['umidmul_acceptdate_3'];
    $init_umidmul_acceptdate_4 = $row['umidmul_acceptdate_4'];
    $init_umidmul_contrib_1 = $row['umidmul_contrib_1'];
    $init_umidmul_contrib_2 = $row['umidmul_contrib_2'];
    $init_umidmul_contrib_3 = $row['umidmul_contrib_3'];
    $init_umidmul_contrib_4 = $row['umidmul_contrib_4'];
    $init_cpplocal_name_1 = $row['cpplocal_name_1'];
    $init_cpplocal_name_2 = $row['cpplocal_name_2'];
    $init_cpplocal_name_3 = $row['cpplocal_name_3'];
    $init_cpplocal_name_4 = $row['cpplocal_name_4'];
    $init_cpplocal_type_1 = $row['cpplocal_type_1'];
    $init_cpplocal_type_2 = $row['cpplocal_type_2'];
    $init_cpplocal_type_3 = $row['cpplocal_type_3'];
    $init_cpplocal_type_4 = $row['cpplocal_type_4'];
    $init_cpplocal_patentdate_1 = $row['cpplocal_patentdate_1'];
    $init_cpplocal_patentdate_2 = $row['cpplocal_patentdate_2'];
    $init_cpplocal_patentdate_3 = $row['cpplocal_patentdate_3'];
    $init_cpplocal_patentdate_4 = $row['cpplocal_patentdate_4'];
    $init_cpplocal_proddate_1 = $row['cpplocal_proddate_1'];
    $init_cpplocal_proddate_2 = $row['cpplocal_proddate_2'];
    $init_cpplocal_proddate_3 = $row['cpplocal_proddate_3'];
    $init_cpplocal_proddate_4 = $row['cpplocal_proddate_4'];
    $init_cpplocal_area_1 = $row['cpplocal_area_1'];
    $init_cpplocal_area_2 = $row['cpplocal_area_2'];
    $init_cpplocal_area_3 = $row['cpplocal_area_3'];
    $init_cpplocal_area_4 = $row['cpplocal_area_4'];
    $init_cppinter_name_1 = $row['cppinter_name_1'];
    $init_cppinter_name_2 = $row['cppinter_name_2'];
    $init_cppinter_name_3 = $row['cppinter_name_3'];
    $init_cppinter_name_4 = $row['cppinter_name_4'];
    $init_cppinter_type_1 = $row['cppinter_type_1'];
    $init_cppinter_type_2 = $row['cppinter_type_2'];
    $init_cppinter_type_3 = $row['cppinter_type_3'];
    $init_cppinter_type_4 = $row['cppinter_type_4'];
    $init_cppinter_patentdate_1 = $row['cppinter_patentdate_1'];
    $init_cppinter_patentdate_2 = $row['cppinter_patentdate_2'];
    $init_cppinter_patentdate_3 = $row['cppinter_patentdate_3'];
    $init_cppinter_patentdate_4 = $row['cppinter_patentdate_4'];
    $init_cppinter_proddate_1 = $row['cppinter_proddate_1'];
    $init_cppinter_proddate_2 = $row['cppinter_proddate_2'];
    $init_cppinter_proddate_3 = $row['cppinter_proddate_3'];
    $init_cppinter_proddate_4 = $row['cppinter_proddate_4'];
    $init_cppinter_area_1 = $row['cppinter_area_1'];
    $init_cppinter_area_2 = $row['cppinter_area_2'];
    $init_cppinter_area_3 = $row['cppinter_area_3'];
    $init_cppinter_area_4 = $row['cppinter_area_4'];
    $init_nspsole_name_1 = $row['nspsole_name_1'];
    $init_nspsole_name_2 = $row['nspsole_name_2'];
    $init_nspsole_name_3 = $row['nspsole_name_3'];
    $init_nspsole_name_4 = $row['nspsole_name_4'];
    $init_nspsole_copydate_1 = $row['nspsole_copydate_1'];
    $init_nspsole_copydate_2 = $row['nspsole_copydate_2'];
    $init_nspsole_copydate_3 = $row['nspsole_copydate_3'];
    $init_nspsole_copydate_4 = $row['nspsole_copydate_4'];
    $init_nspsole_utildate_1 = $row['nspsole_utildate_1'];
    $init_nspsole_utildate_2 = $row['nspsole_utildate_2'];
    $init_nspsole_utildate_3 = $row['nspsole_utildate_3'];
    $init_nspsole_utildate_4 = $row['nspsole_utildate_4'];
    $init_nspsole_endusername_1 = $row['nspsole_endusername_1'];
    $init_nspsole_endusername_2 = $row['nspsole_endusername_2'];
    $init_nspsole_endusername_3 = $row['nspsole_endusername_3'];
    $init_nspsole_endusername_4 = $row['nspsole_endusername_4'];
    $init_nspmul_name_1 = $row['nspmul_name_1'];
    $init_nspmul_name_2 = $row['nspmul_name_2'];
    $init_nspmul_name_3 = $row['nspmul_name_3'];
    $init_nspmul_name_4 = $row['nspmul_name_4'];
    $init_nspmul_copydate_1 = $row['nspmul_copydate_1'];
    $init_nspmul_copydate_2 = $row['nspmul_copydate_2'];
    $init_nspmul_copydate_3 = $row['nspmul_copydate_3'];
    $init_nspmul_copydate_4 = $row['nspmul_copydate_4'];
    $init_nspmul_utildate_1 = $row['nspmul_utildate_1'];
    $init_nspmul_utildate_2 = $row['nspmul_utildate_2'];
    $init_nspmul_utildate_3 = $row['nspmul_utildate_3'];
    $init_nspmul_utildate_4 = $row['nspmul_utildate_4'];
    $init_nspmul_endusername_1 = $row['nspmul_endusername_1'];
    $init_nspmul_endusername_2 = $row['nspmul_endusername_2'];
    $init_nspmul_endusername_3 = $row['nspmul_endusername_3'];
    $init_nspmul_endusername_4 = $row['nspmul_endusername_4'];
    $init_nspmul_contrib_1 = $row['nspmul_contrib_1'];
    $init_nspmul_contrib_2 = $row['nspmul_contrib_2'];
    $init_nspmul_contrib_3 = $row['nspmul_contrib_3'];
    $init_nspmul_contrib_4 = $row['nspmul_contrib_4'];
    $init_uspsole_name_1 = $row['uspsole_name_1'];
    $init_uspsole_name_2 = $row['uspsole_name_2'];
    $init_uspsole_name_3 = $row['uspsole_name_3'];
    $init_uspsole_name_4 = $row['uspsole_name_4'];
    $init_uspsole_copydate_1 = $row['uspsole_copydate_1'];
    $init_uspsole_copydate_2 = $row['uspsole_copydate_2'];
    $init_uspsole_copydate_3 = $row['uspsole_copydate_3'];
    $init_uspsole_copydate_4 = $row['uspsole_copydate_4'];
    $init_uspsole_utildate_1 = $row['uspsole_utildate_1'];
    $init_uspsole_utildate_2 = $row['uspsole_utildate_2'];
    $init_uspsole_utildate_3 = $row['uspsole_utildate_3'];
    $init_uspsole_utildate_4 = $row['uspsole_utildate_4'];
    $init_uspsole_contrib_1 = $row['uspsole_contrib_1'];
    $init_uspsole_contrib_2 = $row['uspsole_contrib_2'];
    $init_uspsole_contrib_3 = $row['uspsole_contrib_3'];
    $init_uspsole_contrib_4 = $row['uspsole_contrib_4'];
    $init_uspsole_specfeat_1 = $row['uspsole_specfeat_1'];
    $init_uspsole_specfeat_2 = $row['uspsole_specfeat_2'];
    $init_uspsole_specfeat_3 = $row['uspsole_specfeat_3'];
    $init_uspsole_specfeat_4 = $row['uspsole_specfeat_4'];
    $init_uspsole_endusername_1 = $row['uspsole_endusername_1'];
    $init_uspsole_endusername_2 = $row['uspsole_endusername_2'];
    $init_uspsole_endusername_3 = $row['uspsole_endusername_3'];
    $init_uspsole_endusername_4 = $row['uspsole_endusername_4'];
    $init_npvsole_name_1 = $row['npvsole_name_1'];
    $init_npvsole_name_2 = $row['npvsole_name_2'];
    $init_npvsole_name_3 = $row['npvsole_name_3'];
    $init_npvsole_name_4 = $row['npvsole_name_4'];
    $init_npvsole_type_1 = $row['npvsole_type_1'];
    $init_npvsole_type_2 = $row['npvsole_type_2'];
    $init_npvsole_type_3 = $row['npvsole_type_3'];
    $init_npvsole_type_4 = $row['npvsole_type_4'];
    $init_npvsole_datecom_1 = $row['npvsole_datecom_1'];
    $init_npvsole_datecom_2 = $row['npvsole_datecom_2'];
    $init_npvsole_datecom_3 = $row['npvsole_datecom_3'];
    $init_npvsole_datecom_4 = $row['npvsole_datecom_4'];
    $init_npvsole_datereg_1 = $row['npvsole_datereg_1'];
    $init_npvsole_datereg_2 = $row['npvsole_datereg_2'];
    $init_npvsole_datereg_3 = $row['npvsole_datereg_3'];
    $init_npvsole_datereg_4 = $row['npvsole_datereg_4'];
    $init_npvsole_dateprop_1 = $row['npvsole_dateprop_1'];
    $init_npvsole_dateprop_2 = $row['npvsole_dateprop_2'];
    $init_npvsole_dateprop_3 = $row['npvsole_dateprop_3'];
    $init_npvsole_dateprop_4 = $row['npvsole_dateprop_4'];
    $init_npvmul_name_1 = $row['npvmul_name_1'];
    $init_npvmul_name_2 = $row['npvmul_name_2'];
    $init_npvmul_name_3 = $row['npvmul_name_3'];
    $init_npvmul_name_4 = $row['npvmul_name_4'];
    $init_npvmul_type_1 = $row['npvmul_type_1'];
    $init_npvmul_type_2 = $row['npvmul_type_2'];
    $init_npvmul_type_3 = $row['npvmul_type_3'];
    $init_npvmul_type_4 = $row['npvmul_type_4'];
    $init_npvmul_datecom_1 = $row['npvmul_datecom_1'];
    $init_npvmul_datecom_2 = $row['npvmul_datecom_2'];
    $init_npvmul_datecom_3 = $row['npvmul_datecom_3'];
    $init_npvmul_datecom_4 = $row['npvmul_datecom_4'];
    $init_npvmul_datereg_1 = $row['npvmul_datereg_1'];
    $init_npvmul_datereg_2 = $row['npvmul_datereg_2'];
    $init_npvmul_datereg_3 = $row['npvmul_datereg_3'];
    $init_npvmul_datereg_4 = $row['npvmul_datereg_4'];
    $init_npvmul_dateprop_1 = $row['npvmul_dateprop_1'];
    $init_npvmul_dateprop_2 = $row['npvmul_dateprop_2'];
    $init_npvmul_dateprop_3 = $row['npvmul_dateprop_3'];
    $init_npvmul_dateprop_4 = $row['npvmul_dateprop_4'];
    $init_npvmul_contrib_1 = $row['npvmul_contrib_1'];
    $init_npvmul_contrib_2 = $row['npvmul_contrib_2'];
    $init_npvmul_contrib_3 = $row['npvmul_contrib_3'];
    $init_npvmul_contrib_4 = $row['npvmul_contrib_4'];
}

if (isset($_POST['submit_btn'])) {
    $scoreIP_SI = $_POST['SI_FS'];
    $scoreIP_MI = $_POST['IP_MI'];
    $scoreUMID_SI = $_POST['UMID_SI'];
    $scoreUMID_MI = $_POST['UMID_MI'];
    $scoreCPP_L = $_POST['CPP_L'];
    $scoreCPP_I = $_POST['CPP_I'];
    $scoreNSP_SD = $_POST['NSP_SD'];
    $scoreNSP_MD = $_POST['NSP_MD'];
    $scoreUSP_SCD = $_POST['USP_SCD'];
    $scoreNPV_SCD = $_POST['NPV_SCD'];
    $scoreNPV_MD = $_POST['NPV_MD'];

    if ($scoreIP_SI == "" AND $scoreIP_MI == "" AND $scoreUMID_SI == "" AND $scoreUMID_MI == ""
    AND $scoreCPP_L == "" AND $scoreCPP_I == "" AND $scoreNSP_SD == ""AND $scoreNSP_MD == ""AND $scoreUSP_SCD == ""
        AND $scoreNPV_SCD == "" AND $scoreNPV_MD == "") {
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Please do not leave it blank',
                    text: 'Something went wrong!',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                })

            })

        </script>
        <?php
    } else {

        $ipsole_name_1 = $_POST['ipsole_name_1'];
        $ipsole_name_2 = $_POST['ipsole_name_2'];
        $ipsole_name_3 = $_POST['ipsole_name_3'];
        $ipsole_name_4 = $_POST['ipsole_name_4'];

        $ipsole_appdate_1 = $_POST['ipsole_appdate_1'];
        $ipsole_appdate_2 = $_POST['ipsole_appdate_2'];
        $ipsole_appdate_3 = $_POST['ipsole_appdate_3'];
        $ipsole_appdate_4 = $_POST['ipsole_appdate_4'];

        $ipsole_patapp_1 = $_POST['ipsole_patapp_1'];
        $ipsole_patapp_2 = $_POST['ipsole_patapp_2'];
        $ipsole_patapp_3 = $_POST['ipsole_patapp_3'];
        $ipsole_patapp_4 = $_POST['ipsole_patapp_4'];

        $ipsole_acceptdate_1 = $_POST['ipsole_acceptdate_1'];
        $ipsole_acceptdate_2 = $_POST['ipsole_acceptdate_2'];
        $ipsole_acceptdate_3 = $_POST['ipsole_acceptdate_3'];
        $ipsole_acceptdate_4 = $_POST['ipsole_acceptdate_4'];

        $ipmul_name_1 = $_POST['ipmul_name_1'];
        $ipmul_name_2 = $_POST['ipmul_name_2'];
        $ipmul_name_3 = $_POST['ipmul_name_3'];
        $ipmul_name_4 = $_POST['ipmul_name_4'];

        $ipmul_appdate_1 = $_POST['ipmul_appdate_1'];
        $ipmul_appdate_2 = $_POST['ipmul_appdate_2'];
        $ipmul_appdate_3 = $_POST['ipmul_appdate_3'];
        $ipmul_appdate_4 = $_POST['ipmul_appdate_4'];

        $ipmul_patapp_1 = $_POST['ipmul_patapp_1'];
        $ipmul_patapp_2 = $_POST['ipmul_patapp_2'];
        $ipmul_patapp_3 = $_POST['ipmul_patapp_3'];
        $ipmul_patapp_4 = $_POST['ipmul_patapp_4'];

        $ipmul_acceptdate_1 = $_POST['ipmul_acceptdate_1'];
        $ipmul_acceptdate_2 = $_POST['ipmul_acceptdate_2'];
        $ipmul_acceptdate_3 = $_POST['ipmul_acceptdate_3'];
        $ipmul_acceptdate_4 = $_POST['ipmul_acceptdate_4'];

        $ipmul_contrib_1 = $_POST['ipmul_contrib_1'];
        $ipmul_contrib_2 = $_POST['ipmul_contrib_2'];
        $ipmul_contrib_3 = $_POST['ipmul_contrib_3'];
        $ipmul_contrib_4 = $_POST['ipmul_contrib_4'];

        $umidsole_name_1 = $_POST['umidsole_name_1'];
        $umidsole_name_2 = $_POST['umidsole_name_2'];
        $umidsole_name_3 = $_POST['umidsole_name_3'];
        $umidsole_name_4 = $_POST['umidsole_name_4'];

        $umidsole_appdate_1 = $_POST['umidsole_appdate_1'];
        $umidsole_appdate_2 = $_POST['umidsole_appdate_2'];
        $umidsole_appdate_3 = $_POST['umidsole_appdate_3'];
        $umidsole_appdate_4 = $_POST['umidsole_appdate_4'];

        $umidsole_patapp_1 = $_POST['umidsole_patapp_1'];
        $umidsole_patapp_2 = $_POST['umidsole_patapp_2'];
        $umidsole_patapp_3 = $_POST['umidsole_patapp_3'];
        $umidsole_patapp_4 = $_POST['umidsole_patapp_4'];

        $umidsole_acceptdate_1 = $_POST['umidsole_acceptdate_1'];
        $umidsole_acceptdate_2 = $_POST['umidsole_acceptdate_2'];
        $umidsole_acceptdate_3 = $_POST['umidsole_acceptdate_3'];
        $umidsole_acceptdate_4 = $_POST['umidsole_acceptdate_4'];

        $umidmul_name_1 = $_POST['umidmul_name_1'];
        $umidmul_name_2 = $_POST['umidmul_name_2'];
        $umidmul_name_3 = $_POST['umidmul_name_3'];
        $umidmul_name_4 = $_POST['umidmul_name_4'];

        $umidmul_appdate_1 = $_POST['umidmul_appdate_1'];
        $umidmul_appdate_2 = $_POST['umidmul_appdate_2'];
        $umidmul_appdate_3 = $_POST['umidmul_appdate_3'];
        $umidmul_appdate_4 = $_POST['umidmul_appdate_4'];

        $umidmul_patapp_1 = $_POST['umidmul_patapp_1'];
        $umidmul_patapp_2 = $_POST['umidmul_patapp_2'];
        $umidmul_patapp_3 = $_POST['umidmul_patapp_3'];
        $umidmul_patapp_4 = $_POST['umidmul_patapp_4'];

        $umidmul_acceptdate_1 = $_POST['umidmul_acceptdate_1'];
        $umidmul_acceptdate_2 = $_POST['umidmul_acceptdate_2'];
        $umidmul_acceptdate_3 = $_POST['umidmul_acceptdate_3'];
        $umidmul_acceptdate_4 = $_POST['umidmul_acceptdate_4'];

        $umidmul_contrib_1 = $_POST['umidmul_contrib_1'];
        $umidmul_contrib_2 = $_POST['umidmul_contrib_2'];
        $umidmul_contrib_3 = $_POST['umidmul_contrib_3'];
        $umidmul_contrib_4 = $_POST['umidmul_contrib_4'];

        $cpplocal_name_1 = $_POST['cpplocal_name_1'];
        $cpplocal_name_2 = $_POST['cpplocal_name_2'];
        $cpplocal_name_3 = $_POST['cpplocal_name_3'];
        $cpplocal_name_4 = $_POST['cpplocal_name_4'];

        $cpplocal_type_1 = $_POST['cpplocal_type_1'];
        $cpplocal_type_2 = $_POST['cpplocal_type_2'];
        $cpplocal_type_3 = $_POST['cpplocal_type_3'];
        $cpplocal_type_4 = $_POST['cpplocal_type_4'];

        $cpplocal_patentdate_1 = $_POST['cpplocal_patentdate_1'];
        $cpplocal_patentdate_2 = $_POST['cpplocal_patentdate_2'];
        $cpplocal_patentdate_3 = $_POST['cpplocal_patentdate_3'];
        $cpplocal_patentdate_4 = $_POST['cpplocal_patentdate_4'];

        $cpplocal_proddate_1 = $_POST['cpplocal_proddate_1'];
        $cpplocal_proddate_2 = $_POST['cpplocal_proddate_2'];
        $cpplocal_proddate_3 = $_POST['cpplocal_proddate_3'];
        $cpplocal_proddate_4 = $_POST['cpplocal_proddate_4'];

        $cpplocal_area_1 = $_POST['cpplocal_area_1'];
        $cpplocal_area_2 = $_POST['cpplocal_area_2'];
        $cpplocal_area_3 = $_POST['cpplocal_area_3'];
        $cpplocal_area_4 = $_POST['cpplocal_area_4'];

        $cppinter_name_1 = $_POST['cppinter_name_1'];
        $cppinter_name_2 = $_POST['cppinter_name_2'];
        $cppinter_name_3 = $_POST['cppinter_name_3'];
        $cppinter_name_4 = $_POST['cppinter_name_4'];

        $cppinter_type_1 = $_POST['cppinter_type_1'];
        $cppinter_type_2 = $_POST['cppinter_type_2'];
        $cppinter_type_3 = $_POST['cppinter_type_3'];
        $cppinter_type_4 = $_POST['cppinter_type_4'];

        $cppinter_patentdate_1 = $_POST['cppinter_patentdate_1'];
        $cppinter_patentdate_2 = $_POST['cppinter_patentdate_2'];
        $cppinter_patentdate_3 = $_POST['cppinter_patentdate_3'];
        $cppinter_patentdate_4 = $_POST['cppinter_patentdate_4'];

        $cppinter_proddate_1 = $_POST['cppinter_proddate_1'];
        $cppinter_proddate_2 = $_POST['cppinter_proddate_2'];
        $cppinter_proddate_3 = $_POST['cppinter_proddate_3'];
        $cppinter_proddate_4 = $_POST['cppinter_proddate_4'];

        $cppinter_area_1 = $_POST['cppinter_area_1'];
        $cppinter_area_2 = $_POST['cppinter_area_2'];
        $cppinter_area_3 = $_POST['cppinter_area_3'];
        $cppinter_area_4 = $_POST['cppinter_area_4'];
        

        $nspsole_name_1 = $_POST['nspsole_name_1'];
        $nspsole_name_2 = $_POST['nspsole_name_2'];
        $nspsole_name_3 = $_POST['nspsole_name_3'];
        $nspsole_name_4 = $_POST['nspsole_name_4'];

        $nspsole_copydate_1 = $_POST['nspsole_copydate_1'];
        $nspsole_copydate_2 = $_POST['nspsole_copydate_2'];
        $nspsole_copydate_3 = $_POST['nspsole_copydate_3'];
        $nspsole_copydate_4 = $_POST['nspsole_copydate_4'];

        $nspsole_utildate_1 = $_POST['nspsole_utildate_1'];
        $nspsole_utildate_2 = $_POST['nspsole_utildate_2'];
        $nspsole_utildate_3 = $_POST['nspsole_utildate_3'];
        $nspsole_utildate_4 = $_POST['nspsole_utildate_4'];

        $nspsole_endusername_1 = $_POST['nspsole_endusername_1'];
        $nspsole_endusername_2 = $_POST['nspsole_endusername_2'];
        $nspsole_endusername_3 = $_POST['nspsole_endusername_3'];
        $nspsole_endusername_4 = $_POST['nspsole_endusername_4'];

        $nspmul_name_1 = $_POST['nspmul_name_1'];
        $nspmul_name_2 = $_POST['nspmul_name_2'];
        $nspmul_name_3 = $_POST['nspmul_name_3'];
        $nspmul_name_4 = $_POST['nspmul_name_4'];

        $nspmul_copydate_1 = $_POST['nspmul_copydate_1'];
        $nspmul_copydate_2 = $_POST['nspmul_copydate_2'];
        $nspmul_copydate_3 = $_POST['nspmul_copydate_3'];
        $nspmul_copydate_4 = $_POST['nspmul_copydate_4'];

        $nspmul_utildate_1 = $_POST['nspmul_utildate_1'];
        $nspmul_utildate_2 = $_POST['nspmul_utildate_2'];
        $nspmul_utildate_3 = $_POST['nspmul_utildate_3'];
        $nspmul_utildate_4 = $_POST['nspmul_utildate_4'];

        $nspmul_endusername_1 = $_POST['nspmul_endusername_1'];
        $nspmul_endusername_2 = $_POST['nspmul_endusername_2'];
        $nspmul_endusername_3 = $_POST['nspmul_endusername_3'];
        $nspmul_endusername_4 = $_POST['nspmul_endusername_4'];

        $nspmul_contrib_1 = $_POST['nspmul_contrib_1'];
        $nspmul_contrib_2 = $_POST['nspmul_contrib_2'];
        $nspmul_contrib_3 = $_POST['nspmul_contrib_3'];
        $nspmul_contrib_4 = $_POST['nspmul_contrib_4'];

        $uspsole_name_1 = $_POST['uspsole_name_1'];
        $uspsole_name_2 = $_POST['uspsole_name_2'];
        $uspsole_name_3 = $_POST['uspsole_name_3'];
        $uspsole_name_4 = $_POST['uspsole_name_4'];

        $uspsole_copydate_1 = $_POST['uspsole_copydate_1'];
        $uspsole_copydate_2 = $_POST['uspsole_copydate_2'];
        $uspsole_copydate_3 = $_POST['uspsole_copydate_3'];
        $uspsole_copydate_4 = $_POST['uspsole_copydate_4'];

        $uspsole_utildate_1 = $_POST['uspsole_utildate_1'];
        $uspsole_utildate_2 = $_POST['uspsole_utildate_2'];
        $uspsole_utildate_3 = $_POST['uspsole_utildate_3'];
        $uspsole_utildate_4 = $_POST['uspsole_utildate_4'];

        $uspsole_contrib_1 = $_POST['uspsole_contrib_1'];
        $uspsole_contrib_2 = $_POST['uspsole_contrib_2'];
        $uspsole_contrib_3 = $_POST['uspsole_contrib_3'];
        $uspsole_contrib_4 = $_POST['uspsole_contrib_4'];

        $uspsole_specfeat_1 = $_POST['uspsole_specfeat_1'];
        $uspsole_specfeat_2 = $_POST['uspsole_specfeat_2'];
        $uspsole_specfeat_3 = $_POST['uspsole_specfeat_3'];
        $uspsole_specfeat_4 = $_POST['uspsole_specfeat_4'];

        $uspsole_endusername_1 = $_POST['uspsole_endusername_1'];
        $uspsole_endusername_2 = $_POST['uspsole_endusername_2'];
        $uspsole_endusername_3 = $_POST['uspsole_endusername_3'];
        $uspsole_endusername_4 = $_POST['uspsole_endusername_4'];

        $npvsole_name_1 = $_POST['npvsole_name_1'];
        $npvsole_name_2 = $_POST['npvsole_name_2'];
        $npvsole_name_3 = $_POST['npvsole_name_3'];
        $npvsole_name_4 = $_POST['npvsole_name_4'];

        $npvsole_type_1 = $_POST['npvsole_type_1'];
        $npvsole_type_2 = $_POST['npvsole_type_2'];
        $npvsole_type_3 = $_POST['npvsole_type_3'];
        $npvsole_type_4 = $_POST['npvsole_type_4'];

        $npvsole_datecom_1 = $_POST['npvsole_datecom_1'];
        $npvsole_datecom_2 = $_POST['npvsole_datecom_2'];
        $npvsole_datecom_3 = $_POST['npvsole_datecom_3'];
        $npvsole_datecom_4 = $_POST['npvsole_datecom_4'];

        $npvsole_datereg_1 = $_POST['npvsole_datereg_1'];
        $npvsole_datereg_2 = $_POST['npvsole_datereg_2'];
        $npvsole_datereg_3 = $_POST['npvsole_datereg_3'];
        $npvsole_datereg_4 = $_POST['npvsole_datereg_4'];

        $npvsole_dateprop_1 = $_POST['npvsole_dateprop_1'];
        $npvsole_dateprop_2 = $_POST['npvsole_dateprop_2'];
        $npvsole_dateprop_3 = $_POST['npvsole_dateprop_3'];
        $npvsole_dateprop_4 = $_POST['npvsole_dateprop_4'];

        $npvmul_name_1 = $_POST['npvmul_name_1'];
        $npvmul_name_2 = $_POST['npvmul_name_2'];
        $npvmul_name_3 = $_POST['npvmul_name_3'];
        $npvmul_name_4 = $_POST['npvmul_name_4'];

        $npvmul_type_1 = $_POST['npvmul_type_1'];
        $npvmul_type_2 = $_POST['npvmul_type_2'];
        $npvmul_type_3 = $_POST['npvmul_type_3'];
        $npvmul_type_4 = $_POST['npvmul_type_4'];

        $npvmul_datecom_1 = $_POST['npvmul_datecom_1'];
        $npvmul_datecom_2 = $_POST['npvmul_datecom_2'];
        $npvmul_datecom_3 = $_POST['npvmul_datecom_3'];
        $npvmul_datecom_4 = $_POST['npvmul_datecom_4'];

        $npvmul_datereg_1 = $_POST['npvmul_datereg_1'];
        $npvmul_datereg_2 = $_POST['npvmul_datereg_2'];
        $npvmul_datereg_3 = $_POST['npvmul_datereg_3'];
        $npvmul_datereg_4 = $_POST['npvmul_datereg_4'];

        $npvmul_dateprop_1 = $_POST['npvmul_dateprop_1'];
        $npvmul_dateprop_2 = $_POST['npvmul_dateprop_2'];
        $npvmul_dateprop_3 = $_POST['npvmul_dateprop_3'];
        $npvmul_dateprop_4 = $_POST['npvmul_dateprop_4'];

        $npvmul_contrib_1 = $_POST['npvmul_contrib_1'];
        $npvmul_contrib_2 = $_POST['npvmul_contrib_2'];
        $npvmul_contrib_3 = $_POST['npvmul_contrib_3'];
        $npvmul_contrib_4 = $_POST['npvmul_contrib_4'];

        $conn->query("INSERT INTO form2_b (
            ipsole_name_1, ipsole_name_2, ipsole_name_3, ipsole_name_4,
             ipsole_appdate_1, ipsole_appdate_2, ipsole_appdate_3, ipsole_appdate_4, 
             ipsole_patapp_1, ipsole_patapp_2, ipsole_patapp_3, ipsole_patapp_4, 
             ipsole_acceptdate_1, ipsole_acceptdate_2, ipsole_acceptdate_3, ipsole_acceptdate_4, 
             ipmul_name_1, ipmul_name_2, ipmul_name_3, ipmul_name_4, 
             ipmul_appdate_1, ipmul_appdate_2, ipmul_appdate_3, ipmul_appdate_4, 
             ipmul_patapp_1, ipmul_patapp_2, ipmul_patapp_3, ipmul_patapp_4, 
             ipmul_acceptdate_1, ipmul_acceptdate_2, ipmul_acceptdate_3, ipmul_acceptdate_4, 
             ipmul_contrib_1, ipmul_contrib_2, ipmul_contrib_3, ipmul_contrib_4, 
             umidsole_name_1, umidsole_name_2, umidsole_name_3, umidsole_name_4, 
             umidsole_appdate_1, umidsole_appdate_2, umidsole_appdate_3, umidsole_appdate_4, 
             umidsole_patapp_1, umidsole_patapp_2, umidsole_patapp_3, umidsole_patapp_4, 
             umidsole_acceptdate_1, umidsole_acceptdate_2, umidsole_acceptdate_3, umidsole_acceptdate_4, 
             umidmul_name_1, umidmul_name_2, umidmul_name_3, umidmul_name_4, 
             umidmul_appdate_1, umidmul_appdate_2, umidmul_appdate_3, umidmul_appdate_4, 
             umidmul_patapp_1, umidmul_patapp_2, umidmul_patapp_3, umidmul_patapp_4, 
             umidmul_acceptdate_1, umidmul_acceptdate_2, umidmul_acceptdate_3, umidmul_acceptdate_4, 
             umidmul_contrib_1, umidmul_contrib_2, umidmul_contrib_3, umidmul_contrib_4, 
             cpplocal_name_1, cpplocal_name_2, cpplocal_name_3, cpplocal_name_4, 
             cpplocal_type_1, cpplocal_type_2, cpplocal_type_3, cpplocal_type_4, 
             cpplocal_patentdate_1, cpplocal_patentdate_2, cpplocal_patentdate_3, cpplocal_patentdate_4, 
             cpplocal_proddate_1, cpplocal_proddate_2, cpplocal_proddate_3, cpplocal_proddate_4, 
             cpplocal_area_1, cpplocal_area_2, cpplocal_area_3, cpplocal_area_4, 
             cppinter_name_1, cppinter_name_2, cppinter_name_3, cppinter_name_4, 
             cppinter_type_1, cppinter_type_2, cppinter_type_3, cppinter_type_4, 
             cppinter_patentdate_1, cppinter_patentdate_2, cppinter_patentdate_3, cppinter_patentdate_4, 
             cppinter_proddate_1, cppinter_proddate_2, cppinter_proddate_3, cppinter_proddate_4, 
             cppinter_area_1, cppinter_area_2, cppinter_area_3, cppinter_area_4,
              nspsole_name_1, nspsole_name_2, nspsole_name_3, nspsole_name_4, 
              nspsole_copydate_1, nspsole_copydate_2, nspsole_copydate_3, nspsole_copydate_4, 
              nspsole_utildate_1, nspsole_utildate_2, nspsole_utildate_3, nspsole_utildate_4, 
              nspsole_endusername_1, nspsole_endusername_2, nspsole_endusername_3, nspsole_endusername_4, 
              nspmul_name_1, nspmul_name_2, nspmul_name_3, nspmul_name_4, 
              nspmul_copydate_1, nspmul_copydate_2, nspmul_copydate_3, nspmul_copydate_4,
               nspmul_utildate_1, nspmul_utildate_2, nspmul_utildate_3, nspmul_utildate_4, 
               nspmul_endusername_1, nspmul_endusername_2, nspmul_endusername_3, nspmul_endusername_4, 
               nspmul_contrib_1, nspmul_contrib_2, nspmul_contrib_3, nspmul_contrib_4, 
               uspsole_name_1, uspsole_name_2, uspsole_name_3, uspsole_name_4, 
               uspsole_copydate_1, uspsole_copydate_2, uspsole_copydate_3, uspsole_copydate_4, 
               uspsole_utildate_1, uspsole_utildate_2, uspsole_utildate_3, uspsole_utildate_4, 
               uspsole_contrib_1, uspsole_contrib_2, uspsole_contrib_3, uspsole_contrib_4, 
               uspsole_specfeat_1, uspsole_specfeat_2, uspsole_specfeat_3, uspsole_specfeat_4, 
               uspsole_endusername_1, uspsole_endusername_2, uspsole_endusername_3, uspsole_endusername_4, 
               npvsole_name_1, npvsole_name_2, npvsole_name_3, npvsole_name_4, npvsole_type_1, 
               npvsole_type_2, npvsole_type_3, npvsole_type_4, npvsole_datecom_1, npvsole_datecom_2,
              npvsole_datecom_3, npvsole_datecom_4, npvsole_datereg_1, npvsole_datereg_2, 
                npvsole_datereg_3, npvsole_datereg_4, npvsole_dateprop_1, npvsole_dateprop_2, 
                npvsole_dateprop_3, npvsole_dateprop_4, npvmul_name_1, npvmul_name_2, npvmul_name_3, 
                npvmul_name_4, npvmul_type_1, npvmul_type_2, npvmul_type_3, npvmul_type_4,
                npvmul_datecom_1, npvmul_datecom_2, npvmul_datecom_3, npvmul_datecom_4,
                npvmul_datereg_1, npvmul_datereg_2, npvmul_datereg_3, npvmul_datereg_4, npvmul_dateprop_1, 
                npvmul_dateprop_2, npvmul_dateprop_3, npvmul_dateprop_4, npvmul_contrib_1, npvmul_contrib_2, 
                npvmul_contrib_3, npvmul_contrib_4,user_id)
        VALUES (
            '$ipsole_name_1', '$ipsole_name_2', '$ipsole_name_3', '$ipsole_name_4',
            '$ipsole_appdate_1', '$ipsole_appdate_2', '$ipsole_appdate_3', '$ipsole_appdate_4',
            '$ipsole_patapp_1', '$ipsole_patapp_2', '$ipsole_patapp_3', '$ipsole_patapp_4',
            '$ipsole_acceptdate_1', '$ipsole_acceptdate_2', '$ipsole_acceptdate_3', '$ipsole_acceptdate_4',
            '$ipmul_name_1', '$ipmul_name_2', '$ipmul_name_3', '$ipmul_name_4',
            '$ipmul_appdate_1', '$ipmul_appdate_2', '$ipmul_appdate_3', '$ipmul_appdate_4',
            '$ipmul_patapp_1', '$ipmul_patapp_2', '$ipmul_patapp_3', '$ipmul_patapp_4',
            '$ipmul_acceptdate_1', '$ipmul_acceptdate_2', '$ipmul_acceptdate_3', '$ipmul_acceptdate_4',
            '$ipmul_contrib_1', '$ipmul_contrib_2', '$ipmul_contrib_3', '$ipmul_contrib_4',
            '$umidsole_name_1', '$umidsole_name_2', '$umidsole_name_3', '$umidsole_name_4',
            '$umidsole_appdate_1', '$umidsole_appdate_2', '$umidsole_appdate_3', '$umidsole_appdate_4',
            '$umidsole_patapp_1', '$umidsole_patapp_2', '$umidsole_patapp_3', '$umidsole_patapp_4',
            '$umidsole_acceptdate_1', '$umidsole_acceptdate_2', '$umidsole_acceptdate_3', '$umidsole_acceptdate_4',
            '$umidmul_name_1', '$umidmul_name_2', '$umidmul_name_3', '$umidmul_name_4',
            '$umidmul_appdate_1', '$umidmul_appdate_2', '$umidmul_appdate_3', '$umidmul_appdate_4',
            '$umidmul_patapp_1', '$umidmul_patapp_2', '$umidmul_patapp_3', '$umidmul_patapp_4',
            '$umidmul_acceptdate_1', '$umidmul_acceptdate_2', '$umidmul_acceptdate_3', '$umidmul_acceptdate_4',
            '$umidmul_contrib_1', '$umidmul_contrib_2', '$umidmul_contrib_3', '$umidmul_contrib_4',
            '$cpplocal_name_1', '$cpplocal_name_2', '$cpplocal_name_3', '$cpplocal_name_4',
            '$cpplocal_type_1', '$cpplocal_type_2', '$cpplocal_type_3', '$cpplocal_type_4',
            '$cpplocal_patentdate_1', '$cpplocal_patentdate_2', '$cpplocal_patentdate_3', '$cpplocal_patentdate_4',
            '$cpplocal_proddate_1', '$cpplocal_proddate_2', '$cpplocal_proddate_3', '$cpplocal_proddate_4',
            '$cpplocal_area_1', '$cpplocal_area_2', '$cpplocal_area_3', '$cpplocal_area_4',
            '$cppinter_name_1', '$cppinter_name_2', '$cppinter_name_3', '$cppinter_name_4',
            '$cppinter_type_1', '$cppinter_type_2', '$cppinter_type_3', '$cppinter_type_4',
            '$cppinter_patentdate_1', '$cppinter_patentdate_2', '$cppinter_patentdate_3', '$cppinter_patentdate_4',
            '$cppinter_proddate_1', '$cppinter_proddate_2', '$cppinter_proddate_3', '$cppinter_proddate_4',
            '$cppinter_area_1', '$cppinter_area_2', '$cppinter_area_3', '$cppinter_area_4',
            '$nspsole_name_1', '$nspsole_name_2', '$nspsole_name_3', '$nspsole_name_4',
            '$nspsole_copydate_1', '$nspsole_copydate_2', '$nspsole_copydate_3', '$nspsole_copydate_4',
            '$nspsole_utildate_1', '$nspsole_utildate_2', '$nspsole_utildate_3', '$nspsole_utildate_4',
            '$nspsole_endusername_1', '$nspsole_endusername_2', '$nspsole_endusername_3', '$nspsole_endusername_4',
            '$nspmul_name_1', '$nspmul_name_2', '$nspmul_name_3', '$nspmul_name_4',
            '$nspmul_copydate_1', '$nspmul_copydate_2', '$nspmul_copydate_3', '$nspmul_copydate_4',
            '$nspmul_utildate_1', '$nspmul_utildate_2', '$nspmul_utildate_3', '$nspmul_utildate_4',
            '$nspmul_endusername_1', '$nspmul_endusername_2', '$nspmul_endusername_3', '$nspmul_endusername_4',
            '$nspmul_contrib_1', '$nspmul_contrib_2', '$nspmul_contrib_3', '$nspmul_contrib_4',
            '$uspsole_name_1', '$uspsole_name_2', '$uspsole_name_3', '$uspsole_name_4',
            '$uspsole_copydate_1', '$uspsole_copydate_2', '$uspsole_copydate_3', '$uspsole_copydate_4',
            '$uspsole_utildate_1', '$uspsole_utildate_2', '$uspsole_utildate_3', '$uspsole_utildate_4',
            '$uspsole_contrib_1', '$uspsole_contrib_2', '$uspsole_contrib_3', '$uspsole_contrib_4',
            '$uspsole_specfeat_1', '$uspsole_specfeat_2', '$uspsole_specfeat_3', '$uspsole_specfeat_4',
            '$uspsole_endusername_1', '$uspsole_endusername_2', '$uspsole_endusername_3', '$uspsole_endusername_4',
            '$npvsole_name_1', '$npvsole_name_2', '$npvsole_name_3', '$npvsole_name_4',
            '$npvsole_type_1', '$npvsole_type_2', '$npvsole_type_3', '$npvsole_type_4',
            '$npvsole_datecom_1', '$npvsole_datecom_2', '$npvsole_datecom_3', '$npvsole_datecom_4',
            '$npvsole_datereg_1', '$npvsole_datereg_2', '$npvsole_datereg_3', '$npvsole_datereg_4',
            '$npvsole_dateprop_1', '$npvsole_dateprop_2', '$npvsole_dateprop_3', '$npvsole_dateprop_4',
            '$npvmul_name_1', '$npvmul_name_2', '$npvmul_name_3', '$npvmul_name_4',
            '$npvmul_type_1', '$npvmul_type_2', '$npvmul_type_3', '$npvmul_type_4',
            '$npvmul_datecom_1', '$npvmul_datecom_2', '$npvmul_datecom_3', '$npvmul_datecom_4',
            '$npvmul_datereg_1', '$npvmul_datereg_2', '$npvmul_datereg_3', '$npvmul_datereg_4',
            '$npvmul_dateprop_1', '$npvmul_dateprop_2', '$npvmul_dateprop_3', '$npvmul_dateprop_4',
            '$npvmul_contrib_1', '$npvmul_contrib_2', '$npvmul_contrib_3', '$npvmul_contrib_4',
            $id)
        ON DUPLICATE KEY UPDATE

            ipsole_name_1 = VALUES(ipsole_name_1),
            ipsole_name_2 = VALUES(ipsole_name_2),
            ipsole_name_3 = VALUES(ipsole_name_3),
            ipsole_name_4 = VALUES(ipsole_name_4),
            ipsole_appdate_1 = VALUES(ipsole_appdate_1),
            ipsole_appdate_2 = VALUES(ipsole_appdate_2),
            ipsole_appdate_3 = VALUES(ipsole_appdate_3),
            ipsole_appdate_4 = VALUES(ipsole_appdate_4),
            ipsole_patapp_1 = VALUES(ipsole_patapp_1),
            ipsole_patapp_2 = VALUES(ipsole_patapp_2),
            ipsole_patapp_3 = VALUES(ipsole_patapp_3),
            ipsole_patapp_4 = VALUES(ipsole_patapp_4),
            ipsole_acceptdate_1 = VALUES(ipsole_acceptdate_1),
            ipsole_acceptdate_2 = VALUES(ipsole_acceptdate_2),
            ipsole_acceptdate_3 = VALUES(ipsole_acceptdate_3),
            ipsole_acceptdate_4 = VALUES(ipsole_acceptdate_4),
            ipmul_name_1 = VALUES(ipmul_name_1),
            ipmul_name_2 = VALUES(ipmul_name_2),
            ipmul_name_3 = VALUES(ipmul_name_3),
            ipmul_name_4 = VALUES(ipmul_name_4),
            ipmul_appdate_1 = VALUES(ipmul_appdate_1),
            ipmul_appdate_2 = VALUES(ipmul_appdate_2),
            ipmul_appdate_3 = VALUES(ipmul_appdate_3),
            ipmul_appdate_4 = VALUES(ipmul_appdate_4),
            ipmul_patapp_1 = VALUES(ipmul_patapp_1),
            ipmul_patapp_2 = VALUES(ipmul_patapp_2),
            ipmul_patapp_3 = VALUES(ipmul_patapp_3),
            ipmul_patapp_4 = VALUES(ipmul_patapp_4),
            ipmul_acceptdate_1 = VALUES(ipmul_acceptdate_1),
            ipmul_acceptdate_2 = VALUES(ipmul_acceptdate_2),
            ipmul_acceptdate_3 = VALUES(ipmul_acceptdate_3),
            ipmul_acceptdate_4 = VALUES(ipmul_acceptdate_4),
            ipmul_contrib_1 = VALUES(ipmul_contrib_1),
            ipmul_contrib_2 = VALUES(ipmul_contrib_2),
            ipmul_contrib_3 = VALUES(ipmul_contrib_3),
            ipmul_contrib_4 = VALUES(ipmul_contrib_4),
            umidsole_name_1 = VALUES(umidsole_name_1),
            umidsole_name_2 = VALUES(umidsole_name_2),
            umidsole_name_3 = VALUES(umidsole_name_3),
            umidsole_name_4 = VALUES(umidsole_name_4),
            umidsole_appdate_1 = VALUES(umidsole_appdate_1),
            umidsole_appdate_2 = VALUES(umidsole_appdate_2),
            umidsole_appdate_3 = VALUES(umidsole_appdate_3),
            umidsole_appdate_4 = VALUES(umidsole_appdate_4),
            umidsole_patapp_1 = VALUES(umidsole_patapp_1),
            umidsole_patapp_2 = VALUES(umidsole_patapp_2),
            umidsole_patapp_3 = VALUES(umidsole_patapp_3),
            umidsole_patapp_4 = VALUES(umidsole_patapp_4),
            umidsole_acceptdate_1 = VALUES(umidsole_acceptdate_1),
            umidsole_acceptdate_2 = VALUES(umidsole_acceptdate_2),
            umidsole_acceptdate_3 = VALUES(umidsole_acceptdate_3),
            umidsole_acceptdate_4 = VALUES(umidsole_acceptdate_4),
            umidmul_name_1 = VALUES(umidmul_name_1),
            umidmul_name_2 = VALUES(umidmul_name_2),
            umidmul_name_3 = VALUES(umidmul_name_3),
            umidmul_name_4 = VALUES(umidmul_name_4),
            umidmul_appdate_1 = VALUES(umidmul_appdate_1),
            umidmul_appdate_2 = VALUES(umidmul_appdate_2),
            umidmul_appdate_3 = VALUES(umidmul_appdate_3),
            umidmul_appdate_4 = VALUES(umidmul_appdate_4),
            umidmul_patapp_1 = VALUES(umidmul_patapp_1),
            umidmul_patapp_2 = VALUES(umidmul_patapp_2),
            umidmul_patapp_3 = VALUES(umidmul_patapp_3),
            umidmul_patapp_4 = VALUES(umidmul_patapp_4),
            umidmul_acceptdate_1 = VALUES(umidmul_acceptdate_1),
            umidmul_acceptdate_2 = VALUES(umidmul_acceptdate_2),
            umidmul_acceptdate_3 = VALUES(umidmul_acceptdate_3),
            umidmul_acceptdate_4 = VALUES(umidmul_acceptdate_4),
            umidmul_contrib_1 = VALUES(umidmul_contrib_1),
            umidmul_contrib_2 = VALUES(umidmul_contrib_2),
            umidmul_contrib_3 = VALUES(umidmul_contrib_3),
            umidmul_contrib_4 = VALUES(umidmul_contrib_4),
            cpplocal_name_1 = VALUES(cpplocal_name_1),
            cpplocal_name_2 = VALUES(cpplocal_name_2),
            cpplocal_name_3 = VALUES(cpplocal_name_3),
            cpplocal_name_4 = VALUES(cpplocal_name_4),
            cpplocal_type_1 = VALUES(cpplocal_type_1),
            cpplocal_type_2 = VALUES(cpplocal_type_2),
            cpplocal_type_3 = VALUES(cpplocal_type_3),
            cpplocal_type_4 = VALUES(cpplocal_type_4),
            cpplocal_patentdate_1 = VALUES(cpplocal_patentdate_1),
            cpplocal_patentdate_2 = VALUES(cpplocal_patentdate_2),
            cpplocal_patentdate_3 = VALUES(cpplocal_patentdate_3),
            cpplocal_patentdate_4 = VALUES(cpplocal_patentdate_4),
            cpplocal_proddate_1 = VALUES(cpplocal_proddate_1),
            cpplocal_proddate_2 = VALUES(cpplocal_proddate_2),
            cpplocal_proddate_3 = VALUES(cpplocal_proddate_3),
            cpplocal_proddate_4 = VALUES(cpplocal_proddate_4),
            cpplocal_area_1 = VALUES(cpplocal_area_1),
            cpplocal_area_2 = VALUES(cpplocal_area_2),
            cpplocal_area_3 = VALUES(cpplocal_area_3),
            cpplocal_area_4 = VALUES(cpplocal_area_4),
            cppinter_name_1 = VALUES(cppinter_name_1),
            cppinter_name_2 = VALUES(cppinter_name_2),
            cppinter_name_3 = VALUES(cppinter_name_3),
            cppinter_name_4 = VALUES(cppinter_name_4),
            cppinter_type_1 = VALUES(cppinter_type_1),
            cppinter_type_2 = VALUES(cppinter_type_2),
            cppinter_type_3 = VALUES(cppinter_type_3),
            cppinter_type_4 = VALUES(cppinter_type_4),
            cppinter_patentdate_1 = VALUES(cppinter_patentdate_1),
            cppinter_patentdate_2 = VALUES(cppinter_patentdate_2),
            cppinter_patentdate_3 = VALUES(cppinter_patentdate_3),
            cppinter_patentdate_4 = VALUES(cppinter_patentdate_4),
            cppinter_proddate_1 = VALUES(cppinter_proddate_1),
            cppinter_proddate_2 = VALUES(cppinter_proddate_2),
            cppinter_proddate_3 = VALUES(cppinter_proddate_3),
            cppinter_proddate_4 = VALUES(cppinter_proddate_4),
            cppinter_area_1 = VALUES(cppinter_area_1),
            cppinter_area_2 = VALUES(cppinter_area_2),
            cppinter_area_3 = VALUES(cppinter_area_3),
            cppinter_area_4 = VALUES(cppinter_area_4),
            nspsole_name_1 = VALUES(nspsole_name_1),
            nspsole_name_2 = VALUES(nspsole_name_2),
            nspsole_name_3 = VALUES(nspsole_name_3),
            nspsole_name_4 = VALUES(nspsole_name_4),
            nspsole_copydate_1 = VALUES(nspsole_copydate_1),
            nspsole_copydate_2 = VALUES(nspsole_copydate_2),
            nspsole_copydate_3 = VALUES(nspsole_copydate_3),
            nspsole_copydate_4 = VALUES(nspsole_copydate_4),
            nspsole_utildate_1 = VALUES(nspsole_utildate_1),
            nspsole_utildate_2 = VALUES(nspsole_utildate_2),
            nspsole_utildate_3 = VALUES(nspsole_utildate_3),
            nspsole_utildate_4 = VALUES(nspsole_utildate_4),
            nspsole_endusername_1 = VALUES(nspsole_endusername_1),
            nspsole_endusername_2 = VALUES(nspsole_endusername_2),
            nspsole_endusername_3 = VALUES(nspsole_endusername_3)
            nspsole_endusername_4 = VALUES(nspsole_endusername_4),
            nspmul_name_1 = VALUES(nspmul_name_1),
            nspmul_name_2 = VALUES(nspmul_name_2),
            nspmul_name_3 = VALUES(nspmul_name_3),
            nspmul_name_4 = VALUES(nspmul_name_4),
            nspmul_copydate_1 = VALUES(nspmul_copydate_1),
            nspmul_copydate_2 = VALUES(nspmul_copydate_2),
            nspmul_copydate_3 = VALUES(nspmul_copydate_3),
            nspmul_copydate_4 = VALUES(nspmul_copydate_4),
            nspmul_utildate_1 = VALUES(nspmul_utildate_1),
            nspmul_utildate_2 = VALUES(nspmul_utildate_2),
            nspmul_utildate_3 = VALUES(nspmul_utildate_3),
            nspmul_utildate_4 = VALUES(nspmul_utildate_4),
            nspmul_endusername_1 = VALUES(nspmul_endusername_1),
            nspmul_endusername_2 = VALUES(nspmul_endusername_2),
            nspmul_endusername_3 = VALUES(nspmul_endusername_3),
            nspmul_endusername_4 = VALUES(nspmul_endusername_4),
            nspmul_contrib_1 = VALUES(nspmul_contrib_1),
            nspmul_contrib_2 = VALUES(nspmul_contrib_2),
            nspmul_contrib_3 = VALUES(nspmul_contrib_3),
            nspmul_contrib_4 = VALUES(nspmul_contrib_4),
            uspsole_name_1 = VALUES(uspsole_name_1),
            uspsole_name_2 = VALUES(uspsole_name_2),
            uspsole_name_3 = VALUES(uspsole_name_3),
            uspsole_name_4 = VALUES(uspsole_name_4),
            uspsole_copydate_1 = VALUES(uspsole_copydate_1),
            uspsole_copydate_2 = VALUES(uspsole_copydate_2),
            uspsole_copydate_3 = VALUES(uspsole_copydate_3),
            uspsole_copydate_4 = VALUES(uspsole_copydate_4),
            uspsole_utildate_1 = VALUES(uspsole_utildate_1),
            uspsole_utildate_2 = VALUES(uspsole_utildate_2),
            uspsole_utildate_3 = VALUES(uspsole_utildate_3),
            uspsole_utildate_4 = VALUES(uspsole_utildate_4),
            uspsole_contrib_1 = VALUES(uspsole_contrib_1),
            uspsole_contrib_2 = VALUES(uspsole_contrib_2),
            uspsole_contrib_3 = VALUES(uspsole_contrib_3),
            uspsole_contrib_4 = VALUES(uspsole_contrib_4),
            uspsole_specfeat_1 = VALUES(uspsole_specfeat_1),
            uspsole_specfeat_2 = VALUES(uspsole_specfeat_2),
            uspsole_specfeat_3 = VALUES(uspsole_specfeat_3),
            uspsole_specfeat_4 = VALUES(uspsole_specfeat_4),
            uspsole_endusername_1 = VALUES(uspsole_endusername_1),
            uspsole_endusername_2 = VALUES(uspsole_endusername_2),
            uspsole_endusername_3 = VALUES(uspsole_endusername_3),
            uspsole_endusername_4 = VALUES(uspsole_endusername_4),
            npvsole_name_1 = VALUES(npvsole_name_1),
            npvsole_name_2 = VALUES(npvsole_name_2),
            npvsole_name_3 = VALUES(npvsole_name_3),
            npvsole_name_4 = VALUES(npvsole_name_4),
            npvsole_type_1 = VALUES(npvsole_type_1),
            npvsole_type_2 = VALUES(npvsole_type_2),
            npvsole_type_3 = VALUES(npvsole_type_3),
            npvsole_type_4 = VALUES(npvsole_type_4),
            npvsole_datecom_1 = VALUES(npvsole_datecom_1),
            npvsole_datecom_2 = VALUES(npvsole_datecom_2),
            npvsole_datecom_3 = VALUES(npvsole_datecom_3),
            npvsole_datecom_4 = VALUES(npvsole_datecom_4),
            npvsole_datereg_1 = VALUES(npvsole_datereg_1),
            npvsole_datereg_2 = VALUES(npvsole_datereg_2),
            npvsole_datereg_3 = VALUES(npvsole_datereg_3),
            npvsole_datereg_4 = VALUES(npvsole_datereg_4),
            npvsole_dateprop_1 = VALUES(npvsole_dateprop_1),
            npvsole_dateprop_2 = VALUES(npvsole_dateprop_2),
            npvsole_dateprop_3 = VALUES(npvsole_dateprop_3),
            npvsole_dateprop_4 = VALUES(npvsole_dateprop_4),
            npvmul_name_1 = VALUES(npvmul_name_1),
            npvmul_name_2 = VALUES(npvmul_name_2),
            npvmul_name_3 = VALUES(npvmul_name_3),
            npvmul_name_4 = VALUES(npvmul_name_4),
            npvmul_type_1 = VALUES(npvmul_type_1),
            npvmul_type_2 = VALUES(npvmul_type_2),
            npvmul_type_3 = VALUES(npvmul_type_3),
            npvmul_type_4 = VALUES(npvmul_type_4),
            npvmul_datecom_1 = VALUES(npvmul_datecom_1),
            npvmul_datecom_2 = VALUES(npvmul_datecom_2),
            npvmul_datecom_3 = VALUES(npvmul_datecom_3),
            npvmul_datecom_4 = VALUES(npvmul_datecom_4),
            npvmul_datereg_1 = VALUES(npvmul_datereg_1),
            npvmul_datereg_2 = VALUES(npvmul_datereg_2),
            npvmul_datereg_3 = VALUES(npvmul_datereg_3),
            npvmul_datereg_4 = VALUES(npvmul_datereg_4),
            npvmul_dateprop_1 = VALUES(npvmul_dateprop_1),
            npvmul_dateprop_2 = VALUES(npvmul_dateprop_2),
            npvmul_dateprop_3 = VALUES(npvmul_dateprop_3),
            npvmul_dateprop_4 = VALUES(npvmul_dateprop_4),
            npvmul_contrib_1 = VALUES(npvmul_contrib_1),
            npvmul_contrib_2 = VALUES(npvmul_contrib_2),
            npvmul_contrib_3 = VALUES(npvmul_contrib_3),
            npvmul_contrib_4 = VALUES(npvmul_contrib_4);
            "
        ) or die($conn->error);
        

        $conn->query(
                "UPDATE kra_2 SET 
                 Crit_B_PI_SI = '$scoreIP_SI', 
                 Crit_B_PI_CI  = '$scoreIP_MI', 
                 Crit_B_UMID_SI = '$scoreUMID_SI',
                 Crit_B_UMID_CI = '$scoreUMID_MI', 
                 Crit_B_CPP_Local = '$scoreCPP_L', 
                 Crit_B_CPP_Local_allowed = IF(Crit_B_CPP_Local > 20, 20 , Crit_B_CPP_Local),
                 Crit_B_CPP_International = '$scoreCPP_I',
                 Crit_B_CPP_International_allowed = IF(Crit_B_CPP_International > 30, 30 , Crit_B_CPP_International),
                 Crit_B_NPI_SI = '$scoreNSP_SD', 
                 Crit_B_NPI_CI = '$scoreNSP_MD', 
                 Crit_B_NPI_USP ='$scoreUSP_SCD',
                 Crit_B_NPVA_SD ='$scoreNPV_SCD', 
                 Crit_B_NPVA_CD = '$scoreNPV_MD',
                 Crit_B_Total = Crit_B_PI_SI + Crit_B_PI_CI + Crit_B_UMID_SI + Crit_B_UMID_CI + Crit_B_CPP_Local + Crit_B_CPP_International + Crit_B_NPI_SI + Crit_B_NPI_CI + Crit_B_NPI_USP + Crit_B_NPVA_SD + Crit_B_NPVA_CD,
                 Crit_B_Total_allowed = IF(
                     Crit_B_PI_SI + Crit_B_PI_CI + Crit_B_UMID_SI + Crit_B_UMID_CI + Crit_B_CPP_Local_allowed + Crit_B_CPP_International_allowed + Crit_B_NPI_SI + Crit_B_NPI_CI + Crit_B_NPI_USP + Crit_B_NPVA_SD + Crit_B_NPVA_CD > 100,
                     100, 
                     Crit_B_PI_SI + Crit_B_PI_CI + Crit_B_UMID_SI + Crit_B_UMID_CI + Crit_B_CPP_Local_allowed + Crit_B_CPP_International_allowed + Crit_B_NPI_SI + Crit_B_NPI_CI + Crit_B_NPI_USP + Crit_B_NPVA_SD + Crit_B_NPVA_CD),
                 KRA_2_total = Crit_A_total + Crit_B_Total + Crit_C_total,
                 KRA_2_total_allowed = IF(Crit_A_total_allowed + Crit_B_Total_allowed + Crit_C_Total_allowed > 100, 100, Crit_A_total_allowed + Crit_B_Total_allowed + Crit_C_Total_allowed)
                 WHERE KRA2_ID = $id") or die($conn->error);
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Successfully saved!',
                    text: 'Inserted into database',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "dashboard.php";
                    }
                })

            })
        </script>
        <?php

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Global.css">
    <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>FORM2_B</title>
</head>

<style>
    @font-face {
        font-family: Inter;
        src: url(./fonts/Inter-VariableFont_slnt\,wght.ttf);
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Inter;
        text-decoration: none;
        align-items: center;
    }

    table {
        margin: auto;
    }

    td {
        text-align: center;
        background-color: #dbd7d7;
    }

    input {
        width: auto;
        height: auto;
    }

    body{
        background-color: #E3E3E3;
    }

    .cancel_btn {
        border: none;
        background-color: #7d0201;
        font-size: 20px;
        text-decoration: none;
        color: white;
        padding: 5px;
        border-radius: 10px;
    }

    .row__des td {
        padding: 10px;
        color: white;
        background-color: #7d0201;
        text-align: center;
    }

    .title {
        text-align: center;
    }

    .page_title {
        margin-left: 90px;
        padding: 15px;
        font-style: italic;
    }

    .form__btns {
        text-align: center;
    }

    .form__btns button {
        align-items: center;
        color: white;
        background-color: #7d0201;
        border: solid #afd9ea;
        border-radius: 15px;
        padding: 5px;
        font-size: 20px;
    }
</style>


<body>
<form method="POST" action="FORM2_B.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION B - INVENTIONS (MAX = 100 POINTS)</h1>
    <br><br><br>
    <h2 class="page_title">1. For Every Patented Invention</h2>
    <h2 class="page_title">1.1 Patentable Inventions, Utility Models And Industrial Designs</h2>
    <h2 class="page_title">1.1.1 Invention Patents</h2>
    <h2 class="title">Sole Inventor</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input name = "ipsole_name_1" value = "<?php echo isset($init_ipsole_name_1) ? $init_ipsole_name_1 : ""; ?>" type="text"></td>
            <td><input name = "ipsole_appdate_1" value = "<?php echo isset($init_ipsole_appdate_1) ? $init_ipsole_appdate_1 : ""; ?>" type="date"></td>
            <td>
                <select name="ipsole_patapp_1" id="SI_PTA__1">
                    <option value = "<?php echo isset($init_ipsole_patapp_1) ? $init_ipsole_patapp_1 : "None"; ?>">
                        <?php echo isset($init_ipsole_patapp_1) ? $init_ipsole_patapp_1 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipsole_acceptdate_1" value = "<?php echo isset($init_ipsole_acceptdate_1) ? $init_ipsole_acceptdate_1 : ""; ?>" type="date"></td>
            <td><input id="SA__res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input name = "ipsole_name_2" value = "<?php echo isset($init_ipsole_name_2) ? $init_ipsole_name_2 : ""; ?>" type="text"></td>
            <td><input name = "ipsole_appdate_2" value = "<?php echo isset($init_ipsole_appdate_2) ? $init_ipsole_appdate_2 : ""; ?>" type="date"></td>
            <td>
                <select name="ipsole_patapp_2" id="SI_PTA__2">
                    <option value = "<?php echo isset($init_ipsole_patapp_2) ? $init_ipsole_patapp_2 : "None"; ?>">
                        <?php echo isset($init_ipsole_patapp_2) ? $init_ipsole_patapp_2 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipsole_acceptdate_2" value = "<?php echo isset($init_ipsole_acceptdate_2) ? $init_ipsole_acceptdate_2 : ""; ?>" type="date"></td>
            <td><input id="SA__res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input name = "ipsole_name_3" value = "<?php echo isset($init_ipsole_name_3) ? $init_ipsole_name_3 : ""; ?>" type="text"></td>
            <td><input name = "ipsole_appdate_3" value = "<?php echo isset($init_ipsole_appdate_3) ? $init_ipsole_appdate_3 : ""; ?>" type="date"></td>
            <td>
                <select name="ipsole_patapp_3" id="SI_PTA__3">
                    <option value = "<?php echo isset($init_ipsole_patapp_3) ? $init_ipsole_patapp_3 : "None"; ?>">
                        <?php echo isset($init_ipsole_patapp_3) ? $init_ipsole_patapp_3 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipsole_acceptdate_3" value = "<?php echo isset($init_ipsole_acceptdate_3) ? $init_ipsole_acceptdate_3 : ""; ?>" type="date"></td>
            <td><input id="SA__res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input name = "ipsole_name_4" value = "<?php echo isset($init_ipsole_name_4) ? $init_ipsole_name_4 : ""; ?>" type="text"></td>
            <td><input name = "ipsole_appdate_4" value = "<?php echo isset($init_ipsole_appdate_4) ? $init_ipsole_appdate_4 : ""; ?>" type="date"></td>
            <td>
                <select name="ipsole_patapp_4" id="SI_PTA__4">
                    <option value = "<?php echo isset($init_ipsole_patapp_4) ? $init_ipsole_patapp_4 : "None"; ?>">
                        <?php echo isset($init_ipsole_patapp_4) ? $init_ipsole_patapp_4 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipsole_acceptdate_4" value = "<?php echo isset($init_ipsole_acceptdate_4) ? $init_ipsole_acceptdate_4 : ""; ?>" type="date"></td>
            <td><input id="SA__res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calc_si()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="SI_FS" id="SI_FS" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">Multiple Inventors</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input name = "ipmul_name_1" value = "<?php echo isset($init_ipmul_name_1) ? $init_ipmul_name_1 : ""; ?>" type="text"></td>
            <td><input name = "ipmul_appdate_1" value = "<?php echo isset($init_ipmul_appdate_1) ? $init_ipmul_appdate_1 : ""; ?>" type="date"></td>
            <td>
                <select name="ipmul_patapp_1" id="MI_PTA__1">
                    <option value = "<?php echo isset($init_ipmul_patapp_1) ? $init_ipmul_patapp_1 : "None"; ?>">
                        <?php echo isset($init_ipmul_patapp_1) ? $init_ipmul_patapp_1 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipmul_acceptdate_1" value = "<?php echo isset($init_ipmul_acceptdate_1) ? $init_ipmul_acceptdate_1 : ""; ?>" type="date"></td>
            <td><input type="text" name = "ipmul_contrib_1" value = "<?php echo isset($init_ipmul_contrib_1) ? $init_ipmul_contrib_1 : ""; ?>" id="MI_I_1"></td>
            <td><input id="MI__res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input name = "ipmul_name_2" value = "<?php echo isset($init_ipmul_name_2) ? $init_ipmul_name_2 : ""; ?>" type="text"></td>
            <td><input name = "ipmul_appdate_2" value = "<?php echo isset($init_ipmul_appdate_2) ? $init_ipmul_appdate_2 : ""; ?>" type="date"></td>
            <td>
                <select name="ipmul_patapp_2" id="MI_PTA__2">
                    <option value = "<?php echo isset($init_ipmul_patapp_2) ? $init_ipmul_patapp_2 : "None"; ?>">
                        <?php echo isset($init_ipmul_patapp_2) ? $init_ipmul_patapp_2 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipmul_acceptdate_2" value = "<?php echo isset($init_ipmul_acceptdate_2) ? $init_ipmul_acceptdate_2 : ""; ?>" type="date"></td>
            <td><input type="text" name = "ipmul_contrib_2" value = "<?php echo isset($init_ipmul_contrib_2) ? $init_ipmul_contrib_2 : ""; ?>" id="MI_I_2"></td>
            <td><input id="MI__res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input name = "ipmul_name_3" value = "<?php echo isset($init_ipmul_name_3) ? $init_ipmul_name_3 : ""; ?>" type="text"></td>
            <td><input name = "ipmul_appdate_3" value = "<?php echo isset($init_ipmul_appdate_3) ? $init_ipmul_appdate_3 : ""; ?>" type="date"></td>
            <td>
                <select name="ipmul_patapp_3" id="MI_PTA__3">
                    <option value = "<?php echo isset($init_ipmul_patapp_3) ? $init_ipmul_patapp_3 : "None"; ?>">
                        <?php echo isset($init_ipmul_patapp_3) ? $init_ipmul_patapp_3 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipmul_acceptdate_3" value = "<?php echo isset($init_ipmul_acceptdate_3) ? $init_ipmul_acceptdate_3 : ""; ?>" type="date"></td>
            <td><input type="text" name = "ipmul_contrib_3" value = "<?php echo isset($init_ipmul_contrib_3) ? $init_ipmul_contrib_3 : ""; ?>" id="MI_I_3"></td>
            <td><input id="MI__res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input name = "ipmul_name_4" value = "<?php echo isset($init_ipmul_name_4) ? $init_ipmul_name_4 : ""; ?>" type="text"></td>
            <td><input name = "ipmul_appdate_4" value = "<?php echo isset($init_ipmul_appdate_4) ? $init_ipmul_appdate_4 : ""; ?>" type="date"></td>
            <td>
                <select name="ipmul_patapp_4" id="MI_PTA__4">
                    <option value = "<?php echo isset($init_ipmul_patapp_4) ? $init_ipmul_patapp_4 : "None"; ?>">
                        <?php echo isset($init_ipmul_patapp_4) ? $init_ipmul_patapp_4 : "Select Option"; ?>
                    </option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input name = "ipmul_acceptdate_4" value = "<?php echo isset($init_ipmul_acceptdate_4) ? $init_ipmul_acceptdate_4 : ""; ?>" type="date"></td>
            <td><input type="text" name = "ipmul_contrib_4" value = "<?php echo isset($init_ipmul_contrib_4) ? $init_ipmul_contrib_4 : ""; ?>" id="MI_I_4"></td>
            <td><input id="MI__res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcIPMIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="IP_MI" id="MI_final" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.1.2 Utility Models And Industrial Designs</h2>
    <h2 class="title">Sole Inventor</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input name = "umidsole_name_1" value = "<?php echo isset($init_umidsole_name_1) ? $init_umidsole_name_1 : ""; ?>" type="text"></td>
            <td><input name = "umidsole_appdate_1" value = "<?php echo isset($init_umidsole_appdate_1) ? $init_umidsole_appdate_1 : ""; ?>" type="date"></td>
            <td>
            <select name="umidsole_patapp_1" id="UMID_SI__1">
                    <option value = "<?php echo isset($init_umidsole_patapp_1) ? $init_umidsole_patapp_1 : "None"; ?>">
                        <?php echo isset($init_umidsole_patapp_1) ? $init_umidsole_patapp_1 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidsole_acceptdate_1" value = "<?php echo isset($init_umidsole_acceptdate_1) ? $init_umidsole_acceptdate_1 : ""; ?>" type="date"></td>
            <td><input id="UMID_SI_FS_1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input name = "umidsole_name_2" value = "<?php echo isset($init_umidsole_name_2) ? $init_umidsole_name_2 : ""; ?>" type="text"></td>
            <td><input name = "umidsole_appdate_2" value = "<?php echo isset($init_umidsole_appdate_2) ? $init_umidsole_name_2 : ""; ?>" type="date"></td>
            <td>
            <select name="umidsole_appdate_2" id="UMID_SI__2">
                    <option value = "<?php echo isset($init_umidsole_patapp_2) ? $init_umidsole_patapp_2 : "None"; ?>">
                        <?php echo isset($init_umidsole_patapp_2) ? $init_umidsole_patapp_2 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidsole_acceptdate_2" value = "<?php echo isset($init_umidsole_acceptdate_2) ? $init_umidsole_acceptdate_2 : ""; ?>" type="date"></td>
            <td><input id="UMID_SI_FS_2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input name = "umidsole_name_3" value = "<?php echo isset($init_umidsole_name_3) ? $init_umidsole_name_3 : ""; ?>" type="text"></td>
            <td><input name = "umidsole_appdate_3" value = "<?php echo isset($init_umidsole_appdate_3) ? $init_umidsole_appdate_3 : ""; ?>" type="date"></td>
            <td>
            <select name="umidsole_appdate_3" id="UMID_SI__3">
                    <option value = "<?php echo isset($init_umidsole_patapp_3) ? $init_umidsole_patapp_3 : "None"; ?>">
                        <?php echo isset($init_umidsole_patapp_3) ? $init_umidsole_patapp_3 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidsole_acceptdate_3" value = "<?php echo isset($init_umidsole_acceptdate_3) ? $init_umidsole_acceptdate_3 : ""; ?>" type="date"></td>
            <td><input id="UMID_SI_FS_3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input name = "umidsole_name_4" value = "<?php echo isset($init_umidsole_name_4) ? $init_umidsole_name_4 : ""; ?>" type="text"></td>
            <td><input name = "umidsole_appdate_4" value = "<?php echo isset($init_umidsole_appdate_4) ? $init_umidsole_appdate_4 : ""; ?>" type="date"></td>
            <td>
                <select name="umidsole_appdate_4" id="UMID_SI__4">
                    <option value = "<?php echo isset($init_umidsole_patapp_4) ? $init_umidsole_patapp_4 : "None"; ?>">
                        <?php echo isset($init_umidsole_patapp_4) ? $init_umidsole_patapp_4 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidsole_acceptdate_4" value = "<?php echo isset($init_umidsole_acceptdate_4) ? $init_umidsole_acceptdate_4 : ""; ?>" type="date"></td>
            <td><input id="UMID_SI_FS_4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calcUMIDSIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="UMID_SI" id="UMID_final_FS" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">Multiple Inventors</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>


        <tr>
            <td>1</td>
            <td><input name = "umidmul_name_1" value = "<?php echo isset($init_umidmul_name_1) ? $init_umidmul_name_1 : ""; ?>" type="text"></td>
            <td><input name = "umidmul_appdate_1" value = "<?php echo isset($init_umidmul_appdate_1) ? $init_umidmul_appdate_1 : ""; ?>" type="date"></td>
            <td>
                <select name="umidmul_patapp_1" id="UMID_MI__1">
                <option value = "<?php echo isset($init_umidmul_patapp_1) ? $init_umidmul_patapp_1 : "None"; ?>">
                        <?php echo isset($init_umidmul_patapp_1) ? $init_umidmul_patapp_1 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidmul_acceptdate_1" value = "<?php echo isset($init_umidmul_acceptdate_1) ? $init_umidmul_acceptdate_1 : ""; ?>" type="date"></td>
            <td><input name = "umidmul_contrib_1" value = "<?php echo isset($init_umidmul_contrib_1) ? $init_umidmul_contrib_1 : ""; ?>" type="text" id="UMID_MI_CONTRIBUTION1"></td>
            <td><input id="UMID_MI_FS_1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input name = "umidmul_name_2" value = "<?php echo isset($init_umidmul_name_2) ? $init_umidmul_name_2 : ""; ?>" type="text"></td>
            <td><input name = "umidmul_appdate_2" value = "<?php echo isset($init_umidmul_appdate_2) ? $init_umidmul_appdate_2 : ""; ?>" type="date"></td>
            <td>
                <select name="umidmul_patapp_2" id="UMID_MI__2">
                <option value = "<?php echo isset($init_umidmul_patapp_2) ? $init_umidmul_patapp_2 : "None"; ?>">
                        <?php echo isset($init_umidmul_patapp_2) ? $init_umidmul_patapp_2 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidmul_acceptdate_2" value = "<?php echo isset($init_umidmul_acceptdate_2) ? $init_umidmul_acceptdate_2 : ""; ?>" type="date"></td>
            <td><input name = "umidmul_contrib_2" value = "<?php echo isset($init_umidmul_contrib_2) ? $init_umidmul_contrib_2 : ""; ?>" type="text" id="UMID_MI_CONTRIBUTION2"></td>
            <td><input id="UMID_MI_FS_2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input name = "umidmul_name_3" value = "<?php echo isset($init_umidmul_name_3) ? $init_umidmul_name_3 : ""; ?>" type="text"></td>
            <td><input name = "umidmul_appdate_3" value = "<?php echo isset($init_umidmul_appdate_3) ? $init_umidmul_appdate_3 : ""; ?>" type="date"></td>
            <td>
                <select name="umidmul_patapp_3" id="UMID_MI__3">
                <option value = "<?php echo isset($init_umidmul_patapp_3) ? $init_umidmul_patapp_3 : "None"; ?>">
                        <?php echo isset($init_umidmul_patapp_3) ? $init_umidmul_patapp_3 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidmul_acceptdate_3" value = "<?php echo isset($init_umidmul_acceptdate_3) ? $init_umidmul_acceptdate_3 : ""; ?>" type="date"></td>
            <td><input name = "umidmul_contrib_3" value = "<?php echo isset($init_umidmul_contrib_3) ? $init_umidmul_contrib_3 : ""; ?>" type="text" id="UMID_MI_CONTRIBUTION3"></td>
            <td><input id="UMID_MI_FS_3" readonly type="text" value="0"></td>
        </tr>
        </tr>

        <tr>
            <td>4</td>
            <td><input name = "umidmul_name_4" value = "<?php echo isset($init_umidmul_name_4) ? $init_umidmul_name_4 : ""; ?>" type="text"></td>
            <td><input name = "umidmul_appdate_4" value = "<?php echo isset($init_umidmul_appdate_4) ? $init_umidmul_appdate_4 : ""; ?>" type="date"></td>
            <td>
                <select name="umidmul_patapp_4" id="UMID_MI__4">
                <option value = "<?php echo isset($init_umidmul_patapp_4) ? $init_umidmul_patapp_4 : "None"; ?>">
                        <?php echo isset($init_umidmul_patapp_4) ? $init_umidmul_patapp_4 : "Select Option"; ?>
                    </option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input name = "umidmul_acceptdate_4" value = "<?php echo isset($init_umidmul_acceptdate_4) ? $init_umidmul_acceptdate_4 : ""; ?>" type="date"></td>
            <td><input name = "umidmul_contrib_4" value = "<?php echo isset($init_umidmul_contrib_4) ? $init_umidmul_contrib_4 : ""; ?>" type="text" id="UMID_MI_CONTRIBUTION4"></td>
            <td><input id="UMID_MI_FS_4" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcUMIDMIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="UMID_MI" id="UMID_MI_FS_Final" readonly type="text"></td>
        </tr>
    </table>

    <h2 class="page_title">1.2 Commercialized Patented Products</h2>
    <h2 class="page_title">1.2.1 Local (Max = 20 Points)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Patented Product</td>
            <td>Type of Product</td>
            <td>Date Patented</td>
            <td>Date Product was first Commercialized</td>
            <td>Area/Place Commercialized</td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input  id="CPP1" name = "cpplocal_name_1" value = "<?php echo isset($init_cpplocal_name_1) ? $init_cpplocal_name_1 : ""; ?>" type="text"></td>

            <td><input id="CPP2" name = "cpplocal_type_1" value = "<?php echo isset($init_cpplocal_type_1) ? $init_cpplocal_type_1 : ""; ?>" type="text"></td>

            <td><input id="CPP3" name = "cpplocal_patentdate_1" value = "<?php echo isset($init_cpplocal_patentdate_1) ? $init_cpplocal_patentdate_1 : ""; ?>" type="date"></td>
            <td><input id="CPP4" name = "cpplocal_proddate_1" value = "<?php echo isset($init_cpplocal_proddate_1) ? $init_cpplocal_proddate_1 : ""; ?>" type="date"></td>
            <td><input id="CPP5" name = "cpplocal_area_1" value = "<?php echo isset($init_cpplocal_area_1) ? $init_cpplocal_area_1 : ""; ?>" type="text"></td>
            <td><input id="CPP_res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input  id="CPP6" name = "cpplocal_name_2" value = "<?php echo isset($init_cpplocal_name_2) ? $init_cpplocal_name_2 : ""; ?>" type="text"></td>

            <td><input id="CPP7" name = "cpplocal_type_2" value = "<?php echo isset($init_cpplocal_type_2) ? $init_cpplocal_type_2 : ""; ?>" type="text"></td>

            <td><input id="CPP8" name = "cpplocal_patentdate_2" value = "<?php echo isset($init_cpplocal_patentdate_2) ? $init_cpplocal_patentdate_2 : ""; ?>" type="date"></td>
            <td><input id="CPP9" name = "cpplocal_proddate_2" value = "<?php echo isset($init_cpplocal_proddate_2) ? $init_cpplocal_proddate_2 : ""; ?>" type="date"></td>
            <td><input id="CPP10" name = "cpplocal_area_2" value = "<?php echo isset($init_cpplocal_area_2) ? $init_cpplocal_area_2 : ""; ?>" type="text"></td>
            <td><input id="CPP_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input  id="CPP11" name = "cpplocal_name_3" value = "<?php echo isset($init_cpplocal_name_3) ? $init_cpplocal_name_3 : ""; ?>" type="text"></td>
            <td><input id="CPP12" name = "cpplocal_type_3" value = "<?php echo isset($init_cpplocal_type_3) ? $init_cpplocal_type_3 : ""; ?>" type="text"></td>
            <td><input id="CPP13" name = "cpplocal_patentdate_3" value = "<?php echo isset($init_cpplocal_patentdate_3) ? $init_cpplocal_patentdate_3 : ""; ?>" type="date"></td>
            <td><input id="CPP14" name = "cpplocal_proddate_3" value = "<?php echo isset($init_cpplocal_proddate_3) ? $init_cpplocal_proddate_3 : ""; ?>" type="date"></td>
            <td><input id="CPP15" name = "cpplocal_area_3" value = "<?php echo isset($init_cpplocal_area_3) ? $init_cpplocal_area_3 : ""; ?>" type="text"></td>
            <td><input id="CPP_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input  id="CPP16" name = "cpplocal_name_4" value = "<?php echo isset($init_cpplocal_name_4) ? $init_cpplocal_name_4 : ""; ?>" type="text"></td>
            <td><input id="CPP17" name = "cpplocal_type_4" value = "<?php echo isset($init_cpplocal_type_4) ? $init_cpplocal_type_4 : ""; ?>" type="text"></td>
            <td><input id="CPP18" name = "cpplocal_patentdate_4" value = "<?php echo isset($init_cpplocal_patentdate_4) ? $init_cpplocal_patentdate_4 : ""; ?>" type="date"></td>
            <td><input id="CPP19" name = "cpplocal_proddate_4" value = "<?php echo isset($init_cpplocal_proddate_4) ? $init_cpplocal_proddate_4 : ""; ?>" type="date"></td>
            <td><input id="CPP20" name = "cpplocal_area_4" value = "<?php echo isset($init_cpplocal_area_4) ? $init_cpplocal_area_4 : ""; ?>" type="text"></td>
            <td><input id="CPP_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_cpp_local()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="CPP_L" id="cpp_local_finale" readonly type="text"></td>
        </tr>
    </table>

    <h2 class="page_title">1.2.2 International (Max = 30 Points)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Patented Product</td>
            <td>Type of Product</td>
            <td>Date Patented</td>
            <td>Date Product was first Commercialized</td>
            <td>Area/Place Commercialized</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input  id="CPP_i1" name = "cppinter_name_1" value = "<?php echo isset($init_cppinter_name_1) ? $init_cppinter_name_1 : ""; ?>" type="text"></td>
            <td><input id="CPP_i2" name = "cppinter_type_1" value = "<?php echo isset($init_cppinter_type_1) ? $init_cppinter_type_1 : ""; ?>" type="text"></td>
            <td><input id="CPP_i3" name = "cppinter_patentdate_1" value = "<?php echo isset($init_cppinter_patentdate_1) ? $init_cppinter_patentdate_1 : ""; ?>" type="date"></td>
            <td><input id="CPP_i4" name = "cppinter_proddate_1" value = "<?php echo isset($init_cppinter_proddate_1) ? $init_cppinter_proddate_1 : ""; ?>" type="date"></td>
            <td><input id="CPP_i5"  name = "cppinter_area_1" value = "<?php echo isset($init_cppinter_area_1) ? $init_cppinter_area_1 : ""; ?>" type="text"></td>
            <td><input id="CPP_res_i1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input  id="CPP_i6" name = "cppinter_name_2" value = "<?php echo isset($init_cppinter_name_2) ? $init_cppinter_name_2 : ""; ?>" type="text"></td>
            <td><input id="CPP_i7" name = "cppinter_type_2" value = "<?php echo isset($init_cppinter_type_2) ? $init_cppinter_type_2 : ""; ?>" type="text"></td>
            <td><input id="CPP_i8" name = "cppinter_patentdate_2" value = "<?php echo isset($init_cppinter_patentdate_2) ? $init_cppinter_patentdate_2 : ""; ?>" type="date"></td>
            <td><input id="CPP_i9" name = "cppinter_proddate_2" value = "<?php echo isset($init_cppinter_proddate_2) ? $init_cppinter_proddate_2 : ""; ?>" type="date"></td>
            <td><input id="CPP_i10"  name = "cppinter_area_2" value = "<?php echo isset($init_cppinter_area_2) ? $init_cppinter_area_2 : ""; ?>" type="text"></td>
            <td><input id="CPP_res_i2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input  id="CPP_i11" name = "cppinter_name_3" value = "<?php echo isset($init_cppinter_name_3) ? $init_cppinter_name_3 : ""; ?>" type="text"></td>
            <td><input id="CPP_i12" name = "cppinter_type_3" value = "<?php echo isset($init_cppinter_type_3) ? $init_cppinter_type_3 : ""; ?>" type="text"></td>
            <td><input id="CPP_i13" name = "cppinter_patentdate_3" value = "<?php echo isset($init_cppinter_patentdate_3) ? $init_cppinter_patentdate_3 : ""; ?>" type="date"></td>
            <td><input id="CPP_i14" name = "cppinter_proddate_3" value = "<?php echo isset($init_cppinter_proddate_3) ? $init_cppinter_proddate_3 : ""; ?>" type="date"></td>
            <td><input id="CPP_i15"  name = "cppinter_area_3" value = "<?php echo isset($init_cppinter_area_3) ? $init_cppinter_area_3 : ""; ?>" type="text"></td>
            <td><input id="CPP_res_i3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input  id="CPP_i16" name = "cppinter_name_4" value = "<?php echo isset($init_cppinter_name_4) ? $init_cppinter_name_4 : ""; ?>" type="text"></td>
            <td><input id="CPP_i17" name = "cppinter_type_4" value = "<?php echo isset($init_cppinter_type_4) ? $init_cppinter_type_4 : ""; ?>" type="text"></td>
            <td><input id="CPP_i18" name = "cppinter_patentdate_4" value = "<?php echo isset($init_cppinter_patentdate_4) ? $init_cppinter_patentdate_4 : ""; ?>" type="date"></td>
            <td><input id="CPP_i19" name = "cppinter_proddate_4" value = "<?php echo isset($init_cppinter_proddate_4) ? $init_cppinter_proddate_4 : ""; ?>" type="date"></td>
            <td><input id="CPP_i20"  name = "cppinter_area_4" value = "<?php echo isset($init_cppinter_area_4) ? $init_cppinter_area_4 : ""; ?>" type="text"></td>
            <td><input id="CPP_res_i4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_cpp_International()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="CPP_I" id="cpp_international_finale" readonly type="text"></td>
        </tr>
    </table>


    <h2 class="page_title">2. For Every Non-patentable Invention </h2>
    <h2 class="page_title">2.1 Copyrighted And Utilized Software Products</h2>
    <h2 class="page_title">2.1.1 New Software Products (Computer Program)</h2>
    <h2 class="title">Sole Developer</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Name of End User/s</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input  id="NSP_SD-1" name = "nspsole_name_1" value = "<?php echo isset($init_nspsole_name_1) ? $init_nspsole_name_1 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD-2" name = "nspsole_copydate_1" value = "<?php echo isset($init_nspsole_copydate_1) ? $init_nspsole_copydate_1 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-3" name = "nspsole_utildate_1" value = "<?php echo isset($init_nspsole_utildate_1) ? $init_nspsole_utildate_1 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-4" name = "nspsole_endusername_1" value = "<?php echo isset($init_nspsole_endusername_1) ? $init_nspsole_endusername_1 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD_res1" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input  id="NSP_SD-5" name = "nspsole_name_2" value = "<?php echo isset($init_nspsole_name_2) ? $init_nspsole_name_2 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD-6" name = "nspsole_copydate_2" value = "<?php echo isset($init_nspsole_copydate_2) ? $init_nspsole_copydate_2 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-7" name = "nspsole_utildate_2" value = "<?php echo isset($init_nspsole_utildate_2) ? $init_nspsole_utildate_2 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-8" name = "nspsole_endusername_2" value = "<?php echo isset($init_nspsole_endusername_2) ? $init_nspsole_endusername_2 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input  id="NSP_SD-9" name = "nspsole_name_3" value = "<?php echo isset($init_nspsole_name_3) ? $init_nspsole_name_3 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD-10" name = "nspsole_copydate_3" value = "<?php echo isset($init_nspsole_copydate_3) ? $init_nspsole_copydate_3 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-11" name = "nspsole_utildate_3" value = "<?php echo isset($init_nspsole_utildate_3) ? $init_nspsole_utildate_3 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-12" name = "nspsole_endusername_3" value = "<?php echo isset($init_nspsole_endusername_3) ? $init_nspsole_endusername_3 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input  id="NSP_SD-13" name = "nspsole_name_4" value = "<?php echo isset($init_nspsole_name_4) ? $init_nspsole_name_4 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD-14" name = "nspsole_copydate_4" value = "<?php echo isset($init_nspsole_copydate_4) ? $init_nspsole_copydate_4 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-15" name = "nspsole_utildate_4" value = "<?php echo isset($init_nspsole_utildate_4) ? $init_nspsole_utildate_4 : ""; ?>" type="date"></td>
            <td><input id="NSP_SD-16" name = "nspsole_endusername_4" value = "<?php echo isset($init_nspsole_endusername_4) ? $init_nspsole_endusername_4 : ""; ?>" type="text"></td>
            <td><input id="NSP_SD_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calc_NSP_SD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NSP_SD" id="NSP_SD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">With Multiple Developers</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Name of End User/s</td>
            <td>Contribution</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input  id="NSP_MD-1" name = "nspmul_name_1" value = "<?php echo isset($init_nspmul_name_1) ? $init_nspmul_name_1 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD-2" name = "nspmul_copydate_1" value = "<?php echo isset($init_nspmul_copydate_1) ? $init_nspmul_copydate_1 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-3" name = "nspmul_utildate_1" value = "<?php echo isset($init_nspmul_utildate_1) ? $init_nspmul_utildate_1 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-4" name = "nspmul_endusername_1" value = "<?php echo isset($init_nspmul_endusername_1) ? $init_nspmul_endusername_1 : ""; ?>" type="text"></td>
            <td><input id="NSP_contribution_1" name = "nspmul_contrib_1" value = "<?php echo isset($init_nspmul_contrib_1) ? $init_nspmul_nspmul_contrib_1 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD_res1" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input  id="NSP_MD-5" name = "nspmul_name_2" value = "<?php echo isset($init_nspmul_name_2) ? $init_nspmul_name_2 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD-6" name = "nspmul_copydate_2" value = "<?php echo isset($init_nspmul_copydate_2) ? $init_nspmul_copydate_2 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-7" name = "nspmul_utildate_2" value = "<?php echo isset($init_nspmul_utildate_2) ? $init_nspmul_utildate_2 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-8" name = "nspmul_endusername_2" value = "<?php echo isset($init_nspmul_endusername_2) ? $init_nspmul_endusername_2 : ""; ?>" type="text"></td>
            <td><input id="NSP_contribution_2" name = "nspmul_contrib_2" value = "<?php echo isset($init_nspmul_contrib_2) ? $init_nspmul_nspmul_contrib_2 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input  id="NSP_MD-9" name = "nspmul_name_3" value = "<?php echo isset($init_nspmul_name_3) ? $init_nspmul_name_3 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD-10" name = "nspmul_copydate_3" value = "<?php echo isset($init_nspmul_copydate_3) ? $init_nspmul_copydate_3 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-11" name = "nspmul_utildate_3" value = "<?php echo isset($init_nspmul_utildate_3) ? $init_nspmul_utildate_3 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-12" name = "nspmul_endusername_3" value = "<?php echo isset($init_nspmul_endusername_3) ? $init_nspmul_endusername_3 : ""; ?>" type="text"></td>
            <td><input id="NSP_contribution_3" name = "nspmul_contrib_3" value = "<?php echo isset($init_nspmul_contrib_3) ? $init_nspmul_contrib_3 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input  id="NSP_MD-13" name = "nspmul_name_4" value = "<?php echo isset($init_nspmul_name_4) ? $init_nspmul_name_4 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD-14" name = "nspmul_copydate_4" value = "<?php echo isset($init_nspmul_copydate_4) ? $init_nspmul_copydate_4 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-15" name = "nspmul_utildate_4" value = "<?php echo isset($init_nspmul_utildate_4) ? $init_nspmul_utildate_4 : ""; ?>" type="date"></td>
            <td><input id="NSP_MD-16" name = "nspmul_endusername_4" value = "<?php echo isset($init_nspmul_endusername_4) ? $init_nspmul_endusername_4 : ""; ?>" type="text"></td>
            <td><input id="NSP_contribution_4" name = "nspmul_contrib_4" value = "<?php echo isset($init_nspmul_contrib_4) ? $init_nspmul_contrib_4 : ""; ?>" type="text"></td>
            <td><input id="NSP_MD_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_NSP_MD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NSP_MD" id="NSP_MD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2.1.2 Updated Software Products</h2>
    <h2 class="title">SOLE/CO-DEVELOPER</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Contribution</td>
            <td>Specify New Features</td>
            <td>Name of End user/s</td>
            <td>Faculty Score</td>

        </tr>
        <tr>
            <td>1</td>
            <td><input  name = "uspsole_name_1" value = "<?php echo isset($init_uspsole_name_1) ? $init_uspsole_name_1 : ""; ?>" type="text"></td>
            <td><input name = "uspsole_copydate_1" value = "<?php echo isset($init_uspsole_copydate_1) ? $init_uspsole_copydate_1 : ""; ?>" type="date" name="" id=""></td>
            <td><input name = "uspsole_utildate_1" value = "<?php echo isset($init_uspsole_utildate_1) ? $init_uspsole_utildate_1 : ""; ?>" type="date" name="" id=""></td>
            <td><select name="uspsole_contrib_1" id="USP_cont_1">
                    <option value = "<?php echo isset($init_uspsole_contrib_1) ? $init_uspsole_contrib_1 : "None"; ?>">
                        <?php echo isset($init_uspsole_contrib_1) ? $init_uspsole_contrib_1 : "Select Option"; ?>
                    </option>

                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input  name = "uspsole_specfeat_1" value = "<?php echo isset($init_uspsole_specfeat_1) ? $init_uspsole_specfeat_1 : ""; ?>" type="text"></td>
            <td><input  name = "uspsole_endusername_1" value = "<?php echo isset($init_uspsole_endusername_1) ? $init_uspsole_endusername_1 : ""; ?>" type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs1" value="0"></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input  name = "uspsole_name_2" value = "<?php echo isset($init_uspsole_name_2) ? $init_uspsole_name_2 : ""; ?>" type="text"></td>
            <td><input name = "uspsole_copydate_2" value = "<?php echo isset($init_uspsole_copydate_2) ? $init_uspsole_copydate_2 : ""; ?>" type="date" name="" id=""></td>
            <td><input name = "uspsole_utildate_2" value = "<?php echo isset($init_uspsole_utildate_2) ? $init_uspsole_utildate_2 : ""; ?>" type="date" name="" id=""></td>
            <td><select name="uspsole_contrib_2" id="USP_cont_2">
                    <option value = "<?php echo isset($init_uspsole_contrib_2) ? $init_uspsole_contrib_2 : "None"; ?>">
                        <?php echo isset($init_uspsole_contrib_2) ? $init_uspsole_contrib_2 : "Select Option"; ?>
                    </option>

                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input  name = "uspsole_specfeat_2" value = "<?php echo isset($init_uspsole_specfeat_2) ? $init_uspsole_specfeat_2 : ""; ?>" type="text"></td>
            <td><input  name = "uspsole_endusername_2" value = "<?php echo isset($init_uspsole_endusername_2) ? $init_uspsole_endusername_2 : ""; ?>" type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input  name = "uspsole_name_3" value = "<?php echo isset($init_uspsole_name_3) ? $init_uspsole_name_3 : ""; ?>" type="text"></td>
            <td><input name = "uspsole_copydate_3" value = "<?php echo isset($init_uspsole_copydate_3) ? $init_uspsole_copydate_3 : ""; ?>" type="date" name="" id=""></td>
            <td><input name = "uspsole_utildate_3" value = "<?php echo isset($init_uspsole_utildate_3) ? $init_uspsole_utildate_3 : ""; ?>" type="date" name="" id=""></td>
            <td><select name="uspsole_contrib_3" id="USP_cont_3">
                    <option value = "<?php echo isset($init_uspsole_contrib_3) ? $init_uspsole_contrib_3 : "None"; ?>">
                        <?php echo isset($init_uspsole_contrib_3) ? $init_uspsole_contrib_3 : "Select Option"; ?>
                    </option>

                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input  name = "uspsole_specfeat_3" value = "<?php echo isset($init_uspsole_specfeat_3) ? $init_uspsole_specfeat_3 : ""; ?>" type="text"></td>
            <td><input  name = "uspsole_endusername_3" value = "<?php echo isset($init_uspsole_endusername_3) ? $init_uspsole_endusername_3 : ""; ?>" type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs3" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input  name = "uspsole_name_4" value = "<?php echo isset($init_uspsole_name_4) ? $init_uspsole_name_4 : ""; ?>" type="text"></td>
            <td><input name = "uspsole_copydate_4" value = "<?php echo isset($init_uspsole_copydate_4) ? $init_uspsole_copydate_4 : ""; ?>" type="date" name="" id=""></td>
            <td><input name = "uspsole_utildate_4" value = "<?php echo isset($init_uspsole_utildate_4) ? $init_uspsole_utildate_4 : ""; ?>" type="date" name="" id=""></td>
            <td><select name="uspsole_contrib_4" id="USP_cont_4">
                    <option value = "<?php echo isset($init_uspsole_contrib_4) ? $init_uspsole_contrib_4 : "None"; ?>">
                        <?php echo isset($init_uspsole_contrib_4) ? $init_uspsole_contrib_4 : "Select Option"; ?>
                    </option>

                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input  name = "uspsole_specfeat_4" value = "<?php echo isset($init_uspsole_specfeat_4) ? $init_uspsole_specfeat_3 : ""; ?>" type="text"></td>
            <td><input  name = "uspsole_endusername_4" value = "<?php echo isset($init_uspsole_endusername_4) ? $init_uspsole_endusername_4 : ""; ?>" type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs4" value="0"></td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcUPSSoleCodevFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="USP_SCD" id="USP_SCD_finale_res"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2.2 New Plant Variety Or Animal Breeds Developed/new Microbial Strains Isolated That Are
        Propagated Or Reproduced</h2>
    <h2 class="title">SOLE/CO-DEVELOPER</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Plant Variety, Animal Breed, <br>
                or Microbial Strain
            </td>
            <td>Type of Plant/Animal or Microbe</td>
            <td>Date Completed</td>
            <td>Date Registered</td>
            <td>Date of Propagation based on Certification</td>
            <td>Faculty Score</td>
        </tr>
        <tr>
            <td>1</td>
            <td><input id="SCDP_1" name = "npvsole_name_1" value = "<?php echo isset($init_npvsole_name_1) ? $init_npvsole_name_1 : ""; ?>" type="text"></td>
            <td><input id="SCDP_2"name = "npvsole_type_1" value = "<?php echo isset($init_npvsole_type_1) ? $init_npvsole_type_1 : ""; ?>" type="text"></td>
            <td><input id="SCDP_3"name = "npvsole_datecom_1" value = "<?php echo isset($init_npvsole_datecom_1) ? $init_npvsole_datecom_1 : ""; ?>" type="date"></td>
            <td><input id="SCDP_4"name = "npvsole_datereg_1" value = "<?php echo isset($init_npvsole_datereg_1) ? $init_npvsole_datereg_1 : ""; ?>" type="date"></td>
            <td><input id="SCDP_5"name = "npvsole_dateprop_1" value = "<?php echo isset($init_npvsole_dateprop_1) ? $init_npvsole_dateprop_1 : ""; ?>" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_1" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input id="SCDP_6" name = "npvsole_name_2" value = "<?php echo isset($init_npvsole_name_2) ? $init_npvsole_name_2 : ""; ?>" type="text"></td>
            <td><input id="SCDP_7"name = "npvsole_type_2" value = "<?php echo isset($init_npvsole_type_2) ? $init_npvsole_type_2 : ""; ?>" type="text"></td>
            <td><input id="SCDP_8"name = "npvsole_datecom_2" value = "<?php echo isset($init_npvsole_datecom_2) ? $init_npvsole_datecom_2 : ""; ?>" type="date"></td>
            <td><input id="SCDP_9"name = "npvsole_datereg_2" value = "<?php echo isset($init_npvsole_datereg_2) ? $init_npvsole_datereg_2 : ""; ?>" type="date"></td>
            <td><input id="SCDP_10"name = "npvsole_dateprop_2" value = "<?php echo isset($init_npvsole_dateprop_2) ? $init_npvsole_dateprop_2 : ""; ?>" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="SCDP_11" name = "npvsole_name_3" value = "<?php echo isset($init_npvsole_name_3) ? $init_npvsole_name_3 : ""; ?>" type="text"></td>
            <td><input id="SCDP_12"name = "npvsole_type_3" value = "<?php echo isset($init_npvsole_type_3) ? $init_npvsole_type_3 : ""; ?>" type="text"></td>
            <td><input id="SCDP_13"name = "npvsole_datecom_3" value = "<?php echo isset($init_npvsole_datecom_3) ? $init_npvsole_datecom_3 : ""; ?>" type="date"></td>
            <td><input id="SCDP_14"name = "npvsole_datereg_3" value = "<?php echo isset($init_npvsole_datereg_3) ? $init_npvsole_datereg_3 : ""; ?>" type="date"></td>
            <td><input id="SCDP_15"name = "npvsole_dateprop_3" value = "<?php echo isset($init_npvsole_dateprop_3) ? $init_npvsole_dateprop_3 : ""; ?>" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_3" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcu_scd()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NPV_SCD" id="scdp_final_res" readonly type="text"></td>

        </tr>
    </table>

    <br><br><br>

    <h2 class="title">WITH MULTIPLE DEVELOPERS</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Plant Variety, Animal Breed, <br>
                or Microbial Strain
            </td>
            <td>Type of Plant/Animal or Microbe</td>
            <td>Date Completed</td>
            <td>Date Registered</td>
            <td>Date of Propagation based on Certification</td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>
        <tr>
            <td>1</td>
            <td><input name = "npvmul_name_1" value = "<?php echo isset($init_npvmul_name_1) ? $init_npvmul_name_1 : ""; ?>" type="text"></td>
            <td><input name = "npvmul_type_1" value = "<?php echo isset($init_npvmul_type_1) ? $init_npvmul_type_1 : ""; ?>" type="text" id="WMD_1"></td>
            <td><input name = "npvmul_datecom_1" value = "<?php echo isset($init_npvmul_datecom_1) ? $init_npvmul_datecom_1 : ""; ?>" type="date" id="WMD_2"></td>
            <td><input name = "npvmul_datereg_1" value = "<?php echo isset($init_npvmul_datereg_1) ? $init_npvmul_datereg_1 : ""; ?>" type="date" id="WMD_3"></td>
            <td><input name = "npvmul_dateprop_1" value = "<?php echo isset($init_npvmul_dateprop_1) ? $init_npvmul_dateprop_1 : ""; ?>" type="date" id="WMD_4"></td>
            <td><input name = "npvmul_contrib_1" value = "<?php echo isset($init_npvmul_contrib_1) ? $init_npvmul_contrib_1 : ""; ?>" type="text" id="WMD_5"></td>
            <td><input readonly type="number" name="" id="WMD_res1" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input name = "npvmul_name_2" value = "<?php echo isset($init_npvmul_name_2) ? $init_npvmul_name_2 : ""; ?>" type="text"></td>
            <td><input name = "npvmul_type_2" value = "<?php echo isset($init_npvmul_type_2) ? $init_npvmul_type_2 : ""; ?>" type="text" id="WMD_6"></td>
            <td><input name = "npvmul_datecom_2" value = "<?php echo isset($init_npvmul_datecom_2) ? $init_npvmul_datecom_2 : ""; ?>" type="date" id="WMD_7"></td>
            <td><input name = "npvmul_datereg_2" value = "<?php echo isset($init_npvmul_datereg_2) ? $init_npvmul_datereg_2 : ""; ?>" type="date" id="WMD_8"></td>
            <td><input name = "npvmul_dateprop_2" value = "<?php echo isset($init_npvmul_dateprop_2) ? $init_npvmul_dateprop_2 : ""; ?>" type="date" id="WMD_9"></td>
            <td><input name = "npvmul_contrib_2" value = "<?php echo isset($init_npvmul_contrib_2) ? $init_npvmul_contrib_2 : ""; ?>" type="text" id="WMD_10"></td>
            <td><input readonly type="number" name="" id="WMD_res2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input name = "npvmul_name_3" value = "<?php echo isset($init_npvmul_name_3) ? $init_npvmul_name_3 : ""; ?>" type="text"></td>
            <td><input name = "npvmul_type_3" value = "<?php echo isset($init_npvmul_type_3) ? $init_npvmul_type_3 : ""; ?>" type="text" id="WMD_11"></td>
            <td><input name = "npvmul_datecom_3" value = "<?php echo isset($init_npvmul_datecom_3) ? $init_npvmul_datecom_3 : ""; ?>" type="date" id="WMD_12"></td>
            <td><input name = "npvmul_datereg_3" value = "<?php echo isset($init_npvmul_datereg_3) ? $init_npvmul_datereg_3 : ""; ?>" type="date" id="WMD_13"></td>
            <td><input name = "npvmul_dateprop_3" value = "<?php echo isset($init_npvmul_dateprop_3) ? $init_npvmul_dateprop_3 : ""; ?>" type="date" id="WMD_14"></td>
            <td><input name = "npvmul_contrib_3" value = "<?php echo isset($init_npvmul_contrib_3) ? $init_npvmul_contrib_3 : ""; ?>" type="text" id="WMD_15"></td>
            <td><input readonly type="number" name="" id="WMD_res3" value="0"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_WMD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NPV_MD" id="WMD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br>

    <div class="form__btns">
        <button name="submit_btn" type="submit">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>


</body>
<script>
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    //! sole inventor
    const pta_1 = document.getElementById('SI_PTA__1')
    const sa_res_1 = document.getElementById('SA__res1')

    pta_1.addEventListener("change", () => {
        if (pta_1.value.toLowerCase() === "none") {
            sa_res_1.value = 0;
        } else if (pta_1.value.toLowerCase() === "accepted") {
            sa_res_1.value = 10;
        } else if (pta_1.value.toLowerCase() === "published") {
            sa_res_1.value = 20;
        } else if (pta_1.value.toLowerCase() === "granted") {
            sa_res_1.value = 80;
        }
    });

    const pta_2 = document.getElementById('SI_PTA__2')
    const sa_res_2 = document.getElementById('SA__res2')

    pta_2.addEventListener("change", () => {
        if (pta_2.value.toLowerCase() === "none") {
            sa_res_2.value = 0;
        } else if (pta_2.value.toLowerCase() === "accepted") {
            sa_res_2.value = 10;
        } else if (pta_2.value.toLowerCase() === "published") {
            sa_res_2.value = 20;
        } else if (pta_1.value.toLowerCase() === "granted") {
            sa_res_2.value = 80;
        }
    });

    const pta_3 = document.getElementById('SI_PTA__3')
    const sa_res_3 = document.getElementById('SA__res3')

    pta_3.addEventListener("change", () => {
        if (pta_3.value.toLowerCase() === "none") {
            sa_res_3.value = 0;
        } else if (pta_3.value.toLowerCase() === "accepted") {
            sa_res_3.value = 10;
        } else if (pta_3.value.toLowerCase() === "published") {
            sa_res_3.value = 20;
        } else if (pta_3.value.toLowerCase() === "granted") {
            sa_res_3.value = 80;
        }
    });

    const pta_4 = document.getElementById('SI_PTA__4')
    const sa_res_4 = document.getElementById('SA__res4')

    pta_4.addEventListener("change", () => {
        if (pta_4.value.toLowerCase() === "none") {
            sa_res_4.value = 0;
        } else if (pta_4.value.toLowerCase() === "accepted") {
            sa_res_4.value = 10;
        } else if (pta_4.value.toLowerCase() === "published") {
            sa_res_4.value = 20;
        } else if (pta_4.value.toLowerCase() === "granted") {
            sa_res_4.value = 80;
        }
    });

    function calc_si() {
        document.getElementById('SI_FS').value = parseFloat(sa_res_4.value) + parseFloat(sa_res_3.value) + parseFloat(sa_res_2.value) + parseFloat(sa_res_1.value)
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    const IP_MI_Stage1 = document.getElementById('MI_PTA__1')
    const IP_MI_Contribution_1 = document.getElementById('MI_I_1')
    const IP_MI_Score1 = document.getElementById('MI__res1')

    IP_MI_Contribution_1.addEventListener("change", () => {
        if (IP_MI_Contribution_1.value === 0) {
            IP_MI_Score1.value = 0;
        } else {
            if (IP_MI_Stage1.value.toLowerCase() === "none") {
                IP_MI_Score1.value = 0;
            } else if (IP_MI_Stage1.value.toLowerCase() === "accepted") {
                IP_MI_Score1.value = (10 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "published") {
                IP_MI_Score1.value = (20 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "granted") {
                IP_MI_Score1.value = (80 * IP_MI_Contribution_1.value) / 100;
            }
        }

    })

    IP_MI_Stage1.addEventListener("change", () => {
        if (IP_MI_Contribution_1.value === 0) {
            IP_MI_Score1.value = 0;
        } else {
            if (IP_MI_Stage1.value.toLowerCase() === "none") {
                IP_MI_Score1.value = 0;
            } else if (IP_MI_Stage1.value.toLowerCase() === "accepted") {
                IP_MI_Score1.value = (10 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "published") {
                IP_MI_Score1.value = (20 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "granted") {
                IP_MI_Score1.value = (80 * IP_MI_Contribution_1.value) / 100;
            }
        }

    })


    const IP_MI_Stage2 = document.getElementById('MI_PTA__2')
    const IP_MI_Contribution_2 = document.getElementById('MI_I_2')
    const IP_MI_Score2 = document.getElementById('MI__res2')

    IP_MI_Contribution_2.addEventListener("change", () => {
        if (IP_MI_Contribution_2.value === 0) {
            IP_MI_Score2.value = 0;
        } else {
            if (IP_MI_Stage2.value.toLowerCase() === "none") {
                IP_MI_Score2.value = 0;
            } else if (IP_MI_Stage2.value.toLowerCase() === "accepted") {
                IP_MI_Score2.value = (10 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "published") {
                IP_MI_Score2.value = (20 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "granted") {
                IP_MI_Score2.value = (80 * IP_MI_Contribution_2.value) / 100;
            }

        }

    })

    IP_MI_Stage2.addEventListener("change", () => {
        if (IP_MI_Contribution_2.value === 0) {
            IP_MI_Score2.value = 0;
        } else {
            if (IP_MI_Stage2.value.toLowerCase() === "none") {
                IP_MI_Score2.value = 0;
            } else if (IP_MI_Stage2.value.toLowerCase() === "accepted") {
                IP_MI_Score2.value = (10 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "published") {
                IP_MI_Score2.value = (20 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "granted") {
                IP_MI_Score2.value = (80 * IP_MI_Contribution_2.value) / 100;
            }

        }

    });

    const IP_MI_Stage3 = document.getElementById('MI_PTA__3')
    const IP_MI_Contribution_3 = document.getElementById('MI_I_3')
    const IP_MI_Score3 = document.getElementById('MI__res3')

    IP_MI_Contribution_3.addEventListener("change", () => {
        if (IP_MI_Contribution_3.value === 0) {
            IP_MI_Score3.value = 0;
        } else {
            if (IP_MI_Stage3.value.toLowerCase() === "none") {
                IP_MI_Score3.value = 0;
            } else if (IP_MI_Stage3.value.toLowerCase() === "accepted") {
                IP_MI_Score3.value = (10 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "published") {
                IP_MI_Score3.value = (20 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "granted") {
                IP_MI_Score3.value = (80 * IP_MI_Contribution_3.value) / 100;
            }

        }
    });

    IP_MI_Stage3.addEventListener("change", () => {
        if (IP_MI_Contribution_3.value === 0) {
            IP_MI_Score3.value = 0;
        } else {
            if (IP_MI_Stage3.value.toLowerCase() === "none") {
                IP_MI_Score3.value = 0;
            } else if (IP_MI_Stage3.value.toLowerCase() === "accepted") {
                IP_MI_Score3.value = (10 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "published") {
                IP_MI_Score3.value = (20 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "granted") {
                IP_MI_Score3.value = (80 * IP_MI_Contribution_3.value) / 100;
            }

        }
    });

    const IP_MI_Stage4 = document.getElementById('MI_PTA__4')
    const IP_MI_Contribution_4 = document.getElementById('MI_I_4')
    const IP_MI_Score4 = document.getElementById('MI__res4')

    IP_MI_Contribution_4.addEventListener("change", () => {
        console.log("IP_MI_PTA_4 value: " + IP_MI_Stage4.value);
        console.log("IP_MI_Contribution_4 value: " + IP_MI_Contribution_4.value);

        if (IP_MI_Contribution_4.value === 0) {
            IP_MI_Score4.value = 0;
        } else {
            if (IP_MI_Stage4.value.toLowerCase() === "none") {
                IP_MI_Score4.value = 0;
            } else if (IP_MI_Stage4.value.toLowerCase() === "accepted") {
                IP_MI_Score4.value = (10 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "published") {
                IP_MI_Score4.value = (20 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "granted") {
                IP_MI_Score4.value = (80 * IP_MI_Contribution_4.value) / 100;
            }
        }
    });


    IP_MI_Stage4.addEventListener("change", () => {
        if (IP_MI_Contribution_4.value === 0) {
            IP_MI_Score4.value = 0;
        } else {
            if (IP_MI_Stage4.value.toLowerCase() === "none") {
                IP_MI_Score4.value = 0;
            } else if (IP_MI_Stage4.value.toLowerCase() === "accepted") {
                IP_MI_Score4.value = (10 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "published") {
                IP_MI_Score4.value = (20 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "granted") {
                IP_MI_Score4.value = (80 * IP_MI_Contribution_4.value) / 100;
            }
        }
    });


    function calcIPMIFinalScore() {
        document.getElementById('MI_final').value = (IP_MI_Score1.value * 10 + IP_MI_Score2.value * 10 + IP_MI_Score3.value * 10 + IP_MI_Score4.value * 10) / 10;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const UMID_SI_STAGE1 = document.getElementById('UMID_SI__1')
    const UMID_SI_SCORE1 = document.getElementById('UMID_SI_FS_1')
    UMID_SI_STAGE1.addEventListener("change", () => {
        if (UMID_SI_STAGE1.value.toLowerCase() === "none") {
            UMID_SI_SCORE1.value = 0;
        } else if (UMID_SI_STAGE1.value.toLowerCase() === "utility") {
            UMID_SI_SCORE1.value = 10;
        } else if (UMID_SI_STAGE1.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE1.value = 5;
        }
    });

    const UMID_SI_STAGE2 = document.getElementById('UMID_SI__2')
    const UMID_SI_SCORE2 = document.getElementById('UMID_SI_FS_2')
    UMID_SI_STAGE2.addEventListener("change", () => {
        if (UMID_SI_STAGE2.value.toLowerCase() === "none") {
            UMID_SI_SCORE2.value = 0;
        } else if (UMID_SI_STAGE2.value.toLowerCase() === "utility") {
            UMID_SI_SCORE2.value = 10;
        } else if (UMID_SI_STAGE2.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE2.value = 5;
        }
    });

    const UMID_SI_STAGE3 = document.getElementById('UMID_SI__3')
    const UMID_SI_SCORE3 = document.getElementById('UMID_SI_FS_3')
    UMID_SI_STAGE3.addEventListener("change", () => {
        if (UMID_SI_STAGE3.value.toLowerCase() === "none") {
            UMID_SI_SCORE3.value = 0;
        } else if (UMID_SI_STAGE3.value.toLowerCase() === "utility") {
            UMID_SI_SCORE3.value = 10;
        } else if (UMID_SI_STAGE3.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE3.value = 5;
        }
    });

    const UMID_SI_STAGE4 = document.getElementById('UMID_SI__4')
    const UMID_SI_SCORE4 = document.getElementById('UMID_SI_FS_4')
    UMID_SI_STAGE4.addEventListener("change", () => {
        if (UMID_SI_STAGE4.value.toLowerCase() === "none") {
            UMID_SI_SCORE4.value = 0;
        } else if (UMID_SI_STAGE4.value.toLowerCase() === "utility") {
            UMID_SI_SCORE4.value = 10;
        } else if (UMID_SI_STAGE4.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE4.value = 5;
        }
    });

    function calcUMIDSIFinalScore() {
        document.getElementById('UMID_final_FS').value =
            parseFloat(UMID_SI_SCORE1.value) + parseFloat(UMID_SI_SCORE2.value) + parseFloat(UMID_SI_SCORE3.value) + parseFloat(UMID_SI_SCORE4.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const UMID_MI_STAGE1 = document.getElementById('UMID_MI__1')
    const UMID_MI_CONTRIBUTION1 = document.getElementById('UMID_MI_CONTRIBUTION1')
    const UMID_MI_SCORE1 = document.getElementById('UMID_MI_FS_1')

    UMID_MI_STAGE1.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION1.value === 0) {
            UMID_MI_SCORE1.value = 0;
        } else {
            if (UMID_MI_STAGE1.value === "none") {
                UMID_MI_SCORE1.value = 0;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "utility") {
                UMID_MI_SCORE1.value = (10 * UMID_MI_CONTRIBUTION1.value) / 100;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE1.value = (5 * UMID_MI_CONTRIBUTION1.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION1.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION1.value === 0) {
            UMID_MI_SCORE1.value = 0;
        } else {
            if (UMID_MI_STAGE1.value === "none") {
                UMID_MI_SCORE1.value = 0;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "utility") {
                UMID_MI_SCORE1.value = (10 * UMID_MI_CONTRIBUTION1.value) / 100;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE1.value = (5 * UMID_MI_CONTRIBUTION1.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE2 = document.getElementById('UMID_MI__2')
    const UMID_MI_CONTRIBUTION2 = document.getElementById('UMID_MI_CONTRIBUTION2')
    const UMID_MI_SCORE2 = document.getElementById('UMID_MI_FS_2')

    UMID_MI_STAGE2.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION2.value === 0) {
            UMID_MI_SCORE2.value = 0;
        } else {
            if (UMID_MI_STAGE2.value === "none") {
                UMID_MI_SCORE2.value = 0;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "utility") {
                UMID_MI_SCORE2.value = (10 * UMID_MI_CONTRIBUTION2.value) / 100;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE2.value = (5 * UMID_MI_CONTRIBUTION2.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION2.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION2.value === 0) {
            UMID_MI_SCORE2.value = 0;
        } else {
            if (UMID_MI_STAGE2.value === "none") {
                UMID_MI_SCORE2.value = 0;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "utility") {
                UMID_MI_SCORE2.value = (10 * UMID_MI_CONTRIBUTION2.value) / 100;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE2.value = (5 * UMID_MI_CONTRIBUTION2.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE3 = document.getElementById('UMID_MI__3')
    const UMID_MI_CONTRIBUTION3 = document.getElementById('UMID_MI_CONTRIBUTION3')
    const UMID_MI_SCORE3 = document.getElementById('UMID_MI_FS_3')

    UMID_MI_STAGE3.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION3.value === 0) {
            UMID_MI_SCORE3.value = 0;
        } else {
            if (UMID_MI_STAGE3.value === "none") {
                UMID_MI_SCORE3.value = 0;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "utility") {
                UMID_MI_SCORE3.value = (10 * UMID_MI_CONTRIBUTION3.value) / 100;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE3.value = (5 * UMID_MI_CONTRIBUTION3.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION3.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION3.value === 0) {
            UMID_MI_SCORE3.value = 0;
        } else {
            if (UMID_MI_STAGE3.value === "none") {
                UMID_MI_SCORE3.value = 0;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "utility") {
                UMID_MI_SCORE3.value = (10 * UMID_MI_CONTRIBUTION3.value) / 100;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE3.value = (5 * UMID_MI_CONTRIBUTION3.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE4 = document.getElementById('UMID_MI__4')
    const UMID_MI_CONTRIBUTION4 = document.getElementById('UMID_MI_CONTRIBUTION4')
    const UMID_MI_SCORE4 = document.getElementById('UMID_MI_FS_4')

    UMID_MI_STAGE4.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION4.value === 0) {
            UMID_MI_SCORE4.value = 0;
        } else {
            if (UMID_MI_STAGE4.value === "none") {
                UMID_MI_SCORE4.value = 0;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "utility") {
                UMID_MI_SCORE4.value = (10 * UMID_MI_CONTRIBUTION4.value) / 100;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE4.value = (5 * UMID_MI_CONTRIBUTION4.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION4.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION4.value === 0) {
            UMID_MI_SCORE4.value = 0;
        } else {
            if (UMID_MI_STAGE4.value === "none") {
                UMID_MI_SCORE4.value = 0;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "utility") {
                UMID_MI_SCORE4.value = (10 * UMID_MI_CONTRIBUTION4.value) / 100;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE4.value = (5 * UMID_MI_CONTRIBUTION4.value) / 100;
            }
        }
    })

    function calcUMIDMIFinalScore() {
        document.getElementById('UMID_MI_FS_Final').value = (UMID_MI_SCORE1.value * 10 + UMID_MI_SCORE2.value * 10 + UMID_MI_SCORE3.value * 10 + UMID_MI_SCORE4.value * 10) / 10;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_cpp_local() {
        const NSP1 = document.getElementById('CPP1').value
        const NSP2 = document.getElementById('CPP2').value
        const NSP3 = document.getElementById('CPP3').value
        const NSP4 = document.getElementById('CPP4').value
        const NSP5 = document.getElementById('CPP5').value
        const ress1 = document.getElementById('CPP_res1')

        if (NSP1 !== "" && NSP2 !== "" && NSP3 !== "" && NSP4 !== "" && NSP5 !== "") {
            ress1.value = 5;
        } else {
            ress1.value = 0
        }

        const NSP6 = document.getElementById('CPP6').value
        const NSP7 = document.getElementById('CPP7').value
        const NSP8 = document.getElementById('CPP8').value
        const NSP9 = document.getElementById('CPP9').value
        const NSP10 = document.getElementById('CPP10').value
        const ress2 = document.getElementById('CPP_res2')
        if (NSP6 !== "" && NSP7 !== "" && NSP8 !== "" && NSP9 !== "" && NSP10 !== "") {
            ress2.value = 5;
        } else {
            ress2.value = 0
        }


        const NSP11 = document.getElementById('CPP11').value
        const NSP12 = document.getElementById('CPP12').value
        const NSP13 = document.getElementById('CPP13').value
        const NSP14 = document.getElementById('CPP14').value
        const NSP15 = document.getElementById('CPP15').value
        const ress3 = document.getElementById('CPP_res3')
        if (NSP11 !== "" && NSP12 !== "" && NSP13 !== "" && NSP14 !== "" && NSP15 !== "") {
            ress3.value = 5;
        } else {
            ress3.value = 0
        }


        const NSP16 = document.getElementById('CPP16').value
        const NSP17 = document.getElementById('CPP17').value
        const NSP18 = document.getElementById('CPP18').value
        const NSP19 = document.getElementById('CPP19').value
        const NSP20 = document.getElementById('CPP20').value
        const ress4 = document.getElementById('CPP_res4')
        if (NSP16 !== "" && NSP17 !== "" && NSP18 !== "" && NSP19 !== "" && NSP20 !== "") {
            ress4.value = 5;
        } else {
            ress4.value = 0
        }

        document.getElementById('cpp_local_finale').value = parseFloat(ress1.value) + parseFloat(ress2.value) + parseFloat(ress3.value) + parseFloat(ress4.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_cpp_International() {
        const NSP1 = document.getElementById('CPP_i1').value
        const NSP2 = document.getElementById('CPP_i2').value
        const NSP3 = document.getElementById('CPP_i3').value
        const NSP4 = document.getElementById('CPP_i4').value
        const NSP5 = document.getElementById('CPP_i5').value
        const ress1 = document.getElementById('CPP_res_i1')

        if (NSP1 !== "" && NSP2 !== "" && NSP3 !== "" && NSP4 !== "" && NSP5 !== "") {
            ress1.value = 10;
        } else {
            ress1.value = 0
        }

        const NSP6 = document.getElementById('CPP_i6').value
        const NSP7 = document.getElementById('CPP_i7').value
        const NSP8 = document.getElementById('CPP_i8').value
        const NSP9 = document.getElementById('CPP_i9').value
        const NSP10 = document.getElementById('CPP_i10').value
        const ress2 = document.getElementById('CPP_res_i2')
        if (NSP6 !== "" && NSP7 !== "" && NSP8 !== "" && NSP9 !== "" && NSP10 !== "") {
            ress2.value = 10;
        } else {
            ress2.value = 0
        }


        const NSP11 = document.getElementById('CPP_i11').value
        const NSP12 = document.getElementById('CPP_i12').value
        const NSP13 = document.getElementById('CPP_i13').value
        const NSP14 = document.getElementById('CPP_i14').value
        const NSP15 = document.getElementById('CPP_i15').value
        const ress3 = document.getElementById('CPP_res_i3')
        if (NSP11 !== "" && NSP12 !== "" && NSP13 !== "" && NSP14 !== "" && NSP15 !== "") {
            ress3.value = 10;
        } else {
            ress3.value = 0
        }


        const NSP16 = document.getElementById('CPP_i16').value
        const NSP17 = document.getElementById('CPP_i17').value
        const NSP18 = document.getElementById('CPP_i18').value
        const NSP19 = document.getElementById('CPP_i19').value
        const NSP20 = document.getElementById('CPP_i20').value
        const ress4 = document.getElementById('CPP_res_i4')
        if (NSP16 !== "" && NSP17 !== "" && NSP18 !== "" && NSP19 !== "" && NSP20 !== "") {
            ress4.value = 10;
        } else {
            ress4.value = 0
        }

        document.getElementById('cpp_international_finale').value = parseFloat(ress1.value) + parseFloat(ress2.value) + parseFloat(ress3.value) + parseFloat(ress4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_NSP_SD() { //! 2.1.1 NSP Sole-dev
        const SD1 = document.getElementById('NSP_SD-1').value
        const SD2 = document.getElementById('NSP_SD-2').value
        const SD3 = document.getElementById('NSP_SD-3').value
        const SD4 = document.getElementById('NSP_SD-4').value
        const SD_res1 = document.getElementById('NSP_SD_res1');

        if (SD1 !== "" && SD2 !== "" && SD3 !== "" && SD4 !== "") {
            SD_res1.value = 10
        } else {
            SD_res1.value = 0
        }

        const SD5 = document.getElementById('NSP_SD-5').value
        const SD6 = document.getElementById('NSP_SD-6').value
        const SD7 = document.getElementById('NSP_SD-7').value
        const SD8 = document.getElementById('NSP_SD-8').value
        const SD_res2 = document.getElementById('NSP_SD_res2');

        if (SD5 !== "" && SD6 !== "" && SD7 !== "" && SD8 !== "") {
            SD_res2.value = 10
        } else {
            SD_res2.value = 0
        }

        const SD9 = document.getElementById('NSP_SD-9').value
        const SD10 = document.getElementById('NSP_SD-10').value
        const SD11 = document.getElementById('NSP_SD-11').value
        const SD12 = document.getElementById('NSP_SD-12').value
        const SD_res3 = document.getElementById('NSP_SD_res3');

        if (SD9 !== "" && SD10 !== "" && SD11 !== "" && SD12 !== "") {
            SD_res3.value = 10
        } else {
            SD_res3.value = 0
        }

        const SD13 = document.getElementById('NSP_SD-13').value
        const SD14 = document.getElementById('NSP_SD-14').value
        const SD15 = document.getElementById('NSP_SD-15').value
        const SD16 = document.getElementById('NSP_SD-16').value
        const SD_res4 = document.getElementById('NSP_SD_res4');

        if (SD13 !== "" && SD14 !== "" && SD15 !== "" && SD16 !== "") {
            SD_res4.value = 10
        } else {
            SD_res4.value = 0
        }

        document.getElementById('NSP_SD_finale_res').value = parseFloat(SD_res1.value) + parseFloat(SD_res2.value) + parseFloat(SD_res3.value) + parseFloat(SD_res4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_NSP_MD() { // * 2.1.1 NSP Multiple developers
        const SD1 = document.getElementById('NSP_MD-1').value
        const SD2 = document.getElementById('NSP_MD-2').value
        const SD3 = document.getElementById('NSP_MD-3').value
        const SD4 = document.getElementById('NSP_MD-4').value
        const SD_contribution_1 = document.getElementById('NSP_contribution_1').value
        const SD_res1 = document.getElementById('NSP_MD_res1');

        if (SD1 !== "" && SD2 !== "" && SD3 !== "" && SD4 !== "" && SD_contribution_1 !== "") {
            SD_res1.value = (10 * SD_contribution_1) / 100;
        } else {
            SD_res1.value = 0
        }

        const SD5 = document.getElementById('NSP_MD-5').value
        const SD6 = document.getElementById('NSP_MD-6').value
        const SD7 = document.getElementById('NSP_MD-7').value
        const SD8 = document.getElementById('NSP_MD-8').value
        const SD_contribution_2 = document.getElementById('NSP_contribution_2').value
        const SD_res2 = document.getElementById('NSP_MD_res2');

        if (SD5 !== "" && SD6 !== "" && SD7 !== "" && SD8 !== "" && SD_contribution_2 !== "") {
            SD_res2.value = (10 * SD_contribution_2) / 100;
        } else {
            SD_res2.value = 0
        }

        const SD9 = document.getElementById('NSP_MD-9').value
        const SD10 = document.getElementById('NSP_MD-10').value
        const SD11 = document.getElementById('NSP_MD-11').value
        const SD12 = document.getElementById('NSP_MD-12').value
        const SD_contribution_3 = document.getElementById('NSP_contribution_3').value
        const SD_res3 = document.getElementById('NSP_MD_res3');

        if (SD9 !== "" && SD10 !== "" && SD11 !== "" && SD12 !== "" && SD_contribution_3 !== "") {
            SD_res3.value = (10 * SD_contribution_3) / 100;
        } else {
            SD_res3.value = 0
        }

        const SD13 = document.getElementById('NSP_MD-13').value
        const SD14 = document.getElementById('NSP_MD-14').value
        const SD15 = document.getElementById('NSP_MD-15').value
        const SD16 = document.getElementById('NSP_MD-16').value
        const SD_contribution_4 = document.getElementById('NSP_contribution_4').value
        const MD_res4 = document.getElementById('NSP_MD_res4');

        if (SD13 !== "" && SD14 !== "" && SD15 !== "" && SD16 !== "" && SD_contribution_4 !== "") {
            MD_res4.value = (10 * SD_contribution_4) / 100;
        } else {
            MD_res4.value = 0
        }

        document.getElementById('NSP_MD_finale_res').value = parseFloat(SD_res1.value) + parseFloat(SD_res2.value) + parseFloat(SD_res3.value) + parseFloat(MD_res4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const usp1 = document.getElementById('USP_cont_1')
    const usp2 = document.getElementById('USP_fs1')

    usp1.addEventListener("change", () => {
        if (usp1.value.toLowerCase() === "none") {
            usp2.value = 0;
        } else if (usp1.value.toLowerCase() === "sole") {
            usp2.value = 4;
        } else if (usp1.value.toLowerCase() === "co-developer") {
            usp2.value = 2;
        }
    });

    const usp3 = document.getElementById('USP_cont_2')
    const usp4 = document.getElementById('USP_fs2')

    usp3.addEventListener("change", () => {
        if (usp3.value.toLowerCase() === "none") {
            usp4.value = 0;
        } else if (usp3.value.toLowerCase() === "sole") {
            usp4.value = 4;
        } else if (usp3.value.toLowerCase() === "co-developer") {
            usp4.value = 2;
        }
    });

    const usp5 = document.getElementById('USP_cont_3')
    const usp6 = document.getElementById('USP_fs3')

    usp5.addEventListener("change", () => {
        if (usp5.value.toLowerCase() === "none") {
            usp6.value = 0;
        } else if (usp5.value.toLowerCase() === "sole") {
            usp6.value = 4;
        } else if (usp5.value.toLowerCase() === "co-developer") {
            usp6.value = 2;
        }
    });

    const usp7 = document.getElementById('USP_cont_4')
    const usp8 = document.getElementById('USP_fs4')

    usp7.addEventListener("change", () => {
        if (usp7.value.toLowerCase() === "none") {
            usp8.value = 0;
        } else if (usp7.value.toLowerCase() === "sole") {
            usp8.value = 4;
        } else if (usp7.value.toLowerCase() === "co-developer") {
            usp8.value = 2;
        }
    });

    function calcUPSSoleCodevFinalScore() {
        document.getElementById('USP_SCD_finale_res').value = parseFloat(usp2.value) + parseFloat(usp4.value) + parseFloat(usp6.value) + parseFloat(usp8.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calcu_scd() {
        const ha_vard_1 = document.getElementById('SCDP_1').value
        const ha_vard_2 = document.getElementById('SCDP_2').value
        const ha_vard_3 = document.getElementById('SCDP_3').value
        const ha_vard_4 = document.getElementById('SCDP_4').value
        const ha_vard_5 = document.getElementById('SCDP_5').value
        const scd_res1 = document.getElementById('SCDPres_1')
        if (ha_vard_1 !== "" && ha_vard_2 !== "" && ha_vard_3 !== "" && ha_vard_4 !== "" && ha_vard_5 !== "") {
            scd_res1.value = 10;
        } else {
            scd_res1.value = 0;
        }

        const ha_vard_6 = document.getElementById('SCDP_6').value
        const ha_vard_7 = document.getElementById('SCDP_7').value
        const ha_vard_8 = document.getElementById('SCDP_8').value
        const ha_vard_9 = document.getElementById('SCDP_9').value
        const ha_vard_10 = document.getElementById('SCDP_10').value
        const scd_res2 = document.getElementById('SCDPres_2')
        if (ha_vard_6 !== "" && ha_vard_7 !== "" && ha_vard_8 !== "" && ha_vard_9 !== "" && ha_vard_10 !== "") {
            scd_res2.value = 10;
        } else {
            scd_res2.value = 0;
        }

        const ha_vard_11 = document.getElementById('SCDP_11').value
        const ha_vard_12 = document.getElementById('SCDP_12').value
        const ha_vard_13 = document.getElementById('SCDP_13').value
        const ha_vard_14 = document.getElementById('SCDP_14').value
        const ha_vard_15 = document.getElementById('SCDP_15').value
        const scd_res3 = document.getElementById('SCDPres_3')
        if (ha_vard_11 !== "" && ha_vard_12 !== "" && ha_vard_13 !== "" && ha_vard_14 !== "" && ha_vard_15 !== "") {
            scd_res3.value = 10;
        } else {
            scd_res3.value = 0;
        }

        document.getElementById('scdp_final_res').value = parseFloat(scd_res3.value) + parseFloat(scd_res2.value) + parseFloat(scd_res1.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function calcu_WMD() {
        const ha_vard_1 = document.getElementById('WMD_1').value
        const ha_vard_2 = document.getElementById('WMD_2').value
        const ha_vard_3 = document.getElementById('WMD_3').value
        const ha_vard_4 = document.getElementById('WMD_4').value
        const contribution_1 = document.getElementById('WMD_5').value
        const scd_res1 = document.getElementById('WMD_res1')

        if (ha_vard_1 !== "" && ha_vard_2 !== "" && ha_vard_3 !== "" && ha_vard_4 !== "" && contribution_1 !== "") {
            scd_res1.value = (10 * contribution_1) / 100;
        } else {
            scd_res1.value = 0;
        }

        const ha_vard_121 = document.getElementById('WMD_6').value
        const ha_vard_122 = document.getElementById('WMD_7').value
        const ha_vard_123 = document.getElementById('WMD_8').value
        const ha_vard_124 = document.getElementById('WMD_9').value
        const contribution_2 = document.getElementById('WMD_10').value
        const scd_res2 = document.getElementById('WMD_res2')

        if (ha_vard_121 !== "" && ha_vard_122 !== "" && ha_vard_123 !== "" && ha_vard_124 !== "" && contribution_2 !== "") {
            scd_res2.value = (10 * contribution_2) / 100;
        } else {
            scd_res2.value = 0;
        }

        const ha_vard_11 = document.getElementById('WMD_11').value
        const ha_vard_12 = document.getElementById('WMD_12').value
        const ha_vard_13 = document.getElementById('WMD_13').value
        const ha_vard_14 = document.getElementById('WMD_14').value
        const contribution_3 = document.getElementById('WMD_15').value
        const scd_res3 = document.getElementById('WMD_res3')

        if (ha_vard_11 !== "" && ha_vard_12 !== "" && ha_vard_13 !== "" && ha_vard_14 !== "" && contribution_3 !== "") {
            scd_res3.value = (10 * contribution_3) / 100;
        } else {
            scd_res3.value = 0;
        }

        document.getElementById('WMD_finale_res').value = (scd_res3.value * 10 + scd_res2.value * 10 + scd_res1.value * 10) / 10
    }

</script>

</html>