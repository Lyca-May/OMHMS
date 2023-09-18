<?php
namespace App\Imports;

use App\Models\Member;
use App\Models\Admin\Visit_Model;
use Maatwebsite\Excel\Concerns\ToModel;

class MemberImport implements ToModel
{
    public function model(array $row)
{

    $user = session()->get('User');
    $userid = $user['user_id'];
    // $pendingVisit = Visit_Model::where('visits_status', 'PENDING')->first();

    return new Member([
        'userid' =>$userid,  // Replace with the actual column or criteria for user_id
        // 'visit_id' => $pendingVisit->visits_id,  // Use the fetched visit_id
        'first_name' => $row[0],     // Replace with the actual column index for First Name
        'middle_name' => $row[1],    // Replace with the actual column index for Middle Name
        'last_name' => $row[2],      // Replace with the actual column index for Last Name
        'gender' => $row[3],         // Replace with the actual column index for Gender
        'age' => $row[4],            // Replace with the actual column index for Age
        'province' => $row[5],       // Replace with the actual column index for Province
        'municipality' => $row[6],   // Replace with the actual column index for Municipality
        'barangay' => $row[7],       // Replace with the actual column index for Barangay
        'sitio' => $row[8],          // Replace with the actual column index for Sitio
    ]);
}

}
?>
