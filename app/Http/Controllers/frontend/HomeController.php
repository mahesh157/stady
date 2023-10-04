<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PopulerCourseModel;
use App\Models\latestnewsModel;
use App\Models\upcomingeventModel;


class HomeController extends Controller
{
    public function home(){

    return view('frontend.home');

    }
  public function PopularCourses(){
        $title ="Popular Course";
         $url =url('/Course_store');
         $data =compact('url','title');
    return view('backend.Popular_Courses')->with($data);
  }
  public function Course_store(Request $request)
{
     $request->validate([

        'course_name' => 'required',
        'course_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'course_rate' => 'required|integer',
        'course_vote' => 'required|integer',
        'course_by' => 'required|string',
     ]);
     $imagePath =$request->file('course_image')->store('public/uploads/image');

     $popularCourse = new PopulerCourseModel();
     $popularCourse->course_name = $request['course_name'];
     $popularCourse->course_image = $imagePath;
     $popularCourse->course_rate = $request['course_rate'];
     $popularCourse->course_vote = $request['course_vote'];
     $popularCourse->course_by = $request['course_by'];
     $popularCourse->save();

     return redirect()->route('backend.PopularShow_course');

}
public function PopularShowCourses(){
    $popularCourses = PopulerCourseModel::all();
    return view('backend.PopularShow_course', compact('popularCourses'));
}


public function delete($id)
{
    $popularCourse = PopulerCourseModel::find($id);
    if (!is_null($popularCourse)) {

        if ($popularCourse->course_image) {

            $imagePath = $popularCourse->course_image;
            \Storage::delete($imagePath);
        }
        $popularCourse->delete();
    }

    return redirect()->route('backend.PopularShow_course');
}

public function edit($id)
{
    $popularCourse = PopulerCourseModel::find($id);
    if (is_null($popularCourse)) {

        return redirect()->route('backend.PopularShow_course');
    }else{
        $title ="update Popular Course";
        $url =url('/popular/update/') ."/".$id;
        $data =compact('popularCourse','url','title');
        return view('backend.Popular_Courses')->with($data);
    }
}

public function update($id, Request $request)
{
    $popularCourse = PopulerCourseModel::find($id);
    if (is_null($popularCourse)) {
        return redirect()->route('backend.PopularShow_course');
    }
    $request->validate([
        'course_name' => 'required',
        'course_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'course_rate' => 'required|numeric',
        'course_vote' => 'required|numeric',
        'course_by' => 'required|string',
    ]);
    $popularCourse->course_name = $request->input('course_name');
    $popularCourse->course_rate = $request->input('course_rate');
    $popularCourse->course_vote = $request->input('course_vote');
    $popularCourse->course_by = $request->input('course_by');
    if ($request->hasFile('course_image')) {
        $newImageFile = $request->file('course_image');
        $newImageFileName = time() . '.' . $newImageFile->getClientOriginalExtension();

        $newImageFilePath = $newImageFile->storeAs('public/uploads/image', $newImageFileName);

        if ($popularCourse->course_image && Storage::exists($popularCourse->course_image)) {
            Storage::delete($popularCourse->course_image);
        }
        $popularCourse->course_image = $newImageFilePath;
    }
    $popularCourse->save();
    return redirect()->route('backend.PopularShow_course');
}



  // Latest News Controller
 public function latestnews(){
    $title ="latest News ";
    $url =url('/news_store');
    $data =compact('title','url');
    return view('backend.latestnews')->with($data);
 }


