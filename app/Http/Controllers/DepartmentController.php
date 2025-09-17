<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display the department homepage
     */
    public function index()
    {
        return view('department.index');
    }

    /**
     * Display About the Department page
     */
    public function about()
    {
        return view('department.about');
    }

    /**
     * Display HoD's message page
     */
    public function hodMessage()
    {
        return view('department.hod-message');
    }

    /**
     * Display Vision, Mission and Objectives page
     */
    public function visionMission()
    {
        return view('department.vision-mission');
    }

    /**
     * Display Programs and Courses page
     */
    public function programs()
    {
        return view('department.programs');
    }

    /**
     * Display Learning Resources page
     */
    public function learningResources()
    {
        return view('department.learning-resources');
    }

    /**
     * Display Faculty Profile page
     */
    public function faculty()
    {
        return view('department.faculty');
    }

    /**
     * Display Research and Publication Profile page
     */
    public function research()
    {
        return view('department.research');
    }

    /**
     * Display Student Projects page
     */
    public function studentProjects()
    {
        return view('department.student-projects');
    }

    /**
     * Display Admission Activities page
     */
    public function admission()
    {
        return view('department.admission');
    }

    /**
     * Display IQAC Documents page
     */
    public function iqac()
    {
        return view('department.iqac');
    }

    /**
     * Display Placement Activities page
     */
    public function placement()
    {
        return view('department.placement');
    }

    /**
     * Display Faculty Achievements page
     */
    public function facultyAchievements()
    {
        return view('department.faculty-achievements');
    }

    /**
     * Display Student Achievements page
     */
    public function studentAchievements()
    {
        return view('department.student-achievements');
    }

    /**
     * Display Alumni page
     */
    public function alumni()
    {
        return view('department.alumni');
    }
}
