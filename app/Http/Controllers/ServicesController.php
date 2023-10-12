<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServicesController extends Controller
{
   public function services(){
      $services = Service::all()->toArray();
    return view('admin/services')->with('services', $services);
   }

   public function add(){
      return view('admin/add-service');
   }

   public function add_service(Request $request){
      $service = new Service;
      $service->title = $request["title"];
      $service->description = $request["description"];
      $service->save();

      return redirect('admin/services');
   }
   public function edit($id){
      $service = Service::find($id)->toArray();
      return view('admin/edit-service')->with('service', $service);
   }
   public function edit_service(Request $request, $id){
      $service = Service::find($id);
      $service->title = $request["title"];
      $service->description = $request["description"];
      $service->save();

      return redirect('admin/services');
   }
   public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->title = $request["title"];
        $service->description = $request["description"];
        $service->save();

        return redirect('admin/services');
    }
   public function delete_service($id) {
      $service = Service::find($id);
      $service->delete();

      return redirect('admin/services');
   }
}
