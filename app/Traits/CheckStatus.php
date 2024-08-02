<?php

namespace App\Traits;

trait CheckStatus
{
    /**
     * Check if the request is cleared and update the status accordingly.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|null
     */
    public function taskIsClear($model, $request)
    {
        if ($request->cleared) {
            $model->update([
                'status' => 'cleared'
            ]);
            return redirect()->back();
        }

        return null;
    }

    public function redirectIfConflict($model)
    {
        if($model->status != 'new') {
            return redirect(url("requests/{$model->slug}?failQuery=true"));
        }
    }
}