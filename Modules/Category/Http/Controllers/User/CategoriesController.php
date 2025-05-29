<?php

namespace Modules\Category\Http\Controllers\User;

use App\Authorizable;
use App\Http\Controllers\User\UserBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Modules\Category\Enums\CategoryStatus;

class CategoriesController extends UserBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Categories';

        // module name
        $this->module_name = 'categories';

        // directory path of the module
        $this->module_path = 'category::user';

        // module icon
        $this->module_icon = 'fa-regular fa-folder';

        // module model name, path
        $this->module_model = "Modules\Category\Models\Category";
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
            'status' => Rule::enum(CategoryStatus::class),
            'parent_id' => 'nullable|integer',
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
            'status' => Rule::enum(CategoryStatus::class),
            'parent_id' => 'nullable|integer',
            'order' => 'nullable|integer',
        ]);

        $data = $validated_data;

        $$module_name_singular = $module_model::findOrFail($id);

        // Check if user owns this category
        if ($$module_name_singular->created_by !== auth()->id()) {
            flash('You are not authorized to update this category')->error()->important();
            return redirect("user/{$module_name}");
        }

        $$module_name_singular->update($data);

        flash(Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect()->route("user.{$module_name}.show", $$module_name_singular->id);
    }

} 