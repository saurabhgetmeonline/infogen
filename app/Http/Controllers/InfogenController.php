<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Banner;
use App\Models\Progress;
use App\Models\Industry;
use App\Models\Consultancy;
use App\Models\Career;
use App\Models\About;
use App\Models\Term_condition;
use App\Models\GDPR_policy;
use App\Models\Privacy_policy;
use App\Models\Report_category;
use App\Models\Report_view;
use App\Models\Insight;
use App\Models\Faq;
use App\Models\Insight_post;
use App\Models\Insight_category;
use App\Models\Why_choose_us;
use App\Models\Home_first_section;
use App\Models\Career_page;
use App\Mail\Request_Sample;
use App\Mail\Request_Customization;







class InfogenController extends Controller
{
    //
    public function homepage(){
        $data = array(
            'banners'=>Banner::all(),
            'progress'=>Progress::all(),
            'report_categories' => Report_category::all(),
            'report_views'=>Report_view::take(3)->get(),
            'industries'=>Industry::all(),
            'consulties'=>Consultancy::all(),
            'home_first_section' => Home_first_section::all(),

        );
        return view("users.index",$data);
    }
    public function career(){
        $data = array(
            'careers'=>Career::all(),
            'career_page' => Career_page::all(),
        );
        return view("users.careers",$data);
    }

    public function jobdetail($slug){
        $data = array(
            'careers'=>Career::where('slug',$slug)->first(),
        );
        return view("users.jobdetail",$data);
    }

    public function contact(){
        return view("users.contact-us");
    }
    public function send(Request $request)
    {
        //
        $this->validate($request,[
           'fullname' => 'required',
           'email' => 'required|email',
           'companyname' => 'required',
           'jobtitle' => 'required',
           'subject' => 'required',
           'country' => 'required',
           'message' => 'required',
           'phoneno' => 'required',
        ]);
        $data = array(
            'fullname' => $request->fullname,
            'email' => $request->email,
            'companyname' => $request->companyname,
            'jobtitle' => $request->jobtitle,
            'subject' => $request->subject,
            'country' => $request->country,
            'message' => $request->message,
            'phoneno' => $request->phoneno
        );
        Mail::to('sales@infogenceglobalresearch.com')->send(new Contact($data));
        return back()->with('success','Thanks for contacting us!');
    }

    public function about(){
        $data = array(
            'abouts'=>About::all(),
        );
        return view("users.about-us",$data);
    }

    public function privacy(){
        $data = array(
            'privacy_policies'=>Privacy_policy::all(),
        );
        return view("users.privacy",$data);
    }

    public function term(){
        $data = array(
            'term_conditions'=>Term_condition::all(),
        );
        return view("users.terms",$data);
    }
    
    public function gdpr(){
        $data = array(
            'gdpr_policies'=>GDPR_policy::all(),
        );
        return view("users.gdpr",$data);
    }

    public function report(Request $request){
        $search = $request->input('search'); // Update input field name to 'search'
        $report_views_query = Report_view::query();
        if ($search) {
            $report_views_query->where('heading', 'LIKE', "%$search%");
        }
        $report_views = $report_views_query->paginate(2);
        // return $report_views;
        $data = [
            'report_categories' => Report_category::all(),
            'report_views' => $report_views,
            'search' => $search, // Pass the $search variable to the view
        ];
            return view("users.reports",$data);
    }

    
   public function reportpost(Report_category $report_categories,$slug){
       $id = Report_category::where('slug',$slug)->pluck('report_category_id');
       $report_views = Report_view::where('category_id', $id)->paginate(2);
        $data = array(
                'report_categories'=>Report_category::get(),
                'report_views'=>$report_views
            );
            // return $data;
            return view("users.reports",$data);
    }

    
    public function reportview($id,$slug){
        $data = array(
            'report_categories'=>Report_category::find($id),
            'report_views'=>Report_view::where('slug',$slug)->first(),
            'why_choose_us' => Why_choose_us::all(),
        );
        return view("users.reports-view",$data);
    }

