<?php

namespace App\Http\Controllers\Template;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DescriptionController extends Controller
{
    public function create(Request $request)
    {
        return view('templates.description.create');
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(Request $request)
    {
        $data = $request->except(['_token', 'product_image']);

        if ($request->hasFile('product_image') && $request->file('product_image')->isValid() && substr($request->file('product_image')->getMimeType(), 0, 5) == 'image') {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.imgbb.com/1/upload?key=4e9896d706799660e82ddd8e5d36bde6');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ['image' => base64_encode(file_get_contents($request->file('product_image')->path()))]);
            $result = json_decode(curl_exec($ch));
            curl_close($ch);
            if ($result->success) {
                $image = DB::table('imgbb_uploaded_images')->where('image_id', $result->data->id);
                if ($image->count() == 0) {
                    $data['product_image'] = $result->data->url;
                    $insert_data = [
                        'image_id'=>$result->data->id,
                        'title'=>$result->data->title,
                        'url_viewer'=>$result->data->url_viewer,
                        'url'=>$result->data->url,
                        'display_url'=>$result->data->display_url,
                        'width'=>$result->data->width,
                        'height'=>$result->data->height,
                        'size'=>$result->data->size,
                        'time'=>$result->data->time,
                        'expiration'=>$result->data->expiration,
                        'delete_url'=>$result->data->delete_url,
                        'created_by'=>Auth::id()
                    ];
                    if (isset($result->data->image))
                        $insert_data['image'] = json_encode($result->data->image);
                    if (isset($result->data->thumb))
                        $insert_data['thumb'] = json_encode($result->data->thumb);
                    if (isset($result->data->medium))
                        $insert_data['medium'] = json_encode($result->data->medium);
                    DB::table('imgbb_uploaded_images')->insert($insert_data);
                }
                else
                    $data['product_image'] = $image->get()->first()->url;
            }
        }

        if ($request->input('deals') == 'deal_island')
            return view('templates.description.show-deal-island')->with($data);
        if ($request->input('deals') == 'hubco_deals')
            return view('templates.description.show-hubco-deals')->with($data);
    }
}
