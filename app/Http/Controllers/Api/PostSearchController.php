<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostSearchController extends Controller
{
    public function search(Request $request)
    {
        $anyFilter = false;
        $posts = Post::where('is_approved_by_admin',1)
        ->where('active', 1)
        ->with(['user', 'user.freelancer'])
        ->whereHas('user', function($q) {
            $q->where('active', 1)
            ->where('active_publisher', 1);
        });

        if($request->search){
            $anyFilter = true;
            $posts = $posts->where(function($query) use ($request) {
                $query->where('description', 'like',  '%' . $request->search . '%')
                    ->orWhere('title', 'like',  '%' . $request->search . '%')
                    ->orWhereHas('user', function($query1) use($request ){
                        $query1->whereRaw("CONCAT(`first_name`, ' ', `last_name`) like '%" . $request->search . "%'");
                    })
                    ->orWhereHas('user.freelancer', function($query1) use($request ){
                        $query1->where('description', 'like',  '%' . $request->search . '%')
                        ->orWhere('skills_experience', 'like',  '%' . $request->search . '%')
                        ->orWhere('job_title', 'like',  '%' . $request->search . '%');
                    });
                });
            // where(function($query) use ($request) {
            //     $query->where('description', 'like',  '%' . $request->search . '%')
            //     ->orWhere('title', 'like',  '%' . $request->search . '%')
            //     ->orWhere('user.description', 'like',  '%' . $request->search . '%');            
            // });
        }

        if($request->min_hourly_rate){
            $anyFilter = true;
            $posts = $posts->whereHas('user.freelancer', function($query) use($request ){
                $query->where('hourly_rate', '>=', $request->min_hourly_rate);
            });
        }

        if($request->max_hourly_rate){
            $anyFilter = true;
            $posts = $posts->whereHas('user.freelancer', function($query) use($request ){
                $query->where('hourly_rate', '<=', $request->max_hourly_rate);
            });
        }

        if($request->availability){
            $anyFilter = true;
            $posts = $posts->whereHas('user.freelancer', function($query) use($request ){
                $query->where('full_time', $request->availability);
            });
        }

        if($request->verified){
            $anyFilter = true;
            $posts = $posts->whereHas('user.freelancer', function($query) use($request ){
                $query->where('verification_level', $request->verified);
            });
        }

        if($request->skill){
            $anyFilter = true;
            $posts = $posts->where('skills', $request->skill);
        }

        if($request->experience){
            $anyFilter = true;
            $posts = $posts->whereHas('user.freelancer', function($query) use($request ){
                $query->where('years_experience', $request->experience);
            });
        }
        //dd($posts->toSql());

        $posts = $posts->orderByDesc('updated_at')->get();

        return [
            'message' => 'success',
            'data' => PostResource::collection($posts),
        ];
    }
      public function searchMobile(Request $request)
    {
        $posts = Post::where('is_approved_by_admin',1)
        ->where('active', 1)
        ->with('user')
        ->whereHas('user', function($q) {
            $q->where('active', 1)
            ->where('active_publisher', 1);
        });
      
        if($request->state_id != -1){
            $posts = $posts->where('state_id', $request->state_id);
        }

        if($request->breed_id != -1 ){
            $posts = $posts->where('breed_id', $request->breed_id);
        }

        if($request->sex != -1){
            $posts = $posts->where('sex', $request->sex);
        }

        if($request->age != -1){
            $posts = $posts->where('age', $request->age);
        }

        if($request->energy_level != -1){
            $posts = $posts->where('energy_level', $request->energy_level);
        }

        if($request->size != -1 ){
            $posts = $posts->where('size', $request->size);
        }

        if($request->color_id != -1){
            $posts = $posts->where('color_id', $request->color_id);
        }

        if($request->search != -1 ){
            $posts = $posts->where('description', 'like',  '%' . $request->search . '%');
        }
        
        $posts = $posts->get();

        return [
            'message' => 'success',
            'data' => PostResource::collection($posts),
        ];
    }
    public function searchGuest(Request $request)
    {
        $posts = Post::where('is_approved_by_admin',1);

        if($request->state_id){
            $posts = $posts->where('state_id', $request->state_id);
        }

        if($request->sex){
            $posts = $posts->where('sex', $request->sex);
        }

        if($request->age){
            $posts = $posts->where('age', $request->age);
        }

        if($request->energy_level){
            $posts = $posts->where('energy_level', $request->energy_level);
        }

        if($request->size){
            $posts = $posts->where('size', $request->size);
        }

        if($request->breed_id){
            $posts = $posts->where('breed_id', $request->breed_id);
        }

        if($request->color_id){
            $posts = $posts->where('color_id', $request->color_id);
        }

        if($request->search){
            $posts = $posts->where('description', 'like',  '%' . $request->search . '%');
        }
        
        $posts = $posts->get();

        return [
            'message' => 'success',
            'data' => PostResource::collection($posts),
        ];
    }
}
