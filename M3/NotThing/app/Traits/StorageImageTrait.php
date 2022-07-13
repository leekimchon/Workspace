<?php
namespace App\Traits;
trait StorageImageTrait{
    function storageTraitUpload($request, $file_input_name, $folder_save){
        if($request->hasFile($file_input_name)){
            //xu ly trung ten file
            // $file_name = time().'_'.$request->file('feature_image_path')->getClientOriginalName();
            $file_name = $request->file($file_input_name)->getClientOriginalName();
            $file_path = '/storage/' . $request->file($file_input_name)->storeAs($folder_save, time().'_'.$file_name, 'public');
            $data_upload = [
                'file_name' => $file_name,
                'file_path' => $file_path
            ];
            return $data_upload;
        }else{
            return null;
        }
    }
}
?>