 public function newsStore(Request $request ){

    $request->validate([

        'news_name' => 'required',
        'news_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'news_description' => 'required|string',
        'news_date' => 'required|date',

     ]);
     $imagePath =$request->file('news_image')->store('storage/app/public/uploads/image/latestnews');

     $latestnews = new latestnewsModel();
     $latestnews->news_name = $request['news_name'];
     $latestnews->news_image =$imagePath;
     $latestnews->news_description = $request['news_description'];
     $latestnews->news_date = $request['news_date'];
     $latestnews->save();
     return redirect()->route('backend.latestnewsshow');

 }

public function latestnewsshow()
{
    $latestnews = latestnewsModel::all();
    return view('backend.latestnewsshow', compact('latestnews'));
}
public function latestdelete($id){

    $latestnews = latestnewsModel::find($id);
    if (!is_null($latestnews)) {

        if ($latestnews->news_image) {

            $imagePath = $latestnews->news_image;
            \Storage::delete($imagePath);
        }
        $latestnews->delete();
    }

    return redirect()->route('backend.latestnewsshow');

}


public function latestedit($id) {
    $latestnews = latestnewsModel::find($id);

    if (is_null($latestnews)) {
        return redirect()->route('backend.latestnewsshow');
    } else {
        $title ="update latest News ";
        $url =url('/latestnews/update/') ."/".$id;
        $data = compact('latestnews','title','url');
        return view('backend.latestnews')->with($data);
    }
}


public function latestupdate(Request $request, $id)
{
    $latestnews = latestnewsModel::find($id);

    if (is_null($latestnews)) {
        return redirect()->route('backend.latestnewsshow');
    }
    $request->validate([
        'news_name' => 'required',
        'news_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'news_description' => 'required|string',
        'news_date' => 'required|date',
    ]);
    $latestnews->news_name = $request->input('news_name');
    $latestnews->news_description = $request->input('news_description');
    $latestnews->news_date = $request->input('news_date');

    if ($request->hasFile('news_image')) {
        $newImageFile = $request->file('news_image');

        $newImageFileName = time() . '.' . $newImageFile->getClientOriginalExtension();

        $newImageFilePath = $newImageFile->storeAs('storage/app/public/uploads/image/latestnews', $newImageFileName);

        if ($latestnews->news_image && Storage::exists($latestnews->news_image)) {
            Storage::delete($latestnews->news_image);
        }

        $latestnews->news_image = $newImageFilePath;
    }
    $latestnews->save();

    return redirect()->route('backend.latestnewsshow');
}


//<-------------------------------------------upcoming Events Apis ---------------------------------------->

public function event(){
    $title = "Upcoming Events";
    $url = url('/Event_store');
    $data = compact('url', 'title');
    return view('backend.upcomingevent')->with($data);
}



public function EventStore(Request $request)
{
    $request->validate([
        'event_description' => 'required|string',
        'event_location' => 'required|string',
        'event_date' => 'required|date',
        'event_time' => 'required|date_format:H:i'
    ]);
    $upcomingevent = new upcomingeventModel();
    $upcomingevent->event_description = $request->input('event_description');
    $upcomingevent->event_location = $request->input('event_location');
    $upcomingevent->event_date = $request->input('event_date');
    $upcomingevent->event_time = $request->input('event_time');
    $upcomingevent->save();
    return redirect()->route('backend.upcomingeventshow');
}

public function upcomingshow()
{
    $upcomingevents = upcomingeventModel::all();
    return view('backend.upcomingeventshow', compact('upcomingevents'));
}

public function eventdelete($id)
{
    $upcomingevent = upcomingeventModel::find($id);

    if (!$upcomingevent) {

        return redirect('backend.upcomingeventshow');
    }
    $upcomingevent->delete();
    return redirect()->route('backend.upcomingeventshow');
}


public function eventedit($id){
    $upcomingevent = upcomingeventModel::find($id);
    if(is_null($upcomingevent)){
        return redirect()->route('backend.upcomingeventshow');
    } else {
        $title = "Update Event News";
        $url = url('/upcomingevent/update/' . $id);
        $data = compact('upcomingevent', 'title', 'url');
        return view('backend.upcomingevent')->with($data);
    }
}

public function eventupdate(Request $request, $id){

    $validatedData = $request->validate([
        'event_description' => 'required',
        'event_location' => 'required',
        'event_date' => 'required|date',
        'event_time' => 'required',
    ]);

    $upcomingevent = upcomingeventModel::find($id);
    if (!$upcomingevent) {
        return redirect()->route('backend.upcomingeventshow');
    }
    $upcomingevent->event_description = $validatedData['event_description'];
    $upcomingevent->event_location = $validatedData['event_location'];
    $upcomingevent->event_date = $validatedData['event_date'];
    $upcomingevent->event_time = $validatedData['event_time'];
    $upcomingevent->save();

    return redirect()->route('backend.upcomingeventshow');
}


}
