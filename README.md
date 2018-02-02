Completed :
-Doctors Initial Assessment
-Blood Transfusion Form
-Doctors Handover
-Infusion Therapy Chart
-Drug Requisition
-Code Blue Evaluation Form
-Plan Of Care
-Operative Detail Sheet
-Radiology Requisition
-Nutritional Assessment Form [ pending-shreya ]
-History Form
-Complete Nursing Assessment
-Patients Detail Form
-Patient Diet Record
-CPRFormat
-Transfer Checklist For Nurses
-


//code snippets

DB Read :
<?php
  $users = DB::table('users')->get();
 ?>
 <?php foreach ($users as $key): ?>
   <p>Name : "{{ $key->name }}" & Email : "{{ $key->email }}"</p>
 <?php endforeach; ?>

please check why its still showing errors in transferchecklistfor nurse.
