<?php

namespace App\Http\Controllers;

use App\Models\CvInformation;
use App\Models\PersonalMission;
use App\Models\User;
use http\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PersonalMissionController extends Controller
{
    public function personalMissionUser(): RedirectResponse
    {
        return redirect()->route('personalMissionDashboard');
    }
    public function personalMissionDashboard(): View
    {
        return view('personal_mission.user_mission');
    }
    public function personalMissionCreate(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $missionData = $request->only('user_id', 'personal_mission');
        $missionData['user_id'] = $user->id;
        PersonalMission::create($missionData);
        return redirect()->route('personalMissionUserView')->with(['success' => 'A new mission created successfully!']);
    }
    public function personalMissionAdminView(): View
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
            ->get();
        return view('personal_mission.admin_mission_view', compact('usersWithMissions'))->with('user', $user);
    }
    public function personalMissionUserView(): View
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();

        return view('personal_mission.user_mission_view', compact('usersWithMissions'));
    }
    public function personalMissionUserEditRequest(Request $request)
    {
        PersonalMission::where('id', $request->id)->update($request->only('edit_flag'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where([['users.id', '=', $user->id]])
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();
        return view('personal_mission.user_mission_view', compact('usersWithMissions'));
    }
    public function personalMissionAdminEditAcceptIgnoreRequest(Request $request)
    {
        if ($request->action == 'accept'){
            PersonalMission::where('id', $request->id)->update(['edit_flag'=>2]);
            $user = Auth::user();
            $usersWithMissions = DB::table('users')
                ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
                ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
                ->get();
            return view('personal_mission.admin_mission_view', compact('usersWithMissions'))->with('user', $user);
        }elseif ($request->action == 'ignore') {
            PersonalMission::where('id', $request->id)->update(['edit_flag'=>0]);
            $user = Auth::user();
            $usersWithMissions = DB::table('users')
                ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
                ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
                ->get();
            return view('personal_mission.admin_mission_view', compact('usersWithMissions'))->with('user', $user);
        }
    }
    public function personalMissionUserMissionEditDashboard(Request $request)
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag','monthly_rating')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();
        return view('personal_mission.user_personal_mission_edit_dashboard', compact('usersWithMissions'));
    }
    public function personalMissionUserMissionEdit(Request $request): View
    {
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission', 'edit_flag','monthly_rating'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag','monthly_rating')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();
        return view('personal_mission.user_mission_view', compact('usersWithMissions'));
    }
    public function personalMissionAdminMissionEditDashboard()
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();
        return view('personal_mission.admin_personal_mission_edit_dashboard', compact('usersWithMissions'));
    }
    public function usersMonthlyRatingView()
    {
        $user = Auth::user();
        $userMission = PersonalMission::where('user_id', $user->id)->orderBy('created_at', 'DESC')->first();
        $all_data = array($user, $userMission);
        $usersWithMissions = DB::table('users')
            ->leftJoin('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.*')
            ->get();
        return view('monthly rating.users_rating_view', compact('all_data'))->with('usersWithMissions', $usersWithMissions);
    }
    public function cvApplicationIndex()
    {
        return view('personal_mission.create-cv-form');
    }
    public function cvInformationStore(Request $request): RedirectResponse
    {
        $cvUserInfo = $request->only('full_name',
            'date_of_birth','about_me','street_address', 'city',
            'region','zip_code','country','email',
            'social_link','mobile_number','emergency_contact',
            'level_of_education','major_group','result_division_class',
            'marks','years_of_passing','institute_name','company_name',
            'company_business','designation','department','responsibility',
            'company_location','employment_period','highlights');
        $notification = array(
          'message' => 'your information has been submited',
          'alert-type' => 'success'
        );
        $cvUserInfo['user_id'] = Auth::id();
        CvInformation::create($cvUserInfo);
        return redirect()->route('completedCvView')->with($notification);
//        if ($cvUserInfo['user_id']= Auth::id()){
//            return redirect()->route('completedCvView');
//        }else{
//            back()->with(['false'=>'invalid user']);
//        }
    }
    public function createdCvView()
    {
        return view('personal_mission.complete-cv');
    }
}
