<?php
include 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}
$id = $_SESSION['user']['user_id'];

$query2_a = "SELECT * FROM form2_a WHERE user_id = $id";
$result2_a = $conn->query($query2_a);

while ($row = mysqli_fetch_array($result2_a)) {
    $init_title_1_1_1 = $row['title_1_1_1'];
    $init_title_1_1_2 = $row['title_1_1_2'];
    $init_title_1_1_3 = $row['title_1_1_3'];
    $init_title_1_1_4 = $row['title_1_1_4'];
    $init_type_1_1_1 = $row['type_1_1_1'];
    $init_type_1_1_2 = $row['type_1_1_2'];
    $init_type_1_1_3 = $row['type_1_1_3'];
    $init_type_1_1_4 = $row['type_1_1_4'];
    $init_name_1_1_1 = $row['name_1_1_1'];
    $init_name_1_1_2 = $row['name_1_1_2'];
    $init_name_1_1_3 = $row['name_1_1_3'];
    $init_name_1_1_4 = $row['name_1_1_4'];
    $init_rev_1_1_1 = $row['rev_1_1_1'];
    $init_rev_1_1_2 = $row['rev_1_1_2'];
    $init_rev_1_1_3 = $row['rev_1_1_3'];
    $init_rev_1_1_4 = $row['rev_1_1_4'];
    $init_int_1_1_1 = $row['int_1_1_1'];
    $init_int_1_1_2 = $row['int_1_1_2'];
    $init_int_1_1_3 = $row['int_1_1_3'];
    $init_int_1_1_4 = $row['int_1_1_4'];
    $init_datepub_1_1_1 = $row['datepub_1_1_1'];
    $init_datepub_1_1_2 = $row['datepub_1_1_2'];
    $init_datepub_1_1_3 = $row['datepub_1_1_3'];
    $init_datepub_1_1_4 = $row['datepub_1_1_4'];
    $init_title_1_2_1 = $row['title_1_2_1'];
    $init_title_1_2_2 = $row['title_1_2_2'];
    $init_title_1_2_3 = $row['title_1_2_3'];
    $init_title_1_2_4 = $row['title_1_2_4'];
    $init_type_1_2_1 = $row['type_1_2_1'];
    $init_type_1_2_2 = $row['type_1_2_2'];
    $init_type_1_2_3 = $row['type_1_2_3'];
    $init_type_1_2_4 = $row['type_1_2_4'];
    $init_name_1_2_1 = $row['name_1_2_1'];
    $init_name_1_2_2 = $row['name_1_2_2'];
    $init_name_1_2_3 = $row['name_1_2_3'];
    $init_name_1_2_4 = $row['name_1_2_4'];
    $init_rev_1_2_1 = $row['rev_1_2_1'];
    $init_rev_1_2_2 = $row['rev_1_2_2'];
    $init_rev_1_2_3 = $row['rev_1_2_3'];
    $init_rev_1_2_4 = $row['rev_1_2_4'];
    $init_int_1_2_1 = $row['int_1_2_1'];
    $init_int_1_2_2 = $row['int_1_2_2'];
    $init_int_1_2_3 = $row['int_1_2_3'];
    $init_int_1_2_4 = $row['int_1_2_4'];
    $init_datepub_1_2_1 = $row['datepub_1_2_1'];
    $init_datepub_1_2_2 = $row['datepub_1_2_2'];
    $init_datepub_1_2_3 = $row['datepub_1_2_3'];
    $init_datepub_1_2_4 = $row['datepub_1_2_4'];
    $init_title_2_1_1 = $row['title_2_1_1'];
    $init_title_2_1_2 = $row['title_2_1_2'];
    $init_title_2_1_3 = $row['title_2_1_3'];
    $init_title_2_1_4 = $row['title_2_1_4'];
    $init_datecom_2_1_1 = $row['datecom_2_1_1'];
    $init_datecom_2_1_2 = $row['datecom_2_1_2'];
    $init_datecom_2_1_3 = $row['datecom_2_1_3'];
    $init_datecom_2_1_4 = $row['datecom_2_1_4'];
    $init_nameproj_2_1_1 = $row['nameproj_2_1_1'];
    $init_nameproj_2_1_2 = $row['nameproj_2_1_2'];
    $init_nameproj_2_1_3 = $row['nameproj_2_1_3'];
    $init_nameproj_2_1_4 = $row['nameproj_2_1_4'];
    $init_fund_2_1_1 = $row['fund_2_1_1'];
    $init_fund_2_1_2 = $row['fund_2_1_2'];
    $init_fund_2_1_3 = $row['fund_2_1_3'];
    $init_fund_2_1_4 = $row['fund_2_1_4'];
    $init_dateimp_2_1_1 = $row['dateimp_2_1_1'];
    $init_dateimp_2_1_2 = $row['dateimp_2_1_2'];
    $init_dateimp_2_1_3 = $row['dateimp_2_1_3'];
    $init_dateimp_2_1_4 = $row['dateimp_2_1_4'];
    $init_title_2_2_1 = $row['title_2_2_1'];
    $init_title_2_2_2 = $row['title_2_2_2'];
    $init_title_2_2_3 = $row['title_2_2_3'];
    $init_title_2_2_4 = $row['title_2_2_4'];
    $init_datecom_2_2_1 = $row['datecom_2_2_1'];
    $init_datecom_2_2_2 = $row['datecom_2_2_2'];
    $init_datecom_2_2_3 = $row['datecom_2_2_3'];
    $init_datecom_2_2_4 = $row['datecom_2_2_4'];
    $init_nameproj_2_2_1 = $row['nameproj_2_2_1'];
    $init_nameproj_2_2_2 = $row['nameproj_2_2_2'];
    $init_nameproj_2_2_3 = $row['nameproj_2_2_3'];
    $init_nameproj_2_2_4 = $row['nameproj_2_2_4'];
    $init_fund_2_2_1 = $row['fund_2_2_1'];
    $init_fund_2_2_2 = $row['fund_2_2_2'];
    $init_fund_2_2_3 = $row['fund_2_2_3'];
    $init_fund_2_2_4 = $row['fund_2_2_4'];
    $init_dateimp_2_2_1 = $row['dateimp_2_2_1'];
    $init_dateimp_2_2_2 = $row['dateimp_2_2_2'];
    $init_dateimp_2_2_3 = $row['dateimp_2_2_3'];
    $init_dateimp_2_2_4 = $row['dateimp_2_2_4'];
    $init_title_3_1_1 = $row['title_3_1_1'];
    $init_title_3_1_2 = $row['title_3_1_2'];
    $init_title_3_1_3 = $row['title_3_1_3'];
    $init_title_3_1_4 = $row['title_3_1_4'];
    $init_datepub_3_1_1 = $row['datepub_3_1_1'];
    $init_datepub_3_1_2 = $row['datepub_3_1_2'];
    $init_datepub_3_1_3 = $row['datepub_3_1_3'];
    $init_datepub_3_1_4 = $row['datepub_3_1_4'];
    $init_name_3_1_1 = $row['name_3_1_1'];
    $init_name_3_1_2 = $row['name_3_1_2'];
    $init_name_3_1_3 = $row['name_3_1_3'];
    $init_name_3_1_4 = $row['name_3_1_4'];
    $init_no_citation_3_1_1 = $row['no_citation_3_1_1'];
    $init_no_citation_3_1_2 = $row['no_citation_3_1_2'];
    $init_no_citation_3_1_3 = $row['no_citation_3_1_3'];
    $init_no_citation_3_1_4 = $row['no_citation_3_1_4'];
    $init_index_citation_3_1_1 = $row['index_citation_3_1_1'];
    $init_index_citation_3_1_2 = $row['index_citation_3_1_2'];
    $init_index_citation_3_1_3 = $row['index_citation_3_1_3'];
    $init_index_citation_3_1_4 = $row['index_citation_3_1_4'];
    $init_year_citation_3_1_1 = $row['year_citation_3_1_1'];
    $init_year_citation_3_1_2 = $row['year_citation_3_1_2'];
    $init_year_citation_3_1_3 = $row['year_citation_3_1_3'];
    $init_year_citation_3_1_4 = $row['year_citation_3_1_4'];
    $init_title_3_2_1 = $row['title_3_2_1'];
    $init_title_3_2_2 = $row['title_3_2_2'];
    $init_title_3_2_3 = $row['title_3_2_3'];
    $init_title_3_2_4 = $row['title_3_2_4'];
    $init_datepub_3_2_1 = $row['datepub_3_2_1'];
    $init_datepub_3_2_2 = $row['datepub_3_2_2'];
    $init_datepub_3_2_3 = $row['datepub_3_2_3'];
    $init_datepub_3_2_4 = $row['datepub_3_2_4'];
    $init_name_3_2_1 = $row['name_3_2_1'];
    $init_name_3_2_2 = $row['name_3_2_2'];
    $init_name_3_2_3 = $row['name_3_2_3'];
    $init_name_3_2_4 = $row['name_3_2_4'];
    $init_no_citation_3_2_1 = $row['no_citation_3_2_1'];
    $init_no_citation_3_2_2 = $row['no_citation_3_2_2'];
    $init_no_citation_3_2_3 = $row['no_citation_3_2_3'];
    $init_no_citation_3_2_4 = $row['no_citation_3_2_4'];
    $init_index_citation_3_2_1 = $row['index_citation_3_2_1'];
    $init_index_citation_3_2_2 = $row['index_citation_3_2_2'];
    $init_index_citation_3_2_3 = $row['index_citation_3_2_3'];
    $init_index_citation_3_2_4 = $row['index_citation_3_2_4'];
    $init_year_citation_3_2_1 = $row['year_citation_3_2_1'];
    $init_year_citation_3_2_2 = $row['year_citation_3_2_2'];
    $init_year_citation_3_2_3 = $row['year_citation_3_2_3'];
    $init_year_citation_3_2_4 = $row['year_citation_3_2_4'];

}
if (isset($_POST['submit_btn'])) {
    
    $scoreSA = $_POST['score_SA'];
    $scoreCO = $_POST['score_CO'];
    $scoreLR = $_POST['score_LR'];
    $scoreC = $_POST['score_C'];
    $scoreLocal = $_POST['score_local_result'];
    $scoreInternational = $_POST['score_international_result'];

    if ($scoreSA == "" AND $scoreCO == "" AND $scoreLR == "" AND $scoreC == "" AND $scoreLocal == "" AND $scoreInternational == "") {
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
        $title_1_1_1 = $_POST['title_1_1_1'];
        $title_1_1_2 = $_POST['title_1_1_2'];
        $title_1_1_3 = $_POST['title_1_1_3'];
        $title_1_1_4 = $_POST['title_1_1_4'];
        $type_1_1_1 = $_POST['type_1_1_1'];
        $type_1_1_2 = $_POST['type_1_1_2'];
        $type_1_1_3 = $_POST['type_1_1_3'];
        $type_1_1_4 = $_POST['type_1_1_4'];
        $name_1_1_1 = $_POST['name_1_1_1'];
        $name_1_1_2 = $_POST['name_1_1_2'];
        $name_1_1_3 = $_POST['name_1_1_3'];
        $name_1_1_4 = $_POST['name_1_1_4'];
        $rev_1_1_1 = $_POST['rev_1_1_1'];
        $rev_1_1_2 = $_POST['rev_1_1_2'];
        $rev_1_1_3 = $_POST['rev_1_1_3'];
        $rev_1_1_4 = $_POST['rev_1_1_4'];
        $int_1_1_1 = $_POST['int_1_1_1'];
        $int_1_1_2 = $_POST['int_1_1_2'];
        $int_1_1_3 = $_POST['int_1_1_3'];
        $int_1_1_4 = $_POST['int_1_1_4'];
        $datepub_1_1_1 = $_POST['datepub_1_1_1'];
        $datepub_1_1_2 = $_POST['datepub_1_1_2'];
        $datepub_1_1_3 = $_POST['datepub_1_1_3'];
        $datepub_1_1_4 = $_POST['datepub_1_1_4'];
        $title_1_2_1 = $_POST['title_1_2_1'];
        $title_1_2_2 = $_POST['title_1_2_2'];
        $title_1_2_3 = $_POST['title_1_2_3'];
        $title_1_2_4 = $_POST['title_1_2_4'];
        $type_1_2_1 = $_POST['type_1_2_1'];
        $type_1_2_2 = $_POST['type_1_2_2'];
        $type_1_2_3 = $_POST['type_1_2_3'];
        $type_1_2_4 = $_POST['type_1_2_4'];
        $name_1_2_1 = $_POST['name_1_2_1'];
        $name_1_2_2 = $_POST['name_1_2_2'];
        $name_1_2_3 = $_POST['name_1_2_3'];
        $name_1_2_4 = $_POST['name_1_2_4'];
        $rev_1_2_1 = $_POST['rev_1_2_1'];
        $rev_1_2_2 = $_POST['rev_1_2_2'];
        $rev_1_2_3 = $_POST['rev_1_2_3'];
        $rev_1_2_4 = $_POST['rev_1_2_4'];
        $int_1_2_1 = $_POST['int_1_2_1'];
        $int_1_2_2 = $_POST['int_1_2_2'];
        $int_1_2_3 = $_POST['int_1_2_3'];
        $int_1_2_4 = $_POST['int_1_2_4'];
        $datepub_1_2_1 = $_POST['datepub_1_2_1'];
        $datepub_1_2_2 = $_POST['datepub_1_2_2'];
        $datepub_1_2_3 = $_POST['datepub_1_2_3'];
        $datepub_1_2_4 = $_POST['datepub_1_2_4'];
        $title_2_1_1 = $_POST['title_2_1_1'];
        $title_2_1_2 = $_POST['title_2_1_2'];
        $title_2_1_3 = $_POST['title_2_1_3'];
        $title_2_1_4 = $_POST['title_2_1_4'];
        $datecom_2_1_1 = $_POST['datecom_2_1_1'];
        $datecom_2_1_2 = $_POST['datecom_2_1_2'];
        $datecom_2_1_3 = $_POST['datecom_2_1_3'];
        $datecom_2_1_4 = $_POST['datecom_2_1_4'];
        $nameproj_2_1_1 = $_POST['nameproj_2_1_1'];
        $nameproj_2_1_2 = $_POST['nameproj_2_1_2'];
        $nameproj_2_1_3 = $_POST['nameproj_2_1_3'];
        $nameproj_2_1_4 = $_POST['nameproj_2_1_4'];
        $fund_2_1_1 = $_POST['fund_2_1_1'];
        $fund_2_1_2 = $_POST['fund_2_1_2'];
        $fund_2_1_3 = $_POST['fund_2_1_3'];
        $fund_2_1_4 = $_POST['fund_2_1_4'];
        $dateimp_2_1_1 = $_POST['dateimp_2_1_1'];
        $dateimp_2_1_2 = $_POST['dateimp_2_1_2'];
        $dateimp_2_1_3 = $_POST['dateimp_2_1_3'];
        $dateimp_2_1_4 = $_POST['dateimp_2_1_4'];
        $title_2_2_1 = $_POST['title_2_2_1'];
        $title_2_2_2 = $_POST['title_2_2_2'];
        $title_2_2_3 = $_POST['title_2_2_3'];
        $title_2_2_4 = $_POST['title_2_2_4'];
        $datecom_2_2_1 = $_POST['datecom_2_2_1'];
        $datecom_2_2_2 = $_POST['datecom_2_2_2'];
        $datecom_2_2_3 = $_POST['datecom_2_2_3'];
        $datecom_2_2_4 = $_POST['datecom_2_2_4'];
        $nameproj_2_2_1 = $_POST['nameproj_2_2_1'];
        $nameproj_2_2_2 = $_POST['nameproj_2_2_2'];
        $nameproj_2_2_3 = $_POST['nameproj_2_2_3'];
        $nameproj_2_2_4 = $_POST['nameproj_2_2_4'];
        $fund_2_2_1 = $_POST['fund_2_2_1'];
        $fund_2_2_2 = $_POST['fund_2_2_2'];
        $fund_2_2_3 = $_POST['fund_2_2_3'];
        $fund_2_2_4 = $_POST['fund_2_2_4'];
        $dateimp_2_2_1 = $_POST['dateimp_2_2_1'];
        $dateimp_2_2_2 = $_POST['dateimp_2_2_2'];
        $dateimp_2_2_3 = $_POST['dateimp_2_2_3'];
        $dateimp_2_2_4 = $_POST['dateimp_2_2_4'];
        $title_3_1_1 = $_POST['title_3_1_1'];
        $title_3_1_2 = $_POST['title_3_1_2'];
        $title_3_1_3 = $_POST['title_3_1_3'];
        $title_3_1_4 = $_POST['title_3_1_4'];
        $datepub_3_1_1 = $_POST['datepub_3_1_1'];
        $datepub_3_1_2 = $_POST['datepub_3_1_2'];
        $datepub_3_1_3 = $_POST['datepub_3_1_3'];
        $datepub_3_1_4 = $_POST['datepub_3_1_4'];
        $name_3_1_1 = $_POST['name_3_1_1'];
        $name_3_1_2 = $_POST['name_3_1_2'];
        $name_3_1_3 = $_POST['name_3_1_3'];
        $name_3_1_4 = $_POST['name_3_1_4'];
        $no_citation_3_1_1 = $_POST['no_citation_3_1_1'];
        $no_citation_3_1_2 = $_POST['no_citation_3_1_2'];
        $no_citation_3_1_3 = $_POST['no_citation_3_1_3'];
        $no_citation_3_1_4 = $_POST['no_citation_3_1_4'];
        $index_citation_3_1_1 = $_POST['index_citation_3_1_1'];
        $index_citation_3_1_2 = $_POST['index_citation_3_1_2'];
        $index_citation_3_1_3 = $_POST['index_citation_3_1_3'];
        $index_citation_3_1_4 = $_POST['index_citation_3_1_4'];
        $year_citation_3_1_1 = $_POST['year_citation_3_1_1'];
        $year_citation_3_1_2 = $_POST['year_citation_3_1_2'];
        $year_citation_3_1_3 = $_POST['year_citation_3_1_3'];
        $year_citation_3_1_4 = $_POST['year_citation_3_1_4'];
        $title_3_2_1 = $_POST['title_3_2_1'];
        $title_3_2_2 = $_POST['title_3_2_2'];
        $title_3_2_3 = $_POST['title_3_2_3'];
        $title_3_2_4 = $_POST['title_3_2_4'];
        $datepub_3_2_1 = $_POST['datepub_3_2_1'];
        $datepub_3_2_2 = $_POST['datepub_3_2_2'];
        $datepub_3_2_3 = $_POST['datepub_3_2_3'];
        $datepub_3_2_4 = $_POST['datepub_3_2_4'];
        $name_3_2_1 = $_POST['name_3_2_1'];
        $name_3_2_2 = $_POST['name_3_2_2'];
        $name_3_2_3 = $_POST['name_3_2_3'];
        $name_3_2_4 = $_POST['name_3_2_4'];
        $no_citation_3_2_1 = $_POST['no_citation_3_2_1'];
        $no_citation_3_2_2 = $_POST['no_citation_3_2_2'];
        $no_citation_3_2_3 = $_POST['no_citation_3_2_3'];
        $no_citation_3_2_4 = $_POST['no_citation_3_2_4'];
        $index_citation_3_2_1 = $_POST['index_citation_3_2_1'];
        $index_citation_3_2_2 = $_POST['index_citation_3_2_2'];
        $index_citation_3_2_3 = $_POST['index_citation_3_2_3'];
        $index_citation_3_2_4 = $_POST['index_citation_3_2_4'];
        $year_citation_3_2_1 = $_POST['year_citation_3_2_1'];
        $year_citation_3_2_2 = $_POST['year_citation_3_2_2'];
        $year_citation_3_2_3 = $_POST['year_citation_3_2_3'];
        $year_citation_3_2_4 = $_POST['year_citation_3_2_4'];
        

        $conn->query("INSERT INTO form2_a (
            title_1_1_1, title_1_1_2, title_1_1_3, title_1_1_4, 
            type_1_1_1, type_1_1_2, type_1_1_3, type_1_1_4, 
            name_1_1_1, name_1_1_2, name_1_1_3, name_1_1_4, 
            rev_1_1_1, rev_1_1_2, rev_1_1_3, rev_1_1_4, 
            int_1_1_1, int_1_1_2, int_1_1_3, int_1_1_4, 
            datepub_1_1_1, datepub_1_1_2, datepub_1_1_3, datepub_1_1_4,
            title_1_2_1, title_1_2_2, title_1_2_3, title_1_2_4, 
            type_1_2_1, type_1_2_2, type_1_2_3, type_1_2_4, 
            name_1_2_1, name_1_2_2, name_1_2_3, name_1_2_4, 
            rev_1_2_1, rev_1_2_2, rev_1_2_3, rev_1_2_4, 
            int_1_2_1, int_1_2_2, int_1_2_3, int_1_2_4, 
            datepub_1_2_1, datepub_1_2_2, datepub_1_2_3, datepub_1_2_4, 
            title_2_1_1, title_2_1_2, title_2_1_3, title_2_1_4, 
            datecom_2_1_1, datecom_2_1_2, datecom_2_1_3, datecom_2_1_4, 
            nameproj_2_1_1, nameproj_2_1_2, nameproj_2_1_3, nameproj_2_1_4, 
            fund_2_1_1, fund_2_1_2, fund_2_1_3, fund_2_1_4, 
            dateimp_2_1_1, dateimp_2_1_2, dateimp_2_1_3, dateimp_2_1_4, 
            title_2_2_1, title_2_2_2, title_2_2_3, title_2_2_4, 
            datecom_2_2_1, datecom_2_2_2, datecom_2_2_3, datecom_2_2_4,
            nameproj_2_2_1, nameproj_2_2_2, nameproj_2_2_3, nameproj_2_2_4, 
            fund_2_2_1, fund_2_2_2, fund_2_2_3, fund_2_2_4, 
            dateimp_2_2_1, dateimp_2_2_2, dateimp_2_2_3, dateimp_2_2_4, 
            title_3_1_1, title_3_1_2, title_3_1_3, title_3_1_4, 
            datepub_3_1_1, datepub_3_1_2, datepub_3_1_3, datepub_3_1_4, 
            name_3_1_1, name_3_1_2, name_3_1_3, name_3_1_4, 
            no_citation_3_1_1, no_citation_3_1_2, no_citation_3_1_3, no_citation_3_1_4, 
            index_citation_3_1_1, index_citation_3_1_2, index_citation_3_1_3, index_citation_3_1_4, 
            year_citation_3_1_1, year_citation_3_1_2, year_citation_3_1_3, year_citation_3_1_4, 
            title_3_2_1, title_3_2_2, title_3_2_3, title_3_2_4, 
            datepub_3_2_1, datepub_3_2_2, datepub_3_2_3, datepub_3_2_4, 
            name_3_2_1, name_3_2_2, name_3_2_3, name_3_2_4, 
            no_citation_3_2_1, no_citation_3_2_2, no_citation_3_2_3, no_citation_3_2_4, 
            index_citation_3_2_1, index_citation_3_2_2, index_citation_3_2_3, index_citation_3_2_4, 
            year_citation_3_2_1, year_citation_3_2_2, year_citation_3_2_3, year_citation_3_2_4,
            user_id)
        VALUES (
            '$title_1_1_1', '$title_1_1_2', '$title_1_1_3', '$title_1_1_4', 
            '$type_1_1_1', '$type_1_1_2', '$type_1_1_3', '$type_1_1_4',
            '$name_1_1_1', '$name_1_1_2', '$name_1_1_3', '$name_1_1_4',
            '$rev_1_1_1', '$rev_1_1_2', '$rev_1_1_3', '$rev_1_1_4',
            '$int_1_1_1', '$int_1_1_2', '$int_1_1_3', '$int_1_1_4',
            '$datepub_1_1_1', '$datepub_1_1_2', '$datepub_1_1_3', '$datepub_1_1_4',
            '$title_1_2_1', '$title_1_2_2', '$title_1_2_3', '$title_1_2_4',
            '$type_1_2_1', '$type_1_2_2', '$type_1_2_3', '$type_1_2_4',
            '$name_1_2_1', '$name_1_2_2', '$name_1_2_3', '$name_1_2_4',
            '$rev_1_2_1', '$rev_1_2_2', '$rev_1_2_3', '$rev_1_2_4',
            '$int_1_2_1', '$int_1_2_2', '$int_1_2_3', '$int_1_2_4',
            '$datepub_1_2_1', '$datepub_1_2_2', '$datepub_1_2_3', '$datepub_1_2_4',
            '$title_2_1_1', '$title_2_1_2', '$title_2_1_3', '$title_2_1_4',
            '$datecom_2_1_1', '$datecom_2_1_2', '$datecom_2_1_3', '$datecom_2_1_4',
            '$nameproj_2_1_1', '$nameproj_2_1_2', '$nameproj_2_1_3', '$nameproj_2_1_4',
            '$fund_2_1_1', '$fund_2_1_2', '$fund_2_1_3', '$fund_2_1_4',
            '$dateimp_2_1_1', '$dateimp_2_1_2', '$dateimp_2_1_3', '$dateimp_2_1_4',
            '$title_2_2_1', '$title_2_2_2', '$title_2_2_3', '$title_2_2_4',
            '$datecom_2_2_1', '$datecom_2_2_2', '$datecom_2_2_3', '$datecom_2_2_4',
            '$nameproj_2_2_1', '$nameproj_2_2_2', '$nameproj_2_2_3', '$nameproj_2_2_4',
            '$fund_2_2_1', '$fund_2_2_2', '$fund_2_2_3', '$fund_2_2_4',
            '$dateimp_2_2_1', '$dateimp_2_2_2', '$dateimp_2_2_3', '$dateimp_2_2_4',
            '$title_3_1_1', '$title_3_1_2', '$title_3_1_3', '$title_3_1_4',
            '$datepub_3_1_1', '$datepub_3_1_2', '$datepub_3_1_3', '$datepub_3_1_4',
            '$name_3_1_1', '$name_3_1_2', '$name_3_1_3', '$name_3_1_4',
            '$no_citation_3_1_1', '$no_citation_3_1_2', '$no_citation_3_1_3', '$no_citation_3_1_4',
            '$index_citation_3_1_1', '$index_citation_3_1_2', '$index_citation_3_1_3', '$index_citation_3_1_4',
            '$year_citation_3_1_1', '$year_citation_3_1_2', '$year_citation_3_1_3', '$year_citation_3_1_4',
            '$title_3_2_1', '$title_3_2_2', '$title_3_2_3', '$title_3_2_4',
            '$datepub_3_2_1', '$datepub_3_2_2', '$datepub_3_2_3', '$datepub_3_2_4',
            '$name_3_2_1', '$name_3_2_2', '$name_3_2_3', '$name_3_2_4',
            '$no_citation_3_2_1', '$no_citation_3_2_2', '$no_citation_3_2_3', '$no_citation_3_2_4',
            '$index_citation_3_2_1', '$index_citation_3_2_2', '$index_citation_3_2_3', '$index_citation_3_2_4',
            '$year_citation_3_2_1', '$year_citation_3_2_2', '$year_citation_3_2_3', '$year_citation_3_2_4',
            $id)
        ON DUPLICATE KEY UPDATE
            title_1_1_1 = VALUES(title_1_1_1),
            title_1_1_2 = VALUES(title_1_1_2),
            title_1_1_3 = VALUES(title_1_1_3),
            title_1_1_4 = VALUES(title_1_1_4),
            type_1_1_1 = VALUES(type_1_1_1),
            type_1_1_2 = VALUES(type_1_1_2),
            type_1_1_3 = VALUES(type_1_1_3),
            type_1_1_4 = VALUES(type_1_1_4),
            name_1_1_1 = VALUES(name_1_1_1),
            name_1_1_2 = VALUES(name_1_1_2),
            name_1_1_3 = VALUES(name_1_1_3),
            name_1_1_4 = VALUES(name_1_1_4),
            rev_1_1_1 = VALUES(rev_1_1_1),
            rev_1_1_2 = VALUES(rev_1_1_2),
            rev_1_1_3 = VALUES(rev_1_1_3),
            rev_1_1_4 = VALUES(rev_1_1_4),
            int_1_1_1 = VALUES(int_1_1_1),
            int_1_1_2 = VALUES(int_1_1_2),
            int_1_1_3 = VALUES(int_1_1_3),
            int_1_1_4 = VALUES(int_1_1_4),
            datepub_1_1_1 = VALUES(datepub_1_1_1),
            datepub_1_1_2 = VALUES(datepub_1_1_2),
            datepub_1_1_3 = VALUES(datepub_1_1_3),
            datepub_1_1_4 = VALUES(datepub_1_1_4),
            title_1_2_1 = VALUES(title_1_2_1),
            title_1_2_2 = VALUES(title_1_2_2),
            title_1_2_3 = VALUES(title_1_2_3),
            title_1_2_4 = VALUES(title_1_2_4),
            type_1_2_1 = VALUES(type_1_2_1),
            type_1_2_2 = VALUES(type_1_2_2),
            type_1_2_3 = VALUES(type_1_2_3),
            type_1_2_4 = VALUES(type_1_2_4),
            name_1_2_1 = VALUES(name_1_2_1),
            name_1_2_2 = VALUES(name_1_2_2),
            name_1_2_3 = VALUES(name_1_2_3),
            name_1_2_4 = VALUES(name_1_2_4),
            rev_1_2_1 = VALUES(rev_1_2_1),
            rev_1_2_2 = VALUES(rev_1_2_2),
            rev_1_2_3 = VALUES(rev_1_2_3),
            rev_1_2_4 = VALUES(rev_1_2_4),
            int_1_2_1 = VALUES(int_1_2_1),
            int_1_2_2 = VALUES(int_1_2_2),
            int_1_2_3 = VALUES(int_1_2_3),
            int_1_2_4 = VALUES(int_1_2_4),
            datepub_1_2_1 = VALUES(datepub_1_2_1),
            datepub_1_2_2 = VALUES(datepub_1_2_2),
            datepub_1_2_3 = VALUES(datepub_1_2_3),
            datepub_1_2_4 = VALUES(datepub_1_2_4),

            title_2_1_1 = VALUES(title_2_1_1),
            title_2_1_2 = VALUES(title_2_1_2),
            title_2_1_3 = VALUES(title_2_1_3),
            title_2_1_4 = VALUES(title_2_1_4),
            datecom_2_1_1 = VALUES(datecom_2_1_1),
            datecom_2_1_2 = VALUES(datecom_2_1_2),
            datecom_2_1_3 = VALUES(datecom_2_1_3),
            datecom_2_1_4 = VALUES(datecom_2_1_4),
            nameproj_2_1_1 = VALUES(nameproj_2_1_1),
            nameproj_2_1_2 = VALUES(nameproj_2_1_2),
            nameproj_2_1_3 = VALUES(nameproj_2_1_3),
            nameproj_2_1_4 = VALUES(nameproj_2_1_4),
            fund_2_1_1 = VALUES(fund_2_1_1),
            fund_2_1_2 = VALUES(fund_2_1_2),
            fund_2_1_3 = VALUES(fund_2_1_3),
            fund_2_1_4 = VALUES(fund_2_1_4),
            dateimp_2_1_1 = VALUES(dateimp_2_1_1),
            dateimp_2_1_2 = VALUES(dateimp_2_1_2),
            dateimp_2_1_3 = VALUES(dateimp_2_1_3),
            dateimp_2_1_4 = VALUES(dateimp_2_1_4),

            title_2_2_1 = VALUES(title_2_2_1),
            title_2_2_2 = VALUES(title_2_2_2),
            title_2_2_3 = VALUES(title_2_2_3),
            title_2_2_4 = VALUES(title_2_2_4),
            datecom_2_2_1 = VALUES(datecom_2_2_1),
            datecom_2_2_2 = VALUES(datecom_2_2_2),
            datecom_2_2_3 = VALUES(datecom_2_2_3),
            datecom_2_2_4 = VALUES(datecom_2_2_4),
            nameproj_2_2_1 = VALUES(nameproj_2_2_1),
            nameproj_2_2_2 = VALUES(nameproj_2_2_2),
            nameproj_2_2_3 = VALUES(nameproj_2_2_3),
            nameproj_2_2_4 = VALUES(nameproj_2_2_4),
            fund_2_2_1 = VALUES(fund_2_2_1),
            fund_2_2_2 = VALUES(fund_2_2_2),
            fund_2_2_3 = VALUES(fund_2_2_3),
            fund_2_2_4 = VALUES(fund_2_2_4),
            dateimp_2_2_1 = VALUES(dateimp_2_2_1),
            dateimp_2_2_2 = VALUES(dateimp_2_2_2),
            dateimp_2_2_3 = VALUES(dateimp_2_2_3),
            dateimp_2_2_4 = VALUES(dateimp_2_2_4),

            title_3_1_1 = VALUES(title_3_1_1),
            title_3_1_2 = VALUES(title_3_1_2),
            title_3_1_3 = VALUES(title_3_1_3),
            title_3_1_4 = VALUES(title_3_1_4),
            datepub_3_1_1 = VALUES(datepub_3_1_1),
            datepub_3_1_2 = VALUES(datepub_3_1_2),
            datepub_3_1_3 = VALUES(datepub_3_1_3),
            datepub_3_1_4 = VALUES(datepub_3_1_4),
            name_3_1_1 = VALUES(name_3_1_1),
            name_3_1_2 = VALUES(name_3_1_2),
            name_3_1_3 = VALUES(name_3_1_3),
            name_3_1_4 = VALUES(name_3_1_4),
            no_citation_3_1_1 = VALUES(no_citation_3_1_1),
            no_citation_3_1_2 = VALUES(no_citation_3_1_2),
            no_citation_3_1_3 = VALUES(no_citation_3_1_3),
            no_citation_3_1_4 = VALUES(no_citation_3_1_4),
            index_citation_3_1_1 = VALUES(index_citation_3_1_1),
            index_citation_3_1_2 = VALUES(index_citation_3_1_2),
            index_citation_3_1_3 = VALUES(index_citation_3_1_3),
            index_citation_3_1_4 = VALUES(index_citation_3_1_4),
            year_citation_3_1_1 = VALUES(year_citation_3_1_1),
            year_citation_3_1_2 = VALUES(year_citation_3_1_2),
            year_citation_3_1_3 = VALUES(year_citation_3_1_3),
            year_citation_3_1_4 = VALUES(year_citation_3_1_4),

            title_3_2_1 = VALUES(title_3_2_1),
            title_3_2_2 = VALUES(title_3_2_2),
            title_3_2_3 = VALUES(title_3_2_3),
            title_3_2_4 = VALUES(title_3_2_4),
            datepub_3_2_1 = VALUES(datepub_3_2_1),
            datepub_3_2_2 = VALUES(datepub_3_2_2),
            datepub_3_2_3 = VALUES(datepub_3_2_3),
            datepub_3_2_4 = VALUES(datepub_3_2_4),
            name_3_2_1 = VALUES(name_3_2_1),
            name_3_2_2 = VALUES(name_3_2_2),
            name_3_2_3 = VALUES(name_3_2_3),
            name_3_2_4 = VALUES(name_3_2_4),
            no_citation_3_2_1 = VALUES(no_citation_3_2_1),
            no_citation_3_2_2 = VALUES(no_citation_3_2_2),
            no_citation_3_2_3 = VALUES(no_citation_3_2_3),
            no_citation_3_2_4 = VALUES(no_citation_3_2_4),
            index_citation_3_2_1 = VALUES(index_citation_3_2_1),
            index_citation_3_2_2 = VALUES(index_citation_3_2_2),
            index_citation_3_2_3 = VALUES(index_citation_3_2_3),
            index_citation_3_2_4 = VALUES(index_citation_3_2_4),
            year_citation_3_2_1 = VALUES(year_citation_3_2_1),
            year_citation_3_2_2 = VALUES(year_citation_3_2_2),
            year_citation_3_2_3 = VALUES(year_citation_3_2_3),
            year_citation_3_2_4 = VALUES(year_citation_3_2_4);
            "
        ) or die($conn->error);


        $conn->query("UPDATE kra_2 SET 
                 Crit_A_SA = '$scoreSA', 
                 Crit_A_CA  = '$scoreCO', 
                 Crit_A_LR = '$scoreLR', 
                 Crit_A_Contrib = '$scoreC',
                 Crit_A_Local = '$scoreLocal',
                 Crit_A_Local_Allowed = IF(Crit_A_Local > 40, 40, Crit_A_Local),
                 Crit_A_International = '$scoreInternational',
                 Crit_A_International_Allowed = IF(Crit_A_International > 60, 60, Crit_A_International),
                 Crit_A_total = Crit_A_SA + Crit_A_CA +  Crit_A_LR +  Crit_A_Contrib +  Crit_A_Local +  Crit_A_International,
                 Crit_A_total_allowed = IF(
                     Crit_A_SA + Crit_A_CA + Crit_A_LR + Crit_A_Contrib + Crit_A_Local_Allowed + Crit_A_International_Allowed > 100,
                     100,
                     Crit_A_SA + Crit_A_CA + Crit_A_LR + Crit_A_Contrib + Crit_A_Local_Allowed + Crit_A_International_Allowed),
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
    <link rel="stylesheet" href="./CSS/Global.css">
    <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>FORM2_A</title>
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
<form method="POST" action="FORM2_A.php">
    <h1 class="title">CRITERION A - RESEARCH OUTPUTS (MAX = 100 POINTS)</h1>
    <br><br><br>
    <h2 class="">1. FOR EVERY SCHOLARLY RESEARCH PAPER/EDUCATIONAL OR TECHNICAL ARTICLE AND OTHER OUTPUTS PUBLISHED</h2>
    <h2 class="page_title">1.1 SOLE AUTHORSHIP</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Research Output</td>
            <td>Type of Research Output</td>
            <td>Name of Journal / Publisher</td>
            <td>Reviewer or Its Equivalent</td>
            <td>International Indexing Body</td>
            <td>Date Published</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="SA_1" name = "title_1_1_1" value = "<?php echo isset($init_title_1_1_1) ? $init_title_1_1_1 : ""; ?>" type="text"></td>
            <td>
                <select name="type_1_1_1" id="SA_RO_1">
                    <option value = "<?php echo isset($init_type_1_1_1) ? $init_type_1_1_1 : "None"; ?>">
                        <?php echo isset($init_type_1_1_1) ? $init_type_1_1_1 : "Select Option"; ?>
                    </option>
                    <option value="Book">Book</option>
                    <option value="Journal Article">Journal Article</option>
                    <option value="Book Chapter">Book Chapter</option>
                    <option value="Monograph">Monograph</option>
                    <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>
            <td><input id="SA_2" name = "name_1_1_1" value = "<?php echo isset($init_name_1_1_1) ? $init_name_1_1_1 : ""; ?>" type="text"></td>
            <td><input id="SA_3" name = "rev_1_1_1" value = "<?php echo isset($init_rev_1_1_1) ? $init_rev_1_1_1 : ""; ?>" type="text"></td>
            <td><input id="SA_4" name = "int_1_1_1" value = "<?php echo isset($init_int_1_1_1) ? $init_int_1_1_1 : ""; ?>" type="text"></td>
            <td><input id="SA_5" name = "datepub_1_1_1" value = "<?php echo isset($init_datepub_1_1_1) ? $init_datepub_1_1_1 : ""; ?>" type="date"></td>
            <td><input id="SA_FS_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="SA_6" name = "title_1_1_2" value = "<?php echo isset($init_title_1_1_2) ? $init_title_1_1_2 : ""; ?>" type="text"></td>
            <td>
            <select name="type_1_1_2" id="SA_RO_2">
                    <option value = "<?php echo isset($init_type_1_1_2) ? $init_type_1_1_2 : "None"; ?>">
                        <?php echo isset($init_type_1_1_2) ? $init_type_1_1_2 : "Select Option"; ?>
                    </option>
                    <option value="Book">Book</option>
                    <option value="Journal Article">Journal Article</option>
                    <option value="Book Chapter">Book Chapter</option>
                    <option value="Monograph">Monograph</option>
                    <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>
            <td><input id="SA_7" name = "name_1_1_2" value = "<?php echo isset($init_name_1_1_2) ? $init_name_1_1_2 : ""; ?>" type="text"></td>
            <td><input id="SA_8" name = "rev_1_1_2" value = "<?php echo isset($init_rev_1_1_2) ? $init_rev_1_1_2 : ""; ?>" type="text"></td>
            <td><input id="SA_9" name = "int_1_1_2" value = "<?php echo isset($init_int_1_1_2) ? $init_int_1_1_2 : ""; ?>" type="text"></td>
            <td><input id="SA_10" name = "datepub_1_1_2" value = "<?php echo isset($init_datepub_1_1_2) ? $init_datepub_1_1_2 : ""; ?>" type="date"></td>
            <td><input id="SA_FS_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="SA_11" name = "title_1_1_3" value = "<?php echo isset($init_title_1_1_3) ? $init_title_1_1_3 : ""; ?>" type="text"></td>

            <td>
                <select name="type_1_1_3" id="SA_RO_3">
                    <option value = "<?php echo isset($init_type_1_1_3) ? $init_type_1_1_3 : "None"; ?>">
                        <?php echo isset($init_type_1_1_3) ? $init_type_1_1_3 : "Select Option"; ?>
                    </option>
                    <option value="Book">Book</option>
                    <option value="Journal Article">Journal Article</option>
                    <option value="Book Chapter">Book Chapter</option>
                    <option value="Monograph">Monograph</option>
                    <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>

            <td><input id="SA_12" name = "name_1_1_3" value = "<?php echo isset($init_name_1_1_3) ? $init_name_1_1_3 : ""; ?>" type="text"></td>
            <td><input id="SA_13" name = "rev_1_1_3" value = "<?php echo isset($init_rev_1_1_3) ? $init_rev_1_1_3 : ""; ?>" type="text"></td>
            <td><input id="SA_14" name = "int_1_1_3" value = "<?php echo isset($init_int_1_1_3) ? $init_int_1_1_3 : ""; ?>" type="text"></td>
            <td><input id="SA_15" name = "datepub_1_1_3" value = "<?php echo isset($init_datepub_1_1_3) ? $init_datepub_1_1_3 : ""; ?>" type="date"></td>
            <td><input id="SA_FS_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="SA_16" name = "title_1_1_4" value = "<?php echo isset($init_title_1_1_4) ? $init_title_1_1_4 : ""; ?>" type="text"></td>
            <td>
                <select name="type_1_1_4" id="SA_RO_4">
                    <option value = "<?php echo isset($init_type_1_1_4) ? $init_type_1_1_4 : "None"; ?>">
                        <?php echo isset($init_type_1_1_4) ? $init_type_1_1_4 : "Select Option"; ?>
                    </option>
                    <option value="Book">Book</option>
                    <option value="Journal Article">Journal Article</option>
                    <option value="Book Chapter">Book Chapter</option>
                    <option value="Monograph">Monograph</option>
                    <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>

            <td><input id="SA_17" name = "name_1_1_4" value = "<?php echo isset($init_name_1_1_4) ? $init_name_1_1_4 : ""; ?>" type="text"></td>
            <td><input id="SA_18" name = "rev_1_1_4" value = "<?php echo isset($init_rev_1_1_4) ? $init_rev_1_1_4 : ""; ?>" type="text"></td>
            <td><input id="SA_19" name = "int_1_1_4" value = "<?php echo isset($init_int_1_1_4) ? $init_int_1_1_4 : ""; ?>" type="text"></td>
            <td><input id="SA_20" name = "datepub_1_1_4" value = "<?php echo isset($init_datepub_1_1_4) ? $init_datepub_1_1_4 : ""; ?>" type="date"></td>
            <td><input id="SA_FS_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_SA_FS()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_SA" id="final_SA"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.2 Co-authorship</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Research Output</td>
            <td>Type of Research Output</td>
            <td>Name of Journal / Publisher</td>
            <td>Reviewer or Its Equivalent</td>
            <td>International Indexing Body</td>
            <td>Date Published</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="CO_1" name = "title_1_2_1" value = "<?php echo isset($init_title_1_2_1) ? $init_title_1_2_1 : ""; ?>" type="text"></td>
            <td>

                <select name="type_1_2_1" id="CO_RO_1">
                        <option value = "<?php echo isset($init_type_1_2_1) ? $init_type_1_2_1 : "None"; ?>">
                            <?php echo isset($init_type_1_2_1) ? $init_type_1_2_1 : "Select Option"; ?>
                        </option>
                        <option value="Book">Book</option>
                        <option value="Journal Article">Journal Article</option>
                        <option value="Book Chapter">Book Chapter</option>
                        <option value="Monograph">Monograph</option>
                        <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>
            <td><input id="CO_2" name = "name_1_2_1" value = "<?php echo isset($init_name_1_2_1) ? $init_name_1_2_1 : ""; ?>" type="text"></td>
            <td><input id="CO_3" name = "rev_1_2_1" value = "<?php echo isset($init_rev_1_2_1) ? $init_rev_1_2_1 : ""; ?>" type="text"></td>
            <td><input id="CO_4" name = "int_1_2_1" value = "<?php echo isset($init_int_1_2_1) ? $init_int_1_2_1 : ""; ?>" type="text"></td>
            <td><input id="CO_5" name = "datepub_1_2_1" value = "<?php echo isset($init_datepub_1_2_1) ? $init_datepub_1_2_1 : ""; ?>" type="date"></td>
            <td><input id="CO_FS_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="CO_6" name = "title_1_2_2" value = "<?php echo isset($init_title_1_2_2) ? $init_title_1_2_2 : ""; ?>" type="text"></td>
            <td>
                <select name="type_1_2_2" id="CO_RO_2">
                        <option value = "<?php echo isset($init_type_1_2_2) ? $init_type_1_2_2 : "None"; ?>">
                            <?php echo isset($init_type_1_2_2) ? $init_type_1_2_2 : "Select Option"; ?>
                        </option>
                        <option value="Book">Book</option>
                        <option value="Journal Article">Journal Article</option>
                        <option value="Book Chapter">Book Chapter</option>
                        <option value="Monograph">Monograph</option>
                        <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>
            <td><input id="CO_7" name = "name_1_2_2" value = "<?php echo isset($init_name_1_2_2) ? $init_name_1_2_2 : ""; ?>" type="text"></td>
            <td><input id="CO_8" name = "rev_1_2_2" value = "<?php echo isset($init_rev_1_2_2) ? $init_rev_1_2_2 : ""; ?>" type="text"></td>
            <td><input id="CO_9" name = "int_1_2_2" value = "<?php echo isset($init_int_1_2_2) ? $init_int_1_2_2 : ""; ?>" type="text"></td>
            <td><input id="CO_10" name = "datepub_1_2_2" value = "<?php echo isset($init_datepub_1_2_2) ? $init_datepub_1_2_2 : ""; ?>" type="date"></td>
            <td><input id="CO_FS_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="CO_11" name = "title_1_2_3" value = "<?php echo isset($init_title_1_2_3) ? $init_title_1_2_3 : ""; ?>" type="text"></td>
            <td>
                <select name="type_1_2_3" id="CO_RO_3">
                        <option value = "<?php echo isset($init_type_1_2_3) ? $init_type_1_2_3 : "None"; ?>">
                            <?php echo isset($init_type_1_2_3) ? $init_type_1_2_3 : "Select Option"; ?>
                        </option>
                        <option value="Book">Book</option>
                        <option value="Journal Article">Journal Article</option>
                        <option value="Book Chapter">Book Chapter</option>
                        <option value="Monograph">Monograph</option>
                        <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>

            <td><input id="CO_12" name = "name_1_2_3" value = "<?php echo isset($init_name_1_2_3) ? $init_name_1_2_3 : ""; ?>" type="text"></td>
            <td><input id="CO_13" name = "rev_1_2_3" value = "<?php echo isset($init_rev_1_2_3) ? $init_rev_1_2_3 : ""; ?>" type="text"></td>
            <td><input id="CO_14" name = "int_1_2_3" value = "<?php echo isset($init_int_1_2_3) ? $init_int_1_2_3 : ""; ?>" type="text"></td>
            <td><input id="CO_15" name = "datepub_1_2_3" value = "<?php echo isset($init_datepub_1_2_3) ? $init_datepub_1_2_3 : ""; ?>" type="date"></td>
            <td><input id="CO_FS_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="CO_16" name = "title_1_2_4" value = "<?php echo isset($init_title_1_2_4) ? $init_title_1_2_4 : ""; ?>" type="text"></td>
            <td>
                <select name="type_1_2_4" id="CO_RO_4">
                        <option value = "<?php echo isset($init_type_1_2_4) ? $init_type_1_2_4 : "None"; ?>">
                            <?php echo isset($init_type_1_2_4) ? $init_type_1_2_4 : "Select Option"; ?>
                        </option>
                        <option value="Book">Book</option>
                        <option value="Journal Article">Journal Article</option>
                        <option value="Book Chapter">Book Chapter</option>
                        <option value="Monograph">Monograph</option>
                        <option value="Others">Other Peer-Reviewed Output</option>
                </select>
            </td>
            <td><input id="CO_17" name = "name_1_2_4" value = "<?php echo isset($init_name_1_2_4) ? $init_name_1_2_4 : ""; ?>" type="text"></td>
            <td><input id="CO_18" name = "rev_1_2_4" value = "<?php echo isset($init_rev_1_2_4) ? $init_rev_1_2_4 : ""; ?>" type="text"></td>
            <td><input id="CO_19" name = "int_1_2_4" value = "<?php echo isset($init_int_1_2_4) ? $init_int_1_2_4 : ""; ?>" type="text"></td>
            <td><input id="CO_20" name = "datepub_1_2_4" value = "<?php echo isset($init_datepub_1_2_4) ? $init_datepub_1_2_4 : ""; ?>" type="date"></td>
            <td><input id="CO_FS_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_CO_FS()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_CO" id="final_CO"></td>
        </tr>
    </table>

    <br><br><br>

    <h2>2. FOR EVERY RESEARCH OUTPUT TRANSLATED INTO PROJECT, POLICY OR PRODUCT AS:</h2>
    <h2 class="page_title">2.1 Lead Researcher</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Research</td>
            <td>Date Completed <br>
                (mm/dd/yyyy)
            </td>
            <td>Name of Project, Policy
                <br> or Product
            </td>
            <td>Funding Source</td>
            <td>Date implemented, adopted or developed <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="LR_1" name = "title_2_1_1" value = "<?php echo isset($init_title_2_1_1) ? $init_title_2_1_1 : ""; ?>" type="text"></td>
            <td><input id="LR_2" name = "datecom_2_1_1" value = "<?php echo isset($init_date_com_2_1_1) ? $init_date_com_2_1_1 : ""; ?>" type="date"></td>
            <td><input id="LR_3" name = "nameproj_2_1_1" value = "<?php echo isset($init_nameproj_2_1_1) ? $init_nameproj_2_1_1 : ""; ?>" type="text"></td>
            <td><input id="LR_4" name = "fund_2_1_1" value = "<?php echo isset($init_fund_2_1_1) ? $init_fund_2_1_1 : ""; ?>" type="text"></td>
            <td><input id="LR_5" name = "dateimp_2_1_1" value = "<?php echo isset($init_dateimp_2_1_1) ? $init_dateimp_2_1_1 : ""; ?>" type="date"></td>
            <td><input id="LR_FS_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="LR_6" name = "title_2_1_2" value = "<?php echo isset($init_title_2_1_2) ? $init_title_2_1_2 : ""; ?>" type="text"></td>
            <td><input id="LR_7" name = "datecom_2_1_2" value = "<?php echo isset($init_date_com_2_1_2) ? $init_date_com_2_1_2 : ""; ?>" type="date"></td>
            <td><input id="LR_8" name = "nameproj_2_1_2" value = "<?php echo isset($init_nameproj_2_1_2) ? $init_nameproj_2_1_2 : ""; ?>" type="text"></td>
            <td><input id="LR_9" name = "fund_2_1_2" value = "<?php echo isset($init_fund_2_1_2) ? $init_fund_2_1_2 : ""; ?>" type="text"></td>
            <td><input id="LR_10" name = "dateimp_2_1_2" value = "<?php echo isset($init_dateimp_2_1_2) ? $init_dateimp_2_1_2 : ""; ?>" type="date"></td>

            <td><input id="LR_FS_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="LR_11" name = "title_2_1_3" value = "<?php echo isset($init_title_2_1_3) ? $init_title_2_1_3 : ""; ?>" type="text"></td>
            <td><input id="LR_12" name = "datecom_2_1_3" value = "<?php echo isset($init_date_com_2_1_3) ? $init_date_com_2_1_3 : ""; ?>" type="date"></td>
            <td><input id="LR_13" name = "nameproj_2_1_3" value = "<?php echo isset($init_nameproj_2_1_3) ? $init_nameproj_2_1_3 : ""; ?>" type="text"></td>
            <td><input id="LR_14" name = "fund_2_1_3" value = "<?php echo isset($init_fund_2_1_3) ? $init_fund_2_1_3 : ""; ?>" type="text"></td>
            <td><input id="LR_15" name = "dateimp_2_1_3" value = "<?php echo isset($init_dateimp_2_1_3) ? $init_dateimp_2_1_3 : ""; ?>" type="date"></td>
            <td><input id="LR_FS_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="LR_16" name = "title_2_1_4" value = "<?php echo isset($init_title_2_1_4) ? $init_title_2_1_4 : ""; ?>" type="text"></td>
            <td><input id="LR_17" name = "datecom_2_1_4" value = "<?php echo isset($init_date_com_2_1_4) ? $init_date_com_2_1_4 : ""; ?>" type="date"></td>
            <td><input id="LR_18" name = "nameproj_2_1_4" value = "<?php echo isset($init_nameproj_2_1_4) ? $init_nameproj_2_1_4 : ""; ?>" type="text"></td>
            <td><input id="LR_19" name = "fund_2_1_4" value = "<?php echo isset($init_fund_2_1_4) ? $init_fund_2_1_4 : ""; ?>" type="text"></td>
            <td><input id="LR_20" name = "dateimp_2_1_4" value = "<?php echo isset($init_dateimp_2_1_4) ? $init_dateimp_2_1_4: ""; ?>" type="date"></td>
            <td><input id="LR_FS_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_leadResearcher()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_LR" id="LR_fs_finale"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2.2 Contributor</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Research</td>
            <td>Date Completed <br>
                (mm/dd/yyyy)
            </td>
            <td>Name of Project, Policy or Product</td>
            <td>Funding Source</td>
            <td>Date implemented, adopted or developed <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="cont1" name = "title_2_2_1" value = "<?php echo isset($init_title_2_2_1) ? $init_title_2_2_1 : ""; ?>" type="text"></td>
            <td><input id="cont2" name = "datecom_2_2_1" value = "<?php echo isset($init_datecom_2_2_1) ? $init_datecom_2_2_1 : ""; ?>" type="date"></td>
            <td><input id="cont3" name = "nameproj_2_2_1" value = "<?php echo isset($init_nameproj_2_2_1) ? $init_nameproj_2_2_1 : ""; ?>" type="text"></td>
            <td><input id="cont4" name = "fund_2_2_1" value = "<?php echo isset($init_fund_2_2_1) ? $init_fund_2_2_1 : ""; ?>" type="text"></td>
            <td><input id="cont5" name = "dateimp_2_2_1" value = "<?php echo isset($init_dateimp_2_2_1) ? $init_dateimp_2_2_1 : ""; ?>" type="date"></td>
            
            <td><input id="cont_res__1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="cont6" name = "title_2_2_2" value = "<?php echo isset($init_title_2_2_2) ? $init_title_2_2_2 : ""; ?>" type="text"></td>
            <td><input id="cont7" name = "datecom_2_2_2" value = "<?php echo isset($init_datecom_2_2_2) ? $init_datecom_2_2_2 : ""; ?>" type="date"></td>
            <td><input id="cont8" name = "nameproj_2_2_2" value = "<?php echo isset($init_nameproj_2_2_2) ? $init_nameproj_2_2_2 : ""; ?>" type="text"></td>
            <td><input id="cont9" name = "fund_2_2_2" value = "<?php echo isset($init_fund_2_2_2) ? $init_fund_2_2_2 : ""; ?>" type="text"></td>
            <td><input id="cont10" name = "dateimp_2_2_2" value = "<?php echo isset($init_dateimp_2_2_2) ? $init_dateimp_2_2_2 : ""; ?>" type="date"></td>
            <td><input id="cont_res__2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="cont11" name = "title_2_2_3" value = "<?php echo isset($init_title_2_2_3) ? $init_title_2_2_3 : ""; ?>" type="text"></td>
            <td><input id="cont12" name = "datecom_2_2_3" value = "<?php echo isset($init_datecom_2_2_3) ? $init_datecom_2_2_3 : ""; ?>" type="date"></td>
            <td><input id="cont13" name = "nameproj_2_2_3" value = "<?php echo isset($init_nameproj_2_2_3) ? $init_nameproj_2_2_3 : ""; ?>" type="text"></td>
            <td><input id="cont14" name = "fund_2_2_3" value = "<?php echo isset($init_fund_2_2_3) ? $init_fund_2_2_3 : ""; ?>" type="text"></td>
            <td><input id="cont15" name = "dateimp_2_2_3" value = "<?php echo isset($init_dateimp_2_2_3) ? $init_dateimp_2_2_3 : ""; ?>" type="date"></td>
            <td><input id="cont_res__3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>

            <td><input id="cont16" name = "title_2_2_4" value = "<?php echo isset($init_title_2_2_4) ? $init_title_2_2_4 : ""; ?>" type="text"></td>
            <td><input id="cont17" name = "datecom_2_2_4" value = "<?php echo isset($init_datecom_2_2_4) ? $init_datecom_2_2_4 : ""; ?>" type="date"></td>
            <td><input id="cont18" name = "nameproj_2_2_4" value = "<?php echo isset($init_nameproj_2_2_4) ? $init_nameproj_2_2_4 : ""; ?>" type="text"></td>
            <td><input id="cont19" name = "fund_2_2_4" value = "<?php echo isset($init_fund_2_2_4) ? $init_fund_2_2_4 : ""; ?>" type="text"></td>
            <td><input id="cont20" name = "dateimp_2_2_4" value = "<?php echo isset($init_dateimp_2_2_4) ? $init_dateimp_2_2_4 : ""; ?>" type="date"></td>
            <td><input id="cont_res__4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_contributor()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_C" id="cont_final_res"></td>
        </tr>
    </table>

    <h2>3. FOR EVERY RESEARCH PUBLICATION CITED BY OTHER AUTHORS</h2>
    <h2 class="page_title">3.1 Local Authors</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Journal Article</td>
            <td>Date Published</td>
            <td>Name of Journal</td>
            <td>No. of Citation</td>
            <td>Citation Index</td>
            <td>Year/s Citation Published</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="local_1" name = "title_3_1_1" value = "<?php echo isset($init_title_3_1_1) ? $init_title_3_1_1 : ""; ?>" type="text"></td>
            <td><input id="local_2" name = "datepub_3_1_1" value = "<?php echo isset($init_datepub_3_1_1) ? $init_datepub_3_1_1 : ""; ?>" type="date"></td>
            <td><input id="local_3" name = "name_3_1_1" value = "<?php echo isset($init_name_3_1_1) ? $init_name_3_1_1 : ""; ?>" type="text"></td>
            <td><input id="local_4" name = "no_citation_3_1_1" value = "<?php echo isset($init_no_citation_3_1_1) ? $init_no_citation_3_1_1 : ""; ?>" type="text"></td>
            <td><input id="local_5" name = "index_citation_3_1_1" value = "<?php echo isset($init_index_citation_3_1_1) ? $init_index_citation_3_1_1 : ""; ?>" type="text"></td>
            <td><input id="local_6" name = "year_citation_3_1_1" value = "<?php echo isset($init_year_citation_3_1_1) ? $init_year_citation_3_1_1 : ""; ?>" type="text"></td>
            <td><input id="local_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="local_7" name = "title_3_1_2" value = "<?php echo isset($init_title_3_1_2) ? $init_title_3_1_2 : ""; ?>" type="text"></td>
            <td><input id="local_8" name = "datepub_3_1_2" value = "<?php echo isset($init_datepub_3_1_2) ? $init_datepub_3_1_2 : ""; ?>" type="date"></td>
            <td><input id="local_9" name = "name_3_1_2" value = "<?php echo isset($init_name_3_1_2) ? $init_name_3_1_2 : ""; ?>" type="text"></td>
            <td><input id="local_10" name = "no_citation_3_1_2" value = "<?php echo isset($init_no_citation_3_1_2) ? $init_no_citation_3_1_2 : ""; ?>" type="text"></td>
            <td><input id="local_11" name = "index_citation_3_1_2" value = "<?php echo isset($init_index_citation_3_1_2) ? $init_index_citation_3_1_2 : ""; ?>" type="text"></td>
            <td><input id="local_12" name = "year_citation_3_1_2" value = "<?php echo isset($init_year_citation_3_1_2) ? $init_year_citation_3_1_2 : ""; ?>" type="text"></td>
            <td><input id="local_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="local_13" name = "title_3_1_3" value = "<?php echo isset($init_title_3_1_3) ? $init_title_3_1_3 : ""; ?>" type="text"></td>
            <td><input id="local_14" name = "datepub_3_1_3" value = "<?php echo isset($init_datepub_3_1_3) ? $init_datepub_3_1_3 : ""; ?>" type="date"></td>
            <td><input id="local_15" name = "name_3_1_3" value = "<?php echo isset($init_name_3_1_3) ? $init_name_3_1_3 : ""; ?>" type="text"></td>
            <td><input id="local_16" name = "no_citation_3_1_3" value = "<?php echo isset($init_no_citation_3_1_3) ? $init_no_citation_3_1_3 : ""; ?>" type="text"></td>
            <td><input id="local_17" name = "index_citation_3_1_3" value = "<?php echo isset($init_index_citation_3_1_3) ? $init_index_citation_3_1_3 : ""; ?>" type="text"></td>
            <td><input id="local_18" name = "year_citation_3_1_3" value = "<?php echo isset($init_year_citation_3_1_3) ? $init_year_citation_3_1_3 : ""; ?>" type="text"></td>
            <td><input id="local_result_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="local_19" name = "title_3_1_4" value = "<?php echo isset($init_title_3_1_4) ? $init_title_3_1_4 : ""; ?>" type="text"></td>
            <td><input id="local_20" name = "datepub_3_1_4" value = "<?php echo isset($init_datepub_3_1_4) ? $init_datepub_3_1_4 : ""; ?>" type="date"></td>
            <td><input id="local_21" name = "name_3_1_4" value = "<?php echo isset($init_name_3_1_4) ? $init_name_3_1_4 : ""; ?>" type="text"></td>
            <td><input id="local_22" name = "no_citation_3_1_4" value = "<?php echo isset($init_no_citation_3_1_4) ? $init_no_citation_3_1_4 : ""; ?>" type="text"></td>
            <td><input id="local_23" name = "index_citation_3_1_4" value = "<?php echo isset($init_index_citation_3_1_4) ? $init_index_citation_3_1_4 : ""; ?>" type="text"></td>
            <td><input id="local_24" name = "year_citation_3_1_4" value = "<?php echo isset($init_year_citation_3_1_4) ? $init_year_citation_3_1_4 : ""; ?>" type="text"></td>
            <td><input id="local_result_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calc_localAuthors()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_local_result" id="local_result_total"></td>
        </tr>
    </table>

    <h2 class="page_title">3.2 International Authors</h2>
    <table>

        <tr class="row__des">
            <td>No.</td>
            <td>Title of Journal Article</td>
            <td>Date Published</td>
            <td>Name of Journal</td>
            <td>No. of Citation</td>
            <td>Citation Index</td>
            <td>Year/s Citation Published</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="international_1" name = "title_3_2_1" value = "<?php echo isset($init_title_3_2_1) ? $init_title_3_2_1 : ""; ?>" type="text"></td>
            <td><input id="international_2" name = "datepub_3_2_1" value = "<?php echo isset($init_datepub_3_2_1) ? $init_datepub_3_2_1 : ""; ?>" type="date"></td>
            <td><input id="international_3" name = "name_3_2_1" value = "<?php echo isset($init_name_3_2_1) ? $init_name_3_2_1 : ""; ?>" type="text"></td>
            <td><input id="international_4" name = "no_citation_3_2_1" value = "<?php echo isset($init_no_citation_3_2_1) ? $init_no_citation_3_2_1 : ""; ?>" type="text"></td>
            <td><input id="international_5" name = "index_citation_3_2_1" value = "<?php echo isset($init_index_citation_3_2_1) ? $init_index_citation_3_2_1 : ""; ?>" type="text"></td>
            <td><input id="international_6" name = "year_citation_3_2_1" value = "<?php echo isset($init_year_citation_3_2_1) ? $init_year_citation_3_2_1 : ""; ?>" type="text"></td>
            <td><input id="international_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="international_7" name = "title_3_2_2" value = "<?php echo isset($init_title_3_2_2) ? $init_title_3_2_2 : ""; ?>" type="text"></td>
            <td><input id="international_8" name = "datepub_3_2_2" value = "<?php echo isset($init_datepub_3_2_2) ? $init_datepub_3_2_2 : ""; ?>" type="date"></td>
            <td><input id="international_9" name = "name_3_2_2" value = "<?php echo isset($init_name_3_2_2) ? $init_name_3_2_2 : ""; ?>" type="text"></td>
            <td><input id="international_10" name = "no_citation_3_2_2" value = "<?php echo isset($init_no_citation_3_2_2) ? $init_no_citation_3_2_2 : ""; ?>" type="text"></td>
            <td><input id="international_11" name = "index_citation_3_2_2" value = "<?php echo isset($init_index_citation_3_2_2) ? $init_index_citation_3_2_2 : ""; ?>" type="text"></td>
            <td><input id="international_12" name = "year_citation_3_2_2" value = "<?php echo isset($init_year_citation_3_2_2) ? $init_year_citation_3_2_2 : ""; ?>" type="text"></td>

            <td><input id="international_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="international_13" name = "title_3_2_3" value = "<?php echo isset($init_title_3_2_3) ? $init_title_3_2_3 : ""; ?>" type="text"></td>
            <td><input id="international_14" name = "datepub_3_2_3" value = "<?php echo isset($init_datepub_3_2_3) ? $init_datepub_3_2_3 : ""; ?>" type="date"></td>
            <td><input id="international_15" name = "name_3_2_3" value = "<?php echo isset($init_name_3_2_3) ? $init_name_3_2_3 : ""; ?>" type="text"></td>
            <td><input id="international_16" name = "no_citation_3_2_3" value = "<?php echo isset($init_no_citation_3_2_3) ? $init_no_citation_3_2_3 : ""; ?>" type="text"></td>
            <td><input id="international_17" name = "index_citation_3_2_3" value = "<?php echo isset($init_index_citation_3_2_3) ? $init_index_citation_3_2_3 : ""; ?>" type="text"></td>
            <td><input id="international_18" name = "year_citation_3_2_3" value = "<?php echo isset($init_year_citation_3_2_3) ? $init_year_citation_3_2_3 : ""; ?>" type="text"></td>

            <td><input id="international_result_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="international_19" name = "title_3_2_4" value = "<?php echo isset($init_title_3_2_4) ? $init_title_3_2_4 : ""; ?>" type="text"></td>
            <td><input id="international_20" name = "datepub_3_2_4" value = "<?php echo isset($init_datepub_3_2_4) ? $init_datepub_3_2_4 : ""; ?>" type="date"></td>
            <td><input id="international_21" name = "name_3_2_4" value = "<?php echo isset($init_name_3_2_4) ? $init_name_3_2_4 : ""; ?>" type="text"></td>
            <td><input id="international_22" name = "no_citation_3_2_4" value = "<?php echo isset($init_no_citation_3_2_4) ? $init_no_citation_3_2_4 : ""; ?>" type="text"></td>
            <td><input id="international_23" name = "index_citation_3_2_4" value = "<?php echo isset($init_index_citation_3_2_4) ? $init_index_citation_3_2_4 : ""; ?>" type="text"></td>
            <td><input id="international_24" name = "year_citation_3_2_4" value = "<?php echo isset($init_year_citation_3_2_4) ? $init_year_citation_3_2_4 : ""; ?>" type="text"></td>
            <td><input id="international_result_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calc_internationalAuthors()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="score_international_result" id="international_result_total"></td>
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
    //* Sole-authorship here below
    // const RO_1 = document.getElementById('SA_RO_1')
    // const SA_FS_1 = document.querySelector('#SA_FS_1')
    //
    // RO_1.addEventListener("change", () => {
    //     if (RO_1.value.toLowerCase() === "none") {
    //         SA_FS_1.value = 0
    //     } else if (RO_1.value.toLowerCase() === "book") {
    //         SA_FS_1.value = 100
    //     } else if (RO_1.value.toLowerCase() === "journal article") {
    //         SA_FS_1.value = 50
    //     } else if (RO_1.value.toLowerCase() === "book chapter") {
    //         SA_FS_1.value = 35
    //     } else if (RO_1.value.toLowerCase() === 'monograph') {
    //         SA_FS_1.value = 100
    //     } else if (RO_1.value.toLowerCase() === "others") {
    //         SA_FS_1.value = 10
    //     }
    // })
    //
    // const RO_2 = document.getElementById('SA_RO_2')
    // const SA_FS_2 = document.querySelector('#SA_FS_2')
    //
    // RO_2.addEventListener("change", () => {
    //     if (RO_2.value.toLowerCase() === "none") {
    //
    //         SA_FS_2.value = 0
    //     } else if (RO_2.value.toLowerCase() === "book") {
    //         SA_FS_2.value = 100
    //     } else if (RO_2.value.toLowerCase() === "journal article") {
    //         SA_FS_2.value = 50
    //     } else if (RO_2.value.toLowerCase() === "book chapter") {
    //         SA_FS_2.value = 35
    //     } else if (RO_2.value.toLowerCase() === 'monograph') {
    //         SA_FS_2.value = 100
    //     } else if (RO_2.value.toLowerCase() === "others") {
    //         SA_FS_2.value = 10
    //     }
    // })
    //
    // const RO_3 = document.getElementById('SA_RO_3')
    // const SA_FS_3 = document.querySelector('#SA_FS_3')
    //
    // RO_3.addEventListener("change", () => {
    //     if (RO_3.value.toLowerCase() === "none") {
    //         SA_FS_3.value = 0
    //     } else if (RO_3.value.toLowerCase() === "book") {
    //         SA_FS_3.value = 100
    //     } else if (RO_3.value.toLowerCase() === "journal article") {
    //         SA_FS_3.value = 50
    //     } else if (RO_3.value.toLowerCase() === "book chapter") {
    //         SA_FS_3.value = 35
    //     } else if (RO_3.value.toLowerCase() === 'monograph') {
    //         SA_FS_3.value = 100
    //     } else if (RO_3.value.toLowerCase() === "others") {
    //         SA_FS_3.value = 10
    //     }
    // })
    //
    // const RO_4 = document.getElementById('SA_RO_4')
    // const SA_FS_4 = document.querySelector('#SA_FS_4')
    //
    // RO_4.addEventListener("change", () => {
    //     if (RO_4.value.toLowerCase() === "none") {
    //         SA_FS_4.value = 0
    //     } else if (RO_4.value.toLowerCase() === "book") {
    //         SA_FS_4.value = 100
    //     } else if (RO_4.value.toLowerCase() === "journal article") {
    //         SA_FS_4.value = 50
    //     } else if (RO_4.value.toLowerCase() === "book chapter") {
    //         SA_FS_4.value = 35
    //     } else if (RO_4.value.toLowerCase() === 'monograph') {
    //         SA_FS_4.value = 100
    //     } else if (RO_4.value.toLowerCase() === "others") {
    //         SA_FS_4.value = 10
    //     }
    // })

    function calcu_SA_FS() {
        const SA_1 = document.getElementById('SA_1').value
        const SA_RO_1 = document.getElementById('SA_RO_1').value
        const SA_2 = document.getElementById('SA_2').value
        const SA_3 = document.getElementById('SA_3').value
        const SA_4 = document.getElementById('SA_4').value
        const SA_5 = document.getElementById('SA_5').value
        const SA_total_1 = document.getElementById('SA_FS_1')

        if (SA_1 && SA_RO_1 && SA_2 && SA_3 && SA_4 && SA_5) {
            SA_total_1.value =
                SA_RO_1 === "Book" ? 100 :
                    SA_RO_1 === "Journal Article" ? 50 :
                        SA_RO_1 === "Book Chapter" ? 35 :
                            SA_RO_1 === "Monograph" ? 100 :
                                SA_RO_1 === "Others" ? 10 : 0;
        } else {
            SA_total_1.value = 0;
        }

        const SA_6 = document.getElementById('SA_6').value
        const SA_RO_2 = document.getElementById('SA_RO_2').value
        const SA_7 = document.getElementById('SA_7').value
        const SA_8 = document.getElementById('SA_8').value
        const SA_9 = document.getElementById('SA_9').value
        const SA_10 = document.getElementById('SA_10').value
        const SA_total_2 = document.getElementById('SA_FS_2')

        if (SA_6 && SA_RO_2 && SA_7 && SA_8 && SA_9 && SA_10) {
            SA_total_2.value =
                SA_RO_2 === "Book" ? 100 :
                    SA_RO_2 === "Journal Article" ? 50 :
                        SA_RO_2 === "Book Chapter" ? 35 :
                            SA_RO_2 === "Monograph" ? 100 :
                                SA_RO_2 === "Others" ? 10 : 0;
        } else {
            SA_total_2.value = 0;
        }

        const SA_11 = document.getElementById('SA_11').value
        const SA_RO_3 = document.getElementById('SA_RO_3').value
        const SA_12 = document.getElementById('SA_12').value
        const SA_13 = document.getElementById('SA_13').value
        const SA_14 = document.getElementById('SA_14').value
        const SA_15 = document.getElementById('SA_15').value
        const SA_total_3 = document.getElementById('SA_FS_3')

        if (SA_11 && SA_RO_3 && SA_12 && SA_13 && SA_14 && SA_15) {
            SA_total_3.value =
                SA_RO_3 === "Book" ? 100 :
                    SA_RO_3 === "Journal Article" ? 50 :
                        SA_RO_3 === "Book Chapter" ? 35 :
                            SA_RO_3 === "Monograph" ? 100 :
                                SA_RO_3 === "Others" ? 10 : 0;
        } else {
            SA_total_3.value = 0;
        }

        const SA_16 = document.getElementById('SA_16').value
        const SA_RO_4 = document.getElementById('SA_RO_4').value
        const SA_17 = document.getElementById('SA_17').value
        const SA_18 = document.getElementById('SA_18').value
        const SA_19 = document.getElementById('SA_19').value
        const SA_20 = document.getElementById('SA_20').value
        const SA_total_4 = document.getElementById('SA_FS_4')

        if (SA_16 && SA_RO_4 && SA_17 && SA_18 && SA_19 && SA_20) {
            SA_total_4.value =
                SA_RO_4 === "Book" ? 100 :
                    SA_RO_4 === "Journal Article" ? 50 :
                        SA_RO_4 === "Book Chapter" ? 35 :
                            SA_RO_4 === "Monograph" ? 100 :
                                SA_RO_4 === "Others" ? 10 : 0;
        } else {
            SA_total_4.value = 0;
        }
        const SA_total_result = document.getElementById('final_SA')
        SA_total_result.value = parseFloat(SA_total_1.value) + parseFloat(SA_total_2.value) + parseFloat(SA_total_3.value) + parseFloat(SA_total_4.value) ;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // * Co-authorship here below
    function calcu_CO_FS() {
        const CO_1 = document.getElementById('CO_1').value
        const CO_RO_1 = document.getElementById('CO_RO_1').value
        const CO_2 = document.getElementById('CO_2').value
        const CO_3 = document.getElementById('CO_3').value
        const CO_4 = document.getElementById('CO_4').value
        const CO_5 = document.getElementById('CO_5').value
        const CO_total_1 = document.getElementById('CO_FS_1')

        if (CO_1 && CO_RO_1 && CO_2 && CO_3 && CO_4 && CO_5) {
            CO_total_1.value =
                CO_RO_1 === "Book" ? 100 :
                    CO_RO_1 === "Journal Article" ? 50 :
                        CO_RO_1 === "Book Chapter" ? 35 :
                            CO_RO_1 === "Monograph" ? 100 :
                                CO_RO_1 === "Others" ? 10 : 0;
        } else {
            CO_total_1.value = 0;
        }

        const CO_6 = document.getElementById('CO_6').value
        const CO_RO_2 = document.getElementById('CO_RO_2').value
        const CO_7 = document.getElementById('CO_7').value
        const CO_8 = document.getElementById('CO_8').value
        const CO_9 = document.getElementById('CO_9').value
        const CO_10 = document.getElementById('CO_10').value
        const CO_total_2 = document.getElementById('CO_FS_2')

        if (CO_6 && CO_RO_2 && CO_7 && CO_8 && CO_9 && CO_10) {
            CO_total_2.value =
                CO_RO_2 === "Book" ? 100 :
                    CO_RO_2 === "Journal Article" ? 50 :
                        CO_RO_2 === "Book Chapter" ? 35 :
                            CO_RO_2 === "Monograph" ? 100 :
                                CO_RO_2 === "Others" ? 10 : 0;
        } else {
            CO_total_2.value = 0;
        }


        //
        //
        const CO_11 = document.getElementById('CO_11').value
        const CO_RO_3 = document.getElementById('CO_RO_3').value
        const CO_12 = document.getElementById('CO_12').value
        const CO_13 = document.getElementById('CO_13').value
        const CO_14 = document.getElementById('CO_14').value
        const CO_15 = document.getElementById('CO_15').value
        const CO_total_3 = document.getElementById('CO_FS_3')

        if (CO_11 && CO_RO_3 && CO_12 && CO_13 && CO_14 && CO_15) {
            CO_total_3.value =
                CO_RO_3 === "Book" ? 100 :
                    CO_RO_3 === "Journal Article" ? 50 :
                        CO_RO_3 === "Book Chapter" ? 35 :
                            CO_RO_3 === "Monograph" ? 100 :
                                CO_RO_3 === "Others" ? 10 : 0;
        } else {
            CO_total_3.value = 0;
        }

        const CO_16 = document.getElementById('CO_16').value
        const CO_RO_4 = document.getElementById('CO_RO_4').value
        const CO_17 = document.getElementById('CO_17').value
        const CO_18 = document.getElementById('CO_18').value
        const CO_19 = document.getElementById('CO_19').value
        const CO_20 = document.getElementById('CO_20').value
        const CO_total_4 = document.getElementById('CO_FS_4')

        if (CO_16 && CO_RO_4 && CO_17 && CO_18 && CO_19 && CO_20) {
            CO_total_4.value =
                CO_RO_4 === "Book" ? 100 :
                    CO_RO_4 === "Journal Article" ? 50 :
                        CO_RO_4 === "Book Chapter" ? 35 :
                            CO_RO_4 === "Monograph" ? 100 :
                                CO_RO_4 === "Others" ? 10 : 0;
        } else {
            CO_total_4.value = 0;
        }
        const CO_total_result = document.getElementById('final_CO')
        CO_total_result.value = parseFloat(CO_total_1.value) + parseFloat(CO_total_2.value) + parseFloat(CO_total_3.value) + parseFloat(CO_total_4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function calc_leadResearcher() {
//1st tr
        const LR1 = document.getElementById('LR_1').value
        const LR2 = document.getElementById('LR_2').value
        const LR3 = document.getElementById('LR_3').value
        const LR4 = document.getElementById('LR_4').value
        const LR5 = document.getElementById('LR_5').value
        const LR_FS_1 = document.getElementById('LR_FS_1')

        if (LR1 !== "" && LR2 !== "" && LR3 !== "" && LR4 !== "" && LR5 !== "") {
            LR_FS_1.value = 35
        } else {
            {
                LR_FS_1.value = 0
            }
        }

//2nd tr
        const LR6 = document.getElementById('LR_6').value
        const LR7 = document.getElementById('LR_7').value
        const LR8 = document.getElementById('LR_8').value
        const LR9 = document.getElementById('LR_9').value
        const LR10 = document.getElementById('LR_10').value
        const LR_FS_2 = document.getElementById('LR_FS_2')

        if (LR6 !== "" && LR7 !== "" && LR8 !== "" && LR9 !== "" && LR10 !== "") {
            LR_FS_2.value = 35
        } else {
            {
                LR_FS_2.value = 0
            }
        }

//3rd tr
        const LR11 = document.getElementById('LR_11').value
        const LR12 = document.getElementById('LR_12').value
        const LR13 = document.getElementById('LR_13').value
        const LR14 = document.getElementById('LR_14').value
        const LR15 = document.getElementById('LR_15').value
        const LR_FS_3 = document.getElementById('LR_FS_3')

        if (LR11 !== "" && LR12 !== "" && LR13 !== "" && LR14 !== "" && LR15 !== "") {
            LR_FS_3.value = 35
        } else {
            {
                LR_FS_3.value = 0
            }
        }

//4th tr
        const LR16 = document.getElementById('LR_16').value
        const LR17 = document.getElementById('LR_17').value
        const LR18 = document.getElementById('LR_18').value
        const LR19 = document.getElementById('LR_19').value
        const LR20 = document.getElementById('LR_20').value
        const LR_FS_4 = document.getElementById('LR_FS_4')
        if (LR16 !== "" && LR17 !== "" && LR18 !== "" && LR19 !== "" && LR20 !== "") {
            LR_FS_4.value = 35
        } else {
            {
                LR_FS_4.value = 0
            }
        }
        document.getElementById('LR_fs_finale').value = parseFloat(LR_FS_1.value) + parseFloat(LR_FS_2.value) + parseFloat(LR_FS_3.value) + parseFloat(LR_FS_4.value)
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function calc_contributor() {
        const cont1 = document.getElementById('cont1').value;
        const cont2 = document.getElementById('cont2').value;
        const cont3 = document.getElementById('cont3').value;
        const cont4 = document.getElementById('cont4').value;
        const cont5 = document.getElementById('cont5').value;
        const cont_res1 = document.getElementById('cont_res__1');
        if (cont1 !== "" && cont2 !== "" && cont3 !== "" && cont4 !== "" && cont5 !== "") {
            cont_res1.value = 35
        } else {
            cont_res1.value = 0
        }

        const cont6 = document.getElementById('cont6').value;
        const cont7 = document.getElementById('cont7').value;
        const cont8 = document.getElementById('cont8').value;
        const cont9 = document.getElementById('cont9').value;
        const cont10 = document.getElementById('cont10').value;
        const cont_res2 = document.getElementById('cont_res__2')
        if (cont6 !== "" && cont7 !== "" && cont8 !== "" && cont9 !== "" && cont10 !== "") {
            cont_res2.value = 35
        } else {
            cont_res2.value = 0
        }

        const cont11 = document.getElementById('cont11').value;
        const cont12 = document.getElementById('cont12').value;
        const cont13 = document.getElementById('cont13').value;
        const cont14 = document.getElementById('cont14').value;
        const cont15 = document.getElementById('cont15').value;
        const cont_res3 = document.getElementById('cont_res__3')
        if (cont11 !== "" && cont12 !== "" && cont13 !== "" && cont14 !== "" && cont15 !== "") {
            cont_res3.value = 35
        } else {
            cont_res3.value = 0
        }

        const cont16 = document.getElementById('cont16').value;
        const cont17 = document.getElementById('cont17').value;
        const cont18 = document.getElementById('cont18').value;
        const cont19 = document.getElementById('cont19').value;
        const cont20 = document.getElementById('cont20').value;
        const cont_res4 = document.getElementById('cont_res__4')

        if (cont16 !== "" && cont17 !== "" && cont18 !== "" && cont19 !== "" && cont20 !== "") {
            cont_res4.value = 35
        } else {
            cont_res4.value = 0
        }

        document.getElementById('cont_final_res').value = parseFloat(cont_res1.value) + parseFloat(cont_res2.value) + parseFloat(cont_res3.value) + parseFloat(cont_res4.value);
    }

    function calc_localAuthors() {
        const local_1 = document.getElementById('local_1').value
        const local_2 = document.getElementById('local_2').value
        const local_3 = document.getElementById('local_3').value
        const local_4 = document.getElementById('local_4').value
        const local_5 = document.getElementById('local_5').value
        const local_6 = document.getElementById('local_6').value
        const local_result_1 = document.getElementById('local_result_1')

        if (local_1 && local_2 && local_3 && local_4 && local_5 && local_6) {
            local_result_1.value = local_4 * 5;
        } else {
            local_result_1.value = 0;
        }

        const local_7 = document.getElementById('local_7').value
        const local_8 = document.getElementById('local_8').value
        const local_9 = document.getElementById('local_9').value
        const local_10 = document.getElementById('local_10').value
        const local_11 = document.getElementById('local_11').value
        const local_12 = document.getElementById('local_12').value
        const local_result_2 = document.getElementById('local_result_2')

        if (local_7 && local_8 && local_9 && local_10 && local_11 && local_12) {
            local_result_2.value = local_10 * 5;
        } else {
            local_result_2.value = 0;
        }

        const local_13 = document.getElementById('local_13').value
        const local_14 = document.getElementById('local_14').value
        const local_15 = document.getElementById('local_15').value
        const local_16 = document.getElementById('local_16').value
        const local_17 = document.getElementById('local_17').value
        const local_18 = document.getElementById('local_18').value
        const local_result_3 = document.getElementById('local_result_3')

        if (local_13 && local_14 && local_15 && local_16 && local_17 && local_18) {
            local_result_3.value = local_16 * 5;
        } else {
            local_result_3.value = 0;
        }

        const local_19 = document.getElementById('local_19').value
        const local_20 = document.getElementById('local_20').value
        const local_21 = document.getElementById('local_21').value
        const local_22 = document.getElementById('local_22').value
        const local_23 = document.getElementById('local_23').value
        const local_24 = document.getElementById('local_24').value
        const local_result_4 = document.getElementById('local_result_4')

        if (local_19 && local_20 && local_21 && local_22 && local_23 && local_24) {
            local_result_4.value = local_22 * 5;
        } else {
            local_result_4.value = 0;
        }

        document.getElementById('local_result_total').value = parseFloat(local_result_1.value) +
            parseFloat(local_result_2.value) + parseFloat(local_result_3.value) + parseFloat(local_result_4.value);
    }

    function calc_internationalAuthors() {
        const international_1 = document.getElementById('international_1').value
        const international_2 = document.getElementById('international_2').value
        const international_3 = document.getElementById('international_3').value
        const international_4 = document.getElementById('international_4').value
        const international_5 = document.getElementById('international_5').value
        const international_6 = document.getElementById('international_6').value
        const international_result_1 = document.getElementById('international_result_1')

        if (international_1 && international_2 && international_3 && international_4 && international_5 && international_6) {
            international_result_1.value = international_4 * 5;
        } else {
            international_result_1.value = 0;
        }

        const international_7 = document.getElementById('international_7').value
        const international_8 = document.getElementById('international_8').value
        const international_9 = document.getElementById('international_9').value
        const international_10 = document.getElementById('international_10').value
        const international_11 = document.getElementById('international_11').value
        const international_12 = document.getElementById('international_12').value
        const international_result_2 = document.getElementById('international_result_2')

        if (international_7 && international_8 && international_9 && international_10 && international_11 && international_12) {
            international_result_2.value = international_10 * 5;
        } else {
            international_result_2.value = 0;
        }

        const international_13 = document.getElementById('international_13').value
        const international_14 = document.getElementById('international_14').value
        const international_15 = document.getElementById('international_15').value
        const international_16 = document.getElementById('international_16').value
        const international_17 = document.getElementById('international_17').value
        const international_18 = document.getElementById('international_18').value
        const international_result_3 = document.getElementById('international_result_3')

        if (international_13 && international_14 && international_15 && international_16 && international_17 && international_18) {
            international_result_3.value = international_16 * 5;
        } else {
            international_result_3.value = 0;
        }

        const international_19 = document.getElementById('international_19').value
        const international_20 = document.getElementById('international_20').value
        const international_21 = document.getElementById('international_21').value
        const international_22 = document.getElementById('international_22').value
        const international_23 = document.getElementById('international_23').value
        const international_24 = document.getElementById('international_24').value
        const international_result_4 = document.getElementById('international_result_4')

        if (international_19 && international_20 && international_21 && international_22 && international_23 && international_24) {
            international_result_4.value = international_22 * 5;
        } else {
            international_result_4.value = 0;
        }

        document.getElementById('international_result_total').value = parseFloat(international_result_1.value) +
            parseFloat(international_result_2.value) + parseFloat(international_result_3.value) + parseFloat(international_result_4.value);
    }

</script>
</html>