// ! This shit is fckin hard

<?php

use PhpOffice\PhpWord\Style;
// include_once 'functions.php';
require_once 'vendor/autoload.php';
// $user_id = $_SESSION['id'];
// $result = select_data_personal_info($user_id);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $section->addText("User ID: " . $row['first_name']);
//         $section->addText("Username: " . $row['username']);
//         $section->addText("Email: " . $row['email']);
//     }

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    'SUC FACULTY POSITION RECLASSIFICATION.',
    array('name' => 'Arial', 'size' => 12, 'alignment' => 'center')
);
$section->addTextBreak();
$section->addText(
    'REQUEST FORM',
    array('name' => 'Arial', 'size' => 12, 'alignment' => 'center')
);
$section->addTextBreak();
$section->addText(
    'First Name: ',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'Middle Name: ',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'Last Name: ',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'HIGHEST EDUCATIONAL ATTAINMENT',
    array('name' => 'Arial', 'size' => 12, 'align' => 'center')
);

$section->addTextBreak();
$section->addText(
    'NAME OF DEGREE:',
    array('name' => 'Arial', 'size' => 12)
);

$section->addTextBreak();
$section->addText(
    'NAME OF HEI:',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'YEAR GRADUATED:',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'CURRENT EMPLOYMENT STATUS',
    array('name' => 'Arial', 'size' => 12, 'align' => 'center')
);
$section->addTextBreak();
$section->addText(
    'CURRENT FACULTY RANK:',
    array('name' => 'Arial', 'size' => 12, '')
);
$section->addTextBreak();
$section->addText(
    'MODE OF APPOINTMENT:',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'DATE OF APPOINTMENT:',
    array('name' => 'Arial', 'size' => 12, '')
);

$section->addTextBreak();
$section->addText(
    'DATE OF APPOINTMENT:',
    array('name' => 'Arial', 'size' => 12, '')
);
$section->addTextBreak();
$section->addText(
    'NAME OF SUC:',
    array('name' => 'Arial', 'size' => 12, '')
);
$section->addTextBreak();
$section->addText(
    'CAMPUS:',
    array('name' => 'Arial', 'size' => 12, '')
);
$section->addTextBreak();
$section->addText(
    'ADDRESS:',
    array('name' => 'Arial', 'size' => 12, '')
);
// $section->addTextBreak();
// $section->addText(
//     'Attached to this request form are my self-accomplished Individual Summary Sheet
//     '.'(ISS) and its attached forms; checklist of evidence submitted; and photocopy 
//     '.'of the sets of evidence based on my ISS. The electronic copies of the ISS and the 
//     '.'evidence are available in my google drive that I will willingly share with the Evaluation
//     '.'Committees for the validation of the information submitted.',
//     array('name' => 'Arial', 'size' => 12, '')
// );
// $section->addTextBreak();
// $section->addText(
//     'I attest that all information provided in this request for position 
//     '.'reclassification are true, accurate and complete. I understand that any falsification
//     '.'of these documents may lead to my disqualification from position reclassification for 
//     '.'this evaluation cycle.',
//     array('name' => 'Arial', 'size' => 12, '')
// );
// $section->addTextBreak();
// $section->addText(
//     '	
//     <Signature and Printed Name of Faculty> <date signed>
//     ',
//     array('name' => 'Arial', 'size' => 12, '')
// );

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('Signature and Printed Name of Faculty');
$myTextElement = $section->addText('date signed');
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('./Files/request_form.docx');

// Saving the document as ODF file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
// $objWriter->save('helloWorld.odt');

// Saving the document as HTML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
// $objWriter->save('helloWorld.html');

/* Note: we skip RTF, because it's not XML-based and requires a different example. */
/* Note: we skip PDF, because "HTML-to-PDF" approach is used to create PDF documents. */

echo '<script> alert("Request form file downloaded") </script>';
header('location: dashboard.php');

