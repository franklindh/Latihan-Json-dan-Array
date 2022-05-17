<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class KelasController extends Controller
{ 
    public function getDataKelas(){
        $ambildata= DB::table('kelas2')->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["User" => "Franklin David Hengkengbala",
                                    "Nim" => "72200407",
                                    "DataKelas" =>$ambildata],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );
           
                
            
        }
    }

    public function getDataKelasById($idkelas){
        $ambildata= DB::table('kelas2')
        ->where('id_kelas', $idkelas)
        ->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json($ambildata,200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );     
        }
    }

    public function updateDataGuru(Request $request){
        DB::table('guru')->where('id_guru', $request->input('id_guru'))->update([
            'rfid' => $request->input('rfid'),
            'nip' => $request->input('rfid'),
            'nama_guru' => $request->input('nama_guru'),
            'alamat' => $request->input('alamat'),
            'status_guru' => $request->input('status_guru'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    
    public function daleteDataGuru(Request $request){
        DB::table('guru')->where('id_guru', $request->input('id_guru'))->delete([
            'rfid' => $request->input('rfid'),
            'nip' => $request->input('rfid'),
            'nama_guru' => $request->input('nama_guru'),
            'alamat' => $request->input('alamat'),
            'status_guru' => $request->input('status_guru'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function daleteDataGurubyId($id){
        DB::table('guru')->where('id_guru', $id)->delete();
        dd();
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function getDataGuruKelas()
    //latihan1
    {
        $obj = '{
            "name": "diisi nama masing-masing",
            "url": "https://www.google.com",
            "rank": 1,
            "socialmedia": {
                "facebook": "",
                "twitter": "",
                "instagram": "",
                "youtube": "",
                "github": ""
            }
    }';
    var_dump(json_decode($obj, true));
    }
        

        public function getDataGuruKelas2()
        {
            //latihan2
            $tampung=   
                '{
                    "first_name" : "firstnamemahasiswa",
                    "last_name" : "lastnamemahasiswa",
                    "location" : "Yogyakarta",
                    "online" : true,
                    "followers" : 987
                  }';
                  var_dump(json_decode($tampung, true));
        }
    
    public function getDataGuruKelas3()
    {
        //latihan3
        $tampung = '{
            "first_name" : "Sammy",
            "last_name" : "Shark",
            "location" : "Ocean",
            "websites" : [
              {
                "description" : "work",
                "URL" : "https://www.digitalocean.com/"
              },
              {
                "desciption" : "tutorials",
                "URL" : "https://www.digitalocean.com/community/tutorials"
              }
            ],
            "social_media" : [
              {
                "description" : "twitter",
                "link" : "https://twitter.com/digitalocean"
              },
              {
                "description" : "facebook",
                "link" : "https://www.facebook.com/DigitalOceanCloudHosting"
              },
              {
                "description" : "github",
                "link" : "https://github.com/digitalocean"
              }
            ]
          }';
          var_dump(json_decode($tampung, true));
    
          }
}

    
        
    
   

