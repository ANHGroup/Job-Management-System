<?php

namespace App\Rules;

use App\Models\AppliedJob;
use Illuminate\Contracts\Validation\Rule;

class UniqueJobIDEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $rules = [
            'job_id' => 'required',
            'email' => ['required', 'email', new UniqueJobEmail],
        ];
        $jobId = request()->input('job_id');
        $email = request()->input('email');

        return AppliedJob::where('job_id', $jobId)
            ->where('email', $email)
            ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