     public function payment(Request $request,$id){
         $report_views = Report_view::find($id);
         $category = $report_views->category;
         $slug = $report_views->slug;

        $payment = str_replace('$','',$request->payment);
         if($payment == $report_views->single_user_license){

            $licenseType = "Single User License";

         }else if($payment == $report_views->multi_user_license){
            $licenseType = "Multi User License";

         }else{
            $licenseType = "Enterprize User License";
         }

        $selectedPayment = $request->input('payment');

        $data = array(
            'report_views'=>$report_views,
            'licenseType'=>$licenseType,
            'selectedPayment'=>$selectedPayment,
        );
        return view("users.payment",$data);
    }


    public function insight(Insight_post $insight_posts){
        $data = array(
            'insights'=>Insight::all(),
            'insight_posts'=>Insight_post::take(2)->get(),
            'related_posts'=>Insight_post::where('insight_post_id','!=',$insight_posts->insight_post_id)->inRandomOrder()->take(3)->get(),
            'other_posts'=>Insight_post::where('insight_post_id','!=',$insight_posts->insight_post_id)->inRandomOrder()->take(4)->get(),
        );
        return view("users.insights",$data);
    }


    public function faqs(){
        $data = array(
            'faqs'=>Faq::all(),
        );
        return view("users.faqs",$data);
    }


      public function insightpostdetail(Request $request,Insight_post $insight_posts,$slug){
        $search = $request->input('search'); // Update input field name to 'search'
        $report_views_query = Report_view::query();
        if ($search) {
            $report_views_query->where('category', 'LIKE', "%$search%");
        }
        $data = array(
            'insight_posts'=>Insight_post::where('slug',$slug)->first(),
             'related_posts'=>Insight_post::where('insight_post_id','!=',$insight_posts->insight_post_id)->inRandomOrder()->take(3)->get(),
            'insight_categories'=>Insight_category::all(),
            'search' => $search,
            'why_choose_us' => Why_choose_us::all(),
        );
        return view("users.insights-detail",$data);
    }

    public function insightcategory($slug){
        $data = array(
            'insight_categories'=>Insight_category::where('slug',$slug)->first(),
        );
        return view("users.insights-detail",$data);
    }
public function requestsample($id){
        $report_views = Report_view::find($id);
        return view("users.request-sample")->with('report_views',$report_views);
    }
    public function requestsamplesend(Request $request)
    {
        //
        $this->validate($request,[
           'fullname' => 'required',
           'email' => 'required|email',
           'companyname' => 'required',
           'jobrole' => 'required',
           'country' => 'required',
           'message' => 'required',
           'phoneno' => 'required',
           'securitycode' => 'required',

        ]);
        $data = array(
            'fullname' => $request->fullname,
            'email' => $request->email,
            'companyname' => $request->companyname,
            'jobrole' => $request->jobrole,
            'country' => $request->country,
            'message' => $request->message,
            'phoneno' => $request->phoneno,
            'securitycode' => $request->securitycode
        );
        Mail::to('sales@infogenceglobalresearch.com')->send(new Request_Sample($data));
        return back()->with('success','Thank You!!! ');
    }


    public function requestcustomization($id){
        $report_views = Report_view::find($id);
        return view("users.request-customization")->with('report_views',$report_views);
    }
    public function requestcustomizationsend(Request $request)
    {
        //
        $this->validate($request,[
           'fullname' => 'required',
           'email' => 'required|email',
           'companyname' => 'required',
           'jobrole' => 'required',
           'country' => 'required',
           'message' => 'required',
           'phoneno' => 'required',
           'securitycode' => 'required',

        ]);
        $data = array(
            'fullname' => $request->fullname,
            'email' => $request->email,
            'companyname' => $request->companyname,
            'jobrole' => $request->jobrole,
            'country' => $request->country,
            'message' => $request->message,
            'phoneno' => $request->phoneno,
            'securitycode' => $request->securitycode
        );
        Mail::to('sales@infogenceglobalresearch.com')->send(new Request_Customization($data));
        return back()->with('success','Thank You!!! ');
    }

}