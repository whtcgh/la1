<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $validate = Validator::make($request->all(), [
        //     'id' => 'required|integer|between:1,10',
        //     // 'title' => 'required|string'
        // ]);
        $request->validate([
            'id' => 'required|integer|between:1,10',
            // 'v1\.0' => 'required',
        ]);
        $id3 = $request->all();
        var_dump($id3);
        echo '<br>';
        var_dump($validate);
    }
    public function test(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|integer|between:1,10',
            // 'v1\.0' => 'required',
        ]);
        var_dump($id);die;
        var_dump($request->getContent());die;
        $validate = Validator::make($request->all(), [
            'id' => 'required|integer|between:1,10',
            // 'title' => 'required|string'
        ]);
        if ($validate->fails()) {
            return $validate->errors()->all();         //显示所有错误组成的数组
            // return $validate->errors()->first();     //显示第一条错误
        } else {
            return 'validate passed';
        }
        var_dump('test');die;
    }
    public function index1(Request $request)
    {
        $data = $request->input();
        $rules = [
            'id'    => 'required|numeric',
            // 'age'   => 'required|numeric|max:150',
            // 'name'  => 'sometimes|max:20',  //sometimes的用意（不传则已，传则必须遵守规则）
        ];
        $messages = [
            'required'  => ':attribute不能为空',
            'numeric'   => ':attribute必须是数字',
            // 'max'       => ':attribute长度（数值）不应该大于 :max',
        ];
        $attributes = [
            'id'    => 'ID',
            // 'age'   => '年龄',
            // 'name'  => '名称',
        ];
        $validator = Validator::make($data, $rules, $messages, $attributes);
        if ($validator->fails()) {
            return $validator->errors()->all();         //显示所有错误组成的数组
            //return $validator->errors()->first();     //显示第一条错误
        } else {
            return 'validate passed';
        }
    }
}
