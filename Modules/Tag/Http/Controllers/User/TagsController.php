<?php

namespace Modules\Tag\Http\Controllers\User;

use App\Authorizable;
use App\Http\Controllers\User\UserBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Modules\Tag\Enums\TagStatus;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class TagsController extends UserBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Tags';

        // module name
        $this->module_name = 'tags';

        // directory path of the module
        $this->module_path = 'tag::user';

        // module icon
        $this->module_icon = 'fa-regular fa-tag';

        // module model name, path
        $this->module_model = "Modules\Tag\Models\Tag";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $validated_data = $request->validate([
            'name' => 'required|max:191',
            'slug' => 'nullable|max:191',
            'description' => 'nullable|max:191',
            'status' => Rule::enum(TagStatus::class),
            'order' => 'nullable|integer',
        ]);

        $data = $validated_data;
        $data['created_by_name'] = auth()->user()->name;

        $$module_name_singular = $module_model::create($data);
        
        flash(Str::singular($module_title)."' Added Successfully")->success()->important();
        
        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);
        
        return redirect("user/{$module_name}");
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);

        $posts = $$module_name_singular->posts()->latest()->paginate();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "{$module_path}.{$module_name}.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action', "{$module_name_singular}", 'posts')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        $validated_data = $request->validate([
            'name' => 'required|max:191',
            'slug' => 'nullable|max:191',
            'description' => 'nullable|max:191',
            'status' => Rule::enum(TagStatus::class),
            'order' => 'nullable|integer',
        ]);

        $data = $validated_data;

        $$module_name_singular = $module_model::findOrFail($id);

        // Check if user owns this tag
        if ($$module_name_singular->created_by !== auth()->id()) {
            flash('You are not authorized to update this tag')->error()->important();
            return redirect("user/{$module_name}");
        }

        $$module_name_singular->update($data);

        flash(Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect()->route("user.{$module_name}.show", $$module_name_singular->id);
    }

    /**
     * Get data for datatable
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function index_data()
    // {
    //     $module_title = $this->module_title;
    //     $module_name = $this->module_name;
    //     $module_path = $this->module_path;
    //     $module_icon = $this->module_icon;
    //     $module_model = $this->module_model;
    //     $module_name_singular = Str::singular($module_name);

    //     $module_action = 'List';

    //     $$module_name = $module_model::select('id', 'name', 'updated_at')
    //         ->where('created_by', auth()->id());

    //     return Datatables::of($$module_name)
    //         ->addColumn('action', function ($data) {
    //             $module_name = $this->module_name;
    //             return view('frontend.includes.action_column', compact('module_name', 'data'));
    //         })
    //         ->editColumn('name', '<strong>{{$name}}</strong>')
    //         ->editColumn('updated_at', function ($data) {
    //             $module_name = $this->module_name;
    //             $diff = Carbon::now()->diffInHours($data->updated_at);
    //             if ($diff < 25) {
    //                 return $data->updated_at->diffForHumans();
    //             }
    //             return $data->updated_at->isoFormat('llll');
    //         })
    //         ->rawColumns(['name', 'action'])
    //         ->orderColumns(['id'], '-:column $1')
    //         ->make(true);
    // }
} 